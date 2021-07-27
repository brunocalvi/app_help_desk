<?php
    session_start();

    if (!isset($_SESSION['autenticado']) || $_SERVER['autenticado'] != 'SIM') {
        header('Location: index.php?login=erro2');      
    }
?>