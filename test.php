<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systeembeheer2 PHP test file</title>
</head>
<body>
    <header>
        <h1>testtabel classicmodels</h1>
    </header>
    <section>
        <h2>Hieronder zie je het tabel</h2>
        <?php
            echo " id | naam\n";
            echo "+----+-----------\n";
            $conn=new mysqli("localhost","root","chakir","classicmodels");
            $query=$conn->query("SELECT lastName as achternaam, firstName as voornaam, email FROM employees;");
            $result=$query->fetch_all();
            foreach ($result as $row) {
              echo "    ".$row[0]." | ".$row[1]."\n";           
            }
        ?>
    </section>
</body>
</html>
