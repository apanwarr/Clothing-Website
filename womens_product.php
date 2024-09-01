<html>
<head>
<title>Womens Products</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- products section starts  -->

<section class="products" id="products">


    <h1 class="heading"> Womens Products </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="img\women_tshirt.jpg" alt="">
                <h3>Womens T-shirts</h3>
                <div class="price"> Rs.399 </div>
                <button class="btn" onclick="add_cart();">add to cart</button>
                <button class="btn" onclick="buy_now();">buy now</button>
            </div>

            <div class="swiper-slide box">
                <img src="img\women_jeans.jpeg" alt="">
                <h3>Womens Jeans</h3>
                <div class="price"> Rs.899 </div>
                <button class="btn" onclick="add_cart();">add to cart</button>
                <button class="btn" onclick="buy_now();">buy now</button>
            </div>

            <div class="swiper-slide box">
                <img src="img\women_jacket.jpeg" alt="">
                <h3>Womens Jackets</h3>
                <div class="price"> Rs.1999 </div>
                <button class="btn" onclick="add_cart();">add to cart</button>
                <button class="btn" onclick="buy_now();">buy now</button>
            </div>

            <div class="swiper-slide box">
                <img src="img\women_shoe.jpeg" alt="">
                <h3>Womens Shoes</h3>
                <div class="price"> Rs.1599 </div>
                <button class="btn" onclick="add_cart();">add to cart</button>
                <button class="btn" onclick="buy_now();">buy now</button>
            </div>

        </div>
    
    </div>

    
</section>

<!-- products section ends -->

<?php include 'footer.php'; ?>

<script src="web.js"></script>

</body>
</html>