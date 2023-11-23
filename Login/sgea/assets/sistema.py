# Constantes
TFV = 999
TFE = 999
TFP = 999
TFH = 999

# Listas para armazenar dados
voluntarios = []
projetos = []
empresas = []
horas = []

# Função para menu principal
def menu_principal():
    return int(input(
        "\n1 - Cadastrar <Voluntario, Empresa, Projeto>.\n" +
        "2 - Excluir cadastro.\n" +
        "3 - Lancar horas.\n" +
        "4 - Relatorio.\n" +
        "5 - Finalizar\n" +
        "Opcao desejada: "))

# Função para cadastrar um tipo de entidade (Voluntario, Empresa, Projeto)
def cadastrar_entidade(entidades, tipo_entidade):
    num = int(input(f"Numero do {tipo_entidade}: "))
    if any(dado['num'] == num for dado in entidades):
        print(f"\n{tipo_entidade} ja existe!")
    else:
        nome = input(f"Nome completo do {tipo_entidade}: ")
        entidades.append({'num': num, 'nome': nome})
        print(f"\n{tipo_entidade} cadastrado!")

# Função para excluir um tipo de entidade (Voluntario, Empresa, Projeto)
def excluir_entidade(entidades, tipo_entidade):
    num = int(input(f"Numero do {tipo_entidade} que deseja excluir: "))
    if any(dado['num'] == num for dado in entidades):
        if tipo_entidade == "Voluntario":
            horas_voluntario = [hora for hora in horas if hora['numVoluntario'] == num]
            if not horas_voluntario:
                entidades[:] = [v for v in entidades if v['num'] != num]
                print(f"\n{tipo_entidade} excluido!")
            else:
                print("\nExiste horas lancadas para esse voluntario.")
        else:
            entidades[:] = [e for e in entidades if e['num'] != num]
            print(f"\n{tipo_entidade} excluido!")
    else:
        print(f"\n{tipo_entidade} nao cadastrado!")

# Função para listar dados de um tipo de entidade
def listar_entidades(entidades, tipo_entidade):
    print(f"\n{tipo_entidade}")
    for entidade in entidades:
        print(f"{entidade['num']} - {entidade['nome']}")

# Função para lançar horas em um projeto
def lancar_horas():
    cod_projeto = int(input("Codigo do projeto: "))
    if any(projeto['num'] == cod_projeto for projeto in projetos):
        num_voluntario = int(input("Numero do voluntario: "))
        num_empresa = int(input("Numero da empresa: "))
        qtd_horas = int(input("Quantidade de horas a ser lancada: "))
        hora_existente = next((hora for hora in horas if hora['numVoluntario'] == num_voluntario and hora['codProjeto'] == cod_projeto), None)
        if hora_existente:
            hora_existente['qtdhoras'] += qtd_horas
        else:
            horas.append({'qtdhoras': qtd_horas, 'codProjeto': cod_projeto, 'numVoluntario': num_voluntario, 'numEmpresa': num_empresa})
        print("\nHoras Lancada!")
    else:
        print("\nProjeto nao cadastrado!")

# Função para gerar relatórios
def gerar_relatorio(op_relatorio):
    if op_relatorio == 1:
        listar_entidades(voluntarios, "Lista de voluntarios")
    elif op_relatorio == 2:
        listar_entidades(empresas, "Lista de empresas")
    elif op_relatorio == 3:
        listar_entidades(projetos, "Lista de projetos")
    elif op_relatorio == 4:
        print("\nHORAS\tPROJETO\tVOLUNTARIO\tEMPRESA")
        for hora in horas:
            print(f"{hora['qtdhoras']}\t{hora['codProjeto']}\t{hora['numVoluntario']}\t{hora['numEmpresa']}")
    elif op_relatorio == 5:
        num_voluntario = int(input("\nNumero do voluntario que deseja consultar as horas: "))
        horas_voluntario = [hora for hora in horas if hora['numVoluntario'] == num_voluntario]
        if horas_voluntario:
            total_horas = sum(hora['qtdhoras'] for hora in horas_voluntario)
            print(f"\nO voluntario {num_voluntario} possui um total de {total_horas} horas.")
        else:
            print(f"\nVoluntario {num_voluntario} nao possui horas lancadas!")

# Programa Principal
op = menu_principal()

while op != 5:
    if op == 1:
        print("\n1 - Voluntario\n2 - Empresa\n3 - Projeto\n4 - Retornar")
        op = int(input("Opcao desejada: "))
        if op in [1, 2, 3]:
            tipo_cadastro = "Voluntario" if op == 1 else "Empresa" if op == 2 else "Projeto"
            cadastrar_entidade(voluntarios if op == 1 else empresas if op == 2 else projetos, tipo_cadastro)
    elif op == 2:
        print("\n1 - Voluntario\n2 - Empresa\n3 - Projeto\n4 - Retornar")
        op = int(input("Opcao desejada: "))
        if op in [1, 2, 3]:
            tipo_exclusao = "Voluntario" if op == 1 else "Empresa" if op == 2 else "Projeto"
            excluir_entidade(voluntarios if op == 1 else empresas if op == 2 else projetos, tipo_exclusao)
    elif op == 3:
        lancar_horas()
    elif op == 4:
        op_relatorio = int(input("\n1 - Lista de voluntarios\n2 - Lista de empresas\n3 - Lista de projetos\n4 - Historico completo de horas\n5 - Horas por voluntarios\n6 - Retornar\nOpcao desejada: "))
        gerar_relatorio(op_relatorio)
    else:
        print("\nOpcao invalida!")

    op = menu_principal()
