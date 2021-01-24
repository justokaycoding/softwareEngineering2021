<?php
class Head {

  function get_css() {
    $output = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
    $output .= '<link rel="stylesheet" href="/css/style.css">';
    return $output;
  }

  function get_header(){
    $output = '<!doctype html>';
    $output .= '<html lang="en">';
    $output .= '<head>';
    $output .= '<meta charset="utf-8">';
    $output .= '<title>The HTML5 Herald</title>';
    $output .= '<meta name="description" content="The HTML5 Herald">';
    $output .= '<meta name="author" content="SitePoint">';
    $output .= $this->get_css();
    $output .= '</head>';
    return $output;
  }
}

?>
