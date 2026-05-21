# Sistema de Empresas com Funções

Este projeto foi desenvolvido para o **Desafio Profissional Inicial – Mini Desafio**, com o objetivo de criar uma página em PHP que organize dados de empresas utilizando **funções**.

## Objetivo

Criar uma página que exiba informações de empresas e verifique o resultado financeiro de cada uma, utilizando funções com parâmetros e retorno.

## Funcionalidades

- Exibição do nome e ano de fundação da empresa
- Verificação de lucro, prejuízo ou equilíbrio financeiro
- Funções reutilizadas para diferentes empresas
- Código organizado e comentado

## Tecnologias utilizadas

- HTML
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
projeto/
│
├── index.php
└── README.md
```

## Sobre o código

O arquivo `index.php` possui duas funções principais:

- `exibirEmpresa($nome, $anoFundacao)` — retorna os dados básicos da empresa formatados
- `checarLucro($gasto, $receita)` — retorna se a empresa teve lucro, prejuízo ou ficou no zero

As funções são reutilizadas para exibir os dados de mais de uma empresa.

## Critérios atendidos

- Pelo menos 2 funções
- Uso de parâmetros
- Pelo menos 1 função com retorno
- Funções reutilizadas
- Código comentado e organizado

## Autor

Feito por **Luan Basani**.