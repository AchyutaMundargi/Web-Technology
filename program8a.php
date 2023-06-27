<html>
<body>
<form method="post">
<input type="text" name="num1"/><br>
<input type="text" name="num2"/><br>
<input type="submit" name="submit" value="calculate"/><br>
</form>
<?php
if(isset($_POST['submit'])){
$a=$_POST['num1'];
$b=$_POST['num2'];
echo "Addition=".($a+$b)."<br>";
echo "Substraction=".($a-$b)."<br>";
echo "Multiplication=".($a*$b)."<br>";
echo "Quotient=".($a/$b)."<br>";
}
?>
</body>
</html>