<?php

namespace App\Http\Controllers;

use App\Models\Amici_model;
use Illuminate\Http\Request;
use App\Models\User_model;

class UserController extends Controller
{
    protected $user_model;
    protected $amici_model;
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->user_model = new User_model;
        $this->amici_model = new Amici_model;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showProfile() {
        return view('profile');
    }

    public function search() {
        $search_text = $_GET['search'];
        $user = $this->user_model->getUserSearch($search_text);
        $amico = $this->amici_model->getAllFriends();
        return view('cerca')
               ->with('utenti', $user)
               ->with('amici', $amico);
    }
    
}
