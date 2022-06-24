<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta name="viewport" content="width=device=width, initial-scale=1.0, max-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css">
    <title>Cadastro de tipo de veículo</title>
</head>
<body>
    <h1>Cadastro de tipo de veículo</h1>
    <div class="flex-container">
        <div id="box">
 <fieldset>
     <form method="POST" action="../controle/inserir_tipo.php">
         <label>Digite o tipo de veículo</label>
         <input type="text" name="txt_tipo">
         <input type="submit" value="Cadastrar">
         <br><input type="button" value="Voltar" onclick="history.go(-1)">
     </form>
    </fieldset></div></div></body></html>