<?php

namespace App\Http\Controllers;

use App\Models\Amici_model;
use App\Models\Post_model;
use Illuminate\Http\Request;
use App\Models\User_model;
use App\Models\Blog_model;

class PostController extends Controller
{
    protected $post_model;
    protected $user_model;
    protected $blog_model;
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->post_model = new Post_model;
        $this->user_model = new User_model;
        $this->blog_model = new Blog_model;
    }

    public function getPosts(int $IDBlog) {
        
        $Blog = $this->blog_model->findBlog($IDBlog);
        $posts = $this->post_model->getPost($IDBlog);
       
        return view('blog')
               ->with('blog',$Blog)
               ->with('posts', $posts);
               
    }

    public function createPost() {
        $titolo = $_GET["Titolo"];
        $descrizione = $_GET["Descrizione"];
        $data = $_GET["Data"];
        $IDBlog = $_GET["idBlog"];
        $IDUtente = $_GET["idUtente"];
        $this->post_model->createPost($titolo, $descrizione, $data, $IDBlog, $IDUtente);
    }
    
}
