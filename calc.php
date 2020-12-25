<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>php calculator</h1>
    <form action="calc.php" method="post">
        <label for="num1">Number</label>
        <input type="number" id="num1" name="user_num1" required="required">
        <br />
        <label for="mult">Multiply</label>
        <input type="radio" id="mult" name="operation" value="multiply">
        </br >
        <label for="div">Divide</label>  
        <input type="radio" id="div" name="operation" value="divide">
        <br />
        <label for="add">Add</label>  
        <input type="radio" id="add" name="operation" value ="add">
        <br/>
        <label for="sub">Subtract</label>  
        <input type="radio" id="sub" name="operation" value="subtract">
        <br />
        <label for="num2">Number</label>
        <input type="number" id="num2" name="user_num2" required="required">
        <br />
        <button class="cta" type="submit">submit</button>
    </form>

    <?php 
        $numOne = $_POST["user_num1"];
        $numTwo = $_POST["user_num2"];
        $desiredOperation = $_POST["operation"];
        function calculate($numOne, $numTwo, $desiredOperation) {
            if ($desiredOperation == "multiply") {
                return $numOne * $numTwo;
            } elseif ($desiredOperation == "divide") {
                return $numOne / $numTwo;
            } elseif ($desiredOperation == "add") {
                return $numOne + $numTwo;
            } else {
                return $numOne - $numTwo;
            }
        }
        echo calculate($numOne, $numTwo, $desiredOperation);
    ?>

</body>
</html>
