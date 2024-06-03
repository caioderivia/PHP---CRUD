<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Read Users</title>
</head>
<body>
    <h2>User List</h2>
    <?php
    require 'config.php';

    $sql = "SELECT id, username, created_at FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Username: " . $row["username"]. " - Created At: " . $row["created_at"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</body>
</html>
