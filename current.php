<?php
include_once "config.php";

$json = file_get_contents('https://api.forecast.io/forecast/' . $dsapi . '/' . $lat . ',' . $lon, false, stream_context_create(array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false))));
$obj = json_decode($json, true);
$cc = $obj['currently'];
?>

<div class="two-col">
  <img src="images/<?php echo $cc['icon']; ?>.svg" alt="" class="icon">
  <strong><?php echo $cc['summary']; ?></strong><br>
  Feels like <?php echo round($cc['apparentTemperature']); ?>&deg;<br>
  Dew Point <?php echo round($cc['dewPoint']); ?>&deg;
</div>

<div class="two-col">
  <div class="temp"><?php echo round($cc['temperature']); ?>&deg;</div>

  <div id="wind">
    <div id="windarrow" style="transform: rotate(<?php echo $cc['windBearing']; ?>deg);"></div>
    <?php echo round($cc['windSpeed']); ?>
  </div>
</div>
 
<div style="clear: both;"></div>

<div class="lastup">
  <?php date_default_timezone_set($obj['timezone']); ?>
  Last updated on <?php echo date("F j, g:i A T", $cc['time']); ?>
</div>

<div class="alert">
  <?php if (array_key_exists('alerts', $obj)) echo $obj['alerts'][0]['title']; ?>
</div>