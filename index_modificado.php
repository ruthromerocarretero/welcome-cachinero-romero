<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llistat d'alumnes</title>
    <link rel="stylesheet" href="styles.css">
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
                $htmls = scandir('./profile', SCANDIR_SORT_ASCENDING);
                $counter = 0;

                foreach ($htmls as $html) {
                    if ($html == "." || $html == "..") {
                        continue;
                    }

                    $name = substr($html, 0, -5);

                    $image_path = "";
                    if (file_exists("./img/$name.jpg")) {
                        $image_path = "./img/$name.jpg";
                    } elseif (file_exists("./img/$name.png")) {
                        $image_path = "./img/$name.png";
                    } elseif (file_exists("./img/$name.jpeg")) {
                        $image_path = "./img/$name.jpeg";
                    }
                
                    echo "<td>";
                    if (!$image_path) {
                        echo "<div class='no-image'>Sense imatge</div>";
                    }
                    echo "<a href='profile/$name.html'>";
                    if ($image_path) {
                        echo "<img src='$image_path' alt='Foto de perfil de $name'>";
                    }
                    echo "<br>$name</a>";
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
        <p>&copy; 2024 Projecte Welcome 1</p>
    </footer>
</body>
</html>
