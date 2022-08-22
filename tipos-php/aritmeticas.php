<div class="titulo">Operações Aritméticas</div>

<?php
echo 1+1, '<br>';
var_dump(1+1);
echo '<br>';

echo 1+2.5, '<br>'; // 3.5
echo 10-101, '<br>'; // 91
echo 2*15, '<br>'; //30
echo 7/2, '<br>'; //3.5
echo intdiv(10,6), '<br>'; // 1
echo round(10/6), '<br>'; // 2
echo 10%6, '<br>'; // 4
echo 10%2, '<br>'; // 0 par
echo 9%2, '<br>'; // 1 impar
echo 4 ** 2, '<br>'; // 16

// precedência de operações

 # () => ** => / * % => + -

echo '<p>Precedência</p>';

echo 2+6*3, '<br>';
echo (2+6)*3, '<br>';
echo 2+6*3, '<br>';
echo (10*3) - 6 + (3/15), '<br>';










