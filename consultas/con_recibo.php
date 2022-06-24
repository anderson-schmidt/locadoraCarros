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
    <h1>Recibo de Locações</h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
                <?php
                echo "<small>Locadora M31 - data: ".date('d/m/y')." - hora: ".date('H:i')."</small>";
                ?>
                <table class = "tabrecibo"><tr><th>Carro</th><th>Valor R$</th></tr>;
                <?php
                include("../controle/conexao.php");
                try{
                    $locacao=$_POST['locacao'];
                    $total=0.0;
                    $sql = "SELECT c.cliente, l.cod_locacao, i.carro_locado, f.carro, f.valor FROM cliente c
                    INNER JOIN locacao l ON c.cod_cliente=l.cliente_locacao
                    INNER JOIN carros_locacao i ON l.cod_locacao=i.locacao
                    INNER JOIN carro f ON i.carro_locado=f.cod_carro
                    WHERE locacao LIKE '$locacao'";
                    foreach($conn->query($sql) as $row){
                        print "<tr class='linharecibo'><td>".$row['carro']."</td>
                        <td class='valores'>".number_format($row['valor'],2,",",".")."</td></tr>";
                        $total += $row['valor'];
                    }
                    print "<h3>RECIBO NÙMERO <u>".$row['cod_locacao']."</u></h3><h4>Cliente: <u>".$row['cliente'].
                    "<br><br></u> Total: R$ <u><b>".number_format($total,2,",",".")."</b></u></h4>
                    <h3>Carros Selecionados:</h3></table><br>
                    <a href='http://localhost/Anderson_m31(Favor%20não%20mexer!)/locadora_m31/index.html'>Voltar</a>";
                }catch(PDOException $ex){
                    echo 'Erro '.$ex->getMessage();
                }
                ?>
            </fieldset>
        </div>
    </div>
</body>
</html>