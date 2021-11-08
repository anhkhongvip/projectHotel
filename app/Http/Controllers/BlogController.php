<?php

namespace App\Http\Controllers;

use App\Models\post_image;
use App\Models\posts;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search_name = $request->search_name;
        if (isset($search_name)){
            $lsPost = posts::query()
                ->Where('title','like','%'.$search_name.'%')
                ->orWhere('id','like','%'.$search_name.'%')
                ->paginate(5);
//            $lsOrder = DB::select("Select * from orders where customer_id IN (select id from customers where name like '$search_name')")->paginate(5);
        }
        else {
            $lsPost = posts::paginate(5);
        }
        return view('admin.blog.index')->with(['lsPost' => $lsPost]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new posts();
        $post->title = $request->input('title');
        $post->content = $request->input('excerpt');
        $post->post_detail = $request->input('body');
        $imagePath = "";
        if ($request->hasFile("image")){
            $imagePath = $request->image->store('post-img');
            $imagePath = 'img/'.$imagePath;
            $post->image = $imagePath;
        }
        $post->save();

        return redirect(route('blog.index'));
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
        $post = posts::find($id);
        return view('admin.blog.edit')->with(['post' => $post]);
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
        $post = posts::find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('excerpt');
        $post->post_detail = $request->input('body');
        $post->save();

        foreach ($request->images as $image) {
            $imagePath = "";

            if ($request->hasFile("images")){
                $imagePath = $image->store('post-img');
                $imagePath = 'img/'.$imagePath;
                $post_image = new posts();
                $post_image->image = $imagePath;
                $post_image->save();
            }
        }
        return redirect(route('blog.edit', $post->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $post = posts::find($id);
        $post->delete();
        return redirect(route('blog.index'));
    }
}
