"use strict;"

// kommer möjligen användas senare för menyn på små skärmar
function openNav() {
    document.getElementById("menu").style.display = "block";
    document.getElementById("hamburger").style.display="none";
  }
  
  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("menu").style.display = "none";
    document.getElementById("hamburger").style.display="block";
  }