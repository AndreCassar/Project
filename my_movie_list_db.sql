-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 03:53 PM
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
('Comedy'),
('Crime'),
('Drama'),
('Fantasy'),
('Horror'),
('Mystery'),
('Sci-Fi'),
('Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `rating` double NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `date`, `rating`, `image`) VALUES
('tt0022100', 'M', '31 Aug 1931', 8.4, 'https://ia.media-imdb.com/images/M/MV5BZjIwMTM0ZDEtMTdiMy00NmQ0LWJmYmMtNGJmNmMzZmJlZjVkXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_SX300.jpg'),
('tt0078748', 'Alien', '22 Jun 1979', 8.5, 'https://ia.media-imdb.com/images/M/MV5BNDNhN2IxZWItNGEwYS00ZDNhLThiM2UtODU3NWJlZjBkYjQxXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg'),
('tt0082971', 'Raiders of the Lost Ark', '12 Jun 1981', 8.5, 'https://ia.media-imdb.com/images/M/MV5BMjA0ODEzMTc1Nl5BMl5BanBnXkFtZTcwODM2MjAxNA@@._V1_SX300.jpg'),
('tt0088763', 'Back to the Future', '03 Jul 1985', 8.5, 'https://ia.media-imdb.com/images/M/MV5BZmU0M2Y1OGUtZjIxNi00ZjBkLTg1MjgtOWIyNThiZWIwYjRiXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg'),
('tt0093773', 'Predator', '12 Jun 1987', 7.8, 'https://ia.media-imdb.com/images/M/MV5BY2QwYmFmZTEtNzY2Mi00ZWMyLWEwY2YtMGIyNGZjMWExOWEyXkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_SX300.jpg'),
('tt0109830', 'Forrest Gump', '06 Jul 1994', 8.8, 'https://ia.media-imdb.com/images/M/MV5BNWIwODRlZTUtY2U3ZS00Yzg1LWJhNzYtMmZiYmEyNmU1NjMzXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg'),
('tt0111161', 'The Shawshank Redemption', '14 Oct 1994', 9.3, 'https://ia.media-imdb.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg'),
('tt0120737', 'The Lord of the Rings: The Fellowship of the Ring', '19 Dec 2001', 8.8, 'https://ia.media-imdb.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_SX300.jpg'),
('tt0120815', 'Saving Private Ryan', '24 Jul 1998', 8.6, 'https://ia.media-imdb.com/images/M/MV5BZjhkMDM4MWItZTVjOC00ZDRhLThmYTAtM2I5NzBmNmNlMzI1XkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_SX300.jpg'),
('tt0133093', 'The Matrix', '31 Mar 1999', 8.7, 'https://ia.media-imdb.com/images/M/MV5BNzQzOTk3OTAtNDQ0Zi00ZTVkLWI0MTEtMDllZjNkYzNjNTc4L2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SX300.jpg'),
('tt0266697', 'Kill Bill: Vol. 1', '10 Oct 2003', 8.1, 'https://ia.media-imdb.com/images/M/MV5BYTczMGFiOWItMjA3Mi00YTU5LWIwMDgtYTEzNjRkNDkwMTE2XkEyXkFqcGdeQXVyNzQ1ODk3MTQ@._V1_SX300.jpg'),
('tt0418279', 'Transformers', '03 Jul 2007', 7.1, 'https://ia.media-imdb.com/images/M/MV5BNDg1NTU2OWEtM2UzYi00ZWRmLWEwMTktZWNjYWQ1NWM1OThjXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg'),
('tt1375666', 'Inception', '16 Jul 2010', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_SX300.jpg'),
('tt1486670', 'F', '09 Jul 2013', 4.7, 'https://ia.media-imdb.com/images/M/MV5BMjM1OTE5MTAyN15BMl5BanBnXkFtZTgwNjc3MjIwMDE@._V1_SX300.jpg'),
('tt1909447', 'Deadman Wonderland', '16 Apr 2011', 7.4, 'https://ia.media-imdb.com/images/M/MV5BNWExOTUxYjQtYmNhOS00OGViLWI3N2ItMzBhMWY5NGJkYjlmXkEyXkFqcGdeQXVyNDgyODgxNjE@._V1_SX300.jpg'),
('tt2377452', 'K', '05 Oct 2012', 7.3, 'https://ia.media-imdb.com/images/M/MV5BMmEyNGJhMTUtMGMzNy00NDk4LTg5OGMtZGExMDNiM2E3MTEzXkEyXkFqcGdeQXVyMjI5MjU5OTI@._V1_SX300.jpg'),
('tt2560140', 'Attack on Titan', '01 Apr 2013', 8.8, 'https://ia.media-imdb.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_SX300.jpg'),
('tt2911666', 'John Wick', '24 Oct 2014', 7.3, 'https://ia.media-imdb.com/images/M/MV5BMTU2NjA1ODgzMF5BMl5BanBnXkFtZTgwMTM2MTI4MjE@._V1_SX300.jpg'),
('tt3613454', 'Terror in Resonance', '11 Jul 2014', 8, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMDMzNGEyNzItOTEyYi00MzQxLTgxOGQtZGJkZTRmNjUzN2Y3XkEyXkFqcGdeQXVyMjQ1NjEyNzE@._V1_SX300.jpg'),
('tt4154756', 'Avengers: Infinity War', '27 Apr 2018', 9, 'https://ia.media-imdb.com/images/M/MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_SX300.jpg');

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
('tt0022100', 'Crime'),
('tt0022100', 'Drama'),
('tt0022100', 'Mystery'),
('tt0078748', 'Horror'),
('tt0078748', 'Sci-Fi'),
('tt0082971', 'Adventure'),
('tt0088763', 'Adventure'),
('tt0088763', 'Comedy'),
('tt0088763', 'Sci-Fi'),
('tt0093773', 'Action'),
('tt0093773', 'Sci-Fi'),
('tt0093773', 'Thriller'),
('tt0109830', 'Drama'),
('tt0109830', 'Romance'),
('tt0111161', 'Crime'),
('tt0111161', 'Drama'),
('tt0120737', 'Adventure'),
('tt0120737', 'Drama'),
('tt0120737', 'Fantasy'),
('tt0120815', 'Drama'),
('tt0120815', 'War'),
('tt0133093', 'Action'),
('tt0133093', 'Sci-Fi'),
('tt0266697', 'Action'),
('tt0266697', 'Crime'),
('tt0266697', 'Thriller'),
('tt0418279', 'Action'),
('tt0418279', 'Adventure'),
('tt0418279', 'Sci-Fi'),
('tt1375666', 'Action'),
('tt1375666', 'Adventure'),
('tt1375666', 'Sci-Fi'),
('tt1486670', 'Horror'),
('tt1486670', 'Thriller'),
('tt1909447', 'Action'),
('tt1909447', 'Animation'),
('tt1909447', 'Drama'),
('tt2377452', 'Action'),
('tt2377452', 'Animation'),
('tt2377452', 'Drama'),
('tt2560140', 'Action'),
('tt2560140', 'Adventure'),
('tt2560140', 'Animation'),
('tt2911666', 'Action'),
('tt2911666', 'Crime'),
('tt2911666', 'Thriller'),
('tt3613454', 'Animation'),
('tt3613454', 'Drama'),
('tt3613454', 'Mystery'),
('tt4154756', 'Action'),
('tt4154756', 'Adventure'),
('tt4154756', 'Fantasy');

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
('tt0078748', 20, 0, NULL, 'True', NULL, NULL),
('tt0093773', 1, 8, 'Classic Action', 'True', NULL, NULL),
('tt1486670', 1, NULL, NULL, 'True', NULL, NULL),
('tt4154756', 20, NULL, NULL, NULL, NULL, 'True');

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
(8, 'as', 'asd@a', '312414'),
(10, 'admin', 'admin@admin', '123'),
(20, 'test', 'test@test', '123');

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie_genre`
--
ALTER TABLE `movie_genre`
  ADD CONSTRAINT `movie_genre_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`);

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
