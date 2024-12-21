<?php

  session_start();
  if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
  $ID = $_SESSION['id'];
  $name =$_SESSION['name'];
  $email = $_SESSION['email'];
  $password = $_SESSION['password'];


 //for email address check if there address for currunt user
  if(!empty($ID)){
    include ('config.php');
    $value = mysqli_query($con, "SELECT * FROM address WHERE id=$ID");
    if ($value) {
    $datavalue = mysqli_fetch_array($value);
    }
  }
  } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>cart</title>
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
          .error{
          background-color: red;
          color: #222;
          width: 180px;
          padding: 10px;
          margin-top: 20px;
          font-size: 14px;
          font-weight: 600;
          border-radius: 4px;
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
          /*landig*/
          #landing{
          background-image: url("img/cart1.jpg");
          height:60vh;
          width: 100%;
          background-position: top 65% right 50%;
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
          background-position: top 65% right 50%;
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

          /*start cart*/
          #cart{
          padding: 40px 20px;
          width: 100%;
          }
          #cart table{
          width: 100%;
          border-collapse: collapse;
          table-layout: fixed;
          white-space: nowrap;
          }
          #cart table img{
          width: 70px;
          }
          #cart table thead tr td,
          #cart table tbody tr td{
          text-align:center;
          }
          #cart table td:nth-child(1) a{
          width: 8%;
          cursor: pointer;
          color: #ff2323;
          }
          #cart table td:nth-child(2){
          width: 15%;
          text-align: center;
          }
          #cart table td:nth-child(3){
          width: 25%;
          text-align: center;
          }
          #cart table td:nth-child(4),
          #cart table td:nth-child(6),
          #cart table td:nth-child(7),{
          width: 10%;
          }
          #cart table td:nth-child(5){
          text-align: center;
          width: 22%;
          }
          #cart table td:nth-child(5) input{
          width: 50px;
          padding: 10px 5px 10px 15px;
          }
          #cart table td:nth-child(5) button {
          background-color: #088178;
          padding: 6px;
          margin-left: 3px;
          color: #fff;
          }
          #cart table thead{
          border: 1px solid #ccc;
          border-left: none;
          border-right: none;
          height: 50px;
          }
          #cart table thead td{
          font-weight: 700;
          text-transform: uppercase;
          font-size: 13px;
          }
          #cart table tbody tr td{
          padding-top: 15px;
          }
          #cart table tbody td{
          font-size: medium;
          }
          @media(max-width:750px){
          #cart{
          padding: 40px 5px;
          }
          #cart table thead td{
          font-weight: 600;
          font-size: 11px;
          }
          #cart table tbody td{
          font-size:12px;
          }
          }
          @media(max-width:555px){
          #cart table td:nth-child(5) div form{
          align-items: center;
          display:flex;
          justify-content: center;
          flex-direction: column;
          flex-wrap: wrap;
          }
          #cart table  td:nth-child(5) button {
          padding: 7px 4px;
          margin:3px 0;
          font-size:12px;
          }
          #cart {
          padding: 40px 0;
          }
          #cart table img{
          width: 40px;
          }
          #cart table thead td{
          font-size: 8px;
          }
          #cart table tbody td{
          font-size:10px;
          }
          #cart table td:nth-child(5) input{
          width: 44px;
          padding: 5px 2px 5px 10px;
          }

          }
          /*start cart*/

          /*start checkout*/
          #checkout{
          display: flex;
          justify-content: space-between;
          align-items: center;
          }
          #checkout .coupon{
          width: 40%;
          display: flex;
          flex-direction: column;
          justify-content: center;
          gap:30px;
          }
          #checkout .coupon form{
          display: flex;
          align-items: center;
          justify-content: center;
          flex-wrap: nowrap;
          gap:5px;
          }
          #checkout .coupon h3{
          margin-bottom: 20px;
          }
          #checkout .coupon .add-coupon{
          display: flex;
          flex-direction: column;
          justify-content: center;
          }
          #checkout .coupon div input{
          outline: none;
          border: 1px solid #ccc;
          padding: 10px;
          width: 78%;
          }
          #checkout .coupon div button{
          background-color: #088178;
          color: #fff;
          width: 80px;
          }
          #checkout .checkoutcart{
          width: 50%;
          }
          #checkout .checkoutcart{
          display: flex;
          flex-direction: column;
          padding: 50px 30px;
          border: 1px solid #ccc;
          }
          #checkout .checkoutcart h3{
          margin-bottom: 20px;
          }
          #checkout .checkoutcart button{
          background-color: #088178;
          color: #fff;
          width: 180px;
          padding: 10px;
          margin-top: 20px;
          }
          #checkout .checkoutcart table{
          border-collapse: collapse;
          table-layout: fixed;
          }

          #checkout .checkoutcart table tr td{
          border: 1px solid #ccc;
          padding: 10px;
          }
          @media(max-width:750px){
          #checkout{
          flex-direction: column;
          padding: 40px 10px;
          }
          #checkout .checkoutcart{
          width: 100%;
          }
          #checkout .coupon{
          width: 100%;
          margin-bottom: 50px;
          }
          }
          #checkout .coupon div input{
          width:100%;
          }



          #checkout  .address-form {
          background-color: #fff;
          padding: 10px;
          border: 1px solid #ccc;
          width:100%;
          display: flex;
          flex-direction: column;
          align-items: flex-start;
          }

          #checkout .address-form h2 {
          margin-bottom: 30px;
          text-align: center;
          width: 100%;
          }

          #checkout .address-form .input-group {
          margin-bottom: 15px;
          width: 100%;
          }

          #checkout .address-form  .input-group label {
          display: block;
          margin-bottom: 5px;
          font-weight: bold;
          }

          #checkout .address-form .input-group input[type="text"] {
          width:100%;
          padding: 8px;
          border-radius: 4px;
          border: 1px solid #ccc;
          }

          #checkout  .address-form  button {
          padding: 11px 18px;
          font-size: 13px;
          font-weight: 600;
          color: #222;
          background-color: transparent;
          border-radius: 4px;
          cursor: pointer;
          border: 1px solid #222;
          outline: none;
          transition: 0.2s;
          }

          #checkout  .address-form  button:hover {
          background-color: #088178;
          color: #fff;
          border: 1px solid #088178;
          }
          #checkout  .address-form .input-group select{
          width: 100%;
          padding: 8px;
          border-radius: 4px;
          border: 1px solid #ccc;
          margin-bottom: 20px;
          }
          /*end checkout*/

          /*start newupdates*/

          #newupdates{
          display: flex;
          justify-content: space-between;
          flex-wrap: wrap;
          align-items: center;
          background-image: url("img/b14.png");
          background-repeat: no-repeat;
          background-position: 20% 30%;
          background-color:#212121;

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
        <li><a href="about.php">about</a></li>
        <li><a href="contact.php">contact</a></li>
        <li  id="bag"><a class="active" href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
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
      <h2>My Cart</h2>
    
      <p>cart Lorem ipsum dolor sit amet consectetur.</p>
