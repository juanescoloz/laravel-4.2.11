<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<form method="POST" action="{{url('entrar')}}">
	<center>
		<table>
			<tr>
				<td>Usuario:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Entrar"></td>
			</tr>
		</table>
	</center>
</form>
</body>
</html>