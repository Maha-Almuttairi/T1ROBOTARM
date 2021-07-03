<?php

$conn = mysql_connect('localhost','root','','robot_arm_control');

$sql = mysql_query($conn,"SELECT * FROM robot_arm_control WHERE id=(SELECT MAX(id) FROM robot_arm_control)");

if($sql){	

   echo nl2br("Fetched data successfully ! \n"); 
   echo "<br>";
   
   while($row = mysqli_fetch_assoc($sql)) {

	  echo "servo1="; echo ($row['servo1']);
	  echo "<br>";
	  echo "servo2="; echo ($row['servo2']);
	  echo "<br>";
	  echo "servo3="; echo ($row['servo3']);
	  echo "<br>";
	  echo "servo4="; echo ($row['servo4']);
	  echo "<br>";
	  echo "servo5="; echo ($row['servo5']);
	  echo "<br>";
	  echo "servo6="; echo ($row['servo6']);
	  echo "<br>";
	  echo "Status="; echo ($row['status']);	  
}
}

else{
	
	echo "Error.";
}

mysqli_close($conn);

?>