</section>
<!--cart-->
<section id="cart" >
      <table>
      <thead>
      <tr>
      <td>delete</td>
      <td>image</td>
      <td>product</td>
      <td>price</td>
      <td>Quantity</td>
      <td>size</td>
      <td>total</td>
      </tr>
      </thead>
      <tbody>

      <?php
      if(!empty($ID)){
      include('config.php');
      $result =mysqli_query ($con,"SELECT * FROM cart WHERE id=$ID " );
      $totalofcart=0;
      while($row =mysqli_fetch_array($result)){
      echo "
      <tr>
      <td><a href='2del_card.php? id={$row['id']}&price={$row['price']}&name={$row['name']}'><i class='fa-solid fa-trash'></i></a></td>
      <td><img src='$row[img]' alt='$row[img]'></td>
      <td>$row[name]</td>
      <td>$$row[price]</td>
      <td><div> <form action='2update_quantity_card.php' method='post'>
      <input type='hidden' name='id' value='$row[id]'>
      <input type='hidden' name='price' value='$row[price]'>
      <input type='hidden' name='name' value='$row[name]'>
      <input type='hidden' name='quantityold' value='$row[quantity]'>
      <input type='number' name='quantitynew' value='$row[quantity]'>
      <button type='submit' name='refresh' class='norm'>Refresh</button>
      </form></div></td>
      <td>$row[size]</td>
      <td>$$row[total]</td>
      </tr>
      ";

      $totalofcart+=$row['total'];

      }
      //coupon
      $percent="";
      if (isset($_POST['applay'])) {
      $code =  $_POST['code'];

      $Coupon = mysqli_query($con, "SELECT * FROM Coupon WHERE code='$code'");
      $Couponpercent = mysqli_fetch_array($Coupon);
      if ($Couponpercent) {
      $percent=$Couponpercent['percent'];

      $offer =($totalofcart * ($percent/100)) ;
      $Discount=$totalofcart-$offer;
      }
      }

      }
      ?>

      </tbody>
      </table>
