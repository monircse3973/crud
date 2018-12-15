
<?php
//connection to database
$db = new PDO('mysql:host=localhost;dbname=crud;charset=utf8mb4', 'root', '');
//variable declare
$title=$_POST['title'];
$code=$_POST['code'];


//build querry

$querry= "UPDATE `courses` SET `title` = '$title', `code` = '$code' WHERE `id` = ".$_POST['id'];
//exectute querry

$course = $db->exec($querry);

//message 

if($course){
	
	
	header('location:fetch_data.php?msg=Sucessfully inserted');
	echo "data insert succussfully";
}
else{
	echo "data not inset please try again";
}
?>
