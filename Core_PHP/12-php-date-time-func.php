<?php
// Set the default timezone (optional, modify as needed)
date_default_timezone_set("Asia/Kolkata");

// Display current date and time in different formats
echo "Current date and time (YYYY-MM-DD HH:MM:SS): " . date("Y-m-d H:i:s") . "<br>";
echo "Current date and time (MM/DD/YYYY): " . date("m/d/Y") . "<br>";
echo "Current date (Day, Month DD, YYYY): " . date("l, F d, Y") . "<br>";
echo "Current time (12-hour format): " . date("h:i A") . "<br>";
echo "Current time (24-hour format): " . date("H:i:s") . "<br>";
echo "ISO 8601 format (YYYY-MM-DDTHH:MM:SS): " . date("c") . "<br>";
echo "Unix timestamp: " . time() . "<br>";
?>