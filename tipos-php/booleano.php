<div class="titulo">Tipo Booleano</div>

<?php
echo true;
echo '<br>';
echo false;
echo '<br>';
echo var_dump(true);
echo '<br>';
echo var_dump(false);
echo '<br>';
echo is_bool(true);
echo '<br>';
echo is_bool('false');

echo '<p>Regras</p>';

echo var_dump((bool) 0); // apenas zero é false
echo '<br>';
echo var_dump((bool) 20);
echo '<br>';
echo var_dump((bool) -1);
echo '<br>';
echo var_dump((bool) 0.0);
echo '<br>';
echo var_dump((bool) 0.000001);
echo '<br>';
echo var_dump((bool) ""); // false
echo '<br>';
echo var_dump((bool) "0"); // false
echo '<br>';
echo var_dump((bool) " "); // todo resto é true
echo '<br>';
echo var_dump((bool) "00");
echo '<br>';
echo var_dump((bool) "false");
echo '<br>';
