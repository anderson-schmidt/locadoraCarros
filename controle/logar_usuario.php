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
    <h1>Login</h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
                <?php
                include("conexao.php");
                try{
                    $usuario = $_POST['cmb_usuario'];
                    $senha = $_POST['psw_senha'];
                    $sql = "SELECT cod_usuario FROM usuario WHERE cod_usuario='$usuario'";
                    $conn->query($sql);
                    $query = $conn->prepare($sql);
                    $result = $query->execute();
                    $cod_user = $query->fetchColumn();
                    var_dump($cod_user);
                    if($cod_user=='1'){
                        echo"Acesso Liberado";
                        print "<br><br><a href='http://localhost/Anderson_m31(Favor%20n%c3%a3o%20mexer!)/locadora_m31/'>Continuar</a>";
                    }else{
                        echo "Tente outra Vez!";
                        print "<br><br><a href='http://localhost/Anderson_m31(Favor%20n%c3%a3o%20mexer!)/locadora_m31/home.php'>Voltar</a>";
                    }
                }
                catch(PDOException $ex){
                    echo 'Erro '.$ex->getMessage();
                }
                ?>
            </fieldset>
        </div>
    </div>
</body>
</html>