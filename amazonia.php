<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazônia - Animals Collection</title>
    <!-- Link para o CSS externo se preferir, mas o estilo está embutido para garantir funcionamento imediato -->
    <link rel="stylesheet" href="styleIA.css">
    
    <style>
        /* --- TEMA STARDEW VALLEY --- */
        :root {
            --cor-fundo: #ffdcc0;
            --madeira-clara: #8b5028;
            --madeira-escura: #522e17;
            --papel: #fffcdb;
            --verde-botao: #8cc446;
            --verde-hover: #6ea82f;
            --texto-marrom: #3a1a06;
            --borda-fina: #d4c29e;
        }

        * { box-sizing: border-box; }
        
        body { 
            margin: 0; 
            font-family: 'Verdana', sans-serif; 
            background-color: var(--cor-fundo); 
            /* Padrão de fundo opcional (pontilhado suave) */
            background-image: radial-gradient(#e6cba5 2px, transparent 2px);
            background-size: 20px 20px;
            color: var(--texto-marrom);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* CABEÇALHO */
        header { 
            background-color: var(--madeira-clara); 
            padding: 15px 24px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            border-bottom: 4px solid var(--madeira-escura); 
            box-shadow: 0 4px 0 rgba(0,0,0,0.2); 
        }

        .logo-container a { display: block; line-height: 0; }
        .logo-container img { height: 120px; width: auto; max-width: 100%; object-fit: contain; filter: drop-shadow(2px 2px 0px rgba(0,0,0,0.3)); }

        /* MENU DE NAVEGAÇÃO */
        .buttonc { 
            text-align: center; 
            padding: 15px 10px; 
            background-color: var(--madeira-escura); 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            flex-wrap: wrap; 
            gap: 10px; 
            border-bottom: 2px solid #3e2723;
        }
        
        .button-nav { 
            text-decoration: none; 
            color: #fff; 
            background-color: var(--verde-botao); 
            padding: 10px 20px; 
            border-radius: 4px; 
            font-size: 0.95rem; 
            font-weight: bold;
            display: inline-block;
            border: 2px solid #568c2d;
            box-shadow: inset 0 2px 0 rgba(255,255,255,0.3), 0 3px 0 #3e5c1e;
            text-shadow: 1px 1px 0 rgba(0,0,0,0.3);
            transition: transform 0.1s;
        }
        
        .button-nav:hover { 
            background-color: #a2d95b; 
            transform: translateY(2px); 
            box-shadow: inset 0 2px 0 rgba(255,255,255,0.3), 0 1px 0 #3e5c1e;
        }

        /* CONTEÚDO PRINCIPAL */
        .page-wrapper { 
            max-width: 1150px; 
            margin: 30px auto 40px; 
            padding: 0 16px; 
            display: flex; 
            gap: 32px; 
            flex: 1;
        }

        /* ARTIGO (Estilo Página de Livro) */
        .article { 
            flex: 2; 
            background-color: var(--papel); 
            border: 4px solid var(--madeira-clara);
            outline: 2px solid var(--madeira-escura);
            border-radius: 4px; 
            padding: 40px; /* Aumentei o padding para ficar mais espaçoso */
            box-shadow: 6px 6px 0 rgba(62, 39, 35, 0.2); 
        }

        .breadcrumb { font-size: 0.85rem; color: #8e5c36; margin-bottom: 15px; font-weight: bold; }
        .breadcrumb span { color: #d9581c; } /* Laranja Stardew */

        .article-title { font-size: 2.2rem; margin: 8px 0 15px; color: #782a0e; text-shadow: 1px 1px 0 #e6d6ad; line-height: 1.2; }
        .article-subtitle { font-size: 1.15rem; color: #5c3c24; margin-bottom: 25px; font-style: italic; line-height: 1.6; }

        .tag { 
            display: inline-block; 
            font-size: 0.8rem; 
            padding: 4px 12px; 
            border-radius: 4px; 
            background-color: #e8dcc5; 
            border: 2px solid #c9b08a;
            color: #5c3c24; 
            margin-right: 6px; 
            font-weight: bold;
        }

        .article img.hero { 
            width: 100%; 
            border: 4px solid var(--madeira-clara); 
            margin: 20px 0 30px; 
            max-height: 400px; 
            object-fit: cover; 
            box-shadow: 2px 2px 0 rgba(0,0,0,0.2);
        }

        .article h2 { 
            font-size: 1.6rem; 
            margin-top: 40px; 
            margin-bottom: 15px; 
            color: #782a0e; 
            border-bottom: 2px dashed #c9b08a; 
            padding-bottom: 8px; 
        }
        
        .article h3 { 
            font-size: 1.3rem; 
            margin-top: 25px; 
            margin-bottom: 10px; 
            color: #8b5028; 
            font-weight: bold;
        }
        
        .article p, .article li { 
            font-size: 1.05rem; 
            line-height: 1.8; 
            color: var(--texto-marrom); 
            margin-bottom: 15px;
            text-align: justify;
        }

        .highlight-box { 
            background-color: #ffdcc0; /* Fundo destaque */
            border: 2px solid #d9581c; 
            padding: 20px; 
            border-radius: 4px; 
            font-size: 1.1rem; 
            margin: 30px 0; 
            color: #522e17;
            font-weight: 500;
            box-shadow: 2px 2px 0 rgba(0,0,0,0.1);
            position: relative;
        }
        /* Ícone de destaque */
        .highlight-box::before {
            content: '!';
            position: absolute;
            top: -15px;
            left: -15px;
            width: 30px;
            height: 30px;
            background-color: #d9581c;
            color: #fff;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            font-weight: bold;
            border: 2px solid #fff;
            box-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        }

        /* BARRA LATERAL */
        .sidebar { flex: 1; display: flex; flex-direction: column; gap: 20px; }
        
        .sidebar-card { 
            background-color: var(--madeira-clara); 
            color: #fffcdb;
            border: 4px solid var(--madeira-escura);
            border-radius: 4px; 
            padding: 25px; 
            box-shadow: 4px 4px 0 rgba(0,0,0,0.3); 
            text-align: center;
        }

        .sidebar-card h3 { margin-top: 0; color: #ffcc00; text-shadow: 2px 2px 0 #3e2723; font-size: 1.4rem; }
        .sidebar-card p { color: #ffe6a0; font-size: 1rem; line-height: 1.5; }

        .sidebar-card a.cta { 
            display: block; 
            margin-top: 20px; 
            background-color: var(--verde-botao); 
            color: #fff; 
            text-decoration: none; 
            padding: 15px; 
            text-align: center;
            border-radius: 2px; 
            font-weight: bold;
            border-bottom: 4px solid #4a7a22;
            text-transform: uppercase;
            text-shadow: 1px 1px 0 rgba(0,0,0,0.3);
            transition: all 0.1s;
        }
        
        .sidebar-card a.cta:hover { background-color: var(--verde-hover); transform: translateY(2px); border-bottom: 2px solid #4a7a22; }
        .sidebar-card a.cta:active { transform: translateY(4px); border-bottom: 0; }

        /* RODAPÉ */
        footer { 
            background-color: var(--madeira-escura); 
            padding: 20px; 
            text-align: center; 
            color: #e6d6ad; 
            border-top: 4px solid #3a1a06;
            margin-top: auto;
        }

        .footer-button { 
            display: inline-block; 
            margin-top: 10px; 
            padding: 10px 24px; 
            background-color: #a0522d; 
            color: #fff; 
            text-decoration: none; 
            border-radius: 4px; 
            font-weight: bold; 
            border: 2px solid #5c3c24;
            box-shadow: 0 2px 0 #3e2723;
        }
        .footer-button:hover { background-color: #b5653b; transform: translateY(-2px); }

        @media (max-width: 900px) { .page-wrapper { flex-direction: column; } .sidebar { order: -1; } }
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <a href="index.php">
                <img src="imagens/logonicolas.png" alt="Animals Collection Logo">
            </a>
        </div>
    </header>

    <div class="buttonc">
        <a href="index.php" class="button-nav">Início</a>
        <a href="amazonia.php" class="button-nav" style="background-color: #522e17; pointer-events: none; border-color: #3e2723; color: #ccc; box-shadow: none;">Introdução</a>
        <a href="jogo.php" class="button-nav">Animals Collection</a>
        <a href="sobre.php" class="button-nav">Sobre nós</a>
        <a href="indexIA.php" class="button-nav">Chat IA</a>
    </div>

    <div class="page-wrapper">
        <main class="article">
            <div class="breadcrumb">
                Página inicial / <span>Amazônia</span>
            </div>

            <h1 class="article-title">Amazônia: Um Tesouro de Vida</h1>
            <p class="article-subtitle">
                Descubra os segredos da maior floresta tropical do mundo, um ecossistema vital para o clima global e lar de uma fauna incomparável.
            </p>

            
            <img src="imagens/AMAZONIA_CMYK.webp" alt="Floresta Amazônica vista do alto" class="hero">

            <div style="margin-bottom: 25px;">
                <span class="tag">🌿 Biodiversidade</span>
                <span class="tag">🐆 Fauna</span>
                <span class="tag">🌎 Clima Global</span>
            </div>

            <div class="highlight-box">
                A Amazônia não é apenas uma floresta; é um "pulmão" que respira junto com o planeta. Ela abriga a maior bacia hidrográfica da Terra e uma diversidade de vida que ainda estamos longe de catalogar completamente.
            </div>

            <h2>O que é a Amazônia?</h2>
            <p>
                A Amazônia é um bioma colossal que cobre cerca de 6,7 milhões de quilômetros quadrados na América do Sul, estendendo-se por nove países. A maior parte, cerca de 60%, encontra-se em território brasileiro.
            </p>
            <p>
                Cortada pelo imponente Rio Amazonas e seus milhares de afluentes, a região forma um complexo sistema de terra e água. Não é uma massa verde uniforme, mas sim um mosaico de ecossistemas: florestas de terra firme, várzeas inundadas, igapós de águas escuras e campos naturais.
            </p>
            
            <h2>A Incomparável Fauna Amazônica</h2>
            <p>
                A biodiversidade da Amazônia é de tirar o fôlego. Estima-se que a região abrigue cerca de 10% de todas as espécies conhecidas no planeta. É um verdadeiro santuário para a vida selvagem, onde a evolução criou formas e cores únicas.
            </p>

            <h3>🐆 Mamíferos Majestosos</h3>
            <p>
                Entre as árvores densas, reina a <strong>onça-pintada</strong>, o maior felino das Américas. Ágil tanto na terra quanto na água, ela é o símbolo de força da floresta. Nas águas dos rios, o <strong>boto-cor-de-rosa</strong> encanta com sua inteligência e cor vibrante, cercado por lendas do folclore. Nas copas das árvores, diversas espécies de macacos, como o barulhento guariba e o pequeno sagui, saltam entre os galhos, enquanto as <strong>preguiças</strong> se movem lentamente, camufladas no verde.
            </p>

            <h3>🦜 O Reino das Aves</h3>
            <p>
                O céu da Amazônia é uma pintura viva com mais de 1.300 espécies de aves. <strong>Araras</strong> vermelhas, azuis e canindés cruzam o horizonte com seus gritos característicos. <strong>Tucanos</strong> de bicos enormes e coloridos se alimentam de frutas nas partes altas. E, observando tudo do topo, a poderosa <strong>gavião-real (harpia)</strong>, uma das maiores águias do mundo, demonstra a imponência dos predadores alados.
            </p>

            <h3>🐍 Répteis, Anfíbios e Peixes</h3>
            <p>
                A vida aquática e rasteira é igualmente impressionante. Nos rios, vive o gigantesco <strong>pirarucu</strong>, um dos maiores peixes de água doce do mundo, que pode chegar a três metros de comprimento. As margens são patrulhadas por jacarés-açu e pela lendária <strong>sucuri</strong>. No chão da floresta, pequenas rãs coloridas — muitas vezes venenosas — coaxam em uma sinfonia noturna, evidenciando a riqueza dos anfíbios locais.
            </p>

            [Image of jaguar in amazon rainforest]

            <h2>Como a Amazônia afeta o clima global?</h2>
            <h3>Rios voadores e o ciclo da chuva</h3>
            <p>
                As árvores da Amazônia funcionam como bombas de água naturais. Através da evapotranspiração, elas liberam toneladas de vapor d'água na atmosfera diariamente. Essa umidade forma os chamados “rios voadores”, massas de ar úmido que viajam pelo continente e são responsáveis pelas chuvas que irrigam o Centro-Oeste, Sudeste e Sul do Brasil.
            </p>
            <p>
                Sem a floresta, o regime de chuvas da América do Sul entraria em colapso, afetando a agricultura, o abastecimento de água e a geração de energia.
            </p>

            <div class="highlight-box" style="background-color: #dcedc8; border-color: #7cb342;">
                <strong>Resumo:</strong> Proteger a Amazônia significa proteger a biodiversidade, os povos que nela vivem, a estabilidade do clima e o futuro de todos nós.
            </div>

            <h2>Relação com as ODS (Objetivos de Desenvolvimento Sustentável)</h2>
            <p>
                <strong>ODS 4 – Educação de Qualidade:</strong> A floresta é uma sala de aula a céu aberto. Garantir a educação ambiental é fundamental para formar cidadãos conscientes que valorizem este patrimônio.
            </p>
            <p>
                <strong>ODS 15 – Vida Terrestre:</strong> Este objetivo visa proteger, recuperar e promover o uso sustentável dos ecossistemas terrestres. Na Amazônia, isso significa combater o desmatamento, proteger as espécies ameaçadas e respeitar os limites da natureza.
            </p>
        </main>

        <aside class="sidebar">
            <!-- Removida a parte "Conecte Amazônia" conforme solicitado -->
            
            <div class="sidebar-card">
                <h3>🤖 Chat IA (AInimals)</h3>
                <p>
                    Tem curiosidade sobre algum animal específico ou quer saber mais sobre a floresta? Converse agora com nossa Inteligência Artificial!
                </p>
                <a class="cta" href="indexIA.php">
                    Abrir Chat IA
                </a>
            </div>
        </aside>
    </div>

    <footer>
        <p>Animals Collection - Todos os direitos reservados</p>
        <a href="amazonia.php" class="footer-button">⬆ Voltar ao topo</a>
    </footer>
</body>
</html>