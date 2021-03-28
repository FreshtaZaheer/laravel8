<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request){

        $request->validate([
            'name'=> 'required',
            'course'=> 'required',
            'fee'=> 'required',
        ]);
        student::create($request->all());
        return redirect()->route('index')->with('success','student created successfully.');
    }
}
