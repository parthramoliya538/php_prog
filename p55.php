<?php 
$a=array(
	'arr1'=>array(10,20,30,40,50),
	'arr2'=>array(10,20,30,40,50),
	'arr3'=>array(
		'Name'=>'Raj',
		'Email'=>'raj@gmail.com',
		'Contact'=>'9976543521',
		'City'=>'Surat')
);
echo '<pre>';
print_r($a);
echo '<br>';
echo $a['arr3']['City'];

 ?>