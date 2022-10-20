<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amici_model extends Model {
    
    protected $table = 'Amici';
    protected $primaryKey = 'IDAmici';
    protected $guarded = ['IDAmici'];
    public $timestamps = false;
    
    /*
    public function getAllFriends($id) {
        $friends = Amici_model::whereIn('IDUtente', $id);
        return $friends;
    }

    public function userFriend() {
        return $this->hasOne(User_model::class, 'IDUtente', 'id');
    }
    */

    public function sendRequest(int $id, int $idAmico) {
        Amici_model::create([
            'IDUtente' => $id,
            'IDUtenteAmico' => $idAmico,   
            'Amicizia' => 0,
        ]);
    }

}