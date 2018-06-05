<?php
print "<html lang=es>";
print "<head>";
print "<meta charset=utf-8>";
print "<title>Sistema Experto - Diagnostico Trastornos del Sueño</title>";
print "</head>";

print "<h1>Resultado</h1>";
	print "<table>\n";
	print "<th>Explicaciòn</th>";
    print "<th>Diagnostico</th>";

// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost:3306', 'root', 'root')
    or die('No se pudo conectar: ' . mysql_error());
echo "Conectado<br><br><br><br>";
mysql_select_db('sisexpert') or die('No se pudo seleccionar la base de datos');

/**************************************************************************************************************/
/**************************************************************************************************************/
//1. INSOMNIO
/**************************************************************************************************************/
/**************************************************************************************************************/

if ((isset($_POST[s1])) and (isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=1';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((isset($_POST[s1])) and (isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=1';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((isset($_POST[s1])) and (isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=1';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((isset($_POST[s1])) and (isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=1';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((isset($_POST[s1])) and (isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=1';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((isset($_POST[s1])) and (isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=1';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((isset($_POST[s1])) and (isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=1';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((isset($_POST[s1])) and (isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=1';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((isset($_POST[s1])) and (isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=1';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((isset($_POST[s1])) and (isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=1';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((isset($_POST[s1])) and (isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=1';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((isset($_POST[s1])) and (isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=1';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((isset($_POST[s1])) and (isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=1';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((isset($_POST[s1])) and (isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=1';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

/**************************************************************************************************************/
/**************************************************************************************************************/
//2. APNEA DEL SUEÑO
/**************************************************************************************************************/
/**************************************************************************************************************/

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (!isset($_POST[s14])) and(isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (isset($_POST[s12])) and (isset($_POST[s13])) and (isset($_POST[s14])) and (isset($_POST[s15])) and (isset($_POST[s16])) and (!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=2';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

/***************************************************************************************************************************
****************************************************************************************************************************/
// 3. NARCOLEPSIA
/***************************************************************************************************************************
****************************************************************************************************************************/

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(isset($_POST[s17])) and (isset($_POST[s18])) and (isset($_POST[s19])) and (!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=3';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(isset($_POST[s17])) and (isset($_POST[s18])) and (isset($_POST[s19])) and (!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=3';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(isset($_POST[s17])) and (isset($_POST[s18])) and (isset($_POST[s19])) and (!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=3';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(isset($_POST[s17])) and (isset($_POST[s18])) and (isset($_POST[s19])) and (!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=3';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(isset($_POST[s17])) and (isset($_POST[s18])) and (isset($_POST[s19])) and (!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=3';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(isset($_POST[s17])) and (isset($_POST[s18])) and (isset($_POST[s19])) and (!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=3';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(isset($_POST[s17])) and (isset($_POST[s18])) and (isset($_POST[s19])) and (!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=3';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(isset($_POST[s17])) and (isset($_POST[s18])) and (isset($_POST[s19])) and (!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=3';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(isset($_POST[s17])) and (isset($_POST[s18])) and (isset($_POST[s19])) and (!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=3';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(isset($_POST[s17])) and (isset($_POST[s18])) and (isset($_POST[s19])) and (!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=3';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(isset($_POST[s17])) and (isset($_POST[s18])) and (isset($_POST[s19])) and (!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=3';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(isset($_POST[s17])) and (isset($_POST[s18])) and (isset($_POST[s19])) and (!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=3';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(isset($_POST[s17])) and (isset($_POST[s18])) and (isset($_POST[s19])) and (!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=3';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(isset($_POST[s17])) and (isset($_POST[s18])) and (isset($_POST[s19])) and (!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=3';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(isset($_POST[s17])) and (isset($_POST[s18])) and (isset($_POST[s19])) and (!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=3';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

/*********************************************************************************************************************/
/*********************************************************************************************************************/
// 4. SÍNDROME DE PIERNAS INQUIETAS
/*********************************************************************************************************************/
/*********************************************************************************************************************/

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (isset($_POST[s22])) and (isset($_POST[s23])) and (!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (isset($_POST[s22])) and (isset($_POST[s23])) and (isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (isset($_POST[s22])) and (!isset($_POST[s23])) and(isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (isset($_POST[s22])) and (!isset($_POST[s23])) and(isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (isset($_POST[s22])) and (!isset($_POST[s23])) and(isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (isset($_POST[s22])) and (!isset($_POST[s23])) and(isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (!isset($_POST[s22])) and(!isset($_POST[s23])) and(isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (isset($_POST[s22])) and (isset($_POST[s23])) and (isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (isset($_POST[s22])) and (isset($_POST[s23])) and (isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (isset($_POST[s22])) and (isset($_POST[s23])) and (isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (isset($_POST[s22])) and (isset($_POST[s23])) and (isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (isset($_POST[s22])) and (isset($_POST[s23])) and (isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(isset($_POST[s21])) and (isset($_POST[s22])) and (isset($_POST[s23])) and (isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (isset($_POST[s21])) and (!isset($_POST[s22])) and(isset($_POST[s23])) and (isset($_POST[s24])) and (!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=4';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

/*********************************************************************************************************************/
/*********************************************************************************************************************/
// 5. NICTURIA
/*********************************************************************************************************************/
/*********************************************************************************************************************/

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(isset($_POST[s22])) and (isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(isset($_POST[s22])) and (!isset($_POST[s23])) and(!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(isset($_POST[s22])) and (isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(isset($_POST[s22])) and (isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(isset($_POST[s22])) and (isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(isset($_POST[s22])) and (isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(isset($_POST[s22])) and (isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(isset($_POST[s20])) and (!isset($_POST[s21])) and(isset($_POST[s22])) and (isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(isset($_POST[s14])) and (!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(isset($_POST[s22])) and (isset($_POST[s23])) and (!isset($_POST[s24])) and(isset($_POST[s25])) and (!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=5';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}


/*********************************************************************************************************************/
/*********************************************************************************************************************/
// 6. SONAMBULISMO
/*********************************************************************************************************************/
/*********************************************************************************************************************/

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (!isset($_POST[s6])) and(!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(isset($_POST[s10])) and (isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (isset($_POST[s5])) and (isset($_POST[s6])) and (!isset($_POST[s7])) and(!isset($_POST[s8])) and(!isset($_POST[s9])) and(!isset($_POST[s10])) and(isset($_POST[s11])) and (!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(isset($_POST[s26])) and (isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=6';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

/***************************************************************************************************************************************/
/***************************************************************************************************************************************/
// 7. BRUXISMO
/***************************************************************************************************************************************/
/***************************************************************************************************************************************/


else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (!isset($_POST[s8])) and(isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (!isset($_POST[s8])) and(isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (!isset($_POST[s8])) and(isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (!isset($_POST[s8])) and(isset($_POST[s9])) and (isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (!isset($_POST[s8])) and(isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (!isset($_POST[s8])) and(isset($_POST[s9])) and (isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (!isset($_POST[s8])) and(isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (isset($_POST[s7])) and (!isset($_POST[s8])) and(isset($_POST[s9])) and (!isset($_POST[s10])) and(!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(!isset($_POST[s3])) and(!isset($_POST[s4])) and(!isset($_POST[s5])) and(!isset($_POST[s6])) and(isset($_POST[s7])) and (!isset($_POST[s8])) and(isset($_POST[s9])) and (isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (isset($_POST[s7])) and (!isset($_POST[s8])) and(isset($_POST[s9])) and (isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(!isset($_POST[s2])) and(isset($_POST[s3])) and (isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (!isset($_POST[s3])) and(isset($_POST[s4])) and (!isset($_POST[s5])) and(isset($_POST[s6])) and (isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

else if ((!isset($_POST[s1])) and(isset($_POST[s2])) and (isset($_POST[s3])) and (!isset($_POST[s4])) and(!isset($_POST[s5])) and(isset($_POST[s6])) and (isset($_POST[s7])) and (isset($_POST[s8])) and (isset($_POST[s9])) and (isset($_POST[s10])) and (!isset($_POST[s11])) and(!isset($_POST[s12])) and(!isset($_POST[s13])) and(!isset($_POST[s14])) and(!isset($_POST[s15])) and(!isset($_POST[s16])) and(!isset($_POST[s17])) and(!isset($_POST[s18])) and(!isset($_POST[s19])) and(!isset($_POST[s20])) and(!isset($_POST[s21])) and(!isset($_POST[s22])) and(!isset($_POST[s23])) and(!isset($_POST[s24])) and(!isset($_POST[s25])) and(!isset($_POST[s26])) and(!isset($_POST[s27]))) {

	$query = 'SELECT explicacion, diagnostico FROM trastorno WHERE id_trastorno=7';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		echo "\t<tr>\n";
		foreach ($line as $col_value) {
			echo "\t\t<td>$col_value</td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	mysql_free_result($result);
}

/**********************************************************************************************************************************/
/**********************************************************************************************************************************/
/**********************************************************************************************************************************/
/**********************************************************************************************************************************/
/**********************************************************************************************************************************/


else {
    echo "No hay diagnostico";
}

mysql_close($link);


print "<br><form action=../index3.html method=post>";
print "<br><br><button type=submit>Regresar</button>";
print "</form>";
?>
