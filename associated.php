<?php 

	$emp=array("name"=>"user","email"=>"user@gmail.com","contact"=>"
	7676767676");

	// echo "Name: ".$emp["name"]."<br/>";
	// echo "Email: ".$emp["email"]."<br/>";
	// echo "Contact: ".$emp["contact"]."<br/>";

	foreach ($emp as $key => $value) {
		echo "$key : $value <br>";
	}



 ?>