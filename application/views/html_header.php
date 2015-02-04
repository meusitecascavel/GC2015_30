<?php
echo doctype('html5');
echo "<html>";
echo "<head>";
echo "<title>Gestor Car</title>";
	echo meta('Content-type', 'text/html; charset=utf-8', 'equiv');
	$meta = array(
	    array('name' => 'robots', 'content' => 'NOINDEX, NOFOLLOW'),
	    array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
	);
	echo meta($meta); 	
		echo link_tag('pages/ico/76.png', 'apple-touch-icon', 'image/ico');
		echo link_tag('favicon.ico', 'shortcut icon', 'image/ico');
		
		echo link_tag(array('href' => 'pages/css/pages.css','rel' => 'stylesheet','type' => 'text/css'));	
		echo link_tag(array('href' => 'pages/css/pages-icons.css','rel' => 'stylesheet','type' => 'text/css'));	
		echo link_tag(array('href' => 'assets/plugins/bootstrap-datepicker/css/datepicker3.css','rel' => 'stylesheet','type' => 'text/css'));	
		echo link_tag(array('href' => 'assets/plugins/jquery-metrojs/MetroJs.css','rel' => 'stylesheet','type' => 'text/css'));	
		echo link_tag(array('href' => 'assets/plugins/rickshaw/rickshaw.min.css','rel' => 'stylesheet','type' => 'text/css'));	
		echo link_tag(array('href' => 'assets/plugins/mapplic/css/mapplic.css','rel' => 'stylesheet','type' => 'text/css'));	
		echo link_tag(array('href' => 'assets/plugins/nvd3/nv.d3.min.css','rel' => 'stylesheet','type' => 'text/css'));	
		echo link_tag(array('href' => 'assets/plugins/switchery/css/switchery.min.css','rel' => 'stylesheet','type' => 'text/css'));	
		echo link_tag(array('href' => 'assets/plugins/bootstrap-select2/select2.css','rel' => 'stylesheet','type' => 'text/css'));	
		echo link_tag(array('href' => 'assets/plugins/jquery-scrollbar/jquery.scrollbar.css','rel' => 'stylesheet','type' => 'text/css'));	
		echo link_tag(array('href' => 'assets/plugins/font-awesome/css/font-awesome.css','rel' => 'stylesheet','type' => 'text/css'));	
		echo link_tag(array('href' => 'assets/plugins/boostrapv3/css/bootstrap.min.css','rel' => 'stylesheet','type' => 'text/css'));	
		echo link_tag(array('href' => 'assets/plugins/pace/pace-theme-flash.css','rel' => 'stylesheet','type' => 'text/css'));	
	
echo "</head>";
echo '<body class="fixed-header  dashboard ">';
	
?>
