<?php


include '../Models/user_model.php';


if (isset($_POST['register'])) {
    $email = trim($_POST['user']);
    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $access = "Client";

    $fname = ucfirst(strtolower(trim($_POST['fname'])));
    $lname = ucfirst(strtolower(trim($_POST['lname'])));
    $phone = trim($_POST['phone']);

    $register = new User_model();
    $register->Register($email, $password, $access, $fname, $lname, $phone);

    header("Location: login.php");
    die();
}
