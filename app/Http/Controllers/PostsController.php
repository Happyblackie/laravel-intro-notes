<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //
    public function index()
    {
        //$posts = DB::select('select * from posts where id = ?', [1]);
                //or
        // $posts = DB::select('select * from posts where id =:id', ['id'=>1]);


        // building query params
        $id = 2;
        $posts = DB::table('posts')
                // ->where('id',$id)
                // ->get();

                ////getting specfic column
                // ->select('body')
                // ->get();


                //getting specfic column but with condition current time and created time comparison
                //->where('created_at','<', now()->subDay())
                //adding else
                //->orWhere('title','Prof.')
                //->get();

                //when column is between 2 values
                //->whereBetween('id',[1, 2])

                //where not column is null
                //->whereNotNull('title')

                //order
                //->orderBy('title','asc')
                //->latest()
                //->oldest()
                // ->inRandomOrder()
                // ->get();

                //->orderBy('created_at', 'desc')
                //->first();


                //->find($id);

                //->min('id');
                // ->max('id');
                // ->sum('id');
                //->avg('id');


                // inserting into database
                // ->insert([
                //     'title'=>'New Post', 'body'=>'New Body'
                // ]);
                
                //updating a column data
                // ->where('id', '=', 5)
                // ->update([
                //     'title'=>'Updated Title', 'body' => 'Updated Body'
                // ]);

                //deleting a column
                ->where('id', '=', 5)
                ->delete();
               

        

        dd($posts);
        //return view('posts.index');
    }
}
