<?php

session_start();


if (isset($_SESSION['unique_id'])) {
    $message = $_POST['message'];
    $id = $_SESSION['unique_id'];

    header("Location: ../index.php?aktion=nachrichtHinzufuegen&controller=ajax&message=$message&id=$id");

}


?>