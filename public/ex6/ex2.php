<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ex2.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        <button type="submit">Cadastrar</button>

    <?php
        $nome = $_POST['nome'];
        function saudacao(){
            echo "<p>Olá, $nome !</p>";
        } 

        saudacao();
    ?>   


</body>
</html>