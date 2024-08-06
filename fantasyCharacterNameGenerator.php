<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fantasy Character Name Generator</title>
</head>
<body>
    <h1>Fantasy Character Name Generator</h1>
    <?php
    $characterNames =  "Gandalf,Aragorn,Legolas";
    $array = explode(",",$characterNames);
    $join = implode("*",$array);
    echo strtolower($join);
    ?>
</body>
</html>