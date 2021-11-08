<?php

namespace App\Http\Controllers;

use App\Models\posts;
use App\Models\room;
use App\Models\room_type_image;
use App\Models\rooms_type;
use App\Models\service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        $lsBlog = posts::paginate(6);
        return view('blog')->with(['lsBlog' => $lsBlog]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function explore()
    {
        return view('explore');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function post($id)
    {
        $post = posts::find($id);
        return view('post')->with(['post' => $post]);

    }
    public function restaurant()
    {
        return view('restaurant');
    }
    public function room($id)
    {
        $lsRoom = room::query()
            ->where('rooms_type_id','=', $id)
            ->orderBy('name')
            ->get();
        $lsRoomType = rooms_type::all();
        $lsService = service::all();
        $lsDate = Carbon::now();
        $lsDate = $lsDate->format("Y-m-d");
        return view('room')->with(['lsRoom' => $lsRoom, 'lsService' => $lsService, 'lsDate' => $lsDate, 'lsRoomType' => $lsRoomType]);
    }

    public function booking()
    {
        $service_list = service::all();
        $lsRoomType = rooms_type::all();
        $room_list = room::all();
        $date = Carbon::now();
        $date = $date->format("Y-m-d");
        return view('booking')->with(['lsRoomType' => $lsRoomType, 'room_list' => $room_list, 'service_list' => $service_list, 'date' => $date]);
    }

    public function roomdetail($id)
    {
        $roomDetail = room::find($id);
        $room_images = DB::select("Select * from room_images where rooms_id = '$id'");
//        dd($room_type_images);
        $lsService = service::all();
        $lsDate = Carbon::now();
        $lsDate = $lsDate->format("Y-m-d");
        return view('roomgallery')->with(['roomDetail' => $roomDetail,
            'room_images' => $room_images,
            'lsService' => $lsService,
            'lsDate' => $lsDate]);
    }

    public function roomvideo()
    {
        return view('roomvideo');
    }
    public function search()
    {
        $lsRoomType = rooms_type::all();
        $lsService = service::all();
        $lsDate = Carbon::now();
        $lsDate = $lsDate->format("Y-m-d");
        return view('search')->with(['lsRoomType' => $lsRoomType, 'lsService' => $lsService, 'lsDate' => $lsDate]);
    }

    public function search_room(Request $request){
        $rooms_type_id = $request->id;
        $check_in = $request->checkin;
        $check_out = $request->checkout;
        $list_room = DB::select("Select * from rooms where rooms_type_id = '$rooms_type_id' and id not in (select distinct room_id from orders where ((check_in_date <= '$check_in' and check_out_date >= '$check_out')
                                                                                   or (check_in_date >= '$check_in' and check_in_date <= '$check_out')
                                                                                   or (check_out_date >= '$check_in' and check_out_date <= '$check_out')) and status = 0)");

        return response(['data' => $list_room]);
    }

    public function services()
    {
        $services = service::all();
        return view('services')->with(['lsServices'=>$services]);
    }

    public function terms()
    {
        return view('terms');
    }
    public function testimonials()
    {
        return view('testimonials');
    }

    public function index()
    {
        $lsService = service::all();
        $lsRoomType = rooms_type::all();
        return view('welcome')->with([
            'lsService' => $lsService,
            'lsRoomType' => $lsRoomType]);
    }

    public function getRoomBooking(Request $request)
    {
        $rooms_type_id = $request->id;
        $check_in = $request->checkin;
        $check_out = $request->checkout;
        $list_room = DB::select("Select * from rooms where rooms_type_id = '$rooms_type_id' and id not in (select distinct room_id from orders where ((check_in_date <= '$check_in' and check_out_date >= '$check_out')
                                                                                   or (check_in_date >= '$check_in' and check_in_date <= '$check_out')
                                                                                   or (check_out_date >= '$check_in' and check_out_date <= '$check_out')) and status = 0)");

        return response(['data' => $list_room]);
    }

}
