<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        return view('blog');
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
    public function post()
    {
        return view('post');
    }
    public function restaurant()
    {
        return view('restaurant');
    }
    public function room()
    {
        return view('room');
    }



    public function roomdetail()
    {
        return view('roomgallery');
    }



    public function roomvideo()
    {
        return view('roomvideo');
    }
    public function search()
    {
        return view('search');
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


}
