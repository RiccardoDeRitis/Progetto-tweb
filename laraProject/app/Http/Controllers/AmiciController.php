<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amici_model;
use App\Models\Messaggi_model;

class AmiciController extends Controller
{
    protected $amici_model;
    protected $messaggi_model;
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->amici_model = new Amici_model;
        $this->messaggi_model = new Messaggi_model;
    }

    public function request() {
        $id = $_POST['id'];
        $idAmico = $_POST['idAmico'];
        $this->amici_model->sendRequest($id, $idAmico);
        return back();
    }

    public function accept_request() {
        $id = $_POST['id'];
        $idAmico = $_POST['idAmico'];
        $Nome = $_POST['Nome'];
        $Cognome = $_POST['Cognome'];
        $this->amici_model->acceptRequest($id, $idAmico);
        $this->messaggi_model->messageAccept($idAmico, $Nome, $Cognome);
        return back();
    }

    public function delete_request() {
        $id = $_POST['id'];
        $idAmico = $_POST['idAmico'];
        $Nome = $_POST['Nome'];
        $Cognome = $_POST['Cognome'];
        $this->amici_model->deleteRequest($id, $idAmico);
        $this->messaggi_model->messageDelete($idAmico, $Nome, $Cognome);
        return back();
    }
    
}
