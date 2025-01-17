<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card{
    margin: 6%;
    transition: all 0.4s cubic-bezier(0.175%, 0.885, 0, 1);
    background-color: #fff;
    width: 60.25%;
    border-radius: 12px;
    box-shadow: 0px 13px 10px -7px rgba(0, 0, 0, 2);
    float: left;
}

.card:hover{
    box-shadow: 0px 30px 18px -8px rgba(0, 0, 0, 5);
    transform: scale(1.05,1.05);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

</style>
<link rel="stylesheet" href="nav.css">
</head>
<body>
<div id="home">
        <ul id="nav-ul">
           <li > <a href="index.php" class="nav-li">Home</a> </li>
           <li > <a href="services.php" class="nav-li">Services</a> </li>
           <li > <a href="teams.php" class="nav-li">Teams</a> </li>
           <li > <a href="contactus.php" class="nav-li">Contact Us</a> </li>
           <li > <a href="login.php" class="nav-li">Logins</a> </li>
           
           <li class="li-logo">Transportation and logistics</li>
        </ul>
        
    </div>



<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/teams1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Mitesh Pradhan</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>miteshpradha97@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/teams2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Utkarsh</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>utkarshg048@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/teams3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Sourav burman</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>burmansourav08@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
