<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Results</title>
    </head>
    <body> 
        
        <?php
        // put your code here
$servername = "localhost:81";
$dbname = "PHPAdvClassFall2015";

// Create connection
$connection = new connection($servername, $dbname);
// Check connection
if ($connection->connect_error) {
    ("Connection failed: " . $connection->connect_error);
} 

$sql = "SELECT * FROM address";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$connection->close();
        ?>
    </body>
</html>
