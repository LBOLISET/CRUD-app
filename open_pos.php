<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';
    // Getting the 'id' from the close_pos.html
    $position_id = $_POST["position_id"];

    // Updating the status to 'closed'
    $sql = "UPDATE positions SET job_status = 'Open' WHERE position_id = $position_id";
    $conn->query($sql);

    // 

    // Redirecting to the view_positions page 
    header("Location: fac_pos_page.php");
    exit();
}


$conn->close();
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