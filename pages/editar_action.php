<?php
require __DIR__ . "/../config/config.php";

$nome = filter_input(INPUT_POST, 'nomeBolo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$valor = filter_input(INPUT_POST, 'valorBolo', FILTER_VALIDATE_FLOAT);
$descricao = filter_input(INPUT_POST, 'descricaoBolo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);



$sql = $pdo->prepare("UPDATE Bolo SET nomeBolo = :nomeBolo, fotoBolo = :fotoBolo, valorBolo = :valorBolo, descricaoBolo = :descricaoBolo
                                WHERE idBolo = :idBolo");

$sql->bindValue(":nomeBolo", $nome);
$sql->bindValue(":fotoBolo", "images/foto1.png");
$sql->bindValue(":valorBolo", $valor);
$sql->bindValue(":descricaoBolo", $descricao);
$sql->bindValue(":idBolo", $_COOKIE["idBolo"]);
$sql->execute();


header("Location: adm.php");
exit;
