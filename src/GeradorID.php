<?php

namespace GeradorID;

class GeradorIdUsuario
{
    public static function gerar($numero)
    {
        $base = 12;
        $id = $base * $numero;
        return $id;
    }
}