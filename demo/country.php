<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="country.php" method="post">
        <select name="country">
            <option value="USA">USA</option>
            <option value="Japan">Japan</option>
            <option value="USA">USA</option>
        </select>
    <input type="submit" value="calculate">
    </form>
</body>
</html>

<?php
    $capitals = array(
        "USA" => "washington D.C.",
        "Japan" => "Tokyo",
        "Nigeria"  => "Abuja"
    );

    $country = $capitals[$_POST ["country"]];
    echo $country
?>