<div class="titulo"> Desafio String</div>

<?php

//Enuciado:
//Avaliando os métodos da documentação da string,
// qual o métodos que a posição do texto 'abc'
//na string '!AbcaBcabc' retorna 1

$abcabcabc = '!AbcaBcabc';
$abc = 'abc';
echo stripos($abcabcabc, $abc), '<br>';
echo strpos($abcabcabc, $abc), '<br>';
echo strpos(strtolower($abcabcabc), $abc);
