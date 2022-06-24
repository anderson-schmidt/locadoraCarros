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
    <h1>Cadastro de Montadora</h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
               <?php
               include("conexao.php");
               try{
                   $var_montadora=$_POST['txt_montadora'];
                   $sql="INSERT INTO montadora(montadora) VALUES('$var_montadora')";
                   $conn->query($sql);
                   echo "<h4>Montadora incluído com sucesso</h4><h3><a href='/Anderson_m31(Favor%20não%20mexer!)/locadora_m31'>Voltar</a></h3>";
               }catch(PDOException $ex){
                   echo "Erro ".$ex->getMessage();
               }
               ?>
</form>
</fieldset></div></div></body></html>
</body>
</html>