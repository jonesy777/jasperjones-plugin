<?php 
/**
* @package JasperJonesPlugin
* @version 1.0
*/
/*
Plugin Name: Jasper Jones Plugin
Plugin URI: http://sabino.coolcssart.com
Description: Version 1.0 adds a message to the end of each post.
Author: Carl Jones
Version 1.0
Auther URI: http://cjrunportfolio.site
License: GPLv2 or later
Text- Domain: jasperjones-plugin
*/
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
Copyright 2005-2015 Automattic, Inc.
*/

//this plugin hooks into the the content action that is triggered when a new post is rendered
	add_action( 'the_content', 'thank_you_text' );

//once triggered, WordPress calls the "thank_you_text" function 

	function thank_you_text ( $content ) {
    	return $content .= '<h1>Thank you for reading my blog post!</h1>';
	}