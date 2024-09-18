<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Management System</title>
  <link rel="stylesheet" href="4. Below_Transactions.css">
</head>
<body>
  <h1>Library Management System</h1>
  <h2>Transactions</h2>
  <h4>Book availability</h4>
  <table>

    <tr>
      <td>Is book available?</td>

      <td>
        <form method="post">
          
          <label for="Book Name">Book Name:</label>
          <input type="text" name="book_name" id="book_name"><br></div>

          <label for="author">Enter Author:</label>
          <input type="text" name="author" id="author"><br>

          <input type="submit" value="Search">
          
        </form>
      </td>
    </tr>

    <tr>
      <td><a href="4. Issue_Book.php"> Issue book? </a></td>
      <td>
        <form method="post">
          
        </form>
      </td>
    </tr>

    <tr>
      <td><a href="4. Return_Book.php"> Return book? </a></td>
      <td>
        <form method="post">
          
        </form>
      </td>
    </tr>

    <tr>
      <td><a href="4. Pay_Fine.php"> Pay fine? </a></td>
      <td>
        <form method="post">
          
        </form>
      </td>
    </tr>

  </table>

  <button type="button" onclick="window.location.href='3. Transactions.php';">Back</button>
  <button type="button" onclick="window.location.href='Logged_Out.php';">Log Out</button>
</body>
</html>