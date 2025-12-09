<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals Collection - Início</title>
    <style>
        /* --- TEMA STARDEW VALLEY --- */
        :root {
            --cor-fundo: #ffdcc0;          /* Laranja suave (Fundo geral) */
            --madeira-clara: #8b5028;      /* Madeira (Bordas e Header) */
            --madeira-escura: #522e17;     /* Madeira escura (Contornos/Footer) */
            --papel: #fffcdb;              /* Creme (Fundo dos textos/cartas) */
            --verde-botao: #8cc446;        /* Verde Stardew */
            --verde-hover: #6ea82f;
            --texto-marrom: #3a1a06;       /* Texto principal */
            --titulo-marrom: #782a0e;      /* Títulos */
            --amarelo-ouro: #ffcc00;       /* Detalhes dourados */
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
        .logo-container img { 
            height: 130px; 
            width: auto; 
            max-width: 100%; 
            object-fit: contain; 
            filter: drop-shadow(2px 2px 0px rgba(0,0,0,0.3));
        }

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
            transition: all 0.1s;
            border: 2px solid #568c2d;
            box-shadow: inset 0 2px 0 rgba(255,255,255,0.3), 0 3px 0 #3e5c1e;
            text-shadow: 1px 1px 0 rgba(0,0,0,0.3);
        }
        
        .button-nav:hover { 
            background-color: #a2d95b; 
            transform: translateY(2px); 
            box-shadow: inset 0 2px 0 rgba(255,255,255,0.3), 0 1px 0 #3e5c1e;
        }

        /* HERO SECTION - PLACA DE MADEIRA */
        .hero-section { 
            background-color: var(--madeira-clara);
            /* Textura de madeira simples via CSS */
            background-image: repeating-linear-gradient(45deg, var(--madeira-clara) 25%, #7a4520 25%, #7a4520 50%, var(--madeira-clara) 50%, var(--madeira-clara) 75%, #7a4520 75%, #7a4520 100%);
            background-size: 20px 20px;
            padding: 60px 20px; 
            text-align: center; 
            color: #fffcdb; 
            border-bottom: 5px solid var(--madeira-escura);
            box-shadow: inset 0 0 20px rgba(0,0,0,0.5);
            margin: 0; 
        }
        
        .hero-section h1 { 
            font-size: 2.8em; 
            margin: 0 0 15px 0; 
            color: var(--amarelo-ouro); 
            text-shadow: 4px 4px 0 #3e2723;
            font-family: 'Verdana', serif; 
            letter-spacing: 1px;
        }
        
        .hero-section p { 
            font-size: 1.3em; 
            margin: 0 auto; 
            max-width: 800px; 
            background-color: rgba(62, 39, 35, 0.6);
            padding: 10px 20px;
            border-radius: 8px;
            border: 2px solid #5d4037;
        }

        /* CONTEÚDO PRINCIPAL */
        .content-wrapper { max-width: 1200px; margin: 40px auto; padding: 0 20px; }
        
        /* CARTÃO DE BOAS-VINDAS (PAPEL) */
        .welcome { 
            background-color: var(--papel); 
            border: 4px solid var(--madeira-clara); 
            outline: 2px solid var(--madeira-escura);
            border-radius: 4px; 
            padding: 40px; 
            box-shadow: 8px 8px 0 rgba(0,0,0,0.2); 
            margin-bottom: 40px; 
        }
        
        .welcome h2 { 
            color: var(--titulo-marrom); 
            font-size: 2em; 
            margin: 0 0 20px 0; 
            text-align: center; 
            border-bottom: 2px dashed #c9b08a; 
            padding-bottom: 10px;
        }
        
        .welcome p { 
            font-size: 1.1em; 
            line-height: 1.8; 
            color: var(--texto-marrom); 
            text-align: center; 
            margin-bottom: 30px; 
        }
        
        /* BADGES DOS AUTORES */
        .authors { display: flex; justify-content: center; gap: 15px; flex-wrap: wrap; margin: 20px 0; }
        
        .author-badge { 
            background-color: #e69d67; 
            color: #3e2723; 
            padding: 8px 16px; 
            border-radius: 15px; 
            font-size: 0.95em; 
            font-weight: bold;
            border: 2px solid #c97e45;
            box-shadow: 2px 2px 0 rgba(0,0,0,0.1);
        }

        /* GRID DE BOTÕES GRANDES */
        .buttons-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-top: 40px; }
        
        .button { 
            text-decoration: none; 
            color: #fff; 
            background-color: var(--verde-botao); 
            padding: 25px 20px; 
            border-radius: 4px; 
            text-align: center; 
            font-size: 1.1em; 
            font-weight: bold; 
            border: 3px solid #568c2d;
            box-shadow: inset 0 3px 0 rgba(255,255,255,0.3), 0 4px 0 #3e5c1e;
            transition: all 0.1s;
            position: relative; 
            overflow: hidden; 
            text-shadow: 1px 1px 0 rgba(0,0,0,0.3);
        }
        
        .button:hover { 
            background-color: #a2d95b; 
            transform: translateY(3px); 
            box-shadow: inset 0 3px 0 rgba(255,255,255,0.3), 0 1px 0 #3e5c1e;
        }
        
        .button span { position: relative; z-index: 1; display: block; }

        /* INFO CARDS (ODS) */
        .info-cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; margin-top: 40px; }
        
        .info-card { 
            background-color: #e8dcc5; 
            border: 3px solid var(--madeira-clara); 
            border-radius: 4px; 
            padding: 25px; 
            box-shadow: 4px 4px 0 rgba(0,0,0,0.1); 
            transition: transform 0.2s; 
            position: relative;
        }
        
        /* Detalhe "prego" no topo do card */
        .info-card::after {
            content: '';
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 12px;
            height: 12px;
            background-color: #a1887f;
            border-radius: 50%;
            box-shadow: 1px 1px 0 rgba(0,0,0,0.3);
        }

        .info-card:hover { transform: translateY(-3px); }
        
        .info-card h3 { 
            color: var(--titulo-marrom); 
            margin: 10px 0 10px 0; 
            font-size: 1.3em; 
            text-align: center;
        }
        
        .info-card p { 
            color: #5c3c24; 
            margin: 0; 
            line-height: 1.6; 
            font-size: 0.95em; 
            text-align: center;
        }

        /* RODAPÉ */
        footer { 
            background-color: var(--madeira-escura); 
            padding: 20px; 
            text-align: center; 
            color: #e6d6ad; 
            font-size: 0.8rem; 
            margin-top: auto; 
            border-top: 4px solid #3a1a06;
        }
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

    <div class="hero-section">
        <h1>Bem-vindo ao Animals Collection!</h1>
        <p>Explore a importância da tecnologia na formação do conhecimento e descubra os segredos da Amazônia e da vida animal</p>
    </div>

    <div class="buttonc">
        <a href="index.php" class="button-nav" style="background-color: #522e17; pointer-events: none; border-color: #3e2723; color: #ccc; box-shadow: none;">Início</a>
        <a href="amazonia.php" class="button-nav">Introdução</a>
        <a href="jogo.php" class="button-nav">Animals Collection</a>
        <a href="sobre.php" class="button-nav">Sobre nós</a>
        <a href="indexIA.php" class="button-nav">Chat IA</a>
    </div>

    <div class="content-wrapper">
        <div class="welcome">
            <h2>Sobre o Projeto</h2>
            <p>
                Este site foi criado com dedicação por <strong>João Lucas, Nicolas Trindade, Guilherme Queiroz e Pedro Veloso</strong> 
                com o objetivo de informar e conscientizar sobre a Amazônia, além de apresentar o nosso jogo e a inteligência artificial AInimals.
            </p>
            <div class="authors">
                <span class="author-badge">João Lucas</span>
                <span class="author-badge">Nicolas Trindade</span>
                <span class="author-badge">Guilherme Queiroz</span>
                <span class="author-badge">Pedro Veloso</span>
            </div>
            <p style="margin-