<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViewUsers</title>
    <link rel="stylesheet" href="style/table.css">
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Full Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Address</th>
        </tr>

        <?php
        require_once("processes.php");
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        try {
            $stmt1 = $pdo->prepare("SELECT id, full_name, username, email, address FROM users");
            $stmt1->execute();

            // Set the fetch mode to associative
            $stmt1->setFetchMode(PDO::FETCH_ASSOC);

            while ($row = $stmt1->fetch()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['full_name'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "</tr>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
    </table>
</body>
</html>
