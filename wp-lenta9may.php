<?php
/*
Plugin Name: wp-lenta9may
Plugin URI: https://dendrblog.ru/sozdanie-bloga/wordpress-plugins/georgievskaya-lenta-na-sayte-wordpress.html
Description: Выводит Георгиевскую ленточку в верхнем левом углу Вашего блога на cms wordpress
Author: Денис Иванов <denisivanov@dendrblog.ru>
Author URI: https://dendrblog.ru
Version: 2.8
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function lenta9may() {
	if ((date("n")==4 && date("j")>=25) || (date("n")==5 && date("j")<=12)) {

		$path_to_image = plugin_dir_url( __FILE__ );
		
		
		echo ('
			<nolayer>
				<div id="lenta9may" style="position:fixed; z-index:20000; top:0; left:0;">
			</nolayer>

			<noindex><a rel="external nofollow" href="https://pamyat-naroda.ru/" target="_blank"><img border="0" src="' . $path_to_image . 'lenta9may.gif" align="left" alt="" /></a></noindex>
			<nolayer>
				</div>
			</nolayer>'
		);
	};
} 

add_filter('wp_head', 'lenta9may');

?>