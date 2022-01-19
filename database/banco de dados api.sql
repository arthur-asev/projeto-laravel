-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela curso-laravel.dogs: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `dogs` DISABLE KEYS */;
INSERT INTO `dogs` (`id`, `raca`, `nome`, `porte`, `created_at`, `updated_at`) VALUES
	(1, 'Pastor Alemão', 'Marley', 'grande', '2022-01-19 00:39:55', '2022-01-19 00:39:55'),
	(2, 'Yorkshire', 'Laila', 'pequeno', '2022-01-19 00:42:30', '2022-01-19 00:42:30'),
	(3, 'PitBull', 'Thor', 'médio', '2022-01-19 00:48:12', '2022-01-19 00:48:12');
/*!40000 ALTER TABLE `dogs` ENABLE KEYS */;

-- Copiando dados para a tabela curso-laravel.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Copiando dados para a tabela curso-laravel.migrations: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(5, '2014_10_12_000000_create_users_table', 1),
	(6, '2014_10_12_100000_create_password_resets_table', 1),
	(7, '2019_08_19_000000_create_failed_jobs_table', 1),
	(8, '2022_01_16_155523_create_posts_table', 1),
	(9, '2022_01_18_233722_create_dogs_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando dados para a tabela curso-laravel.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando dados para a tabela curso-laravel.posts: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
	(2, 'homem arvore', 'posts/homem-arvore.jpg', 'quadro homem arvore', '2022-01-18 00:17:51', '2022-01-18 18:06:03'),
	(3, 'paisagem', 'posts/paisagem.jpg', 'testeteste', '2022-01-18 01:25:16', '2022-01-18 01:25:16'),
	(4, 'paisagem2', 'posts/paisagem2.jpg', 'nice nice nice', '2022-01-18 19:59:46', '2022-01-18 19:59:46');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Copiando dados para a tabela curso-laravel.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'arthur', 'arthurginho02@gmail.com', NULL, '$2y$10$3JFpsKWxn23uaws2dpyHZOSbiq2VB9iTAHUXGWANXgda7QgKPPjRy', NULL, '2022-01-18 22:34:43', '2022-01-18 22:34:43');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
