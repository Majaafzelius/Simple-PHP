<?php 
    $page_title = "Extern textfil";
    include("includes/header.php");
?>
<main id='text'>
    <h3>Kurser läsår 1</h3>
    <ul>
    <?php
    if (file_exists('txt/course.txt')) {
        if ($file = fopen('txt/course.txt', 'r')) {
            while(!feof($file)) {
                $linetext = fgets($file);
                echo '<li>',$linetext,'</li>';
            }
            fclose($file);
        }
    }
    else {
        echo 'Filen kunde inte hittas';
    }
    ?>
    </ul>
</main>
<?php 
    include("includes/footer.php");
?>
