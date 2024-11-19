<!-- calculator.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $result = '';

    switch ($operation) {
        case 'add':
            $result = $number1 + $number2;
            break;
        case 'subtract':
            $result = $number1 - $number2;
            break;
        case 'multiply':
            $result = $number1 * $number2;
            break;
        case 'divide':
            if ($number2 == 0) {
                $result = "Error: Division by zero!";
            } else {
                $result = $number1 / $number2;
            }
            break;
        case 'exponentiate':
            $result = pow($number1, $number2);
            break;
        case 'percentage':
            $result = ($number1 * $number2) / 100;
            break;
        case 'sqrt':
            $result = sqrt($number1);
            break;
        case 'log':
            if ($number1 <= 0) {
                $result = "Error: Logarithm of non-positive number!";
            } else {
                $result = log($number1, $number2);
            }
            break;
        default:
            $result = "Invalid operation!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Result</title>
</head>
<body>
    <h1>Calculation Result</h1>
    <p>Result: <?php echo $result; ?></p>
    <a href="index.php">Go Back</a>
</body>
</html>