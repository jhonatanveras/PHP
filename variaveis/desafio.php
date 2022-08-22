<div class="titulo">Desafio</div>

<?php
$equacao1 = (6* (3 + 2)) ** 2;
$den1 = 3 * 2;
$result1 = $equacao1 / $den1;
echo $result1;
echo '<br>';

$equacao2 = (1 - 5) * (2 - 7);
$den2 = 2;
$result2 = ($equacao2 / $den2) ** 2;
echo $result2;
echo '<br>';


$equacao3 = ($result1 - $result2) ** 3;
$den3 = 10 ** 3;
$result3 = $equacao3 / $den3;
echo "O resultado final é " . $result3 . ".";
echo '<br>';


