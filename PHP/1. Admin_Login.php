<?php
// Define the correct username and password
$correct_username = "Admin";
$correct_password = "LMS";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the input values match the correct username and password
    if ($username == $correct_username && $password == $correct_password) {
        // Redirect to User_Home_page.php
        header("Location: 2. Admin_Home_Page.php");
        exit;
    } else {
        // Display an error message
        $error_message = "Invalid username or password";
    }
}
?>

<!-- HTML code -->
<!DOCTYPE html>
<html>
<head>
<title>Library Management System - Admin Login</title>
<link rel="stylesheet" href="1. Login.css">
</head>
<body>
    <div class="nav">
        <button><a href="1. Admin_Login.php">Home</a></button>
        <button><a href="1. User_Login.php">User</a></button>
    </div>
    
    <div class="container">
    <h1>Library Management System</h1>
        <h2><center>Admin Login</center></h2>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST"> 
            <div>
                <label for="username">User ID:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="buttons-container">
                <button type="submit">Login</button>
                <button type="reset">Cancel</button>
                 
            </div>
        </form>
    </div>
</body>
</html>