<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Username:</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="">Password:</label><br>
        <input type="password" name="password" id="password"><br>
        <button type="submit">Submit</button><br>
    </form>

    <hr>

    <form action="index.php" method="post">
        <label>Quantity: </label><br>
        <input type="number" name="quantity" id="quantity"><br>
        <input type="submit" value="Submit"><br>
    </form>

    <form action="index.php" method="post">
        <label>X: </label><br>
        <input type="text" name="x" id="x"><br>
        <input type="submit" value="TOTAL"><br>
    </form>

    <form action="index.php" method="post">
        <label>Radius: </label><br>
        <input type="text" name="radius" id="radius"><br>
        <input type="submit" value="Calculate!"><br>
    </form>

    
</body>
</html>

<?php
//For Chrome Live Server extension:
//http://localhost/phpProjects/brocode/
//http://127.0.0.1:5500/

//Printing:
    echo "Testing echo statement in PHP!<br>";
    echo"This is jank<br>";
//Variables not statically/strongly typed:
    $name = "Wyatt";
    $age = 29;
    $price = 4.99;
    $online = true;
    $falsey = false;

    //Same way to print variables:
    echo "My name is {$name} and my age is {$age}<br>";
    echo "<h1>My name is $name and my age is $age<br></h1>"; //Interpolation
    echo '<i>My name is '.$name.' and my age is '.$age.'<br></i>'; //Concatenation
    echo "The price is \$$price<br>"; //Escape character
    echo "Is online? $online //Trus is 1!!!<br>";
    echo "Is online? $falsey :     //False is NOTHING!<br>";
    echo "Is online? ".($online ? "Yes" : "No")."<br>"; //Ternary operator
    //Math
    echo "5 + 2 = ".(5+2)."<br>";
    echo "5 - 2 = ".(5-2)."<br>";
    echo "5 * 2 = ".(5*2)."<br>";
    echo "5 / 2 = ".(5/2)."<br>";
    echo "5 % 2 = ".(5%2)."<br>";
    echo "5 ** 2 = ".(5**2)."<br>";

    // $_GET and $_POST, Post is more secure
    echo $_POST['username']."<br>"; //Will print the username from the form
    echo $_POST['password']."<br>"; //Will print the password from the form

    $item = "pizza";
    $price = 4.99;
    $quantity = $_POST['quantity'];
    echo "You ordered $quantity $item(s) and your total is: $".($price*$quantity)."<br>";

    // Useful math functions
    $x = $_POST["x"];
    $total = null;
    $total = abs($x);
    echo "Prior to abs: ". $x."<br>";
    echo "Total after abs: ". $total."<br>";

    //Other math functions
    echo "Ceil: ". ceil(4.6)."<br>";
    echo "Floor: ". floor(4.6)."<br>";
    echo "Round: ". round(4.6)."<br>";
    echo "Max: ". max(4, 6)."<br>";
    echo "Min: ". min(4, 6)."<br>";
    echo "Pow: ". pow(4, 2)."<br>";
    echo "Sqrt: ". sqrt(16)."<br>";
    echo "Random: ". rand(1, 10)."<br>";

    //Challenge area of a circle
    $radius = $_POST["radius"];
    $area = round(pi() * pow($radius, 2), 3);
    $circumference = round(2 * pi() * $radius, 3);
    $volume = round((4/3) * pi() * pow($radius, 3), 3);
    echo "The area of a circle with a radius of $radius is $area<br>"; 
    echo "The circumference of a circle with a radius of $radius is $circumference<br>";
    echo "The volume of a circle with a radius of $radius is $volume<br>";
?>