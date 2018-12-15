<?php
include('connection.php'); 
?>
<?php
 $query="DELETE FROM courses where courses .id=".$_GET['id']; 
 $result = $db->exec($query);

//message 

if($result){
	
	echo"data delete succussfully";
	header('location:fetch_data.php?msg=delete successfully');
}
else{
	echo"data not delete please try again";
}
?>