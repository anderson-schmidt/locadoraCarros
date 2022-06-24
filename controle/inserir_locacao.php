<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device=width, initial-scale=1.0, max-scale=1.0">       
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css">
    <title>Projeto Locadora</title>
</head>
<body>
    <h1>Cadastro de Locação</h1>
    <div class="flex-container">
        <div id="box">

            <fieldset>
                <?php
                include("conexao.php");
                try{
                    $cliente=$_POST['cmb_cliente'];
                    $var_data=$_POST['txt_data'];
                    $var_data=DATE($var_data);
                    
                    $sql="INSERT INTO locacao(cliente_locacao,data_locacao) VALUES ('$cliente','$var_data')";
                    $conn->query($sql);
                    echo"<h4>Locação Inicializada!</h4><h5><a href='../formularios/cad_itens_locacao.php'>Selecionar Veículos</a></h5><a href='" . $_SERVER['HTTP_REFERER'] . "'>Voltar</a>";
                }catch(PDOException $ex){
                    echo "Erro ".$ex->getMessage();
                }
                ?>
            </fieldset>
        </div>
    </div>
    
</body>
</html>