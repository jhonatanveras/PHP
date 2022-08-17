<div class="titulo">Integração CSS</div>

<h1 center>
    <?php
    echo 'Olá';
    echo "<small>";
    echo ' Mundo!!';
    echo "</small>";
    ?>
</h1>

<?= "<div center cor>Olá Jhonatan</div>"?>

<br>

<div center>
    <button class="buttonPHP" dobro>
        <?= 'PHP' ?>
    </button>
</div>

<style>
    .buttonPHP {
        padding: 5px <?=2 * 30?>px;
        background-color: #50fa7b;
        color: #282a36;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [cor] {
        color: #ff79c6;
    }

    [dobro] {
        font-size: 2rem;
    }
</style>
