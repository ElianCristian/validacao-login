<?php
	session_start();
	$con = mysqli_connect("localhost", "root", "", "phpcurso");

	$sql = mysqli_query($con, "SELECT * FROM usuario WHERE cpf = '".$_POST['cpf']."' and
	 senha = '".$_POST['senha']."'");

	if (mysqli_num_rows($sql)==true) {
		# code...
		while ($ln = mysqli_fetch_array($sql)) {
			# code...
			$_SESSION['login'] = $ln['cpf'];
			$_SESSION['senha'] = $ln['senha'];

			header("Location: pagina-segura.php");
		}
	}else{
		echo "<meta http-equiv='refresh' content='0; URL= index.php'>
			<script type=\"text/javascript\">
				alert(\"Usuário ou senha inválidos\");
			</script>
		";
	}