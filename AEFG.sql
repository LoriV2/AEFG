-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Mar 2022, 20:02
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `alternative education funding group`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `campuses`
--

CREATE TABLE `campuses` (
  `ID` int(11) NOT NULL,
  `Name_of_campus` text NOT NULL,
  `Country` text NOT NULL,
  `City` text NOT NULL,
  `Number_of_students` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `campuses`
--

INSERT INTO `campuses` (`ID`, `Name_of_campus`, `Country`, `City`, `Number_of_students`) VALUES
(1, 'University of Science in Warsaw', 'Poland', 'Warsaw', 720),
(2, 'Cool University', 'Finland', 'Helsinki', 1234),
(3, 'Institute of technology in Beijing', 'China', 'Beijing', 104230),
(4, 'Elementary school of existential crisis', 'Poland', 'Bydgoszcz', 50342),
(5, 'University of Humanity', 'Germany', 'Munich', 420);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `country_support`
--

CREATE TABLE `country_support` (
  `ID` int(11) NOT NULL,
  `Funders` text NOT NULL,
  `Money_gifted_yearly($)` bigint(90) NOT NULL,
  `Involved_projects` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `country_support`
--

INSERT INTO `country_support` (`ID`, `Funders`, `Money_gifted_yearly($)`, `Involved_projects`) VALUES
(1, 'Poland', 2147483647, 10),
(2, 'USA', 320984212342, 14),
(3, 'England', 985984752, 32),
(4, 'China', 899340902930923, 40);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `individual_funders`
--

CREATE TABLE `individual_funders` (
  `ID` int(11) NOT NULL,
  `Funders` text NOT NULL,
  `Money_gifted_yearly($)` bigint(90) NOT NULL,
  `Involved_projects` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `individual_funders`
--

INSERT INTO `individual_funders` (`ID`, `Funders`, `Money_gifted_yearly($)`, `Involved_projects`) VALUES
(2, 'Tomasz Hajto', 400000, 2),
(3, 'Ler Der', 40000000, 6),
(4, 'Delan Ren', 64503903, 1),
(5, 'Cweal Yohbany', 676789432, 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `campuses`
--
ALTER TABLE `campuses`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `country_support`
--
ALTER TABLE `country_support`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `individual_funders`
--
ALTER TABLE `individual_funders`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `campuses`
--
ALTER TABLE `campuses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `country_support`
--
ALTER TABLE `country_support`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `individual_funders`
--
ALTER TABLE `individual_funders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
