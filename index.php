 <?php include 'header.php'; ?>
    <main>
        <div class="hero-image"><img class="hero-overlay" src="slike/transparent.png" title="logotip" alt="NB AID logotip" style="width: 600px auto; height: auto; position: absolute;"></div>
        <section>
    <div class="container hero">
        <div class="hero-text" id="o_nama">
    <h1 style="text-align: center;">
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
</h1> <br><br>
<h3>Mi smo New Breed Assist in digital, obrt koji posluje od 2025. godine i čini Vaš proces digitalizacije lakšim i bržim!
 Bavimo se raznim digitalnim uslugama kojima je svrha modernizacije poslovanja naših klijenata.</h3><br>
<p>Budite dio digitalnog svijeta i učinite Vašu tvrtku spremnom na sve izazove! Naše usluge su vam na raspolaganju i spremni smo pomoći Vam u svakom trenutku. Naš tim profesionalaca je tu za sva potencijalna pitanja, spreman pružiti Vam uslugu kakvu zaslužujete.
Uz naše usluge u digitalizaciji, Vaša tvrtka spremna je za moderno poslovanje! Pružite nam svoje povjerenje i zajedno se lansirajmo u novu digitalnu dimenziju Vašeg poslovanja!</p>
<br>
<h3>NAŠA MISIJA:</h3>
<br>
<p>Omogućiti svim malim i srednjim tvrtkama maksimalno individualno prilagođen  proces kompletne digitalizacije tvrtke. Tim procesom cilj je osloboditi poduzetnike nagomilanog stresa radi rada "pješke" i omogućiti njima i njihovim zaposlenicima da se fokusiraju na "prave stvari" i ulaganjem svog dodatnog vremena u iste rastu i razvijaju se.</p>
<br><br>
<h3>NAŠA VIZIJA:</h3>
<br>
<p>Postati regionalni lider među tvrtkama za digitalno posredništvo, usluge i virtualnu pomoć. Davanjem svog maksimuma dobiti povjerenje svojih klijenata i u konačnici gledati njihovo zadovoljstvo.</p>
    </div>
</section>
<section id="vizual">
    <div class="container hero">
    <div class="hero-text">
        <h2 style="text-align: center;">Riječ direktora New Breed Assist in digital-a</h2><br><br>
        <p>Moje ime je Andrija Vidić, magistar sam ekonomije, diplomirao na Ekonomskom fakultetu u Osijeku na smjeru poduzetništvo 2017. godine. <br>Imam 33 godine i već 13 godina radim u realnom sektoru, počevši  od manje zahtjevnih poslova asistencije direktoru manjeg poduzeća, do rukovodeće pozicije Finance & CRM managera u tvrtki EDukoS Centar Znanja d.o.o. gdje vodim mnoge procese za preko 70 ljudi u timu.

<br><br>Nakon skupljene gomile iskustva u bliskom radu s malim i srednjim poduzetnicima te nakon 13 godina rada za druge odlučujem se 2025. godine na pokretanje vlastitog poslovnog pothvata.

Time ostvarujem svoj dječački san, spajanja poduzetništva s digitalnim alatima i radom s tehnologijom. Otkad znam za sebe, zainteresiran sam za načine funkcioniranja stvari oko sebe i logiku povezivanja stvari radi olakšanja funkcioniranja određenih procesa. <br><br>Moderne tehnološke i digitalne alate vidim kao izvrsnu priliku da sebi kao i ljudima oko sebe olakšamo i smanjimo nepotreban stres oko stvari koje sustavi i softveri mogu jednostavno i brzo činiti za nas.

Svojim budućim klijentima mogu obećati maksimalan angažman i trud u radu na tome da budu zadovoljni, sretni i u suradnji s tvrkom New Breed Asisst in digital uistinu digitalno pismeni i maksimalno moderni, a opet unikatni i jedinstveni na tržištu.

Krenite sa mnom na ovo zanimljivo tehnološko putovanje i uvjerite se zašto smo "nova sorta" digitalne asistencije.</p>

    </div>
</div>
</section>
<section>
<div class="container hero">
    <div class="hero-text" style="text-align: center;"><h1>Još uvijek vodite svoje poslovanje na starim tehnologijama? <br><br><h2>Digitalizirajmo Vaše poslovanje zajedno!</h2></h1></div>
    <br>
    <div class="hero-text">
    <table class="container hero" id="usluge"> 
        <div style="text-align: center;"><h3 style="margin: 10px; padding: 10px">Vrste usluga koje nudimo u New Breed Assist in digital programu</h3></div>
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
</div>
</section>
    <section>
<div class="container hero">
<h3 class="hero-text" style="text-align: center;">Želite postati naš klijent? Unesite Vaše podatke u prijavni obrazac i lansirajmo Vaš proces digitalizacije!</h3>
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


