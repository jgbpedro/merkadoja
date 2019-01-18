<?php 

    date_default_timezone_set('America/Sao_Paulo');	

	//Seta informações de banco de dados
	//mysql_connect("186.202.152.19","dbmerkadoja","merkadoja2018");
$link = mysqli_connect("186.202.152.19", "dbmerkadoja", "merkadoja2018", "dbmerkadoja");
	//mysql_select_db("dbmerkadoja");



$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$mensagem = $_POST['txtmensagem'];

$sql = "insert into tblcontatos (nome,email,mensagem) values ('".$nome."', '".$email."','".$mensagem."')";

mysqli_query($link,$sql);

?>