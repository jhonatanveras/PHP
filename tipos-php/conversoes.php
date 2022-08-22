<div class="titulo">Conversões PHP</div>

<?php

echo is_int(PHP_INT_MAX);
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float)3);
echo '<br>';

var_dump((int) 2.8);
echo '<br>';
var_dump(intval(9.582556454, 2));
echo '<br>';
var_dump((int) round( 5.8));
echo '<br>';

var_dump(3 + '7');
echo '<br>';
var_dump('3' . 10);
echo '<br>';

//echo(is_string('3' . 5));
echo '<br>';
//echo(is_string('3' + 10));

