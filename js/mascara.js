function mascaraCelular(celular) {
    celular.value = celular.value.replace(/\D/g, ""); // Remove tudo que não é dígito
    celular.value = celular.value.replace(/^(\d{2})(\d)/g, "($1) $2"); // Coloca parênteses em volta dos dois primeiros dígitos e adiciona espaço
    celular.value = celular.value.replace(/(\d{5})(\d{4})/, "$1-$2"); // Separa o quinto dígito com um hífen
    if (celular.value.length > 15) { // Inclui espaço após parênteses, por isso 15 caracteres
      celular.value = celular.value.slice(0, 15); // Corta o valor em 15 caracteres (máximo permitido)
    }
  }

  function validarFormulario() {
    const regexNome = /^[a-zA-Z\u00C0-\u00FF\s]+$/;
    const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const regexCelular = /^\(\d{2}\) \d{5}-\d{4}$/;
    const regexSenha = /.{6,}/; 

    const nome = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const celular = document.getElementById('phone').value; 
    const senha = document.getElementById('password').value;

    if (!regexNome.test(nome)) {
      alert('Por favor, insira um nome válido.');
      return false;
    }

    if (!regexEmail.test(email)) {
      alert('Por favor, insira um e-mail válido.');
      return false;
    }

    if (!regexCelular.test(celular)) {
      alert('Por favor, insira um número de celular válido.');
      return false;
    }

    if (!regexSenha.test(senha)) {
      alert('Por favor, insira uma senha válida.');
      return false;
    }

    
    alert('Sua mensagem foi enviada com sucesso!');
    return true; 
  }