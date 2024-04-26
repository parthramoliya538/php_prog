<?php 
$a=array('Name'=>'Rajesh','Email'=>'rajesh@gmail.com','City'=>'Surat');
echo '<br>';
foreach($a as $k => $v)
{
	echo $k.'=>'.$v.'<br>';
}
print_r($a);
echo '<br>';
echo $a['City'];

 ?>