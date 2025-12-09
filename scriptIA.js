function generateResponse() {
    var text = document.getElementById("text");
    var response = document.getElementById("response");

    fetch("responseIA.php",{
        method: "POST",
        body: JSON.stringify({
            text: text.value,
        }),
    })
    .then((res) => res.text())
    .then((res) => {
        response.innerHTML = res;
    });
}

// scriptIA.js

function sendMessage() {
    var input = document.getElementById("userInput");
    var chatBox = document.getElementById("chatBox");
    var text = input.value.trim();

    if (text === "") return;

    // 1. Adicionar Mensagem do Utilizador ao Chat
    addMessage(text, 'user');
    input.value = ""; // Limpar input

    // 2. Mostrar indicador de "A escrever..." (Opcional, mas fica bonito)
    var loadingId = addMessage("...", 'ai');

    // 3. Enviar para o PHP
    fetch('responseIA.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ text: text })
    })
    .then(response => response.text())
    .then(data => {
        // Remover a mensagem de "..." e adicionar a resposta real
        var loadingMsg = document.getElementById(loadingId);
        if(loadingMsg) loadingMsg.remove();
        
        addMessage(data, 'ai');
    })
    .catch(error => {
        console.error('Erro:', error);
        addMessage("Erro de conexão. Tenta novamente.", 'ai');
    });
}

// Função auxiliar para criar as bolhas no HTML
function addMessage(text, sender) {
    var chatBox = document.getElementById("chatBox");
    var msgDiv = document.createElement("div");
    
    // Adiciona as classes CSS (message + user ou ai)
    msgDiv.classList.add("message");
    msgDiv.classList.add(sender);
    
    // ID único temporário (útil para remover o loading)
    var id = "msg-" + new Date().getTime();
    msgDiv.id = id;

    msgDiv.innerText = text;
    chatBox.appendChild(msgDiv);

    // Rolar para baixo automaticamente
    chatBox.scrollTop = chatBox.scrollHeight;

    return id;
}

// Permitir enviar com a tecla ENTER
function handleEnter(e) {
    if (e.key === "Enter") {
        sendMessage();
    }
}