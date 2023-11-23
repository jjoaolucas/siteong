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

    var regexCelular = /^\(\d{2}\)\s\d{5}-\d{4}$/;
    var nome = document.getElementById('nomeCompleto').value;
    var email = document.getElementById('email').value;

    var celular = document.getElementById('celular').value;

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

    // Se passar por todas as validações
    alert('Sua mensagem foi enviada com sucesso!');
    return true;
  }