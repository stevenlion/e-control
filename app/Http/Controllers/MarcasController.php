<?php

namespace App\Http\Controllers;

use App\Models\MarcasModel;
use Database\Class\TBMARCAS;

class MarcasController {

    private MarcasModel $marcasModel;

    public function __construct() {
        $this->marcasModel = new MarcasModel();
    }

    public function createMarcas() {
        return $this->marcasModel->createMarcasDB(
            TBMARCAS::formFields()
        );
    }

    public function updateMarcas() {
        return $this->marcasModel->updateMarcasDB(
            TBMARCAS::formFields()
        );
    }

}