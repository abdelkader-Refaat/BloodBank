<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Governorate;
use RealRashid\SweetAlert\Facades\Alert;



class GovernorateController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Governorate::All();
        parent::__construct();
        
        return view('governorate.index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         return view('governorate.create');
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $rules = [
           'name' => 'required|unique:governorates'

                   ];

           $msg = ['name.required' => 'sorry enter the governorate field',

                    'name.unique' => 'sorry this governorate has been taken'
                   ];

            $this->validate($request,$rules,$msg);
           $records = Governorate::create($request->all());

            /*records = new Governorate();
            $records -> name = $request->input('name');
            $records->save();*/
            //return redirect(route('governorate.index'));
           // flash('Success governorate Created')->success();
            Alert::alert('Create Governorate', 'Excellect Governorate Created', 'success');

            return redirect(route('governorate.index'));   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $show = Governorate::find($id);
        if (!$show) 
          {
            return view('partials.404');
          }
          else
          {
        return view('governorate.show',compact('show'));
          }
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $govern = Governorate::findOrFail($id);

        return view('governorate.edit',compact('govern'));  
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

        $record = Governorate::findOrFail($id);
        $record->update($request->all());
        //flash('Success governorate Edited')->success();
        Alert::alert('Edit Governorate', 'Excellecnt governorate Edited Sucessfuly', 'success');
        return redirect(route('governorate.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Governorate::findOrFail($id);
        $record->delete();
        Alert::alert('Delet Governorate', 'Excellecnt Governorate Deleted Sucessfuly', 'success');

        //flash($record->name.'  governorate deleted')->success();
        return redirect(route('governorate.index'));   

    }
}
