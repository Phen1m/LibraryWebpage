<?php
// Include the database connection file
include('db_connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $book_name = isset($_POST['issue_book']) ? $_POST['issue_book'] : '';
    $author = isset($_POST['author']) ? $_POST['author'] : '';
    $issue_date = isset($_POST['issue_date']) ? $_POST['issue_date'] : '';
    $return_date = isset($_POST['return_date']) ? $_POST['return_date'] : '';

    // Prepare the SQL query to insert the data into the 'issued books' table
    $sql = "INSERT INTO `issued books` (`Enter Book Name`, `Enter Author`, `Issue Date`, `Return Date`) 
            VALUES (?, ?, ?, ?)";

    // Use prepared statements to avoid SQL injection
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssss", $book_name, $author, $issue_date, $return_date);

        // Execute the query
        if ($stmt->execute()) {
            echo "Book issue successfully recorded!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error in preparing the statement: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Management System - Issue Book</title>
  <link rel="stylesheet" href="4. Issue_Book.css">
  <style>

  </style>
</head>
<body>

  <h1>Library Management System</h1>
  <h2>Transactions</h2>
  <h3>Issue Book</h3>

  <div class="container">
    <table>

      <tr>
        <td><label for="issue_book">Book Name:</label></td>
        <td>
          <input type="text" id="issue_book" name="issue_book" placeholder="Enter Book Name" required>
        </td>
      </tr>
      <tr>
        <td><label for="author">Enter Author:</label></td>
        <td>
          <input type="text" id="author" name="author" placeholder="Enter Author Name" required>
        </td>
      </tr>
      <tr>
        <td><label for="issue_date">Issue Date:</label></td>
        <td>
          <input type="date" id="issue_date" name="issue_date" required>
        </td>
      </tr>
      <tr>
        <td><label for="return_date">Return Date:</label></td>
        <td>
          <input type="date" id="return_date" name="return_date" required>
        </td>
      </tr>
      <tr>
        <td colspan="2" class="center">
          <form method="post">
            <button type="submit" class="button button-green">Confirm</button>
            <button type="button" class="button" onclick="window.location.href='4. Issue_Book.php';">Cancel</button>
          </form>
        </td>
      </tr>
    </table>
  </div>

  <div class="center">
    <button type="button" class="button" onclick="window.location.href='3. Transactions.php';">Back</button>
    <button type="button" class="button" onclick="window.location.href='Logged_Out.php';">Log Out</button>
  </div>

</body>
</html>
