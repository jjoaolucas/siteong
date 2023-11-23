function validarEmail() {
    var emailInput = document.getElementById('emailInput');
    var email = emailInput.value;

    // Expressão regular para validar o formato do e-mail
    var regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (regex.test(email)) {
        alert('Obrigado! Agora você receberá nossas novidades por e-mail');
        // Adicione aqui o código para enviar o e-mail ou realizar outras ações necessárias.
    } else {
        alert('Por favor, insira um e-mail válido.');
    }
}