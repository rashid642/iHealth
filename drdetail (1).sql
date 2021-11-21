-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 10:46 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `drdetail`
--

CREATE TABLE `drdetail` (
  `srno` int(11) NOT NULL,
  `drusername` varchar(20) NOT NULL,
  `fullname` text NOT NULL,
  `speciality` text NOT NULL,
  `qualification` text NOT NULL,
  `experience` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drdetail`
--

INSERT INTO `drdetail` (`srno`, `drusername`, `fullname`, `speciality`, `qualification`, `experience`, `password`) VALUES
(1, 'sammeerdubey', 'Dr.Sameer Dubey', 'Cardiologist', 'MBBS', '15 years', '123'),
(2, 'sudhadeshmukh', 'Dr. Sudha Deshmukh', 'Test Tube Baby (IVF &ICSI) & & <br>Advance Gynaec. Endoscopic Surgery', 'MD', '17 years', '123'),
(3, 'vivek', 'Dr. Vivek Bahl', 'Physiologist', 'MBBS', '10 years', '123'),
(4, 'maheshsancheti', 'Mahesh Sancheti', 'Pediatrician', 'MBBS', '12 years', '123'),
(5, 'sureshyadav', 'Dr. Suresh Yadav', 'Homopathic', 'BHMS\r\nP.G.D.E.M.S', '10 years', '123'),
(8, 'rashmi', 'Dr. Rashmi Batra', 'Cardiologist', 'MBBS\r\nMD', '12 years', '123'),
(9, 'vishalzambani', 'Dr. Vishal Zambani', 'Oncologists\r\n\r\n', 'M.B.B.S\r\nMS\r\n', '8 years', '123'),
(10, 'anupamakawalkar', 'Dr. Anupama Kawalkar', 'Orthopedic Surgeon ', 'M.B.B.S', '12 years', '123'),
(14, 'rajatray', 'Dr. Rajat Ray\r\n', 'Plastic Surgeon', 'M.B.B.S', '15 years', '123'),
(15, 'akhilmukhopadhyaya', 'Dr. Akhil Mukhopadhyaya\r\n', 'Gastroenterologist', 'M.B.B.S', '12 years', '123'),
(16, 'chetandeka', 'Dr. Chetan Deka\r\n', 'Orthopedic Surgeon', 'M.S', '10 years', '123'),
(17, 'vijayreddy', 'Dr. Vijay Reddy\r\n', 'Dermatologist', 'M.B.B.S\r\nM.D', '12 years', '123'),
(18, 'arpitbansal', 'Dr. Arpit Bansal\r\n', 'Cancer Surgeon', 'M.B.B.S\r\nM.D', '17 years', '123'),
(19, 'geetakumari', 'Dr.Geeta Kumari', 'Pediatrician', 'M.B.B.S', '8 years', '123'),
(20, 'manishananwani', 'Dr. Manisha Nanwani\r\n', 'Cardiothoracic & Vascular Surgery\r\n', 'M.B.B.S\r\nM.D', '11 years', '123'),
(21, 'adilselvam', 'Dr. Adil Selvam', 'Cosmetic Surgery', 'M.B.B.S', '9 years', '123'),
(22, 'kuldeepgupta', 'Dr. Kuldeep Gupta', 'Plastic Surgeon', 'M.B.B.S', '14 years', '123'),
(23, 'anitasaxena', 'Dr. Anita Saxena', 'Homopathic', 'M.B.B.S', '8 years', '123'),
(24, 'sanjeevsharma', 'Dr. Sanjeev Sharma', 'Dermatologist', 'M.B.B.S\r\nM.D', '8 years', '123'),
(25, 'adarshgokhale', 'Dr. Adarsh Gokhale', 'Cardiothoracic & Vascular Surgery', 'M.B.B.S', '10 years', '123'),
(26, 'vijayreddy2', 'Dr. Vijay Reddy', 'Plastic Surgeon', 'M.B.B.S\r\nM.D', '15 years', '123'),
(27, 'roomasinha', 'Dr. Rooma Sinha', 'Obstetrics & Gynecology', 'M.B.B.S', '17 years', '123'),
(28, 'ananthsanghavi', 'Dr. Ananth Sanghavi', 'General Medicine', 'M.B.B.S\r\nM.D', '12 years', '123'),
(29, 'shankarnavaladi', 'Dr.Shankar Navaladi', 'Dermatologist', 'M.B.B.S', '7 years', '123'),
(30, 'arpitbansal2', 'Dr. Arpit Bansal\r\n', 'Advance Laparoscopy Surgery\r\n', 'M.B.B.S', '8 years', '123'),
(31, 'vandanabansal', 'Dr. Vandana Bansal', 'Advanced Hysteroscopic Surgery', 'Diploma In Endoscopic Surgery\r\nM.S\r\n', '10 years', '123'),
(32, 'adananmizwan', 'Dr. Adanan Mizwan', 'Dermatologist', 'M.B.B.S', '19 years ', '123'),
(33, 'arpitbansal3', 'Dr. Arpit Bansal', 'Advanced Laparoscopic, IBMS Certified Bariatric & Cancer Surgeon', 'MBBS, MS, FMAS, FCS ', '19 years', '123'),
(34, 'adarshgokhale', 'Dr. Adarsh  Gokhale', 'Cardiothoracic & Vascular Surgery', 'MBBS , MD , FCCP', '17 years ', '123'),
(35, 'vijayreddy', 'Dr. Vijay Reddy', 'Radiation Oncology, Medical Oncology', 'MBBS; MD (Radiotherapy); DNB (Radiotherapy); Medical Oncology (ESMO); FUICC; FNDM; FUICC', '15 years ', '123'),
(36, 'roomasinha', 'Dr. Rooma Sinha', 'Obstetrics & Gynecology', 'MBBS, MD, DNB, FICOG & MICOG, PGDMLS, MNAMS', '19 years ', '123'),
(37, 'ananthsanghvi', 'Dr. Ananth Sanghavi', 'General Medicine', 'MBBS, MD, Diploma NB', '12 years ', '123'),
(38, 'shankarnavaladi', 'Dr.Shankar Navaladi', 'Nephrology', 'MBBS, DNB (General Medicine), DNB (Nephrology)', '9 years ', '123'),
(39, 'prenagarga', 'Dr.Prena Garga', 'Obstetrics & Gynecology', '	MBBS, MD, DNB, FICOG & MICOG, PGDMLS, MNAMS', '5 years ', '123'),
(40, 'geetakumari', 'Dr.Geeta Kumari', 'Pediatrician', 'M.B.B.S,M.D', '19 years ', '123'),
(41, 'sobhadeshmuk', 'Dr. Sobha Deshmukh', 'Obstetrics & Gynecology', 'M.B.B.S,M.S,M.D', '27 years ', '123'),
(42, 'kuldeepgupta', 'Dr. Kuldeep Gupta', 'Plastic Surgeon', 'MS, MCh (Plastic Surgery)', '25 years ', '123'),
(43, 'adilselvam', 'Dr Adil Selvam', 'Cosmetic Surgery', 'MD (USA) DCh, MS MCh (Plastic Surgery)', '19 years ', '123'),
(44, 'manishananwani', 'Dr Manisha Nanwani', 'General & Lap Surgery', 'MBBS, MS(General Surgery)', '6 years ', '123'),
(45, 'rashidaziz', 'Dr. Rashid Aziz', 'Dermatologist', 'M.B.B.S', '9 years ', '123'),
(46, 'vidhibatra', 'Dr. Vidhi Batra', 'Surgeam', 'M.B.B.S, MD', '19 years ', '123'),
(47, 'virenagicha', 'Dr. Viren Agicha', 'Physician', 'M.B.B.S', '8 years ', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
