<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    if ($login == 'student' && $haslo == '12345') {
        $_SESSION['login'] = $login;
    } else {
        $blad = "Nieprawidłowy login lub hasło!";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Projekt 06-2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><div class="page-wrapper">

    <h1>Logowanie</h1>  

    <form action="" method="post">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" value="student">

        <br><br>

        <label for="haslo">Hasło:</label>
        <input type="password" id="haslo" name="haslo" value="12345">

        <br><br>

        <input type="submit" value="Zaloguj">
    </form>
<?php
if (isset($blad)) {
    echo $blad;
}
?>
</div></body>
</html>