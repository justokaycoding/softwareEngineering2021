<?php
  require_once(__DIR__ . '/php/header.php');
  require_once(__DIR__ . '/php/footer.php');
  require_once(__DIR__ . '/php/shortcode.php');

  $Head = new Head();
  $Foot = new Foot();

  $output  = $Head->get_header();
  $output .= '<h1>Yeap</h1>';
  $output .= get_form();
  $output .= $Foot->get_footer();
	echo $output;
?>
