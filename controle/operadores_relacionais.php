<div class="titulo">Operadores relacionais</div>

<?php

var_dump( 1 == 1); // true
var_dump(1 === '1'); // false
var_dump(1 >= 1); // true
var_dump(1 <= 1); // true
var_dump(1 !== '1'); // true
var_dump(1 != '1'); // false
var_dump(1 != 1); // false
var_dump(1 <> 1); // false
echo '<br>';
echo '<br>';
var_dump( 1 == 2); // false
var_dump(1 === '2'); // false
var_dump(1 >= 2); // false
var_dump(1 <= 2); // true
var_dump(1 !== '2'); // true
var_dump(1 != '2'); // true
var_dump(1 != 2); // true
var_dump(1 <> 2); // true
echo '<br>';
echo '<br>';
var_dump( 2 == 2); // true
var_dump(2 === '5'); // false
var_dump(2 >= 5); // false
var_dump(2 <= 5); // true
var_dump(2 > 2); // false
var_dump(2 < 2); // false
var_dump(3 > 2); // true
var_dump(2 < 5); // true
var_dump(2 !== '5'); // true
var_dump(2 != '5'); // true
var_dump(2 != 5); // true
var_dump(2 <> 5); // true
echo '<br>';

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";

$idade = random_int(1, 100);

if ($idade < 18) {
    echo 'Ele/Ela tem ' . $idade . ' e é menor de idade';
} elseif ($idade < 65) {
    echo 'Ele/Ela ' . $idade . ' e é adulto';
} else {
    echo 'Ele/Ela tem ' . $idade . ' e é terceira idade';
}

echo "<p class='divisao'>Spaceship</p><hr>";

var_dump(5<=>3);
echo '<br>';
var_dump(5<=>5);
echo '<br>';
var_dump(5<=>10);
echo '<br>';

echo "<p class='divisao'>Valores pode ser V ou F</p><hr>";

var_dump(!!5);
echo '<br>';
var_dump(!!0);
echo '<br>';
var_dump(!!'');
echo '<br>';
var_dump(!!' ');
echo '<br>';
