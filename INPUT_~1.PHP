<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Output Function in PHP</title>
</head>
<body>
    <form action="#" method="get" >
        <input type="text" name="first_name">
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    if(isset($_GET['submit'])) {
       $name =  $_GET['first_name'];
       echo "<h1>$name</h1>";
    }
    
    ?>
</body>
</html>