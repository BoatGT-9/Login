<link rel="stylesheet" href="style.css">
<?php
require 'Login.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = new Login('localhost', 'mydatabase', 'root', '');

    if ($login->authenticate($username, $password)) {
        echo '<p>Login successful!</p>'; 
        // Redirect or set session variable here
    } else {
        echo '<p>Login failed!</p>';
    }
}
?>