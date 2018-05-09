-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2018 at 10:50 PM
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
  `genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre`) VALUES
('Action'),
('Adventure'),
('Animation'),
('Crime'),
('Drama'),
('Mystery'),
('Romance'),
('Sci-Fi');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `rating` double NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `date`, `rating`, `image`) VALUES
('tt0068646', 'The Godfather', '24 Mar 1972', 9.2, 'https://ia.media-imdb.com/images/M/MV5BY2Q2NzQ3ZDUtNWU5OC00Yjc0LThlYmEtNWM3NTFmM2JiY2VhXkEyXkFqcGdeQ'),
('tt0109830', 'Forrest Gump', '06 Jul 1994', 8.8, 'https://ia.media-imdb.com/images/M/MV5BNWIwODRlZTUtY2U3ZS00Yzg1LWJhNzYtMmZiYmEyNmU1NjMzXkEyXkFqcGdeQ'),
('tt0111161', 'The Shawshank Redemption', '14 Oct 1994', 9.3, 'https://ia.media-imdb.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQ'),
('tt0133093', 'The Matrix', '31 Mar 1999', 8.7, 'https://ia.media-imdb.com/images/M/MV5BNzQzOTk3OTAtNDQ0Zi00ZTVkLWI0MTEtMDllZjNkYzNjNTc4L2ltYWdlXkEyX'),
('tt1375666', 'Inception', '16 Jul 2010', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_SX300.jpg'),
('tt3613454', 'Terror in Resonance', '11 Jul 2014', 8, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMDMzNGEyNzItOTEyYi00MzQxLTgxOGQtZGJkZTRmNjUzN2Y');

-- --------------------------------------------------------

--
-- Table structure for table `movie_genre`
--

CREATE TABLE `movie_genre` (
  `movie_id` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_genre`
--

INSERT INTO `movie_genre` (`movie_id`, `genre`) VALUES
('tt0068646', 'Crime'),
('tt0068646', 'Drama'),
('tt0109830', 'Drama'),
('tt0109830', 'Romance'),
('tt0111161', 'Crime'),
('tt0111161', 'Drama'),
('tt0133093', 'Action'),
('tt0133093', 'Sci-Fi'),
('tt1375666', 'Action'),
('tt1375666', 'Adventure'),
('tt1375666', 'Sci-Fi'),
('tt3613454', 'Animation'),
('tt3613454', 'Drama'),
('tt3613454', 'Mystery');

-- --------------------------------------------------------

--
-- Table structure for table `movie_user`
--

CREATE TABLE `movie_user` (
  `movie_id` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `watched` varchar(10) DEFAULT NULL,
  `favourite` varchar(10) DEFAULT NULL,
  `plan_to_watch` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_user`
--

INSERT INTO `movie_user` (`movie_id`, `user_id`, `rating`, `comments`, `watched`, `favourite`, `plan_to_watch`) VALUES
('tt0068646', 1, NULL, NULL, 'True', NULL, NULL),
('tt0109830', 1, NULL, NULL, 'True', NULL, NULL),
('tt0111161', 1, NULL, NULL, 'True', NULL, NULL),
('tt0133093', 1, 0, '', 'True', NULL, NULL),
('tt1375666', 1, NULL, NULL, 'True', NULL, NULL),
('tt3613454', 1, 9, 'best action-drama ever', 'True', NULL, NULL);

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
  ADD PRIMARY KEY (`genre`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `movie_genre`
--
ALTER TABLE `movie_genre`
  ADD PRIMARY KEY (`movie_id`,`genre`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `genre_id` (`genre`);

--
-- Indexes for table `movie_user`
--
ALTER TABLE `movie_user`
  ADD PRIMARY KEY (`movie_id`,`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `movie_id` (`movie_id`);

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie_genre`
--
ALTER TABLE `movie_genre`
  ADD CONSTRAINT `movie_genre_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`),
  ADD CONSTRAINT `movie_genre_ibfk_3` FOREIGN KEY (`genre`) REFERENCES `genre` (`genre`);

--
-- Constraints for table `movie_user`
--
ALTER TABLE `movie_user`
  ADD CONSTRAINT `movie_user_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`),
  ADD CONSTRAINT `movie_user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
