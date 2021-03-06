<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>
    </head>
    <body>
        
        <?php

        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        
        
        
        $login = new Login();

        $errors = array();
        
        class Login {
              
            private $db;

            function __construct() {

            }

            private function getDb() {
                return $this->db;
            }

            private function setDb($db) {
                $this->db = $db;
            }

            function Login() {
                if (empty($_POST['$email'])) {
                    $this->HandleError("Email is empty!");
                    return false;
                }

                if (empty($_POST['password'])) {
                    $this->HandleError("Password is empty!");
                    return false;
                }


                if (!$this->CheckLoginInDB($email, $password)) {
                    return false;
                }

                session_start();

                $_SESSION[$this->GetLoginSessionVar()] = $$email;

            return true;

            }
        }
        ?>
        
        
        <h1>Login Form</h1>
        <?php include './templates/login-form.html.php'; ?>
    </body>
</html>
