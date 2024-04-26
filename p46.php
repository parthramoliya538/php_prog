<?php 
$amount=1000;
$year=6;
if($year<=3)
{
	$rate=8.5;
}
else if($year>3 && $year<=5)
{
	$rate=9.11;
}
else if($year>5 && $year<=8)
{
	$rate=12;
}
else
{
	$rate=14;
}
echo '<br> Rate : '.$rate;
$si=($amount*$rate*$year)/100;
echo '<br> Simple interest : '.$si;
$net_amt=$amount+$si;
echo '<br> Net amount : '.$net_amt;

 ?>