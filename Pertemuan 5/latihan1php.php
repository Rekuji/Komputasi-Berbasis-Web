
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4"></div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $fname = htmlspecialchars($_POST['fname']);
      $lname = htmlspecialchars($_POST['lname']);
      $gender = htmlspecialchars($_POST['gender']);
      $hobbies = isset($_POST['hobby']) ? $_POST['hobby'] : [];
  
      echo "Nama: " . $fname . "<br>";
      echo "Email: " . $lname . "<br>";
      echo "Jenis Kelamin: " . $gender . "<br>";
      echo "Hobby: " . implode(", ", $hobbies) . "<br>";
      }
    ?>
  </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>