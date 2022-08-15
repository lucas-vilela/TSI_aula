-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Ago-2022 às 01:39
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_tcc_v12`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id_avaliacao` int(11) NOT NULL,
  `nota` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comentario` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL,
  `situacao` tinyint(1) NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_quadra` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `esportes`
--

CREATE TABLE `esportes` (
  `id_esporte` int(11) NOT NULL,
  `modalidade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_modalidade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nr_jogadores` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `esportes`
--

INSERT INTO `esportes` (`id_esporte`, `modalidade`, `desc_modalidade`, `nr_jogadores`, `created_at`, `updated_at`) VALUES
(4, 'Volei', 'Areia/Duplas', '4', '2022-08-15 02:28:37', '2022-08-15 02:28:37'),
(5, 'Futebol', 'Campo', '22', '2022-08-15 02:29:49', '2022-08-15 02:29:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `firebase_agendamentos`
--

CREATE TABLE `firebase_agendamentos` (
  `status` tinyint(1) NOT NULL,
  `log_agendamento` datetime NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_horario` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ginasios`
--

CREATE TABLE `ginasios` (
  `id_ginasio` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_capa` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_registro` date NOT NULL,
  `bebidas` tinyint(1) DEFAULT NULL,
  `area_kids` tinyint(1) DEFAULT NULL,
  `wifi` tinyint(1) DEFAULT NULL,
  `qtd_vestiarios` int(11) DEFAULT NULL,
  `estacionamento` tinyint(1) DEFAULT NULL,
  `churrasqueira` tinyint(1) DEFAULT NULL,
  `qtd_banheiros` int(11) DEFAULT NULL,
  `tv_assinatura` tinyint(1) DEFAULT NULL,
  `arquibancada` tinyint(1) DEFAULT NULL,
  `lanches` tinyint(1) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `ginasios`
--

INSERT INTO `ginasios` (`id_ginasio`, `nome`, `img_capa`, `telefone`, `cep`, `data_registro`, `bebidas`, `area_kids`, `wifi`, `qtd_vestiarios`, `estacionamento`, `churrasqueira`, `qtd_banheiros`, `tv_assinatura`, `arquibancada`, `lanches`, `id_user`, `created_at`, `updated_at`) VALUES
(2, 'Planeta Bola', 'img.fake', '(53) 98190-2938', '96025230', '2022-07-27', 1, 0, 1, 0, 1, 0, 1, 0, 0, 1, NULL, '2022-08-12 17:47:59', '2022-08-15 02:15:34'),
(4, 'Arena 23', 'img.fake', '(53) 98190-0000', '96025230', '2022-08-14', 1, 0, 1, 2, 1, 1, 4, 0, 0, 1, NULL, '2022-08-15 02:21:27', '2022-08-15 02:21:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(11) NOT NULL,
  `hora_inicio` time NOT NULL,
  `preco` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_fim` time NOT NULL,
  `id_quadra` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2022_08_12_025752_create_avaliacoes_table', 1),
(20, '2022_08_12_025752_create_esportes_table', 1),
(21, '2022_08_12_025752_create_firebase_agendamentos_table', 1),
(22, '2022_08_12_025752_create_ginasios_table', 1),
(23, '2022_08_12_025752_create_horarios_table', 1),
(24, '2022_08_12_025752_create_quadras_table', 1),
(25, '2022_08_12_025752_create_users_table', 1),
(26, '2022_08_12_025753_add_foreign_keys_to_avaliacoes_table', 1),
(27, '2022_08_12_025753_add_foreign_keys_to_firebase_agendamentos_table', 1),
(28, '2022_08_12_025753_add_foreign_keys_to_ginasios_table', 1),
(29, '2022_08_12_025753_add_foreign_keys_to_horarios_table', 1),
(30, '2022_08_12_025753_add_foreign_keys_to_quadras_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quadras`
--

CREATE TABLE `quadras` (
  `id_quadra` int(11) NOT NULL,
  `nome_quadra` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimensoes` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_capa` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `piso` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ginasio` int(11) DEFAULT NULL,
  `id_esporte` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissao` int(11) DEFAULT 1,
  `img_perfil` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id_avaliacao`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_quadra` (`id_quadra`);

--
-- Índices para tabela `esportes`
--
ALTER TABLE `esportes`
  ADD PRIMARY KEY (`id_esporte`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `firebase_agendamentos`
--
ALTER TABLE `firebase_agendamentos`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_horario` (`id_horario`);

--
-- Índices para tabela `ginasios`
--
ALTER TABLE `ginasios`
  ADD PRIMARY KEY (`id_ginasio`),
  ADD KEY `id_user` (`id_user`);

--
-- Índices para tabela `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `id_quadra` (`id_quadra`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `quadras`
--
ALTER TABLE `quadras`
  ADD PRIMARY KEY (`id_quadra`),
  ADD KEY `id_ginasio` (`id_ginasio`),
  ADD KEY `id_esporte` (`id_esporte`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `esportes`
--
ALTER TABLE `esportes`
  MODIFY `id_esporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ginasios`
--
ALTER TABLE `ginasios`
  MODIFY `id_ginasio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `quadras`
--
ALTER TABLE `quadras`
  MODIFY `id_quadra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD CONSTRAINT `avaliacoes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `avaliacoes_ibfk_2` FOREIGN KEY (`id_quadra`) REFERENCES `quadras` (`id_quadra`);

--
-- Limitadores para a tabela `firebase_agendamentos`
--
ALTER TABLE `firebase_agendamentos`
  ADD CONSTRAINT `firebase_agendamentos_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `firebase_agendamentos_ibfk_2` FOREIGN KEY (`id_horario`) REFERENCES `horarios` (`id_horario`);

--
-- Limitadores para a tabela `ginasios`
--
ALTER TABLE `ginasios`
  ADD CONSTRAINT `ginasios_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Limitadores para a tabela `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`id_quadra`) REFERENCES `quadras` (`id_quadra`);

--
-- Limitadores para a tabela `quadras`
--
ALTER TABLE `quadras`
  ADD CONSTRAINT `quadras_ibfk_1` FOREIGN KEY (`id_ginasio`) REFERENCES `ginasios` (`id_ginasio`),
  ADD CONSTRAINT `quadras_ibfk_2` FOREIGN KEY (`id_esporte`) REFERENCES `esportes` (`id_esporte`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
