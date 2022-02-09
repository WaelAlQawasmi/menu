<!DOCTYPE html>
<html>
  <head>
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
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    />
    <!-- Google Fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    />
    <!-- Bootstrap core CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Material Design Bootstrap -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css"
      rel="stylesheet"
    />
    <!-- JQuery -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    ></script>
    <!-- Bootstrap tooltips -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"
    ></script>
    <!-- Bootstrap core JavaScript -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"
    ></script>
    <!-- MDB core JavaScript -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"
    ></script>
    <style>
      .card-img-top {
        width: auto;
        max-height: 360px;
        margin: auto;
      }
      .card-footer text-muted text-center {
        max-width: 540;
        max-height: 360px;
        margin: auto;
      }
      @import url('https://fonts.googleapis.com/css?family=Source+Code+Pro:200,900');
      :root {
  --text-color: hsla(210, 50%, 85%, 1);
  --shadow-color: hsla(210, 40%, 52%, .4);
  --btn-color: hsl(210, 80%, 42%);
  --bg-color: #141218;
}
button {
  position:relative;
  padding: 10px 20px;  
  border: none;
  background: none;
  cursor: pointer;
  
  font-family: "Source Code Pro";
  font-weight: 900;
  text-transform: uppercase;
  font-size: 30px;  
  color: var(--text-color);
  
  background-color: var(--btn-color);
  box-shadow: var(--shadow-color) 2px 2px 22px;
  border-radius: 4px; 
  z-index: 0;  
  overflow: hidden;   
}

button:focus {
  outline-color: transparent;
  box-shadow: var(--btn-color) 2px 2px 22px;
}

.right::after, button::after {
  content: var(--content);
  display: block;
  position: absolute;
  white-space: nowrap;
  padding: 40px 40px;
  pointer-events:none;
}

button::after{
  font-weight: 200;
  top: -30px;
  left: -20px;
} 

.right, .left {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
}
.right {
  left: 66%;
}
.left {
  right: 66%;
}
.right::after {
  top: -30px;
  left: calc(-66% - 20px);
  
  background-color: var(--bg-color);
  color:transparent;
  transition: transform .4s ease-out;
  transform: translate(0, -90%) rotate(0deg)
}

button:hover .right::after {
  transform: translate(0, -47%) rotate(0deg)
}

button .right:hover::after {
  transform: translate(0, -50%) rotate(-7deg)
}

button .left:hover ~ .right::after {
  transform: translate(0, -50%) rotate(7deg)
}

/* bubbles */
button::before {
  content: '';
  pointer-events: none;
  opacity: .6;
  background:
    radial-gradient(circle at 20% 35%,  transparent 0,  transparent 2px, var(--text-color) 3px, var(--text-color) 4px, transparent 4px),
    radial-gradient(circle at 75% 44%, transparent 0,  transparent 2px, var(--text-color) 3px, var(--text-color) 4px, transparent 4px),
    radial-gradient(circle at 46% 52%, transparent 0, transparent 4px, var(--text-color) 5px, var(--text-color) 6px, transparent 6px);

  width: 100%;
  height: 300%;
  top: 0;
  left: 0;
  position: absolute;
  animation: bubbles 5s linear infinite both;
}
.bg-light {
    background-color: #e0e0e000 !important;
}
@keyframes bubbles {
  from {
    transform: translate();
  }
  to {
    transform: translate(0, -66.666%);
  }
}
.card-footer {
    padding: .75rem 1.25rem;
    background-color: rgb(255 253 253 / 0%);
    border-top: 1px solid rgb(0 0 0 / 0%);
}
    </style>
  </head>
  <body><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DC-Coffee</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">login</a>
        </li>
     <li class="nav-item">
          <a class="nav-link" href="form.php">Order</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- Card Regular -->
    <div class="card card-cascade" id="home">
      <!-- Card image -->
      <div class="view view-cascade overlay">
      <img class="card-img-top" src="https://ilovefourways.co.za/wp-content/uploads/job-manager-uploads/company_avatar/2018/11/DC-LOGO-turquoise-4-copy.png" alt="Card image cap" style="
    height: 38vh;
">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Card content -->
      <div class="card-body card-body-cascade text-center" style="height: 25vh;">
        <!-- Title -->
        
        <!-- Subtitle -->
        <h6 class="font-weight-bold indigo-text py-2">Amman - Jordan</h6>
        <!-- Text -->
        <p class="card-text">
          we have do all the procedures to protect our staff and our diners
        </p>
