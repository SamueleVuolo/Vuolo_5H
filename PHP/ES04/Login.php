<html>
<head>
	<title>ITCS ERASMO DA ROTTERDAM</title>
</head>

<body>
<h2>Controllo credenziali</h2><hr/>
<?php
	if(isset($_POST["username"])) {
		$usr=$_POST["username"];
		$pwd=$_POST["password"];
		if($usr!="admin" || $pwd!="password"){
?>

	<h3>Attenzione! Nome utente o password sbagliate.</br>
	Accesso negato!</h3><hr/>

<?php
	} else {
		echo "<h4>Benvenuto " . $usr . " nell'area del sito!</h4>";
	}
}	else {
?>

	<form name="frmLogin" action="P.php" method="POST">
		User name: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" value="Submit">
	</form><hr/>
	
<?php
}
?>

<a href="index_sessione.php"><h2>Torna alla home page</a><br/></h2>
</body>
</html>