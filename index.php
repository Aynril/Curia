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
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand / Logo-->
  <a class="navbar-brand" href="#">CURIA</a>

  <!-- Toggler Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Admin Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
  </div>
</nav> 

    <!-- Begin page content -->
    <main role="main" class="container">
      <div class="jumbotron">
            <h1>Hilf uns bei einer Definition</h1>
  
  

<form action="Server_PHP/input.php" method="post"> 
        <label for="binput" id ="begriff">Begriff:</label>

      <input id="binput" type="text" name="begriff" required></br>
       <label for="text">Deine Definition:</label>
       <textarea id="text" name="definition" cols="35" rows="4" required></textarea> 

    <label></br>Kategorie:
        <select name="kategorie" required>
            <option>allgemeines</option>
            <option>Länder</option>	
            <option>Gesetze</option>
            <option>Parlament</option>
            <option>Parteien</option>
            <option>Verfassung</option>
            <option>Ziviles</option>	
        </select>
    </label></br>
    <label for="Nicknameinput" id ="begriff">Nickname:</label>

      <input id="Nicknameinput" type="text" name="autor"></br>
    <input type="submit" class="button" value="Speichern">
    <p>und auch:<br><a href="/AddOn_Firefox/web-ext-artifacts/curia-1.0-an+fx.xpi" style="font-size: 1.5em">Firefox Erweiterung herunterladen</a></p>
 </form>
</div>

</main>
</div>
 <footer class="footer">
      <div class="container">
        <span class="text-muted">Impressum &middot; &copy; Domain by Clemens Rau &middot; Redaktion: Neele, Version <?php system("git rev-list --count HEAD") ?>-<?php system("git rev-parse --short HEAD") ?></span>
      </div>
    </footer>

 <?php if($_GET['info'] == "success"){ 
      echo '<script>swal("Success", "You successfully managed to safe some data", "success")</script>';
   }
   else {
      echo '<script>swal("Failure", "Saving didn´t work", "error")</script>';
   }
   ?>
</body>
</html> 