<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{


    public function index()
    {
        return view('home');
    }

    public function characters()
    {
        return 'characters Page';
    }


    

/*     public function comics()
    {
        $comics = config('comics.data');
        //ddd($comics);
        return view('comics.index', compact('comics'));
    }

    public function comic($id)
    {
        $comics = config('comics.data');
        //ddd($comics[$id]);
        if (is_numeric($id) && $id < count($comics) && $id >= 0) {
            $comic = $comics[$id];
            return view('comics.show', compact('comic'));
        } else {
            abort(404);
        }
    } */

/*     public function movies()
    {
        $movies = Movie::all();
        //$movies = Movie::where('id', 3)->get();
        //ddd(now(), $movies);
        return view('movies.index', compact('movies'));
    } */

    public function tv()
    {
        return 'Tv Page';
    }
    public function games()
    {
        return 'Games Page';
    }



    public function shop()
    {
        return 'Shop Page';
    }
}
