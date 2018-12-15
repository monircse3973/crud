
<?php

//connection to database
$db = new PDO('mysql:host=localhost;dbname=crud;charset=utf8mb4', 'root', '');
//variable declare
$title=$_POST['title'];
$code=$_POST['code'];


//build querry

$querry= "INSERT INTO `courses` (`title`, `code`) VALUES ('$title','$code')";
//exectute querry

$course = $db->exec($querry);

//message 

if($course){
	
	echo"data insert succussfully";
	header('location:fetch_data.php?msg=Sucessfully inserted');
}
else{
	echo"data not inset please try again";
}





?>
