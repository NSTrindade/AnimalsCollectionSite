<?php
// Iniciar sessão para manter o histórico da conversa
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat IA - Animals Collection</title>
    
    <link rel="stylesheet" href="styleIA.css">
    
    <style>
        /* --- LAYOUT ESTRUTURAL DO SITE (Stardew Theme) --- */
        
        * { box-sizing: border-box; }

        body { 
            margin: 0; 
            font-family: 'Verdana', sans-serif; 
            /* COR DO FUNDO ALTERADA PARA O TEMA STARDEW */
            background-color: #ffdcc0; /* Fundo Creme/Laranja */
            background-image: url('imagens/background_pattern.png'); /* Opcional se tiver textura */
            display: flex; 
            flex-direction: column; 
            min-height: 100vh; 
        }
        
        /* CABEÇALHO */
        header { 
            /* COR DA MADEIRA DO MENU */
            background-color: #8b5028; 
            padding: 15px 20px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            border-bottom: 4px solid #522e17; /* Borda escura */
            box-shadow: 0 4px 0 rgba(0,0,0,0.2); 
            width: 100%;
            flex-shrink: 0;
        }
        
        /* LOGO - CORREÇÃO DE EXIBIÇÃO */
        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        /* Correção: O link deve se comportar como bloco para a imagem aparecer bem */
        .logo-container a {
            display: block;
            line-height: 0; /* Remove espaços estranhos abaixo da imagem */
        }

        .logo-container img { 
            max-height: 120px; 
            width: auto; 
            max-width: 100%; 
            display: block; 
            object-fit: contain;
            /* Efeito opcional: sombra suave na logo */
            filter: drop-shadow(2px 2px 0px rgba(0,0,0,0.3));
        }

        /* MENU DE NAVEGAÇÃO */
        .buttonc { 
            text-align: center; 
            padding: 15px 10px; 
            background-color: #522e17; /* Madeira mais escura para a barra de menu */
            display: flex; 
            justify-content: center; 
            align-items: center; 
            flex-wrap: wrap; 
            gap: 10px; 
            border-bottom: 2px solid #3e2723;
            width: 100%;
            flex-shrink: 0;
        }
        
        .button-nav { 
            text-decoration: none; 
            color: #fff; 
            background-color: #8cc446; /* Verde Stardew */
            padding: 10px 20px; 
            border-radius: 4px; /* Menos arredondado (pixel art style) */
            font-size: 0.95rem; 
            font-weight: bold;
            display: inline-block;
            transition: all 0.1s;
            border: 2px solid #568c2d;
            box-shadow: inset 0 2px 0 rgba(255,255,255,0.3), 0 3px 0 #3e5c1e;
            white-space: nowrap; 
            text-shadow: 1px 1px 0 rgba(0,0,0,0.3);
        }
        
        .button-nav:hover { 
            background-color: #a2d95b; 
            transform: translateY(2px); 
            box-shadow: inset 0 2px 0 rgba(255,255,255,0.3), 0 1px 0 #3e5c1e;
        }

        /* ÁREA PRINCIPAL (CHAT) */
        .main-content {
            flex: 1; 
            display: flex;
            justify-content: center;
            align-items: center; 
            padding: 40px 20px;
            width: 100%;
        }

        /* RODAPÉ */
        footer { 
            background-color: #522e17; 
            padding: 15px 10px; 
            text-align: center; 
            color: #e6d6ad; 
            font-size: 0.8rem; 
            margin-top: auto; 
            width: 100%;
            border-top: 4px solid #3a1a06;
            flex-shrink: 0;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo-container">
            <a href="index.php" style="text-decoration: none; display: block;">
                <img src="imagens/logonicolas.png" alt="Animals Collection Logo">
            </a>
        </div>
    </header>

    <div class="buttonc">
        <a href="index.php" class="button-nav">Início</a>
        <a href="amazonia.php" class="button-nav">Introdução</a>
        <a href="jogo.php" class="button-nav">Animals Collection</a>
        <a href="sobre.php" class="button-nav">Sobre nós</a>
        <a href="indexIA.php" class="button-nav" style="background-color: #522e17; border-color: #3a1a06; color: #aaa; box-shadow: none; pointer-events: none;">Chat IA</a>
    </div>

    <div class="main-content">
        <div class="chat-container">
            <div class="chat-header">
                🌿 AInimals 🌿
            </div>

            <div id="chatBox" class="chat-box">
                <div class="message ai">
                    Olá! Sou a IA do Animals Collection. Em que posso ajudar?
                </div>
            </div>

            <div class="input-area">
                <input type="text" id="userInput" placeholder="Escreve aqui..." onkeypress="handleEnter(event)">
                <button onclick="sendMessage()">Enviar</button>
            </div>
        </div>
    </div>

    <footer>
        <p>Animals Collection - Todos os direitos reservados</p>
    </footer>

    <script src="scriptIA.js"></script>
</body>
</html>