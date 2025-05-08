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
        header('Location: ./index.php');
    }
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Obrada</title>
</head>
<body>
    <div class="container hero">
    <table>
        <caption style="padding: 10px; margin: 10px;"><h3>Podaci o polaznicima</h3></caption>
        <tr>
            <th>Ime i prezime</th>
            <th>Mjesto stanovanja</th>
            <th>Adresa stanovanja</th>
            <th>OIB</th>
            <th>Komentar</th>
            <th>Spol</th>
            <th>Tecaj</th>
        </tr>
    <?php       
        $json_Polaznici = file_get_contents('polaznici.json');
        $polaznici = json_decode($json_Polaznici, true);

    foreach ($polaznici as $polaznik) {
            echo '<tr>';
                foreach ($polaznik as $vrijednost) {
                    echo '<td>' . $vrijednost . '</td>';
                }
            echo '</tr>';
        }
    ?>
    </table>
    </div>
</body>
</html>