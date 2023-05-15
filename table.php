<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "example_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


<?php
// establish a connection to the database
$conn = mysqli_connect("localhost", "root", "", "example_db");

// check if the connection was successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// define a query to retrieve all the data from the users table
$sql = "SELECT * FROM sara";

// execute the query and store the result in a variable
$result = mysqli_query($conn, $sql);

// check if any rows were returned
if (mysqli_num_rows($result) > 0) {
  // start the HTML table
  echo "<table>";
  echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>country</th></tr>";

  // loop through each row of data and display it in a table row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["country"] . "</td></tr>";
  }

  // end the HTML table
  echo "</table>";
} else {
  echo "No data found";
}

// close the database connection
mysqli_close($conn);
?>
 
