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
    <h1>Basic-Fit Utrecht</h1>

    <form action="create.php" method="post">

        <label for="homeclub">Kies je homeclub:</label><br>
        <select name="homeclub" id="homeclub">
            <option value="">Kies je locatie</option>
            <option value="Franciscusdreef 80">Franciscusdreef 80</option>
            <option value="Middenweteringen 21">Middenweteringen 21</option>
            <option value="Zonnebaan 22">Zonnebaan 22</option>
            <option value="Moreelsehoek 2">Moreelsehoek 2</option>
            <option value="Van Heuven Goedhartplein 13">Van Heuven Goedhartplein 13</option>
            <option value="Europaplein 705">Europaplein 705</option>
            <option value="Herculesplein 375-77">Herculesplein 375-77</option>
        </select><br><br>


        <h3>Selecteer een lidmaatschap</h3>
        <label for="comfort">Comfort</label><br>
        <input type="radio" name="lidmaatschap" id="comfort" value="comfort"><br>
        <label for="premium">Premium</label><br>
        <input type="radio" name="lidmaatschap" id="premium" value="premium"><br>
        <label for="all">All in</label><br>
        <input type="radio" name="lidmaatschap" id="all" value="all"><br><br>


        <h3>Looptijd:</h3>
        <label for="jaarlidmaatschap">Jaarlidmaatschap</label><br>
        <input type="radio" name="looptijd" id="jaarlidmaatschap" value="jaarlidmaatschap"><br>
        <label for="flex">Flex optie</label><br>
        <input type="radio" name="looptijd" id="flex" value="flex"><br>


        <h3>Selecteer je extra's</h3>
        <label for="yanga">Yanga sportswater Є2,50 per 4 weken</label><br>
        <input type="checkbox" name="yanga" id="yanga"><br>

        <label for="coach">Personal online coach Є60,00 eenmalig</label><br>
        <input type="checkbox" name="coach" id="coach"><br>

        <label for="training">Personal training intro Є25,00 eenmalig</label><br>
        <input type="checkbox" name="training" id="training"><br><br><br>

        <label for="email">E-mail</label><br>
        <input type="text" name="email" id="email"><br><br>

        <input type="submit" value="Verstuur">
    </form>
</body>
</html>