<html>
<head>
    <Title>Villes - Équipe 6</Title>
</head>

<body>
    <?php
        $servername = 'bd';
        $dbName = 'equipe6';
        $dbuser = 'root';
        $dbpassword = 'password';
        $dbhost = '172.25.0.2';
        $dbPort = '3306';

        $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbName, $dbPort);
        
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        
        $sql = "SELECT nom, region, population FROM villes";
        $result = mysqli_query($connection, $sql);
    
        if ($result->num_rows > 0) {
            echo "<h1>Équipe 6</h1>";
            echo "<table>";
            echo "<tr><th>Nom</th><th>Région</th><th>Population</th></tr>";
            
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["nom"] . "</td><td>" . $row["region"] . "</td><td>" . number_format($row["population"], 0, ',', ' ') . "</td></tr>";
            }
            
            echo "</table>";
        } else {
            echo "Aucune ville trouvée.";
        }
        
        $connection->close();
    ?>
    
</body>
</html>