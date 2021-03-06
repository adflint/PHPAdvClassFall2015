<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body> 
        
        <?php
        // put your code here
        
        $config = array(
            'DB_DNS' => 'mysql:host=localhost;port3306;dbname=phpadvclassfall2015',
            'DB_USER' => 'php',
            'DB_PASSWORD' => 'Fall15'
        );

        try{
            $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            
        } catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }

        var_dump($db);
        
        $stmt = $db->prepare("SELECT * FROM address");
        
        if($stmt->execute() && $stmt->rowCount() > 0){
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            var_dump($results);
        }

        ?>
    </body>
</html>
