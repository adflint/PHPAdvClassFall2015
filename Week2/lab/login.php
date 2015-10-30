<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
    </head>
    <body>
        <h1>Login</h1>
        <?php

        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        
        class Login {
              
            private $db;

            function __construct() {

                $util = new Util();
                $dbo = new DB($util->getDBConfig());
                $this->setDb($dbo->getDB());
            }

            private function getDb() {
                return $this->db;
            }

            private function setDb($db) {
                $this->db = $db;
            }

            function Login() {
                if (empty($_POST['username'])) {
                    $this->HandleError("UserName is empty!");
                    return false;
                }

                if (empty($_POST['password'])) {
                    $this->HandleError("Password is empty!");
                    return false;
                }


                if (!$this->CheckLoginInDB($username, $password)) {
                    return false;
                }

                session_start();

                $_SESSION[$this->GetLoginSessionVar()] = $username;

                return true;
            }

        }
        ?>
    </body>
</html>
