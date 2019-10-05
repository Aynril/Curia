 <!DOCTYPE html>
<html>
<head>
<link rel="icon" href="Logo.ico">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>CURIA - Endlich mitreden bei politischen Diskussionen</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <!-- sweet alerts -->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand / Logo-->
  <a class="navbar-brand" href="#">CURIA</a>

  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav> 

    <!-- Begin page content -->
    <main role="main" class="container">
      <div class="jumbotron">
        <br/>
        <img src="https://jugendhackt.org/wp-content/themes/jugend-hackt/library/images/logo.svg" alt="Cinque Terre"> 
        <br/>
            <h1>Hilf uns bei einer Definition</h1>
  
  

<form action="Server_PHP/input.php" method="post"> 
<div class="form-group">
    <label for="begriff">Begriff</label>
    <input type="begriff" id="begriff" class="form-control" required>
  </div><br/>
       <label for="text">Deine Definition:</label>
       <textarea id="text" name="definition" cols="35" rows="4" required></textarea> 

       <div class="form-group">
    <label for="kategorie">Kategorie</label>
    <select class="form-control" name="kategorie" id="kategorie">
            <option>Allgemeines</option>
            <option>Länder</option>	
            <option>Gesetze</option>
            <option>Parlament</option>
            <option>Parteien</option>
            <option>Verfassung</option>
            <option>Ziviles</option>	
    </select>
  </div>
            
     
    <label for="Nicknameinput" id ="begriff">Nickname:</label>

      <input id="Nicknameinput" type="text" name="autor"></br>
    <input type="submit" class="btn btn-lg btn-primary" value="Speichern">
    <p>und auch:<br><a href="/AddOn_Firefox/web-ext-artifacts/curia-1.0-an+fx.xpi" style="font-size: 1.5em"><button type="button" class="btn btn-warning btn-lg " data_but="btn-xs"><i class='fa fa-firefox'></i> JETZT FIREFOX ERWEITERUNG LADEN</button></a></p>
 </form>
</div>

</main>
</div>
 <footer class="footer">
      <div class="container">
        <span class="text-muted">Jugend hackt 2019, Berlin<?php system("git rev-list --count HEAD") ?>-<?php system("git rev-parse --short HEAD") ?></span>
        <span class="text-muted">Impressum &middot; &copy; Domain by Clemens Rau &middot; Redaktion: Neele &middot; Version: <?php system("git rev-list --count HEAD") ?></span>

      </div>
    </footer>

 <?php if($_GET['info'] == "success"){ 
      echo '<script>swal("Success", "You successfully managed to safe some data", "success")</script>';
   }
   else if($_GET['info'] == "failure"){
      echo '<script>swal("Failure", "Saving didn´t work", "error")</script>';
   }
   ?>
</body>
</html> 