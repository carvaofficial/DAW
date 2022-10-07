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
            <h2>Registro</h2>

            <form action="./view.php" method="POST">
                <div class="input-form">
                    Nombre completo
                    <input type="text" name="name" id="name">
                </div>
                <div class="input-form">
                    Correo electrónico
                    <input type="email" name="mail" id="mail">
                </div>
                <input type="submit" value="Registro">
            </form>
        </div>
    </main>

    <footer>
        <p>© <?php echo date("Y"); ?> Angel Carvajal</p>
    </footer>
</body>

</html>