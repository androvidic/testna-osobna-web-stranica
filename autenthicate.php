<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['ime']) && !empty($_POST['mjesto']) && !empty($_POST['adresa']) && !empty($_POST['oib']) && !empty($_POST['komentar']) && !empty($_POST['spol']) && !empty($_POST['tecaj']) &&isset($_POST['ime']) && isset($_POST['mjesto']) && isset($_POST['adresa']) && isset($_POST['oib']) && isset($_POST['komentar']) && isset($_POST['spol']) && isset($_POST['tecaj']) 
)
    {
        $imeIPrezime = $_POST['ime'];
        $mjesto = $_POST['mjesto'];
        $adresa = $_POST['adresa'];
        $oib = $_POST['oib'];
        $komentar = $_POST['komentar'];
        $spol = $_POST['spol'];
        $tecaj = $_POST['tecaj'];

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
        file_put_contents('polaznici.json', $polaznici_json);
        header('Location: index.php');
    }
    ?>