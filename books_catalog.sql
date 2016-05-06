-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 06 Maj 2016, 13:18
-- Wersja serwera: 10.1.13-MariaDB
-- Wersja PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `books_catalog`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `books`
--

CREATE TABLE `books` (
  `id_book` int(11) NOT NULL,
  `name_book` text NOT NULL,
  `author` text NOT NULL,
  `page_count` int(11) NOT NULL,
  `category` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `books`
--

INSERT INTO `books` (`id_book`, `name_book`, `author`, `page_count`, `category`, `price`) VALUES
(1, 'Sample Book', 'Undefined', 200, 'Fiction', 10),
(2, 'Very Important Book', 'John Doe', 320, 'Non-Fiction', 100.99),
(3, 'Easy coding', 'A B Coder', 150, 'Programming', 19.99),
(4, 'Best Book', 'The Best', 900, 'Fiction', 20.99),
(5, 'ABC of PHP', 'Mark Rely', 435, 'Programming', 12),
(6, 'XYZ of JS', 'Runner One', 300, 'Programming', 10),
(7, 'Define what is what', 'Aristotle', 1001, 'Philosophy', 50.99),
(8, 'Der Marsianer', 'Andy Weir', 600, 'Sci-Fi', 15),
(9, 'Cosmic Love', 'A. D.', 300, 'Romance', 49.99),
(10, 'Harry Potter I', 'J K Rowling', 400, 'Family', 46.99),
(11, 'Harry Potter II', 'J K Rowling', 500, 'Family', 48.79),
(12, 'Once Upon A Time', 'unknown', 456, 'Fairy Tale', 59.99);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `name_category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`id_category`, `name_category`) VALUES
(1, 'Fiction'),
(2, 'Non-Fiction'),
(3, 'Programming'),
(4, 'Fiction'),
(5, 'Programming'),
(6, 'Programming'),
(7, 'Philosophy'),
(8, 'Sci-Fi'),
(9, 'Romance'),
(10, 'Family'),
(11, 'Family'),
(12, 'Fairy Tale');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `books`
--
ALTER TABLE `books`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
