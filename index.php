<?php
  require_once(__DIR__ . '/header.php');
  require_once(__DIR__ . '/footer.php');
  require_once(__DIR__ . '/shortcode.php');


  $t = __DIR__ . '/shortcode.php';

  echo '<pre>';
  var_dump($t);
  echo '</pre>';


  $Head = new Head();
  $Foot = new Foot();

  $output = $Head->get_header();
  $output .= get_form();
  $output .= $Foot->get_footer();
  $output .= $t;
	echo $output;
?>
