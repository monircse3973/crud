
<?php
//connection to database
$db = new PDO('mysql:host=localhost;dbname=crud;charset=utf8mb4', 'root', '');
//variable declare
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$seip=$_POST['seip'];

//build querry

$querry= "UPDATE `student` SET `fname` = '$fname', `lname` = '$lname', `seip` = '$seip' WHERE `id` = ".$_POST['id'];
//exectute querry

$result = $db->exec($querry);

//message 

if($result){
	
	
	header('location:fetch_data.php?msg=Sucessfully inserted');
	echo "data insert succussfully";
}
else{
	echo "data not inset please try again";
}
?>
