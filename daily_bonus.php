<?php
// daily_bonus.php
require 'config.example.php';

$user_id = $_GET['user_id'] ?? 1;

// Placeholder: random bonus
$bonus = rand(1,10);
echo "Daily bonus for user $user_id: $bonus Not Coins!";
?>