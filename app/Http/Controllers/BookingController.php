<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\order;
use App\Models\order_room;
use App\Models\order_service;
use App\Models\room;
use App\Models\rooms_type;
use App\Models\service;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = order::all();
        return view('admin.booking.index')->with(['order' => $order]);
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
        return view('admin.booking.add')->with(['roomtype' => $roomtype, 'room_list' => $room_list, 'service_list' => $service_list]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        $request->validate([
//            'name' => 'required|min:3|max:191',
//            'email' => 'required',
//        ]);
        $customer = new customer();
        $order = new order();

        $customer->name = $request->input('customer_name');
        $customer->email = $request->input('customer_email');
        $customer->save();
        $newest_customer = customer::orderBy('created_at', 'desc')->first();
        $id_room = $request->input('dm-ecom-product-room');
        $room = room::find($id_room);
        $room->status = 1;
        $room->save();
        $order->total = $request->input('dm-ecom-product-total');
        $order->customer_id = $newest_customer->id;
        $order->save();
        $ls_service_id = $request->input('service');

        $newest_order = order::orderBy('created_at', 'desc')->first();
        for ($i=0;$i<count($ls_service_id);$i++)
        {
            $split = explode('|', $ls_service_id[$i]);
            $orderService = new order_service();
            $orderService->service_id = $split[0];
            $orderService->order_id = $newest_order->id;
            $orderService->save();
        }

        return redirect(route("booking.index"));
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
        return view('admin.booking.edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getRoom(Request $request)
    {
        $rooms_type_id = $request->id;
        $list_room = room::where('rooms_type_id','=',$rooms_type_id)->get();
        return response(['data' => $list_room]);
    }

    public function detail()
    {
        return view('admin.booking.detail');
    }
}
