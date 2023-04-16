<?php 
add_filter('show_admin_bar', '__return_false');

function get_file($filename)
{
	if(file_exists(get_template_directory().'/'.$filename)) {
		$time = filemtime(get_template_directory().'/'.$filename);
		$file_url = get_template_directory_uri().'/'.$filename.'?v='.$time;
		return $file_url;
	}
}

//Adiciona pagina de opcoes do ACF
if( function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title'    => 'Geral',
		'menu_title'    => 'Geral',
		'menu_slug'     => 'geral',
		'capability'    => 'edit_posts',
		'redirect'      => false,
		'position'      => 9
	));
}

//Alterar o logo no login
function my_login_logo() { ?>
	<style type="text/css">
		body.login #login h1 a {
			background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.webp');
			padding-bottom: 30px;
			background-size: contain;
			width: 100%;
			height: 60px;
			background-repeat: no-repeat;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );