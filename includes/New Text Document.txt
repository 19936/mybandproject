<?php

function convertResultToArray($DBResult)

{

 $resultArray = array();
    //convert DBResult to array
while($row = $DBResult->fetch_assoc()) {

$resultArray[] = $row;


    }


    return $resultArray;

}
