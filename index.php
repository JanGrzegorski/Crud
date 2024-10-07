<?php
    include 'db.php';
    $sql = "SELECT id, name, email, created_at FROM users";
    $stmt = $conn->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista użytkowników</title>
</head>
<body>
        <h2>Lista użytkowników</h2>
        <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Imie</th>
                        <th>Email</th>
                        <th>Data utworzenia</th>
                        <th>Akcje</th>
                    </tr>
                    <?php 
                        if(count($users) > 0) {
                            foreach($users as $user) {
                                echo "<tr>";
                                echo "<td>" . $user["id"] . "</td>";
                                echo "<td>" . $user["name"] . "</td>";
                                echo "<td>" . $user["email"] . "</td>";
                                echo "<td>" . $user["created_at"] . "</td>";
                                echo "<td>
                                <a href='edit.php?id=".$user["id"]."'>Edytuj</a>
                                <a href='delete.php?id=".$user["id"]."'>Usun</a>
                                </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Brak użytkowników</td></tr>";
                        }
                    ?>
                </table>
            </div>
            <br>
            <a href="create.php">Dodaj nowego użytkownika</a>
</body>
</html>

<?php
$conn=null;
?>