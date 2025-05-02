<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="pratice.php" method="post">
        <input type="text" name="student">
        <input type="submit" value="Check">
    </form> -->

    <form action="pratice.php" method="post">
        <label for="">First Number:</label> <br>
        <input type="number" name="num1" step="0.001"> <br>
        <label for="">OP</label> <br>
        <input type="text" name="op"><br>
        <label for="">Second Number:</label> <br>
        <input type="number" name="num2"> <br>
        <input type="submit" value="Calculate">
    </form>

    <?php 
       /* $grades = array("Success"=>"A+", "Gift"=>"C+", "Divine"=>"F9", "Miracle"=>"D");
        echo $grades[$_POST["student"]]; */

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if ($op == "+") {
            echo $num1 + $num2;
        }
        elseif ($op == "-") {
            echo $num1 - $num2;
        }
        elseif ($op == "*") {
            echo $num1 * $num2;
        }
        elseif ($op == "/") {
            echo $num1 / $num2;
        }
        else {
            echo "Error";
        }
    ?>
</body>
</html>