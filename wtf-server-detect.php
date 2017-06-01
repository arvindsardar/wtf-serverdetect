<?php
/**
	* Plugin Name: WTF Server Detector
	* Plugin URI: http://whatthefox.com.au
	* Description: Is this Site on Dev?
	* Version: 1.0
	* Author: AS
	* Author URI: http://whatthefox.com.au
	* License: GPL2
	*/
	

/*	------------------------------------------
	Server Detector
	------------------------------------------ */	
	function devIsLocal(){
	    $http_host=$_SERVER['HTTP_HOST'];
	    $ip_address=$_SERVER['SERVER_ADDR'];
	    $servername="Server Unknown";
	    $servertype="";
	    $plugin = plugin_dir_url( __FILE__ );


	    if($ip_address=='127.0.0.1')$servertype=$plugin."local.svg";
	    if($ip_address=='103.18.109.141')$servertype=$plugin."stage.svg";
	    if($ip_address=='192.168.1.11')$servertype=$plugin."dev.svg";

	    echo "<div style=\"width: 65px; height:65px; position:fixed; bottom:0; right:0;  z-index:99;\" class=\"wtf-serverinfo\"><img src=\" ". $servertype. " \"></div>";
	}
	add_action( 'wp_footer', 'devIsLocal', 20 );
