<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Show Flash Message</title>
    </head>
    <body>
        <?php
        //create and start a session
       session_start();
         include './models/IMessage.php';
         include './models/Message.php';
         include './models/FlashMessage.php';
        
        
        $flashMessage = new FlashMessage();
        
        $messages = $flashMessage->getAllMessages();
        //prints out all messages
        print_r($messages);
        ?>
    </body>
</html>
