 <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>CURIA - Endlich mitreden bei politischen Diskussionen</title>
<link href="curia.css" rel = stylesheet>
 <!-- sweet alerts -->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>




<h1 style="color:rgb(6, 27, 143);">Hilf uns bei einer Definition</h1>
<div>
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
 <p id="demo"></p>
 <p>
   Impressum: <br/>
    Domain: Clemens Rau <br/>
    Redaktion: Neele
 </p>
</body>
</html> 