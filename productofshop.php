<?php

  session_start();
  if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
  $ID = $_SESSION['id'];
  $name =$_SESSION['name'];
  $email = $_SESSION['email'];
  $password = $_SESSION['password'];

  } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <!--font awsom css-->
    <link rel="stylesheet" href="css/all.min.css">
<style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Spartan", sans-serif;
        }

        html {
        scroll-behavior: smooth;
        }

        /* Global Styles */

        h1 {
        font-size: 50px;
        line-height: 64px;
        color: #222;
        }

        h2 {
        font-size: 46px;
        line-height: 54px;
        color: #222;
        }

        h4 {
        font-size: 20px;
        color: #222;
        }

        h6 {
        font-weight: 700;
        font-size: 12px;
        }

        p {
        font-size: 16px;
        color: #465b52;
        margin: 15px 0 20px 0;
        }
        button.norm{
        padding: 10px 18px;
        font-size: 14px;
        font-weight: 600;
        color: #212121;
        background-color: #fff;
        border-radius: 4px;
        cursor: pointer;
        border: none;
        outline: none;
        transition: 0.2s;
        }

        .section-p1 {
        padding: 40px 80px;
        }

        .section-m1 {
        margin: 40px 0;
        }


        body {
        width: 100%;
        }


        /*header*/
        #header{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 40px;
        background-color: white;
        box-shadow: 0 5px 15px rgb(0, 0, 0, 0.07);
        /* fixed nav */
        position: fixed;
        width: 100%;
        z-index: 100000;
        top: 10px;
        left: 0;
        /* fixed nav */
        border-radius: 10px;
        width: 95%;
        margin: 0 2.5% 0 2.5%;
        }

        #header .logo{
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: black;
        text-decoration: none;
        font-size: 26px;
        font-weight: bold;
        transition: 0.3s;
        font-family: Georgia, 'Times New Roman', Times, serif;
        letter-spacing: 5px;

        }
        #header .logo:hover{
        color: #2196f3;
        transform: translateX(1.5px);
        }

        #header .logo-user{
        height: 10vh;
        display: flex;
        align-items: center;
        justify-content: center;
        gap:15px;
        cursor: pointer;
        }
        #header .logo-user .user{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        flex-wrap: wrap;
        padding: 10px;
        border-radius: 50%;
        background-color: #f6f2f2;
        position: relative;
        width: 55px;
        }
        #header .logo-user .user .infouser{
        min-width: 350px;
        min-height: 250px;
        padding: 15px;
        position: absolute;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        flex-direction: column;
        background-color: #f6f2f2;
        border-radius: 10px;
        gap:20px;
        top:10vh;
        left: -650px;
        box-shadow: 0 5px 15px rgb(0, 0, 0, 0.07);
        cursor: default;
        transition: 0.3s;
        }
        #header .logo-user .user .infouser.activeuser{
        left: -146px;
        }
        #header .logo-user .user .infouser h3{
        width: 100%;
        color: #222;
        }
        #header .logo-user .user .infouser h4 a{
        width: 100%;
        text-decoration: none;
        color: #222;
        }
        #header .infouser a i{
        color: #2196f3;
        }
        #header .logo-user .user .infouser h4 a:hover,
        #header .logo-user .user .infouser h3:hover{
        color: #2196f3;
        }


        #navbar{
        display: flex;
        justify-content: space-between;
        align-items: center;
        }
        .ibad{
        display: none;
        }
        #close{
        display: none;
        }
        #navbar li{
        list-style: none;
        margin: 0 7px;
        }
        #navbar li a{
        text-decoration: none;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 10vh;
        position: relative;
        color: rgb(13, 12, 12);
        padding: 0 10px;
        font-size: 18px;
        transition: 0.3s ease;
        padding: 0 20px;
        }
        #navbar li a:hover,
        #navbar li a.active{
        color: #2196f3;
        }
        #navbar li a.active::after{
        content: "";
        position: absolute;
        width: 100%;
        height: 4px;
        background-color:#2196f3;
        top: 90%;
        left:0;
        transition:0.3s ease;
        }
        #navbar li a::before{
        content: "";
        position: absolute;
        width: 0%;
        height: 4px;
        background-color:#2196f3;
        top: 90%;
        left:0;
        transition:0.3s ease;
        }
        #navbar li a:hover::before{
        width: 100%;
        }

        @media(max-width:1000px){
        #navbar li a:hover,
        #navbar li a.active{
        color: #2196f3;
        background-color: #fff;
        }
        #navbar li a.active::after{
        content: "";
        display: none;
        }
        #navbar li a::before{
        content: "";
        display: none;
        }
        #navbar li a:hover::before{
        display: none;
        }


        #navbar{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        position: fixed;
        top: 87px;
        right: -300px;
        height: 85vh;
        width: 300px;
        background-color:#fff;
        box-shadow: 0 40px 60px rgb(0, 0, 0, 0.1);
        padding: 80px 0px 0px 10px;
        transition: 0.3s;
        border-radius: 10px;
        }
        #navbar.active{
        right: 20px;
        }
        #navbar li{
        margin-bottom: 25px;
        }
        .ibad{
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 60px;

        }
        #bar{
        color: rgb(13, 12, 12);
        font-size: 24px;
        cursor: pointer;
        }
        .ibad a{
        color: rgb(13, 12, 12);
        font-size: 24px;
        }
        #close{
        display: inline-block;
        position: absolute;
        top: 30px;
        left: 30px;
        color:rgb(13, 12, 12) ;
        font-size: 24px;
        cursor: pointer;
        }
        #close:hover{
        color: #2196f3;
        }
        #bag{
        display: none;
        }

        }
        @media(max-width:477px){
        #header {
        padding: 0px 20px;

        }


        }

        /*end header*/

        /*start productinfo*/
        #productinfo{
        display: flex;
        margin-top: 20px;
        padding: 80px 80px 80px 80px;
        }
        #productinfo .left-side-img{
        width: 60%;
        margin-right: 30px;
        height: 60vh;
        display:flex;
        justify-content:space-around;
        align-items: center;
        }

        #productinfo .left-side-img img{
        width: 450px;
        height: 100%;
        }


        #productinfo .right-side-info{
        width: 40%;
        padding-top: 30px;
        }
        #productinfo .right-side-info h6{
        padding: 30px 0 20px 0;
        font-size: 14px;
        }
        #productinfo .right-side-info h4{
        padding: 30px 0 20px 0;
        font-size: 24px;
        }
        #productinfo .right-side-info h2{
        font-size: 26px;
        }
        #productinfo .right-side-info input{
        width: 50px;
        height: 45px;
        padding-left: 10px;
        font-size: 16px;
        margin-right: 10px;
        }
        #productinfo .right-side-info select{
        display: block;
        padding: 5px 10px;
        margin-bottom: 10px;
        }
        #productinfo .right-side-info button{
        background-color: #088178;
        color: #fff;
        margin: 10px 0;
        }
        #productinfo a{
        text-decoration: none;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        }
        #productinfo .right-side-info input:focus{
        outline: none;
        }
        @media(max-width:690px){
        #productinfo{
        padding: 80px 20px 20px 20px;
        }
        #productinfo .left-side-img{
        width: 70%;
        margin: 0 20px 0 0;
        }
        #productinfo .right-side-info{
        width: 30%;
        }
        }
        @media(max-width:477px){

        #productinfo{
        display: block;
        }
        #productinfo .left-side-img{
        width: 100%;
        }
        #productinfo .right-side-info{
        width: 100%;
        }
        }
        /*end productinfo*/
        /*start features product*/
        #product1{
        text-align: center;
        margin: 0 auto 0 auto;
        }
        #product1 .product-container{
        padding-top: 20px;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
        gap: 40px;
        }
        #product1 .product{
        width: 25%;
        min-width: 250px;
        padding: 10px 12px;
        border-radius: 25px;
        border: 1px solid #cce7d0;
        cursor: pointer;
        box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
        transition: 0.2s ease;
        position: relative;
        }
        #product1 .product:hover{
        box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
        }
        #product1 .product img{
        width: 100%;
        border-radius: 20px;
        }
        #product1 .product .info{
        text-align: start;
        padding: 10px 0;
        }
        #product1 .product .info span{
        color: #505050;
        }
        #product1 .product .info h5{
        padding-top: 7px;
        color: #212121;
        font-size: 14px;
        }
        #product1 .product .info .star{
        font-size: 12px;
        color: #fee73f;
        }
        #product1 .product .info h4{
        padding:  7px;
        font-size: 15px;
        font-weight: 700;
        color: #088178;
        }
        #product1 .product .shopi{
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50px;
        font-weight: 500;
        background-color: #e8f6ea;
        border: 1px solid #cce7d0;
        position: absolute;
        bottom: 20px;
        right: 10px;
        } 
        #product1 .product .shopi a{
        color: #088178;
        }
        @media(max-width:677px){

        #product1 .product{
        left: 25%;
        }
        }
        @media(max-width:477px){
        #product1 .product{
        left: 0;
        }

        }
        /*end features product*/
        /*start newupdates*/

        #newupdates{
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        align-items: center;
        background-image: url("img/b14.png");
        background-repeat: no-repeat;
        background-position: 20% 30%;
        background-color: #212121;

        }
        #newupdates .newtext h4{
        font-size: 22px;
        font-weight: 700;
        color: #fff;
        }
        #newupdates .newtext p{
        font-size: 14px;
        font-weight: 600;
        color: #465b52;
        }
        #newupdates .newtext p span{
        color: #ffbd27;
        }
        #newupdates .form input{
        font-size: 14px;
        height: 36px;
        padding: 10px 18px;
        width: 100%;
        border: 1px solid transparent;
        border-radius: 4px 0 0px 4px;
        outline: none;
        }
        #newupdates .form button{
        background-color: #088178;
        color: #fff;
        white-space: nowrap;
        border-radius: 0px 4px 4px 0px;
        }
        #newupdates .form{
        display: flex;
        }
        @media(max-width:821px){
        #newupdates .form{
        width: 65%;
        }

        }
        @media(max-width:477px){

        #newupdates .form{
        width: 100%;
        }

        }
        /*end newupdates*/

        /*start footer*/

        footer{
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        }
        footer .col{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-bottom: 20px;
        }
        footer .logo{
        height: 10vh;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: black;
        text-decoration: none;
        font-size: 26px;
        font-weight: bold;
        font-family: Georgia, 'Times New Roman', Times, serif;
        letter-spacing: 5px;
        margin-bottom: 30px;
        }
        footer h4{
        font-size: 14px;
        padding-bottom: 20px;
        }
        footer p{
        font-size: 13px;
        margin: 0 0 8px 0;
        }
        footer a{
        font-size: 13px;
        text-decoration: none;
        color: #212121;
        margin-bottom: 10px;
        }
        footer .follow{
        margin-top: 20px;
        }
        footer .follow .icon a{
        padding-right: 10px;
        color: #505050;
        cursor: pointer;
        }
        footer .install .row img{
        border: 1px solid #088178;
        border-radius: 4px;
        }
        footer .install img{
        margin: 10px 0 15px 0;
        }
        footer .icon a:hover,
        footer a:hover{
        color: #088178;
        }
        footer .copyright{
        width: 100%;
        text-align: center;
        }
        /*end footer*/


    </style>
