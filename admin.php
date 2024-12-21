<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
   <!-- Font Awesome Library -->
   <link rel="stylesheet" href="css/all.min.css" />

<style>
        body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-size: cover;
        background-position: center;
        }
        form{
        width: 420px;
        background-color:#e8e8e8;
        border-radius: 8px;
        box-shadow:  12px 12px 18px #bababa, -12px -12px 18px #ffffff;
        padding: 20px 30px;
        color: #222;
        border: 2px solid transparent; 
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 90%;
        }
        form .foot{
        width: 80%;
        padding: 10px 35px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        }
        form .foot div{
        background: transparent;
        border: none;
        outline: none;
        font-size: 16px;
        color:#222;
        padding: 10px;
        box-shadow: inset -2px -2px 4px #ffffff, inset 2px 2px 4px rgba(0, 0, 0, 0.356);
        cursor: pointer;
        border-radius:10px;
        }
        form .foot button{
        padding: 10px 12px;
        border-radius: 5px;
        border: 2px solid #cce7d0;
        min-width: 80px;
        text-decoration: none;
        color: #088178;
        box-shadow: inset 2px 4px 9px #ffffff, inset 2px 0px 4px rgba(0, 0, 0, 0.356);
        cursor: pointer;
        }

        form .inputs input {
        width: 80%;
        background: transparent;
        border: none;
        outline: none;
        border-radius: 40px;
        font-size: 16px;
        color:#222;
        padding: 20px 45px 20px 20px;
        box-shadow: inset -2px -2px 4px #ffffff, inset 2px 2px 4px rgba(0, 0, 0, 0.356);
        margin:10px 0 ;
        }
        form a{
        padding: 10px 12px;
        min-width: 80px;
        text-decoration: none;
        margin: 0 auto;
        color: #222;

        }

</style>

</head>
<body>
<form action="2insertfromadmin.php" method="post" enctype="multipart/form-data">

        <h1>admin</h1>
        <h2>enter product details</h2>

        <div class="inputs">

        <input type="text" name='prand' placeholder= "prand">
        <input type="text" name='name' placeholder= "name">
        <input type="number" name='price' placeholder= "price">
        </div>
        <div class="foot">

        <div>
        <input type="file" id="file" name='image' style="display:none;">
        <label for="file" style="cursor: pointer;">choose image   <i class="fa-solid fa-image"></i></label>
        </div>

        <button name='upload'>submit</button>
        </div>

        <a href="showstore.php">show all products</a>

</form>
</body>
</html>

