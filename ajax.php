<?php

session_start();
require_once 'fb_lib/src/Facebook/autoload.php';
//config app
$session = $_SESSION['facebook_access_token'];
$fb = new Facebook\Facebook([
    'app_id' => '243814652622492',
    'app_secret' => 'cca7580557d859126befa52bb95a6f5b',
    'default_graph_version' => 'v2.5',
        ]);
$arr = array("hello", "welcome", "bye");
//$i=$_POST['count'];
$i=0;



//$fb->post('me/feed', ['message' => 'hello'], $session);
$flag =1;
while($flag==1){
	$mess = $arr[$i];
	$linkData = [
	  'message' => $mess
	  ];
	 try {
	  // Returns a `Facebook\FacebookResponse` object
	   $fb->post('me/feed', $linkData, $session);
	 // var_dump($response);
	  // die;
	} catch(FacebookResponseException $e) {
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(FacebookSDKException $e) {
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
	}
	$i++;
	if($i>=3){
		$i=0;
		$flag=0;
	}
	echo "2";
sleep(6);
}
//var_dump($_SESSION['facebook_access_token']);
/* PHP SDK v5.0.0 */
/* make the API call */

?>