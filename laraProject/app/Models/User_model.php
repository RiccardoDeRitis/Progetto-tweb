<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_model extends Model {
    
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function getUserSearch(string $search) {
        if (str_contains($search, "*")) {
            $users = User_model::where('Nome', 'LIKE', str_replace('*','',$search).'%')->get();
        } else {
            $users = User_model::where('Nome','=', $search)->get();
        }
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
    
    public function BlogCreator(int $IDBlog){
        return User_model::join('Blog', 'users.id', '=', 'Blog.IDUtente')
                            ->where('IDBlog', '=', $IDBlog)
                            ->select('users.Nome', 'users.Cognome')->get();
    }

}
