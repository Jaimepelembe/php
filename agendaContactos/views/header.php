<header id="header" class="flexColumn">
    <div id="containerNavigation" class="flexRow">
        <div id="containerLogo">
            <a href="main.php"><img src="images/telephonered.png" alt="Logo" id="logo" class="image" /></a>
        </div>
        <button class="buttonHamburger" onclick="toggleSideBar()">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                class="bi bi-list hamburger" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>

        <nav id="navigationHeader" class="flexColumn">
            <button id="buttonClose" onclick="closeSideBar()">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-x svg"
                    viewBox="0 0 16 16">
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>

            <a href="addContact.php" class="link linkHeader">Adicionar Contacto</a>
            <a href="viewContacts.php" class="link linkHeader">Visualizar contactos</a>
            <a href="personalData.php" class="link linkHeader">Dados pessoais</a>
            <button id="buttonLogout" class="button buttonRed"
                onclick="location.href='../includes/logout.php'">Logout</button>
        </nav>

    </div>

    <!--php-->
    <?php include_once ("../includes/userInformationHandler.php"); ?>
    
    <div id="UserInformation">
        <?php echo "<h1 class='theUserName title'>Bem vindo " . $_SESSION['userName'] . " </h1>"; ?></div>

</header>