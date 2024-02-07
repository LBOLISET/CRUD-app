<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    include 'db.php';
    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Insert new position
        $title = $_POST["title"];
        $job_description = $_POST["job_description"];
        $department = $_POST["department"];
        $required_skills = $_POST["required_skills"];
        $hourly_rate = $_POST["hourly_rate"];
        $application_instructions = $_POST["application_instructions"];
        $contact_information = $_POST["contact_information"];

        $sql = "INSERT INTO positions (title, job_description, department, required_skills, hourly_rate, application_instructions, contact_information) VALUES ('$title', '$job_description', '$department', '$required_skills', $hourly_rate, '$application_instructions', '$contact_information')";

        if ($conn->query($sql) === TRUE) {
            echo "Position posted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        mysqli_close($conn);
    }
}
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