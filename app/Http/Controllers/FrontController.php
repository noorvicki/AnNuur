<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function kategori(){
        $kategori = Kategori::all();
    	return view('blog/menu_kategori', ['kategori' => $kategori]);
    }

    public function post_kategori($kategori){
        $id_kategori=Kategori::all()->where('kategori',$kategori);
        foreach($id_kategori as $id_kategori){
        }
        $post_kategori = Post::all()->where('kategori',$id_kategori->id);
    	return view('blog/menu_post_kategori', ['post_kategori' => $post_kategori]);
    }

    public function post($kategori,$judul){
        $artikelterkait = Post::latest()->limit(4)->get();
        $id_kategori=Kategori::all()->where('kategori',$kategori);
        foreach($id_kategori as $id_kategori){}
        $post = Post::all()->where('judul',$judul)
                           ->where('kategori',$id_kategori->id);
        foreach($post as $post){}
    	return view('blog/index', ['post' => $post,'artikelterkait' => $artikelterkait]);
    }
}
