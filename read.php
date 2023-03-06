<?php
/**
 * Maak een verbinding met de mysqlserver en database
 */
include('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        // echo "Er is een verbinding met de mysql server";
    } else {
        echo "Er is een interne server error opgetreden"; 
    }
} catch(PDOException $e) {
    echo $e->getMessage();
}

/**
 * Maak een select query om de gegevens uit de tabel Persoon te halen
 */

$sql = "SELECT Id
                ,Homeclub
                ,Lidmaatschap
                ,Looptijd
                ,Yanga
                ,Coach
                ,Training
                ,Email
        FROM Inschrijving";

//Bereid de de query voor met de method prepare
$statement = $pdo->prepare($sql);

// Voer de query uit
$statement->execute();

// Zet de opgehaalde gegevens in een array van objecten
$result = $statement->fetchAll(PDO::FETCH_OBJ);
// var_dump($result);

$tableRows = "";

foreach($result as $info) {
    $tableRows .= "<tr>
                        <td>$info->Homeclub</td>
                        <td>$info->Lidmaatschap</td>
                        <td>$info->Looptijd</td>
                        <td>$info->Yanga</td>
                        <td>$info->Coach</td>
                        <td>$info->Training</td>
                        <td>$info->Email</td>
                        <td>
                            <a href='delete.php?Id=$info->Id'>
                                <img src='img/b_drop.png' alt='cross'>
                            </a>
                        </td>
                        <td>
                            <a href='update.php?Id=$info->Id'>
                                <img src='img/b_edit.png' alt='pencil'>
                            </a>
                        </td>
                   </tr>";
}
?>
<h3>Basic-Fit Utrecht</h3>

<a href="index.php">
    <input type="button" value="Maak een nieuw record">
</a>

<br><br>
<table border='1'>
    <thead>
        <th>Homeclub</th>
        <th>Lidmaatschap</th> 
        <th>Looptijd</th>
        <th>Yanga</th>
        <th>Coach</th>
        <th>Training</th>
        <th>Email</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <?php echo $tableRows; ?>
    </tbody>
</table>



