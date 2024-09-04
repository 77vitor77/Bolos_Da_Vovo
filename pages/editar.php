<?php
require __DIR__ . "/../config/config.php";
$dado = [];

if (isset($_GET["id"])) {
    $id = filter_input(INPUT_GET, "id");    

    if ($id) {
        $sql = $pdo->prepare("SELECT * FROM Bolo WHERE idBolo=:idBolo");
        $sql->bindValue(":idBolo", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch(PDO::FETCH_ASSOC);                       
        }
        else {
            header("Location: gerenciaralt.php");
            exit;
        }      
    }
} 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pizza</title>  
</head>
<body>
    <main>
        <form action="./editar_action.php" method="POST">
            <div class="form-item">
                <input type="hidden" name="boloBuscado" value=<?= isset($_POST["idBolo"]) ? $_POST ["idBolo"] : "";?>>               
            </div>
            <div class="form-item">
                <label for="nome-pizza">Nome do Bolo:</label>
                <input type="text" name="nomeBolo" id="nome-bolo" value=<?= isset($dado["nomeBolo"]) ? $dado["nomeBolo"]:"";?>>
                <!-- a chave do array nomePizza é o nome da coluna que veio do BD-->
            </div>
            <div class="form-item">
                <label for="valor-bolo">Valor R$:</label>
                <input type="text" name="valorBolo" id="valor-bolo" value=<?= isset($dado["valorBolo"]) ? $dado["valorBolo"]:"";?>>
            </div>           
            <div class="form-item">
                <label for="descricao-bolo">Descrição:</label>
                <textarea name="descricaoBolo" id="descricaoBolo" cols="50" rows="10"><?= isset($dado["descricaoBolo"]) ? $dado["descricaoBolo"]:"";?>
                </textarea>
            </div>
            <div>
                <input type="submit" name="btn-action" value="Salvar">
                <input type="submit" name="btn-action" value="Voltar">
            </div>
        </form>
    </main>    
</body>
</html>