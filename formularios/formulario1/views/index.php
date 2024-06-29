<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto online</title>
    <link rel="shortcut icon" href="images/telephonered.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css" media="all">
 <link rel="stylesheet" href="styles/styleDesktop.css" media="screen and (min-width:768px)">


</head>

<body>
    <header id="header" class="flexRow">
       
        <nav id="navbar" class="flexRow">
        <a href="#" class="link"><img src="images/telephonered.png" id="logo" class="image" alt="Logotipo"></a>
        <div id="containerButtons" class="flexRow">
            <button id="buttonLogin" class="button">Login</button>
            <button id="buttonSignup" class="button">Signup</button>
        </div>

        </nav>

        <!--Load the javascript-->
        <script src="javascript/index.js"></script>
    </header>

    <main id="main">
        <section class="sessionText flexColumn">
            <h1 class="title">Cadastre todos os seus contactos</h1>
            <p class="paragraph">O nosso sistema permite que você crie, salve e elimine todos os seus contactos de forma
                rápida, facíl e segura.</p>

        </section>

        <section id="containerImages" class="flexColumn">
            <img src="../views/images/girl_on_phone_mobile.jpg" alt="Girl on the phone" class="image pictureWoman">
            <img src="../views/images/human_on_phone_mobile.jpg" alt="Woman on the phone" class="image pictureWoman">

        </section>

        <session class="sessionText flexColumn">
            <h2 class="title">Vantagens do nosso serviço</h2>

            <p class="paragraph">O nosso serviço tem como principais vantagens:</p>
            <ul id="list" class="flexColumn">
                <li class="paragraph">Acessibilidade: Acesse seus contatos de qualquer lugar com acesso à internet;</li>
                <li class="paragraph">Gerenciamento de contatos: Armazene e organize seus contatos de forma eficiente;</li>
                <li class="paragraph">Sincronização automática: Mantenha seus contatos atualizados em todos os seus dispositivos;</li>
                <li class="paragraph">Pesquisa e filtragem avançadas.</li>
            </ul>

        </session>

    </main>

    <?php include ("footer.php") ?>


</body>

</html>