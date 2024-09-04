<?php 
    $page_title = "Variabler";
    include("includes/header.php");
    $name = 'Maja Afzelius';
    $mail = 'majaafzelius01@gmail.com';
    $age = 22;
?>
<main id="var">
    <?php
    echo 'Hej! Jag heter ',$name,', är ',$age,' år gammal och nås på följande epost:
    <a href=mailto:',$mail,'>',$mail,'</a>';
    ?>
</main>
<?php 
    include("includes/footer.php");
?>
