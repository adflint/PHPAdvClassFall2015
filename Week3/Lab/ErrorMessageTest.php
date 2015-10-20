<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Error Message Test</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">


    </head>
    <body>
        <?php
        
         include './models/IMessage.php';
         include './models/Message.php';
         include './models/ErrorMessage.php';
        
        $message = new Message();
        
        $message->getAllMessages('test', 'my test message');
        
        var_dump($message->getAllMessages());
        echo '<br />';
        var_dump($message instanceof IMessage);
        echo '<br />';
        var_dump($message->removeAllMessages('test'));
        echo '<br />';
        var_dump($message->getAllMessages());
        echo '<br />';
        ?>
    </body>
</html>
