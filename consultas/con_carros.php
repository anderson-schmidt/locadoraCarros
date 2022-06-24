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
    <h1>Carros</h1>
    <div class="flex-container">
        <div id="box">
            <table id="carros" border="1">
                <tr>
                    <th></th>
                    <th width="50$">Carro</th>
                    <th>Montadora</th>
                    <th>Valor</th>
                </tr>
                <?php
                include("../controle/conexao.php");
                try{
                    $carro =$_POST['txt_carro'];
                    $sql="SELECT c.cod_carro, c.carro, t.tipo, m.montadora, c.valor FROM carro c
                    INNER JOIN tipo t ON t.cod_tipo=c.tipo_carro
                    INNER JOIN montadora m ON m.cod_montadora=c.montadora_carro
                    WHERE carro LIKE '%$carro%' ORDER BY c.carro";
                    print"<form method='post' action='../controle/inserir_itens_locacao.php'";
                        foreach($conn->query($sql) as $row){
                            print "<tr>
                                        <td>
                                            <input type='radio' name='brd_item' value='".$row['cod_carro']."'>
                                        </td>
                                        <td>
                                            ".$row['carro']."
                                        </td>
                                        <td>
                                            ".$row['tipo']."
                                        </td>
                                        <td class='valores' width='30%'>
                                            R$ ".number_format($row['valor'],2,",",".")."
                                        </td>
                                    </tr>";
                        }
                        echo "<tr>
                        <td colspan='2'>
                        <td>
                            <input type='submit' value='Incluir item'></form>
                        </td>
                        <td>
                           <a href='" . $_SERVER['HTTP_REFERER'] . "'>Voltar</a>
                        </td>
                        </td>
                        </tr>";
                    }catch(PDOException $ex){
                        echo 'Erro '.$ex->getMessage();
                    }
                    ?>
            </table>
        </div>
    </div>    
</body>
</html>