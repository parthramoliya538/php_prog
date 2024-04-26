<?php 
for($i=5;$i>=1;$i--)
{
	echo'<br>';
	for($j=5;$j>=$i;$j--)
	{
		echo'&nbsp&nbsp';
	}
	for($j=$i;$j>=1;$j--)
	{
		echo $j; 
	}
}

 ?>