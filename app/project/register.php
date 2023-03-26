<?php
include('config.php');

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $_SESSION[REGISTERED] = true;

    // echo '<p class="success">Your registration was successful!</p>';

    // Data might be stored to the database
    header('Location: /step13.php');
    exit;
}
