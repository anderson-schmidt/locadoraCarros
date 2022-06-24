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
            <h3>Acesso</h3>
            <table>
                <tr>
                    <form method="post" action="controle/logar_usuario.php">
                        <td>
                            <label>Usuário </label>
                        </td>
                        <td>
                            <?php
                            include("controle/conexao.php");
                            try{
                                $sql = 'SELECT * FROM usuario ORDER BY usuario';
                                print "<select name='cmb_usuario'>";
                                foreach($conn->query($sql) as $row){
                                    print "<option value='".$row['cod_usuario']."'>".$row['cod_usuario']." - ".$row['usuario']."</option>";
                                }
                                print "</select>";
                            }catch(PDOException $ex){
                                echo 'Erro '.$ex->getMessage();
                            }
                            ?>
                        </td>
                        <tr>
                            <td>
                                <label>Senha </label>
                            </td>
                            <td>
                                <input type="password" name="psw_senha">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <td>
                                    <input type="submit" value="Acessar">
                                </td>
                            </td>
                        </tr>
                    </form>
                </tr>
            </table>
        </div>
    </div>
    <p>Para maiores informações acesse <a href="https://www.w3schools.com/">W3 Schools</a></p>
</body>
</html>