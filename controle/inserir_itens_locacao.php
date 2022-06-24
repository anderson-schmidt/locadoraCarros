<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, max-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css">
    <title>Projeto Locadora</title>
</head>
<body>
    <h1>

    </h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
                <?php
                    include("conexao.php");
                    try{
                        $item=$_POST['brd_item'];

                        $sql="SELECT cod_locacao FROM locacao ORDER BY cod_locacao DESC LIMIT 1";
                        foreach($conn->query($sql)as $row){
                            $codloc=$row['cod_locacao'];
                        }
                        $sql="INSERT INTO carros_locacao(carro_locado, locacao) VALUES ('$item', $codloc)";
                        $conn->query($sql);
                            
                        echo "<h4>Item incluído com sucesso</h4>
                        <h3><a href='/Anderson_m31(Favor%20não%20mexer!)/locadora_m31/formularios/cad_itens_locacao.php'>Selecionar outro Veículo</a></h3>;
                        <h3><a href='/Anderson_m31(Favor%20não%20mexer!)/locadora_m31/formularios/cad_finalizar.php'>Proceder com a locação</a></h3>";
                    }catch(PDOException $ex){
                        echo "Erro ".$ex->getMessage();
                    }
                ?>
            </fieldset>
        </div>
    </div>
    
</body>
</html>