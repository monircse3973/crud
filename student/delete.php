<?php
include('connection.php'); 
?>
<?php
 $query="DELETE FROM student where student .id=".$_GET['id']; 
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