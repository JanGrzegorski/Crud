<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj użytkownika</title>
</head>
<body>
    <h2>Dodaj użytkownika</h2>
    <form action="store.php" method="post">
        <label for="name":>Imie:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email":>Email:</label><br>
        <input type="text" id="email" name="email" required><br>
        <input type="submit" value="Dodaj">
</form>
</body>
</html>