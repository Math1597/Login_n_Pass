<!DOCTYPE html>
<html>
    <body>
        <?php
        echo "<table style='border: solid 1px red; color:white; background-color:Tomato;'>";
        echo "<tr><th>Id</th><th>Nome</th><th>Sobrenome</th></tr>";

        /*
         * O seguinte exemplo utiliza declarações preparadas.
         * Seleciona o id, o nome e o sobrenome, e exibe os
         * resultados numa tabela html.
         */
        class Tabela extends RecursiveIteratorIterator {

            function __construct($it) {
                parent::__construct($it, self::LEAVES_ONLY);
            }

            function current() {
                return "<td style='width:150px;border:1px solid blue; color:black; background-color:DodgerBlue;'>" . parent::current() . "</td>";
            }

            function beginChildren() {
                echo "<tr>";
            }

            function endChildren() {
                echo "</tr>" . "\n";
            }

        }
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT Usuário, Senha FROM cliente");
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach (new Tabela(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                echo $v;
            }
        } catch (PDOException $e) {
            echo "Tá sabendo legal!<br> " . $e->getMessage();
        }
        echo "</table>";
        echo "<br>";
        ?>
        <a href="Export_Cliente.php">Exportar</a>
    </body>
</html>