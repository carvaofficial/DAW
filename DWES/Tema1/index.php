<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web de Angel Carvajal</title>

    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/main.js"></script>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="./">Inicio</a></li>
                <li><a href="./register.php">Registro</a></li>
                <li><a href="./view.php">Listado de contactos</a></li>
            </ul>
        </nav>
        <a class="doc-btn" href="documento_preguntas_tema1.pdf" target="_blank" rel="noopener noreferrer">Ver documento</a>
    </header>

    <main>
        <div class="content">
            <h2>Bienvenid@ a esta aplicación web</h2>

            <p>Os presento esta sencilla aplicación, la cual se va a dedicar al registro y visualización de contactos. Para participar en ella, simplemente haga click sobre el botón registro.</p>
            <p>Para ver el documento con las preguntas respondidas, haga click sobre el botón correspondiente.</p>
        </div>
    </main>

    <footer>
        <p>© <?php echo date("Y"); ?> Angel Carvajal</p>
    </footer>
</body>

</html>