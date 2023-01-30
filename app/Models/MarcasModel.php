<?php

namespace App\Models;

use Database\Class\TBMARCAS;
use LionSQL\Drivers\MySQL as DB;

class MarcasModel {

    public function __construct() {

    }

    public function createMarcasDB(TBMARCAS $tbmarcas) {
        return DB::call('create_marca', [
            $tbmarcas->getTBMARCASNOMBREDELAMARCA(),
            $tbmarcas->getTBCLIENTECODIGOCLIENTEFK(),
            $tbmarcas->getTBMARCASUSUARIO()
        ])->execute();
    }

}