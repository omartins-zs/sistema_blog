<div align="center">

<img src="https://skillicons.dev/icons?i=php,mysql,docker,html,css,js,bootstrap" height="50" />

<h1>Sistema Blog — CodeIgniter 3</h1>

<p>Blog completo com painel administrativo, autenticação e gestão de conteúdo — desenvolvido em PHP com CodeIgniter 3, Bootstrap 4 e MySQL, totalmente dockerizado.</p>

<br/>

![PHP](https://img.shields.io/badge/PHP-7.4-777BB4?style=flat-square&logo=php&logoColor=white)
![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3.x-EF4223?style=flat-square&logo=codeigniter&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7-4479A1?style=flat-square&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-4.x-7952B3?style=flat-square&logo=bootstrap&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-Ready-2496ED?style=flat-square&logo=docker&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)

</div>

---

## 🚦 Status do Projeto

<h4 align="center">✅ Sistema Blog &nbsp;|&nbsp; 🚀 Concluído ✔️</h4>

---

## 🏗️ Arquitetura

| Tipo | Detalhes |
|------|----------|
| 🧱 **Monólito MVC** | Frontend público + painel admin no mesmo projeto |
| Padrão | MVC (Model-View-Controller) via CodeIgniter 3 |
| Servidor | Apache + mod_rewrite |
| Autenticação | Sessão PHP com hash SHA-512 + encryption key |

---

## 🔥 Pré-Requisitos

### Modo Docker (recomendado)
- [Docker Desktop](https://www.docker.com/products/docker-desktop/) 4.x+

### Modo Local (Laragon / XAMPP)
- PHP 7.4+
- MySQL 5.7+
- Apache com `mod_rewrite` habilitado
- Composer 2.x (opcional, apenas para dev tools)

---

## 🚀 Tecnologias Utilizadas

| Tecnologia | Versão | Função |
|------------|--------|--------|
| **PHP** | 7.4 | Linguagem principal |
| **CodeIgniter** | 3.x | Framework MVC |
| **MySQL** | 5.7 | Banco de dados relacional |
| **Bootstrap** | 4.x | UI do blog público |
| **SB Admin 2** | — | Template do painel administrativo |
| **jQuery** | 3.x | Interações JavaScript |
| **Apache** | 2.4 | Servidor web |
| **Docker** | — | Containerização |
| **phpMyAdmin** | 5.x | Administração do banco |

---

## 🔨 Funcionalidades

### 🌐 Blog Público
- [x] Listagem de artigos com imagem, autor, data e categoria
- [x] Página de detalhe do post
- [x] Filtragem de posts por categoria
- [x] Sidebar com contador de posts por categoria
- [x] Página Sobre e Contato
- [x] Mapa de localização via OpenStreetMap (sem API Key)
- [x] Tema **Dark / Light** com persistência via `localStorage`
- [x] Design responsivo com Bootstrap 4

### 🔐 Autenticação
- [x] Login com e-mail e senha
- [x] Hash seguro `sha512(senha + encryption_key)`
- [x] Proteção de todas as rotas do painel admin
- [x] Logout com confirmação
- [x] Flashdata para mensagens de erro/sucesso

### 🛠️ Painel Administrativo (SB Admin 2)
- [x] Dashboard com estatísticas reais (total de posts, categorias)
- [x] Tabela dos últimos artigos com imagem e atalho de edição
- [x] CRUD completo de **Artigos** (criar, editar, excluir)
- [x] Upload de imagem para posts (jpg, png, jpeg — max 1MB)
- [x] CRUD completo de **Categorias**
- [x] Sidebar com item ativo dinâmico
- [x] Navbar com breadcrumb, nome do usuário e atalhos rápidos
- [x] DataTables com busca e paginação
- [x] Fallback de imagem quebrada (`onerror`)

### 🐳 Docker
- [x] Ambiente completamente dockerizado (3 containers)
- [x] MySQL com init SQL automático
- [x] phpMyAdmin integrado
- [x] Script `start.bat` para Windows

---

## 🎯 Sobre o Projeto

Sistema blog desenvolvido com **CodeIgniter 3** demonstrando boas práticas de desenvolvimento PHP com arquitetura MVC. O projeto conta com frontend público para leitura de artigos e painel administrativo completo para gestão de conteúdo, inteiramente containerizado com Docker para execução em qualquer ambiente sem configurações adicionais.

---

## 📸 Preview

> 🚧 Adicione screenshots do projeto na pasta `docs/` e referencie aqui.

---

## 🐳 Executar com Docker

```bash
# 1. Clonar o repositório
git clone https://github.com/omartins-zs/sistema_blog.git
cd sistema_blog

# 2. Subir os containers
docker compose up -d --build

# 3. Aguardar ~15s para o MySQL inicializar
# 4. Acessar
```

| Serviço | URL |
|---------|-----|
| 🌐 Blog | http://localhost:8080 |
| 🔐 Admin | http://localhost:8080/user/login |
| 🗄️ phpMyAdmin | http://localhost:8081 |

---

## 💻 Executar Localmente (Laragon / XAMPP)

```bash
# 1. Clonar na pasta www do Laragon
cd c:/laragon/www
git clone https://github.com/omartins-zs/sistema_blog.git

# 2. Criar banco de dados
# Nome: blog_ci3 | Charset: utf8mb4

# 3. Importar estrutura
# Arquivo: docker/mysql/init.sql

# 4. Ajustar config se necessário
# application/config/database.php
#   hostname → localhost
#   username → root
#   password → (vazia no Laragon)
```

| Serviço | URL |
|---------|-----|
| 🌐 Blog | http://localhost/sistema_blog |
| 🔐 Admin | http://localhost/sistema_blog/user/login |

---

## 🔑 Credenciais de Teste

| Perfil | E-mail | Senha |
|--------|--------|-------|
| Administrador | `admin@gmail.com` | `admin123` |
| Editor | `fagner@gmail.com` | `fagner123` |

> ⚠️ Hash: `sha512(senha + encryption_key)`. Use apenas em ambiente local/Docker.

---

## 🗺️ Rotas Principais

### Blog Público
| Rota | Descrição |
|------|-----------|
| `/` | Home — listagem de artigos |
| `/blog/post/{id}` | Detalhe do post |
| `/blog/categoria/{id}` | Posts por categoria |
| `/blog/sobre` | Página Sobre |
| `/blog/contato` | Página Contato |

### Painel Admin
| Rota | Descrição |
|------|-----------|
| `/user/login` | Login |
| `/admin/dashboard` | Dashboard |
| `/admin/post` | Listar artigos |
| `/admin/post/editar` | Novo artigo |
| `/admin/post/editar/{id}` | Editar artigo |
| `/admin/post/delete/{id}` | Excluir artigo |
| `/admin/categoria` | Listar categorias |
| `/admin/categoria/editar/{id?}` | Criar/editar categoria |
| `/user/logout` | Logout |

---

## 🧱 Estrutura do Projeto

```
sistema_blog/
├── application/
│   ├── config/          # Configurações (DB, rotas, sessão)
│   ├── controllers/
│   │   ├── Blog.php     # Frontend do blog
│   │   ├── User.php     # Autenticação
│   │   └── admin/       # Painel admin (Dashboard, Post, Categoria)
│   ├── models/          # Post_model, Categoria_model, User_model
│   ├── views/
│   │   ├── components/  # header, footer, menu, sidebar
│   │   ├── admin/       # Layouts e views do painel
│   │   └── *.php        # Views do blog público
│   └── helpers/         # blog_helper (format_date, limitePalavras)
├── assets/
│   ├── css/             # Bootstrap, animate, theme.css (dark/light)
│   ├── js/              # jQuery, Bootstrap JS, main.js
│   ├── images/          # Imagens dos posts
│   └── admin/           # Assets do SB Admin 2
├── docker/
│   └── mysql/init.sql   # Script SQL de inicialização
├── docs/                # Documentação
├── Dockerfile           # PHP 7.4 + Apache
├── docker-compose.yml   # app + db + phpmyadmin
└── start.bat            # Inicialização rápida no Windows
```

---

## 🐳 Containers Docker

| Container | Imagem | Porta |
|-----------|--------|-------|
| `sistema_blog_app` | `php:7.4-apache` | `8080 → 80` |
| `sistema_blog_db` | `mysql:5.7` | `3306 → 3306` |
| `sistema_blog_phpmyadmin` | `phpmyadmin/phpmyadmin` | `8081 → 80` |

---

## 📝 Melhorias Futuras

- [ ] Paginação no blog público
- [ ] Sistema de comentários nos posts
- [ ] Tags além de categorias
- [ ] Editor WYSIWYG para o conteúdo dos posts
- [ ] Upload múltiplo de imagens
- [ ] Sistema de usuários com múltiplos níveis de acesso
- [ ] API REST para consumo externo
- [ ] Cache de views no CodeIgniter

---

## 📄 Documentação

| Arquivo | Descrição |
|---------|-----------|
| [`docs/ACESSOS_TESTES.md`](docs/ACESSOS_TESTES.md) | Credenciais e URLs de teste |
| [`docker/mysql/init.sql`](docker/mysql/init.sql) | Script SQL de inicialização |
| [`blog_sistema.txt`](blog_sistema.txt) | Anotações originais do projeto |

---

<div align="center">

Feito com ❤️ por **Gabriel Martins** 🚀

[![GitHub](https://img.shields.io/badge/GitHub-omartins--zs-181717?style=flat-square&logo=github)](https://github.com/omartins-zs)

</div>
