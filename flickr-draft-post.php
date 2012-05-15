<?php
/*
Plugin Name: Flickr Draft Post
Version: 1.0
Description: When Flickr publishes a post to your blog, make it a draft post
Plugin URI: http://inphotos.org/flickr-blog-this-to-draft/
Author: Donncha O Caoimh
Author URI: http://inphotos.org/
License: GPL

Copyright (C) Donncha O Caoimh, (donncha at ocaoimh dot ie)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

As a special exemption, you may link this program with any of the
programs listed below, regardless of the license terms of those
programs, and distribute the resulting program, without including the
source code for such programs: ExpressionEngine

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
*/

function flickr_draft_post( $post_status ) {
	if( $_SERVER[ 'HTTP_USER_AGENT' ] == 'Flickr' ) {
		return 'draft';
	} else {
		return $post_status;
	}
}
add_filter( 'status_save_pre', 'flickr_draft_post' );
?>
