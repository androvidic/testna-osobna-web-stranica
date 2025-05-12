 <?php include 'header.php'; ?>
    <main>
        <div class="hero-image"><img class="hero-overlay" src="slike/transparent.png" title="logotip" alt="NB AID logotip" style="width: 600px auto; height: auto; position: absolute;"></div>
        <section>
    <div class="container hero" id="o_nama">
    <h1 class="hero-text" style="text-align: center;">
<?php
$time = date("H");

if ($time < 12) {
    $greeting = "Dobro jutro";
} elseif ($time < 18) {
    $greeting = "Dobar dan";
} else {
    $greeting = "Dobra večer";
}

echo $greeting . ", vam želimo - dobro došli na našu web stranicu!";
?>
</h1> 
<br>
<br>
<div class="hero-text"><h3>Mi smo New Breed Assist in digital, obrt koji posluje od 2025. godine i čini Vaš proces digitalizacije lakšim i bržim! Bavimo se raznim digitalnim uslugama kojima je svrha modernizacije poslovanja naših klijenata. <br><br>
Budite dio digitalnog svijeta i učinite Vašu tvrtku spremnom na sve izazove! Naše usluge su vam na raspolaganju i spremni smo pomoći Vam u svakom trenutku. Naš tim profesionalaca je tu za sva potencijalna pitanja, spreman pružiti Vam uslugu kakvu zaslužujete.</h3><br>
    </div>
    <div class="hero-text" id="naseusluge">
        <h3>Uz naše usluge u digitalizaciji, Vaša tvrtka spremna je za moderno poslovanje! <br><br>Pružite nam svoje povjerenje i zajedno se lansirajmo u novu digitalnu dimenziju Vašeg poslovanja!</h3>
        <br>
        </div>
</section>
<section id="vizual">
    <div class="container hero">
    <img src="slike/vizual.png" width="60%" height="auto"  alt="vizual" title="vizual" style="border-radius: 10px;">
</div>
</section>
<section>
<div class="container hero">
    <h2 class="hero-text" style="text-align: center;">Naši partneri iz Algebre nude Vam pomoć pri učenju programiranja u PHP jeziku!</h2>
    <br>
    <h3 class="hero-text">Izaberite svoj modul i lansirajte svoju karijeru u programiranju! Postanite spremni za moderno tržište rada!</h3>
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
</section>
    <section>
<div class="container hero">
<h3 class="hero-text" style="text-align: center;">Za prijavu na tečaj programiranja, molimo Vas unesite Vaše podatke u prijavni obrazac:</h3>
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


