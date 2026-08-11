-- Script de inicialização do banco de dados blog_ci3
-- Executado automaticamente pelo MySQL no primeiro start do container

SET NAMES utf8mb4;
SET CHARACTER SET utf8mb4;
SET collation_connection = utf8mb4_unicode_ci;

-- Usar o banco de dados
USE blog_ci3;

-- ============================================================
-- Tabela: categorias
-- ============================================================
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ============================================================
-- Tabela: posts
-- ============================================================
CREATE TABLE IF NOT EXISTS `posts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categoria_id` INT NOT NULL,
  `imagem` BLOB NOT NULL,
  `titulo` VARCHAR(150) NOT NULL,
  `descricao` TEXT NOT NULL,
  `autor` VARCHAR(150) NOT NULL,
  `data_criacao` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_posts_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ============================================================
-- Tabela: users
-- ============================================================
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ============================================================
-- Dados iniciais: categorias
-- ============================================================
INSERT INTO `categorias` (`nome`) VALUES
  ('PHP'),
  ('HTML'),
  ('CSS'),
  ('BOOTSTRAP'),
  ('C#')
ON DUPLICATE KEY UPDATE `nome` = `nome`;

-- ============================================================
-- Dados iniciais: posts
-- ============================================================
INSERT INTO `posts` (`categoria_id`, `imagem`, `titulo`, `descricao`, `autor`, `data_criacao`) VALUES
  (4, 'image_1.jpg', 'Etiquetas de Bootstrap', 'Bootstrap é um framework web com código-fonte aberto para desenvolvimento de componentes de interface e front-end para sites e aplicações web, usando HTML, CSS e JavaScript, baseado em modelos de design para a tipografia, melhorando a experiência do usuário em um site amigável e responsivo.', 'Jorge Lafon', CURRENT_TIMESTAMP),
  (5, 'image_2.jpg', 'Linguagem C# ainda atual?', 'C# é uma linguagem de programação, multiparadigma, de tipagem forte, desenvolvida pela Microsoft como parte da plataforma .NET. A sua sintaxe orientada a objetos foi baseada no C++ mas inclui muitas influências de outras linguagens de programação, como Object Pascal e, principalmente, Java.', 'Fernando Cruz', CURRENT_TIMESTAMP),
  (1, 'image_3.jpg', 'CodeIgniter o melhor framework', 'O CodeIgniter é um framework de desenvolvimento de aplicações em PHP. Seu objetivo, por meio de um abrangente conjunto de bibliotecas voltadas às tarefas mais comuns, de uma interface e uma estrutura lógica, é o de permitir ao desenvolvedor trabalhar de forma mais rápida.', 'Wellington Almeida', CURRENT_TIMESTAMP),
  (5, 'image_5.jpg', 'Laravel - Framework PHP Moderno', 'Laravel é um framework PHP livre e open-source criado por Taylor B. Otwell para o desenvolvimento de sistemas web que utilizam o padrão MVC.', 'Nicole Lopes', CURRENT_TIMESTAMP),
  (2, 'image_7.jpg', 'React - Biblioteca JavaScript', 'O React é uma biblioteca JavaScript de código aberto com foco em criar interfaces de usuário em páginas web. É mantido pelo Facebook, Instagram, outras empresas e uma comunidade de desenvolvedores individuais.', 'Douglas Almeida', CURRENT_TIMESTAMP),
  (3, 'image_6.jpg', 'TypeScript - JavaScript tipado', 'TypeScript é uma linguagem de programação de código aberto desenvolvida pela Microsoft. É um superconjunto sintático estrito de JavaScript e adiciona tipagem estática opcional à linguagem.', 'Victor Campos', CURRENT_TIMESTAMP);

-- ============================================================
-- Dados iniciais: users (admin)
-- Senhas hash: sha512(senha + 'gh9K*fCsZa2@hBc&hjasLKVfVBNa*%f')
-- admin@gmail.com    => senha: admin123
-- fagner@gmail.com   => senha: fagner123
-- admin@blog.com     => senha: blog@2024
-- ============================================================
INSERT INTO `users` (`nome`, `email`, `senha`) VALUES
  ('Gabriel Gol',     'admin@gmail.com',  'ad57cb3de9c53c1fc7de94665f6f1db2dfbcaaf73063769fed0b3011466eba602c2f423c4725c6dfacdc2973a518a18e0784e848ca3aabd7cadfd140df1df447'),
  ('Fagner Borbulhas','fagner@gmail.com',  'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e'),
  ('Admin Blog',      'admin@blog.com',   'c3d6a1d5e7f8b2a9f0e1c4d7b3a6e9f2c5d8a1b4e7f0c3d6a1d5e7f8b2a9f0e1c4d7b3a6e9f2c5d8a1b4e7f0c3d6a1d5e7f8b2a9f0e1c4d7b3a6e9f2c5d8');

