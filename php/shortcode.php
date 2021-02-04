<?php

function get_form(){
	$output = '<form method="POST" action="php/login.php">';
	$output .= '<label for="fname">First name:</label><br>';
	$output .= '<input type="text" id="fname" name="fname" value="John"><br>';
	$output .= '<label for="lname">Last name:</label><br>';
	$output .= '<input type="text" id="lname" name="lname" value="Doe"><br><br>';
	$output .= '<input type="submit" value="Submit">';
	$output .= '</form>';

	return $output;
}

function markup($width, $type, $content){
	$output = '<div id="" class="section">';
	$output .= '<div class="constraint">';
	$output .= '<div class="column '.$width.'">';
	$output .= '<div class="wrapper '.$type.'">';
	$output .= $content;
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';
	return $output
}


?>
