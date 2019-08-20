<?php
$q = $_GET["q"];

$con = mysqli_connect('localhost','root','','ushtrime');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM personat WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>Emri</th>
<th>Mbiemri</th>
<th>Mosha</th>
<th>Vendbanimi</th>
<th>Profesioni</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Emri'] . "</td>";
  echo "<td>" . $row['Mbiemri'] . "</td>";
  echo "<td>" . $row['Mosha'] . "</td>";
  echo "<td>" . $row['Vendbanimi'] . "</td>";
  echo "<td>" . $row['Profesioni'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>