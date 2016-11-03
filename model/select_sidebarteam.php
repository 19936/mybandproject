<?php

$q = ($_GET['q']);

 $con = mysqli_connect('localhost','mybandwesly','wesjor','MyBand');
 if (!$con) {
     die('Could not connect: ' . mysqli_error($con));
 }

 mysqli_select_db($con,"ajax_demo");
    
 $sql="SELECT * FROM spelers WHERE (positie LIKE '%$q%') or (title LIKE '%$q%')";
  
 $result2 = mysqli_query($con,$sql);

 echo "<table>
 <tr>
 <th>speler</th>";
 while($row = mysqli_fetch_array($result2)) {
     echo "<tr>";
     echo "<td><a href=" . $row['link'] . ">" . $row['title'] . "</a></td>";

     echo "</tr>";
 }
 echo "</table>";




