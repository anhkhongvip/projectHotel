<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\order;
use App\Models\room;
use App\Models\room_image;
use App\Models\rooms_type;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('admin.room.index');

    }

    public function indexAdmin(Request $request, $id)
    {
        $lsRoom = room::where('rooms_type_id','=', $id)->get();
        return view('admin.room.room_detail.index')->with(['lsRoom' => $lsRoom, 'id' => $id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomtype = rooms_type::all();
        return view('admin.room.room_detail.add')->with(['roomtype' => $roomtype]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'room-name' => 'required|min:3|max:191',
            'room_excerpt' => 'required',
            'room-description' => 'required',
            'room_occupancy' => 'required',
            'room_size' => 'required',
            'room_bed_size' => 'required',

        ]);

        $room = new room();
        $room->name = $request->input('room-name');
        $room->excerpt = $request->input('room_excerpt');
        $room->description = $request->input('room-description');
        $room->rooms_type_id = $request->input('room_type');
        $room->room_size = $request->input('room_size');
        $room->occupancy = $request->input('room_occupancy');
        $room->bed_size = $request->input('room_bed_size');
        $room->swimming_pool = $request->input('swimming_pool');
        $newest_room = room::orderBy('created_at', 'desc')->first();

        $imagePath = "";
        if ($request->hasFile("image")){
            $imagePath = $request->image->store('room-img');
            $imagePath = 'img/'.$imagePath;
            $room->image = $imagePath;
        }
        $room->save();

        foreach ($request->images as $image) {
            $imagePath = "";

            if ($request->hasFile("images")){
                $imagePath = $image->store('room-img');
                $imagePath = 'img/'.$imagePath;
                $room_image = new room_image();
                $room_image->rooms_id = $newest_room->id;
                $room_image->image = $imagePath;
                $room_image->save();
            }
        }
        $request->session()->flash('msg', 'Add room successfully.');
        return redirect(route('rooms.create'));

    }

    public function getRoomDetail(Request $request){
        $id = $request->id;
        $room = room::find($id);
        $image_list = room_image::where('rooms_id', '=', $id)->get();
        return response(['room' => $room, 'image_list' => $image_list]);

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
        $room = room::find($id);
        $roomtype = rooms_type::all();
        return view('admin.room.room_detail.edit')->with(['roomtype' => $roomtype, 'room' => $room]);
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
        $request->validate([
            'room-name' => 'required|min:3|max:191',
            'room_excerpt' => 'required',
            'room-description' => 'required',
            'room_occupancy' => 'required',
            'room_size' => 'required',
            'room_bed_size' => 'required',

        ]);

        $room = room::find($id);
        $room->name = $request->input('room-name');
        $room->excerpt = $request->input('room_excerpt');
        $room->description = $request->input('room-description');
        $room->rooms_type_id = $request->input('room_type');
        $room->room_size = $request->input('room_size');
        $room->occupancy = $request->input('room_occupancy');
        $room->bed_size = $request->input('room_bed_size');
        $room->swimming_pool = $request->input('swimming_pool');
        $newest_room = room::orderBy('created_at', 'desc')->first();

        $imagePath = "";
        if ($request->hasFile("image")){
            $imagePath = $request->image->store('room-img');
            $imagePath = 'img/'.$imagePath;
            $room->image = $imagePath;
        }
        $room->save();

        foreach ($request->images as $image) {
            $imagePath = "";

            if ($request->hasFile("images")){
                $imagePath = $image->store('room-img');
                $imagePath = 'img/'.$imagePath;
                $room_image = new room_image();
                $room_image->rooms_id = $newest_room->id;
                $room_image->image = $imagePath;
                $room_image->save();
            }
        }
//        $request->session()->flash('msg', 'Update room successfully.');
        return redirect(route('rooms.edit', $room->id));

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
