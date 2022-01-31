<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
    $raddisson_cost = 450;
    $hippo_cost = 200;
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $days = $_POST['days'];
    $fname = $_POST['fname'];
    
    $raddisson_cost*=$days;
    $hippo_cost*=$days;
    ?>

      <div class="card" style="width: 55%; margin: 1rem; margin-right: auto; margin-left: auto;">
        <img class="card-img-top" src="images/bg.jpg" alt="noje">
        <div class="card-body">
          <h4 class="card-title">Hippo Pod Hotel</h4>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Pet Friendly: Yes</li>
            <li class="list-group-item">Catering: Yes</li>
            <li class="list-group-item">Swimming Pool: No</li>
            <li class="list-group-item">Daily rate: R200</li>
            <li class="list-group-item">Length of stay: <?php print $days?></li>
            <li class="list-group-item">Total cost: R<?php print $hippo_cost?></li>
          <a href="hippo_success.php"  class="btn btn-primary">Book</a>
        </div>
      </div>

      <br>
      <div class="card" style="width: 55%; margin: 1rem; margin-right: auto; margin-left: auto;">
        <img class="card-img-top" src="images/raddison.jpg" alt="noje">
        <div class="card-body">
          <h4 class="card-title">Radisson Blu Hotel</h4>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Pet Friendly: Yes</li>
            <li class="list-group-item">Catering: Yes</li>
            <li class="list-group-item">Swimming Pool: Yes</li>
            <li class="list-group-item">Daily rate: R450</li>
            <li class="list-group-item">Length of stay: <?php print $days?></li>
            <li class="list-group-item">Total cost: R<?php print $raddisson_cost?></li>
          <a href="raddisson_success.php" class="btn btn-primary">Book</a>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
    