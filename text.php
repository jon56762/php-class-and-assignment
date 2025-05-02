<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form {
        background-color: black;
        color: lightblue;
        width: 400px;
        height: 300px;
        border-radius: 8px;
        font-size: 23px;
        font-family: Arial;
        text-align: center;
        line-height: 37px;
    }
    .input-numbers {
        width: 60%;
        height: 30px;
    }

    .calculate-button {
        background-color: lightblue;
        color:black;
        width: 100px;
        height: 30px;
        border-radius: 8px;
    }
</style>
<body>
    <form action="text.php" method="post">
        <label for="">Radius:</label> <br>
        <input class="input-numbers" type="number" name="radius"> <br>
        <input class="calculate-button" type="submit" value="Calculate"> <br>

        <?php 
            $radius = $_POST["radius"];
            $circumference = null;
            $area = null;
            $volume = null;

            $circumference = 2 * pi() * $radius;
            $circumference = round($circumference, 2);

            $area = pi() * pow($radius, 2);
            $area = round($area, 2);

            $volume = 4/3 * pi() * pow($radius, 2);
            $volume = round($volume, 2);

            echo"Circumference = {$circumference} <br>";
            echo"Area = {$area} <br>";
            echo"Volume = {$volume}";
        ?>
    </form>
    
</body>
</html>