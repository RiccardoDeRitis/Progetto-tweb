<?php

namespace App\Http\Controllers;

use App\Models\Amici_model;
use App\Models\Post_model;
use Illuminate\Http\Request;
use App\Models\User_model;

class PostController extends Controller
{
    protected $post_model;
    protected $user_model;
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->post_model = new Post_model;
        $this->user_model = new User_model;
    }

    public function getPosts() {
        $idUtente = $_POST["idUtente"];
        $idBlog = $_POST["idBlog"];
        $posts = $this->post_model->getPost($idUtente, $idBlog);
        $users = $this->user_model->getUsers();
        return view('myblog')
               ->with('posts', $posts)
               ->with('utenti', $users);
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
