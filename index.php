 <?php include 'header.php'; ?>
    <main>
        <div class="hero-image"><img class="hero-overlay" src="slike/transparent.png" title="logotip" alt="NB AID logotip"></div>
        <section>
    <div class="container hero" id="o_nama">
    <h1 class="container hero" style="color: darkslategray">
<?php
$time = date("H");

if ($time < 12) {
    $greeting = "Dobro jutro";
} elseif ($time < 18) {
    $greeting = "Dobar dan";
} else {
    $greeting = "Dobra večer";
}

echo $greeting . ", vam želimo - dobro došli na naš web!";
?>
</h1> 
<br>
<br>
<div class="container hero"><h2 style="color: darkslategray">Poslujemo od 2025. godine i činimo Vaš proces digitalizacije lakšim i bržim!</h2><br>
<h2 style="color : darkslategray">Napravite korak prema digitalizaciji vašeg poslovanja!</h2><br>
<h3 style="color: darkslategray">Budite dio digitalnog svijeta i učinite Vašu tvrtku spremnom na sve izazove!
</h3><br>
<h4 style="font-style: italic;color: darkslategray">Naše usluge su vam na raspolaganju. Naš tim profesionalaca je tu za sva potencijalna pitanja.</h4></div>
<br>
<br>
    </div>
    <div class="container hero" id="naseusluge">
        <h2 style="color: darkslategray" class="container hero">Uz naše usluge ste na korak do digitalizacije Vašeg poslovanja!</h2>
        <br>
    <img class = "container hero" src="slike/Vizual.png" alt="vizual s detaljima" title="Detalji tecajeva">
</div>
</section>
<section>
<div class="container hero">
    <h2 class="container hero" style="color: darkslategray">Naši partneri iz Algebre nude Vam pomoć pri učenju programiranja u PHP jeziku!</h2>
    <br>
    <h3 class="container hero" style="color: darkslategray">Izaberite svoj modul i lansirajte svoju karijeru u programiranju!</h3>
    <table> 
        <h3 style="margin: 10px; padding: 10px">Moduli tečajeva programiranja u Algebri</h3>
        <tr> 
            <th>Modul tečaja u Algebri-u</th>
             <th>Trajanje modula u satima</th>
             <th>Cijena modula</th>
        </tr> 
            <tr> 
                <td><em>Linux - priprema radne okoline</em></td> 
                <td><strong>15</strong></td>
                <td><strong>100€</strong></td>
        </tr> 
        <tr> 
            <td><em>Uvod u HTML</em></td>
             <td><strong>25</strong>
             <td><strong>100€</strong></td>
        </tr>
        <tr> 
            <td><em>Uvod u PHP</em></td>
             <td><strong>20</strong></td> 
             <td><strong>150€</strong></td>    
        </tr> 
        <tr> 
            <td><em>Uvod u SQL</em></td>
             <td><strong>15</strong></td>   
             <td><strong>200€</strong></td>  
        </tr> 
        <tr> 
            <td><em>Napredni PHP</em></td>
             <td><strong>25</strong></td>  
             <td><strong>220€</strong></td>   
        </tr> 
        <tr> <td><em>Laravel</em></td>
             <td><strong>25</strong></td> 
             <td><strong>300€</strong></td>    
        </tr> 
    </table> 
</div>
    <br>
    <br>
<div class="container hero">
<h3 class="container hero" style="color: darkslategray">Za prijavu na tečaj programiranja, molimo Vas unesite Vaše podatke u prijavni obrazac:</h3>
<br>
    <form method="post" action="autenthicate.php" id="prijavniobrazac">
        <label for="name">Ime i prezime</label>
    <input type="text" name="ime" placeholder="Upišite svoje ime i prezime" required>
    <br>
    <br>
    <label for="mjesto">Mjesto stanovanja</label>
        <input type="text" name="mjesto" placeholder="Unesite svoje mjesto stanovanja" required>
    <br>
    <br>
    <label for="adresa">Adresa stanovanja</label>
        <input type="text" name="adresa" placeholder="Naziv ulice i kućni broj" required>
    <br>
    <br>
    <label for="oib">Vaš OIB </label>
        <input type="number" name="oib" placeholder="Unesite Vaš OIB" required pattern="[0-9]{11}">
    <br>
    <br>
    <label for="komentar">Komentar na gradivo</label>
        <textarea name="komentar" maxlength="500" required>Napišite svoj komentar na gradivo koje želite posebno naučiti</textarea>
    <br>
    <br>
<div class="radio-group">
    <label for="spol">Spol</label>
        <input type="radio" name="spol" required value="m" checked>muški
    <input type="radio" name="spol" value="f">ženski
    <input type="radio" name="spol" value="n">ne želim odgovoriti
</div>
<br>
<label for="tecaj">Odaberite tečaj koji želite upisati</label>
    <select name="tecaj" required>
    <option value="Linux priprema radne okoline">Linux priprema radne okoline</option>
    <option value="Uvod u HTML">Uvod u HTML	</option>
    <option value="Uvod u PHP">Uvod u PHP</option>
    <option value="Uvod u SQL">Uvod u SQL</option>
    <option value="Napredni PHP">Napredni PHP</option>
    <option value="Laravel">Laravel</option>
</select>
<br>
<br>
    <input type="submit" value="Pošalji">
    </form>
</div>
</section>
    <br>
    </main>
<?php include 'footer.php' ?>


