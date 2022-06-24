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
                <form method="POST" action="../controle/inserir_bairro.php">
                    <tr>
                        <td>
                            <label>Bairro:</label>
                        </td>
                        <td>
                            <input type="text" name="txt_bairro"/>
                        </td>
                        <td>
                            <input type="submit" value="Cadastrar">
                        </td>
                    </tr>
                    <tr>
                        <td><td><td><td>
                            <br><input type="button" value="Voltar" onclick="history.go(-1)">
                        </td></td></td></td>
                    </tr>
</form>
</fieldset></div></div></body></html>
</body>
</html>