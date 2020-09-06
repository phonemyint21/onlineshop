<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::all();
        return view('backend.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('backend.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'brand'=>'required',
            'photo'=>'required'
        ]);

        //upload file

        $imgName=time().'.'. $request->photo->extension(); 

        $request->photo->move(public_path('backend/brandimg'),$imgName);

        $path='backend/brandimg/'.$imgName;

        //insert data

        $brand=new Brand();
        $brand->name=$request->brand;
        $brand->photo=$path;
        $brand->save();

        //redirect

        return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {

        return view('backend.brands.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        
        //validation
        $request->validate([
            'brand'=>'required',
            'photo'=>'sometimes'
        ]);

        //upload
            if($request->hasFile('photo')){
                $imgName=time().'.'. $request->photo->extension(); 

        $request->photo->move(public_path('backend/brandimg'),$imgName);

        $path='backend/brandimg/'.$imgName;
            }else{
                $path=$request->oldphoto;
            }
        //insert data
        $brand->name=$request->brand;
        $brand->photo=$path;
        
        $brand->save();

        //redirect
        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brands.index');
    }
}
