<?php
  require_once(__DIR__ . '/php/header.php');
  require_once(__DIR__ . '/php/footer.php');
  require_once(__DIR__ . '/php/shortcode.php');

  global $user_array = array();

  $Head = new Head();
  $Foot = new Foot();

  $output  = $Head->get_header();
  $output .= mark_up_generator(get_form());
  $output .= $Foot->get_footer();
	echo $output;
?>
