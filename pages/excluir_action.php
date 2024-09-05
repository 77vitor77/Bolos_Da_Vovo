<?php
require __DIR__ . "/../config/config.php";

if (isset($_GET["id"])) {
    $id = filter_input(INPUT_GET, "id");

    if ($id) {
        $sql = $pdo->prepare("DELETE FROM Bolo WHERE idBolo = :idBolo");
        $sql->bindValue(":idBolo", $id);
        $sql->execute();
        header("Location: adm.php");
        exit;
    }
}
