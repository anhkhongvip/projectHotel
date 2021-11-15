<?php

namespace App\Http\Controllers;

use App\Mail\B52HotelMail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Models\customer;
use App\Models\order;
use App\Models\order_room;
use App\Models\order_service;
use App\Models\room;
use App\Models\rooms_type;
use App\Models\service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        $lsOrder = order::paginate(10);
        $search_name = $request->search_name;
        if (isset($search_name)){
            $lsOrder = order::query()
                            ->Where('id','like','%'.$search_name.'%')
                            ->paginate(5);
//            $lsOrder = DB::select("Select * from orders where customer_id IN (select id from customers where name like '$search_name')")->paginate(5);
        }
        else {
            $lsOrder = order::paginate(5);
        }
        return view('admin.booking.index')->with(['lsOrder' => $lsOrder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service_list = service::all();
        $roomtype = rooms_type::all();
        $room_list = room::all();
        $date = Carbon::now();
        $date = $date->format("Y-m-d");
        return view('admin.booking.add')->with(['roomtype' => $roomtype, 'room_list' => $room_list, 'service_list' => $service_list, 'date' => $date]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $check_in = $request->checkin;
//        $check_out = $request->checkout;
//        $test = DB::select("select distinct room_id from orders where check_in_date <= '$check_in' and check_out_date >= '$check_out'
//                                                                                    or check_in_date >= '$check_in' and check_in_date <= '$check_out'
//                                                                                    or check_out_date >= '$check_in' and check_out_date <= '$check_out' and status = 0");
//        dd($test);

        $todayDate = date('Y-m-d');
        $request->validate([
            'customer_name' => 'required|min:3|max:191',
            'customer_email' => 'required',
            'customer_phone' => 'required',
            'check-in-date'    => 'required|date|date_format:Y-m-d|after_or_equal:'.$todayDate,
            'check-out-date'      => 'required|date|after:check-in-date',
        ]);

        $check_in_date = $request->input('check-in-date');
        $check_out_date = $request->input('check-out-date');
        $customer = new customer();
        $order = new order();

        $order->total = $request->input('dm-ecom-product-total');
        $customer->name = $request->input('customer_name');
        $customer->email = $request->input('customer_email');
        $customer->phone = $request->input('customer_phone');

        $customer->save();
        $newest_customer = customer::orderBy('created_at', 'desc')->first();
        $id_room = $request->input('dm-ecom-product-room');
//        $room = room::find($id_room);
//        $room->status = 1;
//        $room->save();
        $room_id = $request->input('dm-ecom-product-room');
        $order->room_id = $room_id;
        $order->customer_id = $newest_customer->id;
        $order->check_in_date = $check_in_date;
        $order->check_out_date = $check_out_date;
        $order->save();
        $ls_service_id = $request->input('service');

        $newest_order = order::orderBy('created_at', 'desc')->first();
        if(isset($ls_service_id))
        {
            for ($i=0;$i<count($ls_service_id);$i++)
            {
                $split = explode('|', $ls_service_id[$i]);
                $orderService = new order_service();
                $orderService->service_id = $split[0];
                $orderService->order_id = $newest_order->id;
                $orderService->save();
            }
        }
        \Mail::to($customer->email)->send(new \App\Mail\B52HotelMail());
        return redirect(route("booking.index"));
    }

    public function storeUser(Request $request)
{
//        $check_in = $request->checkin;
//        $check_out = $request->checkout;
//        $test = DB::select("select distinct room_id from orders where check_in_date <= '$check_in' and check_out_date >= '$check_out'
//                                                                                    or check_in_date >= '$check_in' and check_in_date <= '$check_out'
//                                                                                    or check_out_date >= '$check_in' and check_out_date <= '$check_out' and status = 0");
//        dd($test);

    $todayDate = date('Y-m-d');
    $request->validate([
        'customer_name' => 'required|min:3|max:191',
        'customer_email' => 'required',
        'customer_phone' => 'required',

        'check-in-date'    => 'required|date|date_format:Y-m-d|after_or_equal:'.$todayDate,
        'check-out-date'      => 'required|date|after:check-in-date',
    ]);

    $check_in_date = $request->input('check-in-date');
    $check_out_date = $request->input('check-out-date');
    $customer = new customer();
    $order = new order();

    $order->total = $request->input('dm-ecom-product-total');
    $customer->name = $request->input('customer_name');
    $customer->email = $request->input('customer_email');
    $customer->phone = $request->input('customer_phone');
//      Send mail
//        $data = array(
//            'name' => $request->name,
//            'phone' => $request->phone
//        );
//        $mail = new \App\Mail\B52HotelMail($data);
//        \Mail::to($request->email_address)->send($mail);

    $customer->save();


    $newest_customer = customer::orderBy('created_at', 'desc')->first();
    $id_room = $request->input('dm-ecom-product-room');
//        $room = room::find($id_room);
//        $room->status = 1;
//        $room->save();
    $room_id = $request->input('dm-ecom-product-room');
    $order->room_id = $room_id;
    $order->customer_id = $newest_customer->id;
    $order->check_in_date = $check_in_date;
    $order->check_out_date = $check_out_date;
    $order->save();
    $ls_service_id = $request->input('service');

    $newest_order = order::orderBy('created_at', 'desc')->first();
    if(isset($ls_service_id))
    {
        for ($i=0;$i<count($ls_service_id);$i++)
        {
            $split = explode('|', $ls_service_id[$i]);
            $orderService = new order_service();
            $orderService->service_id = $split[0];
            $orderService->order_id = $newest_order->id;
            $orderService->save();
        }
    }

        //                Send mail
//        $sumService = DB::select("Select sum(total) from order_services where order_id in (SELECT id from orders WHERE created_at = (SELECT max(created_at) FROM orders)) group by order_id");

        $details = array(
            'name' => $customer->name,
            'room_name' => $order->room->name,
            'excerpt' => $order->room->excerpt,
            'price' => $order->room->rooms_type->price,
            'room_image' => $order->room->image,
            'check_in_date' => $order->check_in_date,
            'check_out_date' => $order->check_out_date,
            'total' => $order->total,
//            'services' => $order->order_service->sum()
        );
        $mail = new \App\Mail\B52HotelMail($details);
//        \Mail::to($request->email)->send(new \App\Mail\B52HotelMail());
    \Mail::to($customer->email)->send($mail);
    return redirect(route("bookingSuccess"));
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = order::find($id);
        $service_list = service::all();
        $roomtype = rooms_type::all();
        $room_list = room::all();
        $date = Carbon::now();
        $date = $date->format("Y-m-d");
        return view('admin.booking.edit')->with(['order' => $order, 'roomtype' => $roomtype, 'room_list' => $room_list, 'service_list' => $service_list, 'date' => $date]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $current_order = order::find($id);
        $todayDate = date('Y-m-d');
        $request->validate([
            'customer_name' => 'required|min:3|max:191',
            'customer_email' => 'required',
            'customer_phone' => 'required',

            'check-in-date'    => 'required|date|date_format:Y-m-d|after_or_equal:'.$todayDate,
            'check-out-date'      => 'required|date|after_or_equal:check-in-date',
        ]);

        $check_in_date = $request->input('check-in-date');
        $check_out_date = $request->input('check-out-date');
        $customer = new customer();
        $order = new order();

        $order->total = $request->input('dm-ecom-product-total');
        $customer->name = $request->input('customer_name');
        $customer->email = $request->input('customer_email');
        $customer->phone = $request->input('customer_phone');
        $customer->save();
        $newest_customer = customer::orderBy('created_at', 'desc')->first();
        $id_room = $request->input('dm-ecom-product-room');
//        $room = room::find($id_room);
//        $room->status = 1;
//        $room->save();
        $room_id = $request->input('dm-ecom-product-room');
        $order->room_id = $room_id;
        $order->customer_id = $newest_customer->id;
        $order->check_in_date = $check_in_date;
        $order->check_out_date = $check_out_date;
        $order->save();
        $ls_service_id = $request->input('service');

        $newest_order = order::orderBy('created_at', 'desc')->first();
        if(isset($ls_service_id))
        {
            for ($i=0;$i<count($ls_service_id);$i++)
            {
                $split = explode('|', $ls_service_id[$i]);
                $orderService = new order_service();
                $orderService->service_id = $split[0];
                $orderService->order_id = $newest_order->id;
                $orderService->save();
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function getRoom(Request $request)
    {
        $rooms_type_id = $request->id;
        $check_in = $request->checkin;
        $check_out = $request->checkout;
        $list_room = DB::select("Select * from rooms where rooms_type_id = '$rooms_type_id' and id not in (select distinct room_id from orders where ((check_in_date <= '$check_in' and check_out_date >= '$check_out')
                                                                                   or (check_in_date >= '$check_in' and check_in_date <= '$check_out')
                                                                                   or (check_out_date >= '$check_in' and check_out_date <= '$check_out')) and status = 0)");

        return response(['data' => $list_room]);
    }

    public function detail($id)
    {
        $Order = order::find($id);
        $Service = order_service::query()
            ->where('order_id', '=', $id)
            ->get();
//        $Service = DB::select("Select * from order_services where order_id = '$id'");
//        dd($Service);
        return view('admin.booking.detail')->with(['Order' => $Order, 'Service' => $Service]);
    }

    public function changeStatus(Request $request){
        $id = $request->id;
        $status = $request->status;
        $order = order::find($id);
        $order->status = $status;
        $order->save();
        return response()->json([
            'status' => 'OK',
            'desc' => 'Change status success',
        ]);
    }

}
