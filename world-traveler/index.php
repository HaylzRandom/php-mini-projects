<?php

$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo $riel;
echo "\n";
echo $kyat;
echo "\n";
echo $krones;
echo "\n";
echo $lek;

$riel_to_usd = 0.00026;
$kyat_to_usd = 0.00057;
$krones_to_usd = 0.00032;
$lek_to_usd = 0.00002;

$usd_from_riel = $riel * $riel_to_usd;

echo "\nYour $riel riel were exchanged for $usd_from_riel usd.";

$usd_from_kyat = $kyat * $kyat_to_usd;

echo "\nYour $kyat kyat were exchanged for $usd_from_kyat usd.";

$usd_from_krones = $krones * $krones_to_usd;

echo "\nYour $krones krones were exchanged for $usd_from_krones usd.";

$usd_from_lek = $lek * $lek_to_usd;

echo "\nYour $lek lek were exchanged for $usd_from_lek usd.";

$final_amount = $usd_from_riel + $usd_from_kyat + $usd_from_krones + $usd_from_lek - 4;

$dollars_only = $final_amount % 1000000000;

$change = $final_amount - $dollars_only;

$rounded_change = $change * 100;

$rounded_change %= 100;

$rounded_change /= 100;

$final_amount = $dollars_only + $rounded_change;

echo "\nAfter deducting the transactions fees, you'll be recieving $final_amount usd.";
