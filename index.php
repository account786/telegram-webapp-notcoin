<?php
// index.php
require 'config.example.php'; // পরে config.php rename করবেন

// Example user data (replace with DB fetch)
$user_id = 1; 
$not_coin_balance = 0;
$ads_done = 0;
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Telegram Web App Dashboard</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<h2>Not Coins Balance: <?php echo $not_coin_balance; ?></h2>
<h3>Daily Ads Progress: <?php echo $ads_done; ?>/30</h3>

<?php if ($ads_done < 30): ?>
    <a href="daily_task.php?user_id=<?php echo $user_id; ?>&ad_number=<?php echo $ads_done+1; ?>">
        <button>Watch Next Ad</button>
    </a>
<?php else: ?>
    <p>All daily ads completed!</p>
<?php endif; ?>

<a href="daily_bonus.php?user_id=<?php echo $user_id; ?>">
    <button>Claim Daily Bonus</button>
</a>
<script src="assets/script.js"></script>
</body>
</html>