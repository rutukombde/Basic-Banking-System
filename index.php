<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
  
            <div class="container-fluid px-0">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://png.pngtree.com/thumb_back/fh260/background/20190221/ourmid/pngtree-gesture-bank-card-data-information-image_19030.jpg" class="d-block w-100" alt="...">
      
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    
  </div>
  
</div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user1.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : Black;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer1.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : Black;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transaction1.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : Black;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Rutu Kombde</b> <br>The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>