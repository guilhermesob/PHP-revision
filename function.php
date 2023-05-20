<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function in PHP</title>
</head>
<body>
    <?php
    function test1($a, $b = 30){
        echo $a + $b;
        // echo "Hell World";
    }
    test1(10);    
    
    
    ?>
</body>
</html>