<?php

# NOTES:
# PHP (I use v8.2.26) will returns this error if you use unquoted variable (example: $num = 0000000000000987;):
# PHP Parse error: Invalid numeric literal in [file_name_and_path] on line [line_number]

# EXAMPLES
#$num = "000a0000000000987";
$num = "0000000000000987";
#$num = "0.0000400000000987";
#$num = "00000400000000987";

echo unpad($num);

function unpad($num) {
	if (!is_numeric($num)) {
		return "$num is not a number \n";
	}
	if (floor($num) != $num) {
		return "$num is a float \n";
	}
	$array = str_split($num);
	$stop = FALSE;
	foreach ($array as $key => $value) {
		if (!$stop) {
			if ($value == '0') {
				unset($array[$key]);
			} else {
				$stop = TRUE;	
			}
		}
	}
	$array = implode('', $array);
	return $array;
}
