<?php
if (isset($_SESSION['valid'])){
  $ref = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  header('Location: $ref');
  exit;
}
else {
	header("Location: captiveportal.html");
}

?>