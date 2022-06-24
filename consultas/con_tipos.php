<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos/geral.css">
    <title>Projeto Locadora</title>
</head>
<body>
    <h1>Locadora de Veículos</h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
                <table border="2">
                    <tr>
                        <th width = "100%">Montadora</th>
                        <th width = "100%">Quantidade</th>
                    </tr>
                    <tr>
                        <?php
                        include("../controle/conexao.php");
                        try{
                            $tipo =$_POST['txt_tipo'];
                            $sql = "SELECT t.tipo FROM tipo
                            WHERE tipo LIKE '%$tipo%' ORDER BY tipo";
                            foreach($conn->query($sql) as $row){
                                print "<tr><td>".$row['montadora']."</td>
                                <td class= 'valores' width='25%' align='center'> ".$row['COUNT(c.valor)']."</td></tr>";
                            }
                        }catch(PDOException $ex){
                            echo 'Erro '.$ex -> getMessage();
                        }
                        ?>
                    </tr>
                    <tr>
                        <td>
                            <td align="center">
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