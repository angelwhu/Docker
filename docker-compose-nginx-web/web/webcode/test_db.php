<?php
$con = mysql_connect("mysql_db","root","pass");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

// some code

mysql_select_db("test_db", $con);
$result = mysql_query("SELECT * FROM student");

while($row = mysql_fetch_array($result))
{
    echo $row['name'] . " " . $row['age'];
    echo "<br />";
}
mysql_close($con);
?>
