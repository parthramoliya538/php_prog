<?php 
$s1=89;
$s2=78;
$s3=98;
$s4=76;
$s5=92;
echo'<br> Sub1 : '.$s1;
echo'<br> Sub2 : '.$s2;
echo'<br> Sub3 : '.$s3;
echo'<br> Sub4 : '.$s4;
echo'<br> Sub5 : '.$s5;

$total=$s1+$s2+$s3+$s4+$s5;
echo'<br><br> Total : '.$total;
if($s1>=35 && $s2>=35 && $s3>=35 && $s4>=35 && $s5>=35)
{
	$Per=$total/5;
}else
{
	$Per=0;
}

echo'<br> Percentage : '.$Per;
if($s1<$s2 && $s1<$s3 && $s1<$s4 && $s1<$s5)
{
	$Min=$s1;
}elseif($s2<$s3 && $s2<$s4 && $s2<$s5)
{
	$Min=$s2;
}else if($s3<$s4 && $s3<$s5)
{
	$Min=$s3;
}else if($s4<$s5)
{
	$Min=$s4;
}else
{
	$Min=$s5;
}
echo'<br> Min : '.$Min;

if($s1>$s2 && $s1>$s3 && $s1>$s4 && $s1>$s5)
{
	$Max=$s1;
}elseif($s2>$s3 && $s2>$s4 && $s2>$s5)
{
	$Max=$s2;
}else if($s3>$s4 && $s3>$s5)
{
	$Max=$s3;
}else if($s4>$s5)
{
	$Max=$s4;
}else
{
	$Max=$s5;
}
echo'<br> Max : '.$Max;

if($s1>=35 && $s2>=35 && $s3>=35 && $s4>=35 && $s5>=35)
{
	$result="Pass";
}else
{
	$result="Fail";
}
echo'<br> Result : '.$result;
if($Per>70)
{
	$grade="Grade A";
}else if($Per>60 && $Per<=70)
{
	$grade="Grade B";
}else if($per>50 && $Per<=60)
{
	$grade="Grade C";
}else if($Per>35 && $Per<=50)
{
	$grade="Grade D";
}else
{
	$grade="-";
}
echo'<br> Grade : '.$grade;

 ?>