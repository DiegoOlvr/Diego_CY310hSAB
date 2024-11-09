<?php 
    include('../../Conexoes/conexao_sistema.php');
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        

        $sql_codigo = "INSERT INTO cliente (nome, usuario, senha) VALUES ('$nome', '$user', '$pass')";

        if ($mysqli->query($sql_codigo) === TRUE){
            session_start();
            $_SESSION['nome'] = $nome;
            header('Location: painel.php?cadastrado=sim');
        }
        else {
            echo 'Erro ao atualizar, sadness' . $mysqli->error;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <form action="" method="post">
        <label>Nome</label>
        <input type="text" name="nome" required>
        <label>Usuario</label>
        <input type="text" name="user" required>
        <label>Senha</label>
        <input type="text" name="pass" required>

        <input type="submit" value="Cadastrar">
    </form>
    <a href="login.php">Voltar</a>
</body>
</html>