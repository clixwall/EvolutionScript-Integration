 <?php
 $secret = 'ENTER YOUR SECRET PASSWORD HERE';
include "includes/config.php";


$DBHost = $config['Database']['servername'] ;
$DBDatabase= $config['Database']['dbname'] ;
$DBUser = $config['Database']['username'] ;
$DBPassword = $config['Database']['password'] ;
$db = new mysqli("$DBHost","$DBUser","$DBPassword","$DBDatabase");




$pwd = $_REQUEST['pwd'];
$status = intval($_REQUEST['s']);
$user = trim($_REQUEST['u']);
$credit = trim($_REQUEST['c']);
$type  = intval($_REQUEST['t']);



if($secret == $pwd)
{
	if($status == '1')
	{
		if($type == '1')
		{
		$db->query("UPDATE `members` SET money=money+'$credit' WHERE username  = '$user'");
					
		die('Done');
		}
		else {
			
		 	$update = $db->query("UPDATE `members` SET points=points+'$credit' WHERE username  = '$user'");


			die('Done');
		}
		
	} 
	else if($status == '2')
	{
		if($type == '1')
		{
	 	$update = $db->query("UPDATE `members` SET money=money-'$credit' WHERE username  = '$user'");

		die('Done');
		}
		else{
	 	
		 	$update = $db->query("UPDATE `members` SET points=points-'$credit' WHERE username  = '$user'");

			die('Done');
		}
	}
}
?>