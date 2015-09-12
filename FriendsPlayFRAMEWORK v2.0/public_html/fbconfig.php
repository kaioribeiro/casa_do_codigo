<?php
include ("_Funcoes/FuncaoInserirFB.php");
include ("_Funcoes/FuncaoSelect.php"); 

session_start();

// added in v4.0.0
require_once 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( '746054398850104','00000c4573e14d8e557342e9b2a11d33' );
// login helper with redirect_uri
    $helper = new FacebookRedirectLoginHelper('http://localhost/casa_do_codigo/FriendsPlayFRAMEWORK v2.0/public_html/fbconfig.php' );
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
      $fbid = $graphObject->getProperty('id');              // To Get Facebook ID
      $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
      $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
       $amigos = $graphObject->getProperty('friends');

  /* ---- Session Variables -----*/
      $_SESSION['FBID'] = $fbid;           
        $_SESSION['FULLNAME'] = $fbfullname;
      $_SESSION['EMAIL'] =  $femail;
      $_SESSION['AMIGOS'] = $amigos;

      
      // $consulta= select("usuario","id_usuario", "WHERE id_usuario = '$fbid'", null, null);

      //  if ($consulta == TRUE) {
      //    header("Location: ../google-login/index.php");
      //  }else{

      //    inserir(array("nome","id_usuario"), array($fbfullname,$fbid),'usuario');

      //    header("Location: ../google-login/index.php");
      //  }
      
   /* ---- header location after session ----*/
   header("Location: ../google-login/index.php");
} else {
  $loginUrl = $helper->getLoginUrl();
 header("Location: ".$loginUrl);
}
?>