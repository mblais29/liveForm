<?php


$file = file_get_contents('employees.json', true);
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$age=$_POST['age'];

//writes the gender variable as a f or m instead of Male or Female
if($gender=$_POST['gender'] == 'Female'){
	$gender='f';
}else{
	$gender='m';
};


//echo $firstname." ".$lastname." ".$age." ".$gender;

//decodes the JSON file
$data = json_decode($file,true);
unset($file);

$data[] = array('firstname' => $firstname, 'lastname' => $lastname, 'age' => $age, 'sex' => $gender );
//encodes the new record in JSON Format
$result=json_encode($data);
//Adds the content to the JSON file
file_put_contents('employees.json', $result);
unset($result);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	//Refreshes the page to show new record
	header("Refresh:0; url=index.php");
	exit();
}

?>