<?php
session_start();
if (isset($_GET['cerrar'])) {
    session_destroy();
    header('location: ../../index.php');
}

if (isset($_SESSION['rol'])) {
    if ($_SESSION['rol'] != 2) {
        session_destroy();
        header('location: ../../index.php');
    }
} else {
    if ($_SESSION['rol'] != 2   ) {
        session_destroy();
        header('location: ../../index.php');
    }
}

?>

user