<?php
//error_reporting(E_ALL); 
//ini_set( 'display_errors','1');

$curl = curl_init( "https://public-api.wordpress.com/oauth2/token" );
curl_setopt( $curl, CURLOPT_POST, true );
curl_setopt( $curl, CURLOPT_POSTFIELDS, array(
    'client_id' => 35111,
    'redirect_uri' => 'http://ginsjuicesc.com/wp-notification-test-app.php',
    'client_secret' => 'GMVADzBhEMhoSq2jMFs1AygM8gCBo41ru7a5hVDrLNRMG4xb08I67vLxlVZK7I6a',
    'code' => $_GET['code'], // The code from the previous request
    'grant_type' => 'authorization_code'
) );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1);
$auth = curl_exec( $curl );
$secret = json_decode($auth);
$access_key = $secret->access_token;

$access_key = '61Wa%ZT#FSaagtj%3iKG(Y4isbW7I8nVhrWEj8Q%ilVdKvwcTsofqTk%P(wPwVwk';

$curl = curl_init( "https://public-api.wordpress.com/rest/v1/sites/68410604/stats/visits" );
curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Authorization: Bearer ' . $access_key ) );
$notifications = curl_exec( $curl );

header('Content-Type:application/json');
//echo $notifications;


