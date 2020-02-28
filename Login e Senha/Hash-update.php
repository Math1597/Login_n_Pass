<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Bem vindo</title>
    </head>
    <body>
        <?php
        /*
         * Algoritmo que criptografa uma senha alfanumérica gravada na tabela utilizando uma prodedure SQL
         */
        require 'init.php';
        require_once 'functions.php';

        $id = 1;
        $senha1 = 'abc@123'; //senha a ser criptografada
        $senha1Hash = make_hash($senha1); //Função de criptografia

        try {
            $conn = db_connect();
            $stmt = $conn->prepare('UPDATE cliente SET Senha = :senha WHERE Id = :id');
            $stmt->execute(array(
                ':id' => $id,
                ':senha' => $senha1Hash
            ));
            $conn = null;
            echo $stmt->rowCount();
            echo "<br>$stmt->rowCount() campo atualizado com sucesso.";
        } catch (PDOException $e) {
            echo  "<br>Erro.<br>" . $e->getMessage();
        }
        ?>
    </body>
</html>

