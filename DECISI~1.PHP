<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decision Making Structure in PHP</title>
</head>
<body>
    <?php
        $marks = 61;
        // if statement

        // if ($marks > 90){
        //     echo("A grade");
        // }

        // if else statement
        // if ($marks > 90){
        //     echo("A grade");
        // }
        // else {
        //     echo("Fail");
        // }
        
        // Nested if statement

        // $x = 6; 
        // if ($x%2 == 0){
        //     if ($x%3 == 0){
        //         echo("Number is divisible by 2 and 3");

        //     }
        // }
            
    // if else if else statement

        // if ($marks  > 90){
        //     echo("A1 Grade");
        // }
        // else if ($marks > 80){
        //     echo("B Grade");
        // }
        // else if ($marks > 70){
        //     echo("C Grade");

        // }
        // else if ($marks > 60){
        //     echo("D Grade");

        // }
        //  else{
        //     echo("Fail");    

        //  }

        // switch statement 
        $n  = 'Jafri';
        switch($n){
            case 'One':
                echo("One value of n");
            break;

            case 'Two':
            echo("Two value of n");
            break;

            case 'Jafri':
            echo("Jafri value of n");
            break;
        
            default:
                echo("Not matching....");
                break;

        }
?>
</body>
</html>