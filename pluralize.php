<?php
/* 
* Simple Pluralize Function
* This function pluralizes a regular noun that ends in -s
*/

function pluralize($data,$suffix=""){

	if(!is_numeric($data)) {
		$plural = " N/A";
	}else {
		if($data <= 1){
			$plural = $data . " " . $suffix;
		}else {
			$plural = $data . " " . $suffix . "s";
		}
	}
	return $suffix;
}
?>
