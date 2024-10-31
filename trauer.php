<?php
/*
Plugin Name: Trauer um Artikel 5 
Plugin URI: http://blog.gr4yweb.de/2009/06/r-i-p-artikel-5-gg/
Description: Wir trauern um Artikel 5 GG
Author: Sascha Wessel
Version: 1.0.2
License: Creative Commons Attribution-Share Alike 3.0 Unported
Author URI: http://blog.gr4yweb.de
*/

add_action('wp_head','tb_addCSS');
add_action('wp_footer','tb_addBadge');

function tb_addCSS(){
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"".get_bloginfo('url').tb_getBaseDir()."/style.css\" media=\"screen\" />";
}

function tb_addBadge(){
	$classes = array('trauer1','trauer2a','trauer2b','trauer3a','trauer3b','trauer4');
	$number = mt_rand(0,count($classes));
	echo "<div id=\"trauerbadge\" class=\"".$classes[$number]."\"></div>";
}

function tb_getBaseDir(){
	$plugin_dir = str_replace( '\\', '/', dirname( __FILE__ ) );
	if( preg_match( '#(/'.PLUGINDIR.'.*)#i', $plugin_dir, $treffer ) )
		$plugin_dir = $treffer[1];
	else  
		$plugin_dir = '/'.PLUGINDIR;  
	return $plugin_dir;
}
?>
