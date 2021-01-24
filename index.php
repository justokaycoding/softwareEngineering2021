<?php
  require_once('header.php');
  require_once('footer.php');
  require_once('shortcode.php');

  $Head = new Head();
  $Foot = new Foot();

  $output = $Head->get_header();
  $output .= get_form();
  $output .= $Foot->get_footer();
  $output = 'test';
	echo $output;
?>
