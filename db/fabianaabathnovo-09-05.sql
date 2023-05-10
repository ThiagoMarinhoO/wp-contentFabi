-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 09-Maio-2023 às 20:10
-- Versão do servidor: 5.7.33
-- versão do PHP: 8.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fabianaabathnovo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'comment',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Um comentarista do WordPress', 'wapuu@wordpress.example', 'https://br.wordpress.org/', '', '2023-04-28 12:24:36', '2023-04-28 15:24:36', 'Oi, isto é um comentário.\nPara iniciar a moderar, editar e excluir comentários, visite a tela Comentários no painel.\nOs avatares dos comentaristas vêm do <a href=\"https://br.gravatar.com/\">Gravatar</a>.', 0, '1', '', 'comment', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://fabianaabathnovo.test/', 'yes'),
(2, 'home', 'http://fabianaabathnovo.test/', 'yes'),
(3, 'blogname', 'Fabiana', 'yes'),
(4, 'blogdescription', '', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'teste@teste.com', 'yes'),
(7, 'start_of_week', '0', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'j \\d\\e F \\d\\e Y', 'yes'),
(24, 'time_format', 'H:i', 'yes'),
(25, 'links_updated_date_format', 'j \\d\\e F \\d\\e Y, H:i', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:97:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:17:\"^wp-sitemap\\.xml$\";s:23:\"index.php?sitemap=index\";s:17:\"^wp-sitemap\\.xsl$\";s:36:\"index.php?sitemap-stylesheet=sitemap\";s:23:\"^wp-sitemap-index\\.xsl$\";s:34:\"index.php?sitemap-stylesheet=index\";s:48:\"^wp-sitemap-([a-z]+?)-([a-z\\d_-]+?)-(\\d+?)\\.xml$\";s:75:\"index.php?sitemap=$matches[1]&sitemap-subtype=$matches[2]&paged=$matches[3]\";s:34:\"^wp-sitemap-([a-z]+?)-(\\d+?)\\.xml$\";s:47:\"index.php?sitemap=$matches[1]&paged=$matches[2]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:12:\"robots\\.txt$\";s:18:\"index.php?robots=1\";s:13:\"favicon\\.ico$\";s:19:\"index.php?favicon=1\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:27:\"comment-page-([0-9]{1,})/?$\";s:39:\"index.php?&page_id=15&cpage=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:58:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:68:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:88:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:64:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:53:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$\";s:91:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$\";s:85:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1\";s:77:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:65:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]\";s:61:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]\";s:47:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:57:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:77:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:53:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]\";s:51:\"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]\";s:38:\"([0-9]{4})/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&cpage=$matches[2]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:2:{i:0;s:30:\"advanced-custom-fields/acf.php\";i:1;s:29:\"relative-url/relative-url.php\";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', '', 'no'),
(40, 'template', 'tailpress', 'yes'),
(41, 'stylesheet', 'tailpress', 'yes'),
(42, 'comment_registration', '0', 'yes'),
(43, 'html_type', 'text/html', 'yes'),
(44, 'use_trackback', '0', 'yes'),
(45, 'default_role', 'subscriber', 'yes'),
(46, 'db_version', '53496', 'yes'),
(47, 'uploads_use_yearmonth_folders', '1', 'yes'),
(48, 'upload_path', '', 'yes'),
(49, 'blog_public', '1', 'yes'),
(50, 'default_link_category', '2', 'yes'),
(51, 'show_on_front', 'page', 'yes'),
(52, 'tag_base', '', 'yes'),
(53, 'show_avatars', '1', 'yes'),
(54, 'avatar_rating', 'G', 'yes'),
(55, 'upload_url_path', '', 'yes'),
(56, 'thumbnail_size_w', '150', 'yes'),
(57, 'thumbnail_size_h', '150', 'yes'),
(58, 'thumbnail_crop', '1', 'yes'),
(59, 'medium_size_w', '300', 'yes'),
(60, 'medium_size_h', '300', 'yes'),
(61, 'avatar_default', 'mystery', 'yes'),
(62, 'large_size_w', '1024', 'yes'),
(63, 'large_size_h', '1024', 'yes'),
(64, 'image_default_link_type', 'none', 'yes'),
(65, 'image_default_size', '', 'yes'),
(66, 'image_default_align', '', 'yes'),
(67, 'close_comments_for_old_posts', '0', 'yes'),
(68, 'close_comments_days_old', '14', 'yes'),
(69, 'thread_comments', '1', 'yes'),
(70, 'thread_comments_depth', '5', 'yes'),
(71, 'page_comments', '0', 'yes'),
(72, 'comments_per_page', '50', 'yes'),
(73, 'default_comments_page', 'newest', 'yes'),
(74, 'comment_order', 'asc', 'yes'),
(75, 'sticky_posts', 'a:0:{}', 'yes'),
(76, 'widget_categories', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(77, 'widget_text', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(78, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'uninstall_plugins', 'a:0:{}', 'no'),
(80, 'timezone_string', 'America/Sao_Paulo', 'yes'),
(81, 'page_for_posts', '0', 'yes'),
(82, 'page_on_front', '15', 'yes'),
(83, 'default_post_format', '0', 'yes'),
(84, 'link_manager_enabled', '0', 'yes'),
(85, 'finished_splitting_shared_terms', '1', 'yes'),
(86, 'site_icon', '0', 'yes'),
(87, 'medium_large_size_w', '768', 'yes'),
(88, 'medium_large_size_h', '0', 'yes'),
(89, 'wp_page_for_privacy_policy', '3', 'yes'),
(90, 'show_comments_cookies_opt_in', '1', 'yes'),
(91, 'admin_email_lifespan', '1698247475', 'yes'),
(92, 'disallowed_keys', '', 'no'),
(93, 'comment_previously_approved', '1', 'yes'),
(94, 'auto_plugin_theme_update_emails', 'a:0:{}', 'no'),
(95, 'auto_update_core_dev', 'enabled', 'yes'),
(96, 'auto_update_core_minor', 'enabled', 'yes'),
(97, 'auto_update_core_major', 'enabled', 'yes'),
(98, 'wp_force_deactivated_plugins', 'a:0:{}', 'yes'),
(99, 'initial_db_version', '53496', 'yes'),
(100, 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(101, 'fresh_site', '0', 'yes'),
(102, 'WPLANG', 'pt_BR', 'yes'),
(103, 'user_count', '1', 'no'),
(104, 'widget_block', 'a:6:{i:2;a:1:{s:7:\"content\";s:19:\"<!-- wp:search /-->\";}i:3;a:1:{s:7:\"content\";s:156:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Posts recentes</h2><!-- /wp:heading --><!-- wp:latest-posts /--></div><!-- /wp:group -->\";}i:4;a:1:{s:7:\"content\";s:224:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Comentários</h2><!-- /wp:heading --><!-- wp:latest-comments {\"displayAvatar\":false,\"displayDate\":false,\"displayExcerpt\":false} /--></div><!-- /wp:group -->\";}i:5;a:1:{s:7:\"content\";s:146:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Arquivos</h2><!-- /wp:heading --><!-- wp:archives /--></div><!-- /wp:group -->\";}i:6;a:1:{s:7:\"content\";s:150:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Categorias</h2><!-- /wp:heading --><!-- wp:categories /--></div><!-- /wp:group -->\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(105, 'sidebars_widgets', 'a:2:{s:19:\"wp_inactive_widgets\";a:5:{i:0;s:7:\"block-2\";i:1;s:7:\"block-3\";i:2;s:7:\"block-4\";i:3;s:7:\"block-5\";i:4;s:7:\"block-6\";}s:13:\"array_version\";i:3;}', 'yes'),
(106, 'cron', 'a:8:{i:1683663876;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1683689076;a:4:{s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:18:\"wp_https_detection\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1683689180;a:1:{s:21:\"wp_update_user_counts\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1683732276;a:1:{s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1683732380;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1683732383;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1683991476;a:1:{s:30:\"wp_site_health_scheduled_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}}s:7:\"version\";i:2;}', 'yes'),
(107, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_archives', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(113, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(114, 'widget_meta', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(115, 'widget_search', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(116, 'widget_recent-posts', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(117, 'widget_recent-comments', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(118, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(119, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(120, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(122, 'recovery_keys', 'a:0:{}', 'yes'),
(123, 'https_detection_errors', 'a:1:{s:20:\"https_request_failed\";a:1:{i:0;s:26:\"Requisição HTTPS falhou.\";}}', 'yes'),
(128, 'theme_mods_twentytwentythree', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1682719415;s:4:\"data\";a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:3:{i:0;s:7:\"block-2\";i:1;s:7:\"block-3\";i:2;s:7:\"block-4\";}s:9:\"sidebar-2\";a:2:{i:0;s:7:\"block-5\";i:1;s:7:\"block-6\";}}}}', 'yes'),
(142, 'auto_core_update_notified', 'a:4:{s:4:\"type\";s:7:\"success\";s:5:\"email\";s:15:\"teste@teste.com\";s:7:\"version\";s:3:\"6.2\";s:9:\"timestamp\";i:1682695553;}', 'no'),
(156, 'can_compress_scripts', '1', 'no'),
(165, 'finished_updating_comment_type', '1', 'yes'),
(179, 'current_theme', 'TailPress', 'yes'),
(180, 'theme_mods_tailpress', 'a:3:{i:0;b:0;s:18:\"nav_menu_locations\";a:1:{s:7:\"primary\";i:4;}s:18:\"custom_css_post_id\";i:-1;}', 'yes'),
(181, 'theme_switched', '', 'yes'),
(199, '_transient_health-check-site-status-result', '{\"good\":16,\"recommended\":5,\"critical\":0}', 'yes'),
(231, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:\"auto_add\";a:0:{}}', 'yes'),
(254, '_site_transient_timeout_browser_d35f243c9791341c148f7826994829ec', '1683743071', 'no'),
(255, '_site_transient_browser_d35f243c9791341c148f7826994829ec', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:9:\"112.0.0.0\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(268, 'recently_activated', 'a:0:{}', 'yes'),
(277, '_site_transient_timeout_php_check_7ec5f04fef1dc985019fbdb14afad4b2', '1684090885', 'no'),
(278, '_site_transient_php_check_7ec5f04fef1dc985019fbdb14afad4b2', 'a:5:{s:19:\"recommended_version\";s:3:\"7.4\";s:15:\"minimum_version\";s:6:\"5.6.20\";s:12:\"is_supported\";b:1;s:9:\"is_secure\";b:1;s:13:\"is_acceptable\";b:1;}', 'no'),
(279, '_site_transient_timeout_browser_0665eec3214a579ec0fd0ad477d8abc1', '1684090895', 'no'),
(280, '_site_transient_browser_0665eec3214a579ec0fd0ad477d8abc1', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:9:\"113.0.0.0\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(308, 'recovery_mode_email_last_sent', '1683558397', 'yes'),
(315, 'acf_version', '6.1.6', 'yes'),
(340, '_site_transient_timeout_browser_d9c544d0aaddfd20c051a0811f2f382d', '1684250043', 'no'),
(341, '_site_transient_browser_d9c544d0aaddfd20c051a0811f2f382d', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:9:\"112.0.0.0\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(342, '_site_transient_timeout_php_check_f615bb1e23847416e204708c1a47460a', '1684250044', 'no'),
(343, '_site_transient_php_check_f615bb1e23847416e204708c1a47460a', 'a:5:{s:19:\"recommended_version\";s:3:\"7.4\";s:15:\"minimum_version\";s:6:\"5.6.20\";s:12:\"is_supported\";b:1;s:9:\"is_secure\";b:1;s:13:\"is_acceptable\";b:1;}', 'no'),
(344, '_site_transient_timeout_community-events-1aecf33ab8525ff212ebdffbb438372e', '1683688449', 'no'),
(345, '_site_transient_community-events-1aecf33ab8525ff212ebdffbb438372e', 'a:4:{s:9:\"sandboxed\";b:0;s:5:\"error\";N;s:8:\"location\";a:1:{s:2:\"ip\";s:9:\"127.0.0.0\";}s:6:\"events\";a:0:{}}', 'no'),
(347, 'categorias_children', 'a:0:{}', 'yes'),
(349, '_site_transient_timeout_theme_roots', '1683647690', 'no'),
(350, '_site_transient_theme_roots', 'a:4:{s:9:\"tailpress\";s:7:\"/themes\";s:15:\"twentytwentyone\";s:7:\"/themes\";s:17:\"twentytwentythree\";s:7:\"/themes\";s:15:\"twentytwentytwo\";s:7:\"/themes\";}', 'no'),
(354, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:63:\"https://downloads.wordpress.org/release/pt_BR/wordpress-6.2.zip\";s:6:\"locale\";s:5:\"pt_BR\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:63:\"https://downloads.wordpress.org/release/pt_BR/wordpress-6.2.zip\";s:10:\"no_content\";s:0:\"\";s:11:\"new_bundled\";s:0:\"\";s:7:\"partial\";s:0:\"\";s:8:\"rollback\";s:0:\"\";}s:7:\"current\";s:3:\"6.2\";s:7:\"version\";s:3:\"6.2\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"6.1\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1683645898;s:15:\"version_checked\";s:3:\"6.2\";s:12:\"translations\";a:0:{}}', 'no'),
(355, '_site_transient_update_themes', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1683645899;s:7:\"checked\";a:4:{s:9:\"tailpress\";s:5:\"3.2.0\";s:15:\"twentytwentyone\";s:3:\"1.7\";s:17:\"twentytwentythree\";s:3:\"1.0\";s:15:\"twentytwentytwo\";s:3:\"1.3\";}s:8:\"response\";a:3:{s:15:\"twentytwentyone\";a:6:{s:5:\"theme\";s:15:\"twentytwentyone\";s:11:\"new_version\";s:3:\"1.8\";s:3:\"url\";s:45:\"https://wordpress.org/themes/twentytwentyone/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/theme/twentytwentyone.1.8.zip\";s:8:\"requires\";s:3:\"5.3\";s:12:\"requires_php\";s:3:\"5.6\";}s:17:\"twentytwentythree\";a:6:{s:5:\"theme\";s:17:\"twentytwentythree\";s:11:\"new_version\";s:3:\"1.1\";s:3:\"url\";s:47:\"https://wordpress.org/themes/twentytwentythree/\";s:7:\"package\";s:63:\"https://downloads.wordpress.org/theme/twentytwentythree.1.1.zip\";s:8:\"requires\";s:3:\"6.1\";s:12:\"requires_php\";s:3:\"5.6\";}s:15:\"twentytwentytwo\";a:6:{s:5:\"theme\";s:15:\"twentytwentytwo\";s:11:\"new_version\";s:3:\"1.4\";s:3:\"url\";s:45:\"https://wordpress.org/themes/twentytwentytwo/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/theme/twentytwentytwo.1.4.zip\";s:8:\"requires\";s:3:\"5.9\";s:12:\"requires_php\";s:3:\"5.6\";}}s:9:\"no_update\";a:0:{}s:12:\"translations\";a:0:{}}', 'no'),
(356, '_site_transient_update_plugins', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1683645899;s:8:\"response\";a:1:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:3:\"5.1\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:54:\"https://downloads.wordpress.org/plugin/akismet.5.1.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:60:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=2818463\";s:2:\"1x\";s:60:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=2818463\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:63:\"https://ps.w.org/akismet/assets/banner-1544x500.png?rev=2900731\";s:2:\"1x\";s:62:\"https://ps.w.org/akismet/assets/banner-772x250.png?rev=2900731\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"5.0\";s:6:\"tested\";s:3:\"6.2\";s:12:\"requires_php\";s:3:\"5.2\";}}s:12:\"translations\";a:1:{i:0;a:7:{s:4:\"type\";s:6:\"plugin\";s:4:\"slug\";s:22:\"advanced-custom-fields\";s:8:\"language\";s:5:\"pt_BR\";s:7:\"version\";s:5:\"6.1.6\";s:7:\"updated\";s:19:\"2023-05-02 19:47:05\";s:7:\"package\";s:89:\"https://downloads.wordpress.org/translation/plugin/advanced-custom-fields/6.1.6/pt_BR.zip\";s:10:\"autoupdate\";b:1;}}s:9:\"no_update\";a:3:{s:30:\"advanced-custom-fields/acf.php\";O:8:\"stdClass\":10:{s:2:\"id\";s:36:\"w.org/plugins/advanced-custom-fields\";s:4:\"slug\";s:22:\"advanced-custom-fields\";s:6:\"plugin\";s:30:\"advanced-custom-fields/acf.php\";s:11:\"new_version\";s:5:\"6.1.6\";s:3:\"url\";s:53:\"https://wordpress.org/plugins/advanced-custom-fields/\";s:7:\"package\";s:71:\"https://downloads.wordpress.org/plugin/advanced-custom-fields.6.1.6.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:75:\"https://ps.w.org/advanced-custom-fields/assets/icon-256x256.png?rev=1082746\";s:2:\"1x\";s:75:\"https://ps.w.org/advanced-custom-fields/assets/icon-128x128.png?rev=1082746\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:78:\"https://ps.w.org/advanced-custom-fields/assets/banner-1544x500.jpg?rev=2892919\";s:2:\"1x\";s:77:\"https://ps.w.org/advanced-custom-fields/assets/banner-772x250.jpg?rev=2892919\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"4.7\";}s:9:\"hello.php\";O:8:\"stdClass\":10:{s:2:\"id\";s:25:\"w.org/plugins/hello-dolly\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:5:\"1.7.2\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/hello-dolly.1.7.2.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=2052855\";s:2:\"1x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=2052855\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:67:\"https://ps.w.org/hello-dolly/assets/banner-1544x500.jpg?rev=2645582\";s:2:\"1x\";s:66:\"https://ps.w.org/hello-dolly/assets/banner-772x250.jpg?rev=2052855\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"4.6\";}s:29:\"relative-url/relative-url.php\";O:8:\"stdClass\":10:{s:2:\"id\";s:26:\"w.org/plugins/relative-url\";s:4:\"slug\";s:12:\"relative-url\";s:6:\"plugin\";s:29:\"relative-url/relative-url.php\";s:11:\"new_version\";s:5:\"0.1.8\";s:3:\"url\";s:43:\"https://wordpress.org/plugins/relative-url/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/plugin/relative-url.0.1.8.zip\";s:5:\"icons\";a:3:{s:2:\"2x\";s:65:\"https://ps.w.org/relative-url/assets/icon-256x256.png?rev=2581668\";s:2:\"1x\";s:57:\"https://ps.w.org/relative-url/assets/icon.svg?rev=1568302\";s:3:\"svg\";s:57:\"https://ps.w.org/relative-url/assets/icon.svg?rev=1568302\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:68:\"https://ps.w.org/relative-url/assets/banner-1544x500.png?rev=2581668\";s:2:\"1x\";s:67:\"https://ps.w.org/relative-url/assets/banner-772x250.png?rev=2581668\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:5:\"2.1.0\";}}}', 'no');

-- --------------------------------------------------------

--
-- Estrutura da tabela `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(3, 5, '_edit_lock', '1682719260:1'),
(4, 8, '_edit_lock', '1683554705:1'),
(11, 14, '_wp_attached_file', '2023/05/FZP_1496-min-scaled.jpg'),
(12, 14, '_wp_attachment_metadata', 'a:7:{s:5:\"width\";i:1703;s:6:\"height\";i:2560;s:4:\"file\";s:31:\"2023/05/FZP_1496-min-scaled.jpg\";s:8:\"filesize\";i:276812;s:5:\"sizes\";a:6:{s:6:\"medium\";a:5:{s:4:\"file\";s:24:\"FZP_1496-min-200x300.jpg\";s:5:\"width\";i:200;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:8724;}s:5:\"large\";a:5:{s:4:\"file\";s:25:\"FZP_1496-min-681x1024.jpg\";s:5:\"width\";i:681;s:6:\"height\";i:1024;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:54090;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:24:\"FZP_1496-min-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:4973;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:25:\"FZP_1496-min-768x1154.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:1154;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:66306;}s:9:\"1536x1536\";a:5:{s:4:\"file\";s:26:\"FZP_1496-min-1022x1536.jpg\";s:5:\"width\";i:1022;s:6:\"height\";i:1536;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:108315;}s:9:\"2048x2048\";a:5:{s:4:\"file\";s:26:\"FZP_1496-min-1363x2048.jpg\";s:5:\"width\";i:1363;s:6:\"height\";i:2048;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:182723;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}s:14:\"original_image\";s:16:\"FZP_1496-min.jpg\";}'),
(13, 15, '_edit_lock', '1683041794:1'),
(14, 17, '_wp_trash_meta_status', 'publish'),
(15, 17, '_wp_trash_meta_time', '1683041846'),
(18, 19, '_menu_item_type', 'post_type'),
(19, 19, '_menu_item_menu_item_parent', '0'),
(20, 19, '_menu_item_object_id', '15'),
(21, 19, '_menu_item_object', 'page'),
(22, 19, '_menu_item_target', ''),
(23, 19, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(24, 19, '_menu_item_xfn', ''),
(25, 19, '_menu_item_url', ''),
(26, 19, '_menu_item_orphaned', '1683046576'),
(27, 20, '_menu_item_type', 'post_type'),
(28, 20, '_menu_item_menu_item_parent', '0'),
(29, 20, '_menu_item_object_id', '5'),
(30, 20, '_menu_item_object', 'page'),
(31, 20, '_menu_item_target', ''),
(32, 20, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(33, 20, '_menu_item_xfn', ''),
(34, 20, '_menu_item_url', ''),
(35, 20, '_menu_item_orphaned', '1683046576'),
(36, 21, '_menu_item_type', 'post_type'),
(37, 21, '_menu_item_menu_item_parent', '0'),
(38, 21, '_menu_item_object_id', '2'),
(39, 21, '_menu_item_object', 'page'),
(40, 21, '_menu_item_target', ''),
(41, 21, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(42, 21, '_menu_item_xfn', ''),
(43, 21, '_menu_item_url', ''),
(44, 21, '_menu_item_orphaned', '1683046576'),
(45, 22, '_menu_item_type', 'post_type'),
(46, 22, '_menu_item_menu_item_parent', '0'),
(47, 22, '_menu_item_object_id', '8'),
(48, 22, '_menu_item_object', 'page'),
(49, 22, '_menu_item_target', ''),
(50, 22, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(51, 22, '_menu_item_xfn', ''),
(52, 22, '_menu_item_url', ''),
(53, 22, '_menu_item_orphaned', '1683046576'),
(54, 23, '_edit_lock', '1683046475:1'),
(55, 25, '_menu_item_type', 'post_type'),
(56, 25, '_menu_item_menu_item_parent', '0'),
(57, 25, '_menu_item_object_id', '15'),
(58, 25, '_menu_item_object', 'page'),
(59, 25, '_menu_item_target', ''),
(60, 25, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(61, 25, '_menu_item_xfn', ''),
(62, 25, '_menu_item_url', ''),
(63, 25, '_menu_item_orphaned', '1683046623'),
(64, 26, '_menu_item_type', 'post_type'),
(65, 26, '_menu_item_menu_item_parent', '0'),
(66, 26, '_menu_item_object_id', '23'),
(67, 26, '_menu_item_object', 'page'),
(68, 26, '_menu_item_target', ''),
(69, 26, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(70, 26, '_menu_item_xfn', ''),
(71, 26, '_menu_item_url', ''),
(72, 26, '_menu_item_orphaned', '1683046623'),
(73, 27, '_menu_item_type', 'post_type'),
(74, 27, '_menu_item_menu_item_parent', '0'),
(75, 27, '_menu_item_object_id', '5'),
(76, 27, '_menu_item_object', 'page'),
(77, 27, '_menu_item_target', ''),
(78, 27, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(79, 27, '_menu_item_xfn', ''),
(80, 27, '_menu_item_url', ''),
(81, 27, '_menu_item_orphaned', '1683046623'),
(82, 28, '_menu_item_type', 'post_type'),
(83, 28, '_menu_item_menu_item_parent', '0'),
(84, 28, '_menu_item_object_id', '2'),
(85, 28, '_menu_item_object', 'page'),
(86, 28, '_menu_item_target', ''),
(87, 28, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(88, 28, '_menu_item_xfn', ''),
(89, 28, '_menu_item_url', ''),
(90, 28, '_menu_item_orphaned', '1683046623'),
(91, 29, '_menu_item_type', 'post_type'),
(92, 29, '_menu_item_menu_item_parent', '0'),
(93, 29, '_menu_item_object_id', '8'),
(94, 29, '_menu_item_object', 'page'),
(95, 29, '_menu_item_target', ''),
(96, 29, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(97, 29, '_menu_item_xfn', ''),
(98, 29, '_menu_item_url', ''),
(99, 29, '_menu_item_orphaned', '1683046623'),
(100, 30, '_menu_item_type', 'post_type'),
(101, 30, '_menu_item_menu_item_parent', '0'),
(102, 30, '_menu_item_object_id', '15'),
(103, 30, '_menu_item_object', 'page'),
(104, 30, '_menu_item_target', ''),
(105, 30, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(106, 30, '_menu_item_xfn', ''),
(107, 30, '_menu_item_url', ''),
(109, 31, '_menu_item_type', 'post_type'),
(110, 31, '_menu_item_menu_item_parent', '0'),
(111, 31, '_menu_item_object_id', '23'),
(112, 31, '_menu_item_object', 'page'),
(113, 31, '_menu_item_target', ''),
(114, 31, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(115, 31, '_menu_item_xfn', ''),
(116, 31, '_menu_item_url', ''),
(118, 32, '_menu_item_type', 'post_type'),
(119, 32, '_menu_item_menu_item_parent', '0'),
(120, 32, '_menu_item_object_id', '5'),
(121, 32, '_menu_item_object', 'page'),
(122, 32, '_menu_item_target', ''),
(123, 32, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(124, 32, '_menu_item_xfn', ''),
(125, 32, '_menu_item_url', ''),
(127, 33, '_menu_item_type', 'post_type'),
(128, 33, '_menu_item_menu_item_parent', '0'),
(129, 33, '_menu_item_object_id', '8'),
(130, 33, '_menu_item_object', 'page'),
(131, 33, '_menu_item_target', ''),
(132, 33, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(133, 33, '_menu_item_xfn', ''),
(134, 33, '_menu_item_url', ''),
(136, 34, '_menu_item_type', 'custom'),
(137, 34, '_menu_item_menu_item_parent', '0'),
(138, 34, '_menu_item_object_id', '34'),
(139, 34, '_menu_item_object', 'custom'),
(140, 34, '_menu_item_target', ''),
(141, 34, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(142, 34, '_menu_item_xfn', ''),
(143, 34, '_menu_item_url', '#mentorias'),
(145, 35, '_edit_lock', '1683046609:1'),
(155, 38, '_wp_attached_file', '2023/05/Identidade-Horizontal-reflexo-azul-1.png'),
(156, 38, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:13843;s:6:\"height\";i:2628;s:4:\"file\";s:48:\"2023/05/Identidade-Horizontal-reflexo-azul-1.png\";s:8:\"filesize\";i:557179;s:5:\"sizes\";a:6:{s:6:\"medium\";a:5:{s:4:\"file\";s:47:\"Identidade-Horizontal-reflexo-azul-1-300x57.png\";s:5:\"width\";i:300;s:6:\"height\";i:57;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:6164;}s:5:\"large\";a:5:{s:4:\"file\";s:49:\"Identidade-Horizontal-reflexo-azul-1-1024x194.png\";s:5:\"width\";i:1024;s:6:\"height\";i:194;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:23633;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:48:\"Identidade-Horizontal-reflexo-azul-1-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:2905;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:48:\"Identidade-Horizontal-reflexo-azul-1-768x146.png\";s:5:\"width\";i:768;s:6:\"height\";i:146;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:17501;}s:9:\"1536x1536\";a:5:{s:4:\"file\";s:49:\"Identidade-Horizontal-reflexo-azul-1-1536x292.png\";s:5:\"width\";i:1536;s:6:\"height\";i:292;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:36975;}s:9:\"2048x2048\";a:5:{s:4:\"file\";s:49:\"Identidade-Horizontal-reflexo-azul-1-2048x389.png\";s:5:\"width\";i:2048;s:6:\"height\";i:389;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:51282;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(159, 40, '_wp_attached_file', '2023/05/ContentImageOpacless.png'),
(160, 40, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:1440;s:6:\"height\";i:540;s:4:\"file\";s:32:\"2023/05/ContentImageOpacless.png\";s:8:\"filesize\";i:423575;s:5:\"sizes\";a:4:{s:6:\"medium\";a:5:{s:4:\"file\";s:32:\"ContentImageOpacless-300x113.png\";s:5:\"width\";i:300;s:6:\"height\";i:113;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:31241;}s:5:\"large\";a:5:{s:4:\"file\";s:33:\"ContentImageOpacless-1024x384.png\";s:5:\"width\";i:1024;s:6:\"height\";i:384;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:241190;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:32:\"ContentImageOpacless-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:21468;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:32:\"ContentImageOpacless-768x288.png\";s:5:\"width\";i:768;s:6:\"height\";i:288;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:149909;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(162, 41, '_wp_attached_file', '2023/05/Pattern.png'),
(163, 41, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:1440;s:6:\"height\";i:462;s:4:\"file\";s:19:\"2023/05/Pattern.png\";s:8:\"filesize\";i:5228;s:5:\"sizes\";a:4:{s:6:\"medium\";a:5:{s:4:\"file\";s:18:\"Pattern-300x96.png\";s:5:\"width\";i:300;s:6:\"height\";i:96;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:1321;}s:5:\"large\";a:5:{s:4:\"file\";s:20:\"Pattern-1024x329.png\";s:5:\"width\";i:1024;s:6:\"height\";i:329;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:7127;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:19:\"Pattern-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:1531;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:19:\"Pattern-768x246.png\";s:5:\"width\";i:768;s:6:\"height\";i:246;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:4378;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(164, 42, '_wp_attached_file', '2023/05/FZP_1478-scaled.jpg'),
(165, 42, '_wp_attachment_metadata', 'a:7:{s:5:\"width\";i:1703;s:6:\"height\";i:2560;s:4:\"file\";s:27:\"2023/05/FZP_1478-scaled.jpg\";s:8:\"filesize\";i:277266;s:5:\"sizes\";a:6:{s:6:\"medium\";a:5:{s:4:\"file\";s:20:\"FZP_1478-200x300.jpg\";s:5:\"width\";i:200;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:9125;}s:5:\"large\";a:5:{s:4:\"file\";s:21:\"FZP_1478-681x1024.jpg\";s:5:\"width\";i:681;s:6:\"height\";i:1024;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:54515;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:20:\"FZP_1478-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:4926;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:21:\"FZP_1478-768x1154.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:1154;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:66508;}s:9:\"1536x1536\";a:5:{s:4:\"file\";s:22:\"FZP_1478-1022x1536.jpg\";s:5:\"width\";i:1022;s:6:\"height\";i:1536;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:107183;}s:9:\"2048x2048\";a:5:{s:4:\"file\";s:22:\"FZP_1478-1363x2048.jpg\";s:5:\"width\";i:1363;s:6:\"height\";i:2048;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:181399;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}s:14:\"original_image\";s:12:\"FZP_1478.jpg\";}'),
(166, 43, '_wp_attached_file', '2023/05/FabisemBg.png'),
(167, 43, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:851;s:6:\"height\";i:1280;s:4:\"file\";s:21:\"2023/05/FabisemBg.png\";s:8:\"filesize\";i:835160;s:5:\"sizes\";a:4:{s:6:\"medium\";a:5:{s:4:\"file\";s:21:\"FabisemBg-199x300.png\";s:5:\"width\";i:199;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:63024;}s:5:\"large\";a:5:{s:4:\"file\";s:22:\"FabisemBg-681x1024.png\";s:5:\"width\";i:681;s:6:\"height\";i:1024;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:546576;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:21:\"FabisemBg-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:29094;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:22:\"FabisemBg-768x1155.png\";s:5:\"width\";i:768;s:6:\"height\";i:1155;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:668356;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(168, 44, '_wp_attached_file', '2023/05/abopLogo.png'),
(169, 44, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:160;s:6:\"height\";i:60;s:4:\"file\";s:20:\"2023/05/abopLogo.png\";s:8:\"filesize\";i:3825;s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:5:{s:4:\"file\";s:19:\"abopLogo-150x60.png\";s:5:\"width\";i:150;s:6:\"height\";i:60;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:3469;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(170, 46, '_edit_lock', '1683485971:1'),
(171, 47, '_edit_lock', '1683490198:1'),
(172, 49, '_wp_attached_file', '2023/05/c56438e5-a0a5-4190-8069-0c0a81897b7c.png'),
(173, 49, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:360;s:6:\"height\";i:341;s:4:\"file\";s:48:\"2023/05/c56438e5-a0a5-4190-8069-0c0a81897b7c.png\";s:8:\"filesize\";i:164173;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:48:\"c56438e5-a0a5-4190-8069-0c0a81897b7c-300x284.png\";s:5:\"width\";i:300;s:6:\"height\";i:284;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:100175;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:48:\"c56438e5-a0a5-4190-8069-0c0a81897b7c-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:32422;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(174, 50, '_wp_attached_file', '2023/05/1477sembg.png'),
(175, 50, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:851;s:6:\"height\";i:1280;s:4:\"file\";s:21:\"2023/05/1477sembg.png\";s:8:\"filesize\";i:808884;s:5:\"sizes\";a:4:{s:6:\"medium\";a:5:{s:4:\"file\";s:21:\"1477sembg-199x300.png\";s:5:\"width\";i:199;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:62886;}s:5:\"large\";a:5:{s:4:\"file\";s:22:\"1477sembg-681x1024.png\";s:5:\"width\";i:681;s:6:\"height\";i:1024;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:535832;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:21:\"1477sembg-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:29586;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:22:\"1477sembg-768x1155.png\";s:5:\"width\";i:768;s:6:\"height\";i:1155;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:654441;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(176, 51, '_wp_attached_file', '2023/05/1478sembg.png'),
(177, 51, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:851;s:6:\"height\";i:1280;s:4:\"file\";s:21:\"2023/05/1478sembg.png\";s:8:\"filesize\";i:818038;s:5:\"sizes\";a:4:{s:6:\"medium\";a:5:{s:4:\"file\";s:21:\"1478sembg-199x300.png\";s:5:\"width\";i:199;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:63359;}s:5:\"large\";a:5:{s:4:\"file\";s:22:\"1478sembg-681x1024.png\";s:5:\"width\";i:681;s:6:\"height\";i:1024;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:539831;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:21:\"1478sembg-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:29370;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:22:\"1478sembg-768x1155.png\";s:5:\"width\";i:768;s:6:\"height\";i:1155;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:661442;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(178, 52, '_edit_lock', '1683554637:1'),
(179, 53, '_edit_lock', '1683554662:1'),
(180, 54, '_edit_lock', '1683554977:1'),
(181, 57, '_edit_last', '1'),
(182, 57, '_edit_lock', '1683646214:1'),
(183, 59, '_edit_last', '1'),
(184, 59, '_edit_lock', '1683645471:1'),
(185, 59, 'url_do_video', 'https://www.youtube.com/embed/DiHNpaUQr5E'),
(186, 59, '_url_do_video', 'field_6459107fd2054'),
(192, 62, '_edit_last', '1'),
(193, 62, '_edit_lock', '1683645470:1'),
(194, 62, '_thumbnail_id', '67'),
(195, 62, 'url_do_video', 'https://www.youtube.com/embed/D7MwSEIJAG4'),
(196, 62, '_url_do_video', 'field_6459107fd2054'),
(197, 64, '_wp_attached_file', '2023/05/Inserir-um-titulo-5.jpg'),
(198, 64, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:851;s:6:\"height\";i:1280;s:4:\"file\";s:31:\"2023/05/Inserir-um-titulo-5.jpg\";s:8:\"filesize\";i:156816;s:5:\"sizes\";a:4:{s:6:\"medium\";a:5:{s:4:\"file\";s:31:\"Inserir-um-titulo-5-199x300.jpg\";s:5:\"width\";i:199;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:6811;}s:5:\"large\";a:5:{s:4:\"file\";s:32:\"Inserir-um-titulo-5-681x1024.jpg\";s:5:\"width\";i:681;s:6:\"height\";i:1024;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:34890;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:31:\"Inserir-um-titulo-5-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:4293;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:32:\"Inserir-um-titulo-5-768x1155.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:1155;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:41640;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"1\";s:8:\"keywords\";a:0:{}}}'),
(199, 59, '_thumbnail_id', '65'),
(200, 65, '_wp_attached_file', '2023/05/Inserir-um-titulo-6.jpg'),
(201, 65, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:851;s:6:\"height\";i:1280;s:4:\"file\";s:31:\"2023/05/Inserir-um-titulo-6.jpg\";s:8:\"filesize\";i:121005;s:5:\"sizes\";a:4:{s:6:\"medium\";a:5:{s:4:\"file\";s:31:\"Inserir-um-titulo-6-199x300.jpg\";s:5:\"width\";i:199;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:6471;}s:5:\"large\";a:5:{s:4:\"file\";s:32:\"Inserir-um-titulo-6-681x1024.jpg\";s:5:\"width\";i:681;s:6:\"height\";i:1024;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:32350;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:31:\"Inserir-um-titulo-6-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:4107;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:32:\"Inserir-um-titulo-6-768x1155.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:1155;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:38707;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"1\";s:8:\"keywords\";a:0:{}}}'),
(202, 67, '_wp_attached_file', '2023/05/Inserir-um-titulo-7.jpg'),
(203, 67, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:851;s:6:\"height\";i:1280;s:4:\"file\";s:31:\"2023/05/Inserir-um-titulo-7.jpg\";s:8:\"filesize\";i:129927;s:5:\"sizes\";a:4:{s:6:\"medium\";a:5:{s:4:\"file\";s:31:\"Inserir-um-titulo-7-199x300.jpg\";s:5:\"width\";i:199;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:6875;}s:5:\"large\";a:5:{s:4:\"file\";s:32:\"Inserir-um-titulo-7-681x1024.jpg\";s:5:\"width\";i:681;s:6:\"height\";i:1024;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:34964;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:31:\"Inserir-um-titulo-7-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:4448;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:32:\"Inserir-um-titulo-7-768x1155.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:1155;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:41638;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"1\";s:8:\"keywords\";a:0:{}}}'),
(204, 68, '_edit_last', '1'),
(205, 68, '_edit_lock', '1683645470:1'),
(206, 69, '_wp_attached_file', '2023/05/Inserir-um-titulo-8.jpg'),
(207, 69, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:851;s:6:\"height\";i:1280;s:4:\"file\";s:31:\"2023/05/Inserir-um-titulo-8.jpg\";s:8:\"filesize\";i:124224;s:5:\"sizes\";a:4:{s:6:\"medium\";a:5:{s:4:\"file\";s:31:\"Inserir-um-titulo-8-199x300.jpg\";s:5:\"width\";i:199;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:6554;}s:5:\"large\";a:5:{s:4:\"file\";s:32:\"Inserir-um-titulo-8-681x1024.jpg\";s:5:\"width\";i:681;s:6:\"height\";i:1024;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:33053;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:31:\"Inserir-um-titulo-8-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:4239;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:32:\"Inserir-um-titulo-8-768x1155.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:1155;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:39523;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"1\";s:8:\"keywords\";a:0:{}}}'),
(208, 68, '_thumbnail_id', '69'),
(209, 68, 'url_do_video', 'https://www.youtube.com/embed/8F0ivhF6BzI'),
(210, 68, '_url_do_video', 'field_6459107fd2054'),
(211, 70, '_edit_last', '1'),
(212, 70, '_edit_lock', '1683645469:1'),
(213, 71, '_wp_attached_file', '2023/05/Inserir-um-titulo-9.jpg'),
(214, 71, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:851;s:6:\"height\";i:1280;s:4:\"file\";s:31:\"2023/05/Inserir-um-titulo-9.jpg\";s:8:\"filesize\";i:123680;s:5:\"sizes\";a:4:{s:6:\"medium\";a:5:{s:4:\"file\";s:31:\"Inserir-um-titulo-9-199x300.jpg\";s:5:\"width\";i:199;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:6542;}s:5:\"large\";a:5:{s:4:\"file\";s:32:\"Inserir-um-titulo-9-681x1024.jpg\";s:5:\"width\";i:681;s:6:\"height\";i:1024;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:32903;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:31:\"Inserir-um-titulo-9-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:4197;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:32:\"Inserir-um-titulo-9-768x1155.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:1155;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:39632;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"1\";s:8:\"keywords\";a:0:{}}}'),
(215, 70, '_thumbnail_id', '73'),
(216, 70, 'url_do_video', 'https://www.youtube.com/embed/nfiknBoMJmk'),
(217, 70, '_url_do_video', 'field_6459107fd2054'),
(218, 73, '_wp_attached_file', '2023/05/Inserir-um-titulo-10.jpg'),
(219, 73, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:851;s:6:\"height\";i:1280;s:4:\"file\";s:32:\"2023/05/Inserir-um-titulo-10.jpg\";s:8:\"filesize\";i:120200;s:5:\"sizes\";a:4:{s:6:\"medium\";a:5:{s:4:\"file\";s:32:\"Inserir-um-titulo-10-199x300.jpg\";s:5:\"width\";i:199;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:6479;}s:5:\"large\";a:5:{s:4:\"file\";s:33:\"Inserir-um-titulo-10-681x1024.jpg\";s:5:\"width\";i:681;s:6:\"height\";i:1024;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:32235;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:32:\"Inserir-um-titulo-10-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:4218;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:33:\"Inserir-um-titulo-10-768x1155.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:1155;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:38780;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"1\";s:8:\"keywords\";a:0:{}}}'),
(220, 74, '_edit_last', '1'),
(221, 74, '_edit_lock', '1683645469:1'),
(222, 74, '_thumbnail_id', '71'),
(223, 74, 'url_do_video', 'https://www.youtube.com/embed/V0egLzw4vXk'),
(224, 74, '_url_do_video', 'field_6459107fd2054'),
(225, 76, '_edit_last', '1'),
(226, 76, '_edit_lock', '1683646307:1'),
(227, 78, '_edit_last', '1'),
(228, 78, '_edit_lock', '1683646267:1'),
(229, 78, 'url_do_video', ''),
(230, 78, '_url_do_video', 'field_6459107fd2054'),
(231, 78, 'rede_social', '@psicologia.in.focus'),
(232, 78, '_rede_social', 'field_645a677fb7b86'),
(233, 79, '_edit_last', '1'),
(234, 79, '_edit_lock', '1683646303:1'),
(235, 79, 'url_do_video', ''),
(236, 79, '_url_do_video', 'field_6459107fd2054'),
(237, 79, 'rede_social', '@psicologarenatabritto'),
(238, 79, '_rede_social', 'field_645a677fb7b86'),
(239, 80, '_edit_last', '1'),
(240, 80, '_edit_lock', '1683652154:1'),
(241, 80, 'url_do_video', ''),
(242, 80, '_url_do_video', 'field_6459107fd2054'),
(243, 80, 'rede_social', '@laissantiago98'),
(244, 80, '_rede_social', 'field_645a677fb7b86'),
(245, 76, '_wp_trash_meta_status', 'draft'),
(246, 76, '_wp_trash_meta_time', '1683646471'),
(247, 76, '_wp_desired_post_slug', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2023-04-28 12:24:36', '2023-04-28 15:24:36', '<!-- wp:paragraph -->\n<p>Boas-vindas ao WordPress. Esse é o seu primeiro post. Edite-o ou exclua-o, e então comece a escrever!</p>\n<!-- /wp:paragraph -->', 'Olá, mundo!', '', 'publish', 'open', 'open', '', 'ola-mundo', '', '', '2023-04-28 12:24:36', '2023-04-28 15:24:36', '', 0, 'http://fabianaabathnovo.test//?p=1', 0, 'post', '', 1),
(2, 1, '2023-04-28 12:24:36', '2023-04-28 15:24:36', '<!-- wp:paragraph -->\n<p>Esta é uma página de exemplo. É diferente de um post no blog porque ela permanecerá em um lugar e aparecerá na navegação do seu site na maioria dos temas. Muitas pessoas começam com uma página que as apresenta a possíveis visitantes do site. Ela pode dizer algo assim:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Olá! Eu sou um mensageiro de bicicleta durante o dia, ator aspirante à noite, e este é o meu site. Eu moro em São Paulo, tenho um grande cachorro chamado Rex e gosto de tomar caipirinha (e banhos de chuva).</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...ou alguma coisa assim:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>A Companhia de Miniaturas XYZ foi fundada em 1971, e desde então tem fornecido miniaturas de qualidade ao público. Localizada na cidade de Itu, a XYZ emprega mais de 2.000 pessoas e faz coisas grandiosas para a comunidade da cidade.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>Como um novo usuário do WordPress, você deveria ir ao <a href=\"http://fabianaabathnovo.test//wp-admin/\">painel</a> para excluir essa página e criar novas páginas para o seu conteúdo. Divirta-se!</p>\n<!-- /wp:paragraph -->', 'Página de exemplo', '', 'publish', 'closed', 'open', '', 'pagina-exemplo', '', '', '2023-04-28 12:24:36', '2023-04-28 15:24:36', '', 0, 'http://fabianaabathnovo.test//?page_id=2', 0, 'page', '', 0),
(3, 1, '2023-04-28 12:24:36', '2023-04-28 15:24:36', '<!-- wp:heading --><h2>Quem somos</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>O endereço do nosso site é: http://fabianaabathnovo.test/.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Comentários</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Quando os visitantes deixam comentários no site, coletamos os dados mostrados no formulário de comentários, além do endereço de IP e de dados do navegador do visitante, para auxiliar na detecção de spam.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Uma sequência anonimizada de caracteres criada a partir do seu e-mail (também chamada de hash) poderá ser enviada para o Gravatar para verificar se você usa o serviço. A política de privacidade do Gravatar está disponível aqui: https://automattic.com/privacy/. Depois da aprovação do seu comentário, a foto do seu perfil fica visível publicamente junto de seu comentário.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Mídia</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Se você envia imagens para o site, evite enviar as que contenham dados de localização incorporados (EXIF GPS). Visitantes podem baixar estas imagens do site e extrair delas seus dados de localização.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Cookies</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Ao deixar um comentário no site, você poderá optar por salvar seu nome, e-mail e site nos cookies. Isso visa seu conforto, assim você não precisará preencher seus  dados novamente quando fizer outro comentário. Estes cookies duram um ano.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Se você tem uma conta e acessa este site, um cookie temporário será criado para determinar se seu navegador aceita cookies. Ele não contém nenhum dado pessoal e será descartado quando você fechar seu navegador.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Quando você acessa sua conta no site, também criamos vários cookies para salvar os dados da sua conta e suas escolhas de exibição de tela. Cookies de login são mantidos por dois dias e cookies de opções de tela por um ano. Se você selecionar &quot;Lembrar-me&quot;, seu acesso será mantido por duas semanas. Se você se desconectar da sua conta, os cookies de login serão removidos.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Se você editar ou publicar um artigo, um cookie adicional será salvo no seu navegador. Este cookie não inclui nenhum dado pessoal e simplesmente indica o ID do post referente ao artigo que você acabou de editar. Ele expira depois de 1 dia.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Mídia incorporada de outros sites</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Artigos neste site podem incluir conteúdo incorporado como, por exemplo, vídeos, imagens, artigos, etc. Conteúdos incorporados de outros sites se comportam exatamente da mesma forma como se o visitante estivesse visitando o outro site.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Estes sites podem coletar dados sobre você, usar cookies, incorporar rastreamento adicional de terceiros e monitorar sua interação com este conteúdo incorporado, incluindo sua interação com o conteúdo incorporado se você tem uma conta e está conectado com o site.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Com quem compartilhamos seus dados</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Se você solicitar uma redefinição de senha, seu endereço de IP será incluído no e-mail de redefinição de senha.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Por quanto tempo mantemos os seus dados</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Se você deixar um comentário, o comentário e os seus metadados são conservados indefinidamente. Fazemos isso para que seja possível reconhecer e aprovar automaticamente qualquer comentário posterior ao invés de retê-lo para moderação.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Para usuários que se registram no nosso site (se houver), também guardamos as informações pessoais que fornecem no seu perfil de usuário. Todos os usuários podem ver, editar ou excluir suas informações pessoais a qualquer momento (só não é possível alterar o seu username). Os administradores de sites também podem ver e editar estas informações.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Quais os seus direitos sobre seus dados</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Se você tiver uma conta neste site ou se tiver deixado comentários, pode solicitar um arquivo exportado dos dados pessoais que mantemos sobre você, inclusive quaisquer dados que nos tenha fornecido. Também pode solicitar que removamos qualquer dado pessoal que mantemos sobre você. Isto não inclui nenhuns dados que somos obrigados a manter para propósitos administrativos, legais ou de segurança.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Para onde seus dados são enviados</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Comentários de visitantes podem ser marcados por um serviço automático de detecção de spam.</p><!-- /wp:paragraph -->', 'Política de privacidade', '', 'draft', 'closed', 'open', '', 'politica-de-privacidade', '', '', '2023-04-28 12:24:36', '2023-04-28 15:24:36', '', 0, 'http://fabianaabathnovo.test//?page_id=3', 0, 'page', '', 0),
(5, 1, '2023-04-28 19:03:14', '2023-04-28 22:03:14', '', 'Contato', '', 'publish', 'closed', 'closed', '', 'contato', '', '', '2023-04-28 19:03:14', '2023-04-28 22:03:14', '', 0, 'http://fabianaabathnovo.test//?page_id=5', 0, 'page', '', 0),
(6, 1, '2023-04-28 19:03:09', '2023-04-28 22:03:09', '{\"version\": 2, \"isGlobalStylesUserThemeJSON\": true }', 'Custom Styles', '', 'publish', 'closed', 'closed', '', 'wp-global-styles-twentytwentythree', '', '', '2023-04-28 19:03:09', '2023-04-28 22:03:09', '', 0, 'http://fabianaabathnovo.test//2023/04/28/wp-global-styles-twentytwentythree/', 0, 'wp_global_styles', '', 0),
(7, 1, '2023-04-28 19:03:14', '2023-04-28 22:03:14', '', 'Contato', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2023-04-28 19:03:14', '2023-04-28 22:03:14', '', 5, 'http://fabianaabathnovo.test//?p=7', 0, 'revision', '', 0),
(8, 1, '2023-04-28 20:28:16', '2023-04-28 23:28:16', '', 'Sobre', '', 'publish', 'closed', 'closed', '', 'sobre', '', '', '2023-04-28 20:28:16', '2023-04-28 23:28:16', '', 0, 'http://fabianaabathnovo.test//?page_id=8', 0, 'page', '', 0),
(9, 1, '2023-04-28 20:28:10', '2023-04-28 23:28:10', '{\"version\": 2, \"isGlobalStylesUserThemeJSON\": true }', 'Custom Styles', '', 'publish', 'closed', 'closed', '', 'wp-global-styles-tailpress', '', '', '2023-04-28 20:28:10', '2023-04-28 23:28:10', '', 0, 'http://fabianaabathnovo.test//2023/04/28/wp-global-styles-tailpress/', 0, 'wp_global_styles', '', 0),
(10, 1, '2023-04-28 20:28:16', '2023-04-28 23:28:16', '', 'Sobre', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2023-04-28 20:28:16', '2023-04-28 23:28:16', '', 8, 'http://fabianaabathnovo.test//?p=10', 0, 'revision', '', 0),
(14, 1, '2023-05-02 11:33:49', '2023-05-02 14:33:49', '', 'FZP_1496-min', '', 'inherit', 'open', 'closed', '', 'fzp_1496-min-4', '', '', '2023-05-02 11:33:49', '2023-05-02 14:33:49', '', 0, 'http://fabianaabathnovo.test//wp-content/uploads/2023/05/FZP_1496-min.jpg', 0, 'attachment', 'image/jpeg', 0),
(15, 1, '2023-05-02 12:34:27', '2023-05-02 15:34:27', '', 'Pagina Inicial', '', 'publish', 'closed', 'closed', '', 'pagina-inicial', '', '', '2023-05-02 12:34:27', '2023-05-02 15:34:27', '', 0, 'http://fabianaabathnovo.test//?page_id=15', 0, 'page', '', 0),
(16, 1, '2023-05-02 12:34:27', '2023-05-02 15:34:27', '', 'Pagina Inicial', '', 'inherit', 'closed', 'closed', '', '15-revision-v1', '', '', '2023-05-02 12:34:27', '2023-05-02 15:34:27', '', 15, 'http://fabianaabathnovo.test//?p=16', 0, 'revision', '', 0),
(17, 1, '2023-05-02 12:37:26', '2023-05-02 15:37:26', '{\n    \"show_on_front\": {\n        \"value\": \"page\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2023-05-02 15:37:26\"\n    },\n    \"page_on_front\": {\n        \"value\": \"15\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2023-05-02 15:37:26\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '609edfd2-f5e1-43bd-96e3-868288c132f0', '', '', '2023-05-02 12:37:26', '2023-05-02 15:37:26', '', 0, 'http://fabianaabathnovo.test//2023/05/02/609edfd2-f5e1-43bd-96e3-868288c132f0/', 0, 'customize_changeset', '', 0),
(19, 1, '2023-05-02 13:56:16', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2023-05-02 13:56:16', '0000-00-00 00:00:00', '', 0, 'http://fabianaabathnovo.test//?p=19', 1, 'nav_menu_item', '', 0),
(20, 1, '2023-05-02 13:56:16', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2023-05-02 13:56:16', '0000-00-00 00:00:00', '', 0, 'http://fabianaabathnovo.test//?p=20', 1, 'nav_menu_item', '', 0),
(21, 1, '2023-05-02 13:56:16', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2023-05-02 13:56:16', '0000-00-00 00:00:00', '', 0, 'http://fabianaabathnovo.test//?p=21', 1, 'nav_menu_item', '', 0),
(22, 1, '2023-05-02 13:56:16', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2023-05-02 13:56:16', '0000-00-00 00:00:00', '', 0, 'http://fabianaabathnovo.test//?p=22', 1, 'nav_menu_item', '', 0),
(23, 1, '2023-05-02 13:56:58', '2023-05-02 16:56:58', '', 'Blog', '', 'publish', 'closed', 'closed', '', 'blog', '', '', '2023-05-02 13:56:58', '2023-05-02 16:56:58', '', 0, 'http://fabianaabathnovo.test//?page_id=23', 0, 'page', '', 0),
(24, 1, '2023-05-02 13:56:58', '2023-05-02 16:56:58', '', 'Blog', '', 'inherit', 'closed', 'closed', '', '23-revision-v1', '', '', '2023-05-02 13:56:58', '2023-05-02 16:56:58', '', 23, 'http://fabianaabathnovo.test//?p=24', 0, 'revision', '', 0),
(25, 1, '2023-05-02 13:57:03', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2023-05-02 13:57:03', '0000-00-00 00:00:00', '', 0, 'http://fabianaabathnovo.test//?p=25', 1, 'nav_menu_item', '', 0),
(26, 1, '2023-05-02 13:57:03', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2023-05-02 13:57:03', '0000-00-00 00:00:00', '', 0, 'http://fabianaabathnovo.test//?p=26', 1, 'nav_menu_item', '', 0),
(27, 1, '2023-05-02 13:57:03', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2023-05-02 13:57:03', '0000-00-00 00:00:00', '', 0, 'http://fabianaabathnovo.test//?p=27', 1, 'nav_menu_item', '', 0),
(28, 1, '2023-05-02 13:57:03', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2023-05-02 13:57:03', '0000-00-00 00:00:00', '', 0, 'http://fabianaabathnovo.test//?p=28', 1, 'nav_menu_item', '', 0),
(29, 1, '2023-05-02 13:57:03', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2023-05-02 13:57:03', '0000-00-00 00:00:00', '', 0, 'http://fabianaabathnovo.test//?p=29', 1, 'nav_menu_item', '', 0),
(30, 1, '2023-05-02 14:27:30', '2023-05-02 16:58:25', '', 'Home', '', 'publish', 'closed', 'closed', '', 'home', '', '', '2023-05-02 14:27:30', '2023-05-02 17:27:30', '', 0, 'http://fabianaabathnovo.test//?p=30', 1, 'nav_menu_item', '', 0),
(31, 1, '2023-05-02 14:27:30', '2023-05-02 16:58:25', ' ', '', '', 'publish', 'closed', 'closed', '', '31', '', '', '2023-05-02 14:27:30', '2023-05-02 17:27:30', '', 0, 'http://fabianaabathnovo.test//?p=31', 4, 'nav_menu_item', '', 0),
(32, 1, '2023-05-02 14:27:30', '2023-05-02 16:58:25', ' ', '', '', 'publish', 'closed', 'closed', '', '32', '', '', '2023-05-02 14:27:30', '2023-05-02 17:27:30', '', 0, 'http://fabianaabathnovo.test//?p=32', 5, 'nav_menu_item', '', 0),
(33, 1, '2023-05-02 14:27:30', '2023-05-02 16:58:25', ' ', '', '', 'publish', 'closed', 'closed', '', '33', '', '', '2023-05-02 14:27:30', '2023-05-02 17:27:30', '', 0, 'http://fabianaabathnovo.test//?p=33', 2, 'nav_menu_item', '', 0),
(34, 1, '2023-05-02 14:27:30', '2023-05-02 16:58:25', '', 'Mentorias', '', 'publish', 'closed', 'closed', '', 'mentorias', '', '', '2023-05-02 14:27:30', '2023-05-02 17:27:30', '', 0, 'http://fabianaabathnovo.test//?p=34', 3, 'nav_menu_item', '', 0),
(35, 1, '2023-05-02 13:59:05', '2023-05-02 16:59:05', '', 'Orientação de Carreira', '', 'publish', 'closed', 'closed', '', 'orientacao-de-carreira', '', '', '2023-05-02 13:59:05', '2023-05-02 16:59:05', '', 0, 'http://fabianaabathnovo.test//?page_id=35', 0, 'page', '', 0),
(36, 1, '2023-05-02 13:59:05', '2023-05-02 16:59:05', '', 'Orientação de Carreira', '', 'inherit', 'closed', 'closed', '', '35-revision-v1', '', '', '2023-05-02 13:59:05', '2023-05-02 16:59:05', '', 35, 'http://fabianaabathnovo.test//?p=36', 0, 'revision', '', 0),
(38, 1, '2023-05-02 14:49:07', '2023-05-02 17:49:07', '', 'Identidade Horizontal reflexo azul', '', 'inherit', 'open', 'closed', '', 'identidade-horizontal-reflexo-azul-2', '', '', '2023-05-02 14:49:07', '2023-05-02 17:49:07', '', 0, 'http://fabianaabathnovo.test//wp-content/uploads/2023/05/Identidade-Horizontal-reflexo-azul-1.png', 0, 'attachment', 'image/png', 0),
(40, 1, '2023-05-02 15:01:45', '2023-05-02 18:01:45', '', 'ContentImageOpacless', '', 'inherit', 'open', 'closed', '', 'contentimageopacless', '', '', '2023-05-02 15:01:45', '2023-05-02 18:01:45', '', 0, 'http://fabianaabathnovo.test//wp-content/uploads/2023/05/ContentImageOpacless.png', 0, 'attachment', 'image/png', 0),
(41, 1, '2023-05-02 15:33:57', '2023-05-02 18:33:57', '', 'Pattern', '', 'inherit', 'open', 'closed', '', 'pattern', '', '', '2023-05-02 15:33:57', '2023-05-02 18:33:57', '', 0, 'http://fabianaabathnovo.test//wp-content/uploads/2023/05/Pattern.png', 0, 'attachment', 'image/png', 0),
(42, 1, '2023-05-02 16:20:17', '2023-05-02 19:20:17', '', 'FZP_1478', '', 'inherit', 'open', 'closed', '', 'fzp_1478', '', '', '2023-05-02 16:20:17', '2023-05-02 19:20:17', '', 0, 'http://fabianaabathnovo.test//wp-content/uploads/2023/05/FZP_1478.jpg', 0, 'attachment', 'image/jpeg', 0),
(43, 1, '2023-05-03 15:24:42', '2023-05-03 18:24:42', '', 'FabisemBg', '', 'inherit', 'open', 'closed', '', 'fabisembg', '', '', '2023-05-03 15:24:42', '2023-05-03 18:24:42', '', 0, 'http://fabianaabathnovo.test//wp-content/uploads/2023/05/FabisemBg.png', 0, 'attachment', 'image/png', 0),
(44, 1, '2023-05-03 16:07:18', '2023-05-03 19:07:18', '', 'abopLogo', '', 'inherit', 'open', 'closed', '', 'aboplogo', '', '', '2023-05-03 16:07:18', '2023-05-03 19:07:18', '', 0, 'http://fabianaabathnovo.test//wp-content/uploads/2023/05/abopLogo.png', 0, 'attachment', 'image/png', 0),
(45, 1, '2023-05-07 16:01:35', '0000-00-00 00:00:00', '', 'Rascunho automático', '', 'auto-draft', 'open', 'open', '', '', '', '', '2023-05-07 16:01:35', '0000-00-00 00:00:00', '', 0, 'http://fabianaabathnovo.test//?p=45', 0, 'post', '', 0),
(46, 1, '2023-05-07 16:01:47', '0000-00-00 00:00:00', '', 'Rascunho automático', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2023-05-07 16:01:47', '0000-00-00 00:00:00', '', 0, 'http://fabianaabathnovo.test//?page_id=46', 0, 'page', '', 0),
(47, 1, '2023-05-07 16:06:04', '2023-05-07 19:06:04', '', 'Cursos Para Orientadores', '', 'publish', 'closed', 'closed', '', 'cursos-para-orientadores', '', '', '2023-05-07 16:06:04', '2023-05-07 19:06:04', '', 0, 'http://fabianaabathnovo.test//?page_id=47', 0, 'page', '', 0),
(48, 1, '2023-05-07 16:06:04', '2023-05-07 19:06:04', '', 'Cursos Para Orientadores', '', 'inherit', 'closed', 'closed', '', '47-revision-v1', '', '', '2023-05-07 16:06:04', '2023-05-07 19:06:04', '', 47, 'http://fabianaabathnovo.test//?p=48', 0, 'revision', '', 0),
(49, 1, '2023-05-08 10:49:10', '2023-05-08 13:49:10', '', 'c56438e5-a0a5-4190-8069-0c0a81897b7c', '', 'inherit', 'open', 'closed', '', 'c56438e5-a0a5-4190-8069-0c0a81897b7c', '', '', '2023-05-08 10:49:10', '2023-05-08 13:49:10', '', 0, 'http://fabianaabathnovo.test//wp-content/uploads/2023/05/c56438e5-a0a5-4190-8069-0c0a81897b7c.png', 0, 'attachment', 'image/png', 0),
(50, 1, '2023-05-08 10:49:13', '2023-05-08 13:49:13', '', '1477sembg', '', 'inherit', 'open', 'closed', '', '1477sembg', '', '', '2023-05-08 10:49:13', '2023-05-08 13:49:13', '', 0, 'http://fabianaabathnovo.test//wp-content/uploads/2023/05/1477sembg.png', 0, 'attachment', 'image/png', 0),
(51, 1, '2023-05-08 10:49:15', '2023-05-08 13:49:15', '', '1478sembg', '', 'inherit', 'open', 'closed', '', '1478sembg', '', '', '2023-05-08 10:49:15', '2023-05-08 13:49:15', '', 0, 'http://fabianaabathnovo.test//wp-content/uploads/2023/05/1478sembg.png', 0, 'attachment', 'image/png', 0),
(52, 1, '2023-05-08 11:06:09', '0000-00-00 00:00:00', '', 'Rascunho automático', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2023-05-08 11:06:09', '0000-00-00 00:00:00', '', 0, 'http://fabianaabathnovo.test/?page_id=52', 0, 'page', '', 0),
(53, 1, '2023-05-08 11:06:35', '0000-00-00 00:00:00', '', 'Rascunho automático', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2023-05-08 11:06:35', '0000-00-00 00:00:00', '', 0, 'http://fabianaabathnovo.test/?page_id=53', 0, 'page', '', 0),
(54, 1, '2023-05-08 11:11:51', '2023-05-08 14:11:51', '', 'Método growp', '', 'publish', 'closed', 'closed', '', 'metodo-growp', '', '', '2023-05-08 11:11:51', '2023-05-08 14:11:51', '', 0, 'http://fabianaabathnovo.test/?page_id=54', 0, 'page', '', 0),
(55, 1, '2023-05-08 11:11:51', '2023-05-08 14:11:51', '', 'Método growp', '', 'inherit', 'closed', 'closed', '', '54-revision-v1', '', '', '2023-05-08 11:11:51', '2023-05-08 14:11:51', '', 54, 'http://fabianaabathnovo.test/?p=55', 0, 'revision', '', 0),
(56, 1, '2023-05-08 12:07:26', '0000-00-00 00:00:00', '', 'Rascunho automático', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2023-05-08 12:07:26', '0000-00-00 00:00:00', '', 0, 'http://fabianaabathnovo.test/?post_type=depoimentos&p=56', 0, 'depoimentos', '', 0),
(57, 1, '2023-05-08 12:09:32', '2023-05-08 15:09:32', 'a:8:{s:8:\"location\";a:1:{i:0;a:1:{i:0;a:3:{s:5:\"param\";s:9:\"post_type\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:11:\"depoimentos\";}}}s:8:\"position\";s:6:\"normal\";s:5:\"style\";s:7:\"default\";s:15:\"label_placement\";s:3:\"top\";s:21:\"instruction_placement\";s:5:\"label\";s:14:\"hide_on_screen\";s:0:\"\";s:11:\"description\";s:0:\"\";s:12:\"show_in_rest\";i:0;}', 'Depoimentos', 'depoimentos', 'publish', 'closed', 'closed', '', 'group_6459107f2c64e', '', '', '2023-05-09 12:32:34', '2023-05-09 15:32:34', '', 0, 'http://fabianaabathnovo.test/?post_type=acf-field-group&#038;p=57', 0, 'acf-field-group', '', 0),
(58, 1, '2023-05-08 12:09:32', '2023-05-08 15:09:32', 'a:11:{s:10:\"aria-label\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";}', 'Url do vídeo', 'url_do_video', 'publish', 'closed', 'closed', '', 'field_6459107fd2054', '', '', '2023-05-08 12:09:32', '2023-05-08 15:09:32', '', 57, 'http://fabianaabathnovo.test/?post_type=acf-field&p=58', 0, 'acf-field', '', 0),
(59, 1, '2023-05-08 12:11:10', '2023-05-08 15:11:10', 'Formação em Orientação de Carreira - Depoimento', 'Eliane Orte', '', 'publish', 'closed', 'closed', '', 'lorem-ipsum', '', '', '2023-05-09 12:20:09', '2023-05-09 15:20:09', '', 0, 'http://fabianaabathnovo.test/?post_type=depoimentos&#038;p=59', 0, 'depoimentos', '', 0),
(62, 1, '2023-05-08 16:12:41', '2023-05-08 19:12:41', 'Formação em Orientação de Carreira - Depoimento', 'Nayára Oliveira', '', 'publish', 'closed', 'closed', '', 'teste-2', '', '', '2023-05-09 12:20:07', '2023-05-09 15:20:07', '', 0, 'http://fabianaabathnovo.test/?post_type=depoimentos&#038;p=62', 0, 'depoimentos', '', 0),
(63, 1, '2023-05-08 16:40:38', '2023-05-08 19:40:38', 'Formação em Orientação de Carreira - Depoimento', 'Eliane Orte', '', 'inherit', 'closed', 'closed', '', '59-autosave-v1', '', '', '2023-05-08 16:40:38', '2023-05-08 19:40:38', '', 59, 'http://fabianaabathnovo.test/?p=63', 0, 'revision', '', 0),
(64, 1, '2023-05-08 16:47:56', '2023-05-08 19:47:56', '', 'Inserir um título (5)', '', 'inherit', 'open', 'closed', '', 'inserir-um-titulo-5', '', '', '2023-05-08 16:47:56', '2023-05-08 19:47:56', '', 59, 'http://fabianaabathnovo.test/wp-content/uploads/2023/05/Inserir-um-titulo-5.jpg', 0, 'attachment', 'image/jpeg', 0),
(65, 1, '2023-05-08 16:49:21', '2023-05-08 19:49:21', '', 'Inserir um título (6)', '', 'inherit', 'open', 'closed', '', 'inserir-um-titulo-6', '', '', '2023-05-08 16:49:21', '2023-05-08 19:49:21', '', 59, 'http://fabianaabathnovo.test/wp-content/uploads/2023/05/Inserir-um-titulo-6.jpg', 0, 'attachment', 'image/jpeg', 0),
(66, 1, '2023-05-08 16:51:11', '2023-05-08 19:51:11', 'Formação em Orientação de Carreira - Depoim', 'Nayára Oliveira', '', 'inherit', 'closed', 'closed', '', '62-autosave-v1', '', '', '2023-05-08 16:51:11', '2023-05-08 19:51:11', '', 62, 'http://fabianaabathnovo.test/?p=66', 0, 'revision', '', 0),
(67, 1, '2023-05-08 16:52:11', '2023-05-08 19:52:11', '', 'Inserir um título (7)', '', 'inherit', 'open', 'closed', '', 'inserir-um-titulo-7', '', '', '2023-05-08 16:52:11', '2023-05-08 19:52:11', '', 62, 'http://fabianaabathnovo.test/wp-content/uploads/2023/05/Inserir-um-titulo-7.jpg', 0, 'attachment', 'image/jpeg', 0),
(68, 1, '2023-05-08 16:54:24', '2023-05-08 19:54:24', 'Formação em Orientação de Carreira - Depoimento', 'Maira Souza', '', 'publish', 'closed', 'closed', '', 'maira-souza', '', '', '2023-05-09 12:20:05', '2023-05-09 15:20:05', '', 0, 'http://fabianaabathnovo.test/?post_type=depoimentos&#038;p=68', 0, 'depoimentos', '', 0),
(69, 1, '2023-05-08 16:54:20', '2023-05-08 19:54:20', '', 'Inserir um título (8)', '', 'inherit', 'open', 'closed', '', 'inserir-um-titulo-8', '', '', '2023-05-08 16:54:20', '2023-05-08 19:54:20', '', 68, 'http://fabianaabathnovo.test/wp-content/uploads/2023/05/Inserir-um-titulo-8.jpg', 0, 'attachment', 'image/jpeg', 0),
(70, 1, '2023-05-08 16:58:07', '2023-05-08 19:58:07', 'Formação em Orientação de Carreira - Depoimento', 'Karina Lima', '', 'publish', 'closed', 'closed', '', 'luana-garcia', '', '', '2023-05-09 12:20:03', '2023-05-09 15:20:03', '', 0, 'http://fabianaabathnovo.test/?post_type=depoimentos&#038;p=70', 0, 'depoimentos', '', 0),
(71, 1, '2023-05-08 16:57:49', '2023-05-08 19:57:49', '', 'Inserir um título (9)', '', 'inherit', 'open', 'closed', '', 'inserir-um-titulo-9', '', '', '2023-05-08 16:57:49', '2023-05-08 19:57:49', '', 70, 'http://fabianaabathnovo.test/wp-content/uploads/2023/05/Inserir-um-titulo-9.jpg', 0, 'attachment', 'image/jpeg', 0),
(72, 1, '2023-05-08 16:59:09', '2023-05-08 19:59:09', 'Formação em Orientação de Carreira - Depoimento', 'Karina Lima', '', 'inherit', 'closed', 'closed', '', '70-autosave-v1', '', '', '2023-05-08 16:59:09', '2023-05-08 19:59:09', '', 70, 'http://fabianaabathnovo.test/?p=72', 0, 'revision', '', 0),
(73, 1, '2023-05-08 17:00:31', '2023-05-08 20:00:31', '', 'Inserir um título (10)', '', 'inherit', 'open', 'closed', '', 'inserir-um-titulo-10', '', '', '2023-05-08 17:00:31', '2023-05-08 20:00:31', '', 70, 'http://fabianaabathnovo.test/wp-content/uploads/2023/05/Inserir-um-titulo-10.jpg', 0, 'attachment', 'image/jpeg', 0),
(74, 1, '2023-05-08 17:03:28', '2023-05-08 20:03:28', 'Formação em Orientação de Carreira - Depoimento', 'Luana Garcia', '', 'publish', 'closed', 'closed', '', 'luana-garcia-2', '', '', '2023-05-09 12:20:00', '2023-05-09 15:20:00', '', 0, 'http://fabianaabathnovo.test/?post_type=depoimentos&#038;p=74', 0, 'depoimentos', '', 0),
(75, 1, '2023-05-09 12:19:55', '2023-05-09 15:19:55', 'Formação em Orientação de Carreira - Depoimento', 'Luana Garcia', '', 'inherit', 'closed', 'closed', '', '74-autosave-v1', '', '', '2023-05-09 12:19:55', '2023-05-09 15:19:55', '', 74, 'http://fabianaabathnovo.test/?p=75', 0, 'revision', '', 0),
(76, 1, '2023-05-09 12:34:31', '2023-05-09 15:34:31', '“Fabi, seu curso é completo! Metodologia, ferramentas, manejo de condução. Além, de todos os bônus oferecidos de tamanha importância, como: organização, parte burocrática de pensar os atendimentos, mídias, parte comercial etc. Quanto a você, sua forma de ensinar, contém muita didática e simpatia. O que nos motivou durante todo o curso. Muito obrigada pela experiência. Era tudo que faltava para que os atendimentos sigam mais confiantes daqui para frente!”.', 'Alessandra Mauro Prado', '', 'trash', 'closed', 'closed', '', '__trashed', '', '', '2023-05-09 12:34:31', '2023-05-09 15:34:31', '', 0, 'http://fabianaabathnovo.test/?post_type=depoimentos&#038;p=76', 0, 'depoimentos', '', 0),
(77, 1, '2023-05-09 12:32:34', '2023-05-09 15:32:34', 'a:11:{s:10:\"aria-label\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";}', 'Rede social', 'rede_social', 'publish', 'closed', 'closed', '', 'field_645a677fb7b86', '', '', '2023-05-09 12:32:34', '2023-05-09 15:32:34', '', 57, 'http://fabianaabathnovo.test/?post_type=acf-field&p=77', 1, 'acf-field', '', 0),
(78, 1, '2023-05-09 12:33:22', '2023-05-09 15:33:22', '“Fabi, seu curso é completo! Metodologia, ferramentas, manejo de condução. Além, de todos os bônus oferecidos de tamanha importância, como: organização, parte burocrática de pensar os atendimentos, mídias, parte comercial etc. Quanto a você, sua forma de ensinar, contém muita didática e simpatia. O que nos motivou durante todo o curso. Muito obrigada pela experiência. Era tudo que faltava para que os atendimentos sigam mais confiantes daqui para frente!”.', 'Alessandra Mauro Prado', '', 'publish', 'closed', 'closed', '', 'alessandra-mauro-prado', '', '', '2023-05-09 12:33:22', '2023-05-09 15:33:22', '', 0, 'http://fabianaabathnovo.test/?post_type=depoimentos&#038;p=78', 0, 'depoimentos', '', 0),
(79, 1, '2023-05-09 12:33:56', '2023-05-09 15:33:56', '“Eu amei cada detalhe do curso. Esse foi o primeiro curso que fiz em OC e o método me deu segurança para começar a atuar. Tive um suporte incrível e aprendi muito a estruturar meu negócio em OC. Tenho recomendado o curso para várias amigas e sinto que meu processo de transição dos atendimentos clínicos em psicologia para atuação em OC será bem estruturado a partir do meu plano de carreira que irá orientar os passos que preciso percorrer para alcançar meus objetivos profissionais. Só tenho a agradecer!!!”.', 'Renata Gonçalves de Britto', '', 'publish', 'closed', 'closed', '', 'renata-goncalves-de-britto', '', '', '2023-05-09 12:33:56', '2023-05-09 15:33:56', '', 0, 'http://fabianaabathnovo.test/?post_type=depoimentos&#038;p=79', 0, 'depoimentos', '', 0),
(80, 1, '2023-05-09 12:34:22', '2023-05-09 15:34:22', '“Um curso completo que traz como diferencial, a preocupação não só com a base da orientação, mas principalmente como faremos posteriormente a formação, que é geralmente o que faz o formado sentir medo de começar e passar achar que não está preparado e procurar outros cursos, e não sair do ciclo da insegurança. Já é sabido que a parte do manejo, comercial, marketing, branding e o digital precisam andar juntos.”.', 'Laís Santiago', '', 'publish', 'closed', 'closed', '', 'lais-santiago', '', '', '2023-05-09 12:34:22', '2023-05-09 15:34:22', '', 0, 'http://fabianaabathnovo.test/?post_type=depoimentos&#038;p=80', 0, 'depoimentos', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Sem categoria', 'sem-categoria', 0),
(2, 'twentytwentythree', 'twentytwentythree', 0),
(3, 'tailpress', 'tailpress', 0),
(4, 'Menu principal', 'menu-principal', 0),
(5, 'Vídeos', 'videos', 0),
(6, 'Método growp', 'metodo-growp', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(6, 2, 0),
(9, 3, 0),
(30, 4, 0),
(31, 4, 0),
(32, 4, 0),
(33, 4, 0),
(34, 4, 0),
(59, 5, 0),
(62, 5, 0),
(68, 5, 0),
(70, 5, 0),
(74, 5, 0),
(78, 6, 0),
(79, 6, 0),
(80, 6, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'wp_theme', '', 0, 1),
(3, 3, 'wp_theme', '', 0, 1),
(4, 4, 'nav_menu', '', 0, 5),
(5, 5, 'categorias', '', 0, 5),
(6, 6, 'categorias', '', 0, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'admin'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', ''),
(15, 1, 'show_welcome_panel', '0'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '45'),
(18, 1, 'community-events-location', 'a:1:{s:2:\"ip\";s:9:\"127.0.0.0\";}'),
(19, 1, 'session_tokens', 'a:3:{s:64:\"f8d42e1abd40a0ccec1a5ba125e79f8d7a223a3e3b38fd1687570dfa72c9523d\";a:4:{s:10:\"expiration\";i:1683658894;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:129:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36 Edg/113.0.1774.35\";s:5:\"login\";i:1683486094;}s:64:\"daa27d5edf23c6d390826b0b7e8aa9a9da2f11b6771146a3539d7a58f5c7217f\";a:4:{s:10:\"expiration\";i:1683726522;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:129:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36 Edg/113.0.1774.35\";s:5:\"login\";i:1683553722;}s:64:\"647548ec4db933c942428c7b2b1f32e7f48355ba72e2761b4a478e174a8ced42\";a:4:{s:10:\"expiration\";i:1683727419;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:111:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36\";s:5:\"login\";i:1683554619;}}'),
(20, 1, 'closedpostboxes_dashboard', 'a:5:{i:0;s:21:\"dashboard_site_health\";i:1;s:19:\"dashboard_right_now\";i:2;s:18:\"dashboard_activity\";i:3;s:21:\"dashboard_quick_press\";i:4;s:17:\"dashboard_primary\";}'),
(21, 1, 'metaboxhidden_dashboard', 'a:0:{}'),
(22, 1, 'wp_persisted_preferences', 'a:2:{s:14:\"core/edit-post\";a:2:{s:26:\"isComplementaryAreaVisible\";b:1;s:12:\"welcomeGuide\";b:0;}s:9:\"_modified\";s:24:\"2023-04-28T22:03:09.889Z\";}'),
(23, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(24, 1, 'metaboxhidden_nav-menus', 'a:1:{i:0;s:12:\"add-post_tag\";}'),
(25, 1, 'nav_menu_recently_edited', '4'),
(26, 1, 'wp_user-settings', 'libraryContent=browse&editor=html'),
(27, 1, 'wp_user-settings-time', '1683575660');

-- --------------------------------------------------------

--
-- Estrutura da tabela `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'admin', '$P$Brqbd.9HJeFdiGCxRNXGx1nLmPywX2.', 'admin', 'teste@teste.com', 'http://fabianaabath.test', '2023-04-28 15:24:36', '', 0, 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Índices para tabela `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Índices para tabela `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Índices para tabela `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`),
  ADD KEY `autoload` (`autoload`);

--
-- Índices para tabela `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Índices para tabela `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Índices para tabela `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Índices para tabela `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Índices para tabela `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Índices para tabela `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Índices para tabela `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Índices para tabela `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=361;

--
-- AUTO_INCREMENT de tabela `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT de tabela `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de tabela `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
