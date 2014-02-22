<?php
	$g_hostname = 'localhost';
	$g_db_type = 'mysql';
	$g_database_name = 'mantis';
	$g_db_username = 'mantis';
	$g_db_password = 'mantis';

$g_allow_signup             = ON;
$g_allow_anonymous_login    = OFF;
$g_anonymous_account        = '';

$g_phpMailer_method     = PHPMAILER_METHOD_SMTP; 
$g_smtp_host            = 'smtp.gmail.com';
$g_smtp_username        = 'recolbert@gmail.com';
$g_smtp_password        = 'Qazxsw1@';
$g_smtp_connection_mode = 'ssl';
$g_smtp_port = 465;
$g_administrator_email  = 'Admin@colbeazy.com';
$g_webmaster_email      = 'WebMaster@colbeazy.com';
$g_from_name            = 'Colbeazy Bug Tracker';
$g_from_email           = 'overseer@colbeazy.com';
$g_return_path_email    = 'recolbert@gmail.com';
$g_email_receive_own    = ON;
$g_email_send_using_cronjob = OFF;

$g_allow_file_upload    = ON;
$g_file_upload_method   = DATABASE;
$g_absolute_path_default_upload_folder = '';
$g_max_file_size        = 5000000;
$g_preview_attachments_inline_max_size = 256 * 1024;
$g_allowed_files        = '';
$g_disallowed_files     = '';

$g_window_title         = 'MantisBT';
$g_logo_image           = 'images/mantis_logo.gif';
$g_favicon_image        = 'images/favicon.ico';

$g_show_realname = OFF;
$g_show_user_realname_threshold = NOBODY;

$g_default_home_page = 'my_view_page.php';

$g_send_reset_password = OFF;

?>
