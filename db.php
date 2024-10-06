<?php
$servername = "localhost";
$username = "root"; //domyślnie "root" dla lokalnych serverów
$password = "";
$dbname = "my_database";

try{
    $conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username,$password);
    // Ustawienie trybu raportowania błędów PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Połączenie nieudane: " . $e->getMessage(); 
}
?>
