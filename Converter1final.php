<!DOCTYPE html>
<html>
    <head>
        <title>Converter1 Final In PHP</title>
        <link rel="stylesheet" href="Converter1final.css">
    </head>
    <body>
        <?php
        
        $Farenheit ="";
        if(isset($_POST["submit"])){
        $Celsuis = floatval($_POST["celsuis"]);
        $Farenheit = $Celsuis * 9 / 5 + 32;
    }
        ?>

        <form action="Converter1final.php" method="post" class="box">
            <h1>PHP Converter</h1>
            <hr>
            <input type="text" name="celsuis" placeholder="Enter Celsuis" required>
            <input type="text" name="farenheit" value="<?php echo $Farenheit;?>" placeholder="Farenheit">
            <input type="submit" name="submit" value="Calculate" class="sub">
        </form>
    </body>
</html>