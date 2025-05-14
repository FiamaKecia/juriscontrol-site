# 🏛️ JurisControl - Sistema de Controle Jurídico

Sistema acadêmico de controle de usuários, com foco em cadastro, alteração, exclusão e listagem de usuários.

Projeto desenvolvido em PHP com MySQL, utilizando Bootstrap 5 para interface.

---

## 📂 Estrutura do Projeto

juriscontrol-site/
├── inc/
│ ├── conexao.php
│ └── funcoes.php
├── usuarios/
│ ├── usuario_listar.php
│ ├── usuario_cadastrar.php
│ ├── usuario_editar.php
│ ├── usuario_excluir.php
│ ├── usuario_incluir.php
│ └── usuario_salvar.php
├── logs/
│ └── (gerados automaticamente)
├── imagens/
│ └── login.jpg
└── index.php

---

## 🚀 Como executar no XAMPP

1. Copie a pasta `juriscontrol-site` para `C:\xampp\htdocs\`.
2. Inicie o **Apache** no Painel do XAMPP.
3. Acesse no navegador:
http://localhost/juriscontrol-site/index.php

4. Utilize o botão **Cadastrar Login** para criar seu primeiro usuário.
5. Após cadastro, use o login para acessar o sistema.

---

## 💾 Banco de Dados

- Banco: `juridicodev`
- Tabela de usuários: `seguranca_tbUsuarios`
- A estrutura de tabelas deve ser previamente criada no MySQL.
- Os logs de consultas SQL são salvos automaticamente na pasta `logs/`.

---

## 🔐 Fluxo de Telas

| Tela                       | Descrição                                         |
|----------------------------|---------------------------------------------------|
| `index.php`                 | Tela de login com AJAX                           |
| `usuarios/usuario_listar.php` | Listagem de usuários, com opções de excluir ou editar |
| `usuarios/usuario_cadastrar.php` | Formulário de cadastro via AJAX               |
| `usuarios/usuario_editar.php` | Tela para alterar dados de usuários            |
| `usuarios/usuario_excluir.php` | Executa a exclusão de usuários via AJAX       |

---

## 🛠 Tecnologias utilizadas

- PHP (padrão procedural com `mysqli`)
- MySQL
- Bootstrap 5
- jQuery

---

## 👨‍💻 Desenvolvido por

Fiama Kécia Silveira Teófilo  
Disciplina de Projeto Prático de Desenvolvimento de Aplicações Corporativas  
