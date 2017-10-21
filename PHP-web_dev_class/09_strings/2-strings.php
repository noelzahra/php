<?php

$url = 'http:/www.icemalta.com';

$secure = substr_replace($url, 'https', 0, 4);

echo $secure;

$line1 = 'Name,Email,Phone Number';
$line2 = 'Noel,noel@gmail.com,79798002';

$line1Exploded = explode(',', $line1);
$line1Exploded2 = explode(',', $line2);
var_dump($line1Exploded);
var_dump($line1Exploded2);

$host = "192.168.1.10\t443\t4000";
$parts = sscanf($host, "%s\t%d\t%d");
var_dump($parts);

$liveUrl = "https://www.caaratcasino.com";
$stagingUrl = "https://staging.caaratcasino.com";

$url = $liveUrl;

$position = strpos($url, 'staging.');
$isStaging = $position !== false;
var_dump($isStaging);

$url2 = "https://www.caaratcasino.com";
$part = strstr($url2, '.com/');
$path = substr($part, 4);
echo $path;


$newUrl = "http://www.caratcasino.com";

//$info = parse_url($newUrl);
//var_dump($info);
//$path2 = $info['path'];
//echo $path2;

var_dump (parse_url($newUrl));

$description = 'tel: 070 568 66855';
$regex = '/070(\W?\d){8}/';

$output = preg_match($regex, $description);
var_dump($output);

//echo timestamp;

$date = '20-09-2017';
$pattern = '/(\d{1,2})-(\d{1,2})-(\d{4})/';
preg_match($pattern, $date, $matches);
var_dump($matches);

$day = $matches[1];
$month = $matches[2];
$year = $matches[3];

echo "Original date: $date\n";
echo "US date: " . "$month-$day-$year";