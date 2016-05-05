-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 05 Maj 2016, 18:47
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
-- Table structure for table `books`
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
-- `books` dump data
--

INSERT INTO `books` (`id_book`, `name_book`, `author`, `page_count`, `category`, `price`) VALUES
(2, 'Harry Potter II', 'J K Rowling', 200, 'Fiction', 29.99),
(3, 'Harry Potter I', 'J K Rowling', 100, 'Fiction', 19.99),
(4, 'Harry Potter III', 'J K Rowling', 300, 'Fiction', 39.99),
(5, 'Harry Potter IV', 'J K Rowling', 400, 'Fiction', 49.99),
(6, 'Harry Potter V', 'J K Rowling', 500, 'Fiction', 59.99),
(7, 'Harry Potter VI', 'J K Rowling', 600, 'Fiction', 69.99),
(8, 'Alastair the Dragon', 'Humboldt', 900, 'Non-Fiction', 99.99);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `name_category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- `categories` data dump
--

INSERT INTO `categories` (`id_category`, `name_category`) VALUES
(1, 'Fiction'),
(2, 'Non-Fiction');

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
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
