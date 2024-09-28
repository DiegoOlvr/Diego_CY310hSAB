<?php 
    include('../Conexoes/conexao_estoque.php');

    $id = $_GET['id'];

    $sql_codigo = "SELECT * FROM itens WHERE Id = '$id'";
    $resultado = $mysqli->query($sql_codigo);
    $item = $resultado->fetch_assoc();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar item</h1>
    <form action="" method="post">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $item['Nome']; ?>" required>
        <label>Quantidade</label>
        <input type="number" name="quantidade" value="<?php echo $item['Quantidade']; ?>" required>

        <input type="submit" value="Salvar">
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>