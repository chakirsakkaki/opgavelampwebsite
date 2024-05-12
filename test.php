<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systeembeheer2 PHP test file</title>
</head>
<body>
    <header>
        <h1>Simple HTML with PHP</h1>
    </header>
    <section>
        <h2>Genereert willekeurig getal tussen 1 en 100</h2>
        <?php
            // Genereert willekeurig getal tussen 1 en 100
            $random_number = rand(1, 100);
            echo "<p>Willekeurig getal is: $random_number</p>";
        ?>
    </section>
</body>
</html>
