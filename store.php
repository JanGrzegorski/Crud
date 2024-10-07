<?php
include 'db.php'; //Połączenie z bazą danych

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);

    if ($stmt->execute()){
        echo "Nowy uzytkownik zostal dodany";
    } else{
        echo "Błąd podczas dodawania użytkownika";
    }

    $conn = null;
}
?>