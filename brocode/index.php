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

?>