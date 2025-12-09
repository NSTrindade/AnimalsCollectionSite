<?php
// --- CONFIGURAÇÕES DO BANCO DE DADOS (MySQL) ---
$db_host = 'localhost';
$db_user = 'root';      // Usuário padrão do XAMPP/WAMP
$db_pass = '';          // Senha padrão (geralmente vazia em localhost)
$db_name = 'animals_collection';

$mensagem_sucesso = '';
$mensagem_erro = '';
$nome = '';
$email = '';

// Processar formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $confirmacao = isset($_POST['confirmacao']) ? true : false;
    
    $erros = [];
    
    // Validações
    if (empty($nome)) $erros[] = 'Por favor, informe seu nome.';
    elseif (strlen($nome) < 3) $erros[] = 'O nome deve ter pelo menos 3 caracteres.';
    
    if (empty($email)) $erros[] = 'Por favor, informe seu email.';
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $erros[] = 'Email inválido.';
    
    if (!$confirmacao) $erros[] = 'Você precisa confirmar o recebimento.';
    
    // Se não houver erros de validação, tenta salvar no Banco
    if (empty($erros)) {
        // Conectar ao MySQL
        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        // Checar conexão
        if ($conn->connect_error) {
            $mensagem_erro = "Falha na conexão com o banco: " . $conn->connect_error;
        } else {
            // Prevenir SQL Injection usando Prepared Statements
            $stmt = $conn->prepare("INSERT INTO solicitacoes_demo (nome, email, data_solicitacao) VALUES (?, ?, NOW())");
            
            if ($stmt) {
                $stmt->bind_param("ss", $nome, $email);
                
                if ($stmt->execute()) {
                    $mensagem_sucesso = 'Registrado no sistema! Você receberá a demo manualmente em breve!';
                    $nome = ''; 
                    $email = '';
                } else {
                    $mensagem_erro = "Erro ao salvar no banco: " . $stmt->error;
                }
                $stmt->close();
            } else {
                $mensagem_erro = "Erro na preparação do comando: " . $conn->error;
            }
            $conn->close();
        }
    } else {
        $mensagem_erro = implode('<br>', $erros);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receba a Demo - Animals Collection</title>
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
        }

        /* Reset básico garantindo que padding não aumente a largura */
        * { box-sizing: border-box; }

        body { 
            font-family: 'Verdana', sans-serif; 
            background-color: var(--cor-fundo); 
            background-image: radial-gradient(#e6cba5 2px, transparent 2px);
            background-size: 20px 20px;
            min-height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            padding: 20px; 
            margin: 0;
        }

        /* CONTAINER FORMULÁRIO */
        .form-container { 
            background-color: var(--papel); 
            border: 4px solid var(--madeira-clara);
            outline: 2px solid var(--madeira-escura);
            border-radius: 4px; 
            box-shadow: 10px 10px 0 rgba(0,0,0,0.2); 
            max-width: 500px; 
            width: 100%; 
            padding: 40px; 
            position: relative; 
        }

        /* "Prego" no topo */
        .form-container::before {
            content: '';
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 20px;
            background-color: #a1887f;
            border-radius: 50%;
            box-shadow: 2px 2px 0 rgba(0,0,0,0.3);
            border: 2px solid #5d4037;
        }

        .form-header { text-align: center; margin-bottom: 30px; border-bottom: 2px dashed #c9b08a; padding-bottom: 20px; }
        .form-header .icon { font-size: 3em; margin-bottom: 10px; display: block; filter: drop-shadow(2px 2px 0 rgba(0,0,0,0.2)); }
        .form-header h1 { color: #782a0e; font-size: 1.8em; margin: 0 0 10px; }
        .form-header p { color: #5c3c24; font-size: 1em; margin: 0; }

        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; color: #782a0e; font-weight: bold; margin-bottom: 8px; font-size: 0.95em; }
        
        /* INPUTS CORRIGIDOS - Alinhamento */
        .form-group input[type="text"], 
        .form-group input[type="email"] { 
            width: 100%; /* Ocupa 100% do container pai */
            padding: 12px; 
            border: 3px solid #8e5c36; 
            border-radius: 4px; 
            font-size: 1em; 
            background-color: #fff; 
            color: #3e2723; 
            box-shadow: inset 2px 2px 0 rgba(0,0,0,0.1);
            box-sizing: border-box; /* CRUCIAL: Mantém o tamanho dentro dos limites */
            display: block;
        }
        .form-group input:focus { outline: none; border-color: var(--verde-botao); }

        .checkbox-group { 
            display: flex; 
            align-items: flex-start; 
            gap: 10px; 
            margin-bottom: 25px; 
            padding: 15px; 
            background-color: #e8dcc5; 
            border: 2px solid #d4c29e; 
            border-radius: 4px; 
            width: 100%;
            box-sizing: border-box;
        }
        .checkbox-group label { margin: 0; color: #5c3c24; font-weight: normal; cursor: pointer; }
        .checkbox-group input { margin-top: 3px; accent-color: var(--verde-botao); width: 18px; height: 18px; }

        .submit-button { 
            width: 100%; 
            padding: 15px; 
            background-color: var(--verde-botao); 
            color: #fff; 
            border: none; 
            border-radius: 2px; 
            font-size: 1.1em; 
            font-weight: bold; 
            cursor: pointer; 
            border-bottom: 4px solid #4a7a22; 
            text-shadow: 1px 1px 0 rgba(0,0,0,0.3);
            box-sizing: border-box;
        }
        .submit-button:hover { background-color: #a2d95b; transform: translateY(2px); border-bottom: 2px solid #4a7a22; }
        .submit-button:active { transform: translateY(4px); border-bottom: 0; }

        .message { padding: 15px; border-radius: 4px; margin-bottom: 20px; text-align: center; border: 2px solid; box-sizing: border-box; }
        .message-success { background-color: #dcedc8; color: #33691e; border-color: #8bc34a; }
        .message-error { background-color: #ffcdd2; color: #b71c1c; border-color: #e57373; }

        .back-link { 
            display: block; 
            text-align: center; 
            margin-top: 25px; 
            color: #8b5028; 
            text-decoration: none; 
            font-weight: bold; 
            border-top: 2px dashed #c9b08a; 
            padding-top: 15px; 
        }
        .back-link:hover { color: #a0522d; text-decoration: underline; }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <span class="icon">📩</span>
            <h1>Solicitar Demo</h1>
            <p>Preencha para receber sua cópia!</p>
        </div>

        <?php if ($mensagem_sucesso): ?>
            <div class="message message-success">
                <?php echo htmlspecialchars($mensagem_sucesso); ?>
            </div>
        <?php endif; ?>

        <?php if ($mensagem_erro): ?>
            <div class="message message-error">
                <?php echo $mensagem_erro; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="nome">Nome do Jogador</label>
                <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($nome); ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email de Contato</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
            </div>

            <div class="checkbox-group">
                <input type="checkbox" id="confirmacao" name="confirmacao" value="1" required>
                <label for="confirmacao">Quero receber a demo!</label>
            </div>

            <button type="submit" class="submit-button">
                ENVIAR PEDIDO
            </button>
        </form>

        <a href="jogo.php" class="back-link">↩ Voltar para o site</a>
    </div>
</body>
</html>