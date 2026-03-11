<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$user_agent = strtolower($user_agent);
$ios_link = "https://your-ios-link.com";
$android_link = "https://your-android-link.com";
$default_link = "https://website-chinh.com";
if (strpos($user_agent, 'iphone') !== false || 
    strpos($user_agent, 'ipad') !== false || 
    strpos($user_agent, 'ipod') !== false) {header("Location: $ios_link");} 
elseif (strpos($user_agent, 'android') !== false) {header("Location: $android_link");} 
else {header("Location: $default_link");}
exit;
?>
