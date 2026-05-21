# Sistema Empresa XYZ

Mini sistema desenvolvido em PHP para praticar:

* Sessões
* Cookies
* Include / Require
* Organização de arquivos
* Navegação entre páginas
* Tema claro e escuro

---

# Funcionalidades

✅ Login simples com nome do usuário
✅ Armazenamento do usuário usando sessão
✅ Preferência de empresa usando cookie
✅ Alternância entre modo claro e escuro
✅ Navegação entre páginas
✅ Organização utilizando require_once

---

# Estrutura do Projeto

```txt
S10_R1_AT1/
│
├── css/
│   └── style.css
│
├── index.php
├── perfil.php
├── logout.php
├── tema.php
├── header.php
├── footer.php
└── README.md
```

---

# Tecnologias Utilizadas

* PHP
* HTML5
* CSS3

---

# Como Executar

## 1. Abrir terminal na pasta do projeto

```bash
php -S 127.0.0.1:8000
```

---

## 2. Abrir no navegador

```txt
http://127.0.0.1:8000
```

---

# Conceitos Aplicados

## Sessão

Utilizada para manter o usuário logado durante a navegação.

```php
$_SESSION["usuario"]
```

---

## Cookie

Utilizado para salvar:

* empresa favorita
* tema claro/escuro

```php
$_COOKIE["empresa"]
$_COOKIE["tema"]
```

---

## Include / Require

Utilizado para reutilizar:

* cabeçalho
* rodapé

```php
require_once "header.php";
require_once "footer.php";
```

---

# Autor

Luan Basani
