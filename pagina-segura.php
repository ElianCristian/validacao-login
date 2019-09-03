<?php
	session_start();

	if(!isset($_SESSION['login']) and !isset($_SESSION['senha']))
	{
	header("Location: index.php");
	exit;
	}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?=$_SESSION['login'];?>

<h3>Você está logado</h3>
<a href="pagina-segura.php?op=logout"> Sair do sistema </a>

<?php
	if($_GET['op']=="logout"){
	unset($_SESSION['login']);
	unset($_SESSION['senha']);

	header("Location: index.php");
}
?>
</body>
</html>