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
      <title>home</title>
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
      button.transparent-white{
      padding: 11px 18px;
      font-size: 13px;
      font-weight: 600;
      color: #fff;
      background-color: transparent;
      border-radius: 4px;
      cursor: pointer;
      border: 1px solid white;
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
      height: fit-content;
      width: 100%;
      background-size: cover;
      padding: 10vh 20px 0px 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      }
      #landing .left-img{
        width: fit-content;
        height: fit-content;
      }
      #landing .left-img img{
        width: 100%;
        height: 100%;
      }
      #landing .text{
        display: flex;
      flex-direction: column;
      align-items: flex-start;
      }

      #landing .text h4{
      padding-bottom: 15px;
      }
      #landing h1{
      color: #2196f3;
      }
      #landing .text .button1 {
      position: relative;
      padding: 24px 64px;
      border-radius: 50px;
      color: #fafafa;
      text-transform: uppercase;
      font-weight: 900;
      letter-spacing: 2px;
      background-color: #212121;
      border: solid 1px #fafafa4d;
      overflow: hidden;
      cursor: pointer;
      transition: all 0.6s cubic-bezier(0.25, 1, 0.5, 1);
      }

      #landing .text  .button1 .button-text {
      position: relative;
      z-index: 2;
      }

      #landing .text  .button1 .fill-container {
      position: absolute;
      left: 0;
      top: 50%;
      width: 100%;
      padding-bottom: 100%;
      transform: translateY(-50%) rotate(180deg);
      }

      #landing .text  .button1 .fill-container::after {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: #2196f3;
      border-radius: 50px;
      transition: all 0.6s cubic-bezier(0.25, 1, 0.5, 1);
      transform: translateY(-100%);
      }

      #landing .text .button1:hover {
      border-color: #2196f3;
      transform: translateY(-4px);
      }

      #landing .text  .button1:hover .fill-container {
      transform: translateY(-50%) rotate(0);
      }

      #landing .text   .button1:hover .fill-container::after {
      transform: translateY(0);
      }


