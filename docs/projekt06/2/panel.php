<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Projekt 06-2 - zalogowano</title>
</head>
<body>

    <h1>Witaj, <?php echo htmlspecialchars($_SESSION['login']); ?>!</h1>

    <p>Udało Ci się zalogować.</p>

    <form action="logout.php" method="post">
        <input type="submit" value="Wyloguj">
    </form>
</body>
</html>