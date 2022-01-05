<?php 
// có thể chèn username + password trực tiếp thay vì dùng option page của ACF.
function send_smtp_email( $phpmailer ) {
  $phpmailer->IsSMTP();
  $phpmailer->Host       = "smtp.gmail.com";
  $phpmailer->Port       = 465;
  $phpmailer->SMTPAuth   = true;
  $phpmailer->Username   = get_field('email_app', 'option'); //tai khoan
  $phpmailer->Password   = get_field('password_app', 'option'); //mat khau
  $phpmailer->SMTPSecure = "ssl";
}
add_action( 'phpmailer_init', 'send_smtp_email' );


?>