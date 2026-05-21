# S5_R1_AT1 - Decisões com PHP

## 📌 Descrição

Este projeto foi desenvolvido para o **Desafio Profissional Inicial**, com o objetivo de criar uma página em PHP que toma decisões com base em dados de uma empresa.

A página analisa informações como:

- Porte da empresa
- Tempo de mercado
- Setor de atuação
- Status financeiro

## 🛠️ Tecnologias utilizadas

- HTML5
- PHP

## 📂 Arquivo principal

```text
index.php
```

## 💻 Como funciona

O código utiliza estruturas condicionais para tomar decisões com base nos dados da empresa.

Foram usadas as seguintes estruturas:

- `if`
- `elseif`
- `else`
- `switch`

Essas condições analisam informações como número de funcionários, tempo de mercado, lucro anual e setor da empresa.

## 🧠 Exemplos de decisões feitas

Exemplo de decisão sobre o porte da empresa:

```php
if ($funcionarios <= 10) {
    echo "Pequeno porte";
} elseif ($funcionarios <= 50) {
    echo "Médio porte";
} else {
    echo "Grande porte";
}
```

Exemplo de decisão usando `switch` para verificar o setor da empresa:

```php
switch ($setor) {
    case "alimentação":
        echo "Empresa atua no setor de alimentos.";
        break;

    case "tecnologia":
        echo "Empresa atua no setor de tecnologia.";
        break;

    case "educação":
        echo "Empresa atua no setor educacional.";
        break;

    default:
        echo "Setor não cadastrado.";
        break;
}
```

## ▶️ Como executar

Para executar o projeto, use o servidor embutido do PHP.

Primeiro, abra o terminal dentro da pasta do projeto.

Depois execute o comando:

```bash
php -S localhost:8000
```

Em seguida, abra o navegador e acesse:

```text
http://localhost:8000
```

O arquivo `index.php` será carregado automaticamente.

> Observação: o comando correto usa **S maiúsculo**: `php -S localhost:8000`.

## 📊 Dados usados no exemplo

A empresa utilizada como exemplo foi:

```text
Nome: Bia Lanches
Setor: Alimentação
Ano de fundação: 2010
Funcionários: 20
Faturamento anual: R$ 200.000
Gastos anuais: R$ 100.000
```

## ✅ Objetivo da atividade

O objetivo da atividade é demonstrar o uso de lógica condicional em PHP, criando decisões coerentes com o contexto de uma empresa.

## 📝 Autoavaliação

Nesta atividade, eu criei uma página em PHP que toma decisões com base nos dados de uma empresa.

Usei `if`, `elseif` e `else` para verificar o porte da empresa, o tempo de mercado e o status financeiro. Também utilizei `switch` para identificar o tipo de setor da empresa.

A lógica foi feita pensando em informações reais de uma empresa, como número de funcionários, lucro, ano de fundação e setor de atuação.

Acredito que consegui organizar o código de forma clara, com comentários e condições coerentes com o contexto proposto.

## 👨‍💻 Autor

Desenvolvido por **Jorge Carneiro**.
