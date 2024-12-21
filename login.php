<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

   <!-- Font Awesome Library -->
   <link rel="stylesheet" href="css/all.min.css" />
<style>
            *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }
            :root{
            --main-color:black;
            --main-btncolor:white;
            --main-darkmode:white;
            --main-backgroundform:#e8e8e8;
            --main-shadow: 12px 12px 18px #bababa, -12px -12px 18px #ffffff;
            }

            body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-size: cover;
            background-position: center;
            }

            /*darkmode//////////////////////////////////////////////*/
            .dark-mode{
            float: right;
            }
            .clearfix {
            clear: both;
            }
            .dark-mode .container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5px;
            width: 70px;
            height: 20px;
            background-color: #73C0FC;
            position: relative;
            border-radius: 20px;
            cursor: pointer;
            transition-duration: .2s;
            }
            .dark-mode .container:hover{
            transition-duration: .2s;
            transform: scale(1.3);
            }
            .dark-mode .container .buttun{
            position: absolute;
            height: 30px;
            width: 30px;
            left: -2%;
            border-radius: 50%;
            transition-duration: .2s;
            background: white;
            padding: 5px;
            z-index: 5;
            }
            .dark-mode .container .left-sun{
            margin-right: 5px;
            }
            .dark-mode .container .right-moon{
            margin-left: 5px;
            }
            .dark-mode .container .left-sun i{
            color: rgb(243, 243, 6);
            font-size: medium;
            position: relative;
            }
            .dark-mode .container .right-moon i{
            color: blue;
            font-size: medium;
            position: relative;
            }
            /*this class toggle to the buttun by js to turn the ather way*/
            /*when this class toggle the js change the background-color of body*/
            .dark-mode .container .buttun.active{
            left: 59%;
            }
            /* make the body take his backgroud from var(--main-darkmode)*/
            body{
            background-color: var(--main-darkmode);
            transition-duration: .2s;
            }

            /*darkmode//////////////////////////////////////////////*/
            /*form//////////////////////////////////////////////*/
            .wrapper{
            width: 420px;
            background-color: var(--main-backgroundform);
            border-radius: 8px;
            box-shadow: var(--main-shadow);
            padding: 30px 40px;
            color: var(--main-color);
            border: 2px solid transparent;

            }
            .gredient-active{
            background: linear-gradient(#212121, #212121) padding-box,
            linear-gradient(145deg, transparent 35%,#e81cff, #40c9ff) border-box;
            }

            @media (max-width: 768px) {
            .wrapper {
            width: 310px;
            padding: 18px 25px;
            }
            }
            .wrapper h1 {
            text-shadow: -2px 1px 3px #ffffff, 2px 2px 3px #bababa;
            font-size: 36px; 
            text-align: center;
            color:var(--main-color);
            cursor: default;
            }
            .wrapper .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            margin: 30px 0;
            }
            .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border-radius: 40px;
            font-size: 16px;
            color:var(--main-color);
            padding: 20px 45px 20px 20px;
            box-shadow: inset -2px -2px 4px #ffffff, inset 2px 2px 4px rgba(0, 0, 0, 0.356);
            }
            .input-box input::placeholder {
            color:var(--main-color);
            }
            .input-box .show-hide :nth-child(2){
            display: none;
            }
            .erroruser,
            .errorpass{
            color: red;
            font-size: small;
            margin-left: 15px;
            border-bottom: 2px solid #c46363;
            margin-bottom: 30px;
            transition: all 0.5s;
            display: none;
            padding-bottom: 3px;
            }

            .input-box i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%) ;
            font-size: 20px;
            color: var(--main-color);
            }
            .wrapper .remember-forgot {
            display: flex;
            justify-content: space-between;
            font-size: 14.5px;
            margin: -15px 0 15px;
            }
            .remember-forgot label input {
            accent-color:var(--main-color);
            margin-right: 3px;
            }
            .remember-forgot label{
            color: var(--main-color);
            cursor: pointer;
            }
            .remember-forgot a { 
            color:var(--main-color);
            text-decoration: none;
            }
            .remember-forgot a:hover {
            text-decoration: underline;
            }
            .wrapper .btn {
            width: 100%;
            height: 45px;
            background-color:var(--main-btncolor);
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1); 
            cursor: pointer;
            font-size: 16px;
            color: var(--main-color);
            font-weight: 600;
            }
            .btn:hover {
            transform: translate(3px);
            }

            .btn:active {
            transform: translateY(-1px);
            box-shadow: inset 0px -3px 4px #ffffff, inset 2px 2px 4px rgba(0, 0, 0, 0.356);
            }
            .wrapper .register-link {
            font-size: 14.5px;
            text-align: center;
            margin: 20px 0px 15px;
            color: var(--main-color);
            }
            .register-link p a {
            color: var(--main-color);
            text-decoration: none;
            font-weight: 600;
            }
            .register-link p a:hover {
            text-decoration: underline;
            }

