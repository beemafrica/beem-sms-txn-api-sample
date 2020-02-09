<?php

header('Content-Type: application/json');

if(!isset($_POST) )
{
	echo json_encode("{error:{ message: nothing }}");
	die();
}else{
	$from = urlEncode($_POST['SOURCEADDR']);
	
	$message = $_POST['MESSAGE'];
	$vp = urlEncode($_POST['VP']);
	$destaddr = urlEncode($_POST['DESTADDR']);
	$sourceaddnpi = urlEncode($_POST['SOURCEADDRNPI']);
	$sourceaddrton =  urlEncode($_POST['SOURCEADDRTON']);
	
	//ADD YOUR CODE HERE

	return header("HTTP/1.1 200");

}

?>