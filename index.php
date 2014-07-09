<html>
<head></head>
<body>
<?php
  
$conn = mysql_connect("localhost", "root", "passw0rd");
mysql_select_db("eventrecorder", $conn);

$res = mysql_query("select * from UserRegionEvents", $conn);

# print_r($count);
echo "<h1>Summary</h1>\n";
echo "Got " . mysql_num_rows($res) . " events.\n";

$res = mysql_query("select UserName, date(DateTime) as Date from UserRegionEvents where Type=\"login\" group by date(DateTime);");

echo "<h1>Logins</h1>\n";

while ($row = mysql_fetch_assoc($res))
{
  echo "User " . $row['UserName'] . " on " . $row['Date'] . "</br>\n";
}

?>
</body>
</html>
