<?php
<<<<<<< HEAD

	function get_form(){
	$output = '<form method="POST" action="php/login.php">';
	$output .= '<label for="fname">First name:</label><br>';
	$output .= '<input type="text" id="fname" name="fname" value="John"><br>';
	$output .= '<label for="lname">Last name:</label><br>';
	$output .= '<input type="text" id="lname" name="lname" value="Doe"><br><br>';
	$output .= '<input type="submit" value="Submit">';
	$output .= '</form>';

=======
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

function mark_up_generator($content = '', $width = 'width-12', $type = 'text', $color = 'light'){
	$output .= '<div id="" class="section">';
		$output .= '<div class="constraint">';
			$output .= '<div id="" class="column '.$width.'">';
				$output .= '<div class="wrapper '.$type.' text-'.$color.'">';
					$output .= $content;
				$output .= '</div>';
			$output .= '</div>';
		$output .= '</div>';
	$output .= '</div>';
>>>>>>> 4b68d115bcc8d8b330ca56af904751c8b966b9f2
	return $output;
}

function add_user(){

}

function remove_user(){

}

function get_user(){

}
