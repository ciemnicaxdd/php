
<html>
<body>

<form action="index.php" method="GET">
<input type="text" name="n"></input>
<button type="submit" >Zatwierdz</button>
</form>
</body>
<?php
if($n=$_GET['n'])
{
  $n=$_GET['n'];
}

       
$silnia = 1;
for ($i=1; $i<=$n; $i++) {
  $silnia *= $i;
}

?>
<p> Silnia wynosi: <?php
if(isset($silnia))
{
  echo $silnia;
}
else {
  echo 'brak danych';
}


?>
</p>
</html>