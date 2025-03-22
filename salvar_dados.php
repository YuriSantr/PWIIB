<?php
$email;
$senha;
$idade;
$nome;
$email = isset($_GET["email"]) ? $_GET["email"] : "Não informada";
$senha = isset($_GET["senha"]) ? $_GET["senha"] : "Não informado";
echo $email;
echo $senha;

 
$idade = isset($_GET["idade"]) ? $_GET["idade"] : "Não informado";
$nome = isset($_GET["nome"]) ? $_GET["nome"] : "Não informada";
echo $idade;
echo $nome;
?>

<?php
$idade1;
$idade2;
$num1;
$num2;
$idade1 = isset($_GET["idade1"]) ? $_GET["idade1"] : "Não informado";
$nome1 = isset($_GET["nome1"]) ? $_GET["nome1"] : "Não informada";
echo $idade1;
echo $nome1;

$num1 = isset($_GET["num1"]) ? $_GET["num1"] : 0;
$num2 = isset($_GET["num2"]) ? $_GET["num2"] : 0;
 $soma= $num1 + $num2;
 echo $soma;
?>
