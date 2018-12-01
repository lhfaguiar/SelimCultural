<?php

function global__redirect( $url ){
	header( 'Location:'.$url );
	die();	
}

function global__session_alert( $mensagem, $escopo = "user" ){
	$ssId = "sc";
	$_SESSION[$ssId."__".$escopo."_alert"] = $mensagem;
}

function helpers__alert(){

    $ssId = "sc";
  
    $alert = "";
  
      if( !isset($_SESSION[$ssId."__user_alert"]) ){
          return $alert;
      }
  
      if( is_array($_SESSION[$ssId."__user_alert"]) ){
  
          $alert_msg  = $_SESSION[$ssId."__user_alert"][0];
          $alert_tipo = $_SESSION[$ssId."__user_alert"][1];
  
      }
  
      unset($_SESSION[$ssId."__user_alert"]);
  
      $alert = "
          <div class=\"helpers__alert alert alert-{$alert_tipo}\">
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span>&times;</span></button>
              {$alert_msg}
          </div>
      ";
  
      return $alert;
  
}