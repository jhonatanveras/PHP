<div class="titulo">If Else</div>

<?php

if(true) {
    echo 'serei impresso?<br>';
}

if(false) {
    echo 'serei impresso?<br>';
}

echo '<br>';

if(true) {
    echo 'verdadeiro<br>';
} else {
    echo 'false<br>';
}

if(false) {
    echo 'verdadeiro<br>';
} else {
    echo 'false<br>';
}

echo '<br>';

if (false) {
    echo 'passo A<br>';
} elseif (true) {
    echo 'passo B<br>';
} else {
    echo 'passo C<br>';
}

if (true) {
    echo 'passo A<br>';
} elseif (false) {
    echo 'passo B<br>';
} else {
    echo 'passo C<br>';
}
