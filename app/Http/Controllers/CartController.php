<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Models\AreaCode;
use App\Models\CallForwarding;
use App\Models\Order;
use App\Models\Plan;
use App\Models\Coupon;
use App\Models\Voxucm;
use App\Models\Voxucm\VoxTenant;
use App\Services\ExtensionService;
use Illuminate\Http\Request;
use Stripe;

class CartController extends Controller
{
    /**
     * cart page
     */
    public function cart()
    {
        $orders = request()->user()->orders()->with('product')->where('order_status', OrderStatus::UNPAID)->get();
        // $codes = AreaCode::orderBy('city')->get();

        return view('cart', [
            'orders' => $orders,
            'total' => number_format($orders->sum('price'), 2),
            'codes' => []
        ]);
    }

    /**
     * checkout page
     */
    public function checkout()
    {
        $orders = request()->user()->orders()->with('product')->where('order_status', OrderStatus::UNPAID)->get();

        return view('checkout', [
            'orders' => $orders,
            'total' => number_format($orders->sum('price'), 2),
        ]);
        return view('checkout');
    }

    // Save records
    public function saveRecords(Request $request)
    {
        $orders = request()->user()->orders()->where('order_status', 'Unpaid')->get();
        $plan = request()->user()->orders()->whereNotNull('product_id')->where('order_status', 'Unpaid')->first();

        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        // $payment = Stripe\Charge::create([
        //     "amount" => 100 * $request->price,
        //     "currency" => "eur",
        //     "source" => $request->stripeToken,
        //     "description" => "Phone Locally Package Payment."
        // ]);

        // making order status as Paid in DB
        foreach ($orders as $order) {
            $order->update(['order_status' => 'Paid', 'payment_id' => 456, 'invoiced' => now()]);
            $order->billdetail()->create($request->all());
            $order->prisonerdetail()->create($request->all());
        }
        // updating user plan
        if ($plan) {
            $lines = $plan->product->lines;
            request()->user()->plan()->create([
                'product_id' => $plan->product->id,
                // 'expired_at' => now()->addMonth($plan->product->month),
                'expired_at' => now()->addDays($plan->product->month * 30)->toDateTimeString(),
                'month' => $plan->product->month,
                'minutes' => $plan->product->minutes,
                'allowed_dids' => $lines,
            ]);

            // $voxUser = VoxTenant::where('tenant_id', request()->user()->vox_user->tenant_id);

            // // updating max extension limit and balance of voxucm user
            // $previousExt = $voxUser->first()->max_extension;
            // $newExtLimit = $previousExt + $lines;

            // $prevousBalnace = $voxUser->first()->credit;
            // $newBalance = $prevousBalnace + $request->price;
            // $voxUser->update(['max_extension' => $newExtLimit, 'credit' => $newBalance]);

            // // checking how many extension user already have
            // $extensions = count((new ExtensionService())->getExtensions());
            // // creating number of extension equals to lines purchased in voxucm
            // for ($i = 0 + $extensions; $i < $lines + $extensions; $i++) {
            //     $prefix = $i + 1;
            //     $values = [
            //         'name' => request()->user()->name . ' ' . $prefix,
            //         'extension' => request()->user()->name . ' ' . $prefix,
            //         'password' => request()->user()->vox_user->api_password,
            //     ];
            //     $data = (new ExtensionService())->addExtension($values);
            //     $data = json_decode($data, true);
            //     if ($data["STATUS"] === "SUCCESS") {
            //         $username = $data['DATA']["USERNAME"];
            //         $id = $data['DATA']["EXTENSIONID"];
            //         // adding call forwarding for created extension
            //         $postdata  = array(
            //             'SIPUSER' => $username,
            //             'SECTION' => 'FORWARDING',
            //             'ACTION' => 'NORMAL',
            //             'DATA' => array('FW_ENABLE' => '1', 'ALLWAYS' => request()->user()->phone)
            //         );
            //         $res = Voxucm::curlRequest($postdata);
            //         $res = json_decode($res, true);
            //         if ($res["STATUS"] === "SUCCESS") {
            //             CallForwarding::create([
            //                 'subscriber_id' => $id,
            //                 'call_type' => 'ALLFORWARD',
            //                 'destination_number' => request()->user()->phone,
            //                 'status' => true
            //             ]);
            //         }
            //     } else {
            //         dd($data);
            //     }
            // }
            // // updating extension detail in db
            // request()->user()->vox_user()->update([
            //     'extension' => $username
            // ]);
        }


        // BillDetail::create($request->all());
        // PrisonerDetail::create($request->all());

        return redirect()->route('user.dashboard')->with('success', "Payment has been successfully done.");
    }

    // apply coupon code to cart
    public function coupon(Request $request)
    {
        $promo = Coupon::where('name', $request->coupon)->first();
        if ($promo && $promo->status) {
            return response([
                'error' => false,
                'message' => 'coupon code applied',
                'discount' => $promo->value,
            ]);
        } else {
            return response([
                'error' => true,
                'message' => 'invalid coupon code',
            ]);
        }
    }
}
