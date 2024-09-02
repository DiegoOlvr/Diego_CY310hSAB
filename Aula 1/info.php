<?php
$usuario = $_POST['user'];
$senha = $_POST['pass'];


$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    echo "$x <br>";
}

for ($indice=0; $indice< count($colors); $indice++){
    echo "$colors[$indice]";
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
    <main>
        <h1>informações</h1>
        <?php
            echo "<span>Bem vindo, $usuario!! </span>";
            echo "<span>A sua senha é: $senha</span>"
        ?>
    </main>
</body>
</html>