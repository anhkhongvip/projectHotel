<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lsOrder = order::paginate(8);
        $open_order = order::where('status', '=', 0)->count();
        $complete_order = order::where('status', '!=', 2)->count();
        $cancel_order = order::where('status', '=', 2)->count();
        $total_user = User::all()->count();
        $total_earn_order = DB::select("Select sum(total) as total_money from orders");
//        dd($total_earn_order);
        return view('home')->with(['lsOrder' => $lsOrder,
                                        'total_user' => $total_user,
                                        'complete_order' => $complete_order,
                                        'cancel_order' => $cancel_order,
                                        'total_earn_order' => $total_earn_order,
                                        'open_order' => $open_order
                                       ]);
    }

}
