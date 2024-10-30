# Login App PHP - Template

Este projeto é um **template de login básico** em PHP, ideal para ser adaptado e integrado em projetos maiores. A proposta é oferecer uma base funcional mínima que pode ser expandida conforme as necessidades do projeto principal.

---

## 📑 **Descrição do Projeto**

Este template é composto por três páginas principais:  
1. **Login** (`index.php`)  
2. **Criar Conta** (`create_account.php`)  
3. **Recuperar Conta** (`recover_account.php`)  

### **Funcionalidade Base**

- **Login**: Permite ao usuário tentar autenticar-se (apenas o layout, sem funcionalidade de login real).  
- **Criar Conta**: Página para cadastro de novas contas.  
- **Recuperar Conta**: Permite redefinir a senha esquecida.  

Os botões **OK** em todas as páginas não foram implementados por duas razões:
1. **Segurança**: Evita operações não seguras durante o desenvolvimento.
2. **Adaptabilidade**: Cada projeto pode implementar as ações conforme suas necessidades específicas.

### **Estrutura de Arquivos**

```
loginappPHP/
│
├── css/
│   └── style.css
├── js/
│   └── script.js
├── index.php
├── login.php
├── create_account.php
├── .gitignore
├── README.md
└── recover_account.php

```

--

## 🛠 **Instalação e Execução**

### **Pré-requisitos**
- PHP instalado
- Visual Studio Code (VS Code)
- Acesso ao terminal em um ambiente Linux

### **Passos para Executar**

1. **Clonar o Repositório**:
   ```bash
   git clone <URL_DO_REPOSITORIO>
   cd loginappPHP
   ```

2. **Rodar o Servidor PHP**:

```bash

php -S localhost:8000
```

3. **Acessar o Projeto no Navegador**: Abra o navegador e acesse:
[http://localhost:8000/index.php](http://localhost:8000/index.php)

---

## Versão do projeto
**10-30-2024**: Criação do template do projeto de login via PHP,

# Conclusão

Este projeto é apenas um template e pode ser utilizado como __ponto de partida__ para outros projetos PHP. Ele foi desenvolvido para ser adaptável e integrado em projetos maiores, eliminando a necessidade de criar tudo do zero.

Os botões OK nas três telas __não possuem__ implementação funcional para que possam ser configurados conforme as regras e necessidades do projeto principal. Dessa forma, mantemos o foco na segurança e flexibilidade.