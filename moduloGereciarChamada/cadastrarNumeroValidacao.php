<?php

if (isset($_POST["cadastrar"])) {
    $db = mysqli_connect("localhost", "root");

    if (!$db) {
        die('Não foi possível Conectar: ' . mysqli_error());
    }
    mysqli_select_db($db, "bloqueadorChamadas_bd");

//pegando os valores inseridos
    $nome = $_POST["nome"];
    $telefoneFixo = $_POST["telefoneFixo"];
	$telefoneCelular = $_POST["telefoneCelular"];
    
    $query = "SELECT id FROM numerosBloqueados WHERE telefoneFixo = '".$telefoneFixo."' AND telefoneCelular = '".$telefoneCelular."'";
    $res = mysqli_query($db, $query) or die("ERRO ao pesquisar telefone. " . mysql_error());

    if ($registro = mysqli_fetch_assoc($res)) {
        echo "<script>alert('Número telefônico já existente! Entre com outros valores para os campos telefone fixo e/ou telefone celular!'); window.location.href='cadastrarNumero.php' </script>";
    } else {
        $query = "INSERT INTO numerosBloqueados (nome, telefoneFixo, telefoneCelular) VALUES ('" . $nome . "','" . $telefoneFixo . "','" . $telefoneCelular . "')";

        $res = mysqli_query($db, $query);
        if (!$res) {
            die('Não foi possível realizar a operação. ' . mysql_error());
        } else {
           echo "<script>alert('Número(s) telefônico(s) cadastrado(s) com sucesso!'); window.location.href='cadastrarNumero.php' </script>";
        }
        mysqli_close($db);
    }
}
?>

