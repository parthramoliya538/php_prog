<?php 
$a=10;
$b=300;
$c=20;
$d=40;
$e=500;
if($a>$b && $a>$c && $a>$d && $a>$e)
{
	echo 'A is max';
}
else if($b>$c && $b>$d && $b>$e)
{
	echo 'B is max';
}
else if($c>$d && $c>$e)
{
	echo 'C is max';
}
else if($d>$e)
{
	echo 'D is max';
}
else
{
	echo 'E is max';
}

 ?>