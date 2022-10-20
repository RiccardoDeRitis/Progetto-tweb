<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_model extends Model {
    
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function getUserSearch(string $search) {
        $users=User_model::where('Nome','LIKE','%'.$search.'%')->get();
        return $users;
    }

}
