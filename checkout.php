
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
  <title>cheak out</title>
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
      padding: 0px 40px 0px 40px;
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

  body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-card {
  background-color: #fff;
  padding: 40px;
  margin-top:16vh;
  border-radius: 20px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  width: 320px;
  max-width: 90%;
  text-align: center;
}

h2 {
  text-align: center;
  margin-bottom: 30px;
  color: #333;
  font-size:30px ;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.input-group {
  margin-bottom: 20px;
  width: 100%;
}

label {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
  color: #555;
}

input[type="text"] {
  padding: 10px;
  border-radius: 6px;
  border: 1px solid #ccc;
  width: calc(100% - 20px);
  transition: border-color 0.3s ease;
}

input[type="text"]:focus {
  outline: none;
  border-color: #667eea;
}

button {
  padding: 12px 20px;
  border: none;
  border-radius: 6px;
  background-color: #667eea;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #764ba2;
}

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
      <li id="bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
      <div id="close"><i class="fa-solid fa-xmark"></i></div>
      </ul>
      </div>
      <div class="ibad">
      <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
      <div id="bar"><i class="fa-solid fa-bars"></i></div>
      </div>
</section>

  <div class="login-card">
    <h2>Credit Card Login</h2>
    <form>
    <div class="input-group">
    <label for="password_field" class="input_label">full name</label>
      <input id="password_field" class="input_field" type="text" name="input-name" title="Inpit title" placeholder="Enter your full name" required>
      </div>
      <div class="input-group">
        <label for="card-number">Card Number</label>
        <input type="text" id="card-number" name="card-number" placeholder="0000 0000 0000 0000" required>
      </div>
      <div class="input-group">
        <label for="expiration-date">Expiration Date</label>
        <input type="text" id="expiration-date" name="expiration-date" placeholder="MM/YY" required>
      </div>
      <div class="input-group">
        <label for="cvv">CVV</label>
        <input type="text" id="cvv" name="cvv" maxlength="3" placeholder="CVV" required>
      </div>
      <button type="submit">buy</button>
    </form>
  </div>
</body>
</html>
