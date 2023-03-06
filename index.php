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

    <form action="create.php" method="post">
        <label for="homeclub">Kies je homeclub:</label><br>
        <select name="homeclub" id="homeclub">
            <option value="">Kies je locatie</option>
            <option value="">Franciscusdreef 80</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select><br><br>

        <p>Selecteer een lidmaatschap</p><br>
        <label for="">Lidmaatschap</label><br>
        <input type="text" name="" id=""><br><br>

        <p>Looptijd:</p><br>
        <label for="">Looptijd</label><br>
        <input type="text" name="" id=""><br><br>

        <p>Selecteer je extra's</p><br>
        <label for="">Yanga</label><br>
        <input type="text" name="" id=""><br><br>

        <label for="">Coach</label><br>
        <input type="text" name="" id=""><br><br>

        <label for="">Training</label><br>
        <input type="text" name="" id=""><br><br>

        <label for="email">E-mail</label><br>
        <input type="text" name="email" id="email"><br><br>

        <input type="submit" value="Verstuur">
    </form>
</body>
</html>