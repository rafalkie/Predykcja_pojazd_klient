-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Maj 2018, 23:19
-- Wersja serwera: 10.1.31-MariaDB
-- Wersja PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `test`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_21_203204_create_pojazd_table', 1),
(4, '2018_04_22_175124_create_people_table', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `people`
--

CREATE TABLE `people` (
  `id` int(10) UNSIGNED NOT NULL,
  `wiek` int(11) NOT NULL,
  `plec` int(11) NOT NULL,
  `odleglosc` int(11) NOT NULL,
  `wlasny_samochod` int(11) NOT NULL,
  `wyksztalcenie` int(11) NOT NULL,
  `dochod` int(11) NOT NULL,
  `pojazd_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `people`
--

INSERT INTO `people` (`id`, `wiek`, `plec`, `odleglosc`, `wlasny_samochod`, `wyksztalcenie`, `dochod`, `pojazd_id`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 1, 0, 0, 1, 3, NULL, NULL),
(2, 0, 1, 2, 1, 0, 1, 1, NULL, NULL),
(3, 2, 0, 3, 0, 2, 1, 4, NULL, NULL),
(4, 3, 0, 4, 1, 4, 2, 1, NULL, NULL),
(5, 3, 1, 4, 1, 5, 1, 3, NULL, NULL),
(6, 2, 0, 3, 1, 2, 2, 1, NULL, NULL),
(7, 6, 1, 2, 0, 3, 2, 3, NULL, NULL),
(8, 6, 0, 3, 0, 3, 2, 4, NULL, NULL),
(9, 3, 0, 4, 1, 5, 1, 4, NULL, NULL),
(10, 6, 0, 7, 1, 3, 3, 5, NULL, NULL),
(11, 4, 1, 8, 1, 4, 4, 5, NULL, NULL),
(12, 8, 1, 2, 1, 3, 1, 2, NULL, NULL),
(13, 7, 1, 1, 0, 2, 2, 2, NULL, NULL),
(14, 3, 1, 8, 1, 5, 3, 3, NULL, NULL),
(15, 5, 0, 8, 1, 3, 3, 3, NULL, NULL),
(16, 6, 0, 6, 1, 4, 3, 4, NULL, NULL),
(17, 6, 1, 6, 1, 4, 3, 4, NULL, NULL),
(18, 5, 1, 7, 1, 4, 3, 5, NULL, NULL),
(19, 5, 0, 7, 0, 4, 3, 5, NULL, NULL),
(20, 6, 0, 7, 0, 4, 2, 4, NULL, NULL),
(21, 0, 0, 1, 1, 0, 1, 1, NULL, NULL),
(22, 1, 0, 1, 0, 1, 1, 3, NULL, NULL),
(23, 3, 0, 1, 1, 3, 1, 4, NULL, NULL),
(24, 5, 0, 3, 1, 4, 2, 3, NULL, NULL),
(25, 6, 0, 3, 0, 3, 3, 2, NULL, NULL),
(26, 8, 0, 2, 1, 5, 3, 2, NULL, NULL),
(27, 9, 0, 3, 1, 4, 2, 4, NULL, NULL),
(28, 0, 1, 1, 1, 0, 1, 1, NULL, NULL),
(29, 0, 1, 2, 1, 0, 1, 1, NULL, NULL),
(30, 2, 1, 2, 1, 2, 1, 1, NULL, NULL),
(31, 2, 1, 3, 0, 2, 1, 3, NULL, NULL),
(32, 4, 1, 4, 1, 4, 2, 4, NULL, NULL),
(33, 6, 1, 4, 0, 4, 2, 3, NULL, NULL),
(34, 7, 1, 3, 0, 3, 2, 3, NULL, NULL),
(35, 8, 1, 2, 1, 4, 2, 3, NULL, NULL),
(36, 5, 0, 7, 1, 3, 3, 1, NULL, NULL),
(37, 5, 1, 6, 1, 4, 3, 4, NULL, NULL),
(38, 3, 0, 8, 1, 4, 2, 5, NULL, NULL),
(39, 4, 1, 6, 0, 5, 3, 5, NULL, NULL),
(40, 7, 0, 7, 0, 3, 3, 5, NULL, NULL),
(41, 8, 1, 8, 1, 4, 2, 5, NULL, NULL),
(42, 5, 0, 7, 0, 3, 3, 4, NULL, NULL),
(43, 8, 1, 7, 0, 4, 2, 5, NULL, NULL),
(44, 6, 1, 7, 1, 3, 4, 1, NULL, NULL),
(45, 4, 0, 6, 1, 4, 2, 3, NULL, NULL),
(46, 8, 1, 6, 0, 5, 1, 3, NULL, NULL),
(47, 2, 0, 1, 1, 4, 2, 2, NULL, NULL),
(48, 3, 1, 2, 0, 3, 2, 2, NULL, NULL),
(49, 5, 0, 1, 0, 4, 3, 2, NULL, NULL),
(50, 7, 1, 2, 0, 5, 4, 2, NULL, NULL),
(51, 8, 0, 2, 1, 4, 3, 2, NULL, NULL),
(52, 10, 0, 7, 1, 0, 1, 1, NULL, NULL),
(53, 2, 0, 6, 0, 4, 1, 5, NULL, NULL),
(54, 4, 0, 7, 0, 5, 3, 5, NULL, NULL),
(55, 6, 1, 8, 0, 4, 2, 5, NULL, NULL),
(56, 8, 1, 8, 0, 3, 3, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pojazd`
--

CREATE TABLE `pojazd` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `pojazd`
--

INSERT INTO `pojazd` (`id`, `nazwa`, `created_at`, `updated_at`) VALUES
(1, 'Samochód', NULL, NULL),
(2, 'Taxi', NULL, NULL),
(3, 'Autobus', NULL, NULL),
(4, 'Pociąg', NULL, NULL),
(5, 'Samolot', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'rafalkie2@gmail.com', '$2y$10$xKVBJqxm5ySqnmGmIV/83.K/Z4WwG3hLH5tbV40f73OJ5PYiBGb/G', 'SXg6BnGwkiDXeblmHuDFQFswDMdx1ziI6hyNc9LhL0ySdVWLolw4ZCsX7jZ2', '2018-05-27 15:15:48', '2018-05-27 15:15:48');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`),
  ADD KEY `people_pojazd_id_foreign` (`pojazd_id`);

--
-- Indeksy dla tabeli `pojazd`
--
ALTER TABLE `pojazd`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT dla tabeli `pojazd`
--
ALTER TABLE `pojazd`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `people_pojazd_id_foreign` FOREIGN KEY (`pojazd_id`) REFERENCES `pojazd` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
