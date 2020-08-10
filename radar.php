<?php
include_once "config.php";

$lon = (!empty($_POST['ro'])) ? ($lon + $_POST['ro']) : $lon;
$rw = (!empty($_POST['rw'])) ? $_POST['rw'] : 350;
$rh = (!empty($_POST['rh'])) ? $_POST['rh'] : 350;
$rz = (!empty($_POST['rz'])) ? $_POST['rz'] : $zoom;
$recentten = time() - (time() % 600);
?>
<div style="width: <?php echo $rw; ?>px; height: <?php echo $rh; ?>px; background: url(https://api.mapbox.com/styles/v1/mapbox/satellite-streets-v9/static/<?php echo $lon; ?>,<?php echo $lat; ?>,<?php echo $rz; ?>,0,0/<?php echo $rw; ?>x<?php echo $rh; ?>?access_token=<?php echo $mbapi; ?>) center no-repeat; position: relative;">
  <img src="https://tilecache.rainviewer.com/v2/radar/<?php echo $recentten; ?>/512/<?php echo $rz; ?>/<?php echo $lat; ?>/<?php echo $lon; ?>/8/1_1.png" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);">
</div>