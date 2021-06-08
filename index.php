<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <h1>Simple Calculator</h1>
    <fieldset style="width: 500px">
        <legend>Calculator</legend>
        First operand:
        <input type="number" name="number1" placeholder="number">
        <br><br>
        Operator:
        <select name="operator" style="width: 200px">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">x</option>
            <option value="/">/</option>
        </select><br><br>
        Second operand:
        <input type="number" name="number2" placeholder="number">
        <input type="submit" value="calculate">
    </fieldset>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_REQUEST["number1"];
        $number2 = $_REQUEST["number2"];
        $operator = $_REQUEST["operator"];
        switch ($operator) {
            case "+":
                echo  $number1 + $number2;
                break;
            case '-';
                echo $number1 - $number2;
                break;
            case '*':
                echo $number1*$number2;
                break;
            case '/':
                echo $number1/$number2;
                break;
            default:
                echo 'erro';
        }
    }
    ?>
</form>
</body>
</html>
