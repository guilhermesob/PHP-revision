<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators in PHP</title>
</head>
<body>
  <?php
  
  $a = 10;
  $b = 20;
  echo ($a-$b);
  echo "<br>";
  echo ($a+$b);
  echo "<br>";
  echo ($a/$b);
  echo "<br>";
  echo ($a*$b);
  echo "<br>";
  echo ($a%$b);
  echo "<br>";


  echo ($a>$b);
  echo "<br>";
  echo ($a<$b);
  echo "<br>";
  echo ($a==$b);
  echo "<br>";
  echo ($a!=$b);
  echo "<br>";
  echo ($a>=$b);
  echo "<br>";
  echo ($a<=$b);
  echo "<br>";

  // and  or  not 
  echo "Logical Operators";

  echo (true && true); 
  echo "<br>";
  echo (true && false); 
  echo "<br>";
  echo (true || false); 
  echo "<br>";
  echo (!false);
  echo "<br>";
  echo (--$a);
  
  ?>
</body>
</html>