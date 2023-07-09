<html>
<head>
    <Title>Villes - Équipe 6</Title>
</head>

<body>
    <h1>Équipe 6</h1>

    <?php
        $dbName = 'equipe6';
        $dbuser = 'root';
        $dbpassword = 'password';
        $dbhost = '127.0.0.1';
        $dbPort = '3306';

        $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbName, $dbPort);

        // $result = mysqli_query($connection, "SELECT * FROM villes");
    ?>
</body>
</html>