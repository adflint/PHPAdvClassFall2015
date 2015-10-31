<?php require_once './autoload.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up Form</title>
     
    </head>
    <body>
        <?php
        
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        $util = new Util();
        $validtor = new Validator();
        $signup = new Signup();

        $errors = array();

        if ($util->isPostRequest()) {

            if (!$validtor->emailIsValid($email)) {
                $errors[] = 'Email is not valid';
            }

            if ($validtor->emailIsValid($email) != $validtor->emailIsValid($email)) {
                $errors[] = 'Email is not valid';
            }

            if ($password == "") {
                $errors[] = 'Password is not valid';
            }

        }
        ?>
        
        <?php include './templates/errors.html.php'; ?>
        <?php include './templates/messages.html.php'; ?>
        <?php include './templates/login-form.html.php'; ?>

    </body>
</html>
