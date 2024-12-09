<?php
// Set the timezone to ensure correct time
date_default_timezone_set('UTC');

// Check if the cookie 'last_visit' is set
if (isset($_COOKIE['last_visit'])) {
    $last_visit = $_COOKIE['last_visit']; // Retrieve the cookie value
    echo "Your last visit was " . $last_visit . ".";
} else {
    echo "This is your first visit.";
}

// Update the cookie with the current date and time
$current_visit = date("j F Y H:i");
setcookie("last_visit", $current_visit, time() + (86400 * 30), "/"); // Cookie valid for 30 days
?>
