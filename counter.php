<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

$file = 'counter.txt';  // Path to the counter file

// Check if the file exists
if (file_exists($file)) {
    // Read the file content (current count)
    $count = file_get_contents($file);
    $count = intval($count) + 1;  // Increment the count
} else {
    // If the file doesn't exist, start the count at 1
    $count = 1;
}

// Write the updated count back to the file
file_put_contents($file, $count);

// Display the count on the page
echo "You are visitor #$count";
?>

