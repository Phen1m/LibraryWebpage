<?php
// No PHP code to execute, just HTML output
?>

<!-- HTML code -->
<!DOCTYPE html>
<html>
<head>
    <title>Library Management System - User Home Page</title>

    <link rel="stylesheet" href="2. Home_Page.css">

</head>
<body>

<h2><center>Admin Home Page</center></h2>

<div class="nav">
<a href="Maintenance.php">Maintenance</a>
<a href="5. Report.php">Reports</a>
<a href="3. Transactions.php">Transactions</a>

</div>

<h3><center>Product Details</center></h3>

<table>

  <tr>
    <th>Code No From</th>
    <th>Code No To</th>
    <th>Category</th>
  </tr>
  <tr>
    <td>SC(B/M)000001</td>
    <td>SC(B/M)000004</td>
    <td>Science</td>
  </tr>
  <tr>
    <td>EC(B/M)000001</td>
    <td>EC(B/M)000004</td>
    <td>Economics</td>
  </tr>
  <tr>
    <td>FC(B/M)000001</td>
    <td>FC(B/M)000004</td>
    <td>Fiction</td>
  </tr>
  <tr>
    <td>CH(B/M)000001</td>
    <td>CH(B/M)000004</td>
    <td>Children</td>
  </tr>
  <tr>
    <td>PD(B/M)000001</td>
    <td>PD(B/M)000004</td>
    <td>Personal Development</td>
  </tr>
</table>
<br>
<button class="button" onclick="window.location.href='Logged_Out.php';">Log Out</button>

</body>
</html>