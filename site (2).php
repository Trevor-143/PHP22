<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php ?>
    <form action="site (2).php" method="get">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="number" name="age">
        <input type="submit">
    </form>
    <br>
    your name is: 
    <?php 
    echo $_GET["name"] 
    ?>
    <br>
     and you are : 
    <?php 
    echo $_GET["age"] 
    ?>


    <form action="site (2).php" method="get">
        <input type="number" name="num1"><br>
        <input type="number" name="num2"><br>
        <input type="submit">
    </form>
    Answer: 
    <?php 
    echo $_GET ["num1"]+ $_GET ["num2"]
    ?>


    <form action="site (2).php" method="get">
        Color: <input type="text" name="color"><br>
        plural noun: <input type="text" name="pluralnoun"><br>
        Celebrity: <input type="text" name="celebrity"><br>
        <input type="submit">
    </form>
     <br><br>
    <?php 
    $color = $_GET["color"];
    $plural = $_GET["pluralnoun"];
    $celebrity = $_GET["celebrity"];
    echo "Roses are $color<br>";
    echo "$plural are blue<br>";
    echo "I love $celebrity<br>";
    ?>


    <form action="site (2).php" method="post">
        Password: <input type="password" name="pass"><br>
        <input type="submit">
    </form>
     <br><br>
    <?php 
        echo $_POST["pass"];
    ?>



</body>
</html>