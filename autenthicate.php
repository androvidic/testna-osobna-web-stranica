<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['ime']) && !empty($_POST['mjesto']) && !empty($_POST['adresa']) && !empty($_POST['oib']) && !empty($_POST['komentar']) && !empty($_POST['spol']) && !empty($_POST['tecaj'])) {
    
    $imeIPrezime = $_POST['ime'];
    $mjesto = $_POST['mjesto'];
    $adresa = $_POST['adresa'];
    $oib = $_POST['oib'];
    $komentar = $_POST['komentar'];
    $spol = $_POST['spol'];
    $tecaj = $_POST['tecaj'];

    // Provjeri postoji li datoteka
    if (!file_exists('polaznici.json')) {
        file_put_contents('polaznici.json', json_encode([])); // Ako ne postoji, kreiraj je
    }

    $json_Polaznici = file_get_contents('polaznici.json');
    $polaznici = json_decode($json_Polaznici, true);

    $polaznici[] = [
        'imeIPrezime' => $imeIPrezime,
        'mjesto' => $mjesto,
        'adresa' => $adresa,
        'oib' => $oib,
        'komentar' => $komentar,
        'spol' => $spol,
        'tecaj' => $tecaj
    ];

    $polaznici_json = json_encode($polaznici, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    
    if (file_put_contents('polaznici.json', $polaznici_json) === false) {
        error_log("Greška pri zapisivanju u polaznici.json");
        echo json_encode(["status" => "error", "message" => "Podaci nisu uspješno spremljeni!"]);
    } else {
        echo json_encode(["status" => "success", "message" => "Hvala Vam na prijavi! New Breed tim će Vas kontaktirati uskoro."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Došlo je do greške, pokušajte ponovo."]);
}
?>