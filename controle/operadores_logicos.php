<div class="titulo">Operadores lógicos</div>

<?php
echo "<p class='divisao'>V ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true);
echo '<br>';
var_dump(!false);
echo '<br>';
var_dump(false);

echo "<p class='divisao'>Tabela verdade 'AND'</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

echo "<p class='divisao'>Tabela verdade 'OR'</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

echo "<p class='divisao'>Tabela verdade 'DIFERENTE'</p><hr>";
var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 60;
$sexo = 'F';

$pagouPrevidencia = true;

$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "pode se aposentar -> $podeSeAposentar.<br>";


if ($idade >= 60 && $sexo === 'F'){
    echo "pode se aposentar -> $sexo.";
} elseif ($idade >= 65 && $sexo === 'M') {
    echo "pode se aposentar -> $sexo.";
} else {
    echo 'vai precisar trabalhar mais...';
}
