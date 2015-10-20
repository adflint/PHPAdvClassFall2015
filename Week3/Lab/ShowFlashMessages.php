<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       session_start();
         include './models/IMessage.php';
         include './models/Message.php';
         include './models/FlashMessage.php';
        
        
        $flashMessage = new FlashMessage();
        
        $messages = $flashMessage->getAllMessages();
        
        print_r($messages);
        ?>
    </body>
</html>
