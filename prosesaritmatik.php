<html>
<body>
<?php
$bayu1=$_POST ["oprand1"];
$bayu2=$_POST ["oprand2"];
$operator1=$_POST ["operator"];


 if ($operator1 =="+")
{$hasil=$bayu1+$bayu2;}

if ($operator1 =="-")
{$hasil=$bayu1-$bayu2;}

if ($operator1 == "/")
{$hasil=$bayu1/$bayu2;}

if ($operator1 == "%")
{$hasil=$bayu1%$bayu2;}


echo  "$bayu1 $operator1 $bayu2= ",$hasil;
?>
<p>
<button><a href=aritmatik.html>back</button>
</body>
</html>
