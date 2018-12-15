<?php 
include('connection.php');
?>
<?php
 //build query
 
 $query="SELECT * FROM `courses`";
 $stmt = $db->query($query);
 $courses= $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
	

    <title>Crud</title>
  </head>
  <body>
    <?php include('navbar.php'); ?>
		<table class="table">
		  <thead>
			<tr>
			  <th scope="col">Serial</th>
			  <th scope="col">ID</th>
			  <th scope="col">title</th>
			  <th scope="col">Code</th>
			  <th scope="col">action</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php 
		  $counter=1;
		  foreach($courses as $course):
	    
  
		  ?>
			<tr>
			
			  <td><?php echo $counter++ ?></td>
			  <td><?php echo $course['id'] ?></td>
			  <td><?php echo $course['title']  ?></td>
			  <td><?php echo $course['code']  ?></td>
			 
			  <td>
			  <a href="single_fetch.php?id=<?=$course['id']?>">show </a>
			  <a href="edit.php?id=<?=$course['id']?>">edit </a>
			  <a href="delete.php?id=<?=$course['id']?>">Delete </a>
			  </td>
			</tr>
			<?php
			endforeach;
			?>
			
		  </tbody>
		</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>