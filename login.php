<?php
 
 <!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
<meta name="description" content="DC-Team Portal" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="edu/img/logo.jpg">
<link rel="shortcut icon" href="https://www.restapp.com/wp-content/uploads/2018/07/emenu1-1.png">
<link rel="apple-touch-icon" href="https://login.dc-team.team/upload/1612040500.jpg">
<meta property="og:url" content="https://login.dc-team.team/upload/1612040500.jpg" />
<meta property="og:title" content=" E-Menu " />
<meta property="og:description" content="E-Menu for coffee and other." />
<meta property="og:url" content="https://login.dc-team.team/upload/1612040500.jpg" />
<meta property="og:image" content="https://login.dc-team.team/upload/1612040500.jpg" />
<title>  E-Menu </title>
<meta charset="UTF-8">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
 <!-- <script src="https://www.google.com/recaptcha/api.js?hl=ar" async defer></script> -->
<style>


            body{font-family: 'Quicksand', sans-serif;
                position: relative;
                left:0;
                top:0;
                bottom:0;
             overflow-x: hidden;
            overflow-y: hidden;
                    width:100%;
                min-height: 115vh; 
             
                    overflow-x: hidden;
    overflow-y: hidden;
    margin:0px;
            }
              *, *::after, *::before {  
    margin: 0;
    padding: 0;
   
}

    #pop{position: relative;
                left:0;
                top:0;
    bottom:0;
  width:100%;
min-height: 115vh;                
                background-image:  url(https://images.squaremeal.co.uk/cloud/restaurants/8540/andina-december-2015-1.jpg?w=900&h=600&fit=crop);
                background-repeat: no-repeat;
            background-size:cover;
         background-position: center center;
}



form{font-family: 'Quicksand', sans-serif;
    border-radius: 15px;
        box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
    position: fixed;
    top: 15%;
    margin-left:38%;
        max-height: 354px;
    width: 46%;
    max-width: 314px;
    height: 56%;
    background: linear-gradient(#3cbcc52b, #f5ecec42,#908a8a33);
    min-height: 332px;

}
.input{
          margin-top: 8%;
        margin-bottom: 0%;
    margin-left: 16%;
}
.user{ font-family: 'Cairo', sans-serif;
    margin-top: 10%;
    font-family: 'Quicksand', sans-serif;
    color:white;
    outline: none;
    border: none;
    border-bottom: 1px solid #1f93b1;
    background-color: #f7f9fa00;
    width: 85%;
     font-size: 115%;
}
.user:focus{  
       border-bottom: 1px solid white;
}
  label{ display:block;
    margin-top: 12%;
    color:white;
    font-size: 99%;
        }    
            h1{
                    MARGIN-TOP: 9px;
    margin-bottom: 0;
   
    text-align: center;
    color: #7ac8cc;
            }
            #black-layer{position:absolute;
                background-color:#00000061;
                height: 100%;
                width:100%;
     
            }
            
           .alart{ display: none; 
               font-family: 'Cairo', sans-serif;
    background-color: #f443368a;
    font-size: 10px;
    color: white;
    padding: 5px;
           }
            button{
                    background: linear-gradient(#2697b5 , #2f7375);
    width: 20%;
    height: 10%;
    border-radius: 10px;
    outline: none;
    margin-top: 10%;
    margin-left: 14%;
            }
           @media only screen and (max-width: 600px) {
 .user{    margin-top: 4%;
 }
            form{     max-height: 309px;
    border-radius: 15px;
    position: fixed;
    top: 17%;
    margin-left: 13%;
    width: 75%;
    height: 50%;
    background: linear-gradient(#fff9f908, #ffffff08);

}

}


@media only screen and (max-width:700px)and (orientation : landscape)  {
    .user{    margin-top: 4%;
 }
    form {   min-height: 300px;
    border-radius: 15px;
    position: fixed;
    top: 3%;
    margin-left: 23%;
    width: 75%;
    height: 89%;
    background: linear-gradient(#3cbcc52b, #f5ecec42,#908a8a33);
}}
        </style>
</head>
<body>
<div id="pop">
<div id="black-layer">

<script>
function validateForm() {
  var x = document.forms["formal"]["username"].value;
  if (x == "") {
    alert("الرجاء ادخال اسم المستخدم  ");
    return false;
  }
  var y = document.forms["formal"]["password"].value;
  if (y == "") {
    alert("الرجاء ادخال الرقم السري   ");
    return false;
  }
}

</script>
					<script>
						function io(){
					var x = document.getElementById("user");
			 x.value = x.value.toLowerCase();}
						   
						</script>
<form action="" name="formal" method="post" onsubmit="return validateForm()">
<h1>  Admin Portal </h1>
<div class="input">
<label> username</label>
<input type="text" class="user" id="user" name="username" oninput="io()" onchange="document.activeElement.blur();">
</div>
<div class="input">
<label> password</label>
<input class="user" type="password" name="password">
</div>

<button type="submit" name="login"> login</button>
<span class="alart" style="display:none;" id="filer"> اسم المستخدم او الرقم السري خطأ</span>
<span class="alart" id="bot"> <strong>   ربوت</strong>الرجاء اثبات انك لست</span>
<span class="alart" id="cap"> <strong>  لقد ادخلت بيانات الربوت بشكل خاطئ</strong> </span>
 <!--<div  class="g-recaptcha" style="  
   
    border: 0px;" data-sitekey="6LcwgMsZAAAAADPSjYm8ZxxjdkrdQxyHepjPlvJs
"></div> -->
</form>

	
	
	
    </script>
        <script type="text/javascript">
     window.location="start.php";  
    </script>
   
    </script>
 
	
    <script type="text/javascript">
     document.getElementById("cap").style.display ="inline";
   
    </script>
  
	
    <script type="text/javascript">
     document.getElementById("bot").style.display ="inline";
   
    </script>
 

</div>
</div>
</body>
</html>
