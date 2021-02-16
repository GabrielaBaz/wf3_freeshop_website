<!DOCTYPE html>
<html lang="en">

<?php include('head.php'); ?>

<!-- <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->

<body>

  <?php include('menu.php'); ?>

  <section class="main container py-5 w-25">
    <?php
    //Authentification with get variables
    if (isset($_GET['auth'])) {
      switch ($_GET['auth']) {
        case '0':
          echo '<p class="alert alert-danger">Please input your id and your password.</p>';
          break;
        case '1':
          echo '<p class="alert alert-danger">Wrong username and/or password.</p>';
          break;
        case '2':
          echo '<p class="alert alert-danger">You are now disconnected.</p>';
          break;
        case '3':
          echo '<p class="alert alert-danger">No user is connected. Please login first.</p>';
          break;
      }
    }

    ?>


    <form class="my-5" method="post" action="connect.php">
      <div class="mb-3">
        <label for="id" class="form-label">User ID</label>
        <input type="text" class="form-control fs-5" id="id" name="id">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control fs-5" id="password" name="password">
      </div>

      <button type="submit" class="btn btn-primary fs-4">Submit</button>
    </form>


  </section>


  <?php include('foot.php'); ?>

</body>

</html>