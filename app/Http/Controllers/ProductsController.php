<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        //use of COMPACT -- to pass dat to views
        // $title = 'Welcome to Laravel 8/9 course';
        // $description ='Created by Happy';
        // return view('products.index', compact('title','description'));



        //use of WITH -- to pass data to views
        // $title = 'Welcome to Laravel 8/9 course';
        // return view('products.index')->with('title',$title);

        //associative arrays
        // $data = [
        //     'productOne' => 'iPhone',
        //     'productTwo' => 'Samsung'
        // ];
        //return view('products.index')->with('data',$data);


        
        // without compact or with methods
        // return view('products.index',['data'=>$data]);
        print_r(route('products'));
        return view('products.index');
    }

    public function products()
    {
        return 'About page';
    }




    // public function show($id)
    // {
    //     return $id;
    // }

    public function show($name)
    {
        $data =[
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];

        //return  view('products.index', ['data'=>$data[$name]] );


        // incase you pass nonexisting data, to avoid error
        return  view('products.index',
         [
            'data'=>$data[$name] ?? 'Product ' . $name . ' does not exist'
         ] 
        );

    }
}
