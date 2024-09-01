<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


    <title>Fashion Website</title>
    <link rel="stylesheet" href="style.css" />
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
     
    <script
      src="https://kit.fontawesome.com/7a4b62b0a4.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div>
    <img src="img\logo.jpg" alt="logo" class="logo1" height="80" width="100" /><br><br>
    </div>
  <a class="navbar-brand" href="#" ><h1> Freeky</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#menuu">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#featuress">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#categories">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#collections">Collections</a>
      </li>
      <li class="nav-item">
        <button class="login_btn" onclick="document.getElementById('login-form').style.display='block'" style="width:auto ;">Log In</button>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0" >
      <input class="form-control mr-sm-2" type="search" id="search" value=" " 
      name="search" placeholder="Search" aria-label="Search" onchange="openPage()">
    </form>


  </div>
</nav>

  <div class="form-page">
    <div id="login-form" class="login-page">
      <div class="form-box">
        <div class="button-box">
          <div id="btn"></div>
          <button type="button" onclick="login()" class="toggle-btn">Log In</button>
          <button type="button" onclick="register()" class="toggle-btn">Register</button>
        </div>  





        <form id="login" class="input-group-login" action="user_login.php" method="post">
          <input type="email" class="input-field" name="email_id" placeholder="Email Id" required>
          <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
          <input type="checkbox" class="check-box"><span>Remember Password</span>
          <button type="submit" class="submit-btn">Log In</button>
        </form>






        <form id="register" class="input-group-register" action="user_registration.php" method="post">
          <input type="text" class="input-field" placeholder="First Name" name="first_name" required>
          <input type="text" class="input-field" placeholder="Last Name" name="last_name" required>
          <input type="email" class="input-field" placeholder="Email Id" name="email_id" required>
          <input type="password" class="input-field" placeholder="Enter Password" name="password" required>
          <input type="password" class="input-field" placeholder="Confirm Password" name="c_password" required>
          <input type="text" class="input-field" placeholder="Address" name="address" required>
          <input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
          <button type="submit" class="submit-btn">Register</button>
        </form>
      </div>
    </div>
  </div>

<script>
var x=document.getElementById("login");
      var y=document.getElementById("register");
      var z=document.getElementById("btn");
      function register()
      {
        x.style.left="-400px";
        y.style.left="50px";
        z.style.left="110px";
      }
      function login()
      {
        x.style.left="50px";
        y.style.left="450px";
        z.style.left="0px";
      }
</script>
<script>
      var modal=document.getElementById('login-form');
      window.onclick=function(event)
      {
        if (event.target==modal) {
          modal.style.display="none";
        }
      }
</script>

</body>
</html>