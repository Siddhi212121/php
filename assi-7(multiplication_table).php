

<html>
<head>
  <title>Print Table of a Number</title>
</head>
<body>

  <h1>Print Table of a Number</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="number" name="number" placeholder="Enter a number">
    <input type="submit" name="submit" value="Print Table">
  </form>

  <?php

// Define a function to print the table of a number
function printTable($number) {
  echo "Multiplication table of $number is:<br>";
  for ($i = 1; $i <= 10; $i++) {
    echo "$number x $i = " . ($number * $i) . "<br>";
  }
}

// Get the number input from the user
$number = $_POST['number'];

// Check if the number input is empty
if (empty($number)) {
  echo "Please enter a number.";
} else {
  // Call the function to print the table of the number
  printTable($number);
}

?>

</body>
</html>