<?php
//Date and time with DateTime class
//setting time-zone
date_default_timezone_set('Australia/Sydney');
$date = date('Y-m-d H:i:s');
echo $date;

//DateTime class
date_default_timezone_set('Europe/Paris');
$currentDateTime = new DateTime();
var_dump($currentDateTime);

echo "\n\n==============\nDate formatting\n==============\n";
echo ($currentDateTime->format('d-M-Y')) . "\n";

echo "\n\n==============\nDateTime class formatting method\n==============\n";
$myDate = '20, 05, 2017';
$dateFromString = DateTime::createFromFormat('d, m, Y', $myDate);//specify format amd var
print_r($dateFromString);

echo "\n\n==============\nDateTime class DateTimeZone subclass\n==============\n";
$date = new DateTime(null, new DateTimeZone('Europe/London'));
print_r($date);


echo "\n\n==============\nDateTime objects\n==============\n";
$startDate = new DateTime('2017-09-21 15:30:00');
$endDate = new DateTime('2017-09-27 15:30:00');
$currentDate = new DateTime();
$dateString = $currentDate->format('d-M-Y');

if($startDate < $endDate) {
    echo "Offer is available\n\n";
} else {
    echo "Offer closed\n\n";
}

$output = ($currentDate > $startDate && $currentDate > $endDate) ? "Offer expired\n" : "Offer valid\n";
echo $dateString . ': ' . $output;

echo "\n\n==============\nDateInterval Class\n==============\n";
echo "Format: P = period; T = time\n";
echo "P Format: Y, M, D, W\n";
echo "T Format: H, M, S\n";
$dateIntervalExample = <<<DATE
    Format: P_T_
    P2Y = two years
    PT2M = two minutes
    P4Y4M = four years four months
    P6YT6M = Size years six minutes
DATE;
echo $dateIntervalExample . "\n\n";

echo "\n\n==============\nDateInterval set expiry date\n==============\n";
$startDate = new DateTime('2017-09-21 15:30:00');
$endDate = clone $startDate;
$endDate->add(new DateInterval('P1Y2M'));//set date interval to end in 1 year 2 months
$beforeDate = clone $startDate;
$beforeDate->sub(new DateInterval('P2M'));//set date interval for 2 months ago
print_r($endDate);
print_r($beforeDate);

echo "\n\n==============\nDatePeriod class\n==============\n";
$startDate = new DateTime('2017-01-01');
$endDate = new DateTime('2017-12-31');
$interval = new DateInterval('P1M');
$recurrencies = 5;

$period = new DatePeriod($startDate, $interval, $endDate);

foreach ($period as $date) {
    echo $date->format('Y-m-d') . "\n";
}

$firstFiveMonths = new DatePeriod($startDate, $interval, $recurrencies);

foreach ($firstFiveMonths as $date) {
    echo $date->format('Y-m') . "\n";
}