<?php 
$servidor ='localhost';
$banco_de_dados = 'cy3_sab_10h';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($servidor, $usuario, $senha, $banco_de_dados);

if ($mysqli -> error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}


$sql_codigo = "SELECT * FROM filiais";

$sql_query = $mysqli->query($sql_codigo);

$quantidade_linhas = $sql_query->num_rows;

if ($quantidade_linhas > 1){
    $dados = $sql_query->fetch_all();
    for ($i=0; $i < count($dados); $i++){
        $nome_filial = $dados[$i][1];
        echo "<h1>" . $nome_filial . "</h1>";
        echo "<br>";

    }
}

?>