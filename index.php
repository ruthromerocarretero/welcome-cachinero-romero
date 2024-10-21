<<<<<<< HEAD
<!DOCTYPE html>
=======
<!DOCTYPE html> 
>>>>>>> mcachinero
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llistat d'alumnes</title>
    <link rel="stylesheet" href="styles.css">
<<<<<<< HEAD
=======
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<<<<<<< HEAD
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap" rel="stylesheet">
>>>>>>> mcachinero
=======
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
>>>>>>> ruthromero
>>>>>>> 9ac557fd616df8fdbc3278507da18fb0f13afc6c
</head>
<body>
    <header>
        <h1>Projecte Welcome 1</h1>
    </header>
    
    <main>
        <section>
            <table>
                <tr>
                <?php
<<<<<<< HEAD
                $htmls = scandir('./profiles', SCANDIR_SORT_ASCENDING);
=======
                $htmls = scandir('./profile', SCANDIR_SORT_ASCENDING);
>>>>>>> ruthromero
                $counter = 0;

                foreach ($htmls as $html) {
                    if ($html == "." || $html == "..") {
                        continue;
                    }

                    $name = substr($html, 0, -5);

                    $image_path = "";
<<<<<<< HEAD
                    if (file_exists("./images/$name.jpg")) {
                        $image_path = "./images/$name.jpg";
                    } elseif (file_exists("./images/$name.png")) {
                        $image_path = "./images/$name.png";
                    } elseif (file_exists("./images/$name.jpeg")) {
                        $image_path = "./images/$name.jpeg";
=======
                    if (file_exists("./img/$name.jpg")) {
                        $image_path = "./img/$name.jpg";
                    } elseif (file_exists("./img/$name.png")) {
                        $image_path = "./img/$name.png";
                    } elseif (file_exists("./img/$name.jpeg")) {
                        $image_path = "./img/$name.jpeg";
>>>>>>> ruthromero
                    }
<<<<<<< HEAD
                
=======

                    if ($counter % 10 == 0 && $counter != 0) {
                        echo "</tr><tr>"; // Iniciar nueva fila cada 10 columnas
                    }

>>>>>>> mcachinero
                    echo "<td>";
                    if (!$image_path) {
                        echo "<div class='no-image'>Sense imatge</div>";
                    }
<<<<<<< HEAD
                    echo "<a href='profile/$name.html'>";
                    if ($image_path) {
                        echo "<img src='$image_path' alt='Foto de perfil de $name'>";
                    }
<<<<<<< HEAD
                    echo "<br>$name</a>";
=======
                    echo "<button>$name</button></a>";
>>>>>>> ruthromero
                    echo "</td>";

                    $counter++;
                    if ($counter % 10 == 0) {
                        echo "</tr><tr>";
                    }
                }

                if ($counter % 10 != 0) {
                    echo "</tr>";
=======
                    echo "<a href='profiles/$name.html'>";
                    if ($image_path) {
                        echo "<img src='$image_path' alt='Foto de perfil de $name'>";
                    }
                    echo "<button>$name</button></a>";
                    echo "</td>";

                    $counter++;
                }

                if ($counter % 10 != 0) {
                    echo "</tr>"; // Cerrar última fila si no está completa
>>>>>>> mcachinero
                }
                ?>
            </table>
        </section>
    </main>
    
    <footer>
<<<<<<< HEAD
        <p>&copy; 2024 Projecte Welcome 1., Ruth Romero y Marc Cachinero</p>
    </footer>
</body>
</html>
=======
    <p>&copy; 2024 Projecte Welcome 1., Ruth Romero y Marc Cachinero</p>
    </footer>
</body>
<<<<<<< HEAD
</html>

>>>>>>> mcachinero
=======
</html>
>>>>>>> ruthromero
>>>>>>> 9ac557fd616df8fdbc3278507da18fb0f13afc6c
