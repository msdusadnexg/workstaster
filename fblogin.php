<?php

session_start();
//require_once __DIR__ . 'fb/autoload.php';
require_once('fb/src/Facebook/FacebookSession.php');
require_once('fb/src/Facebook/FacebookRequest.php');
require_once('fb/src/Facebook/FacebookResponse.php');
require_once('fb/src/Facebook/FacebookSDKException.php');
require_once('fb/src/Facebook/FacebookRequestException.php');
require_once('fb/src/Facebook/FacebookRedirectLoginHelper.php');
require_once('fb/src/Facebook/FacebookAuthorizationException.php');
require_once('fb/src/Facebook/GraphObject.php');
require_once('fb/src/Facebook/GraphUser.php');
require_once('fb/src/Facebook/GraphSessionInfo.php');
require_once('fb/src/Facebook/Entities/AccessToken.php');
require_once('fb/src/Facebook/HttpClients/FacebookCurl.php');
require_once('fb/src/Facebook/HttpClients/FacebookHttpable.php');
require_once('fb/src/Facebook/HttpClients/FacebookCurlHttpClient.php');


use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\GraphSessionInfo;
use Facebook\AccessToken;
use Facebook\FacebookCurl;
use Facebook\FacebookHttpable;
use Facebook\FacebookCurlHttpClient;

$app_id='644202745682659';
$app_secret='bd4e52b49e1bb801431baf628924a6d4';
$redirect_url='http://vibedevelopment.co.uk/workstarter/fblogin.php';
FacebookSession::setDefaultApplication($app_id,$app_secret);
$helper=new FacebookRedirectLoginHelper($redirect_url);
$sess=$helper->getSessionFromRedirect();
if(isset($sess)){
$request=new FacebookRequest($sess,'GET','/me');
	$response=$request->execute();
	$graph=$response->getGraphObject(GraphUser::calssname());
	$name=$graph->getName();
	echo "Logged in Sucess";
}
else{
echo "hhhh";
	echo '<a href="'.$helper->getLoginUrl().'">Login With Fb</a>';
}


?>