<?php
$weight = readline("Enter Your Weight (kilograms):");
$height = readline("Enter Your Height (Meters):");

if ($weight === "" || $height === "") {
    echo "Please Input your Weight & Height!!!";
}elseif (!is_numeric($weight) || !is_numeric($height)){
    echo "Invailed input (Only numbers are required)";
}else {   
    $bmi = $weight / ($height ** 2);
    $bmi = round($bmi, 2);

    if ($bmi < 18.5) {
        $minimumweight = 18.5 * ($height ** 2);
        $targetweight = $minimumweight - $weight;
        $targetweight = round($targetweight, 2);
        echo "Your BMI is {$bmi} (Underweight) \nTo reach a healthy weight, you need to gain at least {$targetweight}kg";
    }elseif ($bmi <= 25) {
        echo "Your BMI is {$bmi} (Normal weight)";
    }elseif ($bmi <= 30) {
        $maxweight = 24.9 * ($height ** 2);
        $loseweight = $weight - $maxweight;
        $loseweight = round($loseweight, 2);
        echo "Your BMI is {$bmi} (Over weight) \nTo reach a healthy BMI, you need to lose {$loseweight}kg";
    }elseif ($bmi >= 30) {
        echo "Obese!!! Your BMI is {$bmi}";
    }
}
?>