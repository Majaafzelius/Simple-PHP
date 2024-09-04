<?php 
    $page_title = "Startsida";
    include("includes/header.php");
?>
<main id="ind">
<section id="questions">
    <h1>Frågor</h1>
    <article class="qa" id="one">
        <h2>1. Har du tidigare erfarenhet av utveckling med PHP?</h2>
        <p>
            Jag har aldrig tidigare använt php så detta har allt varit helt nytt för mig.
        </p>
    </article>
    <article class="qa" id="two">
        <h2>2. Beskriv kortfattat vad du upplever är fördelarna med att använda PHP för att skapa webbplatser.</h2>
        <p>
            Det känns mycket lättare att hantera ändringar och strukturera webbplatsen med php.
        </p>
    </article>
    <article class="qa" id="three">
        <h2>3. Hur har du valt att strukturera upp dina filer och kataloger?</h2>
        <p>
            Alla filer har sorteras in i kataloger beroende på filtyp.
        </p>
    </article>
    <article class="qa" id="four">
        <h2>4. Har du följt guiden, eller skapat på egen hand?</h2>
        <p>
            Stora delar har gjorts enligt guiden men en del har även gjorts på egen hand.
            Sidebar har exempelvis skippats.
        </p>
    </article>
    <article class="qa" id="five">
        <h2>5. Har du gjort några förbättringar eller vidareutvecklingar av guiden (om du följt denna)?</h2>
        <p>
            Försökte sortera upp css för main, header och footer men insåg efter ett tag att det antingen inte gick
            eller att det var för svårt så tillslut gick jag tillbaka till min vanliga css-struktur. Utöver
            det försöket har jag ej gjort några vidareutvecklingar.
        </p>
    </article>
    <article class="qa" id="six">
        <h2>6. Vilken utvecklingsmiljö har du använt för uppgiften (Editor, webbserver (XAMPP, LAMP, MAMP eller liknande) etcetera)?</h2>
        <p>
            XAMPP har använts som webbserver och VSCode har använts för programmering och utvecklingen.
        </p>
    </article>
    <article class="qa" id="seven">
        <h2>7. Har något varit svårt med denna uppgift?</h2>
        <p>
            Jag har inte upplevt några större svårigheter med denna uppgiften. Det har varit väldigt enkelt
            att hitta tydliga svar på frågor som uppkommit.
        </p>
    </article>
</section>
<section id="navbar">
    <h2>Översikt</h2>
    <ul>
        <li><a href="#one">Fråga 1</a></li>
        <li><a href="#two">Fråga 2</a></li>
        <li><a href="#three">Fråga 3</a></li>
        <li><a href="#four">Fråga 4</a></li>
        <li><a href="#five">Fråga 5</a></li>
        <li><a href="#six">Fråga 6</a></li>
        <li><a href="#seven">Fråga 7</a></li>
    </ul>
</section>
</main>
<?php 
    include("includes/footer.php");
?>
