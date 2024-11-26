<?php
$playlistFile = 'm3u.txt';

if (file_exists($playlistFile)) {
    $playlists = [];
    $lines = file($playlistFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); // Read the file, ignore empty lines

    foreach ($lines as $line) {
        list($name, $url) = explode(',', $line); // Split each line by comma
        $playlists[] = ['name' => trim($name), 'url' => trim($url)];  // Trim whitespace
    }

    header('Content-Type: application/json'); // Send JSON data
    echo json_encode($playlists);
} else {
    http_response_code(404); // File not found
    echo json_encode(['error' => 'Playlist file not found']);
}
?>
