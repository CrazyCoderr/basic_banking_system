<?php
$host        = "host = ec2-52-73-199-211.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d8h0u8kh19dh36";
   $credentials = "user = qownjuhbawznbz password=368dd7b964487933e40c9d030fd89399ae054c69a15b3f210ad7eea2917bebde";

   $db = pg_connect( "$host $port $dbname $credentials"  );
if($db)
{echo "connected";}
else {echo "failed";}

$sql = "SELECT * FROM customers";
			$result = pg_query($db,$sql);
			if (pg_num_rows($result) > 0) {
			while($row = pg_fetch_assoc($result)) 
			{ echo "<tr><td>" . $row['username']. "</td><td>" . $row[email] . "</td><td>" . $row['current_balance']. "</td></tr>"; }
			echo "</table>";
			} else { echo "0 results"; }
			pg_close($db);


?>
