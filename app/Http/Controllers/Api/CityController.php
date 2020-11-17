<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use RealRashid\SweetAlert\Facades\Alert;




class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
         parent::__construct();

         $records = City::all();
         //$govs    = City::find(4)->governorate->name;
        return view('city.index')->with([
                'records' => $records,
                // 'govs'    => $govs
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('city.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $rules  = [  
          'name' => 'required',
          'governorate_id' =>'required'

        ];
        $msg = [
                'name.required' => 'the city name is required',
                'governorate_id.required' => 'select your governorate',
            ];
        $this->validate($request,$rules,$msg);
        City::create($request->all());
        Alert::alert('create City ', 'Good City Created' , 'success');
        return redirect(route('city.index'));   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

          $show = City::find($id);
          if (!$show) 
          {
            return view('partials.404');
          }
          else
          {
             return view('city.show', compact('show'));             
          }
    }

/*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = City::findOrFail($id);
        return view('city.edit',compact('city'));
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
         $record = City::findOrFail($id);
         $record->update($request->all());

         if ($request->governorate_id)
         {

        Alert::alert('edit City', "'Excellent the city Edited to '. $record->name " , 'success');
         return redirect(route('city.index'));  
         }
         else{return back();}
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        City::findOrFail($id)->delete();
        Alert::alert('Delete City', "'Excellent the city Deleted  '.$record->name", 'success');
       return redirect(route('city.index'));

    }
}
