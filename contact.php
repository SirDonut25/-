<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = htmlspecialchars($_POST["Име"]);
    $familiya = htmlspecialchars($_POST["Фамилия"]);
    $telefon = htmlspecialchars($_POST["Телефон"]);
    $email = htmlspecialchars($_POST["email"]);
    $zapitvane = htmlspecialchars($_POST["Запитване"]);

    $to = "stani.mashov@abv.bg";
    $subject = "Ново запитване от контактната форма";
    $message = "Име: $ime\nФамилия: $familiya\nТелефон: $telefon\nEmail: $email\nЗапитване:\n$zapitvane";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Благодарим! Вашето запитване беше изпратено успешно.";
    } else {
        echo "Възникна проблем при изпращането. Моля, опитайте отново.";
    }
} else {
    echo "Невалиден достъп.";
}
?>