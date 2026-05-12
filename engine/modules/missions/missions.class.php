<?php

class Missions extends Engine
{

    public function __construct()
    {	
		/*First, let's get relevant user info and push to an array
		private $usrInfo = array();
		
		parent::fetchInfo( $usrInfo );*/
		
		//parent::printHeader(); //Will print the header.. creating new instance of raintpl, using fetchinfo, applying accordingly...
		
		if( !isset( $_GET['type'] ) ) 
		{
			header('location: ' . HOME);
		}
		elseif( $_GET['type'] != "beginner" && $_GET['type]'] != "intermediate" && $_GET['type'] != "advanced" && $_GET['type'] != "programming" &&
		        $_GET['type'] != "crypt"
		      )
		{
			header('location: ' . REDIRECT_404);
		}
		else
		{
			parent::initTemplate();
			parent::initData();

			$pg = new RainTPL;
			$pg->assign( "name", "wade" );

			switch( $_GET['type'] )
			{
				case 'beginner':
					raintpl::$tpl_dir = "sources/templates/default/modules/missions/beginner/";
					if( isset( $_GET['id'] ) )
					{
						echo $pg->draw( $_GET['id'] );
					}
					else
					{
						echo $pg->draw( 'beginner' );
					}
				break;

				case 'intermediate':
					echo $pg->draw( 'intermediate' );
				break;

				case 'advanced':
					echo $pg->draw( 'advanced' );
				break;

				case 'programming':
					echo $pg->draw( 'programming' );
				break;

				case 'crypt':
					echo $pg->draw( 'cryot' );
				
			}	
		}



		#Step 1. Initiate template
		parent::initTemplate();
		parent::initData();

		//echo parent::getInfo(0);
		
		#Step 2. Setup template rules
		/*$pg = new RainTPL;
		$pg->assign( "login_state", parent::getInfo( 'login_state' ) );
        $pg->assign( "name", "wade" );
        $pg->assign( "ip", "127.0.0.1" );*/
    }

}

