<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amici_model extends Model {
    
    protected $table = 'Amici';
    protected $primaryKey = 'IDAmici';
    protected $guarded = ['IDAmici'];
    public $timestamps = false;

    public function sendRequest(int $id, int $idAmico) {
        Amici_model::create([
            'IDUtente' => $id,
            'IDUtenteAmico' => $idAmico,   
            'Amicizia' => 0,
        ]);
    }

    public function getAllFriends() {
        $friends = Amici_model::get();
        return $friends;
    }

}