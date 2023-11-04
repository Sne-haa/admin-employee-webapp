<?php
// Include the database connection file
require_once 'db.php';

// Fetch admin details
$adminSql = "SELECT * FROM admins";
$adminResult = $db->query($adminSql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Details</title>
</head>
<body>
    <h1>Admin Details</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php
        if ($adminResult->num_rows > 0) {
            while ($row = $adminResult->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "No admin details found.";
        }
        ?>
    </table>
</body>
</html>

