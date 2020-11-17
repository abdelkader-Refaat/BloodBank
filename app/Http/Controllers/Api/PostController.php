<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use RealRashid\SweetAlert\Facades\Alert;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     

        

         $records  = Post::paginate('10');

         return view('post.index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        return view('Post.create');

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
           'title'   => 'required',
           'image'   => 'required',
           'content' => 'required',

                   ];

           $msg = ['title.required'   => 'sorry enter the title field',
                   'image.required'   => 'sorry enter the image field',
                   'content.required' => 'sorry enter the content field',

                   ];

            $this->validate($request,$rules,$msg);
             Post::create($request->all());
            Alert::alert('Create Post', 'Excellect Post Created', 'success');

            return redirect(route('Post.index'));   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Post::find($id);
          if (!$show) 
          {
            return view('partials.404');
          }
          else
          {
             return view('post.show', compact('show'));             
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
        $post = Post::findOrFail($id);
        return view('post.edit',compact('post'));
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
        
         $record = Post::findOrFail($id);
         $record->update($request->all());
         return redirect(route('post.index'));  
                  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        Alert::alert('Delete City', "'Excellent the Post Deleted", 'success');
        return redirect(route('post.index'));
    }
}
