<?php

class Foot {
  function get_footer(){
    $output = $this->get_js();
    $output .= '</body>';
    $output .= '</html>';
    return $output;
  }
  function get_js() {
    return '<script src="/js/script.js"></script>';
  }
}

?>
