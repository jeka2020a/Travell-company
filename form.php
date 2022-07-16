<?php
    require_once "includes/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="/style/common.css">
</head>
<body>
    <section class="form">
        <div class="container">
            <div class="form__container">
                <form action="p.php" class="form" method="POST">
                    <h2 class="form__container-title">Form</h2>
                    <input class="form__container-input" name="login" type="login" placeholder="      enter your login" required>
                    <input class="form__container-input" name="password" type="password" placeholder="      enter your password" required>
                    <button class="form__container-button-send" name="send">Отправить</button>
                </form>
            </div>
        </div>
    </section>
    <?php
        $login = $_POST['login'];
        $password = $_POST['password'];
        $send__button = $_POST['send'];

        if(isset($_POST['send'])){
            mysqli_query($db_connection , "INSERT INTO info(`login`,`password`) VALUES('$_POST[login]','$_POST[password]');");
        }
    ?>
</body>
</html>