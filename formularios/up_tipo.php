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
    <h1>Atualizar Tipo</h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
                <form method="POST" action="../controle/atualizar_tipo.php">
                    <table>
                        <tr>
                            <td>
                                <label>Escolha o Tipo a ser modificado</label>
                            </td>
                            <td>
                                <?php
                                include("../controle/conexao.php");
                                try{
                                    $sql = 'SELECT * FROM tipo ORDER BY tipo';
                                    print "<select name ='cmb_tipo'>";
                                    foreach($conn->query($sql) as $row){
                                        print "<option value ='".$row['cod_tipo']."'>".$row['tipo']."</option>";
                                    }
                                    print "</select>";
                                }catch(PDOException $ex){
                                    echo 'Erro '.$ex->getMessage();
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Digite um novo nome para o Tipo</label>
                            </td>
                            <td>
                                <input type="text" name="txt_tipo">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <td>
                                    <input type="submit" value="Atualizar">
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