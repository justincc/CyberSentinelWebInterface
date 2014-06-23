<html>
<head></head>
<body>
<?php
  
$conn = mysql_connect("localhost", "root", "passw0rd");
mysql_select_db("eventrecorder", $conn);
$res = mysql_query("select * from Events", $conn);

# print_r($count);
echo "Got " . mysql_num_rows($res) . " events";

?>
</body>
</html>
