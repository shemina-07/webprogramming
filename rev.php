<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center;margin-top:100px;" >
   
    <form action="test.php"method="post">
    <h1 style="color:red;">enter a number</h1>
    <input type="number"name="num">
    <input type="submit"name="reverse"value="reverse">
    </form>
</body>
</html>

<?php
if(isset($_POST["reverse"])){
    $num=$_POST['num'];
    $reversedNum = 0;
        
        // Loop to extract digits and reverse the number
        while ($num > 0) {
            // Get the last digit
            $digit = $num % 10;
            // Build the reversed number
            $reversedNum = ($reversedNum * 10) + $digit;
            // Remove the last digit from the original number
            $num = (int)($num / 10);
        }
        
        // Display the reversed number
        echo "<h2 >Reversed Number: " . $reversedNum . "</h2>";
    }
    ?>
