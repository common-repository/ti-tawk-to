<?php
/**
Plugin name: TI Tawk To
Author: Ankit Tiwari
Author uri: http://author.artofcoding.in
Version: 1.0
Description: A simple plugin to add tawk.to widget to your site.
*/
add_filter('get_footer', 'ti_tawkto');
function ti_tawkto()
{
	echo '<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src=\'https://embed.tawk.to/58e1ef9cf7bbaa72709c3d87/default\';
		s1.charset=\'UTF-8\';
		s1.setAttribute(\'crossorigin\',\'*\');
		s0.parentNode.insertBefore(s1,s0);
	})();
	</script>';
}