<div style="margin-bottom: 5vh;">
        <!-- Facebook -->
        <a type="button" class="btn-floating btn-small btn-fb"
          href="https://www.facebook.com/DCTeam0"><i class="fab fa-facebook-f"></i
        ></a>
        <!-- Twitter -->
        <a type="button" class="btn-floating btn-small btn-tw"
          href=https://www.facebook.com/DCTeam0""><i class="fab fa-twitter"></i
        ></a>
        <!-- Google + -->
        <a type="button" class="btn-floating btn-small btn-dribbble"
          href="https://dc-team.team/"><i class="fab fa-dribbble"></i
        ></a>
         <a type="button" class="btn-floating btn-small btn-dribbble"
          href="https://dc-team.team/"><i class="fab fa-whatsapp"></i
        ></a>
         <a type="button" class="btn-floating btn-small btn-dribbble"
          href="https://dc-team.team/"><i class="fab fa-instagram"></i
        ></a>
        </div>
      </div>

      <!-- Card footer -->
      <div class="card-footer text-muted text-center" >
      <a href="#ShowMenu"> 
       <button style="--content: 'Show menu';font-weight: 90;border-radius: 22px; font-size:20px" href="ShowMenu">
<div class="left"></div>
Show menu
<div class="right"></div>
</button></a>

      </div>
    </div>
    <!-- Card Regular -->
    <div style="display: block; margin: auto">
      <details
        style="
          max-width: 720px;
          max-height: 56;
          margin: auto;
          margin-top: 15px;
          margin-bottom: 15px;
        "
      >
        <summary
          style="
            color: azure;
            font-weight: bold;
            font-size: 40px;
            background-image: url(https://gourmetwithblakely.com/wp-content/uploads/2020/07/DSF8138.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            padding: 50px 15px 50px 15px;
            text-align: center;
            border-radius: 15px;
          " id="Desserts"
        >
          Desserts
        </summary>
     <li style="display: inline;">
        
         <ul  style="border-bottom: crimson solid 2px ;"> Angel food cake <pre >10 JD</pre>   egg whites, cake flour, and sugar </ul>
         <ul style="border-bottom: crimson solid 2px ;">Orange Cake <pre >2.5 JD</pre>both the zest and juice of fresh oranges </ul>
        </li>
      </details>
    </div>
    <div id="ShowMenu" style="display: block; margin: auto">
      <details
        style="
          max-width: 720px;
          max-height: 56;
          margin: auto;
          margin-top: 15px;
          margin-bottom: 15px;
        "
        
      >
        <summary
          style="
            color: azure;
            font-weight: bold;
            font-size: 40px;
            background-image: url(https://tmbidigitalassetsazure.blob.core.windows.net/rms3-prod/attachments/37/1200x1200/Savory-Pork-Salad_EXPS_CF2BZ19_35244_E12_13_2b.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            padding: 50px 15px 50px 15px;
            text-align: center;
             border-radius: 15px;
          "
          id="Salads"
        >
          Salads
        </summary>
      
         <ul style=" margin-top: 5px; border-bottom: crimson solid 2px ;"> Crunchy noodle salad <pre >1.5 JD</pre> </ul>
         <ul  style="border-bottom: crimson solid 2px ;">Jello salad <pre >8 JD</pre> vinegar, sugar, soy sauce and oils</ul>
         <ul  style="border-bottom: crimson solid 2px ;">  Chef salad<pre >12 JD</pre></ul>
   
      </details>
    </div>
    <div style="display: block; margin: auto">
      <details
        style="
          max-width: 720px;
          max-height: 56;
          margin: auto;
          margin-top: 15px;
          margin-bottom: 15px;
        "
      >
        <summary
          style="
            color: azure;
            font-weight: bold;
            font-size: 40px;
            background-image: url(https://cdn-a.william-reed.com/var/wrbm_gb_food_pharma/storage/images/publications/food-beverage-nutrition/beveragedaily.com/article/2020/03/31/beverage-webinar-today-what-drinks-do-consumers-want/10866454-1-eng-GB/Beverage-webinar-today-What-drinks-do-consumers-want.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            padding: 50px 15px 50px 15px;
            text-align: center;
             border-radius: 15px;
          "
        >
          Drinks
        </summary>
  
         <ul style=" margin-top: 5px; border-bottom: crimson solid 2px ;">Chocolate Milk <pre >2 JD</pre></ul>
         <ul  style="border-bottom: crimson solid 2px ;">Orange Juice <pre >3 JD</pre></ul>
         <ul style="border-bottom: crimson solid 2px ;"> coca cola <pre >1 JD</pre></ul>

      </details>
    </div>
    <!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://dc-team.team/">dc-team.team</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  </body>
</html>
