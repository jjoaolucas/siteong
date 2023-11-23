                 
        function validateForm() {
        const email = document.getElementById('email').value;
        const password = document.getElementById('senha').value;

        if (!emailIsValid(email)) {
            alert('Informe um email válido.');
            return false;
        }

        if (password.length < 8) {
            alert('A senha deve ter pelo menos 8 caracteres.');
            return false;
        }

        alert('Login efetuado com sucesso!');
        // Redireciona para a página desejada após o login bem-sucedido
        window.location.href = "./sgea/index.html";
        // Retorna false para evitar o envio padrão do formulário
        return false;
    }

    function emailIsValid(email) {
        const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        return emailRegex.test(email);
    }
