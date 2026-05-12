<?php

/**
 * Project: HaxMe
 * Release: 1.0.0-beta
 * http://haxme.org/
 *
 * @author     cwade12c
 * @license    GNU
 *
 * Lets handle the situation
 */

if( !DEFINED( 'hxm_here' ) ) { die( 'Access denied.' ); }

class Engine
{
    public $module;
    public $objHan;
    public $action;
    protected $DBH;
    protected $usr;
    protected $login_status = 0;
    protected $objTemplate;
    protected $pg;

    public function __construct()
    {
        self::force( 'hxcfg.php' );

        /* We will be using PDO (PHP Data Objects). */
        $this->initDb();

        /* Is the site undergoing maintenance? */
        //self::chkStatus();

        /* Check login state */
        //self::chkLogin();
    }

    public function start()
    {
        /* Set page */
        $page = DEF_MOD;

        if( isset( $_GET[PARAM_PAGE] ) )
        {
            $page = self::purify( $_GET[PARAM_PAGE] );
        }

        $this->objHan = $this->_Modulize( $page );

        if( isset( $_GET[PARAM_PAGE] ) && isset( $_GET[PARAM_ACTION] ) )
        {
            $this->_Method( self::purify( $_GET[PARAM_ACTION] ) );
            if( $this->action && method_exists( $this->objHan, $this->action ) )
            {
                $action = $this->action;
                $this->objHan->$action();
            }
        }
    }

    public function chkLogin() { }

    protected function initDb()
    {
        for( $attempt = 0; $attempt < 10; $attempt++ )
        {
            try
            {
                $driver = DB_DRIVER;
                $host = DB_HOST;
                $name = DB_NAME;
                $user = DB_USER;
                $pass = DB_PASS;

                $this->DBH = new PDO( $driver . ":host=$host;dbname=$name", $user, $pass );
                $this->DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                return;
            }
            catch( PDOException $e )
            {
                if( $attempt == 9 )
                {
                    die( 'DBERROR - DB is experiencing some difficulties.' );
                }

                usleep( 250000 );
            }
        }
    }

    public static function force( $file )
    {
        if( !file_exists( $file ) || !is_readable( $file ) )
        {
            die( 'Critical file does not exist or is unreadable.' );
        }
        else
        {
            require_once( $file );
        }
    }

    public static function purify( $content )
    {
        $content = str_replace( '.', '', $content );
        $content = str_replace( '/', '', $content );
        $content = htmlspecialchars( $content, ENT_QUOTES );

        return $content;
    }

    private static function _IsAdmin( $type, $data )
    {
        switch( $type )
        {
            case 1:
                //Do something with $data for a user IP
                break;

            case 2:
                //Do something with $data for a range of names
                break;

            case 3:
                //Do something with $data for a range of ids
                break;
        }
    }

    private function _Modulize( $module )
    {
        $class = self::moduleClass( $module );
        $sMod = strtolower( $class );

        $this->fetch( 'engine/modules/legacyPage.class.php' );
        $this->fetch( "engine/modules/$sMod/$sMod.class.php" );

        if( !class_exists( $class ) )
        {
            self::redirect( REDIRECT_404 );
            die();
        }

        $this->module = $class;

        return new $this->module;
    }

    private function _Method( $action )
    {
        if( $this->objHan && method_exists( $this->objHan, $action ) )
        {
            $this->action = $action;
        }
    }

    protected function initData()
    {

        if( self::isMember() )
        {
            $usr[ "name" ]             =      "wade";
            $usr[ "login_state"]       =      1;

            $this->usr = serialize( $usr );
        }
        else
        {
            $usr[ "login_state"]       =      0;
            $this->usr = serialize( $usr );
        }
    }

    protected function isMember()
    {
        return true;
    }

    protected function getInfo( $val )
    {
        $usr = unserialize( $this->usr );
        return $usr[$val];
    }

    protected function fetch( $file )
    {
        if( file_exists( $file ) )
        {
            require_once( $file );
        }
    }

    public static function redirect( $url )
    {
        echo "<meta http-equiv='refresh' content='0;url=$url'/>";
    }

    protected static function moduleClass( $module )
    {
        $safe = strtolower( self::purify( $module ) );
        $map = array(
            'home' => 'Home',
            'submit' => 'Submit',
            'survey' => 'Survey',
            'stats' => 'Stats',
            'novice' => 'Novice',
            'web' => 'Web',
            'crypt' => 'Crypt',
            'programming' => 'Programming',
            'team' => 'Team',
            'insane' => 'Insane',
            'msrc' => 'Msrc',
            'base' => 'Base',
            'haxms' => 'Haxms',
            'papers' => 'Papers',
            'videos' => 'Videos',
            'downloads' => 'Downloads',
            'hash' => 'Hash',
            'radio' => 'Radio',
            'theater' => 'Theater'
        );

        if( isset( $map[$safe] ) )
        {
            return $map[$safe];
        }

        return DEF_MOD;
    }

    protected function renderPage( $file )
    {
        if( !defined( 'DENYDIRECT' ) )
        {
            DEFINE( 'DENYDIRECT', 'GOOD2GO' );
        }

        if( !file_exists( $file ) || !is_readable( $file ) )
        {
            self::redirect( REDIRECT_404 );
            return;
        }

        include( $file );
    }

    protected function chkStatus()
    {

    }

    /* TEMPLATING */

    protected function initTemplate( $template='default' )
    {
        $tpl = $template;

        self::force( 'engine/rain.tpl.class.php' );
        /* See if logged in... if so, is template selected? */


    }

    /*public function initTemplate( $obj=FALSE, $skin=TEMPLATE )
    {
        self::force( 'engine/template.class.php' );
        if( $obj == TRUE )
        {
            $this->objTemplate = new Template( $skin );
            return $this->objTemplate;
        }
    }*/
}
