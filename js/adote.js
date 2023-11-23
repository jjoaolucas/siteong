// Função para adicionar a máscara de CEP
function mascaraCEP(cep) {
    cep.value = cep.value.replace(/\D/g, "");
    cep.value = cep.value.replace(/^(\d{5})(\d)/, "$1-$2");
}

// Função para adicionar a máscara do cartão de crédito
function mascaraCartao(cartao) {
    // Remove tudo o que não é dígito
    cartao.value = cartao.value.replace(/\D/g, "");

    // Adiciona um espaço a cada 4 dígitos
    cartao.value = cartao.value.replace(/(\d{4})(?=\d)/g, "$1 ");

    // Limita o tamanho do valor a 19 caracteres (16 dígitos do cartão + 3 espaços)
    if (cartao.value.length > 19) {
        cartao.value = cartao.value.slice(0, 19);
    }
}

// Função para adicionar a máscara de celular
// Função para adicionar a máscara de celular
function mascaraCelular(celular) {
    celular.value = celular.value.replace(/\D/g, ""); // Remove tudo o que não é dígito
    celular.value = celular.value.replace(/^(\d{2})(\d)/g, "($1) $2"); // Coloca parênteses em volta dos dois primeiros dígitos e adiciona espaço
    celular.value = celular.value.replace(/(\d{5})(\d)/, "$1-$2"); // Separa o quinto dígito com um hífen
    if (celular.value.length > 15) { // Inclui espaço após parênteses, por isso 15 caracteres
      celular.value = celular.value.slice(0, 15); // Corta o valor em 15 caracteres (máximo permitido)
    }
  }
  

// Função para validar o formulário
function validarFormulario() {
    var regexNome = /^[a-zA-Z\u00C0-\u00FF\s]+$/;
    var regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var regexEndereco = /^[a-zA-Z0-9\s,.]+$/;
    var regexCidade = /^[a-zA-Z\u00C0-\u00FF\s]+$/;
    var regexCEP = /^\d{5}-\d{3}$/;
    var regexCartao = /^\d{4}\s\d{4}\s\d{4}\s\d{4}$/;
    var regexCVV = /^\d{3}$/;
    var regexCelular = /^\(\d{2}\)\d{5}-\d{4}$/; // Expressão regular para validar celular

    var nome = document.getElementById('nomeCompleto').value;
    var email = document.getElementById('email').value;
    var endereco = document.getElementById('endereco').value;
    var cidade = document.getElementById('cidade').value;
    var cep = document.getElementById('cep').value;
    var cartao = document.getElementById('numeroCartao').value;
    var cvv = document.getElementById('cvv').value;
    var celular = document.getElementById('celular').value; // Assumindo que você tem um input com id="celular"

    if (!regexCelular.test(celular)) {
        alert('Por favor, insira um número de celular válido.');
        return false;
    }

    if (!regexNome.test(nome)) {
        alert('Por favor, insira um nome válido.');
        return false;
    }

    if (!regexEmail.test(email)) {
        alert('Por favor, insira um e-mail válido.');
        return false;
    }

    if (!regexEndereco.test(endereco)) {
        alert('Por favor, insira um endereço válido.');
        return false;
    }

    if (!regexCidade.test(cidade)) {
        alert('Por favor, insira uma cidade válida.');
        return false;
    }

    if (!regexCEP.test(cep)) {
        alert('Por favor, insira um CEP válido.');
        return false;
    }

    if (!regexCartao.test(cartao)) {
        alert('Por favor, insira um número de cartão válido.');
        return false;
    }

    if (!regexCVV.test(cvv)) {
        alert('Por favor, insira um CVV válido.');
        return false;
    }

    // Se passar por todas as validações
    alert('Obrigado por fazer a diferença! Sua doação foi enviada com sucesso!');
    return true;
}