<?php

namespace App\Rules\TbMarcas;

use App\Traits\Framework\ShowErrors;

class TbMarcasNombreDeLaMarcaRule {

    use ShowErrors;

    public static function passes(): void {
        self::validate(function(\Valitron\Validator $validator) {
            $validator
                ->addRule('nombre_marca', function($field, $value, array $params, array $fields) {
                    if ($value != null) {
                        return preg_match("/^([a-zA-Z0-9 @-]+)(\s[a-zA-Z0-9 @-]+)*$/", $value);
                    }
                });

            $validator->rule("required", "TB_MARCAS_NOMBRE_DE_LA_MARCA")->message("La marca es requerida");

            $validator->rule("nombre_marca", "TB_MARCAS_NOMBRE_DE_LA_MARCA")->message("La marca no es válida");
        });
    }

}