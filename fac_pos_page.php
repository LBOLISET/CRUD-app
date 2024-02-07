<?php
include 'db.php';

// Creating a table structure for displaying the values coming from the Database
$html = "<html><table style='width:100%' border='1px solid black'><tr>
    <th>position_id</th>
    <th>title</th>
    <th>job_description</th>
    <th>department</th>
    <th>required_skills</th>
    <th>hourly_rate</th>
    <th>application_instructions</th>
    <th>contact_information</th>
    <th>job_status</th>
  
  </tr>";

// Selecting everything from the jobposted table, selecting only Open job positions
$sql1 = "SELECT * FROM positions";
$result = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result) > 0) {
	    
	    while($row = mysqli_fetch_assoc($result)) {
			$html = $html."<tr><td>".$row['position_id']."</td><td>".$row['title']."</td><td>".$row['job_description']."</td><td>".$row['department']."</td>
            <td>".$row['required_skills']."</td><td>".$row['hourly_rate']."</td><td>".$row['application_instructions']."</td><td>".$row['contact_information']."</td>
            <td>".$row['job_status']."</td></tr>";
	    }
	} else {
	    echo "No results";
	}
	
	$html=$html."</table></html>";
	echo $html;

mysqli_close($conn);

?>
<html>
  <body>
    <form align="right" name="form1" method="post" action="login.html">
      <label>
      <input name="submit2" type="submit" id="submit2" value="log out">
      </label>
    </form>
  </body>
</html>