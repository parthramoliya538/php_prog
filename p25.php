<?php 
$a=0;
$b=1;
for($i=0;$i<5;$i++)
{
	echo'<br>'.$a;
	$c=$a+$b;
	$a=$b;
	$b=$c;
}

 ?>