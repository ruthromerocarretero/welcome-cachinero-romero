<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
>>>>>>> ruthromero
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
                
                    echo "<td>";
                    if (!$image_path) {
                        echo "<div class='no-image'>Sense imatge</div>";
                    }
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
</html>
>>>>>>> ruthromero