@media(max-width:1000px){

  #landing .text .button1{
padding: 10px 24px;
}
#landing h1{
font-size: 30px;
}
#landing h4{
font-size: 30px;
}
#landing h2{
font-size: 20px;
}
}
@media(max-width:720px){
  #landing .left-img{
display:none;
      }
      #landing{
        height: 70vh;
        padding:20vh 20px 20px 20px;
        display: block;
        background-image: url("img/girl.png");
        background-position: top 55px left 100px;
        background-size: cover;
        background-repeat: no-repeat;
      }
}
@media(max-width:585px){
  #landing .left-img{
display:none;
      }
      #landing{
        height: 55vh;
        padding:13vh 20px 20px 20px;
        display: block;
        background-image: url("img/girl.png");
        background-position: top 45px left 100px;
        background-size: cover;
        background-repeat: no-repeat;
      }

}

      /*end landig*/

      /*start features*/
      #features{
      display: flex;
      flex-wrap: wrap;
      justify-content:space-around;
      align-items: center;
      position: relative;
      background-color: #f8f8f8;
      }
      #features::after{
      content: '';
      border-style: solid;
      border-width: 100px;
      height: 0;
      width: 0;
      border-color: #f8f8f8 transparent transparent transparent;
      position: absolute;
      transform: translate(-50%);
      left: 50%;
      top: 100%;
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

      /*end features*/

      /*start slide*/
      #slide{
      padding-top: 20vh;
      display: flex;
      align-items: center;
      flex-direction: column;
      overflow: hidden;
      height: 110vh;
      background-color: white;
      margin-top: 0;
      }

      #slide .box{
      top: 20%;
      position: relative;
      width: 200px;
      height: 200px;
      transform-style: preserve-3d;
      animation: animate 30s linear infinite;
      }

      @keyframes animate{
      0%
      {
      transform: perspective(1000PX) rotateY(0deg);
      }
      100%
      {
      transform: perspective(1000PX) rotateY(360deg);
      }

      }
      #slide .box span{
      position: absolute;
      top:0;
      left:0;
      width: 100%;
      height: 100%;
      transform-origin: center;
      transform-style: preserve-3d;
      transform: rotateY(calc(var(--i)* 45deg)) translateZ(400px);
      -webkit-box-reflect: below 0px linear-gradient(transparent,transparent,#0004);
      }
      #slide .box span img{
      position: absolute;
      top:0;
      left:0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: 2s;
      }
      #slide .box span img:hover{
      transform: translateY(-20px) scale(1.1);
      }
      @media(max-width:1025px){
      #slide{
      height: 85vh;
      }
      #slide .box{
      top: 10%;
      width: 160px;
      height: 180px;
      margin-top: 9vh;
      }

      #slide .box span{

      transform: rotateY(calc(var(--i)* 45deg)) translateZ(300px);
      }

      }

      @media(max-width:821px){

      #slide{
      height: 80vh;
      }
      #slide .box{
      top: 10%;
      width: 130px;
      height: 150px;
      margin-top: 9vh;
      }
      #slide .box span{

      transform: rotateY(calc(var(--i)* 45deg)) translateZ(250px);

      }

      }
      @media(max-width:677px){
      #slide{
      height: 75vh;
      }
      #slide .box{
      top: 10%;
      width: 90px;
      height: 100px;
      margin-top: 8vh;
      }
      #slide .box span{

      transform: rotateY(calc(var(--i)* 45deg)) translateZ(180px);

      }
      }
      @media(max-width:477px){
      #slide{
      height: 75vh;
      }
      #slide .box{
      top: 10%;
      width: 80px;
      height: 100px;
      margin-top: 8vh;
      }
      #slide .box span{

      transform: rotateY(calc(var(--i)* 45deg)) translateZ(160px);

      }
      #slide h2{

      font-size: 40px;
      }
      }
      /*end slide*/

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
      width: 100%;
      height: 255px;
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
      margin: 5px 0px;
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

      /*star banner*/
      #banner{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      background-image: url("img/l3.jpg");
      width: 100%;
      height: 40vh;
      background-size: cover;
      background-position: center;
      }
      #banner h4{
      color: #fff;
      font-size: 16px;
      }
      #banner h2{
      color: #fff;
      font-size: 30px;
      padding: 10px 0px;
      }
      #banner h2 span{
      color: red;
      }
      #banner button.norm:hover{
      color:white ;
      background-color: #088178;
      }
      @media(max-width:1025px){

      #banner{
      height: 25vh;
      }
      }

      @media(max-width:821px){
      #banner{
      height: 25vh;
      }
      #banner button.norm{
      padding: 8px 14px;
      font-size: 14px;
      font-weight: 600;
      }
      #banner h2{
      font-size: 25px;
      padding: 6px 0px;
      }

      }
      @media(max-width:477px){

      #banner{
      height: 20vh;
      }
      button.norm{
      padding: 6px 10px;
      font-size: 10px;
      font-weight: 600;
      }
      #banner h2{
      font-size: 19px;
      padding: 6px 0px;
      padding: 0;
      margin: 0;
      }
      #banner h4{
      font-size: 12px;
      letter-spacing: 2px;
      }

      }

      /*end banner*/

      /*star banner2*/
      #banner2{
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      }
      #banner2 .banner-box{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      background-image: url("img/ban13.jpg");
      min-width: 48%;
      height: 50vh;
      background-size: cover;
      background-position: center;
      padding: 30px;
      }

      #banner2 .banner-box h4{
      color: #fff;
      font-size: 20px;
      font-weight: 300;
      }
      #banner2 .banner-box h2{
      color: #fff;
      font-size: 28px;
      font-weight: 800;
      }
      #banner2 .banner-box span{
      color: #fff;
      font-size: 14px;
      font-weight: 500;
      padding-bottom: 15px;
      }
      #banner2 .banner-box:hover .transparent-white{
      background-color: #088178;
      border: 1px solid #088178 ;
      }
      #banner2 .banner-box:hover{
      box-shadow: 10px 10px 54px rgba(70, 62, 221, 0.1);
      }
      #banner2 .banner-box2{
      background-image: url("img/ban5.jpg");
      }
      @media(max-width:821px){
      #banner2 .banner-box{

      min-width: 100%;
      height: 40vh;
      background-size: cover;
      background-position: center;
      padding: 30px;
      }

      }
      @media(max-width:477px){

      #banner2{
      padding:30px 10px 30px 10px;
      }
      #banner2 .banner-box{
      padding: 15px;
      margin-bottom: 10px;
      }
      }
      /*end banner2*/

      /*start banner3*/
      #banner3{
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      padding: 0 80px;
      }
      #banner3 .banner-box{
      display: flex;
      justify-content: center;
      align-items: flex-start;
      flex-direction: column;
      text-align: center;
      background-image: url("img/ban6.jpg");
      min-width: 30%;
      height: 30vh;
      background-size: cover;
      background-position: center;
      padding: 20px;
      margin-bottom: 20px;
      }
      #banner3 h2{
      color: #fff;
      font-size: 22px;
      font-weight: 900;
      }
      #banner3 h3{
      color: #ec544e;
      font-size: 15px;
      font-weight: 800;
      }
      #banner3 .banner-box2{
      background-image: url("img/ban11.jpg");
      }
      #banner3 .banner-box3{
      background-image: url("img/ban12.jpg");
      }
      #banner3 .banner-box:hover{
      box-shadow: 10px 10px 54px #463edd1a;
      }
      @media(max-width:1024px){

      #banner3 .banner-box{

      width: 28%;

      }
      }
      @media(max-width:821px){

      #banner3 .banner-box{

      width: 28%;

      }
      }
      @media(max-width:477px){

      #banner3{
      padding:30px 10px 30px 10px;
      }
      #banner3 .banner-box{
      width: 100%;

      }

      }
      /*end banner3*/


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
      <li><a class="active" href="index.php">Home</a></li>
      <li><a href="shop.php">Shop</a></li>
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
      <!--landing-->
