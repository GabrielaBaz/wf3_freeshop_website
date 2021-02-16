<?php
session_start();

if (isset($_SESSION['name'])){
if(isset($_POST['userName']) AND isset($_POST['userLastName'])){
    $_SESSION['name']=$_POST['userName'];
    $_SESSION['lastName']=$_POST['userLastName'];
} 
} else {
    header('Location: index.php?auth=0');
}


?>

<!DOCTYPE html>
<html lang="en">
<?php include('head.php');  ?>
<body>
<?php include('menu.php');  ?>

<section class="main container py-5 w-50">
<h1 class="my-5">Your Info</h1>
<form action="profile.php?current=Profile" method="post">
<div class="input-group flex-nowrap w-50">
  <span class="input-group-text fs-4" id="addon-wrapping">Name:</span>
  <input type="text" class="form-control fs-4" name="userName" value="<?= $_SESSION['name'] ?>" >
  </div>
  <br>
  <div class="input-group flex-nowrap w-50">
  <span class="input-group-text fs-4" id="addon-wrapping">Last name:</span>
  <input type="text" class="form-control fs-4" name="userLastName" value="<?= $_SESSION['lastName'] ?>" >
</div>
<br>
<button type="submit" class="btn btn-primary fs-4">Update</button>
<!-- <a href="profile.php?current=Profile&update=1" class="btn btn-primary fs-4">Update</a> -->

</form>


</section>


<?php include('foot.php');  ?>
</body>
</html>