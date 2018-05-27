-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2017 at 01:29 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(25) NOT NULL,
  `feedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `feedback`) VALUES
('', ''),
('sharan', 'good work'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qno` varchar(3) DEFAULT NULL,
  `mode` varchar(3) NOT NULL,
  `question` varchar(100) NOT NULL,
  `option1` varchar(30) NOT NULL,
  `option2` varchar(40) NOT NULL,
  `option3` varchar(40) NOT NULL,
  `option4` varchar(40) NOT NULL,
  `correctans` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qno`, `mode`, `question`, `option1`, `option2`, `option3`, `option4`, `correctans`) VALUES
('1', '1', 'How many primitive data types are there in Java?', '6', '7', '8', '9', 'op3'),
('2', '1', 'In Java byte, short, int and long all of these are', 'signed', 'unsigned', 'both', 'none of these', 'op1'),
('3', '1', 'Java is a ........... language.', 'weakly typed', 'strongly typed', 'moderately typed', 'none of these', 'op2'),
('4', '1', 'Size of int in Java is', '16 bit', '32 bit', '64 bit', 'Depends on Execution environment', 'op2'),
('5', '1', 'The smallest integer type is ......... and its size is ......... bits.', 'short,8', 'byte,8', 'short,16', 'byte,16', 'op2'),
('6', '1', 'Size of float and double in Java is', '32 and 64', '64 and 64', '32 and 32', '64 and 32', 'op1'),
('7', '1', 'Which of the following automatic type conversion will be possible?', 'short->int', 'byte->int', 'int->long', 'long->int', 'op3'),
('8', '1', 'In Java, the word true is .............', 'A Java keyword', 'A Boolean Literal', 'Same as value 1', 'Same as value 0', 'op2'),
('9', '1', 'In Java arrays are', 'Objects', 'Object References', 'Primitive Datatype', 'None of the above', 'op1'),
('10', '1', 'The class at the top of exception class hierarchy is .............', 'ArithmeticException', 'Throwable', 'Object', 'Exception', 'op2'),
('1', '3', 'A relational database consists of a collection of', 'Tables', 'Fields', 'Record', 'Keys', 'op1'),
('2', '3', ' A ________ in a table represents a relationship among a set of values.', 'Column', 'Key', 'Row', 'Entry', 'op3'),
('3', '3', 'The term _______ is used to refer to a row', 'Attribute', 'Tuple', 'Field', 'Instance', 'op2'),
('4', '3', 'The term attribute refers to a ___________ of a table.', 'Record', 'Column', 'Tuple', 'Key', 'op2'),
('5', '3', 'For each attribute of a relation,there is a set of allowed values,called the __of that attribute', 'Domain', 'Relaton', 'Set', 'Schema', 'op1'),
('6', '3', 'A domain is atomic if elements of the domain are considered to be ______units.', 'Different', 'Indivisible', 'Constant', 'Divisble', 'op2'),
('7', '3', 'The tuples of the relations can be of ________ order.', 'Any', 'Same', 'Sorted', 'Constant', 'op1'),
('8', '3', 'Which of the following is a fundamental operation in relational algebra ?', 'SetIntersection', 'NaturalJoin', 'Assignment', 'None of above', 'op4'),
('9', '3', 'Which of the following is used to denote the selection operation in relational algebra ?', 'PI', 'Lambda', 'Sigma', 'Omega', 'op3'),
('10', '3', 'Which is a unary operation:', 'Selection', 'Primitive', 'Projection', 'Generalized', 'op4'),
('1', '2', '	HTML is what type of language ?', 'Scripting Language', 'Markup Language', 'Programming Language', 'Network Protocol\r\n', 'op2'),
('2', '2', '	HTML uses ', 'User defined tags', 'Pre-specified tags', 'Fixed tags', 'Tags only for linking', 'op3'),
('3', '2', 'The year in which HTML was first proposed _______. ', '1990', '1980', '2000', '1995', 'op1'),
('4', '2', 'Fundamental HTML Block is known as ___________. \r\n', 'Html Body', 'Html Tag', 'Html Attribute', 'Html Element', 'op2'),
('5', '2', 'Apart from <b> tag, what other tag makes text bold ? ', 'fat', 'strong', 'black', 'emp', 'op2'),
('6', '2', 'What is the full form of HTML? ', 'HyperText Markup Language', 'Hyper Teach Markup Language', 'Hyper Tech Markup Language', 'N.O.T', 'op1'),
('7', '2', 'What should be the first tag in any HTML document?', 'head', 'title', 'document', 'html', 'op4'),
('8', '2', 'HTML web pages can be read and rendered by _________.', 'Complier', 'Server', 'Browser', 'Interpreter', 'op3'),
('9', '2', 'HTML tags are surrounded by which type of brackets.', 'Curly', 'Round', 'Square', 'Angle', 'op4'),
('10', '2', 'What tag is used to display a picture in a HTML page? ', 'Picture', 'Image', 'Img', 'Src', 'op3');

-- --------------------------------------------------------

--
-- Table structure for table `resultmarks`
--

CREATE TABLE `resultmarks` (
  `mode` varchar(2) NOT NULL,
  `usn` varchar(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `marks` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resultmarks`
--

INSERT INTO `resultmarks` (`mode`, `usn`, `name`, `marks`) VALUES
('2', '1jb15cs157', 'sharan', '20'),
('1', '1jb15cs157', 'sharan', '5'),
('3', '1jb15cs157', 'sharan', '5'),
('3', '1jb15cs157', 'sharan', '0'),
('2', '1jb15cs157', 'sharan', '20'),
('2', '1jb15cs157', 'sharan', '0'),
('2', '1jb15cs157', 'sharan', '0'),
('1', '1jb15cs157', 'sharan', '0'),
('1', '1jb15cs157', 'sharan', '0'),
('2', '1jb15cs157', 'sharan', '0'),
('1', '1jb15cs157', 'sharan', '-2'),
('3', '1jb15cs157', 'sharan', '3'),
('1', '1jb15cs157', 'sharan', '4'),
('3', '1jb15cs157', 'sharan', '3');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `name` varchar(30) NOT NULL,
  `usn` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`name`, `usn`, `email`, `pass`, `phone`) VALUES
('sharan', '1jb15cs157', 'sharansingh002@gmail.com', '1234', '7975387035'),
('', '', '', '', ''),
('sparsh', '1jb15cs167', 'sparsh@gmail.com', 'dbmslab', '8877458415'),
('ravi', '1jb15cs135', 'ravi.raman145@gmail.com', 'hihi', '9108172518');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
