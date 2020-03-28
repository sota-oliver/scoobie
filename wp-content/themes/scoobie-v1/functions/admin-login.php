<?php
function my_login_logo() { ?>
    <style type="text/css">
        body {
			background-position: center !important;
			background-size: cover !important;
			width: 100% !important;
			height: 1080px !important;
            background-color: #fff !important;
        }
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
		width:320px;
        background-size: contain;
		background-repeat: no-repeat;
        }
        #login_error, .login .message {
            border-color: #418487 !important;
        }
        .login form {
            border: 1px solid #d0d0d0;
            box-shadow: none !important;
        }
		.login a {
            color: #418487 !important;
        }
        .login input:focus {
            border-color: #b57280 !important;
            box-shadow: none !important;
        }
        #wp-submit {
            background: #418487;
            border-color: #418487;
            -webkit-box-shadow: 0 1px 0 #418487;
            box-shadow: 0 1px 0 #418487;
            color: #fff;
            text-decoration: none;
            text-shadow: 0 -1px 1px #418487, 1px 0 1px #418487, 0 1px 1px #418487, -1px 0 1px #418487;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return false;
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function wpb_custom_logo() { ?>
    <style type="text/css">
        #wpadminbar #wp-admin-bar-wp-logo {display: none;}
    </style>
<?php }
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');