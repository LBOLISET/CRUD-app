<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your database (update with your database details)
    include 'db.php';

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username= $_POST["username"];
    $password= $_POST["password"];
    $user_type= $_POST["user_type"];

    // Insert data into users table
    $query = "INSERT INTO users (username, password, user_type) VALUES ('$username', '$password', '$user_type')";

    // Execute the query and handle errors
    if (mysqli_query($conn, $query)) {
        ?>
        <style>
            .success-message {
                font-family: Arial, sans-serif;
                font-size: 24px; /* Changed font size to H1 */
                color: green;
                text-align: center; /* Center alignment */
            }

            .login-link {
                font-family: Arial, sans-serif;
                font-size: 14px;
                color: blue;
                text-decoration: none;
                display: block; /* Make the link a block element */
                text-align: center; /* Center alignment */
            }
        </style>
        <?php
        echo "<h1 class='success-message'>Registration successful!</h1>";
        echo "<p><a href='login.html' class='login-link'>Click here to login</a></p>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
