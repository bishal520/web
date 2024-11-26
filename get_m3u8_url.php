<?php

// Check if it's an AJAX call for the m3u8 URL
if (isset($_GET['_']) && $_GET['_'] === "get_m3u8_url") {
    $m3u8Url = "https://github.com/aniketda/iptv2050/blob/main/iptv"; // Replace with your actual URL or logic
    // IMPORTANT! Security measures (e.g., authentication) should go here.
    header('Content-Type: application/vnd.apple.mpegurl');
    echo $m3u8Url;
    exit; // Stop further processing for AJAX requests.
}

?>
