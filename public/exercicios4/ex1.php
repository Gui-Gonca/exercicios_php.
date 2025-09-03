<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            background-color: whitesmoke ;
        }
    </style>
</head>
<body>
    <form action="ex1.php" method="post">
        <label for="numero">Numero: </label><br>
        <input type="text" id="numero" name="numero" required><br><br>
    </form>
    <?php 
        $numero = $_POST['numero'] ?? null ;
    ?>
    <?php
        $mult = 1;
        for ($mult = 1; $mult < 11; $mult++) {
            $res = $mult * $numero;
            echo "<p>$mult x $numero = $res </p>";
        }
    ?>
</form>
</body>
</html>