<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class PostController extends Controller
{
    private $columns = ['title', 'description','auther' , 'published'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $posts = Post::get();
       return view ('posts', compact('posts'));
        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // $posts = new Post();
        //$posts->title = $request->title;
        //$posts->description = $request->description;
        //$posts->auther = $request->auther;
       // if (isset($request->published)) {
        //    $posts->published = 1;
       // } else{
        //    $posts->published = 0;
        //}
        //$posts->save();
       // return 'Data added successfully';

        //$data = $request->only($this->columns);
        $data = $request->validate([
            'title'=>'required |string|max:50',  
            'description'=>'required |string',  
            'auther'=>'required |string', 
            ]);
        $data ['published'] = isset($request->published);
        Post::create($data); 
        return redirect ('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('showPost', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('updatePost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only($this->columns);
        $data ['published'] = isset($request->published);
        Post::where('id', $id)->update($data); 
        return redirect ('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id', $id)->delete(); 
        return redirect ('posts');
    }



     /**
     * Remove the specified resource from storage.
     */
    public function trashed()
    {
        $posts= Post::onlyTrashed()->get(); 
           return view('trashed', compact('posts'));
    }

/**
 * Remove the specified resource from storage.
 */
public function forceDelete(string $id)
{
    Post::where('id', $id)->forceDelete();  
    return redirect ('posts');
}
public function restore(string $id)
{
    Post::where('id', $id)->restore();  
    return redirect ('posts');
}


}
