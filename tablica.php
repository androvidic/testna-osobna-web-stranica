<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Obrada</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container hero">
        <input type="text" id="filterInput" placeholder="Pretraži polaznike..." onkeyup="filterTable()">

<script>
function filterTable() {
    let input = document.getElementById("filterInput").value.toUpperCase();
    let table = document.querySelector("table");
    let tr = table.getElementsByTagName("tr");

    for (let i = 1; i < tr.length; i++) {
        let td = tr[i].getElementsByTagName("td");
        let rowMatch = false;
        for (let j = 0; j < td.length; j++) {
            if (td[j] && td[j].innerHTML.toUpperCase().indexOf(input) > -1) {
                rowMatch = true;
            }
        }
        tr[i].style.display = rowMatch ? "" : "none";
    }
}
</script>
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
        <?php include 'footer.php' ?>
</body>
</html>