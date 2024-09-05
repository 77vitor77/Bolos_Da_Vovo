<?php
// session_start();
require __DIR__ . "/../config/config.php";

// if (empty($_SESSION["usuarioLogado"])) {
//     header("Location: login.php");
//     exit;
// }

$sql = $pdo->query("SELECT * FROM Bolo");
$sql->execute();
if ($sql->rowCount() > 0) {
    # trazer todas as pizzas
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>


<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $base ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo $base ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo $base ?>/css/style.css">
    <title>Bolos da vovo</title>
</head>

<body>
    <div class="header">
        <img src="#" alt="Logo">
        <div class="user-info">
            <span>Nome do Usuário Logado</span>
            <a href="#">Sair</a> - <a href="#">Cadastrar</a>
        </div>
    </div>

    <div class="main-content">
        <h2>Lista de Bolos</h2>
        <table class="cake-list">
            <thead>
                <tr>
                    <th>Bolo</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados as $key => $value): ?>
                    <tr>
                        <td><?php echo $value["nomeBolo"]; ?></td>
                        <td><?php echo $value["valorBolo"]; ?></td>
                        <td><?php echo $value["descricaoBolo"]; ?></td>
                        <td class="actions">
                            <a href="./editar.php?id=<?php echo $value["idBolo"]; ?>">Editar</a>
                            <span>|</span>
                            <a href="./excluir_action.php?id=<?php echo $value["idBolo"]; ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="footer">
        Footer Content
    </div>

</body>

</html>