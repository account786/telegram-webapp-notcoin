<?php
// daily_task.php
require 'config.example.php';

$user_id = $_GET['user_id'] ?? 1;
$ad_number = $_GET['ad_number'] ?? 1;

$total_ads = 30;
$total_coins = 100;

// Placeholder: Random coin distribution logic
$coins_distribution = [];
$remaining = $total_coins;
for ($i = 0; $i < $total_ads; $i++) {
    if ($i == $total_ads - 1) {
        $coins_distribution[] = $remaining;
    } else {
        $coin = rand(1, min(5, $remaining - ($total_ads-$i-1)));
        $coins_distribution[] = $coin;
        $remaining -= $coin;
    }
}

$coins_earned = $coins_distribution[$ad_number-1];
echo "Ad $ad_number clicked, coins earned: $coins_earned";

// Redirect placeholder
$ad_link = "https://www.effectivegatecpm.com/h5i0v8cj?key=b84cdb24e61ca63ce399c60aed1494cb";
echo "<br><a href='$ad_link'>Go to Ad</a>";
?>