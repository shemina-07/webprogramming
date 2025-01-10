<html>
<body style="text-align:center;margin-top:100px;">
<form action="sum.php" method="post">
<h1 style="color:red">Enter a number</h1>
<input type="number" name="num">
<input type="submit" name="sum" value="sum">
</form>
</body>
</html>

<?php
if(isset($_POST["sum"])){
$num=$_POST["num"];
$t=$num;
$sum=0;
while($num>0){
$sum+=$num%10;
$num=(int)($num/10);
}
echo"sum of digits of $t is $sum";
}
?>