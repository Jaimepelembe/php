<?php require_once "sessionConfig.php";

if (isset($_SESSION["status"]) && isset($_SESSION["class"])) {
  ?>

  <!--The alert element-->
  <section id="alert" class="flexRow <?php echo $_SESSION["class"]  ?>">
    <div id="containerMessage">
      <p class="paragraph">
        <? echo $_SESSION["status"] ?> 
      </p>
    </div>

    <!--Button close-->
    <button id="buttonCloseAlert" class="buttonModal displayFlex" onclick="removeElement('alert')">
      <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-x svg"
        viewBox="0 0 16 16">
        <path
          d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
      </svg>
    </button>
  </section>


  <?php
  unset($_SESSION["status"]);
  unset($_SESSION["class"]); 

}

