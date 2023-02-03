<?php

namespace App\Models;

use Database\Class\TBCLIENTE;
use LionSQL\Drivers\MySQL as DB;

class ClientesModel {

    public function __construct() {

    }

    public function readClientesDB() {
        return DB::table('TB_CLIENTE')->select(
    DB::alias('CODIGO_CLIENTE_PK', 'TB_CLIENTE', true),
    DB::alias('TB_CLIENTE_RAZON_SOCIAL', 'TB_CLIENTE', true)
    )->getAll();
    }

}