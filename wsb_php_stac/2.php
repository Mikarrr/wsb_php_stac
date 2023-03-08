<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listy</h1>
    <ul>
        <li>wielkopolska</li>
        <ol>
            <li>Poznan</li>
            <li>Kalisz</li>
            <li>Ostrow Wielkopolski</li>
        </ol>
        <li>dolnoslaskie</li>
        <ol>
            <li>Wrocław</li>
            <?php
                $city = "<li>Legnica</li>";
                echo $city;
                echo "<li>Bolesławiec</li>";
            ?>
        </ol>  
        <li>mazowieckie</li>
    </ul>
</body>
</html>