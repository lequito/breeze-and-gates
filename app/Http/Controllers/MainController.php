<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class MainController extends Controller{
    
    public function index(): View{
        //get all posts and the data of the user who create the post 
        $posts = Post::with('user')->get();
        return view('dashboard', ['posts' => $posts]);
    }

    public function createPost(){
        //gates
        if(Gate::denies('post.create')){
            abort(403, 'Você não tem permissão para criar posts');
        }
    }
   
    public function deletePost($id){

        $post = Post::find($id);
        //gates
        if(Gate::denies('post.create', $post)){
            abort(403, 'Você não tem permissão para deletar posts');
        }
        //edlete the post
        $post->delete();

        return redirect()->route('dashboard');
    }
}
