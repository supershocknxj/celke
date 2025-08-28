<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastrar</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>
    <?php
    if(isset($_SESSION['mg']))
        echo $_SESSION['mg'];
        unset($_SESSION['mg'])

    ?>
    <form method="POST" action="processa.php">
        <label>Nome: </label>
        <input tupe="text" name="nome" placeholder="Digite o nome completo"><br><br>

        <label>E-mail </label>
        <input tupe="email" name="email" placeholder="Digite o seu melhor e-mail"><br><br>

        <input type="submit" values="Cadastrar">

    </form>
    
</body>
</html>