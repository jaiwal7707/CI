-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 06:13 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `errand_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `Id` int(11) NOT NULL,
  `ProjectUserId` int(11) NOT NULL,
  `ProjectName` varchar(256) NOT NULL,
  `ProjectBody` text NOT NULL,
  `DateCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`Id`, `ProjectUserId`, `ProjectName`, `ProjectBody`, `DateCreated`) VALUES
(1, 1, 'PHP OOP Courses', 'I need to buy all these courses.', '2021-08-18 05:52:41'),
(3, 1, 'Python', 'The Python is mostly use in AI now a days.', '2021-08-19 03:52:31');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `Id` int(11) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `TaskName` varchar(256) NOT NULL,
  `TaskBody` text NOT NULL,
  `DueDate` date NOT NULL,
  `DateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`Id`, `ProjectId`, `TaskName`, `TaskBody`, `DueDate`, `DateCreated`, `Status`) VALUES
(1, 1, 'OOP PHP', 'I need to finish this course from Edwin Diaz.', '2021-08-26', '2021-08-18 05:53:32', 0),
(6, 1, 'This is my new task PHP', 'PHP Description.', '2021-08-25', '2021-08-19 03:47:28', 0),
(7, 1, 'Another PHP Task', 'Yesses., there is another task in a pipeline.', '2021-08-29', '2021-08-19 03:48:04', 1),
(10, 3, 'This is my new task  By Python', 'Learn python from zero to hero', '2021-08-29', '2021-08-19 12:03:11', 0),
(11, 1, 'This is my new task 321 PHP', 'This is my new task 321 PHP Description', '2021-09-30', '2021-08-19 16:11:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(256) NOT NULL,
  `LastName` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `UserName` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `RagisterDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `FirstName`, `LastName`, `Email`, `UserName`, `Password`, `RagisterDate`) VALUES
(1, 'Atishkumar', 'Jaiwal', 'atishjaiwal48@gmail.com', 'atish', '$2y$12$MhmE9hwdNxk1aZW6C859Eet3HCF9BOYgxeiYQdRYIP1s7TH5WIEvi', '2021-08-10 05:57:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
