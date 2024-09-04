<?php
// session_start();
require __DIR__ . "/../config/config.php";

// if (empty($_SESSION["usuarioLogado"])) {
//     header("Location: login.php");
//     exit;
// }

// $sql = $pdo->query("SELECT * FROM Bolo");
// $sql->execute();
// if ($sql->rowCount() > 0) {
//     # trazer todas as pizzas
//     $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
// }
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
                <tr>
                    <td>BOLO A</td>
                    <td>Lorem ipsum</td>
                    <td class="actions">
                        <a href="#">Editar</a>
                        <a href="#">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <td>BOLO B</td>
                    <td>Lorem ipsum</td>
                    <td class="actions">
                        <a href="#">Editar</a>
                        <a href="#">Excluir</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="footer">
        Footer Content
    </div>

</body>

</html>