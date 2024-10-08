  <?php
  $servername = "localhost";
  $username = "root";
  $password = "sempak123";
  $dbname = "php";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT id, firstname, lastname FROM MyGuests";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    </tr>";

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
      <td>" . $row["id"]. "</td>
      <td>" . $row["firstname"]. "</td>
      <td>" . $row["lastname"]. "</td>
      </tr>";
    }

    echo "</table>";
  } else {
    echo "<p>No results found.</p>";
  }

  mysqli_close($conn);
  ?>