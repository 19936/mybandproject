<?php

$q = ($_GET['q']);

 $con = mysqli_connect('localhost','mybandwesly','','MyBand');
 if (!$con) {
     die('Could not connect: ' . mysqli_error($con));
 }

 mysqli_select_db($con,"ajax_demo");
    
 $sql="SELECT * FROM wedstrijden WHERE (thuisteam LIKE '%$q%') or (uitteam LIKE '%$q%') or (datum LIKE '%$q%')";
  ;
  
 $result2 = mysqli_query($con,$sql);

 echo "<table>
 <tr>
 <th>Wedstrijden</th>";
 while($row = mysqli_fetch_array($result2)) {
     echo "<tr>";
     echo "<td><a href=" . $row['link'] . ">" . $row['thuisteam'] . " - " . $row['uitteam'] . "</a></td>";

     echo "</tr>";
 }
 echo "</table>";
