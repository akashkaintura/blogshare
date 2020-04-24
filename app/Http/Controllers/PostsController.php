<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //Auhtentication (Middleware)
    public function __construct(){

        $this->middleware('auth');

    }
    public function create(){
        return view('posts.create');
    }

    public function store(){

        $data = request()->validate([

            'caption' => 'required',
            'image'   => ['required', 'image'],

        ]);
            // image uploads store path

            $imagepath = (request('image')->store('uploads', 'public'));

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
            $image->save();

            // authenticate user

            auth()->user()->posts()->create([
                'caption' => $data['caption'],
                'image'   => $imagePath,
            ]);


        return redirect('/profile/' . auth()->user()->id);
    }
}
