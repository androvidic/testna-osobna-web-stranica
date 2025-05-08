<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Primjer PHP i HTML-a</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <a href="#"><img src="slike\Transparent.png" alt="NbAid" width="300px"></a>
<nav>
    <ul><a href="#">Početna stranica</a>
        <a href="#o_nama">O nama</a>
        <a href="#naseusluge">Naše usluge</a>
        <a href="#prijavniobrazac">Prijave</a>
        <a href="#footer">Kontakt</a>
    </ul>
</nav>
</header>
    <hr>
    <main>
    <div class="container hero" id="o_nama">
    <h1>
<?php
$time = date("H");

if ($time < 12) {
    $greeting = "Dobro jutro";
} elseif ($time < 18) {
    $greeting = "Dobar dan";
} else {
    $greeting = "Dobra večer";
}

echo $greeting . ", vam želimo - dobro došli na naš web";
?>
</h1> 
<br>
<div><p>Poslujemo od 2025. godine i činimo Vaš proces digitalizacije lakšim i bržim!
Budite dio digitalnog svijeta i učinite Vašu tvrtku spremnom na sve izazove!</p><br>
<p>U nastavku vas čekaju svi podaci naših tečajeva.
Stojimo Vam na raspolaganju za sva potencijalna pitanja.</p></div>
</div>
<hr>
<br>
<br>
<div class="container hero" id="naseusluge">
    <table> 
        <h3 style="margin: 10px; padding: 10px">Moduli tečajeva u NB-AID-u</h3>
        <tr> 
            <th>Modul tečaja u NB-AID-u</th>
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
<h3>Za prijavu na tečaj, molimo Vas unesite Vaše podatke u prijavni obrazac:</h3>
<br>
    <form method="post" action="autentichate.php" id="prijavniobrazac">
        <label for="name">Ime i prezime</label>
    <input type="text" name="ime" placeholder="Upišite svoje ime i prezime">
    <br>
    <br>
    <label for="mjesto">Mjesto stanovanja</label>
        <input type="text" name="mjesto" placeholder="Unesite svoje mjesto stanovanja">
    <br>
    <br>
    <label for="adresa">Adresa stanovanja</label>
        <input type="text" name="adresa" placeholder="Naziv ulice i kućni broj">
    <br>
    <br>
    <label for="oib">Vaš OIB </label>
        <input type="number" name="oib" placeholder="Unesite Vaš OIB">
    <br>
    <br>
    <label for="komentar">Komentar na gradivo</label>
        <textarea name="komentar" maxlength="500">Napišite svoj komentar na gradivo koje želite posebno naučiti</textarea>
    <br>
    <br>
<div class="radio-group">
    <label for="spol">Spol</label>
        <input type="radio" name="spol" value="m" checked>muški
    <input type="radio" name="spol" value="f">ženski
    <input type="radio" name="spol" value="n">ne želim odgovoriti
</div>
<br>
<label for="tecaj">Odaberite tečaj koji želite upisati</label>
    <select name="tecaj">
    <option value="linux">Linux priprema radne okoline</option>
    <option value="sql">Uvod u HTML	</option>
    <option value="php">Uvod u PHP</option>
    <option value="sql">Uvod u SQL</option>
    <option value="napredni php">Napredni PHP</option>
    <option value="laravel">Laravel</option>
</select>
<br>
<br>
    <input type="submit" value="Pošalji">

    </form>
</div>
    <br>
    <hr>
    </main>
<footer>
    <div class="footer-content" id="footer">
        <img src="slike/ANDRIJA%20VIDI%C4%86.jpg" alt="Developer je Andrija Vidić" title="Developer je Andrija Vidić" width="180" height="280"> 
        <p>Developer: Andrija Vidić</p>
        <a href="mailto:andrija.vidic3@gmail.com">Mail:andrija.vidic3@gmail.com</a>
        <a href="tel:+38516165165">Tel: 0993033672</a>
        <p>Copyright 2025. New Breed Assist in digital</p>
    </div>
</footer>
</body>
</html>

