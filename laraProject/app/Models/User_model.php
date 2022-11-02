<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_model extends Model {
    
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function getUserSearch(string $search) {
        $users = User_model::where('Nome','LIKE','%'.$search.'%')->get();
        return $users;
    }

    public function getUsers() {
        $users = User_model::get();
        return $users;
    }

    public function getUser(int $id) {
        $user = User_model::where('id','=',$id)->get();
        return $user;
    }
    
    public function BlogCreator($IDBlog){
        return User_model::where('id', $IDBlog)->value('Nome');
    }

}
