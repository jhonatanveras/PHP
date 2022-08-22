<div class="titulo">Desafio PI</div>

<?php

echo pi();
echo '<br>';
$pi = 3.14;
$piErrado = 2.14;

if ($pi - pi() <= 0.01) {
    echo 'Praticamente iguais!';
}

echo '<br>';

if (!$pi - $piErrado <= 0.01) {
    echo 'Valor diferente de PI';
}

