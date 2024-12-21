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
    <title>about us</title>
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

          .section-p1 {
          padding: 40px 80px;
          }

          .section-m1 {
          margin: 40px 0;
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

          body {
          width: 100%;
          background-color: white;
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

          /*landig*/
          #landing{
          background-image: url("img/ban20.jpg");
          height:60vh;
          width: 100%;
          background-position: top 55% right 30%;
          background-size: cover;
          display: flex;
          align-items: center;
          flex-direction: column;
          justify-content: center;
          padding-top: 120px;

          }

          #landing h2{
          padding-bottom: 15px;
          }

          @media(max-width:821px){

          #landing{
          height:50vh;
          padding-top: 110px;
          background-position: top 50% right 30%;
          }
          }
          @media(max-width:477px){

          #landing{
          padding-top: 100px;
          height:40vh;
          background-position: top 50% right 30%;
          }
          #landing h2{
          font-size: 28px;
          }
          #landing p{
          font-size: small;
          margin-top: 0;
          }

          }
          /*end landig*/
          /*start about content*/
          #aboutinfo{
          display: flex;
          width: 100%;
          justify-content: space-between;
          align-items: center;
          margin-bottom: 10vh;
          }
          #aboutinfo img{
          width: 52%;
          height: 100%;
          }
          #aboutinfo div{
          width: 45%;
          }

          #aboutinfo div marquee{
          background-color: #ccc;
          }
          @media(max-width:821px){
          #aboutinfo img{
          width: 50%;
          }
          #aboutinfo div h2{
          font-size: xx-large;
          }

          }
          @media(max-width:477px){
          #aboutinfo{
          flex-direction: column;
          padding: 40px 20px;
          }
          #aboutinfo img{
          width: 100%;
          }
          #aboutinfo div{
          width: 100%;
          margin-top: 20px;
          }

          }
          /*end about content*/ 
          /*start features*/
          #features{
          display: flex;
          flex-wrap: wrap;
          justify-content:space-around;
          align-items: center;
          background-color: #f8f8f8;
          padding: 40px 80px  0 80px;

          }

          #features .fe-box{

          display: flex;
          text-align: center;
          flex-direction: column;
          margin-bottom: 35px;
          padding: 15px;
          }

          #features .fe-box h6{
          display: inline-block;
          padding: 8px;
          line-height: 1px;
          border-radius: 4px;
          color: #088178;
          margin-top: 30px;
          font-size: 20px;
          }

          @media(max-width:580px){

          #features{
          padding:40px 0;
          width: 100%;
          }
          }

          /*css separator*/
          .spikes,.spikes2 {
          position: relative;
          height: 0vh;
          }

          .spikes::after,.spikes2::after {
          content: '';
          position: absolute;
          right: 0;
          left: -12%;
          top: 100%;
          z-index: 10;
          display: block;
          height: 25px;
          background-size: 25px 100%;
          background-image: linear-gradient(135deg, white 25%, transparent 25%), linear-gradient(225deg, white 25%, #f8f8f8 25%);
          background-position: 0 0;
          }
          .spikes2::after{
          background-image: linear-gradient(135deg, #f8f8f8 25%, transparent 25%), linear-gradient(225deg, #f8f8f8 25%, white 25%);
          }
          /*end features*/
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
          margin-top: 15vh;

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
    <li><a href="shop.php">Shop</a></li>
    <li><a class="active"  href="about.php">about</a></li>
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
<!--landing-->
<section id="landing" >
      <h2>About Us</h2>
    
      <p>we are a Lorem ipsum dolor sit amet consectetur.</p>
</section>
<!--about-info-->
<section id="aboutinfo" class="section-p1">
    <img src="img/howweare.jpg" alt="">
    <div>
    <h2>How We Are?</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda iste reiciendis aliquam. Nisi, nulla facilis? Sapiente, dolore, fuga iste illum necessitatibus nam modi delectus illo eos obcaecati vitae animi corporis!</p>

    <marquee>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex laboriosam autem !</marquee>
    </div>
</section>
<section class="spikes"></section>
<!--features-->
<section id="features">
    <div class="fe-box">
    <div><img loading="lazy" class="feature__icon" width="120" height="120" src="https://printify.com/wp-content/themes/printify/assets/svg/higher-profits.svg" alt=""></div>
    <h6>SAVE MONEY</h6>
    </div>
    <div class="fe-box">
    <div><img loading="lazy" class="feature__icon" width="120" height="120" src="https://printify.com/wp-content/themes/printify/assets/svg/robust-scaling.svg" alt=""></div>
    <h6>ROBUST SCALING</h6>
    </div>
    <div class="fe-box">
    <div><img loading="lazy" class="feature__icon" width="120" height="120" src="https://printify.com/wp-content/themes/printify/assets/svg/best-selection.svg" alt=""></div>
    <h6>BEST COLLECTION</h6>
    </div>

    </section>
    <section class="spikes2"></section>
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