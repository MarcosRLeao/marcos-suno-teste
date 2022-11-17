<?php

function myapp_get_theme_image( $file_path ) {
	return esc_url( \MyApp::core()->assets()->getUrl() . '/resources/images/' . $file_path );
}

function myapp_get_attachment( $attachment_id, $size = 'thumbnail' ) {
	$image = wp_get_attachment_image_src( $attachment_id, $size );

	if ( empty( $image ) ) {
		return false; 
	}

	$extension = pathinfo( $image[0], PATHINFO_EXTENSION );

	if ( $extension === 'gif' ) {
		$image = wp_get_attachment_image_src( $attachment_id, 'full' );
	}

	return ! empty( $image ) ? esc_url( $image[0] ) : false;
}

function myapp_get_svg( $file_path ) {
	return \MyApp::view( 'resources/images/' . $file_path . '.svg' )->toString();
}
