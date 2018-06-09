<html>
<body>
<?php
session_start();
require_once 'fb_lib/src/Facebook/autoload.php';
//config app
$fb = new Facebook\Facebook([
'app_id' => '243814652622492',
'app_secret' => 'cca7580557d859126befa52bb95a6f5b',
'default_graph_version' => 'v2.5',
]);
$helper = $fb->getRedirectLoginHelper();
try {
$accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
// When Graph returns an error
echo 'Graph returned an error: ' . $e->getMessage();
exit;
}
if (isset($accessToken)) {
  $_SESSION['facebook_access_token'] =(string)$accessToken;
   //echo $_SESSION['facebook_access_token'];
}

?>
<script type="text/javascript">
	
</script>
</body>
</html>