-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2018 pada 12.55
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kariria`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `certificate_name` varchar(200) DEFAULT NULL,
  `certificate_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `certificates`
--

INSERT INTO `certificates` (`id`, `email`, `certificate_name`, `certificate_date`, `created_at`, `updated_at`) VALUES
(2, 'susilaandika@gmail.com', 'asdasdas', '2018-07-27', '2018-07-29 03:24:35', '2018-07-29 03:24:35'),
(3, 'susilaandika@gmail.com', 'qweqwe', '2018-07-29', '2018-07-29 03:24:35', '2018-07-29 03:24:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `educations`
--

CREATE TABLE `educations` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_loc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `major` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` decimal(4,2) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `educations`
--

INSERT INTO `educations` (`id`, `email`, `level`, `education_loc`, `major`, `value`, `from_date`, `to_date`, `created_at`, `updated_at`) VALUES
(2, 'asdasd@gmail.com', 'SMP', 'SMP 1 Singaraja', 'IPS', '90.00', '2018-06-03', '2018-06-04', NULL, '2018-06-02 21:27:19'),
(11, 'susila.handika@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'susilaandika@gmail.com', 'SD', 'SD 1 Singaraja', 'IPA', '90.00', '2018-06-01', '2018-06-01', NULL, NULL),
(13, 'susilaandika@gmail.com', 'SMP', 'SMP 1 Singaraja', 'IPS', '89.00', '2018-06-01', '2018-06-01', NULL, NULL),
(14, 'susilaandika@gmail.com', 'SMA', 'SMA 4 Singaraja', 'IPA', '80.00', '2018-06-01', '2018-06-03', NULL, NULL),
(15, 'rini@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `edu_locations`
--

CREATE TABLE `edu_locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `provice_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `edu_locations`
--

INSERT INTO `edu_locations` (`id`, `provice_id`, `district_id`, `name`) VALUES
(1, 1, 1, 'SD 1 Denpasar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `scope` varchar(100) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `jobdesc` text,
  `reason_resign` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `experiences`
--

INSERT INTO `experiences` (`id`, `email`, `company`, `scope`, `position`, `from_date`, `to_date`, `jobdesc`, `reason_resign`, `created_at`, `updated_at`) VALUES
(2, 'susilaandika@gmail.com', 'PT. GLobal Retailindo Pratama', 'IT', 'officer', '2018-07-29', '2018-07-29', 'programming', 'Mencari pengalaman baru', '2018-07-31 12:06:48', '2018-07-31 12:06:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `group_skills`
--

CREATE TABLE `group_skills` (
  `id` int(11) NOT NULL,
  `group_skill` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `group_skills`
--

INSERT INTO `group_skills` (`id`, `group_skill`) VALUES
(1, 'IT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identities`
--

CREATE TABLE `identities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `married` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `identities`
--

INSERT INTO `identities` (`id`, `name`, `telp`, `email`, `birthday`, `gender`, `married`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Susila Hadika', '081936038572', 'susilaandika@gmail.com', '1990-07-05', 'P', '0', 'Jalan tukad petanu, Denpasar', '2018-05-31 20:34:07', '2018-08-02 03:30:33'),
(7, 'Handika Susila', '081936038572', 'susila.handika@gmail.com', '2018-07-25', 'L', '0', 'Singaraja', NULL, '2018-07-25 05:54:38'),
(8, 'Rini', NULL, 'rini@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lang`
--

CREATE TABLE `lang` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `iso` char(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lang`
--

INSERT INTO `lang` (`id`, `name`, `iso`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', '2018-07-18 12:39:15', '0000-00-00 00:00:00'),
(2, 'Afar', 'aa', '2018-07-18 12:39:15', '0000-00-00 00:00:00'),
(3, 'Abkhazian', 'ab', '2018-07-18 12:39:15', '0000-00-00 00:00:00'),
(4, 'Afrikaans', 'af', '2018-07-18 12:39:15', '0000-00-00 00:00:00'),
(5, 'Amharic', 'am', '2018-07-18 12:39:15', '0000-00-00 00:00:00'),
(6, 'Arabic', 'ar', '2018-07-18 12:39:15', '0000-00-00 00:00:00'),
(7, 'Assamese', 'as', '2018-07-18 12:39:15', '0000-00-00 00:00:00'),
(8, 'Aymara', 'ay', '2018-07-18 12:39:15', '0000-00-00 00:00:00'),
(9, 'Azerbaijani', 'az', '2018-07-18 12:39:15', '0000-00-00 00:00:00'),
(10, 'Bashkir', 'ba', '2018-07-18 12:39:15', '0000-00-00 00:00:00'),
(11, 'Belarusian', 'be', '2018-07-18 12:39:15', '0000-00-00 00:00:00'),
(12, 'Bulgarian', 'bg', '2018-07-18 12:39:15', '0000-00-00 00:00:00'),
(13, 'Bihari', 'bh', '2018-07-18 12:39:15', '0000-00-00 00:00:00'),
(14, 'Bislama', 'bi', '2018-07-18 12:39:15', '0000-00-00 00:00:00'),
(15, 'Bengali/Bangla', 'bn', '2018-07-18 12:39:15', '0000-00-00 00:00:00'),
(16, 'Tibetan', 'bo', '2018-07-18 12:39:15', '0000-00-00 00:00:00'),
(17, 'Breton', 'br', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(18, 'Catalan', 'ca', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(19, 'Corsican', 'co', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(20, 'Czech', 'cs', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(21, 'Welsh', 'cy', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(22, 'Danish', 'da', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(23, 'German', 'de', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(24, 'Bhutani', 'dz', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(25, 'Greek', 'el', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(26, 'Esperanto', 'eo', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(27, 'Spanish', 'es', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(28, 'Estonian', 'et', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(29, 'Basque', 'eu', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(30, 'Persian', 'fa', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(31, 'Finnish', 'fi', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(32, 'Fiji', 'fj', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(33, 'Faeroese', 'fo', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(34, 'French', 'fr', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(35, 'Frisian', 'fy', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(36, 'Irish', 'ga', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(37, 'Scots/Gaelic', 'gd', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(38, 'Galician', 'gl', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(39, 'Guarani', 'gn', '2018-07-18 12:39:16', '0000-00-00 00:00:00'),
(40, 'Gujarati', 'gu', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(41, 'Hausa', 'ha', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(42, 'Hindi', 'hi', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(43, 'Croatian', 'hr', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(44, 'Hungarian', 'hu', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(45, 'Armenian', 'hy', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(46, 'Interlingua', 'ia', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(47, 'Interlingue', 'ie', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(48, 'Inupiak', 'ik', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(49, 'Indonesian', 'in', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(50, 'Icelandic', 'is', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(51, 'Italian', 'it', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(52, 'Hebrew', 'iw', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(53, 'Japanese', 'ja', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(54, 'Yiddish', 'ji', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(55, 'Javanese', 'jw', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(56, 'Georgian', 'ka', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(57, 'Kazakh', 'kk', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(58, 'Greenlandic', 'kl', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(59, 'Cambodian', 'km', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(60, 'Kannada', 'kn', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(61, 'Korean', 'ko', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(62, 'Kashmiri', 'ks', '2018-07-18 12:39:17', '0000-00-00 00:00:00'),
(63, 'Kurdish', 'ku', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(64, 'Kirghiz', 'ky', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(65, 'Latin', 'la', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(66, 'Lingala', 'ln', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(67, 'Laothian', 'lo', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(68, 'Lithuanian', 'lt', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(69, 'Latvian/Lettish', 'lv', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(70, 'Malagasy', 'mg', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(71, 'Maori', 'mi', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(72, 'Macedonian', 'mk', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(73, 'Malayalam', 'ml', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(74, 'Mongolian', 'mn', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(75, 'Moldavian', 'mo', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(76, 'Marathi', 'mr', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(77, 'Malay', 'ms', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(78, 'Maltese', 'mt', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(79, 'Burmese', 'my', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(80, 'Nauru', 'na', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(81, 'Nepali', 'ne', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(82, 'Dutch', 'nl', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(83, 'Norwegian', 'no', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(84, 'Occitan', 'oc', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(85, '(Afan)/Oromoor/Oriya', 'om', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(86, 'Punjabi', 'pa', '2018-07-18 12:39:18', '0000-00-00 00:00:00'),
(87, 'Polish', 'pl', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(88, 'Pashto/Pushto', 'ps', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(89, 'Portuguese', 'pt', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(90, 'Quechua', 'qu', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(91, 'Rhaeto-Romance', 'rm', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(92, 'Kirundi', 'rn', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(93, 'Romanian', 'ro', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(94, 'Russian', 'ru', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(95, 'Kinyarwanda', 'rw', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(96, 'Sanskrit', 'sa', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(97, 'Sindhi', 'sd', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(98, 'Sangro', 'sg', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(99, 'Serbo-Croatian', 'sh', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(100, 'Singhalese', 'si', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(101, 'Slovak', 'sk', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(102, 'Slovenian', 'sl', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(103, 'Samoan', 'sm', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(104, 'Shona', 'sn', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(105, 'Somali', 'so', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(106, 'Albanian', 'sq', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(107, 'Serbian', 'sr', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(108, 'Siswati', 'ss', '2018-07-18 12:39:19', '0000-00-00 00:00:00'),
(109, 'Sesotho', 'st', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(110, 'Sundanese', 'su', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(111, 'Swedish', 'sv', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(112, 'Swahili', 'sw', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(113, 'Tamil', 'ta', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(114, 'Telugu', 'te', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(115, 'Tajik', 'tg', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(116, 'Thai', 'th', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(117, 'Tigrinya', 'ti', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(118, 'Turkmen', 'tk', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(119, 'Tagalog', 'tl', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(120, 'Setswana', 'tn', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(121, 'Tonga', 'to', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(122, 'Turkish', 'tr', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(123, 'Tsonga', 'ts', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(124, 'Tatar', 'tt', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(125, 'Twi', 'tw', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(126, 'Ukrainian', 'uk', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(127, 'Urdu', 'ur', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(128, 'Uzbek', 'uz', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(129, 'Vietnamese', 'vi', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(130, 'Volapuk', 'vo', '2018-07-18 12:39:20', '0000-00-00 00:00:00'),
(131, 'Wolof', 'wo', '2018-07-18 12:39:21', '0000-00-00 00:00:00'),
(132, 'Xhosa', 'xh', '2018-07-18 12:39:21', '0000-00-00 00:00:00'),
(133, 'Yoruba', 'yo', '2018-07-18 12:39:21', '0000-00-00 00:00:00'),
(134, 'Chinese', 'zh', '2018-07-18 12:39:21', '0000-00-00 00:00:00'),
(135, 'Zulu', 'zu', '2018-07-18 12:39:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `languages`
--

CREATE TABLE `languages` (
  `email` varchar(50) NOT NULL,
  `language` varchar(100) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `languages`
--

INSERT INTO `languages` (`email`, `language`, `score`, `created_at`, `updated_at`) VALUES
('susilaandika@gmail.com', 'ab', 1, '2018-07-19 06:16:04', '2018-07-19 06:16:04'),
('susilaandika@gmail.com', 'br', 3, '2018-07-19 06:16:04', '2018-07-19 06:16:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `levels`
--

CREATE TABLE `levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `level_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `levels`
--

INSERT INTO `levels` (`id`, `level_name`) VALUES
(1, 'SD'),
(2, 'SMP'),
(3, 'SMA'),
(4, 'S1'),
(5, 'S2'),
(6, 'S3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(83, '2014_10_12_000000_create_users_table', 1),
(84, '2014_10_12_100000_create_password_resets_table', 1),
(85, '2018_04_22_111830_create_identities_table', 1),
(86, '2018_05_17_103859_create_levels_table', 1),
(87, '2018_05_20_052647_create_educations_table', 1),
(88, '2018_06_01_031935_create_edu_loc_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `photos`
--

CREATE TABLE `photos` (
  `email` varchar(50) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `photos`
--

INSERT INTO `photos` (`email`, `photo`, `created_at`, `updated_at`) VALUES
('rini@gmail.com', NULL, NULL, NULL),
('susila.handika@gmail.com', '51a93bc33fb32edb39c2e0a311d12e4c.jpg', '2018-07-25 13:52:32', '2018-07-25 05:54:38'),
('susilaandika@gmail.com', '03dcb524cec52af02e63b469ac714ad3.jpg', '2018-07-23 12:51:06', '2018-07-25 05:12:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `references`
--

CREATE TABLE `references` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `compensation` text,
  `start_work` varchar(15) DEFAULT NULL,
  `reason_resign` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `references`
--

INSERT INTO `references` (`id`, `email`, `salary`, `compensation`, `start_work`, `reason_resign`, `created_at`, `updated_at`) VALUES
(1, 'susilaandika@gmail.com', 1500000, 'BPJS, tunjangan', 'ASAP', 'Ada masalah internal', '2018-07-01 09:48:16', '2018-07-29 04:52:34'),
(2, 'susila.handika@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'rini@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `scores`
--

CREATE TABLE `scores` (
  `id` int(11) NOT NULL,
  `score` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `scores`
--

INSERT INTO `scores` (`id`, `score`) VALUES
(1, 'Beginer'),
(2, 'Intermediete'),
(3, 'Advance');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `skill` varchar(100) DEFAULT NULL,
  `score` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skills`
--

INSERT INTO `skills` (`id`, `email`, `skill`, `score`, `created_at`, `updated_at`) VALUES
(6, 'asd@gmail.com', 'eeeee', '3', '2018-06-03 13:40:20', '2018-06-03 13:40:27'),
(8, 'susilaandika@gmail.com', '1', '1', '2018-07-31 05:38:20', '2018-07-31 05:38:20'),
(9, 'susilaandika@gmail.com', '3', '3', '2018-07-31 05:38:20', '2018-07-31 05:38:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill_types`
--

CREATE TABLE `skill_types` (
  `id` int(11) NOT NULL,
  `skill_type` varchar(100) DEFAULT NULL,
  `group_skill_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skill_types`
--

INSERT INTO `skill_types` (`id`, `skill_type`, `group_skill_id`) VALUES
(1, 'PHP', 1),
(2, 'Java', 1),
(3, 'CSS', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'Susila Handika', 'susilaandika@gmail.com', '$2y$10$7wNflhjq5twDpKTilD73QeY2l8TYZDGswZyJsumW/ex0lUweM5aZW', 1, '9389nSQBdPmrQ1YN7rTo2Gi9wNt4seC4bMDpGvk1gHcfbMcQIVR0VmxZ79cL', '2018-07-25 05:35:30', '2018-07-25 05:35:30'),
(19, 'Handika Susila', 'susila.handika@gmail.com', '$2y$10$VLbIyzgm7.bvwovPWqsppuLQ.qYPQ9IGdFLTRcRHOI0queBaAWe52', 1, 'R4l4QeumbV7EX75N0Pt9XpbQCW6qafZdDtxjPacEou59opwNbMMrXipMv5tz', '2018-07-25 05:51:53', '2018-07-25 05:51:53'),
(20, 'Rini', 'rini@gmail.com', '$2y$10$RfvvmXhrOj4WvhryYAc4qu21Y4NU0Fy09JlsqjHmHjlxnBhlGPjQy', 2, 'KY1FXbuWgtgG8hqtYcw9BU7emA3p3IMWlVtBOE914XBm35y4bFqa7WdFydqW', '2018-08-03 04:09:48', '2018-08-03 04:09:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `edu_locations`
--
ALTER TABLE `edu_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `group_skills`
--
ALTER TABLE `group_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `identities`
--
ALTER TABLE `identities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `identities_email_unique` (`email`);

--
-- Indeks untuk tabel `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`email`,`language`);

--
-- Indeks untuk tabel `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skill_types`
--
ALTER TABLE `skill_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_skill_id` (`group_skill_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `edu_locations`
--
ALTER TABLE `edu_locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `identities`
--
ALTER TABLE `identities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT untuk tabel `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `references`
--
ALTER TABLE `references`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `identities`
--
ALTER TABLE `identities`
  ADD CONSTRAINT `identities_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Ketidakleluasaan untuk tabel `skill_types`
--
ALTER TABLE `skill_types`
  ADD CONSTRAINT `skill_types_ibfk_1` FOREIGN KEY (`group_skill_id`) REFERENCES `group_skills` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
