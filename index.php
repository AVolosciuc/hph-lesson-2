<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP project 2</title>
</head>
<body>
    
<!-- <?php
echo "Hello World!" ."<br>"."<hr>";

$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast ."<br>"."<hr>";

echo (min(0, 150, 30, 20, -8, -200))."<br>"."<hr>";
echo (max(0, 150, 30, 20, -8, -200))."<br>"."<hr>";

echo(sqrt(144))."<br>"."<hr>";

echo(rand())."<br>"."<hr>";

echo(rand(10,20))."<br>"."<hr>";

$x = 7;
$y = 1;
echo $x + $y ."<br>";
echo $x - $y ."<br>";
echo $x * $y ."<br>";
echo $x / $y ."<br>";
echo $x % $y ."<br>";
echo $x ** $y ."<br>"."<hr>";

$x = 10;
echo ++$x ."<br>";

$x = 10;
echo $x++ ."<br>"."<hr>";

$favday = 7;
switch ($favday) {
    case 1:
        echo "It is Monday"."<br>"."<hr>";
        break;
    case 2:
        echo "It is Tuesday"."<br>"."<hr>";
        break;
    case 3:
        echo "It is Wednesday"."<br>"."<hr>";
        break; 
    case 4:
        echo "It is Thursday"."<br>"."<hr>";
        break;
    case 5:
        echo "It is Friday"."<br>"."<hr>";
        break;
    case 6:
        echo "It is Saturday"."<br>"."<hr>";
        break;
    case 7:
        echo "It is Sunday"."<br>"."<hr>";
        break;
    default:
        echo "Error";
        
}


for ($x = 0; $x <= 10; $x++) {
    echo "the number is:$x <br>";
}






?> -->

<!-- <?php
   
    echo "Yesterday is " .date("d.m.Y", strtotime("yesterday")) ."<br>";
    echo "Today is " .date("d.m.Y", strtotime("today")) ."<br>";
    echo "Tomorrow is " .date("d.m.Y", strtotime("tomorrow")) ."<br>"."<br>";
    
    date_default_timezone_set("America/Detroit");
    echo "Time is " .date("H:i:sa") ."<br>";
?> -->

    <?php
        $name = $surname = $email = $curs = $comentariu;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $surname = test_input($_POST["surname"]);
            $email = test_input($_POST["email"]);
            $curs= test_input($_POST["curs"]);
            $comentariu= test_input($_POST["comentariu"]);
        }

            function test_input($data) {
             $data = trim($data);
             $data = stripslashes($data);
             $data = htmlspecialchars($data);
             return $data;
        }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Name: <input type="text" name= "name"> 
        Surname: <input type="text" surname = "surname">
        Email: <input type="text" email= "email">
        Curs: <input type="text" curs="curs">
        Comentariu: <textarea cols="50" rows= "5" comentariu= "comentariu"></textarea>
        <input type="submit"><br><br>
    </form>


</body>
</html>