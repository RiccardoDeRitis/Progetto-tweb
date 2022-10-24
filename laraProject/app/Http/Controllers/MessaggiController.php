<?php

namespace App\Http\Controllers;

use App\Models\Messaggi_model;
use Illuminate\Http\Request;

class MessaggiController extends Controller
{
    protected $messaggi_model;
    
    public function __construct() {
        $this->middleware('auth');
        $this->messaggi_model = new Messaggi_model;
    }

    public function getMessage() {
        $id = $_POST['id'];
        $messages = $this->messaggi_model->getAllMessage($id);
        return view('lista_messaggi')
                    ->with('messaggi', $messages);
    }
    
}
