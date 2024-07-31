<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="Home style.css">
</head>
<body>
    <h2>Login Form</h2>
    
    <div class="login-container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password" required><br><br>

        <button type="submit">Login</button>
    </form>
</div><br><br>

<linksign><h3>New User?<a href="http://127.0.0.1:5500/Home%20Page.html">Create account</a></h3></linksign>

<div class="button-container">
    <a href="http://localhost/assignment/read.php">
    <button class="cta-button">View All Data</button>
</a>
<a href="http://localhost/assignment/modify.php">
    <button class="cta-button">Modify Data</button>
</a>
  </div>
</body>
</html>

<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "assignment";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Save user information into the database
    $sql = "INSERT INTO userlogin (email , password) VALUES ('$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Login successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>