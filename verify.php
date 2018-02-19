<?php
$access_token = 'CInsuhF4UGJ+JdXX16ODZILpdQwgy62n/IKBFbOkajxwrmVk75l/fk3WVyZbJtMbxd4F4Tl8zWOQMPUI7XJFJqgJvzfualsx/FDFWhp7mU6ddeeowjqblW9DN0f1YdRLC5SP3+f9/oXMySAYLo0vGAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
