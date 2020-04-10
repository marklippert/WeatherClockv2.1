<?php
$dsapi = "YOUR DARKSKY API LEY";
$mbapi = "YOUR MAPBOX API KEY";

$lat = "43.0615430"; // Your latitude
$lon = "-87.8994390"; // Your longitude
$lon_offset1 = "-0.15"; // Shift marker left or right on radar 1
$lon_offset2 = "0"; // Shift marker left or right on radar 2
$zoom = 9; // Zoom level of radar 1
$zoom2 = 5; // Zoom level of radar 2

$current_refresh = 15 * 60000; // minutes multiplied by 60000 (milliseconds per minute)
$radar_refresh = 10 * 60000; // minutes multiplied by 60000 (milliseconds per minute)
$forecast_refresh = 60 * 60000; // minutes multiplied by 60000 (milliseconds per minute)

$darkmode = "on"; // For light mode, comment out this line
?>