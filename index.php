<?php
  require_once('../php/header.php');
  require_once('../php/footer.php');
  require_once('../php/shortcode.php');

  $Head = new Head();
  $Foot = new Foot();

  $output = $Head->get_header();
  $output .= get_form();
  $output .= $Foot->get_footer();
  $output = 'test';
	echo $output;
?>
