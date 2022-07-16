<?php
    require_once "includes/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/common.css">
    <title>Result</title>
</head>
<body>
    <section class="form">
        <div class="container">
            <div class="form__container">
                <form action="send_mail.php" class="form" method="POST">
                    <h2 class="form__container-title">
                        <a href="send_mail.php">Form</a>
                    </h2>
                    <input class="form__container-email" type="email" name="email" placeholder="     email" required>
                    <input class="form__container-subject" type="text" name="subject" placeholder="     subject" required>
                    <textarea name="message__to__email" class="form__container-message" required></textarea>
                    <button class="form__container-button-send" name="send__to__email">Отправить</button>
                    <?php
                        $send__to = $_POST['email'];
                        $subject__of = $_POST['subject'];
                        $message__to__email = $_POST['message__to__email'];

                        if (isset($_POST['send__to__email']))
                        {
                            for ($i = 0; $i<1 ; ++$i)
                            {
                                mail($send__to , $subject__of , $message__to__email);
                            }
                        }
                    ?>
                </form>
            </div>
        </div>
    </section>
</body>
</html>