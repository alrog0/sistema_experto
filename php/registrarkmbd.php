<?php
print "<html lang=es>";
print "<head>";
print "<meta charset=utf-8>";
print "<title>Sistema Experto - Diagnostico Trastornos del Sueño</title>";
print "</head>";

  $lista1 = $_POST['lista1'];
  $lista2 = $_POST['lista2'];
  $lista3 = $_POST['lista3'];
  $lista4 = $_POST['lista4'];
  $lista5 = $_POST['lista5'];
  $lista6 = $_POST['lista6'];
  $lista7 = $_POST['lista7'];

  echo "<b>Datos Recibidos:</b><br>".$lista1."<br>";
  echo $lista2."<br>";
  echo $lista3."<br>";
  echo $lista4."<br>";
  echo $lista5."<br>";
  echo $lista6."<br>";
  echo $lista7."<br>";
  $id_trastorno=0;

	switch ($lista7) {
		case "Insomnio":
			$id_trastorno = 1;
			break;
		case "Apnea obstructiva del sueño":
			$id_trastorno = 2;
			break;
		case "Narcolepsia":
			$id_trastorno = 3;
			break;
		case "Síndrome de piernas inquietas":
			$id_trastorno = 4;
			break;
		case "Nicturia":
			$id_trastorno = 5;
			break;
		case "Sonambulismo":
			$id_trastorno = 6;
			break;
		case "Bruxismo":
			$id_trastorno = 7;
			break;
		
		default:
			$id_trastorno = 0;
	}
  echo "test id_trastorno: ".$id_trastorno."<br>";

// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'root', 'root')
    or die('No se pudo conectar: ' . mysql_error());
	mysql_select_db('sisexpert') or die('No se pudo seleccionar la base de datos');
// llamado al procedimiento almacenado de inserción

	$query = "INSERT INTO sintomas_trastorno(".$lista1.", ".$lista2.", ".$lista3.", ".$lista4.", ".$lista5.", ".$lista6.", trastorno,idtrastorno) values (1,1,1,1,1,1,'$lista7',$id_trastorno)";
	echo "<br>".$query."<br>";
	$result = mysql_query($query) or die('<br><b>Consulta fallida: ' . mysql_error()."</b>");
	mysql_close($link);
	// en la bd se puede ver la tabla de auditoria donde quedo registrada esta inserción
	echo '<br><br><b>Trastorno registrado!!!</b>';  

/*else {
    echo "No hay diagnostico";
}
*/
print "<br><form action=../index.html method=post>";
print "<br><br><button type=submit>Regresar</button>";
print "</form>";
?>
