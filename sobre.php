<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Animals Collection</title>
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

        /* HEADER / NAV */
        header { background-color: var(--madeira-clara); padding: 15px 24px; display: flex; justify-content: center; border-bottom: 4px solid var(--madeira-escura); }
        .logo-container a { display: block; line-height: 0; }
        .logo-container img { height: 120px; width: auto; max-width: 100%; object-fit: contain; filter: drop-shadow(2px 2px 0px rgba(0,0,0,0.3)); }

        .buttonc { background-color: var(--madeira-escura); padding: 15px 10px; display: flex; justify-content: center; flex-wrap: wrap; gap: 10px; border-bottom: 2px solid #3e2723; }
        .button-nav { text-decoration: none; color: #fff; background-color: var(--verde-botao); padding: 10px 20px; border-radius: 4px; font-weight: bold; border: 2px solid #568c2d; box-shadow: inset 0 2px 0 rgba(255,255,255,0.3), 0 3px 0 #3e5c1e; transition: all 0.1s; }
        .button-nav:hover { background-color: #a2d95b; transform: translateY(2px); box-shadow: inset 0 2px 0 rgba(255,255,255,0.3), 0 1px 0 #3e5c1e; }

        /* HERO - QUADRO NEGRO ESTILO ESCOLA */
        .hero-section { 
            background-color: #2d4a22; 
            padding: 50px 20px; 
            text-align: center; 
            color: #fff; 
            border: 8px solid #5e3a22;
            box-shadow: 0 4px 0 rgba(0,0,0,0.3);
            margin: 20px auto;
            max-width: 900px;
        }
        .hero-section h1 { font-family: 'Courier New', monospace; font-size: 2.5em; margin: 0; color: #fff; }
        .hero-section p { font-family: 'Courier New', monospace; font-size: 1.1em; color: #ccc; }

        .content-wrapper { max-width: 1200px; margin: 40px auto; padding: 0 20px; }

        /* CARDS DA EQUIPE - RETRATOS */
        .section-title { text-align: center; color: #782a0e; font-size: 2em; margin-bottom: 30px; text-shadow: 1px 1px 0 #fff; }
        
        .team-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; }
        
        .team-card { 
            background-color: #ffda9e; /* Fundo retrato */
            border: 4px solid var(--madeira-clara);
            outline: 2px solid var(--madeira-escura);
            border-radius: 4px; 
            padding: 20px; 
            text-align: center; 
            box-shadow: 4px 4px 0 rgba(0,0,0,0.2);
            position: relative;
        }
        
        /* Moldura interna da foto */
        .team-card .avatar { 
            width: 130px; 
            height: 130px; 
            margin: 0 auto 15px; 
            background-color: #8b5028;
            padding: 4px;
            border-radius: 50%;
            border: 2px solid #fdd835; /* Borda dourada */
        }
        .team-card .avatar img { width: 100%; height: 100%; object-fit: cover; border-radius: 50%; display: block; }
        
        .team-card h3 { color: #522e17; margin: 10px 0 5px; font-size: 1.4em; }
        .team-card .role { 
            display: inline-block;
            background-color: #e69d67;
            color: #3e2723;
            padding: 4px 10px;
            border-radius: 10px;
            font-size: 0.85em;
            font-weight: bold;
            margin-bottom: 15px;
            border: 1px solid #c97e45;
        }
        .team-card p { color: #5c3c24; font-size: 0.95em; line-height: 1.5; }

        /* ABOUT E MISSÃO - PAPEL */
        .about-project, .mission-card { 
            background-color: var(--papel); 
            border: 3px solid var(--madeira-clara); 
            border-radius: 4px; 
            padding: 30px; 
            box-shadow: 4px 4px 0 rgba(0,0,0,0.1); 
            margin-bottom: 30px;
            color: var(--texto-marrom);
        }
        .mission-values { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }

        /* FOOTER */
        footer { background-color: var(--madeira-escura); padding: 20px; text-align: center; margin-top: auto; border-top: 4px solid #3a1a06; }
        .footer-button { color: #fff; text-decoration: none; padding: 10px 20px; background-color: #a0522d; border-radius: 4px; border: 2px solid #5c3c24; }
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
        <a href="jogo.php" class="button-nav">Animals Collection</a>
        <a href="sobre.php" class="button-nav" style="background-color: #522e17; pointer-events: none; border-color: #3e2723; color: #ccc; box-shadow: none;">Sobre nós</a>
        <a href="indexIA.php" class="button-nav">Chat IA</a>
    </div>

    <div class="hero-section">
        <h1>Nossa Equipe</h1>
        <p>Quatro estudantes apaixonados pela educação.</p>
    </div>

    <div class="content-wrapper">
        <div class="team-section">
            <div class="team-grid">
                <div class="team-card">
                    <div class="avatar"><img src="imagens/ncolasfoto.jpeg" alt="João Lucas"></div>
                    <h3>João Lucas</h3>
                    <div class="role">Dev & Pesquisa</div>
                    <p>Responsável geral pelo desenvolvimento e pesquisas do site.</p>
                </div>
                <div class="team-card">
                    <div class="avatar"><img src="imagens/jotafoto.jpeg" alt="Nicolas Trindade"></div>
                    <h3>Nicolas Trindade</h3>
                    <div class="role">Dev & Sound Design</div>
                    <p>Cuida da ia, do banco de dados e dos elementos musicais.</p>
                </div>
                <div class="team-card">
                    <div class="avatar"><img src="imagens/guilherme.jpeg" alt="Guilherme Queiroz"></div>
                    <h3>Guilherme</h3>
                    <div class="role">Game Artist</div>
                    <p>Criador dos elementos visuais e artes do jogo.</p>
                </div>
                <div class="team-card">
                    <div class="avatar"><img src="imagens/velosofoto.jpeg" alt="Pedro Veloso"></div>
                    <h3>Pedro Veloso</h3>
                    <div class="role">Game Developer</div>
                    <p>Programação geral e lógica do jogo.</p>
                </div>
            </div>
        </div>

        <div class="about-project">
            <h2 style="margin-top:0; color:#782a0e;">Sobre o Projeto</h2>
            <p>
                O <strong>Animals Collection</strong> nasceu da paixão pela tecnologia. Nosso objetivo é conscientizar sobre as ODS 4 e 15 através de um jogo divertido.
            </p>
        </div>

        <div class="mission-values">
            <div class="mission-card">
                <h3>📜 Missão</h3>
                <p>Promover conhecimento ambiental via tecnologia.</p>
            </div>
            <div class="mission-card">
                <h3>💎 Valores</h3>
                <p>Educação, sustentabilidade e inovação.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>Animals Collection - Todos os direitos reservados</p>
        <a href="sobre.php" class="footer-button">⬆ Voltar</a>
    </footer>
</body>
</html>