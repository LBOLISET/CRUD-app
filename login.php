<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include "db.php";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $user_type = $_POST["user_type"];

  

    // Query to check if the provided username and password exist in the users table
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'"; 
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Valid login credentials, redirect based on role
        switch ($user_type) {
            case "Faculty":
                header("Location: fac_emp_open_entry.html");
                break;
            case  "Employee":
                header("Location: emp_landing_page.php");
                break;
            case "Staff":
                header("Location: fac_emp_open_entry.html");
                break;
            default:
                echo ("INVALID ROLE");
                break;
        }
    } else {
        // Invalid login credentials, show error message
        echo "Invalid username or password.";
    }

    $conn->close();
}
?>

