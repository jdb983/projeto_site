<?php
$conecta = mysqli_connect('localhost', 'root', '') 
or die('Could not connect: ' . mysqli_error());
mysqli_select_db($conecta, 'salikao') or die('Could not select database');

?>