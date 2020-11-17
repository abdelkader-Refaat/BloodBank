<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
         parent::__construct();

         $records  = Category::paginate('10');
         return view('category.index', compact('records'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
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
           'name' => 'required|unique:categories'

                   ];

           $msg = ['name.required' => 'sorry enter the Category field',

                    'name.unique' => 'sorry this Category has been taken'
                   ];

            $this->validate($request,$rules,$msg);
             Category::create($request->all());
            Alert::alert('Create Category', 'Excellect Category Created', 'success');

            return redirect(route('category.index'));   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Category::find($id);
          if (!$show) 
          {
            return view('partials.404');
          }
          else
          {
             return view('category.show', compact('show'));             
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
                 $category = Category::findOrFail($id);

               return view('category.edit',compact('category'));
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
        $update = Category::findOrFail($id);
       $update->update($request->all());
       $update->save();
        Alert::alert('Edit Category', 'Excellecnt Category Edited Sucessfuly', 'success');

       return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        Alert::alert('Delet Category', 'Excellecnt Category Deleted Sucessfuly', 'success');

       return redirect(route('category.index'));

    }
}
