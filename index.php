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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CURIA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="/AddOn_Firefox/web-ext-artifacts/curia-1.0-an+fx.xpi" style="font-size: 1.5em"><button type="button" class="btn btn-warning btn-lg " data_but="btn-xs"> JETZT <i class='fa fa-firefox'></i> ERWEITERUNG LADEN</button></a>
    </form>
  </div>
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
    <input type="begriff" id="begriff" class="form-control" placeholder="Begriff" required>
  </div><br/>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Definition</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Beschreibe das Wort einfach und in deinen eigenene Worten"></textarea>
  </div>

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
            
     
  <div class="form-group">
    <label for="exampleFormControlInput1">Nickname</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nickname"></br>
    <input type="submit" class="btn btn-lg btn-primary" value="Speichern">
 </form>
</div>

</main>
</div>
 <footer class="footer">
      <div class="container">
        <span class="text-muted">&copy; by Jugend hackt 2019, Berlin</span>
      </div>
    </footer>x

 <?php if($_GET['info'] == "success"){ 
      echo '<script>swal("Success", "You successfully managed to safe some data", "success")</script>';
   }
   else if($_GET['info'] == "failure"){
      echo '<script>swal("Failure", "Saving didn´t work", "error")</script>';
   }
   ?>
</body>
</html> 