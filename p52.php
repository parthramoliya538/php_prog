<?php 
$a=array();
$total=0;


for($i=1;$i<=5;$i++)
{
	//$sub=array();
	$a['sub'.$i]=rand(33,100);
}
$max=$a['sub1'];
$min=$a['sub1'];
echo "<br>";
foreach ($a as $k => $v)
{
	echo $k.'=>'.$v.'<br>';
	$total+=$v;
	$per=$total/5;
	if($per>=70)
	{
		$grade="disk";
	}else if($per>=60)
	{
		$grade="first";
	}else if($per>=50)
	{
		$grade="second";
	}else if($per>=33) 
	{
		$grade="fail";
	}

	if($per>=35)
	{
		$result="pass";
	}
	else
	{
		$result="fail";
	}

for($i=1;$i<=5;$i++)
{
	if($a['sub'.$i]>$max)
	{
		$max=$a['sub'.$i];
	}
}
for($i=1;$i<=5;$i++)
{
	if($a['sub'.$i]<$min)
	{
		$min=$a['sub'.$i];
	}
}
	

}
echo "<br> total=".$total;
echo "<br> per=".$per;
echo "<br> grade=".$grade;
echo "<br> result=".$result;
echo "<br> max=".$max;
echo "<br> min=".$min;






 ?>