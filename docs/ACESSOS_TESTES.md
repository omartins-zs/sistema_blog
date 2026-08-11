# 🔐 Acessos e Dados de Teste

Utilize as credenciais abaixo para testar as diferentes visões e permissões do sistema. Todos os usuários e registros foram gerados automaticamente via *Seeders* (neste projeto CodeIgniter, eles vêm do arquivo `init.sql`).

## 1. Acesso ao Sistema (Usuários de Teste)

| Perfil | E-mail / Usuário | Senha | Permissão / Detalhes |
| --- | --- | --- | --- |
| Admin Principal | `admin@gmail.com` | `admin123` | Administrador com acesso total ao painel para gestão de posts e categorias. |
| Admin Secundário | `fagner@gmail.com` | `fagner123` | Administrador com acesso ao painel para gestão de posts e categorias. |
| Admin Teste | `admin@blog.com` | `blog@2024` | Administrador com acesso ao painel para gestão de posts e categorias. |

## 2. URLs Principais

| Ambiente | Aplicação (Home) | Login / Painel |
| --- | --- | --- |
| **Docker** | `http://localhost:8080` | `http://localhost:8080/user/login` |
| **Local** (Ex: Laragon / XAMPP) | `http://localhost/sistema_blog` | `http://localhost/sistema_blog/user/login` |

## 3. Vitrine Pública / Páginas para Clientes

| Item | Link (Exemplo Docker) |
| --- | --- |
| Home (Lista de Artigos) | `http://localhost:8080/` |
| Sobre | `http://localhost:8080/blog/sobre` |
| Contato | `http://localhost:8080/blog/contato` |

## 4. Validação do Acesso

Validação da saúde da aplicação no ambiente de desenvolvimento:

| Verificação | Resultado Esperado |
| --- | --- |
| Containers (ex: `mysql`, `app`) | Saudáveis / Rodando |
| Tela de login principal | HTTP `200` |
| Login com usuário de teste | Redirecionamento para o Dashboard administrativo (`/admin/dashboard`) |

## 5. Carregar Dados de Teste

Caso o banco de dados seja apagado ou precise ser resetado, basta reiniciar os containers, pois o banco é alimentado automaticamente pelo script `init.sql` no Docker.

**Com Docker:**
```bash
docker-compose down -v
docker-compose up -d --build
```

*(O banco de dados será limpo e recriado com os dados e categorias do `init.sql` na próxima inicialização)*

---

### 📝 Observações:
- O banco de dados geralmente é alimentado com registros retroativos e informações simuladas vinculadas a esses usuários para facilitar a visualização, filtragem na tela de relatórios e validação dos fluxos.
- Use estas credenciais **apenas** em ambiente local ou Docker de desenvolvimento.
