<?php 
require_once("../include/initialize.php");
	 if (!isset($_SESSION['USERID'])){
      redirect(web_root."admin/login.php");
     } 

$content='home.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	case '1' :
        $title="products";	
		$content='products/';		
		break;	
	default :
	    // $title="Dashboard";	
		// $content ='dashbord/';		
	redirect("products/");
}
require_once("theme/templates.php");
?>