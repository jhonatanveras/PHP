<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';

$num = 10;

echo '<br>' . $num;

$num = $num + 12;

echo '<br>' . $num;

$num = $num + 1.2;

echo '<br>' . $num;

$num++;

echo '<br>' . $num;

$num--;

echo '<br>' . $num;

++$num;

echo '<br>' . $num;

--$num;

$num = 1000;

echo '<br>' . $num;

$num %= 3;

echo '<br>' . $num;

$num += 5;

echo '<br>' . $num;

$num *= 15;

echo '<br>' . $num;

$num **= 3;

echo '<br>' . $num;

$num /= 5;

echo '<br>' . $num;

$num *= 5;

echo '<br>' . $num;

$nome = 'Jhonatan';

echo '<br>' . $nome;

$nome = $nome . ' Veras';

echo '<br>' . $nome;

$valor = 'Existe';

echo '<br>' . $valor;

$default = $valor ?? 'default';

echo '<br>' . $default;


// interpolação
echo '<br>';

$n = 5;

echo '<br>';
echo "eu tenho $n gols";

echo '<br>';
echo "eu tenho {$n}2 gols";


// variáveis variáveis
echo '<br>';

$a = 'valorA';
$$a = 'valorAA';

echo '<br>';
echo "$a {$$a} ${$a} $valorA";

// Valor Vs Referência
echo '<br>';

$v = "valor inicial";
echo '<br>';
echo $v;

$variavelValor = $v;
echo '<br>';
echo $variavelValor;

$variavelValor = 'segundo valor';
echo '<br>';
echo $variavelValor;

$variavelReferencia = &$v;
echo '<br>';
echo $variavelReferencia;

$v = 'terceiro valor';
echo '<br>';
echo $v;
echo '<br>';
echo $variavelReferencia;

// Constantes
echo '<br>';

define("TAXA_JUROS", 5.9);
echo '<br>';
echo TAXA_JUROS;

const TAXA_NOVA = 5.2;

echo '<br>';
echo TAXA_NOVA;

$taxa = 4.8;

define("TAXA_ATUAL", $taxa);
echo '<br>';
echo TAXA_ATUAL;

echo '<br>';
echo PHP_VERSION;

echo '<br>';
echo PHP_INT_MAX;

echo '<br>';
echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __DIR__;