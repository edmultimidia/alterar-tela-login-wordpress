add_action( 'login_head', 'wpmidia_custom_login' );
function wpmidia_custom_login() {
    echo '<link media="all" type="text/css" href="'.get_template_directory_uri().'/login-style.css" rel="stylesheet">';
}
