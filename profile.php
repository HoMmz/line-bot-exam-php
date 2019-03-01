<?php


$access_token = 'axJZMAAw9ic8k1iryDW2lA3fxX5BT3JDcWA9u5czapzbZmsyVOI2ez9Y5zfglXYVPjS28u039uXb7rxLiIyQe4yRJw2bDULiTV0Glda24C7Sk4Qa02Gjwmwg8fy4iwnxdWqj7Fb09akjZgW6AcHbDAdB04t89/1O/w1cDnyilFU=';

$userId = 'Ubed0eac93fb327b5f52222e6e57b5fc5';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

