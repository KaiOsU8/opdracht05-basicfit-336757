<?php
// Voeg de database-gegevens
require('config.php');

// Maak de $dsn oftewel de data sourcename string
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    // Maak een nieuw PDO object zodat je verbinding hebt met de mysql database
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        // echo "Verbinding is gelukt";
    } else {
        echo "Interne server-error";
    }
} catch (PDOException $e) {
    $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo "skdf";exit();
    try {
        // Maak een update query voor het updaten van een record
        $sql = "UPDATE Inschrijving
                SET Homeclub = :Homeclub,
                    Lidmaatschap = :Lidmaatschap,
                    Looptijd = :Looptijd,
                    Yanga = :Yanga,
                    Coach = :Coach,
                    Training = :Training,
                    Email = :Email
                WHERE Id = :Id";

        // Roep de prepare-method aan van het PDO-object $pdo
        $statement = $pdo->prepare($sql);

        // We moeten de placeholders een waarde geven in de sql-query
        $statement->bindValue(':Id', $_POST['Id'], PDO::PARAM_INT);
        $statement->bindValue(':Homeclub', $_POST['homeclub'], PDO::PARAM_STR);
        $statement->bindValue(':Lidmaatschap', $_POST['lidmaatschap'], PDO::PARAM_STR);
        $statement->bindValue(':Looptijd', $_POST['looptijd'], PDO::PARAM_STR);
        $statement->bindValue(':Yanga', $_POST['yanga'], PDO::PARAM_STR);
        $statement->bindValue(':Coach', $_POST['coach'], PDO::PARAM_STR);
        $statement->bindValue(':Training', $_POST['training'], PDO::PARAM_STR);
        $statement->bindValue(':Email', $_POST['email'], PDO::PARAM_STR);

        // We gaan de query uitvoeren op de mysql-server
        $statement->execute();

        echo "Het record is geupdate";
        header("Refresh:3; read.php");

    } catch(PDOException $e) {
        echo "Het record is niet geupdate";
        header("Refresh:3; read.php");
    }
    exit();
}

// Maak een select-query
$sql = "SELECT * FROM Inschrijving 
        WHERE Id = :Id";

// Voorbereiden van de query
$statement = $pdo->prepare($sql);

$statement->bindValue(':Id', $_GET['Id'], PDO::PARAM_INT);

$statement->execute();

$result = $statement->fetch(PDO::FETCH_OBJ);

// var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>PDO CRUD</title>
</head>
<body>
    <h1>PDO CRUD</h1>

    <form action="update.php" method="post">

        <label for="homeclub">Kies je homeclub:</label><br>
        <select name="homeclub" id="homeclub">
            <option value="">Kies je locatie</option>
            <option value="<?php if ($result->Homeclub == "Franciscusdreef 80") { echo $result->Homeclub;} ?>">Franciscusdreef 80</option>
            <option value="<?php if ($result->Homeclub == "Middenweteringen 21") { echo $result->Homeclub;} ?>">Middenweteringen 21</option>
            <option value="<?php if ($result->Homeclub == "Zonnebaan 22") { echo $result->Homeclub;} ?>">Zonnebaan 22</option>
            <option value="<?php if ($result->Homeclub == "Moreelsehoek 2") { echo $result->Homeclub;} ?>">Moreelsehoek 2</option>
            <option value="<?php if ($result->Homeclub == "Van Heuven Goedhartplein 13") { echo $result->Homeclub;} ?>">Van Heuven Goedhartplein 13</option>
            <option value="<?php if ($result->Homeclub == "Europaplein 705") { echo $result->Homeclub;} ?>">Europaplein 705</option>
            <option value="<?php if ($result->Homeclub == "Herculesplein 375-77") { echo $result->Homeclub;} ?>">Herculesplein 375-77</option>
        </select><br><br>


        <h3>Selecteer een lidmaatschap</h3>
        <label for="comfort">Comfort</label><br>
        <input type="radio" name="lidmaatschap" id="comfort" value="<?php if ($result->Lidmaatschap == "comfort") { echo 'checked';} ?>"><br>
        <label for="premium">Premium</label><br>
        <input type="radio" name="lidmaatschap" id="premium" value="<?php if ($result->Lidmaatschap == "premium") { echo 'checked';} ?>"><br>
        <label for="all">All in</label><br>
        <input type="radio" name="lidmaatschap" id="all" value="<?php if ($result->Lidmaatschap == "all") { echo 'checked';} ?>"><br><br>


        <h3>Looptijd:</h3>
        <label for="jaarlidmaatschap">Jaarlidmaatschap</label><br>
        <input type="radio" name="looptijd" id="jaarlidmaatschap" value="<?php if ($result->Looptijd == "jaarlidmaatschap") { echo 'checked';} ?>"><br>
        <label for="flex">Flex optie</label><br>
        <input type="radio" name="looptijd" id="flex" value="<?php if ($result->Looptijd == "flex") { echo 'checked';} ?>"><br>




        <h3>Selecteer je extra's</h3>
        <label for="yanga">Yanga sportswater Є2,50 per 4 weken</label><br>
        <input type="checkbox" name="yanga" id="yanga" value="<?php echo $result->Yanga; ?>"><br>

        <label for="coach">Personal online coach Є60,00 eenmalig</label><br>
        <input type="checkbox" name="coach" id="coach" value="<?php echo $result->Coach; ?>"><br>

        <label for="training">Personal training intro Є25,00 eenmalig</label><br>
        <input type="checkbox" name="training" id="training" value="<?php echo $result->Training; ?>"><br><br><br>


        <label for="email">E-mail</label><br>
        <input type="text" name="email" id="email" value="<?php echo $result->Email; ?>"><br>

        <input type="hidden" name="Id" value="<?php echo $result->Id; ?>">

        <input type="submit" value="Verstuur">
    </form>
</body>
</html>