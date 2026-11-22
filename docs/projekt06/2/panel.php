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
    <link rel="stylesheet" href="style.css">
</head>

<body><div class="page-wrapper">

    <div class="topbar">
        <div>Panel użytkownika</div>
        <div class="topbar-right">

            <span><?php echo htmlspecialchars($_SESSION['login']); ?></span>

            <form action="logout.php" method="post">
                <input type="submit" value="Wyloguj">
            </form>

        </div>

    </div>

    <div class="content">
        <p>Logowanie pomyślne</p>
    </div>
</div></body>
</html>