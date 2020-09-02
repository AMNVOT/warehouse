<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data=request()->validate([
            'caption'=>'required',
            'serial_number'=>'required',
            'cost'=>'required',
            'quantity'=>'required'
                    
        ]);

        // $imagePath=request('image')->store('uploads', 'public');

        auth()->user()->posts()->create([
            'caption'=>$data['caption'],
            'serial_number'=>$data['serial_number'],
            'cost'=>$data['cost'],
            'quantity'=>$data['quantity']
            
        ]);

        return redirect(`/profile/`.auth()->user()->id);
    }
}
