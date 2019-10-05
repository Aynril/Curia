 <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>CURIA - Endlich mitreden bei politischen Diskussionen</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <!-- sweet alerts -->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>


    <!-- Begin page content -->
    <main role="main" class="container">
    <h1>Hilf uns bei einer Definition</h1>
    </main>

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
 <p>
   Impressum: <br/>
    Domain: Clemens Rau <br/>
    Redaktion: Neele
 </p>

 <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>

 <?php if($_GET['info'] == "success"){ 
      echo '<script>swal("Success", "You successfully managed to safe some data", "success")</script>';
   }
   else {
      echo '<script>swal("Failure", "Saving didn´t work", "failure")</script>';
   }
   ?>
</body>
</html> 