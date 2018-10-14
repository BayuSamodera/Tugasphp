<html>
<body>
<?php
$bayu1=$_POST ["oprand1"];
$bayu2=$_POST ["oprand2"];
$operator1=$_POST ["operator"];


 if ($operator1 =="==")
{$hasil=$bayu1 == $bayu2;}

if ($operator1 =="<")
{$hasil=$bayu1 < $bayu2;}

if ($operator1 == ">")
{$hasil=$bayu1 > $bayu2;}

if ($operator1 == "<=")
{$hasil=$bayu1 <= $bayu2;}

if ($operator1 == ">=")
{$hasil=$bayu1 >= $bayu2;}

if ($operator1 == "!=")
{$hasil=$bayu1 != $bayu2;}

if ($hasil == 1)
{echo  "$bayu1 $operator1 $bayu2 : True";}

else 
	if ($hasil == 0)
{echo  "$bayu1 $operator1 $bayu2 : False";}
?>
<p>
<button><a href=perbandingan.html>back</button>
</body>
</html>
