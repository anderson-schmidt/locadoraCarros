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
    <h1>
        Recibo
    </h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
                <form method="POST" action="../consultas/con_recibo.php">
                    <table>
                        <tr>
                            <td>
                                <label>
                                    Selecione a locação desejada
                                </label>
                            </td>
                            <td>
                                <?php
                                include ("../controle/conexao.php");
                                try{
                                    $sql = 'SELECT cod_locacao FROM locacao ORDER BY cod_locacao DESC';
                                    print "<select name='locacao'>";
                                    foreach($conn->query($sql) as $row){
                                        print "<option value='".$row['cod_locacao']."'>".$row['cod_locacao']."</option>";
                                    }
                                }catch(PDOException $ex){
                                    echo 'Erro '. $ex->getMessage();
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <td>
                                    <input type='submit' name='Recibo'>
                                </td>
                            </td>
                            <td>
                                <input type="button" value="Voltar" onclick="history.go(-1)">
                            </td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        </div>
    </div>
</body>
</html>