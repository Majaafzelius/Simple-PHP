<?php 
    $page_title = "Villkor";
    include("includes/header.php");
?>
<main id="time">
    <article class='date'>
    <?php 
        echo date('Y-m-d \k\l. H:i');
    ?>
    </article>
    <article class='date'>
    <?php
        if (date('l')=='Sunday') {
            echo 'Idag är det söndag.';
        }
        else {
            echo 'Idag är inte en söndag.';            
        }
    ?>
    </article>
    <article class='date'>
    <?php
        if (date('G')>=6 & date('G')<9) {
            echo 'Det är Morgon';
        }
        elseif (date('G')>=9 & date('G')<12) {
            echo 'Det är Förmiddag';
        }
        elseif (date('G')>=12 & date('G')<18) {
            echo 'Det är Eftermiddag';
        }
        else {
            echo 'Det är Kväll/Natt';
        }
    ?>
    </article>
    <article class='date'>
    <?php
        switch (date('w')) {
            case 0:
                echo 'Idag är det söndag';
                break;
            case 1:
                echo 'Idag är det Måndag';
                break;
            case 2:
                echo 'Idag är det Tisdag';
                break;
            case 3:
                echo 'Idag är det Onsdag';
                break;
            case 4:
                echo 'Idag är det Torsdag';
                break;
            case 5:
                echo 'Idag är det Fredag';
                break;
            case 6:
                echo 'Idag är det Lördag';
                break;
        }
    ?>
    </article>
    <?php
        // Ett kortare alternativ till switch cases ovan

        // echo '<br>';
        // setlocale(LC_TIME, array('sv_SV.UTF-8','sv_SV@euro','sv_SV','Swedish'));
        // echo 'Idag är det ',strftime('%A');
    ?>
</main>
<?php 
    include("includes/footer.php");
?>
