<?php
// var_dump($_POST);exit();
include('config.php');

// DSN staat voor data sourcename.
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    echo "Er is een verbinding met de database";
} catch(PDOException $e) {
    echo "Er is helaas geen verbinding met de database.<br>
          Neem contact op met de Administrator<br>";
    echo "Systeemmelding: " . $e->getMessage();
}
// Maak de sql query voor het inserten van een record
$sql = "INSERT INTO Inschrijving (Id
                            ,Homeclub
                            ,Lidmaatschap
                            ,Looptijd
                            ,Yanga
                            ,Coach
                            ,Training
                            ,Email)
        VALUES              (NULL
                            ,:homeclub
                            ,:lidmaatschap
                            ,:looptijd
                            ,:yanga
                            ,:coach
                            ,:training
                            ,:email);";
// Maak de query gereed met de prepare-method van het $pdo-object
$statement = $pdo->prepare($sql);
$statement->bindValue(':homeclub', $_POST['homeclub'], PDO::PARAM_STR);
$statement->bindValue(':lidmaatschap', $_POST['lidmaatschap'], PDO::PARAM_STR);
$statement->bindValue(':looptijd', $_POST['looptijd'], PDO::PARAM_STR);
$statement->bindValue(':yanga', $_POST['yanga'], PDO::PARAM_STR);
$statement->bindValue(':coach', $_POST['coach'], PDO::PARAM_STR);
$statement->bindValue(':training', $_POST['training'], PDO::PARAM_STR);
$statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
// Vuur de query af op de database...
$statement->execute();

// Hiermee sturen we automatisch door naar de pagina read.php
header('Location: read.php');



