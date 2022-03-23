<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title>GHEST HUB</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Índice</h1>
        <h2>Aplicações</h2>
    </header>
    <nav class="navegacao">
        <a href="index.php" class="vermelho">Home</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php require_once('menu.php'); ?>
        </div>
    </main>
    <footer class="rodape">
        GHEST CODER © <?= date('D, M, Y'); ?>
    </footer>
</body>
</html>