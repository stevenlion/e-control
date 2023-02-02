<?php

namespace App\Http\Controllers;

use LionHelpers\Str;
use App\Models\MarcasModel;
use Database\Class\TBMARCAS;

class MarcasController {

    private MarcasModel $marcasModel;

    public function __construct() {
        $this->marcasModel = new MarcasModel();
    }

    public function createMarcas() {
        $strNombreMarca = Str::of(request->TB_MARCAS_NOMBRE_DE_LA_MARCA)->trim();

        $responseCreate = $this->marcasModel->createMarcasDB(
            TBMARCAS::formFields()
                ->setTBMARCASNOMBREDELAMARCA(Str::of($strNombreMarca)->upper())
        );

        if ($responseCreate->status === 'database-error') {
            return response->error('La marca ya existe');
        }

        return response->success('Marca registrada correctamente');
    }

    public function updateMarcas() {
        $strNombreMarca = Str::of(request->TB_MARCAS_NOMBRE_DE_LA_MARCA)->trim();

        $responseUpdate = $this->marcasModel->updateMarcasDB(
            TBMARCAS::formFields()
                ->setTBMARCASNOMBREDELAMARCA(Str::of($strNombreMarca)->upper())
        );

        if ($responseUpdate->status === 'database-error') {
            return response->error('La marca ya existe');
        }

        return response->success('Marca actualizada correctamente');
    }

    public function updateMarcasInhabilitar() {
        return $this->marcasModel->updateMarcasInhabilitarDB(
            TBMARCAS::formFields()
        );
    }

}