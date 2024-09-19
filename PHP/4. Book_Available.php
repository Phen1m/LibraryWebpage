<?php
// Include the database connection file
include('db_connect.php');

// Initialize variables
$book_name = '';
$author_name = '';
$results = [];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_name = isset($_POST['book_name']) ? $_POST['book_name'] : '';
    $author_name = isset($_POST['author']) ? $_POST['author'] : '';

    // If no input is given, select all books
    if (empty($book_name) && empty($author_name)) {
        $sql = "SELECT `Book Name`, `Author Name`, `Serial Number`, `Available` FROM `book available`";
        $stmt = $conn->prepare($sql);
    } else {
        // If input is given, search for matching books
        $sql = "SELECT `Book Name`, `Author Name`, `Serial Number`, `Available` 
                FROM `book available` 
                WHERE `Book Name` LIKE ? OR `Author Name` LIKE ?";
        $stmt = $conn->prepare($sql);

        // Use wildcards to allow partial matches
        $book_name = "%" . $book_name . "%";
        $author_name = "%" . $author_name . "%";
        $stmt->bind_param("ss", $book_name, $author_name);
    }

    // Execute query
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch all results into an array
    $results = $result->fetch_all(MYSQLI_ASSOC);

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Management System</title>
  <link rel="stylesheet" href="4. Book_Available.css">
  <style>

  </style>
</head>
<body>
  <div class="container">
    <h1>Library Management System</h1>
    <h2>Transactions</h2>
    <h4>Book availability</h4>

    <div class="form-container">
      <div class="form-group">
        <form method="post">
          <label for="Book Name">Book Name:</label>
          <input type="text" name="book_name" id="book_name" value="<?php echo htmlspecialchars($book_name); ?>">

          <label for="author">Enter Author:</label>
          <input type="text" name="author" id="author" value="<?php echo htmlspecialchars($author_name); ?>">

          <input type="submit" value="Search">
        </form>
      </div>
    </div>

    <!-- Book Results -->
    <?php if (!empty($results)): ?>
      <h4>Book Results</h4>
      <!-- One form wrapping the radio buttons and submit/reset buttons -->
      <form action="4. Issue_Book.php" method="post">
        <table>
          <tr>
            <th>Book Name</th>
            <th>Author Name</th>
            <th>Serial Number</th>
            <th>Available</th>
            <th>Select to issue the book</th>
          </tr>
          <?php foreach ($results as $row): ?>
          <tr>
            <td><?php echo htmlspecialchars($row['Book Name']); ?></td>
            <td><?php echo htmlspecialchars($row['Author Name']); ?></td>
            <td><?php echo htmlspecialchars($row['Serial Number']); ?></td>

            <!-- Check if 'Available' is 'Y' or 'N' -->
            <td><?php echo $row['Available'] === 'Y' ? 'Available' : 'Not Available'; ?></td>

            <!-- Display radio button if book is available -->
            <td class="radio-button">
              <?php if ($row['Available'] === 'Y'): ?>
                <input type="radio" name="issue_book" value="<?php echo htmlspecialchars($row['Serial Number']); ?>">
              <?php else: ?>
                Not available for issue
              <?php endif; ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>

        <!-- Submit and Reset buttons inside the form -->
        <div class="center">
          <input type="submit" value="Issue">
          <input type="reset" value="Reset">
        </div>
      </form>
    <?php else: ?>
      <p></p>
    <?php endif; ?>

    <!-- Back and Log Out buttons aligned to the center -->
    <div class="center">
      <button type="button" onclick="window.location.href='3. Transactions.php';">Back</button>
      <button type="button" onclick="window.location.href='Logged_Out.php';">Log Out</button>
    </div>
  </div>
</body>
</html>
