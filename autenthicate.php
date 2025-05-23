<?php
header('Content-Type: application/json'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['ime']) && !empty($_POST['mjesto']) && !empty($_POST['adresa']) && !empty($_POST['oib']) && !empty($_POST['komentar']) && !empty($_POST['spol']) && !empty($_POST['usluga'])) {

    $imeIPrezime = $_POST['ime'];
    $email = $_POST['email'];
    $brojMobitela = $_POST['brojMobitela'];
    $mjesto = $_POST['mjesto'];
    $adresa = $_POST['adresa'];
    $oib = $_POST['oib'];
    $komentar = $_POST['komentar'];
    $spol = $_POST['spol'];
    $usluga = $_POST['usluga'];

    
    if (!file_exists('polaznici.json')) {
        file_put_contents('polaznici.json', json_encode([])); 
    }

    $json_Polaznici = file_get_contents('polaznici.json');
    
    if ($json_Polaznici === false) {
        echo json_encode(["status" => "error", "message" => "Greška pri učitavanju datoteke!"]);
        exit;
    }

    $polaznici = json_decode($json_Polaznici, true);
    
    if ($polaznici === null && json_last_error() !== JSON_ERROR_NONE) {
        echo json_encode(["status" => "error", "message" => "Greška pri dekodiranju JSON-a: " . json_last_error_msg()]);
        exit;
    }

    $polaznici[] = [
        'imeIPrezime' => htmlspecialchars($imeIPrezime),
        'email' => filter_var($email, FILTER_SANITIZE_EMAIL),
        'brojMobitela' => htmlspecialchars($brojMobitela),
        'mjesto' => htmlspecialchars($mjesto),
        'adresa' => htmlspecialchars($adresa),
        'oib' => htmlspecialchars($oib),
        'komentar' => htmlspecialchars($komentar),
        'spol' => htmlspecialchars($spol),
        'usluga' => htmlspecialchars($usluga)
    ];

    $polaznici_json = json_encode($polaznici, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    if ($polaznici_json === false || file_put_contents('polaznici.json', $polaznici_json) === false) {
        echo json_encode(["status" => "error", "message" => "Podaci nisu uspješno spremljeni!"]);
    } else {
        echo json_encode(["status" => "success", "message" => "Hvala Vam na prijavi! New Breed tim će Vas kontaktirati uskoro."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Došlo je do greške, pokušajte ponovo."]);
}
?>