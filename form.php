<?php 
    $page_title = "Formulär";
    include("includes/header.php");
?>
<main id="form">
    <section class="fr">
        <h3>Ange för och efternamn</h3>
        <form method="get">
            <label for="first">Förnamn:</label>
            <input type="text" name="first" id="first"><br><br>
            <label for="second">Efternamn</label>
            <input type="text" name="second" id="second"><br><br>
            <input type="submit">
        </form>
        <p>
        <?php 
        if (empty($_GET['first']) or empty($_GET['second'])) {
            echo 'Både Förnamn och efternamn måste fyllas i.';
        }
        else {
            echo 'Hej! ' . $_GET['first'] . ' ' . $_GET['second'];
        }
        
        ?>
        </p>
    </section>
    <section class="fr">
        <h3>Beräkna Area</h3>
        <form action="calculate.php" method="post">
            <Label for="len">Längd: </Label>
            <input type="number" id="len" name="len"><br><br>
            <label for="bre">Bredd: </label>
            <input type="number" id="bre" name="bre"><br><br>
            <input type="submit">
        </form>
    </section>
</main>
<?php 
    include("includes/footer.php");
?>
