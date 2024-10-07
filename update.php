<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name=':name', email=':email' WHERE id=:id";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':id', $id);

    if($stmt->execute()) {
        echo "Rekord został zaktualizowany";
    } else {
        echo "Błąd podczas usuwania  użytkownika";
    }
    $conn=null;
}
?>