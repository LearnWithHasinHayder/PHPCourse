<?php

function displayOptions( $options, $selectedValues ) {
	foreach ( $options as $option ) {
		$option   = strtolower( $option ); //Banana banana
		$selected = '';
		if ( in_array( $option, $selectedValues ) ) {
			$selected = "selected";
		}
		printf( "<option value='%s' %s>%s</option>\n", $option, $selected, ucwords( $option ) );
	}
}