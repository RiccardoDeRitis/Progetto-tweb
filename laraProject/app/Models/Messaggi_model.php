<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messaggi_model extends Model {
    
    protected $table = 'Messaggi';
    protected $primaryKey = 'IDMessaggi';
    protected $guarded = ['IDMessaggi'];
    public $timestamps = false;

    public function messageAccept(int $id, int $IDUtenteRichiesta) {
        Messaggi_model::create([
            'IDUtente' => $id,
            'IDUtenteRichiesta' => $IDUtenteRichiesta,
            'Richiesta' => 1,
        ]);
    }

    public function messageDelete(int $id, int $IDUtenteRichiesta) {
        Messaggi_model::create([
            'IDUtente' => $id,
            'IDUtenteRichiesta' => $IDUtenteRichiesta,
            'Richiesta' => 0,
        ]);
    }

    public function getAllMessage(int $id) {
        $messaggi = Messaggi_model::where('IDUtente', '=', $id)->get();
        return $messaggi;
    }

}
