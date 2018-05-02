-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 11:08 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_movie_list_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_Id` int(11) NOT NULL,
  `genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_Id`, `genre`) VALUES
(1, 'Action'),
(2, 'Animation'),
(4, ' Adventure');

-- --------------------------------------------------------

--
-- Table structure for table `movie-genre`
--

CREATE TABLE `movie-genre` (
  `movie_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movie-user`
--

CREATE TABLE `movie-user` (
  `movie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `watched` varchar(10) DEFAULT NULL,
  `favourite` varchar(10) DEFAULT NULL,
  `plan_to_watch` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie-user`
--

INSERT INTO `movie-user` (`movie_id`, `user_id`, `rating`, `comments`, `watched`, `favourite`, `plan_to_watch`) VALUES
(38, 1, NULL, NULL, 'True', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `rating` double NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `date`, `rating`, `image`) VALUES
(9, 'K', '', 0, ''),
(23, 'K', '05 Oct 2012', 7.3, 'https://ia.media-imdb.com/images/M/MV5BMmEyNGJhMTUtMGMzNy00NDk4LTg5OGMtZGExMDNiM2E3MTEzXkEyXkFqcGdeQ'),
(24, 'K', '05 Oct 2012', 7.3, 'https://ia.media-imdb.com/images/M/MV5BMmEyNGJhMTUtMGMzNy00NDk4LTg5OGMtZGExMDNiM2E3MTEzXkEyXkFqcGdeQ'),
(25, 'K', '05 Oct 2012', 7.3, 'https://ia.media-imdb.com/images/M/MV5BMmEyNGJhMTUtMGMzNy00NDk4LTg5OGMtZGExMDNiM2E3MTEzXkEyXkFqcGdeQ'),
(38, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(39, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(40, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(41, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(42, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(43, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(44, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(45, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(46, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(47, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(48, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(49, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(50, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(51, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(52, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(53, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(54, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(55, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(56, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(57, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(58, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(59, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(60, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(61, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(62, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(63, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(64, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(65, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(66, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(67, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(68, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(69, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(70, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(71, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(72, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(73, 'John Wick', '24 Oct 2014', 7.3, 'https://ia.media-imdb.com/images/M/MV5BMTU2NjA1ODgzMF5BMl5BanBnXkFtZTgwMTM2MTI4MjE@._V1_SX300.jpg'),
(74, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
(75, 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'amock', 'acas0077@yahoo.co.uk', 'qwe'),
(6, 'b31279', 'andre.cassar.b31279@mcast.edu.mt', '123456'),
(7, 'ad', 'asd@a', '4321'),
(8, 'as', 'asd@a', '312414');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_Id`);

--
-- Indexes for table `movie-genre`
--
ALTER TABLE `movie-genre`
  ADD PRIMARY KEY (`movie_id`,`genre_id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `movie-user`
--
ALTER TABLE `movie-user`
  ADD PRIMARY KEY (`movie_id`,`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie-genre`
--
ALTER TABLE `movie-genre`
  ADD CONSTRAINT `movie-genre_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_Id`),
  ADD CONSTRAINT `movie-genre_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`);

--
-- Constraints for table `movie-user`
--
ALTER TABLE `movie-user`
  ADD CONSTRAINT `movie-user_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`),
  ADD CONSTRAINT `movie-user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