<section id="landing" >
      <div class="text">
      <h4>trade easy</h4>
      <h2>we have super quality</h2>
      <h1>on all products</h1>
      <p>our offers save more up to 70% with coupons</p>
      <a href="shop.php"><button class="button1">
      <span class="button-text">lets shoping !</span>
      <div class="fill-container"></div>
      </button></a>
      </div>
      <div class="left-img">
      <img src="img/girl.png" alt="img">
      </div>
      
</section>
    <!--features-->
<section id="features" class="section-p1">
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
<!--slide product-->
<section id="slide" class="section-p1 section-m1">
  <h2>best seller</h2>
  <p>The Most Ordered Item</p>
  <div class="box">
    <span style="--i:1;"><img src="img/best1.jpg"></span>
    <span style="--i:2;"><img src="img/f6.jpg"></span>
    <span style="--i:3;"><img src="img/best1.jpg"></span>
    <span style="--i:4;"><img src="img/f6.jpg"></span>
    <span style="--i:5;"><img src="img/f5.jpg"></span>
    <span style="--i:6;"><img src="img/best1.jpg"></span>
    <span style="--i:7;"><img src="img/f6.jpg"></span>
    <span style="--i:8;"><img src="img/f5.jpg"></span>
  </div>
</section>
<!--product1-->
<section id="product1" class="section-p1">
      <h2>feature products</h2>
      <p>summer collectoin modern design</p>
      <div class="product-container">
      <?php
      include('config.php');
      $result =mysqli_query ($con,"SELECT * FROM prod");
      while($row =mysqli_fetch_array($result)){
      echo "
      <div class='product'>
      <a href='productofshop.php? id=$row[id]' style='text-decoration: none;''>
      <img src='$row[img]' alt='$row[name]'>
      <div class='info'>
      <span>$row[prand]</span>
      <h5>$row[name]</h5>
      <div class='star'>
      <i class='fas fa-star'></i>
      <i class='fas fa-star'></i>
      <i class='fas fa-star'></i>
      <i class='fas fa-star'></i>
      <i class='fas fa-star'></i>
      </div>
      <h4>$$row[price]</h4>
      </div>
      <div class='shopi'>
      <a href='#'><i class='fa-solid fa-cart-shopping'></i></a>
      </div>
      </a>
      </div>
      ";
      }
      //href='delete.php? id=$row[id]'    this mean that the page i will turn will take the id attribute in GET methode 
      ?>
      </div>
</section>
<!--banner-->
<section id="banner" class="section-m1">
    <h4>repair services</h4>
    <h2>up to<span>70% off</span>All T-shirts & Accessories</h2>
    <button class="norm">Explor more</button>
</section>
<!--new product2-->
<section id="product1" class="section-p1">
      <h2>New products</h2>
      <p>New modern summer collectoin design</p>
      <div class="product-container">
      <div class="product">
      <img src="img/n6.jpg" alt="">
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
      <img src="img/n6.jpg" alt="">
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
      <img src="img/n6.jpg" alt="">
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
      <img src="img/n6.jpg" alt="">
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
      <img src="img/n6.jpg" alt="">
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
      <img src="img/n6.jpg" alt="">
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
      <img src="img/n6.jpg" alt="">
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
      <img src="img/n6.jpg" alt="">
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
<!--banner2-->
<section id="banner2" class="section-p1">
      <div class="banner-box">
      <h4>amaizing deals</h4>
      <h2>by 1 get 1 free</h2>
      <span>the best classic dress is on sale at TEST</span>
      <button class="transparent-white">learn more</button>
      </div>
      <div class="banner-box banner-box2">
      <h4>spring/summer</h4>
      <h2>upcoming soon</h2>
      <span>the best classic dress is on sale at TEST</span>
      <button class="transparent-white">learn more</button>
      </div>
</section>
<!--banner3-->
<section id="banner3" class="section-p1">
    <div class="banner-box">
    <h2>classic collection</h2>
    <h3>winter cillection -50% off</h3>
    </div>
    <div class="banner-box banner-box2">
    <h2>casual collection</h2>
    <h3>spring/summer</h3>
    </div>
    <div class="banner-box banner-box3">
    <h2>T-SHIRTS</h2>
    <h3>trendy outfit</h3>
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