</head>
<body>
<!--header-->
<section id="header">
      <div class="logo-user">
      <a class="logo" href="#">TEST  </a>

      <div class="user">
      <?php 
      if(!empty($ID)){
      echo "<i class='fa-solid fa-user'></i>".substr($name, 0, 1);
      }else{
      echo "<i class='fa-solid fa-user'></i>"."none";
      }
      ?>
      <div class="infouser">
      <h3>your name : <?php if(!empty($ID)){echo $name;}else{echo "<i class='fa-solid fa-user'></i>"."none";}?> </h3>
      <h3>your email : <?php if(!empty($ID)){echo $email;}else{echo "<i class='fa-solid fa-user'></i>"."none";}?></h3>
      <h4><a href="login.php">Signin <i class="fa-solid fa-right-to-bracket"></i></a></h4>
      <h4><a href="signout.php">Signout <i class="fa-solid fa-door-open"></i></a></h4>
      <h4><a href="cart.php">my addres <i class="fa-solid fa-location-dot"></i></a></h4>
      </div>
      </div>
      </div>

      <div>
      <ul id="navbar">
      <li><a href="index.php">Home</a></li>
      <li><a class="active" href="shop.php">Shop</a></li>
      <li><a href="about.php">about</a></li>
      <li><a href="contact.php">contact</a></li>
      <li id="bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
      <div id="close"><i class="fa-solid fa-xmark"></i></div>

      </ul>
      </div>
      <div class="ibad">
      <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
      <div id="bar"><i class="fa-solid fa-bars"></i></div>
      </div>
