
<?php 
$current_file = explode('/', $_SERVER['SCRIPT_NAME']);
$current_file = end($current_file);
include ('admin/db_config.php');
include ('admin/functions.php');


if (isset($_GET['p']) && !empty($_GET['p']) && page_exists($_GET['p'])){
	$current_selection = $_GET['p'];
} else {
	$current_selection = "home";
}


?>