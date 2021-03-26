
<head>
        <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 
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
<div class="view view-cascade overlay">
     <img class="card-img-top" src="https://ilovefourways.co.za/wp-content/uploads/job-manager-uploads/company_avatar/2018/11/DC-LOGO-turquoise-4-copy.png" alt="Card image cap" style="
    height: 38vh;
    margin-left: 19%;
">
      
      </div>
      
<form class="was-validated" style="margin-left: 1%;
    flex-shrink: 0;
    width: 100%;
    max-width: 97%;">
  <div class="mb-3" style="margin-top:4vh;" >

    <input type="text"  placeholder="  Name  " class="form-control is-valid" id="validationServer01" value="" required>
 
  </div>
  <div class="mb-3" style="margin-top:4vh;">

    <input type="text" class="form-control is-valid"  placeholder=" phone Num  " id="validationServer02"  required>
    </div>
    <div class="mb-3"style="margin-top:4vh;">
    <select class="form-select" required aria-label="select example">
      <option value="">Open this select menu</option>
      <option value="1">inside</option>
      <option value="2">outside</option>

    </select>
    <div class="invalid-feedback">Example invalid select feedback</div>
  </div>
  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Textarea</label>
    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="please enter your order" required></textarea>
   
  </div>
  </form>

  </body>
