<!DOCTYPE html>
<html>
<body>

<form action="test.php" method="GET">
<input type="radio" name="sex1" value="male">Male<br>
<input type="radio" name="sex1" value="female">Female
<input type="submit" value ="Submit">
</form>
</body>
</html>

<html>
<body>

<form action="test.php" method="GET">
<input type="radio" name="sex1" value="male">Male<br>
<input type="radio" name="sex1" value="female">Female
<input type="submit" value ="Submit">
</form>
</body>
</html>



<?php

$roll1=$_GET['sex1'];
$roll2=$_GET['sex2'];
echo $roll1.'<br>';
echo $roll2.'<br>';


?>

