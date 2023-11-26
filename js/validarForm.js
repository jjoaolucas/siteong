
    function mascaraCPF(cpf) {
      cpf.value = cpf.value.replace(/\D/g, "");
      cpf.value = cpf.value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
    }
    // Função para adicionar a máscara de CEP
    function mascaraCEP(cep) {
      cep.value = cep.value.replace(/\D/g, "");
      cep.value = cep.value.replace(/^(\d{5})(\d{3})?$/, "$1-$2");
    }

    function mascaraCartao(cartao) {
      cartao.value = cartao.value.replace(/\D/g, "");
      cartao.value = cartao.value.replace(/(\d{4})(?=\d)/g, "$1 ");
      cartao.value = cartao.value.trim();

      if (cartao.value.length > 19) {
        cartao.value = cartao.value.slice(0, 19);
      }
    }

    function validarFormulario() {
      var regexNome = /^[a-zA-Z\u00C0-\u00FF\s]+$/;
      var regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      var regexEndereco = /^[a-zA-Z0-9\s,.]+$/;
      var regexCidade = /^[a-zA-Z\u00C0-\u00FF\s]+$/;
      var regexCEP = /^\d{5}-\d{3}$/;
      var regexCartao = /^\d{4}\s\d{4}\s\d{4}\s\d{4}$/;
      var regexCVV = /^\d{3}$/;
      var regexCPF = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;

      var nome = document.getElementById('nomeCompleto').value;
      var email = document.getElementById('email').value;
      var endereco = document.getElementById('endereco').value;
      var cidade = document.getElementById('cidade').value;
      var cep = document.getElementById('cep').value;
      var cartao = document.getElementById('numeroCartao').value;
      var cvv = document.getElementById('cvv').value;
      var cpf = document.getElementById('cpf').value;
      var mes = document.getElementById('mes').value;
      var ano = document.getElementById('ano').value;

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
      if (!regexCPF.test(cpf)) {
        alert('Por favor, insira um CPF válido.');
        return false;
      }
      if (mes > 12 || mes < 0 ){
        alert('Por favor, insira um MES válido.');
        return false;
      }
      if (ano < 2023){
        alert('Por favor, insira um ANO DE EXPIRAÇÃO válido.');
        return false;
      }
      
      alert('Obrigado por fazer a diferença! Sua doação foi enviada com sucesso!');
      return true;
    }
function validarCPF() {
      var cpf = event.target.value;
      var ok = 1;
      var add;
      if (cpf != "") {
         cpf = cpf.replace(/[^\d]+/g, '');
         if (cpf.length != 11 ||
            cpf == "00000000000" ||
            cpf == "11111111111" ||
            cpf == "22222222222" ||
            cpf == "33333333333" ||
            cpf == "44444444444" ||
            cpf == "55555555555" ||
            cpf == "66666666666" ||
            cpf == "77777777777" ||
            cpf == "88888888888" ||
            cpf == "99999999999")
                ok = 0;
         if (ok == 1) {
            add = 0;
            for (i = 0; i < 9; i++)
               add += parseInt(cpf.charAt(i)) * (10 - i);
               rev = 11 - (add % 11);
               if (rev == 10 || rev == 11)
                  rev = 0;
               if (rev != parseInt(cpf.charAt(9)))
                  ok = 0;
               if (ok == 1) {
                  add = 0;
                  for (i = 0; i < 10; i++)
                     add += parseInt(cpf.charAt(i)) * (11 - i);
                  rev = 11 - (add % 11);
                  if (rev == 10 || rev == 11)
                     rev = 0;
                  if (rev != parseInt(cpf.charAt(10)))
                     ok = 0;
               }
           }
           if (ok == 0) {
              alert("Ops... Ocorreu um problema... CPF inválido!");
              //event.target.focus();
           }
       }
   }