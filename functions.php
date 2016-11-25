<?php
/*
 * File to load in all of our function files for easier organization.
 *
 * @package: skeleton
 */

foreach ( glob( TEMPLATEPATH . "/includes/*.php", GLOB_NOSORT ) as $filename ){
    require_once $filename;
}

function extract_from_string( $start, $end, $tring ){

	$tring = stristr( $tring, $start );
	$trimmed = stristr( $tring, $end );
	return substr( $tring, strlen( $start ), -strlen( $trimmed ) );

}

function get_classes_and_parse_for_links_format( $class_array ){

	if ( in_array( 'post_format-post-format-link', $class_array ) ){

		$content = get_the_content();
		$link_string = extract_from_string( '<a href=', '/a>', $content );
		$link_bits = explode( '"', $link_string );

		foreach( $link_bits as $bit ) {

			if( substr( $bit, 0, 1 ) == '>' ) $link_text = substr( $bit, 1, strlen( $bit )-2 );
			if( substr( $bit, 0, 4 ) == 'http' ) $link_url = $bit;

		}

	} else {

		$link_url = get_permalink();

	}

	return $link_url;

}