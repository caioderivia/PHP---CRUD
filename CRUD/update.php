<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Update User</title>
</head>
<body>
    <h2>Update User</h2>
    <form action="update_process.php" method="POST">
        <label for="id">User ID:</label>
        <input type="text" name="id" required><br>
        <label for="username">New Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">New Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
