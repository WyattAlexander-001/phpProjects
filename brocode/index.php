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

    <form action="index.php" method="post">
        <label>Counter: </label><br>
        <input type="text" name="counter" id="counter"><br>
        <input type="submit" value="ITERATE!"><br>
    </form>

    <form action="index.php" method="post">
        <label>Credit Card: </label><br>
        <input type="radio" name="credit_card" value="Visa">Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">MasterCard<br>
        <input type="radio" name="credit_card" value="American Express">American Express<br>
        <input type="radio" name="credit_card" value="Discover">Discover<br>
        <input type="submit" name="confirm" value="confirm"><br>
    </form>

    
</body>
</html>

//All PHP code is in the same file as the HTML code. This is not best practice, but it is for learning purposes.
<?php
    include("header.html"); //Include header file
    include("header.html");

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
    echo "<h2>Prior to abs: ". $x."<br></h2>";
    echo "<h2>Total after abs: ". $total."<br></h2>";

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

    //If statements
    $age = 19;
    if($age >= 21){
        echo "$age ";
        echo "You can drink!<br>";
    } else if($age >= 18){
        echo "$age ";
        echo "You can't drink! But can drive!<br>";
    }else{
        echo "$age ";
        echo "You can't drink!<br>";
    }

    //Switch statements
    $day = "Friday";
    switch($day){
        case "Monday":
            echo "It's Monday!<br>";
            break;
        case "Tuesday":
            echo "It's Tuesday!<br>";
            break;
        case "Wednesday":
            echo "It's Wednesday!<br>";
            break;
        case "Thursday":
            echo "It's Thursday!<br>";
            break;
        case "Friday":
            echo "It's Friday!<br>";
            break;
        case "Saturday":
            echo "It's Saturday!<br>";
            break;
        case "Sunday":
            echo "It's Sunday!<br>";
            break;
        default:
            echo "Invalid day!<br>";
            break;
    }

    //For loops
    $counter = $_POST["counter"];
    for($i = 0; $i < $counter; $i++){
        echo "For loop iteration Count Up: $i<br>";
    }
    //Same For Loop but counting down
    for($i = $counter; $i > 0; $i--){
        echo "For loop iteration Count Down: $i<br>";
    }

    //Arrays
    $games = array("Fortnite", "Apex Legends", "Valorant", "Minecraft");
    echo $games[0]."<hr><br><hr>";
    //For loop to iterate through array
    for($i = 0; $i < count($games); $i++){
        echo $games[$i]."<br>";
    }

    echo "<hr><br><hr>";

    //For each loop
    foreach($games as $game){
        echo $game."<br>";
    }

    //Making a list HTML with an array
    echo "<h2>Some Games... :</h2>";
    echo "<ol>";
    foreach($games as $game){
        echo "<li>$game</li>";
    }
    echo "</ol>";
    echo "There are currently ".count($games)." games in the list<br>"; //Count of array

    //Associative arrays
    $person = array("name" => "Wyatt", 
                    "age" => 29, 
                    "hobbies" => array("Gaming", "Coding", "Reading"));
    echo "NAME: ".$person["name"]."<br>";
    echo "AGE: ". $person["age"]."<br>";
    echo "HOBBIES: ".$person["hobbies"][0]."&nbsp;&nbsp;&nbsp;&nbsp;".$person["hobbies"][1].",".$person["hobbies"][2]."<br>";

    //For each loop for associative arrays, must use key value pair country and capital
    $capitals = array("USA" => "Washington D.C.", 
                        "France" => "Paris", 
                        "Germany" => "Berlin", 
                        "Italy" => "Rome", 
                        "Japan" => "Tokyo");
    echo "<h2>Some Capitals... :</h2>";
    foreach($capitals as $key => $value){
        echo "The capital of $key is $value<br>";
    }
    echo "<h2>Just the capitals...<br></h2>";
    $values = array_values($capitals); //Get values of array
    foreach($values as $value){
        echo $value."<br>";
    }

    $flippedCapitals = array_flip($capitals); //Flips key value pairs
    echo "<h2>Flipped key value pairs...<br></h2>";
    foreach($flippedCapitals as $key => $value){
        echo "The capital of $key is $value<br>";
    }

    //pop and shift
    $food = array("Pizza", "Pasta", "Salad", "Bread");
    array_pop($food); //Removes last element
    array_shift($food); //Removes first element
    echo "<h2>Some Food... :</h2>";
    foreach($food as $f){
        echo "$f<br>";
    }

    // isset() and empty()
    $name = "Wyatt";
    $age = null;
    if(isset($name)){
        echo "Name is set<br>";
    }else{
        echo "Name is not set<br>";
    }

    if(empty($age)){
        echo "Age is empty<br>";
    }else{
        echo "Age is not empty<br>";
    }

    if(isset($_POST["confirm"])){
        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
            echo "You chose $credit_card!<br>";
        }else{
            echo "Please choose a credit card!<br>";
        }
    }
    
    //Functions
    function sayHello(){
        echo "Hello!<br>";
    }

    sayHello();
    
    function sayHelloTo($name){
        echo "Hello $name!<br>";
    }

    sayHelloTo("Wyatt");

    //Function with default value
    function sayHelloToDefault($name = "User"){
        echo "Hello $name!<br>";
    }

    sayHelloToDefault();
    sayHelloToDefault("Jimmy");

    //Sanitize user input
    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

    }



    setcookie("name", "Wyatt", time() + (86400*2),"/" ); //Set cookie for 2 days

    //Hashing
    $password = "password";
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    echo "Hashed password: $hashedPassword<br>";



    include("footer.html"); //Include footer file
?>