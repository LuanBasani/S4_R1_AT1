# Dados de Empresa

Projeto simples feito em **PHP** para calcular e comparar dados básicos de uma empresa.

## Objetivo

Criar uma página que mostre informações da empresa e realize cálculos usando operadores em PHP.

## O que o projeto faz

- Mostra o nome da empresa
- Calcula o lucro anual
- Calcula o tempo de empresa
- Compara se a empresa é de médio porte
- Exibe os resultados na página usando `echo`

## Cálculos usados

```php
$lucro = $ganho - $gasto;
$tempoEmpresa = $anoAtual - $anoFundacao;
```

## Comparação usada

```php
$mediaEmpresa = $funcionarios >= 50;
```

## Tecnologias usadas

- HTML
- PHP

## Como executar

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

## Exemplo de resultado

```txt
Nome da Empresa: Bia Lanches
Lucro anual: R$ 100000
Tempo de empresa: 16 anos
Empresa de médio porte? Não
```

## Sobre a atividade

Atividade feita para praticar operadores aritméticos, operadores de comparação, concatenação, comentários e organização de código em PHP.
