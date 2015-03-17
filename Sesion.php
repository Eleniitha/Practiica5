<?php
    require_once 'index.php';
    $usuario = $_POST['login'];
    $password = $_POST['cotra'];
    $index = new Index();
    if ($ingreso->evaluar($usuario, $password)) {
        echo "Bienvenido al sistema.";
    } else {
        echo "Sus datos no son validos.";
    }
?>