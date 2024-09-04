<?php 
    $page_title = "Formulär";
    include("includes/header.php");
?>
<main id='calc'>
    <a href="form.php">Tillbaka</a>
    <h1>Beräkning av Arean</h1>
    
    <?php
    if(empty($_POST['len']) and empty($_POST['bre'])) {
        echo 'Inga värden ifyllda, vänligen gå tillbaka och försök igen';
    }
    else {
        $area = $_POST['len']*$_POST['bre'];
        echo 'Längden ',$_POST['len'],' meter och bredden ',
        $_POST['bre'],' meter ger en area på ',$area,' kvadratmeter';
    }
    ?>
</main>
<?php 
    include("includes/footer.php");
?>