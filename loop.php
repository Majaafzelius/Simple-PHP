<?php 
    $page_title = "Upprepningar";
    include("includes/header.php");
?>
<main>
    <article id="loop">
        <h3>Loop 10 till 1</h3>
    <?php
    for ($i=10; $i>=1; $i--) {
        echo $i,'<br>';
    }
    ?>
    </article>
    
    <ul class="course">
    <h3>Kurser för läsår 1</h3>
    <?php
    $course = array('Webbutveckling I',
    'Introduktion till programmering i JavaScript',
    'Grafisk teknik för webb','Webbanvändbarhet',
    'Databaser', 'Webbutveckling II',
    'Webbdesign för CMS', 'Webbutveckling III');
    foreach ($course as $value) {
        echo '<li>',$value,'</li>';
    }
    ?>
    </ul>
    <ul class="course">
    <h3>Kurser för läsår 1 i bokstavsordning</h3>
        <?php
        sort($course);
        foreach ($course as $value) {
            echo '<li>',$value,'</li>';
        }
        ?>
    </ul>
</main>
<?php 
    include("includes/footer.php");
?>
