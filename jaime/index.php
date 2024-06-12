<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de maquina</title>
    <link rel="stylesheet" href="styles/style.css">
<script src="conversor.php"></script>

</head>

<body tabindex="0" onclick="closeModal()">
    <div class="title flexboxRow">
        <header id="header">
            <h1>34</h1>
        </header>
        <div id="ads" class="flexboxRow"><img src="images/logo.png" alt="logotipo de php" class="image" id="logo"></div>
    </div>
    <!--The container of left side-->
    <div id="leftSide" class="nav">
        <ul>
            <li><a href="#" class="link">Tempo em segundos</a></li>
            <li><a href="#" class="link">Tempo em minutos</a></li>
            <li><a href="#" class="link">Tempo em horas</a></li>
        </ul>

    </div>

    <!--The content-->
    <main id="content">
       
        <form action="conversor.php" method="post" id="form">
        <h1 id="titleConversor">Conversor de Unidades de Tempo</h1>
            <div class="container"> <label for="horas">Horas:</label>
                <input type="number" id="horas" name="horas" value="0" min="0" class="input">
            </div>

            <div class="container"> <label for="minutos">Minutos:</label>
                <input type="number" id="minutos" name="minutos" value="0" min="0" class="input">
            </div>
            <div class="container"> <label for="segundos">Segundos:</label>
                <input type="number" id="segundos" name="segundos" value="0" min="0" class="input">
            </div>
            <button type="submit" class="button" id="buttonCalcular">Converter para Segundos</button>
        </form>
    </main>


    <!--Footer-->
    <footer id="footer">
        <a href="#" class="link"> Jaime Fernando Pelembe </a>
        <p class="paragraph">Todos os direitos reservados</p>
    </footer>
</body>

</html>