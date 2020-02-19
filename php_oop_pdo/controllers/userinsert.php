<?php

require 'views/userinsert.view.php';
if (isset($_POST['submit'])) {
	$insert = $database->insert();
}
?>