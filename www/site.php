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
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php 
            $name = "Laura";
            $state = "Massachusetts";
            echo "<h1>$name's Site</h1>";
            echo "<hr>";
            echo("Hello $state!");

            $phrase = "To be or not to be";
            $age = 30;
            $gpa = 3.9;
            $isFemale = true;
            
            echo "<br>";
            echo strtolower($phrase);
            echo "<br>$phrase[0]<br>";
            echo str_replace("be", "eat", $phrase);
            echo "<br>";
            echo (4+5) % 3;
            echo "<br>";
            $num = 10;
            $num *= 25;
            $num++;
            echo $num;
            echo "<br>";
            echo min(2, 14);

            echo "<hr>";
            echo "<h1>User input - forms</h1>";
        ?>

            <form action="site.php" method="get">
                Name: <input type="text" name="name">
                <br>
                Age: <input type="number" name="age">
                <input type="submit">
            </form>
            <br>
            Your name is <?php echo $_GET["name"] ?> and you are <?php echo $_GET["age"]?>

        <script src="" async defer></script>
    </body>
</html>