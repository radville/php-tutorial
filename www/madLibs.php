<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>MadLibs</h1>
        <form action="madLibs.php" action="get">
            Color: <input type="text" name="color"> <br>
            Plural Noun: <input type="text" name="pluralNoun"> <br>
            Celebrity: <input type="text" name="celebrity"> <br>
            <input type="submit">
        </form>
        <br>
        <?php
            $color = $_GET["color"];
            $pluralNoun = $_GET["pluralNoun"];
            $celebrity = $_GET["celebrity"];
            echo "Roses are $color<br>";
            echo "$pluralNoun are blue <br>";
            echo "I love $celebrity<br>";
        ?>

    </body>
</html>