<?php 
include('connection.php');
?>
<?php
 //build query
 
 $query="SELECT * FROM `student` where id=".$_GET['id'];
 $stmt = $db->query($query);
 $result= $stmt->fetch(PDO::FETCH_ASSOC);

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
    <div class="container">
 <form class="form-group" action="update.php" method="POST">
  
    
      <input type="hidden" value="<?= $result['id'] ?>" class="form-control" name="id" id="inputEmail3" placeholder="id">
   
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" value="<?= $result['fname'] ?>" class="form-control" name="fname" id="inputEmail3" placeholder="First Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" value="<?=$result['lname'] ?>" class="form-control" name="lname" id="inputPassword3" placeholder="Last Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Seip</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="seip" value="<?=$result['seip'] ?>" id="inputPassword3" placeholder="Seip">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>