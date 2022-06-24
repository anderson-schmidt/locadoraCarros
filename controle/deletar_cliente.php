<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css">
    <title>Projeto Locadora</title>
</head>
<body>
    <h1>Excluir Cliente</h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
                <?php
                include("conexao.php");
                try{
                    $cod_cliente = $_POST['cmb_cliente'];
                    $sql = "DELETE FROM cliente WHERE cod_cliente = '$cod_cliente'";
                    $conn->query($sql);
                    echo "<h4>Cliente excluído com sucesso</h4>
                    <h3><a href = '/Anderson_m31(Favor%20não%20mexer!)/locadora_m31'>Voltar</a></h3>";
                }catch(PDOException $ex){
                    echo 'Erro '.$ex->getMessage();
                }
                ?>
            </fieldset>
        </div>
    </div>
    
</body>
</html>