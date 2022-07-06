<?php

function generarUsuario(){
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $tamañoCaracteres = strlen($caracteres);
    $usuario = "";
    for($i = 0; $i < 6; $i++){
        $usuario .= $caracteres[rand(0, $tamañoCaracteres - 1)];
    }
    return $usuario;
}

?>