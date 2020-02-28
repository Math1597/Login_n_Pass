<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Bem vindo</title>
    </head>
    <body>
        <?php
        require 'init.php';
        require 'Validação.php';
        $nome = $_POST["nome"];
        $usuario = $_POST["usuario"];
        $senha1 = $_POST["senha"];
        $senha1Hash = make_hash($senha1);
        $email = $_POST["email"];

        try {
            $conn = db_connect();
            $sql = "INSERT INTO cliente (Nome, Usuário, Senha, Email)"
                    . "VALUES ('$nome','$usuario','$senha1Hash', '$email')";
            $conn->exec($sql);
            $last_id = $conn->lastInsertId();
            date_default_timezone_set("America/Sao_Paulo");
            echo "Dados cadastrados com sucesso. Último registro inserido foi o " . $last_id, ", em " . date('d.m.Y, H:i:s');
        } catch (PDOException $e) {
            // reverte a transação se algo der errado
            $conn->rollback();
            echo $sql . "<br>" . $e->getMessage();
            die();
        }
        ?>
    </body>
</html>

