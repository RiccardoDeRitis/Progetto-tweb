<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amici_model extends Model {
    
    protected $table = 'Amici';
    protected $primaryKey = 'IDAmici';
    public $timestamps = false;
    
    public function getFriends($id) {
        $friends = Amici_model::whereIn('IDUtente', $id);
        return $friends;
    }

    public function userFriend() {
        return $this->hasOne(User_model::class, 'IDUtente', 'id');
    }

}