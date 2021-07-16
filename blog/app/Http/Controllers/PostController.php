<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    /**
     * Index Mostra tutte le risorse
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    /**
     * Show mostra la singola risorsa
     */
    public function show(Post $post)
    {
        # code...
        return view('posts.show', compact('post'));
    }

    /**
     * Mostra il form per creare la risorsa
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Salva i records nel database
     */
    public function store()
    {
        # code...

    }

    /**
     * Edit mostra un form per modificare la risorsa
     */
    public function edit($post)
    {
        # code...

    }

    /**
     * Update aggiorna la risorsa nel database
     *
     */
    public function update($post)
    {
        # code...
    }

    /**
     * Destroy rimuovi la risorsa dal database
     */
    public function destroy($post)
    {
        # code...
    }

}
