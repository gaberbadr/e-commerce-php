<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>store</title>
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



    h2 {
    font-size: 46px;
    line-height: 54px;
    color: #222;
    }

    h4 {
    font-size: 20px;
    color: #222;
    }



    .section-p1 {
    padding: 40px 80px;
    }

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

    #product1 .product .info h4{
    padding:  7px;
    font-size: 15px;
    font-weight: 700;
    color: #088178;
    }

    .edits{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 80%;
    margin: 0 auto;

    }
    .edits a{
    padding: 10px 12px;
    border-radius: 5px;
    border: 1px solid #cce7d0;
    min-width: 80px;
    text-decoration: none;
    color: #088178;
    }
    .edits a:nth-child(2){
    color:red;
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

    /*start users*/
    #users{
    padding: 40px 20px;
    width: 100%;
    margin: 50px 0px;
    }
    #users table{
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed;
    white-space: nowrap;
    }
    #users table thead tr td,
    #users table tbody tr td{
    text-align:center;
    }
    #users table td:nth-child(1) a{
    width: 10%;
    cursor: pointer;
    color: #ff2323;
    }
    #users table td:nth-child(2){
    width: 10%;
    text-align: center;
    }
    #users table td:nth-child(3){
    width: 20%;
    text-align: center;
    }
    #users table td:nth-child(4),
    #users table td:nth-child(5){
    text-align: center;
    width: 30%;
    }

    #users table thead{
    border: 1px solid #ccc;
    border-left: none;
    border-right: none;
    height: 50px;
    }
    #users table thead td{
    font-weight: 700;
    text-transform: uppercase;
    font-size: 13px;
    }
    #users table tbody tr td{
    padding-top: 15px;
    }
    #users table tbody td{
    font-size: medium;
    }
    @media(max-width:555px){

    #users {
    padding: 40px 20px;
    }
    #users table thead td{
    font-size: 8px;
    }
    #users table tbody td{
    font-size:10px;
    }

    }

</style>
</head>
<body>


<section id="product1" class="section-p1">
    <h2>all products</h2>
    <div class="product-container">

    <?php

include('config.php');

$result =mysqli_query ($con,"SELECT * FROM prod");
while($row =mysqli_fetch_array($result)){
echo "

<div class='product'>
  <img src='$row[img]' alt='$row[name]'>
<div class='info'>
  <span>$row[prand]</span>
  <h5>$row[name]</h5>
  <h4>$row[price]$</h4>
</div>
<div class='edits'>
    <a href='editfromstore.php? id=$row[id]'>edit</a>
    <a href='2deletefromadmin.php? id=$row[id]'>delete</a> 
</div>
</div>

";

}
//href='delete.php? id=$row[id]'    this mean that the page i will turn will take the id attribute in GET methode 
?>
      </div>
</section>

</div>
    <div style="text-align: center; margin-top: 20px;">
        <a href="admin.php" style="padding: 10px 20px; background-color: #088178; color: #fff; text-decoration: none; border-radius: 5px;">add product</a>
    </div>

<section id="users" >
<table>
<thead>
<tr>
  <td>delete</td>
  <td>id</td>
  <td>name</td>
  <td>email</td>
  <td>password</td>
</tr>
</thead>
<tbody>
<?php
   include('config.php');

$result =mysqli_query ($con,"SELECT * FROM users");
while($row =mysqli_fetch_array($result)){
echo "
<tr>
<td><a href='2del_user_usercard.php? id={$row['id']}'><i class='fa-solid fa-trash'></i></a></td>
<td>$row[id]</td>
<td>$row[name]</td>
<td>$row[email]</td>
<td>$row[password]</td>
</tr>
";

}
   ?>

</tbody>

</table>
 </section>

</body>
</html>








