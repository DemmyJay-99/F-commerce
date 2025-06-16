
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Username</label>
        <input type="text" name="username">
        <br>
        <label>E-mail</label>
        <input type="text">
        <br>
        <label>Age</label>
        <input type="number" name="age">
        <br>
        <input type="submit" value="calculate">
    </form>
</body>
</html>

<?php
    $username = $_POST ["username"];
    $rate = $username * 40;
    $age = $_POST["age"];
    $number = pi()/9 *80;
    $number = pow($number, 2);

    if($age >= pi()) {
            echo "Your name is " . $username . " and you are" . $age . "years old";
    }
    else{
        echo"You young af lil' bro";
    }

    // while($username = 4) {
    //     echo $number++;
    // }
?>