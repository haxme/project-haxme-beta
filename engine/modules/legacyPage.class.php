<?php

if( !DEFINED( 'hxm_here' ) ) { die( 'Access denied.' ); }

class LegacyPageModule extends Engine
{
    public function __construct( $page )
    {
        $this->renderPage( $page );
    }
}

