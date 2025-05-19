<?php include 'header.php'; ?>
    <main>
<section>
    <div class="container hero">
         <button onclick="downloadExcel()" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px;" class="container hero">Preuzmi kao Excel</button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    
    <script>
function downloadExcel() {
    let table = document.querySelector("table");
    let wb = XLSX.utils.book_new();
    let ws = XLSX.utils.table_to_sheet(table);
    
    XLSX.utils.book_append_sheet(wb, ws, "Polaznici");
    XLSX.writeFile(wb, "Polaznici.xlsx");
}

</script>
        <input type="text" id="filterInput" placeholder="Pretraži polaznike..." onkeyup="filterTable()" class="container hero">

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
<h3>Podaci o klijentima</h3>
    <table>
        <tr>
            <th>Ime i prezime</th>
            <th>E-mail</th>
            <th>Broj mobitela</th>
            <th>Mjesto stanovanja</th>
            <th>Adresa stanovanja</th>
            <th>OIB</th>
            <th>Komentar</th>
            <th>Spol</th>
            <th>Usluga</th>
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
    </section>
    </main>
        <?php include 'footer.php' ?>
