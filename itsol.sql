-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 06:39 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itsol`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0',
  `choice` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `choice`) VALUES
(1, 1, 1, 'Html'),
(2, 1, 0, 'PHP'),
(3, 1, 0, 'JavaScript'),
(4, 1, 0, 'MYSQL'),
(5, 2, 0, '䑯捵浥湴⹗物瑥⠢䡥汬漠坯牬搢⤻'),
(6, 2, 1, 'e捨漠≈敬汯⁗潲汤∻'),
(7, 2, 0, '≈敬汯⁗潲汤∻'),
(12, 3, 0, '10'),
(13, 3, 0, '12'),
(14, 3, 1, '132'),
(15, 4, 0, 'a'),
(16, 4, 1, 'b'),
(17, 4, 0, 'c'),
(18, 4, 0, 'd'),
(19, 5, 0, 'a'),
(20, 5, 1, 'b'),
(21, 5, 0, 'c'),
(22, 5, 0, 'd'),
(40, 7, 1, 'optian a'),
(41, 7, 0, 'asfasda'),
(42, 7, 0, 'dasjdajjsdlaj'),
(43, 7, 0, 'asdkasdalkdaskdla');

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE `docs` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `subject` int(11) DEFAULT NULL,
  `desciption` varchar(50) DEFAULT NULL,
  `file` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docs`
--

INSERT INTO `docs` (`id`, `title`, `subject`, `desciption`, `file`) VALUES
(1, 'Variables in C', 1, 'sadadadasdasdadasd', '../../assets/docs/1553875564_DOC-20180226-WA0006.pdf'),
(2, 'String IN C', 1, 'sadadadaasdadddddddddddddddddddddddddddddddd', '../../assets/docs/1553875688_DOC-20180310-WA0003.pdf'),
(3, 'Digital Electronics', 2, 'sadadadaasdadddddddddddddddddddddddddddddddd', '../../assets/docs/1553875749_OOPS(0).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(10) NOT NULL PRIMARY KEY,
  `title` varchar(50) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `link` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `title`, `subject`, `link`, `description`) VALUES
(1, 'sdafsdfsfsdfasdfasdffs', '1', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/dhV0DvtKfBc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'gdeewjknnnnnnnnnnnnnnnnasdfasssssssssssss'),
(2, 'Basic C Programing', '3', 'https://www.youtube.com/watch?v=VhsnyVMxRWo&list=RDVhsnyVMxRWo&start_radio=1', 'This Video gives detailed information about C Programing works'),
(3, 'Variables in C', '1', 'http://localhost:8080/itsolutions/main/admin/products.php', 'shfsjdhfsjhdfksfjsfsjfkshfsjdfsfnsdf'),
(4, 'String in c', '1', 'http://localhost:8080/ITSolutions/main/admin/products.php', 'ashdkkkkkkkkkkkkdsadadas'),
(5, 'Random Video', '4`', 'http://localhost:8080/ITSolutions/main/admin/products.php', 'Random video'),
(6, 'e refefesfe', '3', 'fdsfffdfdfdfsdff', 'fefef');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question` text COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question`) VALUES
(1, 'What is my name'),
(2, 'What is my name?'),
(3, 'What is your age'),
(4, 'any random question?'),
(5, 'any random question?');

-- --------------------------------------------------------

--
-- Table structure for table `snippets`
--

CREATE TABLE `snippets` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `code` varchar(500) NOT NULL,
  `subject` int(2) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `snippets`
--

INSERT INTO `snippets` (`id`, `title`, `code`, `subject`, `description`) VALUES
(1, 'hiashdaihd', 'asfsfjhhkhksjdhfakhfkajsdhajshfakjsfhajsfh', 2, 'asfajsdhashfshfkajsfahsfkjhs'),
(2, 'hiashdaihd', '#include <stdio.h>\r\nint main()\r\n{\r\n   // printf() displays the string inside quotation\r\n   printf(\"Hello, World!\");\r\n   return 0;\r\n}', 2, 'asfajsdhashfshfkajsfahsfkjhs'),
(3, 'code to extinguish', '$(\"#err3\").show()', 1, 'adasdadasdasdasdadads'),
(4, 'Factorial of number', '#include <stdio.h>\r\nint main()\r\n{\r\n    ', 1, 'The factorial of a positive integer n is equal to 1*2*3*...n. You will learn to calculate the factorial of a number using for loop in this example.'),
(5, 'frefrfrfref', 'effefefe', 3, 'effefefew');

-- --------------------------------------------------------

--
-- Table structure for table `usermaster`
--

CREATE TABLE `usermaster` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermaster`
--

INSERT INTO `usermaster` (`id`, `username`, `password`, `phone`, `email`) VALUES
(9, 'omkarrane', '12345678', '9869079500', 'omkarrane2000@gmail.com'),
(10, 'user1', '12345678', '9869079500', 'abc@gmail.com'),
(11, 'admin', '12345678', '9869079500', 'admin2000@gmail.com'),
(12, 'saurabh', '123456789', '9167368662', 'saurabh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `snippets`
--
ALTER TABLE `snippets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermaster`
--
ALTER TABLE `usermaster`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `docs`
--
ALTER TABLE `docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `snippets`
--
ALTER TABLE `snippets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usermaster`
--
ALTER TABLE `usermaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
