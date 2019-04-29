<?php
require_once("developer.php");
if ($_SESSION['logged'] == 'yes') {
  	$smarty->assign( 'user', $user_info['username']);
$smarty->assign( 'user', $user_info['username']);

	$smarty->assign( 'avatar', $avatar );
$smarty->assign( 'name', $user_info['fullname']);
$smarty->assign( 'email', $user_info['email']);
$smarty->assign( 'country', $user_info['country']); 

  	$smarty->display('clixwall.tpl');
	} else {
	header("location: index.php?view=login");
	}

?>