</style>
</head>
<body>
<!-- div contain the form -->
<div class="wrapper">
<!--div contain the dark mode-->
<div class="dark-mode">
        <div class="container">
        <div class="buttun"></div>
        <div class="right-moon">
        <i class="fa-solid fa-moon"></i>
        </div>
        <div class="left-sun">
        <i class="fa-regular fa-sun fa-spin"></i>
        </div>
        </div>
</div>

<div class="clearfix"></div>

<form action="2login_admin_user.php" method="post">
        <!--start form info-->
        <h1>Login</h1>
        <div class="input-box">
        <input type="text" name="email" id="email" placeholder= "phone or email" >
        <i class="fa-solid fa-user"></i>
        </div> 
        <div class="erroruser"></div> 

        <div class="input-box">
        <input type="password" name="Password" id="pass" placeholder="Password" >
        <div class="show-hide">
        <i id="open-eye" class="fa-solid fa-eye"></i>
        <i id="close-eye" class="fa-solid fa-eye-slash"></i>
        </div>
        </div>
        <div class="errorpass"></div>
        <div class="remember-forgot">
        <label><input id="rememberMe"  value="remember" type="checkbox" > stay sign in</label>

        </div>
        <button type="submit" name="login" id="subm" class="btn">Login</button>
        <div class="register-link">
        <p>Don't have an account? <a href="register.php">Register</a></p>
        </div>
</form>
</div>

 <script>

    let darkmode=document.querySelector(".dark-mode");
    let darkmodebtn=document.querySelector(".dark-mode .container .buttun");
    let darkmodecont=document.querySelector(".dark-mode .container");
    let wrapper=document.querySelector(".wrapper");

    //check if  thir is dark-mode in localstorge
if(window.localStorage.getItem("dark-mode")!==null){
    //if sun
    if(window.localStorage.getItem("dark-mode")==="sun"){
        document.querySelector(".dark-mode .container .left-sun i").classList.add("fa-spin");
        document.documentElement.style.setProperty('--main-darkmode', "white");
        darkmodecont.style.setProperty("background-color","#73C0FC");
        darkmodebtn.classList.remove("active");
        document.documentElement.style.setProperty('--main-color', "black");
        document.documentElement.style.setProperty('--main-backgroundform', "#e8e8e8");
        document.documentElement.style.setProperty('--main-btncolor', "white");  
        document.documentElement.style.setProperty('--main-shadow', "12px 12px 18px #bababa, -12px -12px 18px #ffffff");
        wrapper.classList.remove("gredient-active");
        //if 
    }else{ //moon
        document.querySelector(".dark-mode .container .left-sun i").classList.remove("fa-spin");
        document.documentElement.style.setProperty('--main-darkmode', "black");
        darkmodecont.style.setProperty("background-color","#183153");
        darkmodebtn.classList.add("active");
        document.documentElement.style.setProperty('--main-color', "white");
        document.documentElement.style.setProperty('--main-backgroundform', "#313131");
        document.documentElement.style.setProperty('--main-btncolor', "#282626");  
        document.documentElement.style.setProperty('--main-shadow', "none");
        wrapper.classList.add("gredient-active")
    }
}
//dark-mode
darkmode.onclick = function () { 

        //add class active to buttun that make the buttun turn to the right way towords the dark mode
        darkmodebtn.classList.toggle("active");

                //sun
                //if the buttun  not contains class active that mean the buttun in the left and the case is sun mode 
        if (!(darkmodebtn.classList.contains("active"))) { 
            //set --main-darkmode = white
                document.documentElement.style.setProperty('--main-darkmode', "white");
            //save in the localstorge = sun
                window.localStorage.setItem("dark-mode" ,"sun");
                        //make the sun rotate in sun mod
                        document.querySelector(".dark-mode .container .left-sun i").classList.add("fa-spin");

            //edit the form into sun mode
                darkmodecont.style.setProperty("background-color","#73C0FC");
                document.documentElement.style.setProperty('--main-color', "black");
                document.documentElement.style.setProperty('--main-backgroundform', "#e8e8e8");
                document.documentElement.style.setProperty('--main-btncolor', "white");  
                document.documentElement.style.setProperty('--main-shadow', "12px 12px 18px #bababa, -12px -12px 18px #ffffff");
                wrapper.classList.remove("gredient-active");
        }

            //dark
            //if the buttun  contains class active that mean the buttun in the right and the case is dark mode 
        if (darkmodebtn.classList.contains("active")) {   
                    //set --main-darkmode = black
                    document.documentElement.style.setProperty('--main-darkmode', "black");
                    //save in the localstorge = moon
                    window.localStorage.setItem("dark-mode" ,"moon");
                            //make the sun rotate in sun mod
                            document.querySelector(".dark-mode .container .left-sun i").classList.remove("fa-spin");

                    //edit the form into dark mode
                    darkmodecont.style.setProperty("background-color","#183153");
                    document.documentElement.style.setProperty('--main-color', "white");
                    document.documentElement.style.setProperty('--main-backgroundform', "#313131");
                    document.documentElement.style.setProperty('--main-btncolor', "#282626");  
                    document.documentElement.style.setProperty('--main-shadow', "none");
                    wrapper.classList.add("gredient-active");  
        }
}



