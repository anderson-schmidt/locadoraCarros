<?php
try{
$conn = new PDO("mysql:host=localhost;dbname=locadora_m31","root","");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//para refinar o erro/excessão
$conn->exec("set names UTF8");
}catch(PDOException $ex){
echo 'Deu ruim: '.$ex->getMessage();//setar msg de erro
}
?>