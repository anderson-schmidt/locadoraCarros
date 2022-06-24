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
    <h1>Média de locações por Bairro</h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
                <table border="1">
                    <tr>
                        <th width = "50%">Bairro</th>
                        <th width = "100%">Média de valores locados</th>
                    </tr>
                    <tr>
                        <?php
                        include("../controle/conexao.php");
                        try{
                            $sql = "SELECT b.bairro, AVG(f.valor) FROM cliente c
                            INNER JOIN bairro b ON b.cod_bairro = c.bairro_cliente
                            INNER JOIN locacao l ON c.cod_cliente = l.cliente_locacao
                            INNER JOIN carros_locacao i ON i.locacao = l.cod_locacao
                            INNER JOIN carro f ON i.carro_locado = f.cod_carro
                            GROUP BY b.bairro ORDER BY AVG(f.valor) DESC";
                            foreach($conn->query($sql) as $row){
                                print "<tr><td>".$row['bairro']."</td>
                                <td class= 'valores' width='25%'>R$ ".number_format($row['AVG(f.valor)'], 2 , ",", ".")."</td></tr>";
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