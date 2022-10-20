<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amici_model;

class AmiciController extends Controller
{
    protected $amici_model;
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->amici_model = new Amici_model;
    }

    public function request() {
        $id = $_POST['id'];
        $idAmico = $_POST['idAmico'];
        $this->amici_model->sendRequest($id, $idAmico);
        return back();
    }
    
}
