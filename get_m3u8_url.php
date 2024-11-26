<?php

// Check if it's an AJAX call for the m3u8 URL
if (isset($_GET['_']) && $_GET['_'] === "get_m3u8_url") {
    $m3u8Url = "https://streamingengine.rtvplus.tv/rtvpluslive/rtvpluslive.stream/chunklist_w2015195144.m3u8"; // Replace with your actual URL or logic
    // IMPORTANT! Security measures (e.g., authentication) should go here.
    header('Content-Type: application/vnd.apple.mpegurl');
    echo $m3u8Url;
    exit; // Stop further processing for AJAX requests.
}

?>
