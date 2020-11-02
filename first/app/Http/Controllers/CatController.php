<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    

    public function index() {       
        return view('task2/firstPage');
    } 

    public function catList() {
        return view('task2/newsCatList', ['newsArr'=>$this->newsArr]);
    }

    public function backform() {
        return view('task2/backform');
    }

    public function store($request) {
        dump($request->all());
    }
    
}
