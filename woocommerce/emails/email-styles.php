<?php
/**
 * Email Styles
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-styles.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates/Emails
 * @version 2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Load colors
$bg              = get_option( 'woocommerce_email_background_color' );
$body            = get_option( 'woocommerce_email_body_background_color' );
$base            = get_option( 'woocommerce_email_base_color' );
$base_text       = wc_light_or_dark( $base, '#202020', '#ffffff' );
$text            = get_option( 'woocommerce_email_text_color' );

$bg_darker_10    = wc_hex_darker( $bg, 10 );
$body_darker_10  = wc_hex_darker( $body, 10 );
$base_lighter_20 = wc_hex_lighter( $base, 20 );
$base_lighter_40 = wc_hex_lighter( $base, 40 );
$text_lighter_20 = wc_hex_lighter( $text, 20 );

// !important; is a gmail hack to prevent styles being stripped if it doesn't like something.
?>
body {
	margin: 0 !important;
	padding: 0 !important;
}
#wrapper {
	background-color: <?php echo esc_attr( $bg ); ?>;
	margin: 0;
	padding: 0 0 70px 0;
	-webkit-text-size-adjust: none !important;
	width: 100%;
}
#email_header {
	background-color: <?php echo esc_attr( $base ); ?>;
	padding: 20px 0;
}
#template_header_image,
#template_tagline_image {
	width: 100%;
	max-width: 660px;
	margin: 0 auto;
	vertical-align: middle;
}
#template_header_image p {
	margin: 20px;
	color:  <?php echo esc_attr( $body ); ?>;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
}
#template_container {
	width: 100%;
	max-width: 660px !important;
}
#template_header_image .email_logo {
	width: 100%;
	max-width: 250px;
	height: auto;
	vertical-align: middle;
	padding: 0 20px;
}
#template_header_image .email_tagline {
	width: 100%;
	max-width: 250px;
	height: auto;
	vertical-align: middle;
	padding: 0 20px;
}
#template_header {
	width: 100%;
	max-width: 660px !important;
}
#template_header,
#template_tagline_image {
	background-color: <?php echo esc_attr( $base ); ?>;
	border-radius: 0 !important;
	color: <?php echo esc_attr( $base_text ); ?>;
	border-bottom: 0;
	font-weight: bold;
	line-height: 100%;
	vertical-align: middle;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
}

#template_header_image h1 {
	padding: 20px 20px 0 20px;
}

#template_header_image h1,
#template_header_image h1 a {
	color: <?php echo esc_attr( $body ); ?>;
}

#template_footer td {
	padding: 0;
	-webkit-border-radius: 6px;
}

#template_footer #credit {
	border:0;
	color: <?php echo esc_attr( $body ); ?>;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-size:14px;
	line-height:125%;
	text-align:center;
	padding: 20px;
}
#template_body,
#main_content_area,
#body_content {
	border-radius: 10px;
	background-color: <?php echo esc_attr( $body ); ?>;
}

#body_content table td {
	padding: 20px;
}
table.td td, table.td th {
	border-top: 0;
	border-right: 0;
	border-bottom: 1px solid #DDDDDD;
	border-left: 0;
}
#body_content table td td {
	padding: 12px;
}

#body_content table td th {
	padding: 12px;
	background-color: #DDDDDD;
	color: #111111;
	border-top: 0;
	border-right: 0;
	border-bottom: 1px solid #DDDDDD;
	border-left: 0;
}

#body_content table td th.totals {
	padding: 12px;
	background-color: <?php echo esc_attr( $body ); ?>;
	color: #111111;
	border-top: 0;
	border-right: 0;
	border-bottom: 1px solid #DDDDDD;
	border-left: 0;
}

#body_content td ul.wc-item-meta {
	font-size: 13px;
	margin: 1em 0 0;
	padding: 0;
	list-style: none;
}

#body_content td ul.wc-item-meta li {
	margin: 0.5em 0 0;
	padding: 0;
}

#body_content td ul.wc-item-meta li p {
	margin: 0;
}

#body_content p {
	margin: 0 0 16px;
}

#body_content_inner {
	color: <?php echo esc_attr( $text_lighter_20 ); ?>;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-size: 16px;
	line-height: 150%;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

.td {
	color: <?php echo esc_attr( $text_lighter_20 ); ?>;
	border: 0;
}

.text {
	color: <?php echo esc_attr( $text ); ?>;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
}

.link {
	color: <?php echo esc_attr( $base ); ?>;
}

#header_wrapper {
	padding: 36px 20px;
	display: block;
}

h1 {
	color: <?php echo esc_attr( $base ); ?>;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-size: 30px;
	font-weight: 300;
	line-height: 150%;
	margin: 0;
	text-align: center;
	text-shadow: 0 1px 0 <?php echo esc_attr( $base_lighter_20 ); ?>;
	-webkit-font-smoothing: antialiased;
}

h2 {
	color: <?php echo esc_attr( $base ); ?>;
	display: block;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-size: 20px;
	font-weight: bold;
	line-height: 130%;
	margin: 16px 0 8px;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

h3 {
	color: <?php echo esc_attr( $base ); ?>;
	display: block;
	font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
	font-size: 18px;
	font-weight: bold;
	line-height: 130%;
	margin: 16px 0 8px;
	text-align: <?php echo is_rtl() ? 'right' : 'left'; ?>;
}

a {
	color: <?php echo esc_attr( $base ); ?>;
	font-weight: normal;
	text-decoration: underline;
}

img {
	border: none;
	display: inline;
	font-size: 16px;
	font-weight: bold;
	height: auto;
	line-height: 100%;
	outline: none;
	text-decoration: none;
	text-transform: capitalize;
}
<?php
