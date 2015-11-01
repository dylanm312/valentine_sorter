<?php

$csv = file_get_contents("sample_data.csv");

//Parse CSV into array
$array = array_map("str_getcsv", explode("\n", $csv));

//Convert array into json
$array = json_encode($array);

//Define Valentine class
class Valentine {
	function __construct($sendName, $recpName, $period0, $period1, $period2, $period3, $period4, $period5, $period6, $period7, $firstChoice, $secondChoice, $thirdChoice){
		this->$sendName = $sendName;
		this->$recpName = $recpName;
		this->$period0 = $period0;
		this->$period1 = $period1;
		this->$period2 = $period2;
		this->$period3 = $period3;
		this->$period4 = $period4;
		this->$period5 = $period5;
		this->$period6 = $period6;
		this->$period7 = $period7;
		this->$firstChoice = $firstChoice;
		this->$secondChoice = $secondChoice;
		this->$thirdChoice = $thirdChoice;
	}
}

foreach($object as $array){
	$object = new Valentine($object[0], $object[1], $object[2], $object[3], $object[4], $object[5], $object[6], $object[7], $object[8], $object[9], $object[10], $object[11], $object[12]);
}



?>