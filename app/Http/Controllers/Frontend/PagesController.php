<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Post;
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notification = Notification::orderBy('id','DESC')->skip('0')->take('6')->get();
        $news = Post::where('category_id',1)->orderBy('id','DESC')->skip('0')->take('6')->get();
        $phat_su1 = Post::where('category_id',2)->orderBy('id','DESC')->skip(0)->take('1')->get();
        $phat_su6 = Post::where('category_id',2)->orderBy('id','DESC')->skip(1)->take('4')->get();
        $PG_DS = Post::where('category_id',3)->orderBy('id','DESC')->skip(0)->take('4')->get();
        return view('frontend.pages.index',compact('notification','news','phat_su1','phat_su6','PG_DS'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Contact()
    {
        return view('frontend.pages.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
