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
