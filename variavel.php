<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css"></a>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <img src="./img/sk.jpg" alt="Bootstrap" width="30" height="24">
    <a class="navbar-brand" img="#" href=" #">Projeto PW 2 Turma B</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PHP
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="variavel.php">variavel</a></li>
            <li><a class="dropdown-item" href="if.php">if</a></li>
            <li><a class="dropdown-item" href="while.php">while</a></li>
            <li><a class="dropdown-item" href="for.php">for</a></li>
            <li><a class="dropdown-item" href="switch.php">switch</a></li>
            <li><a class="dropdown-item" href="array_vetor.php">array/vetor</a></li>
          </ul>
      </ul>
    </div>
  </div>
</nav>

    <h1>pagina das variaveis</h1>

    <h1>variavel</h1>
  <h3>declaração de valores</h3>
  <p>A declaração de variáveis em PHP é feita utilizando o símbolo de cifrão ($) antes do nome da variável. O nome da variável deve começar com uma letra ou um underscore (_), seguido por letras, números ou underscores. As variáveis em PHP são dinâmicas, ou seja, não é necessário declarar o tipo da variável antes de usá-la. O valor da variável pode ser alterado ao longo da execução do código.</p>


  <pre>
      $nome = "João";  // variável do tipo string
      $idade = 25;     // variável do tipo inteiro
      $altura = 1.75;   // variável do tipo float
  </pre>

  <?php 
    $nome = "Fernando";
    $idade = 34;
    $peso = 79.500;
    $altura = 1.77;
    $isProf = true;

    $namorada = false;
    $salario = 5000.50;

    echo "<h1>$salario</h1>";

    $numeroTenis = "39";

    echo "$idade +  $peso";
  ?>

<h1>Constantes</h1>
<p>
Em PHP, constantes são valores fixos que não podem ser alterados durante a execução do programa. Elas são declaradas com a palavra-chave define() ou usando a palavra-chave const (para constantes definidas em classes ou escopos específicos).

A principal diferença entre constantes e variáveis é que, enquanto as variáveis podem ter seu valor alterado, as constantes mantêm o mesmo valor durante todo o script. Constantes podem ser usadas em qualquer lugar do código e não precisam do símbolo de cifrão ($).

<br />
Exemplo de declaração de constante:
</p>
 
    <pre>
 
     define("PI", 3.14);  // Usando define()
     echo PI;  // Imprime 3.14

     const URL = "https://www.exemplo.com";  // Usando const
     echo URL;  // Imprime https://www.exemplo.com

    </pre>
<?php
  define("PI",3.14);
  echo PI;
  echo "<br>";

  const coordenador = "Faberson";
  echo "<br>";
  echo coordenador;

?>


<h1>Exercícios</h1>

<ol>
  <li>Crie 3 variaveis, atribua valor e some os valores.  Imprima na tela </li>
  <li>Crie 2 variaveis, atribua valor e multiplique os valores. Imprima na tela</li>
  <li>Crie 3 variáveis, uma para descrição de produto e outras duas para quantidade em estoque e valor de venda, 
    imprima na tela as informações cocatenadas.
  </li>
  <li>
    Crie uma variável boleana, atribua true ou false e imprima na tela
  </li>
  
</ol>

<h2>exercicio1</h2>
<?php
$n1 = 1;
$n2 = 1;
$n3 = 1;
echo $n1 + $n2 + $n3;
?>

<h2>exercicio2</h2>
<?php
$n11 = 2;
$n22 = 5;
echo $n11 * $n22;
?>
<h2>exercicio3</h2>
<?php
$produto = "refri conquista";
$quantidade = 6;
$vv = 10.00;
echo $produto,"  ", $quantidade,"  ", $vv
?>
<h2>exercicio4</h2>
<?php
$presidiario = true;
echo $presidiario;
?>
<br>

    <img src="./img/sk.jpg" alt="Bootstrap" width="30" height="24">
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>

