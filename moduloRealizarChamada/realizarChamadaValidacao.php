<?php

if (isset($_POST["discar"])) {
    $db = mysqli_connect("localhost", "root");

    if (!$db) {
        die('Não foi possível Conectar: ' . mysqli_error());
    }
    mysqli_select_db($db, "bloqueadorChamadas_bd");

//pegando os valores inseridos
    $telefoneFixo = $_POST["telefoneFixo"];
	$telefoneCelular = $_POST["telefoneCelular"];
	$data = date('Y-m-d');
    
    $query = "SELECT * FROM numerosBloqueados WHERE telefoneFixo = '".$telefoneFixo."' AND telefoneCelular = '".$telefoneCelular."'";
    $res = mysqli_query($db, $query) or die("ERRO ao pesquisar telefone. " . mysql_error());

    if ($registro = mysqli_fetch_assoc($res)) {
        echo "<script>alert('Impossível completar sua ligação!'); window.location.href='home_realizarChamada.html' </script>";
		$query = "INSERT INTO chamadasBloqueadas (nome, telefoneFixo, telefoneCelular, data) VALUES ('" . $registro['nome'] . "','" . $telefoneFixo . "','" . $telefoneCelular . "','" . $data . "')";
		$res = mysqli_query($db, $query);
		mysqli_close($db);
	} else {
        echo "<script>alert('Chamada realizada com sucesso!'); window.location.href='home_realizarChamada.html' </script>";
    }
}
?>

