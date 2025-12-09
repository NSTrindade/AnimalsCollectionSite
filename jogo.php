<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals Collection - O Jogo</title>
    <style>
        :root {
            --cor-fundo: #ffdcc0;
            --madeira-clara: #8b5028;
            --madeira-escura: #522e17;
            --papel: #fffcdb;
            --verde-botao: #8cc446;
            --texto-marrom: #3a1a06;
        }

        * { box-sizing: border-box; }
        body { margin: 0; font-family: 'Verdana', sans-serif; background-color: var(--cor-fundo); color: var(--texto-marrom); min-height: 100vh; display: flex; flex-direction: column; }

        /* HEADER E MENU IGUAIS AOS OUTROS */
        header { background-color: var(--madeira-clara); padding: 15px 24px; display: flex; justify-content: center; border-bottom: 4px solid var(--madeira-escura); box-shadow: 0 4px 0 rgba(0,0,0,0.2); }
        .logo-container a { display: block; line-height: 0; }
        .logo-container img { height: 120px; width: auto; max-width: 100%; object-fit: contain; filter: drop-shadow(2px 2px 0px rgba(0,0,0,0.3)); }

        .buttonc { background-color: var(--madeira-escura); padding: 15px 10px; display: flex; justify-content: center; flex-wrap: wrap; gap: 10px; border-bottom: 2px solid #3e2723; }
        .button-nav { text-decoration: none; color: #fff; background-color: var(--verde-botao); padding: 10px 20px; border-radius: 4px; font-weight: bold; border: 2px solid #568c2d; box-shadow: inset 0 2px 0 rgba(255,255,255,0.3), 0 3px 0 #3e5c1e; text-shadow: 1px 1px 0 rgba(0,0,0,0.3); transition: all 0.1s; }
        .button-nav:hover { background-color: #a2d95b; transform: translateY(2px); box-shadow: inset 0 2px 0 rgba(255,255,255,0.3), 0 1px 0 #3e5c1e; }

        /* HERO SECTION - PLACA DE MADEIRA */
        .hero-section { 
            background-color: var(--madeira-clara);
            background-image: repeating-linear-gradient(45deg, var(--madeira-clara) 25%, #7a4520 25%, #7a4520 50%, var(--madeira-clara) 50%, var(--madeira-clara) 75%, #7a4520 75%, #7a4520 100%);
            background-size: 20px 20px;
            padding: 60px 20px; 
            text-align: center; 
            color: #fffcdb; 
            border-bottom: 5px solid var(--madeira-escura);
            box-shadow: inset 0 0 20px rgba(0,0,0,0.5);
        }
        .hero-section h1 { font-size: 3em; margin: 0 0 10px 0; text-shadow: 4px 4px 0 #3e2723; color: #ffcc00; font-family: 'Verdana', serif; letter-spacing: 2px; }
        .hero-section .subtitle { font-size: 1.4em; color: #fff; text-shadow: 2px 2px 0 #000; background-color: rgba(0,0,0,0.3); display: inline-block; padding: 5px 15px; border-radius: 8px; }

        .content-wrapper { max-width: 1200px; margin: 40px auto; padding: 0 20px; }

        /* INTRO DO JOGO - PAPEL */
        .game-intro { 
            background-color: var(--papel); 
            border: 4px solid var(--madeira-clara); 
            outline: 2px solid var(--madeira-escura);
            border-radius: 4px; 
            padding: 30px; 
            box-shadow: 8px 8px 0 rgba(0,0,0,0.2); 
            margin-bottom: 40px; 
        }
        .game-intro h2 { color: #782a0e; border-bottom: 2px dashed #c9b08a; padding-bottom: 10px; margin-top: 0; }
        .game-intro p { line-height: 1.8; color: var(--texto-marrom); text-align: justify; }

        /* SCREENSHOTS - MOLDURAS */
        .section-title { text-align: center; color: #782a0e; font-size: 2.2em; margin-bottom: 30px; text-shadow: 2px 2px 0 #fff; }
        .screenshots-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .screenshot-card { 
            background-color: #fff; 
            border: 8px solid #fff; 
            border-radius: 2px; 
            box-shadow: 0 4px 10px rgba(0,0,0,0.2); 
            transform: rotate(-1deg);
            transition: transform 0.3s;
        }
        .screenshot-card:nth-child(even) { transform: rotate(1deg); }
        .screenshot-card:hover { transform: scale(1.05) rotate(0deg); z-index: 10; }
        .screenshot-card img { width: 100%; height: 220px; object-fit: cover; border: 1px solid #ddd; }
        .screenshot-card .caption { padding: 10px; text-align: center; color: #555; font-family: 'Courier New', monospace; font-weight: bold; }

        /* FEATURES - ESTILO UI DO JOGO */
        .features-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; }
        .feature-card { 
            background-color: #e8dcc5; 
            border: 3px solid var(--madeira-clara); 
            border-radius: 4px; 
            padding: 20px; 
            box-shadow: inset 2px 2px 0 rgba(255,255,255,0.5), 2px 2px 0 rgba(0,0,0,0.2);
        }
        .feature-card h3 { color: #782a0e; margin-top: 0; display: flex; align-items: center; gap: 8px; }

        /* GAMEPLAY SECTION */
        .gameplay-section { 
            background-color: #dcedc8; /* Verde claro stardew */
            border: 4px solid #568c2d;
            border-radius: 8px;
            padding: 30px; 
            margin: 50px 0; 
            box-shadow: inset 0 0 20px rgba(0,0,0,0.1);
        }
        .gameplay-section h2 { color: #33691e; text-align: center; }
        .step-card { background-color: #f1f8e9; border: 2px solid #8bc34a; border-radius: 8px; padding: 20px; text-align: center; }
        .step-number { background-color: #558b2f; color: #fff; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 10px; font-weight: bold; border: 2px solid #33691e; }

        /* DEMO SECTION */
        .demo-container { 
            background-color: var(--madeira-clara); 
            border: 4px solid #ffcc00; /* Borda Dourada */
            border-radius: 8px; 
            padding: 40px; 
            text-align: center; 
            color: #fff;
            box-shadow: 0 6px 0 rgba(0,0,0,0.3);
        }
        .demo-title { color: #ffcc00; text-shadow: 2px 2px 0 #3e2723; margin: 0; font-size: 2em; }
        .demo-description { color: #fffcdb; margin: 10px 0 30px; font-size: 1.2em; }
        .demo-button { 
            display: inline-block; 
            background-color: #ffcc00; 
            color: #3e2723; 
            padding: 15px 40px; 
            text-decoration: none; 
            font-size: 1.2em; 
            font-weight: bold; 
            border-radius: 4px;
            border: 3px solid #e6b800;
            border-bottom: 6px solid #b38f00;
        }
        .demo-button:hover { transform: translateY(2px); border-bottom: 4px solid #b38f00; background-color: #ffd633; }
        .demo-button:active { transform: translateY(6px); border-bottom: 0; }

        /* FOOTER */
        footer { background-color: var(--madeira-escura); padding: 20px; text-align: center; margin-top: auto; border-top: 4px solid #3a1a06; }
        .footer-button { display: inline-block; padding: 10px 20px; background-color: #a0522d; color: #fff; text-decoration: none; border-radius: 4px; border: 2px solid #5c3c24; }
        .footer-button:hover { background-color: #b5653b; }
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <a href="index.php"><img src="imagens/logonicolas.png" alt="Animals Collection Logo"></a>
        </div>
    </header>
    
    <div class="buttonc">
        <a href="index.php" class="button-nav">Início</a>
        <a href="amazonia.php" class="button-nav">Introdução</a>
        <a href="jogo.php" class="button-nav" style="background-color: #522e17; pointer-events: none; border-color: #3e2723; color: #ccc; box-shadow: none;">Animals Collection</a>
        <a href="sobre.php" class="button-nav">Sobre nós</a>
        <a href="indexIA.php" class="button-nav">Chat IA</a>
    </div>

    <div class="hero-section">
        <h1>🎮 Animals Collection</h1>
        <p class="subtitle">Uma aventura educativa pela Floresta Amazônica</p>
    </div>

    <div class="content-wrapper">
        <div class="game-intro">
            <h2>Sobre o Jogo</h2>
            <p>
                <strong>Animals Collection</strong> é um jogo educativo em plataforma 2D com foco em exploração e resolução de puzzles. 
                Nele, o jogador controla uma jovem escoteira em uma expedição pela Floresta Amazônica.
            </p>
            <p>
                O objetivo é completar o relatório do Inspetor da Tropa, fotografando animais e aprendendo sobre eles, sem combates, 
                focando apenas na lógica e na descoberta.
            </p>
        </div>

        <div class="screenshots-section">
            <h2 class="section-title">Capturas de Tela</h2>
            <div class="screenshots-grid">
                <div class="screenshot-card">
                    <img src="imagens/game-screenshot-1.jpeg" alt="Screenshot 1">
                    <div class="caption">Explorando a Floresta</div>
                </div>
                <div class="screenshot-card">
                    <img src="imagens/game-screenshot-3.png" alt="Screenshot 2">
                    <div class="caption">Fotografando Animais</div>
                </div>
                <div class="screenshot-card">
                    <img src="imagens/game-screenshot-2.jpeg" alt="Screenshot 3">
                    <div class="caption">Resolvendo Puzzles</div>
                </div>
            </div>
        </div>

        <div class="features-section">
            <h2 class="section-title">Características</h2>
            <div class="features-grid">
                <div class="feature-card"><h3>🎮 Exploração 2D</h3><p>Navegue por diferentes áreas da Floresta Amazônica.</p></div>
                <div class="feature-card"><h3>🧩 Puzzles</h3><p>Use raciocínio lógico para superar obstáculos naturais.</p></div>
                <div class="feature-card"><h3>📸 Fotografia</h3><p>Complete suas descobertas fotografando animais.</p></div>
                <div class="feature-card"><h3>📚 Educativo</h3><p>Aprenda sobre biodiversidade com fichas reais.</p></div>
            </div>
        </div>

        <div class="gameplay-section">
            <h2>Como Jogar</h2>
            <div class="gameplay-steps" style="display: flex; gap: 15px; flex-wrap: wrap; justify-content: center;">
                <div class="step-card" style="flex: 1; min-width: 200px;">
                    <div class="step-number">1</div>
                    <h3>Explore</h3>
                    <p>Navegue pela floresta.</p>
                </div>
                <div class="step-card" style="flex: 1; min-width: 200px;">
                    <div class="step-number">2</div>
                    <h3>Encontre</h3>
                    <p>Ache os animais.</p>
                </div>
                <div class="step-card" style="flex: 1; min-width: 200px;">
                    <div class="step-number">3</div>
                    <h3>Fotografe</h3>
                    <p>Descubra passagens e conclua objetivos com sua câmera mágica.</p>
                </div>
            </div>
        </div>

        <div class="demo-section">
            <div class="demo-container">
                <h2 class="demo-title">Quer jogar agora?</h2>
                <p class="demo-description">Receba a demo exclusiva no seu email!</p>
                <a href="receberdemo.php" class="demo-button">
                    <span>✉️ Receber Demo</span>
                </a>
            </div>
        </div>
    </div>

    <footer>
        <p>Animals Collection - Todos os direitos reservados</p>
        <a href="jogo.php" class="footer-button">⬆ Topo</a>
    </footer>
</body>
</html>