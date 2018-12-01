<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$posts = Post::orderBy('patient_id','asc')->paginate(10);
        //return Post::where('title', 'TTTT')->get();
        //return view('posts.index');
        $posts = Post::orderBy('patient_id','asc')->paginate(25);
        //return Post::where('title', 'TTTT')->get();
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
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
        $this->validate($request, [
            'patient_id' => 'required',
            'Name' => 'required',
            'Surname' => 'required',
            'Age' => 'required',
            'Blood_Group' => 'required',
            'Gender' => 'required',
            'General_Practice' => 'required',
            'bath30_flag' => 'required'
        ]);
            //Create Post   
        $post = new Post;
        $post->patient_id = $request->input('patient_id');
        $post->Name = $request->input('Name');
        $post->Surname = $request->input('Surname');
        $post->Age = $request->input('Age');
        $post->Blood_Group = $request->input('Blood_Group');
        $post->Gender = $request->input('Gender');
        $post->General_Practice = $request->input('General_Practice');
        $post->bath30_flag = $request->input('bath30_flag');
        $post->save();
        
        return redirect('/posts')->with('Success', 'Patient Added');
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
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
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
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
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
        $this->validate($request, [
            'patient_id' => 'required',
            'Name' => 'required',
            'Surname' => 'required',
            'Age' => 'required',
            'Blood_Group' => 'required',
            'Gender' => 'required',
            'General_Practice' => 'required',
            'bath30_flag' => 'required'
        ]);
            //Create Post   
        $post = Post::find($id);
        $post->patient_id = $request->input('patient_id');
        $post->Name = $request->input('Name');
        $post->Surname = $request->input('Surname');
        $post->Age = $request->input('Age');
        $post->Blood_Group = $request->input('Blood_Group');
        $post->Gender = $request->input('Gender');
        $post->General_Practice = $request->input('General_Practice');
        $post->bath30_flag = $request->input('bath30_flag');
        $post->save();
        
        return redirect('/posts')->with('Success', 'Patient Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return response()->json(['name' => 'Mos']);
        //
        $post = Post::find($id)->first();
        dd($post['id']);
        $post->delete();
        return redirect('/posts')->with('Success', 'Patient Deleted');
    }
}
