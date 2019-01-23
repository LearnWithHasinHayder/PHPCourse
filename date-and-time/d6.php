<?php
$dateTimeZoneTaipei = new DateTimeZone("Asia/Kolkata");
$dateTimeZoneJapan = new DateTimeZone("Asia/Dhaka");

// Create two DateTime objects that will contain the same Unix timestamp, but
// have different timezones attached to them.
$dateTimeTaipei = new DateTime("2012-07-08 11:14:15", $dateTimeZoneTaipei);
$dateTimeJapan = new DateTime("2012-07-08 11:14:15", $dateTimeZoneJapan);

// Calculate the GMT offset for the date/time contained in the $dateTimeTaipei
// object, but using the timezone rules as defined for Tokyo
// ($dateTimeZoneJapan).
$diff = date_diff( $dateTimeJapan, $dateTimeTaipei);
echo $diff->format("%H hours %i minutes");
echo $diff->invert;