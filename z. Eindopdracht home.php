<html>
<head>
<title>Formulier: invoer artikel</title>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="z. Eindopdracht home.php" class="active">Home</a>
  <a href="z. Eindopdracht klanten.php">Klanten</a>
  <a href="z. Eindopdracht producten.php">Producten</a>
  <a href="z. Eindproject factuur.php">Factuur</a>
  <a href="z. Eindopdracht bestellingen.php">Bestellingen</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>



<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
<body>

<H1> Garage nieuwehuis


<img src="logo.png" alt="Foto" style="width:40%;" align="right">
<H3> Welkom bij onze garage nieuwehuis! <br>
        Wij kopen, repareren of verkopen uw auto! <br>
        Die ene BMW die u al zo lang wilt hebben? Wij hebben hem!

</H1>
<img src="auto.png" alt="Foto" style="width:60%;" align="center">