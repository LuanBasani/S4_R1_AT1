# Formulário de Contato com PHP

Este projeto foi desenvolvido para o **Desafio Profissional Inicial – Mini Desafio**, com o objetivo de criar um formulário funcional em PHP que receba e exiba dados enviados pelo usuário.

## Objetivo

Criar um formulário HTML que envie dados utilizando o método **POST** e exiba as informações em outra página com PHP.

## Funcionalidades

- Formulário com:
  - Nome
  - E-mail
  - Mensagem
- Envio de dados via POST
- Exibição dos dados enviados
- Separação entre HTML e PHP
- CSS separado em outro arquivo
- Botão para voltar ao formulário

## Tecnologias utilizadas

- HTML5
- CSS3
- PHP

## Como executar o projeto

1. Abra a pasta do projeto no terminal.

2. Execute o servidor PHP:

```bash
php -S localhost:8000
```

3. Abra no navegador:

```txt
http://localhost:8000
```

## Estrutura do projeto

```txt
S9_R1_AT1/
│
├── css/
│   └── style.css
│
├── index.php
├── processa.php
└── README.md
```

## Sobre o código

### index.php
Contém o formulário HTML responsável pelo envio dos dados.

### processa.php
Recebe os dados enviados pelo formulário utilizando `$_POST` e exibe as informações na tela.

### style.css
Responsável pela estilização da página.

## Critérios atendidos

- Formulário HTML funcional
- Uso do método POST
- Múltiplos campos no formulário
- PHP recebendo e exibindo dados
- Organização de arquivos
- Separação entre HTML, CSS e PHP

## Autor

Feito por **Luan Basani**