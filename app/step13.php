<?php
require "./project/config.php";
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>PHP course project</title>
    <meta charset="utf-8">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            margin: 50px auto;
            text-align: center;
            width: 800px;
        }

        h1 {
            font-family: 'Passion One';
            font-size: 2rem;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div>
        <h1>Фінальний проект</h1>
        <h2>Сторінка реєстрації та логіну</h2>
        <br />
        <div><img src="./img/cover3.png" width="60%" height="60%"></div>
        <br /><br />
        <p><a href="/project/forms/register_form.php">Реєстрація</a></p>
        <?php
        if (in_array(REGISTERED, $_SESSION)) {
        ?>
            <br />
            <p><a href="/project/forms/login_form.php">Логін</a></p>
            <br />
            <?php
            if (isset($_SESSION[LOGGED_IN])) {
            ?>
                <p>
                    <a href="/project/logout.php">
                        Логаут <b>[<? echo $_SESSION[USERNAME]; ?>]</b>
                    </a>
                </p>
            <?
            }
        }
        ?>
    </div>
</body>

</html>