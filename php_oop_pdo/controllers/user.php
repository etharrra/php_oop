<?php
$users = $database->selectAll('users');

require 'views/users.view.php';