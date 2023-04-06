<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        // $name = 'Happy';
        // return view('pages.about')->with('name',$name);

        // $names = ['John', 'Luke','Mathew'];
        $names = []; //forelse

        return view('pages.about',[
            'names'=>$names
        ]);
    }
}
