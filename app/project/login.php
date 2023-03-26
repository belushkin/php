<?php
include('config.php');
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // echo '<p class="success">Congratulations, you are logged in!</p>';

    $_SESSION[USER_ID] = 12;
    $_SESSION[USERNAME] = $username;
    $_SESSION[LOGGED_IN] = true;

    // Data might be stored to the database
    header('Location: /step13.php');
    exit;
}
