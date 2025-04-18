<?php
/**
 *------
 * hearts.action.php
 *
 * Hearts main action entry point
 *
 *
 * In this file, you are describing all the methods that can be called from your
 * user interface logic (javascript).
 *       
 * If you define a method "myAction" here, then you can call it from your javascript code with:
 * this.ajaxcall( "/emptygame/emptygame/myAction.html", ...)
 *
 */
  
  class action_heartcancellation extends APP_GameAction
  { 
   	public function __default()
  	{
  	    if( self::isArg( 'notifwindow') )
  	    {
            $this->view = "common_notifwindow";
  	        $this->viewArgs['table'] = self::getArg( "table", AT_posint, true );
  	    }
  	    else
  	    {
            $this->view = "heartcancellation_heartcancellation";
            self::trace( "Complete reinitialization of board game" );
      }


  	} 
    public function playCard()
    {
        self::setAjaxMode();     
        $card_id = self::getArg( "id", AT_posint, true );
        $this->game->playCard( $card_id );
        self::ajaxResponse( );
    }
    
    public function giveCards()
    {
        self::setAjaxMode();     
        $cards_raw = self::getArg( "cards", AT_numberlist, true );
        
        // Removing last ';' if exists
        if( substr( $cards_raw, -1 ) == ';' )
            $cards_raw = substr( $cards_raw, 0, -1 );
        if( $cards_raw == '' )
            $cards = array();
        else
            $cards = explode( ';', $cards_raw );

        $this->game->giveCards( $cards );
        self::ajaxResponse( );    
    }
  

  }
  

