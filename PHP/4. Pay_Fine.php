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
  <h4>Pay Fine</h4>
  <table>

    <tr>
      <td><a href="4. Book_Available.php">Is book available? </a></td>

      <td>
        <form method="post">
          
          
        </form>
      </td>
    </tr>

    <tr>
      <td> <a href="4. Issue_Book.php"> Issue book? </a></td>
      <td colspan="2">
        <form method="post">



          
        </form>
      </td>
    </tr>

    <tr>
      <td><a href="4. Return_Book.php"> Return book? </a></td>
      <td colspan="2">
        <form method="post">

        </form>
      </td>
    </tr>

    <tr>
      <td> Pay fine? </td>
      <td colspan="2">
        <form method="post">

        <label for="return_book">Enter Book Name:</label>
          <input type="text" name="return_book" id="return_book"><br>
        
        <label for="author">Enter Author:</label>
          <input type="text" name="author" id="author"><br>

        <label for="serial_no">Serial No:</label>
          <input type="text" name="serial_no" id="serial_no"><br>

        <label for="issue_date">Issue Date:</label>
          <input type="date" name="issue_date" id="issue_date"><br>        

        <label for="return_date">Return Date:</label>
          <input type="date" name="return_date" id="return_date"><br> 
          
        <label for="actual_date">Actual Return Date:</label>
          <input type="date" name="actual_date" id="actual_date"><br> 

        <label for="fine">Fine Calculated:</label>
          <input type="number" name="fine" id="fine" value="0" style="text-align: center;"><br> 

        <label for="fine_paid">Fine Paid:</label>
          <input type="checkbox" name="fine_paid" id="fine_paid" unchecked><br> 
          
          
          
        <input type="submit" onclick="window.location.href='4. Issue_Book.php';" value="Cancel">
        <input type="submit" value="Confirm">
          
        </form>
      </td>
    </tr>

  </table>

  <button type="button" onclick="window.location.href='3. Transactions.php';">Back</button>
  <button type="button" onclick="window.location.href='Logged_Out.php';">Log Out</button>
</body>
</html>