<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assests/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
<header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Índice dos Exercícios</h2>
</header>
<main class="principal">
    <div class="conteudo">
        <nav class="modulos">
            <div class="modulo">
                <h3>Módulo 01</h3>
                <ul>
                    <li>
                        <a href="exercicios.php?dir=teste&file=teste">Exercício A</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</main>
<footer class="rodape">
    COD3R & UDEMY © <?= date('Y'); ?>
</footer>
</body>
</html>
