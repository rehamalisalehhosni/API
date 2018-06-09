<html>
    <head>
        <script type="text/javascript" src="jquery-1.11.2.js"></script>
    </head>
    <body>

        <?php
        session_start();
        require_once 'fb_lib/src/Facebook/autoload.php';
//config app
        $fb = new Facebook\Facebook([
            'app_id' => '152399478758223',
            'app_secret' => '93989d0c79018d201d07d7e490eea12d',
            'default_graph_version' => 'v2.5',
        ]);
        if (!isset($_SESSION['facebook_access_token'])) {
            $helper = $fb->getRedirectLoginHelper();
            $permissions = ['email', 'user_likes', 'publish_actions']; // optional
            $loginUrl = $helper->getLoginUrl('http://localhost/ApI/facebook.php', $permissions);
            echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
            try {
                $accessToken = $helper->getAccessToken();
            } catch (Facebook\Exceptions\FacebookResponseException $e) {
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }
        } else {
            ?>
            <script type="text/javascript">
                $(document).ready(function () {
                    var i = 0;
                    rep(i);
                });

                function rep(i) {
                    $.ajax({
                        url: "ajax.php",
                        method: 'post',
                        data: {"count": i},
                        success: function (response) {
                            console.log(response);
                            if(i<3){
                            	i=0
                            }else{
                              i++;
                            }
                            //rep(i);
                        },
                        complete: function () {
                            console.log("Complete ");
                        },
                        async: true
                    });
                }

            </script>

<?php }
?>

    </body>
</html>
