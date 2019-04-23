<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
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


        //storage folder ta public er vitor anar jonno (php artisan storage:link)

        $value = data::all();
        return view('admin.adminfoodsection.adminallfood',compact('value'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminfoodsection.adminaddnewitem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $value = new data;

        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'file'=>'required|mimes:jpeg,jpg,png'
        ]);

        $value->name = $request->name;
        $value->price = $request->price;
        $value->protein = $request->protein;
        $value->fat = $request->fat;
        $value->calories = $request->calories;
        $value->adminname = Auth::user()->name;

        if ($request->hasFile('file')){
            $photo = $request->file->getClientOriginalName();
            $photo_path = $request->file->path();;
            $request->file->storeAs('public/foodpic',$photo);

            $value->photo = $photo;
            $value->photo_path = $photo_path;
        }

        $value->save();
        return redirect('/data/create');
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
        $value = data::find($id);
        return view('admin.adminfoodsection.adminedititem',compact('value'));
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
        $value = data::find($id);

        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'file'=>'required'//|mimes:jpeg,jpg,png'
        ]);

        $value->name = $request->name;
        $value->price = $request->price;
        $value->adminname = Auth::user()->name;

        if ($request->hasFile('file')){
            $photo = $request->file->getClientOriginalName();
            $photo_path = $request->file->path();;
            $request->file->storeAs('public/foodpic',$photo);

            $value->photo = $photo;
            $value->photo_path = $photo_path;
        }

        $value->save();
        return redirect('/data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $value = data::find($id);
        $value->delete();
        return redirect('/data');
    }
}
