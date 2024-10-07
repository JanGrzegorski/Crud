<?php
    include 'db.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);

    if($stmt->execute()) {
        echo "Użytkownik został usunięty";
    } else {
        echo "Błąd podczas usuwania użytkownika";
    }
    $conn=null;
?>