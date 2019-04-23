<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\videosection;
use Illuminate\Support\Facades\Auth;

class VideoSectionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = videosection::all();
        return view('admin.adminvideosection.video',compact('value'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminvideosection.videostore');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $value = new videosection;

        $this->validate($request,[
            'videolink'=>'required',
            'file'=>'required'    //|mimes:jpeg,jpg,png'
        ]);

        $value->videolink = $request->videolink;
        $value->adminname = Auth::user()->name;

        if ($request->hasFile('file')){
            $photo = $request->file->getClientOriginalName();
            $request->file->storeAs('public/videosection',$photo);

            $value->photo = $photo;
        }

        $value->save();
        return redirect('/videosection/create');
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
        $value = videosection::find($id);
        return view('admin.adminvideosection.videoedit',compact('value'));
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
        $value = videosection::find($id);

        $this->validate($request,[
            'videolink'=>'required',
            'file'=>'required|mimes:jpeg,jpg,png'
        ]);

        $value->videolink = $request->videolink;

        if ($request->hasFile('file')){
            $photo = $request->file->getClientOriginalName();
            $request->file->storeAs('public/videosection',$photo);

            $value->photo = $photo;
        }


        $value->save();
        return redirect('/videosection');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $value = videosection::find($id);
        $value->delete();
        return redirect('/videosection');
    }
}
