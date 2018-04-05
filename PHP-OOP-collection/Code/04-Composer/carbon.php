<?php
require_once 'vendor/autoload.php';

use Carbon\Carbon;

printf("Now: %s\n", Carbon::now());

$tomorrow = Carbon::tomorrow()->toDateString();
printf("Tomorrow: %s\n", $tomorrow);