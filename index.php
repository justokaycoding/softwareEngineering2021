<?php
  require_once(__DIR__ . '/header.php');
  require_once(__DIR__ . '/footer.php');
  require_once(__DIR__ . '/shortcode.php');

  $Head = new Head();
  $Foot = new Foot();

  $output = $Head->get_header();
  $output .= get_form();
  $output .= $Foot->get_footer();
	echo $output;
?>
