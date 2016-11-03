<?php 
$start_item = (($page_nr-1) * ITEMS_PER_SCHEMAPAGE);

$sql = "SELECT * FROM wedstrijden LIMIT " . $start_item . ", " . ITEMS_PER_SCHEMAPAGE;
$result = $mysqli->query($sql);

$result = convertResultToArray($result);