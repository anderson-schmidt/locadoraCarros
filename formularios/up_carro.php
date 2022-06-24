<!DOCTYPE html>
<html lang="pt-br">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css">
    <title>Projeto Locadora</title>
</head>
<body>
    <h1>Atualizar Carro</h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
                <form method="POST" action="../controle/atualizar_carro.php">
                    <table>
                        <tr>
                            <td>
                                <label>Escolha o carro a ser modificado</label>
                            </td>
                            <td>
                                <?php
                                include("../controle/conexao.php");
                                try{
                                    $sql = 'SELECT * FROM carro ORDER BY carro';
                                    print "<select name ='cmb_carro'>";
                                    foreach($conn->query($sql) as $row){
                                        print "<option value ='".$row['cod_carro']."'>".$row['carro']."</option>";
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
                                <label>Digite um novo nome para o carro</label>
                            </td>
                            <td>
                                <input type="text" name="txt_carro">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Selecione o Tipo</label>
                            </td>
                            <td>
                                <?php
                                    include("../controle/conexao.php");
                                    try{
                                        $sql = 'SELECT * FROM tipo ORDER BY tipo';
                                        print "<select name='cmb_tipo'>"; //select é pra exibir uma janela de escolha
                                        foreach($conn->query($sql) as $row){
                                            print"<option value='".$row['cod_tipo']."'.>".$row['tipo']."</option>";
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
                                <label>Selecione a Montadora</label>
                            </td>
                            <td>
                                <?php
                                    include("../controle/conexao.php");
                                    try{
                                        $sql = 'SELECT * FROM montadora ORDER BY montadora';
                                        print "<select name='cmb_montadora'>"; //select é pra exibir uma janela de escolha
                                        foreach($conn->query($sql) as $row){
                                            print"<option value='".$row['cod_montadora']."'.>".$row['montadora']."</option>";
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
                                <label>Insira o Valor</label>
                            </td>
                            <td>
                                <input type="text" name="txt_valor">
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