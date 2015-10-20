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
        
        $flashMessage->addMessage('test1', 'my test message1');
        $flashMessage->addMessage('test2', 'my test message2');
        $flashMessage->addMessage('test3', 'my test message3');
        
       
        var_dump($flashMessage instanceof IMessage);
        echo '<br />';
        var_dump($_SESSION);
        ?>
    </body>
</html>
