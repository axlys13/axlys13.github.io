<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Projekt 06-1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="page-wrapper"><form action="" method="post" id="formularz"><table>
    
<colgroup>
    <col style="width: 200px;">
    <col>
</colgroup>

<thead>
    <tr>
        <th colspan="2"><h1>Formularz</h1></th>
    </tr>
</thead>

<tbody>
    <tr>
        <!-- IMIE I NAZWISKO -->
        <td>
            <label>Imię i nazwisko*:</label>
            <label hidden for="imie">Imię*:</label>
            <lavel hidden for="nazwisko">Nazwisko*:</lavel>
        </td>
        <td>
            <input 
                type="text" 
                id="imie" name="imie" placeholder="Imię"
                value="<?php echo htmlspecialchars($_POST['imie'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
            > 
            <input 
                type="text" 
                id="nazwisko" name="nazwisko" placeholder="Nazwisko"
                value="<?php echo htmlspecialchars($_POST['nazwisko'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
            >
        </td>
    </tr>
    <tr>
        <!-- DATA URODZENIA -->
        <td>
            <label for="data-urodzenia">Data urodzenia*:</label>
        </td>
        <td>
            <input 
                type="date" 
                id="data-urodzenia" name="data-urodzenia"
                value="<?php echo htmlspecialchars($_POST['data-urodzenia'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
            >
        </td>
    </tr>
    <tr>
        <!-- EMAIL -->
        <td>
            <label for="email">E-mail*:</label>
        </td>
        <td>
            <input 
                type="email" 
                id="email" name="email" placeholder="name@example.com"
                value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"   
            >
        </td>
    </tr>
    <tr>
        <!-- TELEFON -->
        <td>
            <label for="telefon">Telefon*:</label>
        </td>
        <td>
            <select id="kod-tel-kraju" name="kod-tel-kraju">
                <option value=""     <?php if (($_POST['kod-tel-kraju'] ?? '') == '') echo 'selected'; ?> disabled>
                    --
                </option>
                <option value="+48"  <?php if (($_POST['kod-tel-kraju'] ?? '') == '+48') echo 'selected'; ?>>
                    🇵🇱 PL (+48)
                </option>
                <option value="+1"   <?php if (($_POST['kod-tel-kraju'] ?? '') == '+1') echo 'selected'; ?>>
                    🇺🇸 US (+1)
                </option>
                <option value="+44"  <?php if (($_POST['kod-tel-kraju'] ?? '') == '+44') echo 'selected'; ?>>
                    🇬🇧 UK (+44)
                </option>
                <option value="+49"  <?php if (($_POST['kod-tel-kraju'] ?? '') == '+49') echo 'selected'; ?>>
                    🇩🇪 DE (+49)
                </option>
                <option value="+33"  <?php if (($_POST['kod-tel-kraju'] ?? '') == '+33') echo 'selected'; ?>>
                    🇫🇷 FR (+33)
                </option>
                <option value="+380" <?php if (($_POST['kod-tel-kraju'] ?? '') == '+380') echo 'selected'; ?>>
                    🇺🇦 UA (+380)
                </option>
            </select> -
            <input 
                type="tel" 
                id="telefon" name="telefon" placeholder="123 456 789" title="Format: 123 456 789, podaj tylko cyfry"
                value="<?php echo htmlspecialchars($_POST['telefon'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
            >
        </td>
    </tr>
    <tr>
        <!-- ULICA -->
        <td>
            <label for="ulica">Ulica*:</label>
        </td>
        <td> 
            <input 
                type="text" 
                id="ulica" name="ulica"
                value="<?php echo htmlspecialchars($_POST['ulica'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
            >
        </td>
    </tr>
    <tr>
        <!-- NUMER DOMU I LOKALU -->
        <td>
            <label>Nr budynku*/lokalu:</label>
            <label hidden for="nr-budynku">Nr budynku*:</label>
            <label hidden for="nr-mieszkania">Nr mieszkania:</label>
        </td>
        <td>
            <input 
                type="text" 
                id="nr-budynku" name="nr-budynku" placeholder="12A"
                value="<?php echo htmlspecialchars($_POST['nr-budynku'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
            >
            / <input 
                type="number" 
                id="nr-mieszkania" name="nr-mieszkania" placeholder="34"
                value="<?php echo htmlspecialchars($_POST['nr-mieszkania'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
            >
        </td>
    </tr>
    <tr>
        <!-- KOD POCZTOWY -->
        <td>
            <label for="kod-pocztowy">Kod pocztowy*:</label>
        </td>
        <td>
            <input 
                type="text" 
                id="kod-pocztowy" name="kod-pocztowy" placeholder="00-000" title="Format: 00-000, podaj tylko cyfry"
                value="<?php echo htmlspecialchars($_POST['kod-pocztowy'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
            >
        </td>
    </tr>
    <tr>
        <!-- MIASTO -->
        <td>
            <label for="miasto">Miasto*:</label>
        </td>
        <td>
            <input 
                type="text" 
                id="miasto" name="miasto"
                value="<?php echo htmlspecialchars($_POST['miasto'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
            >
        </td>
    </tr>
    <tr>
        <!-- WOJEWÓDZTWO -->
        <td><label for="wojewodztwo">Województwo*:</label></td>
        <td>
            <select id="wojewodztwo" name="wojewodztwo">
                <option value=""            <?php if (($_POST['wojewodztwo'] ?? '') == '') echo 'selected'; ?> disabled>
                    - województwo -
                </option> 
                <option value="mazowieckie" <?php if (($_POST['wojewodztwo'] ?? '') == 'mazowieckie') echo 'selected'; ?>>
                    mazowieckie
                </option>
                <option value="lodzkie"     <?php if (($_POST['wojewodztwo'] ?? '') == 'lodzkie') echo 'selected'; ?>>
                    łódzkie
                </option>
                <option value="malopolskie" <?php if (($_POST['wojewodztwo'] ?? '') == 'malopolskie') echo 'selected'; ?>>
                    małopolskie
                </option>
                <option value="pomorskie"   <?php if (($_POST['wojewodztwo'] ?? '') == 'pomorskie') echo 'selected'; ?>>
                    pomorskie
                </option>
            </select>
        </td>
    </tr>
    <tr>
        <!-- PRAWO JAZDY -->
        <td>
            <label for="prawojazdy">Prawo jazdy:</label>
        </td>
        <td>
            <input 
                type="checkbox" 
                id="prawojazdy" name="prawojazdy"
                <?php if (isset($_POST['prawojazdy'])) echo 'checked'; ?>
            >
        </td>
    </tr>
    <tr>
        <!-- HASŁO -->
        <td>
            <label for="haslo">Hasło*:</label>
        </td>
        <td>
            <input 
                type="password" 
                id="haslo" name="haslo"
                value="<?php echo htmlspecialchars($_POST['haslo'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
            >
        </td>
    </tr>
    <tr>
        <!-- UWAGI -->
        <td>
            <label for="uwagi">Uwagi:</label>
        </td>
        <td>
            <textarea id="uwagi" name="uwagi" rows="5" cols="50"><?php 
                echo htmlspecialchars($_POST['uwagi'] ?? '', ENT_QUOTES, 'UTF-8');
            ?></textarea>
        </td>
    </tr>
    <tr>
        <td colspan="2", style="font-size:x-small;">
            *pola poprzednio wymagane
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: right;">
            <input type="button" id="wstawdane" value="Wstaw dane" hidden>
            <input type="reset" value="Reset">
            <input type="submit" value="Prześlij">
        </td>
    </tr>

</tbody>

</table></form></div>

</body>

</html>