</section>
<!--php get main info of product-->
<?php
    include ('config.php');
    $ID = $_GET['id'];
    $update=mysqli_query ($con, "SELECT * FROM prod WHERE id=$ID");
    $data=mysqli_fetch_array($update);
?>
<!--product-info-->
<section id="productinfo" class="section-p1">
    <div class="left-side-img">
    <img src="<?php echo $data['img']?>" width="100%" id="bigimg" alt="<?php echo $data['name']?>">
    </div>

    <div class="right-side-info">
    <h6><?php echo $data['prand']?></h6>
    <h4><?php echo $data['name']?></h4>
    <h2>$<?php echo $data['price']?></h2>
    <form action="2insert_card.php? id=<?php echo $data['id']?>" method="post" enctype="multipart/form-data">
    <select name="selection">
    <option>select size</option>
    <option>XXL</option>
    <option>XL</option>
    <option>small</option>
    <option>meduim</option>
    <option>large</option>
    </select>
    <input type="number" name="quantity" value="1">
    <button type="submit" class="norm" name="add">Add to cart</button>
    </form>
    </div>
</section>
<!--product1-->
<section id="product1" class="section-p1">
      <h2>Some suggestions products</h2>
      <p>Our modern collectoin design</p>
      <div class="product-container">
      <div class="product">
      <img src="img/f4.jpg" alt="cartoon astronaut T-shirts">
      <div class="info">
      <span>adidas</span>
      <h5>cartoon astronaut T-shirts</h5>
      <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      </div>
      <h4>$78</h4>
      </div>
      <div class="shopi">
      <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
      </div>
      <div class="product">
      <img src="img/f4.jpg" alt="cartoon astronaut T-shirts">
      <div class="info">
      <span>adidas</span>
      <h5>cartoon astronaut T-shirts</h5>
      <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      </div>
      <h4>$78</h4>
      </div>
      <div class="shopi">
      <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
      </div>
      <div class="product">
      <img src="img/f4.jpg" alt="cartoon astronaut T-shirts">
      <div class="info">
      <span>adidas</span>
      <h5>cartoon astronaut T-shirts</h5>
      <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      </div>
      <h4>$78</h4>
      </div>
      <div class="shopi">
      <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
      </div>
      <div class="product">
      <img src="img/f4.jpg" alt="cartoon astronaut T-shirts">
      <div class="info">
      <span>adidas</span>
      <h5>cartoon astronaut T-shirts</h5>
      <div class="star">
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      <i class="fas fa-star"></i>
      </div>
      <h4>$78</h4>
      </div>
      <div class="shopi">
      <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
      </div>

      </div>
    </section>
  <!--new update-->
  <section id="newupdates" class="section-p1 section-m1">
  <div class="newtext">
  <h4>sign up for news updates</h4>
  <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
  </div>
  <div class="form">
    <input type="text" placeholder="your email address">
  <button class="norm">Sign Up</button>
  </div>
