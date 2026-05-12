<?php

class Home extends Engine
{
    private $_ObjTemplate;

    public function __construct()
    {
        echo 'Module home loaded - method __construct() executed';
        $this->_ObjTemplate = parent::initTemplate( TRUE );
        $this->_ObjTemplate->build();

        if( !parent::isLogin() )
        {
            self::_InitGuest();
        }
        else
        {
            self::_InitHome();
        }
    }

    public function __deconstruct()
    {
        $this->_ObjTemplate->close();
    }

    private function _InitGuest()
    {
        $guest = 'guest.inc.html';
         
        if( !file_exists( $guest ) )
        {
            echo 'Crucial error - data seems to be broken.';
        }
        else
        {
            $data = file_get_contents( $guest );
            echo $data;
        }
    }

    private function _InitHome()
    {
        $member = 'member.inc.html';

        if( !file_exists( $member ) ) 
        {
            echo 'Crucial error - data seems to be broken.';
        }
        else
        {
           $data = file_get_contents( $member );
           echo $data;
        }
    }
}