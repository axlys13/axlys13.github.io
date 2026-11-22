<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    if ($login == 'admin' && $haslo == '12345') {
        $_SESSION['login'] = $login;
        header("Location: panel.php");
        exit;
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
    <div class="topbar"></div>  

    <div class="login-container">
        <div class="login-box">

            <h1>Logowanie</h1>

                <form action="" method="post">
                    <label for="login">Login:</label>
                    <input type="text" id="login" name="login" value="admin">

                    <br><br>

                    <label for="haslo">Hasło:</label>
                    <input type="password" id="haslo" name="haslo" value="12345">

                    <br><br>
                    
                    <input type="submit" value="Zaloguj" style="justify">
                    
                    <?php
                        if (isset($blad)) {
                            echo "<br><br>";
                            echo $blad;
                        }
                    ?>
                </form>
        </div>
    </div>

</div></body>
</html>