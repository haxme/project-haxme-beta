<?php

/**
 * Project: HaxMe
 * Release: 1.0.0
 * http://haxme.org/
 * 
 * @author     cwade12c
 * @license    GNU
 * 
 * Lets initiate the goods
 */
 
 //Lets check to see if critical files exist.
 //We need these to run the system.
 
if( !DEFINED( 'hxm_here' ) ) { die ( 'Access denied.' ); }
 
function bridge( $file )
{
    if( !file_exists( $file ) )
    {
        die( 'Critical system file is missing or corrupt.' );
    }
	
    require_once( $file );
}

?>
