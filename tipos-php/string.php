<div class="titulo">Tipo String</div>

<?php

echo 'Jhonatan';
echo '<br>';
var_dump("Veras");
echo '<br>';

// concatenação

echo "Jhonatan" . ' Veras';
echo '<br>';
print 'Jhonatan n°' . 33;
echo '<br>';

print('print');
print 'print';

//algumas funções string

echo '<br>' . strtoupper("jhonatan");
print '<br>' . strtolower('veras');
echo '<br>' . ucfirst('jhonatan');
print '<br>' . ucwords('jhonatan veras');
echo '<br>' . strlen('jhonatan veras');
echo '<br>' . substr('jhonatan veras',0,8);
echo '<br>' . str_replace('Souza', 'Veras', 'Jhonatan Souza');
