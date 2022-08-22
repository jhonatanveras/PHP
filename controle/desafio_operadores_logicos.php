<div class="titulo">Desafio operadores lógicos</div>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 =</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 =</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Execultar</button>
</form>

<style>
    button, select {
        font-size: 1.0rem;
    }
</style>

<?php
$trabalho1 = $_POST['t1'] == 1;
$trabalho2 = $_POST['t2'] == 1;
var_dump($trabalho2);
$tv = '';
$sorvete = false;

if ($trabalho1 && $trabalho2) {
    $tv = '"50"';
} elseif ($trabalho1 != $trabalho2) {
    $tv = '32"';
}

if ($trabalho1 || $trabalho2) {
    $sorvete = true;
}

if ($tv) {
    $resultado = "Oba vamos comprar a TV de $tv";
} else {
    $resultado = "Vamos ficar em casa esse final de semana";
}

if (!$sorvete) {
    $resultado .= '<br>Não vamos tomar sorvete';
} else {
    $resultado .= '<br>Sorvete liberado \0/';
}

echo "<p class='divisao'>$resultado</p>";
