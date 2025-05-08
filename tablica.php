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