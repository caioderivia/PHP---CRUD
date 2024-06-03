<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Delete User</title>
</head>
<body>
    <h2>Delete User</h2>
    <form action="delete_process.php" method="POST">
        <label for="id">User ID:</label>
        <input type="text" name="id" required><br>
        <input type="submit" value="Delete">
    </form>
</body>
</html>
