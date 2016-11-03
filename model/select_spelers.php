<?php
$start_item = (($page_nr-1) * ITEMS_PER_TEAMPAGE);

$result = $mysqli->query("SELECT * FROM spelers LIMIT " . $start_item . ", " . ITEMS_PER_TEAMPAGE);

$result = convertResultToArray($result);

