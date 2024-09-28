<?php 
    session_start();

    if(isset($_GET['ok'])){
        $itens = $_SESSION['Itens'];
    }
    else {
        $itens = [];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <h1>Top vendas</h1>
        <form action="verificar.php" method="post" class="container-input">
            <input type="text" name="pesquisa" id="pesquisa">
            <button type="submit">🔍</button>
        </form>
        <table>
            <tr>
                <th>nome</th>
                <th>marca</th>
                <th>quantidade</th>
                <th>valor</th>
            </tr>
            <?php if (!empty($itens)): ?>
                <?php foreach ($itens as $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item[0]); ?></td>
                        <td><?php echo htmlspecialchars($item[1]); ?></td>
                        <td><?php echo htmlspecialchars($item[2]); ?></td>
                        <td><?php echo htmlspecialchars($item[3]); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" style="text-align:center;">Nenhum item encontrado.</td>
                </tr>
            <?php endif; ?>

        </table>
    </main>
</body>
</html>