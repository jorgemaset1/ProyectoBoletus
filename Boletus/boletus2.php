<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (isset($_POST['nLados'])) {
  session_unset();
  $_SESSION['nLados'] = $_POST['nLados'];
}
if (isset($_POST['estado'])) {
  $_SESSION['estado'] = $_POST['estado'];
}
$nLados = $_SESSION['nLados'];

function numeroVecinos($i, $j)
{
  $nLados = $_SESSION['nLados'];
  $cont = 0;
    if (!isset($_SESSION["toro"]) && isset($_SESSION['casillas'])){
      if (isset($_SESSION['casillas'][($i+1).$j]) && strcmp($_SESSION['casillas'][($i+1).$j],"<img width='32' height='32' src='imagenes/boletus.png'>") == 0) {
        $cont++;
      }
      if (isset($_SESSION['casillas'][($i-1).$j]) && strcmp($_SESSION['casillas'][($i-1).$j],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_SESSION['casillas'][$i.($j+1)]) && strcmp($_SESSION['casillas'][$i.($j+1)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_SESSION['casillas'][$i.($j-1)]) && strcmp($_SESSION['casillas'][$i.($j-1)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_SESSION['casillas'][($i+1).($j+1)]) && strcmp($_SESSION['casillas'][($i+1).($j+1)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_SESSION['casillas'][($i-1).($j-1)]) && strcmp($_SESSION['casillas'][($i-1).($j-1)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_SESSION['casillas'][($i+1).($j-1)]) && strcmp($_SESSION['casillas'][($i+1).($j-1)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_SESSION['casillas'][($i-1).($j+1)]) && strcmp($_SESSION['casillas'][($i-1).($j+1)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
    }
    else if (isset($_SESSION["toro"]) && isset($_SESSION['casillas'])) {
      
      if (isset($_SESSION['casillas'][(($i+1+$nLados)%$nLados).$j]) && strcmp($_SESSION['casillas'][(($i+1+$nLados)%$nLados).$j],"<img width='32' height='32' src='imagenes/boletus.png'>") == 0) {
        $cont++;
      }
      if (isset($_SESSION['casillas'][(($i-1+$nLados)%$nLados).$j]) && strcmp($_SESSION['casillas'][(($i-1+$nLados)%$nLados).$j],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_SESSION['casillas'][$i.(($j+1+$nLados)%$nLados)]) && strcmp($_SESSION['casillas'][$i.(($j+1+$nLados)%$nLados)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_SESSION['casillas'][$i.(($j-1+$nLados)%$nLados)]) && strcmp($_SESSION['casillas'][$i.(($j-1+$nLados)%$nLados)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_SESSION['casillas'][(($i+1+$nLados)%$nLados).(($j+1+$nLados)%$nLados)]) && strcmp($_SESSION['casillas'][(($i+1+$nLados)%$nLados).(($j+1+$nLados)%$nLados)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_SESSION['casillas'][(($i-1+$nLados)%$nLados).(($j-1+$nLados)%$nLados)]) && strcmp($_SESSION['casillas'][(($i-1+$nLados)%$nLados).(($j-1+$nLados)%$nLados)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_SESSION['casillas'][(($i+1+$nLados)%$nLados).(($j-1+$nLados)%$nLados)]) && strcmp($_SESSION['casillas'][(($i+1+$nLados)%$nLados).(($j-1+$nLados)%$nLados)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_SESSION['casillas'][(($i-1+$nLados)%$nLados).(($j+1+$nLados)%$nLados)]) && strcmp($_SESSION['casillas'][(($i-1+$nLados)%$nLados).(($j+1+$nLados)%$nLados)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
    }
    else if (!isset($_POST["toro"])){
      if (isset($_POST[($i+1).$j]) && strcmp($_POST[($i+1).$j],"<img width='32' height='32' src='imagenes/boletus.png'>") == 0) {
        $cont++;
      }
      if (isset($_POST[($i-1).$j]) && strcmp($_POST[($i-1).$j],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_POST[$i.($j+1)]) && strcmp($_POST[$i.($j+1)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_POST[$i.($j-1)]) && strcmp($_POST[$i.($j-1)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_POST[($i+1).($j+1)]) && strcmp($_POST[($i+1).($j+1)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_POST[($i-1).($j-1)]) && strcmp($_POST[($i-1).($j-1)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_POST[($i+1).($j-1)]) && strcmp($_POST[($i+1).($j-1)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_POST[($i-1).($j+1)]) && strcmp($_POST[($i-1).($j+1)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
    }
    else if (isset($_POST["toro"])){
      if (isset($_POST[(($i+1+$nLados)%$nLados).$j]) && strcmp($_POST[(($i+1+$nLados)%$nLados).$j],"<img width='32' height='32' src='imagenes/boletus.png'>") == 0) {
        $cont++;
      }
      if (isset($_POST[(($i-1+$nLados)%$nLados).$j]) && strcmp($_POST[(($i-1+$nLados)%$nLados).$j],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_POST[$i.(($j+1+$nLados)%$nLados)]) && strcmp($_POST[$i.(($j+1+$nLados)%$nLados)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_POST[$i.(($j-1+$nLados)%$nLados)]) && strcmp($_POST[$i.(($j-1+$nLados)%$nLados)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_POST[(($i+1+$nLados)%$nLados).(($j+1+$nLados)%$nLados)]) && strcmp($_POST[(($i+1+$nLados)%$nLados).(($j+1+$nLados)%$nLados)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_POST[(($i-1+$nLados)%$nLados).(($j-1+$nLados)%$nLados)]) && strcmp($_POST[(($i-1+$nLados)%$nLados).(($j-1+$nLados)%$nLados)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_POST[(($i+1+$nLados)%$nLados).(($j-1+$nLados)%$nLados)]) && strcmp($_POST[(($i+1+$nLados)%$nLados).(($j-1+$nLados)%$nLados)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
      if (isset($_POST[(($i-1+$nLados)%$nLados).(($j+1+$nLados)%$nLados)]) && strcmp($_POST[(($i-1+$nLados)%$nLados).(($j+1+$nLados)%$nLados)],"<img width='32' height='32' src='imagenes/boletus.png'>")==0) {
        $cont++;
      }
    }


      
  return $cont;
    
}

?>
<head>
  <title>Boletus</title>
</head>
<script type="text/javascript">
  function crearBoletus (x,y)
  {
    document.getElementById("coordenadaX").value = x;
    document.getElementById("coordenadaY").value = y;
    document.getElementById("estado").value = "0";
    document.getElementById("formulario").submit();
    
  }
  function dia ()
  {
    document.getElementById("dia").value = "si";
    document.getElementById("formulario").submit();
    
  }
  function empezarBucle ()
  {
    document.getElementById("estado").value = "1";
    document.getElementById("dia").value = "si";
    document.getElementById("formulario").submit();
    
  }
  function terminarBucle ()
  {
    document.getElementById("estado").value = "0";
    document.getElementById("dia").value = "si";
    document.getElementById("formulario").submit();
    
  }
</script>
<body> 
  <form action="boletus2.php" method="post" id="formulario">
  <input type="hidden" id="coordenadaX" name="coordenadaX"/>
  <input type="hidden"  id="coordenadaY" name="coordenadaY"/>
  <input type="hidden"  id="dia" name="dia" value="of" />
  <input type="hidden" id="estado" name="estado" type="form-control" value=<?php echo "'".$_SESSION['estado']."'"?>/>

  <?php if (isset($_POST['EMPEZAR']))
   $_SESSION["toro"] = $_POST['toro'];
   
   ?> 

  <?php
  if ($_SESSION['estado'] == 1)
  {
    echo ("<meta http-equiv='refresh' content='".$_SESSION['delay']."'> ");
  }

  ?>

  <?php if (isset($_POST['toro']))
   $_SESSION["toro"] = $_POST['toro'];
   echo "<input type='hidden'  id='toro' name='toro'/>";
   ?> 
  <table border="1px" width="500px" height="500px">
  <?php
  if (isset($_POST["dia"])){
    $_SESSION["dia"] = $_POST["dia"];
  }
  
  for ($i=0; $i < 9; $i++) { 
    if(isset($_POST["v".$i]))
    {
      $_SESSION["v".$i] = $_POST["v".$i];
      echo '<input type="hidden"  id="v'.$i.'" name="v'.$i.'"/>';
    }
    if(isset($_POST["m".$i]))
    {
      $_SESSION["m".$i] = $_POST["m".$i];
      echo '<input type="hidden"  id="m'.$i.'" name="m'.$i.'"/>';
    }
  }
  
  
  //var_export($_POST);
  //var_export($_SESSION);

  for ($i=0; $i < $nLados; $i++) { 
    echo "<tr>";
    for ($j=0; $j < $nLados; $j++) { 
      if (isset($_SESSION["casillas"]) && strcmp($_SESSION["dia"],"si")== 0){
        if (isset($_SESSION['v'.numeroVecinos($i, $j)]))
        {
          $casilla = "<img width='32' height='32' src='imagenes/boletus.png'>";
        }
        else if (isset($_SESSION['m'.numeroVecinos($i, $j)])){
          $casilla = "<img width='32' height='32' src='imagenes/blanco.png'>";
        }
        else{
          $casilla = $_SESSION["casillas"][$i.$j];
        }
      }
      else if (strcmp($_POST["dia"],"si")== 0){
        if (isset($_POST['v'.numeroVecinos($i, $j)]))
        {
          $casilla = "<img width='32' height='32' src='imagenes/boletus.png'>";
        }
        else if (isset($_POST['m'.numeroVecinos($i, $j)])){
          $casilla = "<img width='32' height='32' src='imagenes/blanco.png'>";
        }
        else{
          $casilla = $_POST[$i.$j];
        }
      }
      else if (isset($_POST[$i.$j])){
        if ($_POST['coordenadaX']==$i && $_POST['coordenadaY']==$j)
        {
          if (strcmp($_POST[$i.$j],"<img width='32' height='32' src='imagenes/boletus.png'>")!= 0){
            $_POST[$i.$j] = "<img width='32' height='32' src='imagenes/boletus.png'>";
            $casilla = "<img width='32' height='32' src='imagenes/boletus.png'>";
          }
          else{
            $casilla = "<img width='32' height='32' src='imagenes/blanco.png'>";
          }
        }
        else{
          if (strcmp($_POST[$i.$j],"<img width='32' height='32' src='imagenes/boletus.png'>") == 0){
            $casilla = $_POST[$i.$j];
          }
          else{
            $casilla = "<img width='32' height='32' src='imagenes/blanco.png'>";
          }
        }
      }
      else
      {
        $casilla = "<img width='32' height='32' src='imagenes/blanco.png'>";
      }
      
      $casillas[$i.$j] = $casilla;
      
      

      echo "<td align='center' onclick='crearBoletus(".$i.",".$j.")'>".$casilla."</td>";
      echo '<input type="hidden" value="'.$casilla.'" name="'.$i.$j.'"/>';

    }
    echo "</tr>";
  }
  $_SESSION["casillas"] = $casillas;
  ?>
  </table> 
    <table border="1px" width="500px" height="50px">
    <tr>
      <td onclick="empezarBucle()" align="center">
        start
      </td>
      <td onclick="terminarBucle()" align="center">
        terminar
      </td>
      <td align="center">
        <label>delay</label>
        <input type="number" name="delay" type="form-control" value=
        <?php 
        if (isset($_POST['delay'])) {
          $_SESSION['delay'] = $_POST['delay'];
        }
        echo "'".$_SESSION['delay']."'";

        ?>>
      </td>
      <td onclick="dia()" align="center">
        dia
      </td>
    </tr>
  </table>

  </form>

</body>
</html>