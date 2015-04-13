<html>
	<head>
		<title>
			Conexion PHP - ORACLE
		</title>
	</head>
	<body>
		<form action="ingreso.php" method="POST">
                        <label>cedula</label>
			<input type="int" name="cedula" size="40"><br>
                        <label>primer nombre</label>
                        <input type="text" name="pn1" size="40"><br>
                        <label>segundo nombre</label>
                        <input type="text" name="pn2" size="40"><br>
                        <label>primer apellido</label>
                        <input type="text" name="pa1" size="40"><br>
                        <label>segundo apellido</label>
                        <input type="text" name="pa2" size="40"><br>
                        <label for="date1">fecha</label>
                        <input type="date" name="fecha"  placeholder="2005-12-30" required="true" /><br>
                        <label>numer hijos</label>
                        <input type="number" name="hijos" size="40"><br>
                        <label>sexo</label>
                        <input type="text" name="sexo" size="40" placeholder="m/f"><br>
			<input type="submit" value="Enviar">
		</form>
		<br><br><br>		
		
		<a href="consulta.php">CONSULTA USUARIOS 1</a>
                <a href="consulta1.php">CONSULTA USUARIOS 2</a>
		
	</body>
</html>