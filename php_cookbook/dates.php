<?php
    
//$now = date('r');
//$now = (new DateTime())->format('r');
$timestamp = mktime(month: 7, day: 4, year: 2024, hour: 12);
$aux = gettype($timestamp);
echo "{$timestamp} --> {$aux}";

//print (new DateTime())->format('Timezone');
$now = (new DateTime())->format('U');
$parsed = new DateTime("@{$now}");
print $parsed->format('l');

$date = (new DateTime('2023-07-04T12:00:00'))->format('U');
$anotherParsed = getdate($date);
print $anotherParsed['yday'];

//use of strtotime()
$natural = strtotime('3 days ago');
$nonat = new DateTime("@{$natural}");
print $nonat->format('r');

//date_parse()

?>