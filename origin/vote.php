<?php

session_start();

// define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__.'/res/facebook-php-sdk-v4-4.0-dev/');
// require __DIR__.'/res/facebook-php-sdk-v4-4.0-dev/autoload.php';

// require_once(FACEBOOK_SDK_V4_SRC_DIR.'src/Facebook/HttpClients/FacebookHttpable.php' );
// require_once(FACEBOOK_SDK_V4_SRC_DIR.'src/Facebook/HttpClients/FacebookCurl.php' );
// require_once(FACEBOOK_SDK_V4_SRC_DIR.'src/Facebook/HttpClients/FacebookCurlHttpClient.php' );
 
// require_once(FACEBOOK_SDK_V4_SRC_DIR.'src/Facebook/Entities/AccessToken.php' );
// require_once(FACEBOOK_SDK_V4_SRC_DIR.'src/Facebook/Entities/SignedRequest.php' );
 
// require_once(FACEBOOK_SDK_V4_SRC_DIR.'src/Facebook/FacebookSession.php' );
// require_once(FACEBOOK_SDK_V4_SRC_DIR.'src/Facebook/FacebookRedirectLoginHelper.php' );
// require_once(FACEBOOK_SDK_V4_SRC_DIR.'src/Facebook/FacebookRequest.php' );
// require_once(FACEBOOK_SDK_V4_SRC_DIR.'src/Facebook/FacebookResponse.php' );
// require_once(FACEBOOK_SDK_V4_SRC_DIR.'src/Facebook/FacebookSDKException.php' );
// require_once(FACEBOOK_SDK_V4_SRC_DIR.'src/Facebook/FacebookRequestException.php' );
// require_once(FACEBOOK_SDK_V4_SRC_DIR.'src/Facebook/FacebookOtherException.php' );
// require_once(FACEBOOK_SDK_V4_SRC_DIR.'src/Facebook/FacebookAuthorizationException.php' );
// require_once(FACEBOOK_SDK_V4_SRC_DIR.'src/Facebook/GraphObject.php' );
// require_once(FACEBOOK_SDK_V4_SRC_DIR.'src/Facebook/GraphSessionInfo.php' );
 
// use Facebook\HttpClients\FacebookHttpable;
// use Facebook\HttpClients\FacebookCurl;
// use Facebook\HttpClients\FacebookCurlHttpClient;
 
// use Facebook\Entities\AccessToken;
// use Facebook\Entities\SignedRequest;
 
// use Facebook\FacebookSession;
// use Facebook\FacebookRedirectLoginHelper;
// use Facebook\FacebookRequest;
// use Facebook\FacebookResponse;
// use Facebook\FacebookSDKException;
// use Facebook\FacebookRequestException;
// use Facebook\FacebookOtherException;
// use Facebook\FacebookAuthorizationException;
// use Facebook\GraphObject;
// use Facebook\GraphSessionInfo;


// // Inintailze app setting
// FacebookSession::setDefaultApplication('270166026515153', '6b651e5ab5c21d0cbfb9769bc97653e4');

// // get POST data
// if (isset($_POST) && isset($_POST['fb_id']) && isset($_POST['fb_access_token'])) {
// 	$fb_id = $_POST['fb_id'];
// 	$fb_access_token = $_POST['fb_access_token'];
// }
// else {
// 	echo 'Sorry, there is some error.';
// 	exit(1);
// }

// // Generate fb session
// $session = new FacebookSession($fb_access_token);
// // To validate the session:
// try {
// 	$session->validate();
// } catch (FacebookRequestException $ex) {
// 	// Session not valid, Graph API returned an exception with the reason.
// 	echo 'FacebookRequestException';
// 	echo $ex->getMessage();
// } catch (FacebookSDKException $ex) {
// 	echo 'FacebookSDKException';
// 	echo $ex->getMessage();
// } catch (\Exception $ex) {
// 	// Graph API returned info, but it may mismatch the current app or have expired.
// 	echo 'Other Exception';
// 	echo $ex->getMessage();
// }

// if ($session) {
// 	try {
// 		$user_profile = (new FacebookRequest(
// 			$session, 'GET', '/me'))->execute()->getGraphObject(GraphUser::className());
// 		echo "Name: ".$user_profile->getName();
// 	} catch(FacebookRequestException $e) {
// 		echo "Exception occured, code: ".$e->getCode();
// 		echo " with message: ".$e->getMessage();

// 	}
// }

// Graph API

// /* PHP SDK v4.0.0 */
// /* make the API call */
// $request = new FacebookRequest(
//   $session,
//   'GET',
//   '/v1.0/me'
// );
// $response = $request->execute();
// $graphObject = $response->getGraphObject();
// /* handle the result */
// echo $response;

/* ================= FB test ABOVE =================== */

include("dbconfig.php");
date_default_timezone_set('Asia/Taipei');
//echo "vote.php : ".$_SESSION['vote_number'];

#$_SESSION['fb_id'] = $_POST['fb_id'];
#$_SESSION['fb_name'] = $_POST['fb_name']; 

#echo $_POST['fb_name'].'-'.$_POST['fb_id'];
$index = 0;
$vote_index = 0;

// get ip address
$userIp = 	getenv('HTTP_CLIENT_IP')?:
			getenv('HTTP_X_FORWARDED_FOR')?:
			getenv('HTTP_X_FORWARDED')?:
			getenv('HTTP_FORWARDED_FOR')?:
			getenv('HTTP_FORWARDED')?:
			getenv('REMOTE_ADDR');

//check 資料庫中有沒有使用者資料
$mId = $db->query("SELECT `mId` FROM `member`");
while ($r = $mId->fetch(PDO::FETCH_ASSOC)) {
	if ($_POST['fb_id'] == $r['mId']) {
		$index = 1;	
	}
}

if ($index != 1){
	//資料庫中無使用者資料, 將使用者資料插入資料庫
	//echo "No,phptest.php,".$_SESSION['vote_number'];
	$db->exec("INSERT INTO `member` (`mId`, `mName`) values ('".$_POST['fb_id']."', '".$_POST['fb_name']."')");
}

$today_start_time = date("Y-m-d 00:00:00");
$today_end_time = date("Y-m-d 23:59:59");
$datetime = date("Y-m-d H:i:s");

//check今天是否投過票
$row = $db->query("SELECT `voteTime` FROM `vote` WHERE `mId` = {$_POST['fb_id']}");
while ($r = $row->fetch(PDO::FETCH_ASSOC)){
	//echo $r['voteTime'];
	$phpdate = strtotime( $r['voteTime'] );
	$mysqldate = date( 'Y-m-d H:i:s', $phpdate );
	if ($mysqldate >= $today_start_time && $mysqldate <= $today_end_time) {
		$vote_index = 1;
	}
}

//今日已投過票
if ($vote_index == 1) {
	echo "您今天投過票了!請明天再來投票~";
}
//今日未投過票
else {
	//update投票票數+1
	$db->exec("UPDATE `video` SET `vVotes` = `vVotes` + 1 WHERE `vId` = {$_SESSION['vote_number']} ");
	
	//insert vote record
	$db->exec("INSERT INTO `vote` values ({$_POST['fb_id']}, {$_SESSION['vote_number']}, '".$datetime."', '".$userIp."')");

	echo "投票成功!";
}

session_destroy();

?>