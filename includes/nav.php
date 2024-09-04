<?php

echo '
<nav>
<div id="main">
    <button id="hamburger" onclick="openNav()">&#9776;MENY</button>
</div>
<div id="menu">
    <div id="close">
        <a href="javascript:mom2.js" onclick="closeNav()">&times; stäng menyn</a>
    </div>
    <a href="index.php">Startsidan</a>
    <a href="var.php">Variabler</a>
    <a href="date.php">Villkor</a>
    <a href="loop.php">Upprepningar</a>
    <a href="form.php">Formulär</a>
    <a href="text.php">Extern textfil</a>
</div>
</nav>
';
?>