</section>
<!--footer-->
<footer class="section-p1 section-m1" >
    <div class="col">
      <a class="logo" href="#">TEST</a>
      <h4>contact</h4>
      <p><strong>Address: </strong>elmenofia menof street egypt</p>
      <p><strong>Phone: </strong>+02 01019806684</p>
      <p><strong>Hours: </strong>10:00 - 19:00, sat - wen</p>
    <div class="follow">
      <h4>Follow us</h4>
      <div class="icon">
        <a><i class="fa-brands fa-facebook"></i></a>
        <a><i class="fa-brands fa-instagram"></i></a>
        <a><i class="fa-brands fa-twitter"></i></a>
      </div>
    </div>  
    </div>

    <div class="col">
      <h4>About</h4>
      <a href="#">About us</a>
      <a href="#">Delivery Information</a>
      <a href="#">terms & conditions</a>
      <a href="#">Contact Us</a>
      <a href="#">Help</a>
    </div>
    

  <div class="col">
    <h4>My Account</h4>
    <a href="#">Sign In</a>
    <a href="#">View Cart</a>
    <a href="#">My wishlist</a>
    <a href="#">Help</a>
  </div>

  <div class="col install">
  <h4>install app</h4>
  <p>From App Store or Google Play</p>
  <div class="row">
    <img src="img/app.jpg" alt="">
    <img src="img/play.jpg" alt="">
  </div>
  <p>Secured payment gateways</p>
  <img src="img/pay.png" alt="">
  </div>

  <div class="copyright">
    <p>© 2023, TEST</p>
  </div>
</footer>
<!--main js-->
<script>
    let bar = document.querySelector("#bar");
    let nav = document.querySelector("#navbar");
    let closee = document.querySelector("#close");
    let profile = document.querySelector("#header .logo-user");
    let info = document.querySelector("#header .logo-user .user .infouser");

    bar.addEventListener("click", () => {

    nav.classList.add("active");
    if(info.classList.contains("activeuser")){
    info.classList.remove("activeuser");
    }

    });

    closee.addEventListener("click", () => {
    nav.classList.remove("active");

    });


    profile.addEventListener("click", () => {
    info.classList.toggle("activeuser");

    if(nav.classList.contains("active")){
    nav.classList.remove("active");
    }
    });


</script>
</body>
</html>