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
    <h1>Deletar Cliente</h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
                <form method="POST" action="../controle/deletar_cliente.php">
                    <table>
                        <tr>
                            <td>
                                <label>Selecione o Cliente</label>
                            </td>
                            <td>
                                <?php
                                include("../controle/conexao.php");
                                try{
                                    $sql = 'SELECT * FROM cliente ORDER BY cliente';
                                    print "<select name = 'cmb_cliente'>";
                                    foreach($conn->query($sql) as $row){
                                        print"<option value = '".$row['cod_cliente']."'.>".$row['cliente']." - ".$row['cpf']."</option>";
                                    }
                                    print"</select>";
                                }catch(PDOException $ex){
                                    echo 'Erro '.$ex->getMessage();
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <td>
                                    <input type="submit" value="Excluir">
                                    <input type="button" value="Voltar" onclick="history.go(-1)">
                                </td>
                            </td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        </div>
    </div>
</body>
</html>