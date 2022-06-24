<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css">
    <title>Projeto Locadora</title>
</head>
<body>
    <h1>Faturamento por tipo</h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
                <table border="1">
                    <tr>
                        <th width = "50%">Tipo</th>
                        <th width = "100%">Total locado</th>
                    </tr>
                    <tr>
                        <?php
                        include("../controle/conexao.php");
                        try{
                            $sql = "SELECT t.tipo, SUM(c.valor) FROM carro c
                            INNER JOIN tipo t ON t.cod_tipo = c.tipo_carro
                            GROUP BY t.tipo ORDER BY SUM(c.valor) DESC";
                            foreach($conn->query($sql) as $row){
                                print "<tr><td>".$row['tipo']."</td>
                                <td class= 'tipo' width='25%'>R$ ".number_format($row['SUM(c.valor)'], 2 , ",", ".")."</td></tr>";
                            }
                        }catch(PDOException $ex){
                            echo 'Erro '.$ex -> getMessage();
                        }
                        ?>
                    </tr>
                    <tr>
                        <td>
                            <td>
                                <a href='http://localhost/Anderson_m31(Favor%20n%c3%a3o%20mexer!)/locadora_m31/'>Voltar</a>
                            </td>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </div>
    </div>
</body>
</html>