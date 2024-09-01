<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <title>Search Bar</title>
    <link rel="stylesheet" href="style.css" />
    
  </head>
  <body>

<?php include 'navbar.php'; ?>

<!-- Search Results starts here -->
<br><br><br>
<div class=" container my-8" style="position: relative;">
  <h1 ><em>Not currently available...</em> </h1>
    <h4><em>No result found...</em></h4><br>
    <div class="result">
    <h3><a href="mens_product.php" class="links"> Related search</a></h3>
    <p>For Mens Shopping</p><br>
    </div>
    <div class="result">
    <h3><a href="womens_product.php" class="links" > Related search</a></h3>
    <p>For Womens Shopping</p><br>
    </div>
    <div class="result">
    <h3><a href="kids_product.php" class="links" > Related search</a></h3>
    <p>For Kids Shopping</p><br>
    </div>
  <br>
</div>

<!-- Search Results end here -->

<?php include 'footer.php'; ?>


  </body>
</html>