<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Structure in PHP</title>
</head>
<body>
<?php
    $colors = array("pink","green","gray","black","yellow");
    // echo $colors[1];

    // sort($colors);
    rsort($colors);

    foreach($colors as $val) {
        echo $val."<br/>";
    }
?>
</body>
</html>