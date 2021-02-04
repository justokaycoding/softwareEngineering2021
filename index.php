<?php
  require_once(__DIR__ . '/php/header.php');
  require_once(__DIR__ . '/php/footer.php');
  require_once(__DIR__ . '/php/shortcode.php');

  //global $user_array;

    $Head = new Head();
    $Foot = new Foot();

    $output  = $Head->get_header();
    $output .=  markup('width-6', get_form(), 'code');
    $output .= $Foot->get_footer();
	  echo $output;

?>
