<?php 
/**
 * Outputs and input element with the given attribute values
 * Thia function also examines SESSION data for previously
 * entered values with the same name
 * @param unknown_type $name
 * @param unknown_type $placeholder
 */

function input($name, $placeholder, $value=null) {
	if($value == null && isset($_SESSION['POST'][$name])) {
		$value = $_SESSION['POST'][$name]; 
	
		// Remove from session data
		unset($_SESSION[$name]);
		
		if($value == '') {
			$class = 'class="error"';	
		}
	} elseif($value != null) {
		$class = '';
		
	} else {
		$class = '';
		$value =''; 
		$class = 'class="error"';
	}

	return "<input type=\"text\" name=\"$name\" placeholder=\"$placeholder\" value=\"$value\" />";
}

/**
 * Generates an HTML select element with the given name attribute and option elements
 * This function also examines session data for previously submitted value
 * @param String $name Name Attribute
 * @param Array $options Array of options in the form value => text
 * @return HTML select element
 */
function dropdown($name, $options) {
	$select = "<select name=\"$name\">";
	
	// Add option elements to select element
	foreach($options as $value => $text) {
		// If there is session form data for $name, AND its value
		// is the same as the current array element, select it
		if(isset($_SESSION['POST'][$name]) && $_SESSION['POST'][$name] == $value) {
			unset($_SESSION['POST'][$name]);
			$selected = 'selected="selected"';
	} else {
		$selected = '';
	}	
		$select .= "<option value=\"$value\">$text</option>";
		
	}
	
	$select .= "</select>";
	return $select;
}

function radio($name, $options) {
	$radio = '';
	// Loop over options
	foreach($options as $value => $text) {
		if(isset($_SESSION['POST'][$name]) && $_SESSION['POST'][$name] == $value) {
			unset($_SESSION['POST'][$name]);
			$checked = 'checked="checked"';
		} else {
			$checked = '';
		}
		$radio .= "<label><input type=\"radio\" name=\"$name\" $checked value=\"$value\">$text</label>"; 
	}
}
?>	