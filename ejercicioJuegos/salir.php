<?php

session_start();

if  (isset($_SESSION['DNI'])){
    session_destroy();
    header("Location: index.php");
}