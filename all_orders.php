<html>
<head>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='orders.css'>
</head>
<body>
    <table>
        <tr>
            <th>client name</th>
            <th>city</th>
            <th>street</th>
            <th>num</th>
            <th>order</th>
            <th>date</th>
        </tr>
        <?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM orders";
$result = $link -> query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["clientname"] . "</td><td>" .$row["city"]. "</td><td>"
         .$row["street"] . "</td><td>" .$row["number"] . "</td><td>" .$row["dishname"] .
         "</td><td>" .$row["created_at"] . "</td></tr>";
    }
}
$link->close(); 
?>
    </table>
</body>
</html>