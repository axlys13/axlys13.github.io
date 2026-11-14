const imie = document.getElementById("imie")
const nazwisko = document.getElementById("nazwisko")
const data = document.getElementById("data-urodzenia")
const email = document.getElementById("email")
const telefon = document.getElementById("telefon")
const ulica = document.getElementById("ulica")
const nrbudynku = document.getElementById("nr-budynku")
const nrmieszkania = document.getElementById("nr-mieszkania")
const kodpocztowy = document.getElementById("kod-pocztowy")
const miasto = document.getElementById("miasto")
const haslo = document.getElementById("haslo")
const uwagi = document.getElementById("uwagi")
// IMIE
imie.minLength=2;
imie.maxLength=50;
imie.addEventListener("input", function() {
    if (imie.value.trim() === "" || !(/[\p{L}]+/u.test(imie.value))) {
        imie.setCustomValidity("Imię nie może być puste.");
    } else if (/[ \-'][ \-']/g.test(imie.value) || /^[ \-']|[ \-']$/.test(imie.value)) {
        imie.setCustomValidity("Znaki spacja, apostrof i myślnik nie mogą występować na początku, końcu, ani obok siebie.")
    } else if (!/[\p{L} '\-]+/u.test(imie.value)) {
        imie.setCustomValidity("Nieprawidłowe znaki. \nDozwolone znaki: litery, myślnik, spacja, apostrof");
    } else {
        imie.setCustomValidity("");
    }
});
// NAZWISKO
nazwisko.minLength=2;
nazwisko.maxLength=50;
nazwisko.addEventListener("input", function() {
    if (nazwisko.value.trim() === "" || !(/[\p{L}]+/u.test(nazwisko.value))) {
        nazwisko.setCustomValidity("Nazwisko nie może być puste.");
    } else if (/[ \-'][ \-']/g.test(nazwisko.value) || /^[ \-']|[ \-']$/.test(nazwisko.value)) {
        nazwisko.setCustomValidity("Znaki spacja, apostrof i myślnik nie mogą występować na początku, końcu, ani obok siebie.")
    } else if (!/[\p{L} '\-]+/u.test(imie.value)) {
        nazwisko.setCustomValidity("Nieprawidłowe znaki. \nDozwolone znaki: litery, myślnik, spacja, apostrof");
    } else {
        nazwisko.setCustomValidity("");
    }
});

// DATA URODZENIA
const dzisiaj = new Date();
dzisiaj.setDate(dzisiaj.getDate() - 1);

const maxDate = dzisiaj.toLocaleDateString("en-CA");

data.max = maxDate;

// TELEFON
telefon.maxLength=11;
telefon.pattern="[0-9]{3} [0-9]{3} [0-9]{3}";
telefon.addEventListener("input", function() {
    let value = telefon.value;

    value = value.replace(/\D/g, ""); //usuwam nie-cyfry
    value = value.slice(0,9); // ucinam do 9

    telefon.value = value.replace(/(\d{3})(?=\d)/g, "$1 ").slice(0,11); // dodaje spacje co trzy
});

// ULICA
ulica.minLength=2;
ulica.maxLength=50;
ulica.addEventListener("input", function() {
    if (ulica.value.trim() === "" || !(/[\p{L}]+/u.test(ulica.value))) {
        ulica.setCustomValidity("Imię nie może być puste.");
    } else if (/[ \-'][ \-']/g.test(ulica.value) || /^[ \-']|[ \-']$/.test(ulica.value)) {
        ulica.setCustomValidity("Znaki spacja, apostrof i myślnik nie mogą występować na początku, końcu, ani obok siebie.")
    } else if (!/[\p{L} '\-]+/u.test(ulica.value)) {
        ulica.setCustomValidity("Nieprawidłowe znaki. \nDozwolone znaki: litery, myślnik, spacja, apostrof");
    } else {
        ulica.setCustomValidity("");
    }
});

// NR BUDYNKU
nrbudynku.minLength=1
nrbudynku.maxLength=5
nrbudynku.pattern="[1-9][0-9]{0,2}[a-zA-Z]?"
nrbudynku.title="Numer budynku w formacie liczba w zakresie 1-999 oraz opcjonalnie litera."

// NR MIESZKANIA
nrmieszkania.min=1
nrmieszkania.max=100

// KOD POCZTOWY
kodpocztowy.addEventListener("input", function() {
    let value = kodpocztowy.value;

    value = value.replace(/\D/g, ""); //usuwam nie-cyfry
    value = value.slice(0,5); // ucinam do 9

    kodpocztowy.value = value.replace(/(\d{2})(?=\d)/, "$1-").slice(0,6); // dodaje myslnik po dwoch
})

// MIASTO
miasto.minLength=2;
miasto.maxLength=50;
miasto.addEventListener("input", function() {
    if (miasto.value.trim() === "" || !(/[\p{L}]+/u.test(miasto.value))) {
        miasto.setCustomValidity("Imię nie może być puste.");
    } else if (/[ \-'][ \-']/g.test(miasto.value) || /^[ \-']|[ \-']$/.test(miasto.value)) {
        miasto.setCustomValidity("Znaki spacja, apostrof i myślnik nie mogą występować na początku, końcu, ani obok siebie.")
    } else if (!/[\p{L} '\-]+/u.test(miasto.value)) {
        miasto.setCustomValidity("Nieprawidłowe znaki. \nDozwolone znaki: litery, myślnik, spacja, apostrof");
    } else {
        miasto.setCustomValidity("");
    }
});

// HASŁO
haslo.minLength=8;
haslo.maxLength=50;
haslo.addEventListener("input", function() {
    if (haslo.value.trim() === "") {
        haslo.setCustomValidity("Hasło nie może być puste.");
    } else if (haslo.value.length < 8) {
        haslo.setCustomValidity("Hasło jest za krótkie.")
    } else if (!/[A-ZĄĆĘŁŃÓŚŹŻ]/g.test(haslo.value)) {
        haslo.setCustomValidity("Brakuje dużej litery.")
    } else if (!/[a-ząćęłńóśźż]/g.test(haslo.value)) {
        haslo.setCustomValidity("Brakuje małej litery.")
    } else if (!/\d/g.test(haslo.value)) {
        haslo.setCustomValidity("Brakuje cyfry.")
    } else if (!/[\w]+/.test(haslo.value)) {
        haslo.setCustomValidity("Nieprawidłowe znaki. \nDozwolone znaki: cyfry, litery, znaki specjalne");
    } else {
        haslo.setCustomValidity("");
    }
});


// UWAGI
uwagi.maxLength=200

document.getElementById("wstawdane").addEventListener("click", function(){
    imie.value="Anna-Maria Kai'Sa"
    nazwisko.value="Świątek-Piątek O'Connor"
    data.value="2026-11-04"
    email.value="me@example.com"
    telefon.value="123 123 123"
    ulica.value="Porzeczkowa"
    nrbudynku.value="10B"
    nrmieszkania.value="10"
    kodpocztowy.value="12-345"
    miasto.value="Poznań"

    uwagi.value="Tekst o długości 200 znaków: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed condimentum leo, ac feugiat est. Suspendisse erat ipsum, porttitor eu est eu, accumsan mollis nisi. D"

})