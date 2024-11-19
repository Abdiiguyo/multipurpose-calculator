<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multipurpose Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Multipurpose Calculator</h1>
    <form action="calculator.php" method="POST">
        <input type="number" name="number1" placeholder="Enter first number" required>
        <input type="number" name="number2" placeholder="Enter second number" required>
        
        <select name="operation" required>
            <option value="">Select Operation</option>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
            <option value="exponentiate">Exponentiation</option>
            <option value="percentage">Percentage</option>
            <option value="sqrt">Square Root</option>
            <option value="log">Logarithm</option>
        </select>
        
        <button type="submit">Calculate</button>
    </form>
</body>
</html>