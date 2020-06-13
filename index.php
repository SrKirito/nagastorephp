<!-- Linkando o CSS-->
<link rel="stylesheet" href="assets/style.css">
<html lang="pt-br">

    <head>


        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Linkando o ícone da página-->
        <link rel="sortcut icon" href="favicon.ico" type="image/x-icon"/>

        <!-- Titulo -->
        <title>NagaStore</title>

    </head>

    <body>

        <?php
            // Variaveis Textos.
            $Naga = "Naga";
            $Store = "Store";
            $LojaApresentacao = "Melhor Loja Brasileira Em Venda de ";
            $Nitro = "Nitro com os melhores preços!";
            $NitroPreco = "Veja-os abaixo:";
            $NitroClassic = "Nitro Classic:";
            $PrecoClassic = "Nitro Classic: 1 Mês = R$20,00!";
            $NitroGaming = "Nitro Gaming:";
            $PrecoGaming = "Nitro Gaming: 1 Mês = R$28,00!";
            $Cheat = "E alem disso, revendemos o ";
            $CheatPreco = "Veja os preços abaixo: ";
            $OitoBitsMmMensal = "Matchmaking Mensal: R$50,00";
            $OitoBitsMmAnual = "Matchmaking Anual: R$450,00";
            $OitoBitsLigaSemanal = "Liga Semanal: R$40,00";
            $OitoBitsLiga15 = "Liga 15 Dias: R$75,00";
            $OitoBitsLigaMensal = "Liga Mensal: R$150,00";
            $OitoBitsLigaAnual = "Liga Anual: R$690,00";
            $Matchmking = "Matchmaking:";
            $Liga = "Liga:";
            $Contato = "Quase queira comprar algum produto basta entrar no discord abaixo e chamar o ";

            // Colocar Na Tela Os Textos.
            // Barra Colorida
            echo "<div class='divide'></div>";

            // Nome da Página
            echo "<h1 class='Naga'>{$Naga}<span class='Store'>Store</span>";

            // Apresentação/Discord Color
            echo "<h1 class='Apresentacao'>{$LojaApresentacao}<span class='DiscordNitro'>Discord </span>Nitro!</h1>";

            // Nitro
            echo "<p class='Nitro'>{$Nitro}<br><br>{$NitroPreco}</p>";
            echo "<hr>";

            // Titulo Nitro Classic
            echo "<p class='NitroClassic'>{$NitroClassic}</p>";

            // Preço Nitro Classic
            echo "<p class='Preco'>{$PrecoClassic}</p>";

            // Titulo Nitro Gaming
            echo "<p class='NitroGaming'>{$NitroGaming}</p>";

            // Preço Nitro Gaming
            echo "<p>{$PrecoGaming}</p>";
            echo "<hr>";
            echo "<br>";

            // Apelação 8Bits
            echo "<p class='Cheat'>{$Cheat}<span class='BBR'>Melhor Cheat Brasileiro!</span><br><br>{$CheatPreco}</p>";
            echo "<hr>";

            // Titulo Matchmaking
            echo "<p class='Matchmaking'>{$Matchmking}</p>";
            echo "<br>";

            // Preço 8Bits Matchmaking Mensal
            echo "<p>{$OitoBitsMmMensal}<br></p>";
            echo "<br>";

            // Preço 8Bits Matchmaking Anual
            echo "<p class='Anual'>{$OitoBitsMmAnual}<br></p>";

            // Titulo Liga
            echo "<p class='Liga'>{$Liga}</p>";
            echo "<br>";

            // Preço 8Bits Liga Semanal;
            echo "<p>{$OitoBitsLigaSemanal}<br></p>";
            echo "<br>";

            // Preço 8Bits Liga 15 Dias
            echo "<p>{$OitoBitsLiga15}<br></p>";
            echo "<br>";

            // Preço 8Bits Liga Mensal
            echo "<p>{$OitoBitsLigaMensal}<br></p>";
            echo "<br>";

            // Preço 8Bits Liga Anual
            echo "<p>{$OitoBitsLigaAnual}<br></p>";
            echo "<hr>";

            // Contato
            echo "<p>{$Contato} <span class='Founder'>Founder!</span></p>";

            // Link Pro Discord
            echo "<a class='Discord' href='https://discord.gg/sWEdgpX'><p class='Discord1'>Discord</p></a>";

        ?>

        <script src="assets/script.js"></script>

    </body>

</html>