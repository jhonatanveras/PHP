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
                <h3>PHP Básico</h3>
                <ul>
                    <li>
                        <a href="exercicios.php?dir=php-basico&file=ola">
                            Aula 1: Olá PHP
                        </a>
                    </li>
                    <li>
                        <a href="exercicios.php?dir=php-basico&file=html">
                            Aula 2: Integração HTML
                        </a>
                    </li>
                    <li>
                        <a href="exercicios.php?dir=php-basico&file=css">
                            Aula 3: Integração CSS
                        </a>
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
