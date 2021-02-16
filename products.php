<?php
session_start();

if (!isset($_SESSION['name']) and !isset($_SESSION['lastName'])) {
  header('Location:index.php?auth=0');
}
//include the product data
include('./data/products.php');
//print_r($products);


$product_keys = array_keys($products);

//---------------------- code to highlight the category in the product menu ---------------------
//$product_keys[2]=str_replace(' ', '',$product_keys[2]);
//check if a category has been sent and change the active array to highlight it
if (isset($_GET['category'])) {

  //create an empty array to indicate which product is active in the main menu
  $active_array_prod = array();
  for ($i = 0; $i < count($product_keys); $i++) {
    $active_array_prod[$i] = '';
  }

  //depending on the GET category value, assign the active to put in the class
  switch ($_GET['category']) {
    case $product_keys[0]:
      $active_array_prod[0] = 'active';
      break;
    case $product_keys[1]:
      $active_array_prod[1] = 'active';
      break;
    case $product_keys[2]:
      $active_array_prod[2] = 'active';
      break;
  }
}

//-------------------- code to add to cart -------------------------
if (isset($_GET['add']) && isset($_GET['category'])) {
  $product_to_add = NULL;
  $added_success = 0;
  //search for the product in the products table
  foreach ($products[$_GET['category']] as $key => $product) {

    if ($product['id'] == $_GET['add']) {
      $product_to_add = $product;
      break;
    }
  }

  //add the product to the cart
  array_push($_SESSION['cart'], $product_to_add);
  $added_success = 1;
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body>
  <?php include('menu.php'); ?>

  <section class="main container py-5">


    <div class="row my-5">

      <!-- first column with the list of product categories -->
      <div class="col-md-3 my-3">

        <h1 class="mb-4">Products</h1>

        <div class="list-group">

          <?php
          // print_r($product_keys);
          // echo $_GET['category'];
          // print_r($active_array);
          // echo str_replace(' ', '',$product_keys[2]);

          foreach ($product_keys as $key => $product) :
          ?>
            <a href="products.php?current=Products&amp;category=<?= $product ?>" class="list-group-item list-group-item-action transp-white <?= $active_array_prod[$key] ?>"><?= $product ?></a>
          <?php endforeach;
          ?>
        </div>


      </div>
      <!-- end of first column with the list of product categories -->

      <!-- second column with the list of products - dynamic -->
      <div class="col-md-9 my-3">

        <?php

        if ($added_success = 1 && isset($_GET['add'])) {
          echo '<p class="alert alert-success">Your product was added to the cart!</p>';
        }

        $prod_cat = $_GET['category'];

        foreach ($products[$prod_cat] as $key => $product) { ?>
          <div class="card transp-white rounded">
            <div class="card-body transp-white rounded">
              <h5 class="card-title fs-2"><?= $product['name'] ?></h5>
              <p class="card-text"><?= $product['description'] ?></p>
              <a href="products.php?current=Products&amp;category=<?= $_GET['category'] ?>&amp;add=<?= $product['id'] ?>" class="btn btn-info text-light fs-4">Add to Cart</a>
            </div>
          </div>
          <br>

        <?php
        }
        ?>


      </div>
      <!-- end of second column -->

    </div>
    <!-- end of div row -->


  </section>

  <?php include('foot.php'); ?>
</body>

</html>