<!DOCTYPE html>

<?php
?>

<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


  <body background="imagenes/tierra.jpg" widht="400">

    <font color="white">
      <form action="boletus2.php" method="post">
        <h1>CAMPO DE BOLETUS</h1>
        <br>
        <br>
        <br>
        
        Elige tamaño del terreno : <input type="text"  class="form-control" name="nLados" >
        <br><br>
        Nacen : <table>
  <tr>
     <td>0</td><td>1</td> <td>2</td> <td>3</td><td>4</td> <td>5</td> <td>6</td><td>7</td> <td>8</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="v0"></td> <td><input type="checkbox" name="v1"></td> <td><input type="checkbox" name="v2"></td> <td> <input type="checkbox" name="v3"></td><td><input type="checkbox" name="v4"></td> <td><input type="checkbox" name="v5"></td> <td> <input type="checkbox" name="v6"></td><td><input type="checkbox" name="v7"></td> <td> <input type="checkbox" name="v8"></td>
  </tr>
</table>
                
                
  <br>
     Mueren : <table>
  <tr>
    <td>0</td> <td>1</td> <td>2</td> <td>3</td><td>4</td> <td>5</td> <td>6</td><td>7</td> <td>8</td>
  </tr>
  <tr>
    <td><input type="checkbox" name="m0"></td> <td><input type="checkbox" name="m1"></td> <td><input type="checkbox" name="m2"></td> <td> <input type="checkbox" name="m3"></td><td><input type="checkbox" name="m4"></td> <td><input type="checkbox" name="m5"></td> <td> <input type="checkbox" name="m6"></td><td><input type="checkbox" name="m7"></td> <td> <input type="checkbox" name="m8"></td>
  </tr>
</table>

<br><br>

 <img src='imagenes/toro.png'>&nbsp&nbsp&nbsp
 <input type="checkbox" name="toro">&nbsp&nbsp&nbsp
 <input class="btn btn-danger" type="submit" value="EMPEZAR" name="crear"/>

 <br><br><br>

<input type="hidden" name="estado" id="estado" type="form-control" value="0">
<input type="hidden" name="delay" type="form-control" value="0">
<input type="hidden" name="dia" type="form-control" >


 </form>


</font>
  </body>
</html>