<?php
session_start();

if(!isset($_SESSION['name']) AND !isset($_SESSION['lastName'])){
    header('Location:index.php?auth=0');
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php');?>

<body>
<?php include('menu.php');?>

<section class="main container py-5 w-50">
<header>
    <h1 class="my-5">Welcome to Freeshop!</h1>
<p class="fs-3">Welcome <?= $_SESSION['name']; echo ' '.$_SESSION['lastName'].'!';?> Starting now you can start shopping and adding
products to your shopping cart by selecting from our list of products depending on what you need.</p>
</header>
</section>

<?php include('foot.php'); ?>
</body>
</html>