
<?php

//connection to database
$db = new PDO('mysql:host=localhost;dbname=crud;charset=utf8mb4', 'root', '');
//variable declare
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$seip=$_POST['seip'];

//build querry

$querry= "INSERT INTO `student` (`fname`, `lname`, `seip`) VALUES ('$fname', '$lname', '$seip')";
//exectute querry

$result = $db->exec($querry);

//message 

if($result){
	
	echo"data insert succussfully";
	header('location:fetch_data.php?msg=Sucessfully inserted');
}
else{
	echo"data not inset please try again";
}





?>
