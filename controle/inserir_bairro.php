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
    <h1>Cadastro de bairro</h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
               <?php
               include("conexao.php");
               try{
                   $var_bairro=$_POST['txt_bairro'];
                   $sql="INSERT INTO bairro(bairro) VALUES('$var_bairro')";
                   $conn->query($sql);
                   echo "<h4>Bairro incluído com sucesso</h4><h3><a href='/Anderson_m31(Favor%20não%20mexer!)/locadora_m31'>Voltar</a></h3>";
               }catch(PDOException $ex){
                   echo "Erro ".$ex->getMessage();
               }
               ?>
</form>
</fieldset></div></div></body></html>
</body>
</html>