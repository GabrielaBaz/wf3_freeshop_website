<?php
//array to control which menu title is active

if (isset($_GET['current'])) {
  $active_array = ['', '', '', ''];

  switch ($_GET['current']) {
    case 'Home':
      $active_array[0] = 'active';
      break;
    case 'Cart':
      $active_array[1] = 'active';
      break;
    case 'Products':
      $active_array[2] = 'active';
      break;
    case 'Profile':
      $active_array[3] = 'active';
      break;
  }
}
// else {
//   header('Location: index.php?current=Login');
// }

include('./data/products.php');
$product_keys = array_keys($products);

if (isset($_SESSION['cart'])) {
  $cart_count = count($_SESSION['cart']);
} else {
  $cart_count = 0;
}

?>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="home.php?current=Home">
      <h1>FREESHOP</h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link <?= $active_array[0] ?>" href="home.php?current=Home">Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $active_array[1] ?>" href="cart.php?current=Cart">Cart <span class="cart-count"> <?= $cart_count ?> </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $active_array[2] ?>" href="products.php?current=Products&amp;category=<?= $product_keys[0] ?>">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $active_array[3] ?>" href="profile.php?current=Profile">Profile</a>
        </li>
        <li class="nav-item">
          <form action="disconnect.php"><button type="submit" class="btn btn-danger fs-4 bg-pinky mx-4">Disconnect</button></form>
          <!-- <a class="nav-link" href="#">Profile</a> -->
        </li>
      </ul>
    </div>
  </div>
</nav>