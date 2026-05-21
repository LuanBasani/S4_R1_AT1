# Relatório Automático de Funcionários

Este projeto foi desenvolvido para a **Etapa 7 – Desafio Profissional Inicial**, na **Atividade 6 – Mini Desafio**.

O objetivo é criar uma página em PHP que repita informações automaticamente usando laços de repetição.

## Funcionalidades

- Exibe uma lista de funcionários
- Usa laço de repetição `for`
- Mostra nome, cargo e salário de cada funcionário
- Usa `if` para verificar o status do salário
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

O arquivo `index.php` possui uma lista de funcionários com nome, cargo e salário.

Depois, o código usa um laço `for` para repetir automaticamente a exibição dessas informações na tela.

Também foi usado um `if` para verificar se o salário do funcionário é maior ou igual a R$ 3000.

## Autoavaliação

### Consigo repetir uma tarefa automaticamente?

Sim. Usei o `for` para repetir a exibição dos funcionários automaticamente.

### Sei quando usar for ou while?

Sim. Usei o `for` porque a quantidade de funcionários já estava definida na lista.

### Meu código está seguro e organizado?

Sim. O código está comentado, organizado e o laço possui início e fim definidos, evitando loop infinito.

## Critérios atendidos

- Uso de `for`
- Controle correto da repetição
- Uso de lógica com `if`
- Código comentado
- Código organizado
- Sem loop infinito

## Autor

Feito por **Luan Basani**.
