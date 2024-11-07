<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1>Home Page</h1>
    <p>
        Total: <?php echo 1 + 2; ?>
    </p>
    <p>
        Final: <?php 
            $num1 = 3; 
            $num2 = 5; 
            echo $num1 + $num2; 
        ?>
    </p>
    <h1>Hello World</h1>
    <?php
        $num1 = 3;
        $num2 = 5;
    ?>
    <p>
        Total: <?php echo $num1 + $num2 ?>
    </p>
    <h1>Day or Night</h1>
    <?php $hour = date('h') ?>
    <p>
        <?php
             if($hour<6||$hour>18){
                echo "<b>Night Mode</b>";
             }
             else{
                echo "<i>Day Time</i>";
             }
        ?>
    </p>
</body>
</html>