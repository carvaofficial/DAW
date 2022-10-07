<?php
$contactos = [];

if (isset($_POST['name']) && isset($_POST['mail'])) array_push($contactos, ['name' => $_POST['name'], 'mail' => $_POST['mail']]);
?>

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
            <h2>Listado de contactos</h2>
            <?php if (!empty($contactos)) { ?>
                <table>
                    <thead>
                        <th>Nombre completo</th>
                        <th>Correo electrónico</th>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($contactos as $c) {
                            echo "
                            <tr>
                                <td>$c[name]</td>
                                <td>$c[mail]</td>
                            </tr>
                            ";
                        }
                        ?>
                    </tbody>
                </table>
            <?php } else { ?>
                <p>No hay contactos.</p>
            <?php } ?>
        </div>
    </main>

    <footer>
        <p>© <?php echo date("Y"); ?> Angel Carvajal</p>
    </footer>
</body>

</html>