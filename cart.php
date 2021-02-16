<?php
session_start();

if(!isset($_SESSION['name'])) {
    header('Location: index.php?auth=0');
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>
<body>
<?php include('menu.php'); ?>
    
<section class="main container pt-5 w-50">

<?php
//When the client places the order
//Empty the cart and show success message

if(isset($_GET['command']) && $_GET['command']==1 && $_SESSION['cart']!=[]){
$_SESSION['cart']=[];
echo '<p class="alert alert-success">Your order has been placed! Thank you for shopping with us.</p>';
}

?>

<h1 class="my-5">Your Cart</h1>
<!-- show the cart -->

<ul class="list-group list-group-flush border rounded">
  <li class="list-group-item list-group-item-info fw-bold">List of Products</li>
<?php foreach($_SESSION['cart'] as $key => $cart_item) {  ?>

  <li class="list-group-item list-group-item-light transp-white"><?= $cart_item['name'] ?></li>
  
<?php } ?>
</ul>
<a href="cart.php?current=Cart&amp;command=1" class="btn btn-info text-light fs-3 w-100">Place Order</a>

</section>

<?php include('foot.php'); ?>
</body>
</html>