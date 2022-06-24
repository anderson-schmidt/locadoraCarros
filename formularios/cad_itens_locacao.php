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
    <h1>Pesquisa de Carros</h1>
    <div class="flex-container">
        <div id="box">
            <fieldset>
                <form method="POST" action="../consultas/con_carros.php">
                    <tr>
                        <td>
                            <input type="text" name="txt_carro">
                        </td>
                        <td>
                            <input type="submit" value="Carros">
                        </td>
                        <td><br>
                            <input type="button" value="Voltar" onclick="history.go(-1)">
                        </td>
                    </tr>
                </form>
            </fieldset>
        </div>
    </div>
</body>
</html>