<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './models/IMessage.php';
        include './models/Message.php';
        include './models/TestMessage.php';
        
        $message = new Message();
        
        $message->getAllMessages('test', 'my test message');
        
        var_dump($message->getAllMessages());
        echo '<br />';
        var_dump($message instanceof IMessage);
        echo '<br />';
        var_dump($message->removeMessages('test'));
        echo '<br />';
        var_dump($message->getAllMessages());
        echo '<br />';
        ?>
    </body>
</html>
