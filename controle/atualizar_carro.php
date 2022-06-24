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
    <h1>Atualizar Cliente</h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
                <?php
                include("conexao.php");
                try{
                    $cod_carro = $_POST['cmb_carro'];
                    $up_carro = $_POST['txt_carro'];
                    $up_tipo = $_POST['cmb_tipo'];
                    $up_montadora = $_POST['cmb_montadora'];
                    $up_valor = $_POST['txt_valor'];
                    $sql = "UPDATE carro SET carro = '$up_carro', tipo_carro = '$up_tipo', montadora_carro = '$up_montadora', valor = '$up_valor' WHERE cod_carro=$cod_carro";
                    $conn->query($sql);
                    echo "<h4> Carro atualizado com sucesso</h4>
                    <h3><a href='/Anderson_m31(Favor%20não%20mexer!)/locadora_m31'>Voltar</a></h3>";
                }catch(PDOException $ex){
                    echo "Erro ".$ex->getMessage();
                }
                ?>
            </fieldset>
        </div>
    </div>
</body>
</html>