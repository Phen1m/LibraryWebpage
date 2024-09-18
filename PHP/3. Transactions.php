<?php
// No PHP code to execute, just HTML output
?>

<!-- HTML code -->
<!DOCTYPE html>
<html>
<head>
  <title>Available Reports</title>
  <link rel="stylesheet" href="3. Transactions.css">
  <style>

  </style>
</head>
<body>
<h1><center>Library Management System</center></h1>
<h2><center>Transactions</center></h2>

<table>

  <tr>
    <td><a href="4. Book_Available.php">
    Is book Available?</a></td>
  </tr>
  <tr>
    <td><a href="4. Issue_Book.php">Issue book?</a></td>
  </tr>
  <tr>
    <td><a href="4. Return_Book.php">Return book?</a></td>
  </tr>
  <tr>
    <td><a href="PayFine.php">Pay Fine?</a></td>
  </tr>

</table>

<button type="button" onclick="window.location.href='3. Transactions.php';">Back</button>
<button class="button" onclick="window.location.href='Logged_Out.php';">Log Out</button>

</body>
</html>