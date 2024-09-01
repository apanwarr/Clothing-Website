<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <title>Fashion Website</title>
    <link rel="stylesheet" href="style.css" />
    
  </head>
  <body>

<?php include 'navbar.php'; ?>
    
    <!-- Hero Section -->
    <div class="container">
      <div class="hero">
        <div class="hero_image">
          <img src="img\hero.jpg" alt="hero_image" height="490" width="700" />
        </div>
        <div class="hero_content">
          <div class="tag">50% Off on All Products</div>
          <h1>Enjoy Your Clothes Shopping</h1>
          <i>Discover comfort and fashion in every pair of our shorts, perfect for casual weekends and stylish outings alike. Explore our collection to find shorts designed to fit every moment of your life.</i>
        </div>
      </div>

      <br><br>
      <h1 class="heading" id="featuress">Our Features</h1>
      <section class="features">
        <div class="feature">
          <img src="img\discount.png" alt="" />
          <div class="feature_content">
            <h3>Discount Voucher</h3>
          </div>
        </div>
        <div class="feature">
          <img src="img\Quality.jpg" alt="" />
          <div class="feature_content">
            <h3>Quality Products</h3>
          </div>
        </div>
        <div class="feature">
          <img src="img\delivery1.jpg" alt="" />
          <div class="feature_content">
            <h3>Free Home Delivery</h3>
          </div>
        </div>
      </section>



      <div class="divider"></div>
      <div class="menu">
        <div class="tag" >Our Menu</div>
        <h2 id="menuu">Explore Our Menu</h2>

      <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="grid">
    <div class="carousel-item active">
      <img src="img\middle1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Shirts and T-shirts</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img\middle4.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Sweaters</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img\middle7.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Coats and Jackets</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img\middle3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Sweaters and Mufflers</h3>
      </div>    
    </div>
    <div class="carousel-item">
      <img src="img\middle6.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>T-shirts</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img\middle2.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Hoodies</h3>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
          <!-- categories section starts  -->
    
    <section class="categories" id="categories">
    <h1 class="heading" > Product Categories </h1>
    

    <div class="box-container" >
        <div class="box"  >
            <img src="img\mens_cloth.jpeg" alt="">
            <h3>Mens Clothes</h3>
            <p>upto 45% off</p>
            <a src="#" href="mens_product.php" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="img\women_cloth.jpeg" alt="">
            <h3>Womens Clothes</h3>
            <p>upto 45% off</p>
            <a src="#" href="womens_product.php" class="btn">shop now</a>
        </div>


        <div class="box">
            <img src="img\kid_cloth.jpg" alt="">
            <h3>Kids Clothes</h3>
            <p>upto 45% off</p>
            <a src="#" href="kids_product.php" class="btn">shop now</a>
        </div>

      </div>
  </div>

</section>

<!-- categories section ends -->


       <h1 class="heading" id="collections">Our Collections</h1>
        <div class="grid">
          <div class="item1">
            <img
              class="grid-image"
              src="img\middle1.jpg"
              alt="image 1"
            />
          </div>
          <div class="item2">
            <img
              class="grid-image"
              src="img\middle2.jpg"
              alt="image 2"
            />
          </div>
          <div class="item3">
            <img
              class="grid-image"
              src="img\middle3.jpg"
              alt="image 3"
            />
          </div>
          <div class="item4">
            <img
              class="grid-image"
              src="img\middle4.jpg"
              alt="image 4"
            />
          </div>
          <div class="item5">
            <img
              class="grid-image"
              src="img\middle5.jpg"
              alt="image 5"
            />
          </div>
          <div class="item6">
            <img
              class="grid-image"
              src="img\middle6.jpg"
              alt="image 6"
            />
          </div>
          <div class="item7">
            <img
              class="grid-image"
              src="img\middle7.jpg"
              alt="image 7"
            />
          </div>
        </div>
      </div>
    </div>

    
<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="abc.js"></script>

  </body>
</html>