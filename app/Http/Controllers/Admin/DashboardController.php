<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Roles;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Package;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role_id', Roles::USER);
        // top bar statistics
        $data['total_earnings'] = Order::sum('price');
        // $data['subscriptions_count'] = Subscription::count();
        $data['subscriptions_count'] = 0;
        $data['orders_count'] = Order::count();
        $data['users_count'] = $users->count();

        // this month statistics
        $month_start = now()->startOfMonth();
        $month_end = now()->endOfMonth();
        $data['month_earning'] = Order::whereBetween('created_at', [$month_start, $month_end])->sum('price');
        $data['month_percentage'] = $data['total_earnings'] !== 0 ? ceil(($data['month_earning'] / $data['total_earnings']) * 100) : 0;

        // this quarter statistics
        $quarter_start = now()->firstOfQuarter();
        $quarter_end = now()->lastOfQuarter();
        $data['quarter_earning'] = Order::whereBetween('created_at', [$quarter_start, $quarter_end])->sum('price');
        $data['quarter_percentage'] = $data['total_earnings'] !== 0 ? ceil(($data['quarter_earning'] / $data['total_earnings']) * 100) : 0;

        // this quarter statistics
        $year_start = now()->firstOfYear();
        $year_end = now()->lastOfYear();
        $data['year_earning'] = Order::whereBetween('created_at', [$year_start, $year_end])->sum('price');
        $data['year_percentage'] = $data['total_earnings'] !== 0 ? ceil(($data['year_earning'] / $data['total_earnings']) * 100) : 0;

        // chart statistics
        // $data['charts'] = Order::get()->map(function ($order) {
        //     return [
        //         'date' => $order->created_at->format('Y-m-d'),
        //         'value' => rand(100, 150)
        //     ];
        // });
        $data['charts'] = Order::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as value'))
            ->groupBy('date')
            ->get();
        // dd($data['charts']);

        // packages
        $data['packages'] = Package::take(3)->get();

        // latest 10 users
        $data['users'] = $users->latest()->take(5)->get();

        return view('admin.dashboard', compact('data'));
    }
}
