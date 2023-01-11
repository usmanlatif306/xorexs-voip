<?php

namespace App\Http\Controllers\Voip;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Did;
use App\Models\Order;

class DidController extends Controller
{
    public function index()
    {
        $plan = auth()->user()->plan;

        $numbers = request()->user()->numbers()->with('did')->get();

        return view('user.dids.index', compact('numbers', 'plan'));
    }
    // purchase
    public function countries()
    {
        $countries = Country::all();
        return view('user.dashboard.did.create', compact('countries'));
    }

    // cities
    public function cities()
    {
        $cities = City::paginate(10);
        return view('user.dids.cities', compact('cities'));
    }

    // dids
    public function dids(City $city)
    {
        $dids = $city->dids()->with('city')->where('status', false)->get();
        return view('user.dids.dids', compact('dids'));
    }

    // purchase Did
    public function purchase(Did $did)
    {
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'did_id' => $did->id,
            'price' => $did->price,
        ]);
        $allowed = auth()->user()->plan->allowed_dids;
        if ($allowed  !== 0) {
            $order->update(['order_status' => "Paid"]);
            request()->user()->plan()->update(['allowed_dids' => $allowed - 1]);
        }

        $did->update(['status' => true]);

        return redirect()->route('user.did.index');
    }

    // delete a did
    public function delete(Order $order)
    {
        $did = Did::where('dialing_code', $order->did->dialing_code)->first();
        $did->update(['status' => false]);
        $order->delete();

        $count = request()->user()->numbers()->count();
        $allowed = auth()->user()->plan->allowed_dids;
        if ($count < (int)auth()->user()->plan->product->lines) {
            request()->user()->plan()->update(['allowed_dids' => $allowed + 1]);
        }
        return back()->with('success', 'Did deleted successfully');
    }
}
