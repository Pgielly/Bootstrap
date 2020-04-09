<?php

session_start();

var_dump($_POST);
$_SESSION['mail']= $_POST['mail'];
$_SESSION['password']= $_POST['password'];

if ($_SESSION['mail'] != 'Jon@gmail.com' || $_SESSION['password'] != '1234'){
    header ('Location: ../error.php');
} else {
    header ('Location: /');
}
