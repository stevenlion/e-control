<?php

/**
 * ------------------------------------------------------------------------------
 * Rules
 * ------------------------------------------------------------------------------
 * This is where you can register your rules for validating forms
 * ------------------------------------------------------------------------------
 **/

return [
    '/api/auth/login' => [
        \App\Rules\EmailRule::class,
        \App\Rules\PasswordRule::class
    ],

    '/api/marcas/create' => [
        \App\Rules\TbMarcas\TbMarcasNombreDeLaMarcaRule::class
    ],

    '/api/marcas/update' => [
        \App\Rules\TbMarcas\TbMarcasNombreDeLaMarcaRule::class
    ]
];