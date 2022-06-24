<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta name="viewport" content="width=device=width, initial-scale=1.0, max-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css">
    <title>Cadastro do locaçao</title>
</head>
<body>
    <h1>Cadastro de Locação</h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
             <form method="POST" action="../controle/inserir_locacao.php">
                 <table>
                     <tr>
                        <td>
                        <label>Cliente da Locação</label>
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
                                }
                                catch(PDOException $ex){
                                    echo 'Erro ';$ex->getMessage();
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Data:</label>
                        </td>
                        <td>
                            <input type="date" name="txt_data"><br>
                        </td>
                    </tr>
                    <tr>
                        <td><td><td>
                            <input type="submit" value="Cadastrar">
                        </td></td></td>
                        <td>
                            <input type="button" value="Voltar" onclick="history.go(-1)">
                        </td>
                    </tr>
                </table>
     </form>
 </fieldset></div></div></body></html>