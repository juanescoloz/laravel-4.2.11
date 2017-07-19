<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<form method="POST" action="{{url('guardarUserNew')}}">
	<center>
		<table>
		<tr>
				<td>Nombre:</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr>
				<td>Usuario:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Guardar"></td>
			</tr>
		</table>
	</center>
</form>
</body>
</html>