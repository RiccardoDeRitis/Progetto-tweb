<?php

namespace App\Http\Controllers;

use App\Models\Amici_model;
use App\Models\User_model;
use App\Models\Blog_model;
use App\Http\Requests\BlogCreateRequest;
use App\Models\Post_model;
use auth;

class UserController extends Controller
{
    protected $user_model;
    protected $amici_model;
    protected $blog_model;
    
    public function __construct() {
        $this->middleware('auth');
        $this->user_model = new User_model;
        $this->amici_model = new Amici_model;
        $this->blog_model = new Blog_model;
    }

    public function showProfile() {
        $id = Auth::user()->id;
        $numAmici = $this->amici_model->getNumFriends($id);
        $numBlog = $this->blog_model->getNumBlog($id);
        return view('profile')
                ->with('numAmici', $numAmici)
                ->with('numBlog', $numBlog);
    }

    public function getProfileUser(int $id) {
        $user = $this->user_model->getUser($id);
        $numAmici = $this->amici_model->getNumFriends($id);
        $blogs = $this->blog_model->getBlogsByUser($id);
        return view('profileUser')
                ->with('user', $user[0])
                ->with('numAmici', $numAmici)
                ->with('blogs', $blogs);
    }

    public function search() {
        $search_text = $_GET['search'];
        $user = $this->user_model->getUserSearch($search_text);
        $amico = $this->amici_model->getAllFriends();
        return view('cerca')
               ->with('utenti', $user)
               ->with('amici', $amico);
    }
    
    public function getBlogs() {
        $blogs = $this->blog_model->getAllBlogs();
        return view('blogsPage')
               ->with('blogs', $blogs);
              
    }
    
    public function showMieiBlog() {
        $id = Auth::user()->id;
        $blogs = $this->blog_model->getBlogsByUser($id);

        return view('miei_blog')
                        ->with('blogs', $blogs);
    }
    
    public function creaBlog(BlogCreateRequest $request) {
        $id = Auth::user()->id;
        //Crea il blog
        $blogs = new Blog_model();
        $blogs->Titolo = $request->Titolo;
        $blogs->Descrizione = $request->Descrizione;
        $blogs->IDUtente = $id;
        $blogs->save();

        return redirect('miei_blog');
    }

    public function elimina_mioblog(int $id) {
        $this->blog_model->deleteMioBlog($id);
        return redirect('miei_blog');
    }
    
}