//hide and show passowrd
            let openeye=document.getElementById("open-eye");
            let closeeye=document.getElementById("close-eye");
            let eye=document.querySelector(".show-hide");
            let pass=document.getElementById("pass");

eye.onclick=function(){
        if(pass.type=="password"){
        pass.type="text";
        openeye.style.setProperty("display","none");
        closeeye.style.setProperty("display","inline-block");
        }else{
        pass.type="password";
        openeye.style.setProperty("display","inline-block");
        closeeye.style.setProperty("display","none");
        }

}



//remember me//////////////////

    let rmCheck = document.getElementById("rememberMe");
    pass = document.getElementById ("pass");
    let emailInput = document.getElementById("email");

//if thir is checkbox in localstorge and checkbox != ""
if (window.localStorage.getItem("checkbox") && window.localStorage.getItem("checkbox")!=="") {
        //active the checkbox
        rmCheck.setAttribute ("checked", "checked");
        //get vale of input from local storge
        pass.value = window.localStorage.getItem("password");
        emailInput.value = window.localStorage.getItem("email"); 

}else{//this mean that checkbox not active or checkbox = ""

        ////turn off the checkbox
        rmCheck.removeAttribute("checked");
        //remove value of of inputs 
        pass.value="";
        emailInput.value="";
}

function RememberMe() {
    if (rmCheck.checked && emailInput.value !=="" && pass.value !==""){
        window.localStorage.setItem("email", emailInput.value);
        window.localStorage.setItem("password", pass.value);
        window.localStorage.setItem("checkbox", rmCheck.value);
    } else { 
    window.localStorage.setItem("email" , "");
    window.localStorage.setItem("password" , "");
    window.localStorage.setItem("checkbox" , "");
    }
}

let subm=document.getElementById("subm");
subm.onclick=function(){
RememberMe();
}

rmCheck.onclick=function(){
RememberMe();
}

    //validate form//////////////////////////

let erroruser=document.querySelector(".erroruser");
let errorpass=document.querySelector(".errorpass");


document.forms[0].onsubmit=function(e){
        let user=false;
        let passowrd=false;
    //email
    if(emailInput.value!=="" && emailInput.value.length<=30){
        let pattarnphoneforuserregex=/(012|010|011|015)\d{8}$/;
        let pattarnemailforuserregex=  /^[a-zA-Z0-9]{4,}@[a-zA-Z]{3,6}.(com|net|org)$/ig;
            if(pattarnphoneforuserregex.test(emailInput.value) || pattarnemailforuserregex.test(emailInput.value)){
                    emailInput.style.setProperty("border","none");
                    erroruser.style.setProperty("display","none");
            user=true;
            }else{
                    erroruser.innerHTML="your email or phone might be uncorrect please entar correctly again .";
                    emailInput.style.setProperty("border","1px solid red");
                    erroruser.style.setProperty("display","block");
                    user=false;
    }
    }else{
            erroruser.innerHTML="enter your email or phone .";
            emailInput.style.setProperty("border","1px solid red");
            erroruser.style.setProperty("display","block");
            user=false;
    }

    //password
    if(pass.value!=="" && pass.value.length>=4 && pass.value.length<=16 ){
            pattarnpasswordforuserregex=/^[a-zA-Z0-9]+$/;
            if(pattarnpasswordforuserregex.test(pass.value)){
                    errorpass.style.setProperty("display","none");
                    passowrd=true;
                    pass.style.setProperty("border","none");
            }else{
                    errorpass.innerHTML="your password must contain letter and number . (not special characters) .";
                    pass.style.setProperty("border","1px solid red");
                    errorpass.style.setProperty("display","block");
                    passowrd=false;
            }
    }else{
            errorpass.innerHTML="enter your password , (your password must be between 4 and 16 letter) .";
            pass.style.setProperty("border","1px solid red");
            errorpass.style.setProperty("display","block");
            passowrd=false;
    }


            if(user===false || passowrd===false){
            e.preventDefault();
            }

};


 </script>
</body>
</html>

