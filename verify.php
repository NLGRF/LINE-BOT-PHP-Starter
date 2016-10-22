<?php
$access_token = 'wNoFtAlsIHO5YwgHJrwGmT8dPK0TQdOnOVJzp98XA2OiK4NL6JWbFW6GUE3Q+4tr1KnpxqR44chCEKPPKMqgmuaIq+2ZL39jIl/EWSM9XK/OWU+AwZuYVbUe9zcQVr4eWA1TjjFVIwU7m9X2/Si2jAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;