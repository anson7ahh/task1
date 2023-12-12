<?php

namespace Modules\ManagePost\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use  Modules\ManagePost\Entities\post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('managepost::manage');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('managepost::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $post = new post();
        $post->title = $request->input('title');
        $post->slug = Str::slug($request->title, '-');
        $post->content = $request->input('content');
        $post->status = $request->input('status');
        $post->save();
        return  redirect('/post')->with("succsess", 'thanh cong');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show()
    {
        $post = new post();
        $showpost = $post->get();
        return view('managepost::manage', compact('showpost'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function showdetail($slug)
    {
        $post = new post();
        $detail =  $post->where('slug', $slug)->firstOrFail();


        return view('managepost::post', compact('detail'));
    }
}
