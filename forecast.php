<?php
include_once "config.php";

$json = file_get_contents('https://api.forecast.io/forecast/' . $dsapi . '/' . $lat . ',' . $lon, false, stream_context_create(array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false))));
$obj = json_decode($json, true);
$fc = $obj['daily'];

date_default_timezone_set($obj['timezone']);
 
// Show today's forcast if it's before 5:00pm
if (date("G", time()) < 17) {
  $fs = 0; $fe = 6;
} else {
  $fs = 1; $fe = 7;
}
 
for ($x = $fs; $x < $fe; $x++) {
?>
  <div class="fc-day">
    <strong><?php echo date("D", $fc['data'][$x]['time']); ?></strong><br>
    <img src="images/<?php echo $fc['data'][$x]['icon']; ?>.svg" alt=""><br>
    <strong class="hi"><?php echo round($fc['data'][$x]['temperatureMax']); ?>&deg;</strong> | <strong class="lo"><?php echo round($fc['data'][$x]['temperatureMin']); ?>&deg;</strong>
  </div>
<?php } ?>

<div style="clear: both;"></div>