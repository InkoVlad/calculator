<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];

    if (is_numeric($number1) && is_numeric($number2)) {

        switch ($operation) {
            case '+':
                $result = $number1 + $number2;
                break;
            case '-':
                $result = $number1 - $number2;
                break;
            case '*':
                $result = $number1 * $number2;
                break;
            case '/':
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                } else {
                    $result = "Mistake of devision by zero";
                } 
                break;
            default:
                $result = "Incorrect operation";
                break;
        }
        echo "Result: " . htmlspecialchars($result);
    } else {
        echo "Please to enter is correctly numbers";
    }
}


?>

<br>
<button onclick="window.history.back()">Back</button>