</section>
<!--checkout-->
<section id="checkout" class="section-p1">
      <div class="coupon">
              <div class="add-coupon">
                <h3>Apply Coupon</h3>
                  <form action="" method='post'>
                  <input name="code" type="text" placeholder="Enter your coupon">
                  <button type="submit" name="applay" class="norm" >Applay</button>
                  </form>
              </div>
              <form class="address-form" action="2address_insert.php" method="post">
                        <h3>FILL Your Address</h3>
                        <div class="input-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" value='<?php
                        if(!empty($datavalue) && !empty($datavalue['name'])){//put value of currnt user in form if he sign it already
                        echo $datavalue['name'];
                        }
                        ?>' required>
                        </div>
                        <div class="input-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" value='<?php
                        if(!empty($datavalue) && !empty($datavalue['address'])){
                        echo $datavalue['address'];
                        }
                        ?>' required>
                        </div>
                        <div class="input-group">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" value='<?php
                        if(!empty($datavalue) && !empty($datavalue['city'])){
                        echo $datavalue['city'];
                        }
                        ?>' required>
                        </div>
                        <div class="input-group">
                        <label for="country">Country</label>
                        <select id="country" name="country" required>
                        <option value="egypt" selected>Egypt</option>
                        <option value="usa">USA</option>
                        </select>
                        </div>
                        <button name="add" type="submit">Submit</button>
              </form>
      </div>
      <div class="checkoutcart">
              <h3>Cart Totals</h3>
              <table>
                      <tr>
                      <td>cart Total</td>
                      <td>$ <?php 
                      if(!empty($ID)){//total of card of currunt user
                      echo $totalofcart;
                      }else{
                      echo "0";
                      } ?></td>
                      </tr>
                      <tr>
                      <td><strong>Total</strong></td>
                      <td><strong>$ <?php
                      if(!empty($ID)){ 
                      if(!empty($percent)){//total of card of currunt user after coupon
                      echo $Discount;
                      }else{
                      echo $totalofcart;
                      }
                      }else{
                      echo "0";
                      }
                      ?> </strong></td>
                      </tr>
              </table>
              <?php  //button help user to know if he enter his address and he dont have item in his cart
                      if(!empty($ID)){
                      $items =mysqli_query ($con,"SELECT * FROM cart WHERE id=$ID" );
                      $rows =mysqli_fetch_array($items);
                      if(!empty($rows)){
                      if(!empty($datavalue)){
                        if(!empty($percent)){
                              echo "<a href='checkout.php? coupon={$percent}'><button class='norm'>proceed to checkout</button></a>";
                              }else{
                                    echo "<a href='checkout.php'><button class='norm'>proceed to checkout</button></a>";
                              }
                      }else{
                      echo "<div class='error'>enter your address</div>";
                      }
                      }else{
                      echo "<div class='error'>you dont have item ,go to our shop</div>";
                      }
                      }else{
                      echo "<a href='login.php'><button class='norm'>log in</button></a>";
                      }
              ?>
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