<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "sql_injection";

$conn = new mysqli($servername, $username, $password, $db);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection simulaion</title>
</head>

<body>
    <h1>Login</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="username">
            Username: <input type="text" name="username" id="username">
        </label>
        <!--
            Try admin as a username
        -->
        <br>
        <br>
        <label for="password">
            Password: <input type="password" name="password" id="password">
        </label>
        <!-- 
            To test SQL injection try the password between parentheses, exactly the same so even the space after -- : (' or 1=1-- )
            |_ The -- is to ignore the rest of the query (Commented)
        -->
        <br>
        <br>
        <input type="submit" value="Login">
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["password"])) {
    $password = $_POST["password"];
    $username = $_POST["username"];

    $query = "SELECT * FROM admindashboard WHERE username = '$username' AND pass= '$password'";

    /*  
        echo $query;
        SELECT * adminDashboard WHERE username = 'admin' AND pass = '' or 1=1-- '
        |_ We have username = 'admin' AND pass = '' that gives False than we have 1=1 that gives always True, so False OR True equal to True.
           The query will be SELECT * adminDashboard WHERE True so will have access to all.
    */

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<br>" . "Welcome admin";
    } else {
        echo "<br>" . "User not found";
    }
}

?>