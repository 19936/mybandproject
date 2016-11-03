<?php
$start_item = (($page_nr-1) * ITEMS_PER_NEWSPAGE);

$sql = "SELECT * FROM myband LIMIT " . $start_item . ", " . ITEMS_PER_NEWSPAGE;
$result = $mysqli->query($sql);

$result = convertResultToArray($result);