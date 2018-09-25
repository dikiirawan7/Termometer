-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 08:33 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `termometer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `adminn` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no`, `adminn`, `password`) VALUES
(1, 'diki', '43b93443937ea642a9a43e77fd5d8f77'),
(2, 'irawan', '43b93443937ea642a9a43e77fd5d8f77');

-- --------------------------------------------------------

--
-- Table structure for table `bantuiter1`
--

CREATE TABLE IF NOT EXISTS `bantuiter1` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `noorder` varchar(30) NOT NULL,
  `point` int(10) NOT NULL,
  `rts1` decimal(30,4) NOT NULL,
  `rtt1` decimal(30,4) NOT NULL,
  `rts2` decimal(30,4) NOT NULL,
  `hks1` decimal(30,4) NOT NULL,
  `hkt1` decimal(30,4) NOT NULL,
  `hks2` decimal(30,4) NOT NULL,
  `kpenjt1` decimal(30,4) NOT NULL,
  `stdevt1` decimal(30,4) NOT NULL,
  `pembt1sqrt` decimal(30,4) NOT NULL,
  `pembs2` decimal(30,4) NOT NULL,
  `ktkmt1` decimal(30,4) NOT NULL,
  `ktkms2` decimal(30,4) NOT NULL,
  `pembt1` decimal(30,4) NOT NULL,
  `pembs22` decimal(30,4) NOT NULL,
  `ktksest1` decimal(30,4) NOT NULL,
  `ktkses2` decimal(30,4) NOT NULL,
  `ktgbt1` decimal(30,4) NOT NULL,
  `ktbet1` decimal(30,4) NOT NULL,
  `koreksit1` decimal(30,4) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `noorder` (`noorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `bantuiter1`
--

INSERT INTO `bantuiter1` (`no`, `noorder`, `point`, `rts1`, `rtt1`, `rts2`, `hks1`, `hkt1`, `hks2`, `kpenjt1`, `stdevt1`, `pembt1sqrt`, `pembs2`, `ktkmt1`, `ktkms2`, `pembt1`, `pembs22`, `ktksest1`, `ktkses2`, `ktgbt1`, `ktbet1`, `koreksit1`) VALUES
(3, '33.10.04', 100, '99.8409', '99.8000', '99.8410', '99.8409', '99.8000', '99.8410', '0.0409', '0.0000', '2.2361', '2.0000', '0.0270', '0.0270', '2.0000', '2.0000', '0.0100', '0.0100', '0.0596', '0.1192', '0.0409'),
(4, '21', 100, '-241.0146', '0.0000', '-241.0146', '-241.0146', '0.0000', '-241.0146', '-241.0146', '0.0000', '2.2361', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '2.0000', '2.0000', '0.0000'),
(5, '12', 100, '99.8408', '99.8000', '99.8409', '99.8408', '99.8000', '99.8409', '0.0409', '0.0000', '2.2361', '2.0000', '0.0270', '0.0270', '2.0000', '2.0000', '0.0100', '0.0100', '0.0596', '0.1192', '0.0000'),
(6, '132', 100, '21.5917', '16.0533', '151036811375.9600', '24.5917', '19.0533', '151036811378.9600', '75518405682.7220', '15.3655', '2.2361', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '7.3634', '7.3634', '75518405682.7220');

-- --------------------------------------------------------

--
-- Table structure for table `bantuiter2`
--

CREATE TABLE IF NOT EXISTS `bantuiter2` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `noorder` varchar(30) NOT NULL,
  `point` int(10) NOT NULL,
  `rts1` decimal(30,4) NOT NULL,
  `rtt1` decimal(30,4) NOT NULL,
  `rts2` decimal(30,4) NOT NULL,
  `hks1` decimal(30,4) NOT NULL,
  `hkt1` decimal(30,4) NOT NULL,
  `hks2` decimal(30,4) NOT NULL,
  `kpenjt1` decimal(30,4) NOT NULL,
  `stdevt1` decimal(30,4) NOT NULL,
  `pembt1sqrt` decimal(30,4) NOT NULL,
  `pembs2` decimal(30,4) NOT NULL,
  `ktkmt1` decimal(30,4) NOT NULL,
  `ktkms2` decimal(30,4) NOT NULL,
  `pembt1` decimal(30,4) NOT NULL,
  `pembs22` decimal(30,4) NOT NULL,
  `ktksest1` decimal(30,4) NOT NULL,
  `ktkses2` decimal(30,4) NOT NULL,
  `ktgbt1` decimal(30,4) NOT NULL,
  `ktbet1` decimal(30,4) NOT NULL,
  `koreksit2` decimal(30,2) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `noorder` (`noorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bantuiter2`
--

INSERT INTO `bantuiter2` (`no`, `noorder`, `point`, `rts1`, `rtt1`, `rts2`, `hks1`, `hkt1`, `hks2`, `kpenjt1`, `stdevt1`, `pembt1sqrt`, `pembs2`, `ktkmt1`, `ktkms2`, `pembt1`, `pembs22`, `ktksest1`, `ktkses2`, `ktgbt1`, `ktbet1`, `koreksit2`) VALUES
(1, '33.10.04', 110, '109.9322', '109.9500', '109.9308', '109.9322', '109.9500', '109.9308', '-0.0185', '0.0548', '2.2361', '2.0000', '0.0030', '0.0030', '2.0000', '2.0000', '0.0100', '0.0100', '0.0630', '0.1261', '-0.02');

-- --------------------------------------------------------

--
-- Table structure for table `bantuiter3`
--

CREATE TABLE IF NOT EXISTS `bantuiter3` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `noorder` varchar(30) NOT NULL,
  `point` int(10) NOT NULL,
  `rts1` decimal(30,4) NOT NULL,
  `rtt1` decimal(30,4) NOT NULL,
  `rts2` decimal(30,4) NOT NULL,
  `hks1` decimal(30,4) NOT NULL,
  `hkt1` decimal(30,4) NOT NULL,
  `hks2` decimal(30,4) NOT NULL,
  `kpenjt1` decimal(30,4) NOT NULL,
  `stdevt1` decimal(30,4) NOT NULL,
  `pembt1sqrt` decimal(30,4) NOT NULL,
  `pembs2` decimal(30,4) NOT NULL,
  `ktkmt1` decimal(30,4) NOT NULL,
  `ktkms2` decimal(30,4) NOT NULL,
  `pembt1` decimal(30,4) NOT NULL,
  `pembs22` decimal(30,4) NOT NULL,
  `ktksest1` decimal(30,4) NOT NULL,
  `ktkses2` decimal(30,4) NOT NULL,
  `ktgbt1` decimal(30,4) NOT NULL,
  `ktbet1` decimal(30,4) NOT NULL,
  `koreksit3` decimal(30,2) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `noorder` (`noorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bantuiter3`
--

INSERT INTO `bantuiter3` (`no`, `noorder`, `point`, `rts1`, `rtt1`, `rts2`, `hks1`, `hkt1`, `hks2`, `kpenjt1`, `stdevt1`, `pembt1sqrt`, `pembs2`, `ktkmt1`, `ktkms2`, `pembt1`, `pembs22`, `ktksest1`, `ktkses2`, `ktgbt1`, `ktbet1`, `koreksit3`) VALUES
(1, '33.10.04', 120, '120.1468', '120.1000', '120.1463', '120.1468', '120.1000', '120.1463', '0.0465', '0.0000', '2.2361', '2.0000', '0.0030', '0.0030', '2.0000', '2.0000', '0.0100', '0.0100', '0.0581', '0.1162', '0.05');

-- --------------------------------------------------------

--
-- Table structure for table `bantuiter4`
--

CREATE TABLE IF NOT EXISTS `bantuiter4` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `noorder` varchar(30) NOT NULL,
  `point` int(10) NOT NULL,
  `rts1` decimal(30,4) NOT NULL,
  `rtt1` decimal(30,4) NOT NULL,
  `rts2` decimal(30,4) NOT NULL,
  `hks1` decimal(30,4) NOT NULL,
  `hkt1` decimal(30,4) NOT NULL,
  `hks2` decimal(30,4) NOT NULL,
  `kpenjt1` decimal(30,4) NOT NULL,
  `stdevt1` decimal(30,4) NOT NULL,
  `pembt1sqrt` decimal(30,4) NOT NULL,
  `pembs2` decimal(30,4) NOT NULL,
  `ktkmt1` decimal(30,4) NOT NULL,
  `ktkms2` decimal(30,4) NOT NULL,
  `pembt1` decimal(30,4) NOT NULL,
  `pembs22` decimal(30,4) NOT NULL,
  `ktksest1` decimal(30,4) NOT NULL,
  `ktkses2` decimal(30,4) NOT NULL,
  `ktgbt1` decimal(30,4) NOT NULL,
  `ktbet1` decimal(30,4) NOT NULL,
  `koreksit4` decimal(30,2) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `noorder` (`noorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bantuiter4`
--

INSERT INTO `bantuiter4` (`no`, `noorder`, `point`, `rts1`, `rtt1`, `rts2`, `hks1`, `hkt1`, `hks2`, `kpenjt1`, `stdevt1`, `pembt1sqrt`, `pembs2`, `ktkmt1`, `ktkms2`, `pembt1`, `pembs22`, `ktksest1`, `ktkses2`, `ktgbt1`, `ktbet1`, `koreksit4`) VALUES
(1, '33.10.04', 130, '130.0451', '130.0000', '130.0454', '130.0451', '130.0000', '130.0454', '0.0453', '0.0000', '2.2361', '2.0000', '0.0030', '0.0030', '2.0000', '2.0000', '0.0100', '0.0100', '0.0581', '0.1162', '0.05');

-- --------------------------------------------------------

--
-- Table structure for table `bantuiter5`
--

CREATE TABLE IF NOT EXISTS `bantuiter5` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `noorder` varchar(30) NOT NULL,
  `point` int(10) NOT NULL,
  `rts1` decimal(30,4) NOT NULL,
  `rtt1` decimal(30,4) NOT NULL,
  `rts2` decimal(30,4) NOT NULL,
  `hks1` decimal(30,4) NOT NULL,
  `hkt1` decimal(30,4) NOT NULL,
  `hks2` decimal(30,4) NOT NULL,
  `kpenjt1` decimal(30,4) NOT NULL,
  `stdevt1` decimal(30,4) NOT NULL,
  `pembt1sqrt` decimal(30,4) NOT NULL,
  `pembs2` decimal(30,4) NOT NULL,
  `ktkmt1` decimal(30,4) NOT NULL,
  `ktkms2` decimal(30,4) NOT NULL,
  `pembt1` decimal(30,4) NOT NULL,
  `pembs22` decimal(30,4) NOT NULL,
  `ktksest1` decimal(30,4) NOT NULL,
  `ktkses2` decimal(30,4) NOT NULL,
  `ktgbt1` decimal(30,4) NOT NULL,
  `ktbet1` decimal(30,4) NOT NULL,
  `koreksit5` decimal(30,2) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `noorder` (`noorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bantuiter5`
--

INSERT INTO `bantuiter5` (`no`, `noorder`, `point`, `rts1`, `rtt1`, `rts2`, `hks1`, `hkt1`, `hks2`, `kpenjt1`, `stdevt1`, `pembt1sqrt`, `pembs2`, `ktkmt1`, `ktkms2`, `pembt1`, `pembs22`, `ktksest1`, `ktkses2`, `ktgbt1`, `ktbet1`, `koreksit5`) VALUES
(1, '33.10.04', 140, '140.0316', '140.0000', '140.0321', '140.0316', '140.0000', '140.0321', '0.0319', '0.0000', '2.2361', '2.0000', '0.0270', '0.0270', '2.0000', '2.0000', '0.0100', '0.0100', '0.0596', '0.1192', '0.03');

-- --------------------------------------------------------

--
-- Table structure for table `bantuiter6`
--

CREATE TABLE IF NOT EXISTS `bantuiter6` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `noorder` varchar(30) NOT NULL,
  `point` int(10) NOT NULL,
  `rts1` decimal(30,4) NOT NULL,
  `rtt1` decimal(30,4) NOT NULL,
  `rts2` decimal(30,4) NOT NULL,
  `hks1` decimal(30,4) NOT NULL,
  `hkt1` decimal(30,4) NOT NULL,
  `hks2` decimal(30,4) NOT NULL,
  `kpenjt1` decimal(30,4) NOT NULL,
  `stdevt1` decimal(30,4) NOT NULL,
  `pembt1sqrt` decimal(30,4) NOT NULL,
  `pembs2` decimal(30,4) NOT NULL,
  `ktkmt1` decimal(30,4) NOT NULL,
  `ktkms2` decimal(30,4) NOT NULL,
  `pembt1` decimal(30,4) NOT NULL,
  `pembs22` decimal(30,4) NOT NULL,
  `ktksest1` decimal(30,4) NOT NULL,
  `ktkses2` decimal(30,4) NOT NULL,
  `ktgbt1` decimal(30,4) NOT NULL,
  `ktbet1` decimal(30,4) NOT NULL,
  `koreksit6` decimal(30,2) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `noorder` (`noorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bantuiter6`
--

INSERT INTO `bantuiter6` (`no`, `noorder`, `point`, `rts1`, `rtt1`, `rts2`, `hks1`, `hkt1`, `hks2`, `kpenjt1`, `stdevt1`, `pembt1sqrt`, `pembs2`, `ktkmt1`, `ktkms2`, `pembt1`, `pembs22`, `ktksest1`, `ktkses2`, `ktgbt1`, `ktbet1`, `koreksit6`) VALUES
(1, '33.10.04', 57, '149.9453', '150.0000', '149.9453', '149.9453', '150.0000', '149.9453', '-0.0547', '0.0000', '2.2361', '2.0000', '0.0270', '0.0270', '2.0000', '2.0000', '0.0100', '0.0100', '0.0596', '0.1192', '-0.05');

-- --------------------------------------------------------

--
-- Table structure for table `hkalibrasi`
--

CREATE TABLE IF NOT EXISTS `hkalibrasi` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `noorder` varchar(30) NOT NULL,
  `point` decimal(30,4) NOT NULL,
  `pdar` decimal(30,4) NOT NULL,
  `dat1` decimal(30,4) NOT NULL,
  `dacor` decimal(30,4) NOT NULL,
  `daue` decimal(30,4) NOT NULL,
  `ddar1` decimal(30,4) NOT NULL,
  `ddar2` decimal(30,4) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `hkalibrasi`
--

INSERT INTO `hkalibrasi` (`no`, `noorder`, `point`, `pdar`, `dat1`, `dacor`, `daue`, `ddar1`, `ddar2`) VALUES
(19, '33.10.04', '100.0000', '99.8409', '99.8000', '0.0409', '0.1192', '99.9591', '0.0409'),
(20, '33.10.04', '110.0000', '109.9315', '109.9500', '-0.0185', '0.1261', '110.0185', '-0.0185'),
(21, '33.10.04', '120.0000', '120.1465', '120.1000', '0.0465', '0.1162', '119.9534', '0.0466'),
(22, '33.10.04', '130.0000', '130.0453', '130.0000', '0.0453', '0.1162', '129.9547', '0.0453'),
(23, '33.10.04', '140.0000', '140.0319', '140.0000', '0.0319', '0.1192', '139.9681', '0.0319'),
(24, '33.10.04', '57.0000', '149.9453', '150.0000', '-0.0547', '0.1192', '57.0886', '-0.0886');

-- --------------------------------------------------------

--
-- Table structure for table `itermometer1`
--

CREATE TABLE IF NOT EXISTS `itermometer1` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `noorder` varchar(30) NOT NULL,
  `setpoin` int(10) NOT NULL,
  `s11` decimal(30,4) NOT NULL,
  `s12` decimal(30,4) NOT NULL,
  `s13` decimal(30,4) NOT NULL,
  `s14` decimal(30,4) NOT NULL,
  `s15` decimal(30,4) NOT NULL,
  `s16` decimal(30,4) NOT NULL,
  `t1` decimal(30,4) NOT NULL,
  `t2` decimal(30,4) NOT NULL,
  `t3` decimal(30,4) NOT NULL,
  `t4` decimal(30,4) NOT NULL,
  `t5` decimal(30,4) NOT NULL,
  `t6` decimal(30,4) NOT NULL,
  `s21` decimal(30,4) NOT NULL,
  `s22` decimal(30,4) NOT NULL,
  `s23` decimal(30,4) NOT NULL,
  `ktnt1` decimal(30,4) NOT NULL,
  `ksts1` decimal(30,4) NOT NULL,
  `ksts2` decimal(30,4) NOT NULL,
  `nstt1` decimal(30,4) NOT NULL,
  `pembt1` decimal(30,4) NOT NULL,
  `ktksts1` decimal(30,4) NOT NULL,
  `ktksts2` decimal(30,4) NOT NULL,
  `pembs1` decimal(30,4) NOT NULL,
  `ktkms1` decimal(30,4) NOT NULL,
  `pembs12` decimal(30,4) NOT NULL,
  `ktktes1` decimal(30,4) NOT NULL,
  `fct1` decimal(30,4) NOT NULL,
  `iat1` decimal(30,4) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `noorder` (`noorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `itermometer1`
--

INSERT INTO `itermometer1` (`no`, `noorder`, `setpoin`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `s21`, `s22`, `s23`, `ktnt1`, `ksts1`, `ksts2`, `nstt1`, `pembt1`, `ktksts1`, `ktksts2`, `pembs1`, `ktkms1`, `pembs12`, `ktktes1`, `fct1`, `iat1`) VALUES
(17, '33.10.04', 100, '35.4707', '35.4707', '35.4710', '35.4713', '35.4716', '35.4722', '99.8000', '99.8000', '99.8000', '99.8000', '99.8000', '99.8000', '35.4707', '35.4712', '35.4719', '0.0000', '0.0000', '0.0000', '0.2000', '2.0000', '0.0050', '0.0050', '2.0000', '0.0270', '2.0000', '0.0100', '2.0000', '2.0000'),
(18, '21', 100, '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000'),
(19, '12', 100, '35.4707', '35.4707', '35.4710', '35.4713', '35.4716', '35.4722', '99.8000', '99.8000', '99.8000', '99.8000', '99.8000', '99.8000', '35.4707', '35.4712', '35.4719', '0.0000', '0.0000', '0.0000', '0.2000', '2.0000', '0.0050', '0.0050', '2.0000', '0.0270', '2.0000', '0.0100', '2.0000', '2.0000'),
(20, '132', 100, '131.0000', '23.0000', '3.0000', '3.0000', '3.0000', '3.0000', '1.3200', '23.0000', '3.0000', '3.0000', '33.0000', '33.0000', '12.0000', '3211.0000', '3.0000', '3.0000', '3.0000', '3.0000', '3.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000', '1.0000');

-- --------------------------------------------------------

--
-- Table structure for table `itermometer2`
--

CREATE TABLE IF NOT EXISTS `itermometer2` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `noorder` varchar(30) NOT NULL,
  `setpoin` int(10) NOT NULL,
  `s11` decimal(30,4) NOT NULL,
  `s12` decimal(30,4) NOT NULL,
  `s13` decimal(30,4) NOT NULL,
  `s14` decimal(30,4) NOT NULL,
  `s15` decimal(30,4) NOT NULL,
  `s16` decimal(30,4) NOT NULL,
  `t1` decimal(30,4) NOT NULL,
  `t2` decimal(30,4) NOT NULL,
  `t3` decimal(30,4) NOT NULL,
  `t4` decimal(30,4) NOT NULL,
  `t5` decimal(30,4) NOT NULL,
  `t6` decimal(30,4) NOT NULL,
  `s21` decimal(30,4) NOT NULL,
  `s22` decimal(30,4) NOT NULL,
  `s23` decimal(30,4) NOT NULL,
  `ktnt1` decimal(30,4) NOT NULL,
  `ksts1` decimal(30,4) NOT NULL,
  `ksts2` decimal(30,4) NOT NULL,
  `nstt1` decimal(30,4) NOT NULL,
  `pembt1` decimal(30,4) NOT NULL,
  `ktksts1` decimal(30,4) NOT NULL,
  `ktksts2` decimal(30,4) NOT NULL,
  `pembs1` decimal(30,4) NOT NULL,
  `ktkms1` decimal(30,4) NOT NULL,
  `pembs12` decimal(30,4) NOT NULL,
  `ktktes1` decimal(30,4) NOT NULL,
  `fct1` decimal(30,4) NOT NULL,
  `iat1` decimal(30,4) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `noorder` (`noorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `itermometer2`
--

INSERT INTO `itermometer2` (`no`, `noorder`, `setpoin`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `s21`, `s22`, `s23`, `ktnt1`, `ksts1`, `ksts2`, `nstt1`, `pembt1`, `ktksts1`, `ktksts2`, `pembs1`, `ktkms1`, `pembs12`, `ktktes1`, `fct1`, `iat1`) VALUES
(1, '33.10.04', 110, '36.4636', '36.4645', '36.4652', '36.4641', '36.4638', '36.4640', '110.0000', '110.0000', '110.0000', '109.9000', '109.9000', '109.9000', '36.4638', '36.4644', '36.4640', '0.0000', '0.0000', '0.0000', '0.2000', '2.0000', '0.0050', '0.0050', '2.0000', '0.0030', '2.0000', '0.0100', '2.0000', '2.0000');

-- --------------------------------------------------------

--
-- Table structure for table `itermometer3`
--

CREATE TABLE IF NOT EXISTS `itermometer3` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `noorder` varchar(30) NOT NULL,
  `setpoin` int(10) NOT NULL,
  `s11` decimal(30,4) NOT NULL,
  `s12` decimal(30,4) NOT NULL,
  `s13` decimal(30,4) NOT NULL,
  `s14` decimal(30,4) NOT NULL,
  `s15` decimal(30,4) NOT NULL,
  `s16` decimal(30,4) NOT NULL,
  `t1` decimal(30,4) NOT NULL,
  `t2` decimal(30,4) NOT NULL,
  `t3` decimal(30,4) NOT NULL,
  `t4` decimal(30,4) NOT NULL,
  `t5` decimal(30,4) NOT NULL,
  `t6` decimal(30,4) NOT NULL,
  `s21` decimal(30,4) NOT NULL,
  `s22` decimal(30,4) NOT NULL,
  `s23` decimal(30,4) NOT NULL,
  `ktnt1` decimal(30,4) NOT NULL,
  `ksts1` decimal(30,4) NOT NULL,
  `ksts2` decimal(30,4) NOT NULL,
  `nstt1` decimal(30,4) NOT NULL,
  `pembt1` decimal(30,4) NOT NULL,
  `ktksts1` decimal(30,4) NOT NULL,
  `ktksts2` decimal(30,4) NOT NULL,
  `pembs1` decimal(30,4) NOT NULL,
  `ktkms1` decimal(30,4) NOT NULL,
  `pembs12` decimal(30,4) NOT NULL,
  `ktktes1` decimal(30,4) NOT NULL,
  `fct1` decimal(30,4) NOT NULL,
  `iat1` decimal(30,4) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `noorder` (`noorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `itermometer3`
--

INSERT INTO `itermometer3` (`no`, `noorder`, `setpoin`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `s21`, `s22`, `s23`, `ktnt1`, `ksts1`, `ksts2`, `nstt1`, `pembt1`, `ktksts1`, `ktksts2`, `pembs1`, `ktkms1`, `pembs12`, `ktktes1`, `fct1`, `iat1`) VALUES
(1, '33.10.04', 120, '37.4672', '37.4666', '37.4663', '37.4655', '37.4657', '37.4656', '120.1000', '120.1000', '120.1000', '120.1000', '120.1000', '120.1000', '37.4669', '37.4661', '37.4653', '0.0000', '0.0000', '0.0000', '0.2000', '2.0000', '0.0050', '0.0050', '2.0000', '0.0030', '2.0000', '0.0100', '2.0000', '2.0000');

-- --------------------------------------------------------

--
-- Table structure for table `itermometer4`
--

CREATE TABLE IF NOT EXISTS `itermometer4` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `noorder` varchar(30) NOT NULL,
  `setpoin` int(10) NOT NULL,
  `s11` decimal(30,4) NOT NULL,
  `s12` decimal(30,4) NOT NULL,
  `s13` decimal(30,4) NOT NULL,
  `s14` decimal(30,4) NOT NULL,
  `s15` decimal(30,4) NOT NULL,
  `s16` decimal(30,4) NOT NULL,
  `t1` decimal(30,4) NOT NULL,
  `t2` decimal(30,4) NOT NULL,
  `t3` decimal(30,4) NOT NULL,
  `t4` decimal(30,4) NOT NULL,
  `t5` decimal(30,4) NOT NULL,
  `t6` decimal(30,4) NOT NULL,
  `s21` decimal(30,4) NOT NULL,
  `s22` decimal(30,4) NOT NULL,
  `s23` decimal(30,4) NOT NULL,
  `ktnt1` decimal(30,4) NOT NULL,
  `ksts1` decimal(30,4) NOT NULL,
  `ksts2` decimal(30,4) NOT NULL,
  `nstt1` decimal(30,4) NOT NULL,
  `pembt1` decimal(30,4) NOT NULL,
  `ktksts1` decimal(30,4) NOT NULL,
  `ktksts2` decimal(30,4) NOT NULL,
  `pembs1` decimal(30,4) NOT NULL,
  `ktkms1` decimal(30,4) NOT NULL,
  `pembs12` decimal(30,4) NOT NULL,
  `ktktes1` decimal(30,4) NOT NULL,
  `fct1` decimal(30,4) NOT NULL,
  `iat1` decimal(30,4) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `noorder` (`noorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `itermometer4`
--

INSERT INTO `itermometer4` (`no`, `noorder`, `setpoin`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `s21`, `s22`, `s23`, `ktnt1`, `ksts1`, `ksts2`, `nstt1`, `pembt1`, `ktksts1`, `ktksts2`, `pembs1`, `ktkms1`, `pembs12`, `ktktes1`, `fct1`, `iat1`) VALUES
(1, '33.10.04', 130, '38.4333', '38.4339', '38.4340', '38.4345', '38.4344', '38.4343', '130.0000', '130.0000', '130.0000', '130.0000', '130.0000', '130.0000', '38.4338', '38.4341', '38.4344', '0.0000', '0.0000', '0.0000', '0.2000', '2.0000', '0.0050', '0.0050', '2.0000', '0.0030', '2.0000', '0.0100', '2.0000', '2.0000');

-- --------------------------------------------------------

--
-- Table structure for table `itermometer5`
--

CREATE TABLE IF NOT EXISTS `itermometer5` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `noorder` varchar(30) NOT NULL,
  `setpoin` int(10) NOT NULL,
  `s11` decimal(30,4) NOT NULL,
  `s12` decimal(30,4) NOT NULL,
  `s13` decimal(30,4) NOT NULL,
  `s14` decimal(30,4) NOT NULL,
  `s15` decimal(30,4) NOT NULL,
  `s16` decimal(30,4) NOT NULL,
  `t1` decimal(30,4) NOT NULL,
  `t2` decimal(30,4) NOT NULL,
  `t3` decimal(30,4) NOT NULL,
  `t4` decimal(30,4) NOT NULL,
  `t5` decimal(30,4) NOT NULL,
  `t6` decimal(30,4) NOT NULL,
  `s21` decimal(30,4) NOT NULL,
  `s22` decimal(30,4) NOT NULL,
  `s23` decimal(30,4) NOT NULL,
  `ktnt1` decimal(30,4) NOT NULL,
  `ksts1` decimal(30,4) NOT NULL,
  `ksts2` decimal(30,4) NOT NULL,
  `nstt1` decimal(30,4) NOT NULL,
  `pembt1` decimal(30,4) NOT NULL,
  `ktksts1` decimal(30,4) NOT NULL,
  `ktksts2` decimal(30,4) NOT NULL,
  `pembs1` decimal(30,4) NOT NULL,
  `ktkms1` decimal(30,4) NOT NULL,
  `pembs12` decimal(30,4) NOT NULL,
  `ktktes1` decimal(30,4) NOT NULL,
  `fct1` decimal(30,4) NOT NULL,
  `iat1` decimal(30,4) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `noorder` (`noorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `itermometer5`
--

INSERT INTO `itermometer5` (`no`, `noorder`, `setpoin`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `s21`, `s22`, `s23`, `ktnt1`, `ksts1`, `ksts2`, `nstt1`, `pembt1`, `ktksts1`, `ktksts2`, `pembs1`, `ktkms1`, `pembs12`, `ktktes1`, `fct1`, `iat1`) VALUES
(1, '33.10.04', 140, '39.4071', '39.4074', '39.4076', '39.4079', '39.4077', '39.4080', '140.0000', '140.0000', '140.0000', '140.0000', '140.0000', '140.0000', '39.4074', '39.4076', '39.4080', '0.0000', '0.0000', '0.0000', '0.2000', '2.0000', '0.0050', '0.0050', '2.0000', '0.0270', '2.0000', '0.0100', '2.0000', '2.0000');

-- --------------------------------------------------------

--
-- Table structure for table `itermometer6`
--

CREATE TABLE IF NOT EXISTS `itermometer6` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `noorder` varchar(30) NOT NULL,
  `setpoin` int(10) NOT NULL,
  `s11` decimal(30,4) NOT NULL,
  `s12` decimal(30,4) NOT NULL,
  `s13` decimal(30,4) NOT NULL,
  `s14` decimal(30,4) NOT NULL,
  `s15` decimal(30,4) NOT NULL,
  `s16` decimal(30,4) NOT NULL,
  `t1` decimal(30,4) NOT NULL,
  `t2` decimal(30,4) NOT NULL,
  `t3` decimal(30,4) NOT NULL,
  `t4` decimal(30,4) NOT NULL,
  `t5` decimal(30,4) NOT NULL,
  `t6` decimal(30,4) NOT NULL,
  `s21` decimal(30,4) NOT NULL,
  `s22` decimal(30,4) NOT NULL,
  `s23` decimal(30,4) NOT NULL,
  `ktnt1` decimal(30,4) NOT NULL,
  `ksts1` decimal(30,4) NOT NULL,
  `ksts2` decimal(30,4) NOT NULL,
  `nstt1` decimal(30,4) NOT NULL,
  `pembt1` decimal(30,4) NOT NULL,
  `ktksts1` decimal(30,4) NOT NULL,
  `ktksts2` decimal(30,4) NOT NULL,
  `pembs1` decimal(30,4) NOT NULL,
  `ktkms1` decimal(30,4) NOT NULL,
  `pembs12` decimal(30,4) NOT NULL,
  `ktktes1` decimal(30,4) NOT NULL,
  `fct1` decimal(30,4) NOT NULL,
  `iat1` decimal(30,4) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `noorder` (`noorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `itermometer6`
--

INSERT INTO `itermometer6` (`no`, `noorder`, `setpoin`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `s21`, `s22`, `s23`, `ktnt1`, `ksts1`, `ksts2`, `nstt1`, `pembt1`, `ktksts1`, `ktksts2`, `pembs1`, `ktkms1`, `pembs12`, `ktktes1`, `fct1`, `iat1`) VALUES
(1, '33.10.04', 57, '40.3711', '40.3713', '40.3713', '40.3712', '40.3705', '40.3712', '150.0000', '150.0000', '150.0000', '150.0000', '150.0000', '150.0000', '40.3711', '40.3709', '40.3713', '0.0000', '0.0000', '0.0000', '0.2000', '2.0000', '0.0050', '0.0050', '2.0000', '0.0270', '2.0000', '0.0100', '2.0000', '2.0000');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `no` int(30) NOT NULL AUTO_INCREMENT,
  `noorder` varchar(20) NOT NULL,
  `pemilik` varchar(30) NOT NULL,
  `alat` varchar(30) NOT NULL,
  `seri` varchar(30) NOT NULL,
  `erange` varchar(30) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `pembuat` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `pelaksana` varchar(30) NOT NULL,
  `suhuruang` decimal(30,2) NOT NULL,
  `kelembapan` decimal(30,2) NOT NULL,
  PRIMARY KEY (`no`),
  UNIQUE KEY `order` (`noorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`no`, `noorder`, `pemilik`, `alat`, `seri`, `erange`, `merk`, `pembuat`, `tanggal`, `pelaksana`, `suhuruang`, `kelembapan`) VALUES
(3, '33.10.04', 'Vania Raisa', 'suzuki', '5645/0.2', '95 up to 155', 'honda', '-', '2018-03-06', 'moh toha', '62.00', '12.00');

-- --------------------------------------------------------

--
-- Table structure for table `setalat`
--

CREATE TABLE IF NOT EXISTS `setalat` (
  `no` int(20) NOT NULL AUTO_INCREMENT,
  `termo1` int(20) NOT NULL,
  `termo2` int(20) NOT NULL,
  `termo3` int(20) NOT NULL,
  `termo4` int(20) NOT NULL,
  `termo5` int(20) NOT NULL,
  `termo6` int(20) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `setalat`
--

INSERT INTO `setalat` (`no`, `termo1`, `termo2`, `termo3`, `termo4`, `termo5`, `termo6`) VALUES
(1, 100, 190, 110, 150, 140, 150);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
