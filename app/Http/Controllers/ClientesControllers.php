<?php

namespace App\Http\Controllers;

use App\Models\ClientesModel;
use Database\Class\TBCLIENTE;

class ClientesControllers {

    private ClientesModel $clientesModel;

    public function __construct() {
        $this->clientesModel = new ClientesModel();
    }

     public function readClientes() {
        return $this->clientesModel->readClientesDB();
    }


}