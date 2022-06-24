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
    <h1>Deletar Bairro</h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
                <form method="POST" action="../controle/deletar_bairro.php">
                    <table>
                        <tr>
                            <td>
                                <label>Selecione o Bairro</label>
                            </td>
                            <td>
                            <?php
                                        include("../controle/conexao.php");
                                        try{
                                            $sql = 'SELECT * FROM bairro ORDER BY bairro';
                                            print "<select name = 'cmb_bairro'>";
                                            foreach($conn->query($sql) as $row){
                                                print"<option value ='".$row['cod_bairro']."'.>".$row['bairro']."</option>";
                                            }
                                            print"</select>";
                                        }
                                        catch(PDOException $ex){
                                            echo 'Erro '.$ex->getMessage();
                                        }
                                    ?><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <td>
                                    <input type="submit" value="Confirmar">
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