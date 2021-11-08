<?php

namespace App\Http\Controllers;

use App\Models\room_type_image;
use App\Models\rooms_type;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomtype = rooms_type::all();
        return view('admin.room.index')->with(['roomtype' => $roomtype]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomtype = rooms_type::all();
        return view('admin.room.add')->with(['roomtype' => $roomtype]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room_type = new rooms_type();
        $room_type->name = $request->input('room_type_name');
        $room_type->price = $request->input('room_type_price');
        $room_type->excerpt = $request->input('room_type_excerpt');
        $room_type->description = $request->input('room_type_description');
        $room_type->room_size = $request->input('room_type_size');
        $room_type->occupancy = $request->input('room_type_occupancy');
        $room_type->bed_size = $request->input('room_type_bed_size');
        $room_type->swimming_pool = $request->input('swimming_pool');

        $imagePath = "";
        if ($request->hasFile("image")){
            $imagePath = $request->image->store('room-type-img');
            $imagePath = 'img/'.$imagePath;
            $room_type->image = $imagePath;
        }
        $room_type->save();

        $newest_room_type = rooms_type::orderBy('created_at', 'desc')->first();
        foreach ($request->detail_image as $image) {
            $imagePath = "";

            if ($request->hasFile("detail_image")){
                $imagePath = $image->store('room-type-img');
                $imagePath = 'img/'.$imagePath;
                $room_type_image = new room_type_image();
                $room_type_image->rooms_types_id = $newest_room_type->id;
                $room_type_image->image = $imagePath;
                $room_type_image->save();
            }
        }

        return redirect(route('roomtype.index'));
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
        //
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
}
