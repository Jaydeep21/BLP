-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 03:49 PM
-- Server version: 5.7.21-log
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blp`
--

-- --------------------------------------------------------

--
-- Table structure for table `addiction`
--

CREATE TABLE `addiction` (
  `pid` bigint(20) NOT NULL,
  `addiction_type` varchar(50) NOT NULL,
  `addiction_notes` varchar(50) DEFAULT NULL,
  `addiction_frequency` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addiction`
--

INSERT INTO `addiction` (`pid`, `addiction_type`, `addiction_notes`, `addiction_frequency`) VALUES
(2, 'Alcohol', 'Local Alcohol', '20'),
(2, 'Cigarette', 'Hand Made Cigarette', '1'),
(2, 'Tobacco', 'Shaggies', '5'),
(3, 'Alcohol', 'vbcvb', 'vbdbf'),
(3, 'Cigarette', 'bdfb', 'fdgbvc'),
(3, 'Tobacco', 'bvcxvcb', 'vbcvxbxfg'),
(4, 'Alcohol', 'None', '0'),
(4, 'Cigarette', 'None', '0'),
(4, 'Tobacco', 'None', '0'),
(5, 'Alcohol', 'None', '0'),
(5, 'Cigarette', 'None', '0'),
(5, 'Tobacco', 'None', '0'),
(6, 'Alcohol', 'None', '0'),
(6, 'Cigarette', 'None', '0'),
(6, 'Tobacco', 'None', '0'),
(7, 'Alcohol', 'None', '0'),
(7, 'Cigarette', 'None', '0'),
(7, 'Tobacco', 'None', '0'),
(8, 'Alcohol', 'fs', 'asdvsdv'),
(8, 'Cigarette', 'sd', 'nadsfasv'),
(8, 'Tobacco', 'asd', 'jbjlk');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `pid` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `address_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`pid`, `address`, `address_type`) VALUES
(2, '4, Deshartan Marg,\r\nRajbansi Nagar,\r\nPatna, Bihar 800001', 'Permanent'),
(2, 'Flat No. 5, Maichel Patel Chawl,\r\nDharavi Main Road,\r\nKoliwada', 'Local'),
(3, 'afgvnbnvv', 'Permanent'),
(3, 'xcvbcv', 'Local'),
(4, 'adsf', 'Local'),
(4, 'zxcv', 'Permanent'),
(5, 'None', 'Local'),
(5, 'None', 'Permanent'),
(6, 'None', 'Local'),
(6, 'None', 'Permanent'),
(7, 'None', 'Local'),
(7, 'None', 'Permanent'),
(8, '16,old anant bhuvan,263/65 narshi natha street, bhat bazar , masjid bunder west,Mumbai-09', 'Local'),
(8, '16,old anant bhuvan,263/65 narshi natha street, bhat bazar , masjid bunder west,Mumbai-09', 'Permanent');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `cid` bigint(20) NOT NULL,
  `cname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `pid` bigint(11) NOT NULL,
  `mobile` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`pid`, `mobile`) VALUES
(2, 987654321),
(2, 1234567890),
(3, 233),
(3, 4345),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 1223445),
(8, 1234554132);

-- --------------------------------------------------------

--
-- Table structure for table `disability`
--

CREATE TABLE `disability` (
  `rid` bigint(20) NOT NULL,
  `grade` int(1) NOT NULL DEFAULT '0',
  `disability_area` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disability`
--

INSERT INTO `disability` (`rid`, `grade`, `disability_area`) VALUES
(2, 1, 'Hand'),
(22, 1, 'Hand'),
(36, 1, 'Hand'),
(36, 2, ''),
(36, 2, 'Claw Left');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `did` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`did`, `dname`) VALUES
(1, 'Rifampicin'),
(2, 'Clofazimine'),
(3, 'cxv'),
(4, 'Unknown'),
(5, 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `drugs_prescribed`
--

CREATE TABLE `drugs_prescribed` (
  `rid` bigint(20) NOT NULL,
  `did` int(10) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `dosage` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drugs_prescribed`
--

INSERT INTO `drugs_prescribed` (`rid`, `did`, `type`, `start_date`, `end_date`, `dosage`) VALUES
(2, 1, '', '2019-07-13', '2019-08-11', '600'),
(2, 2, '', '2019-07-13', '2019-07-11', '400'),
(22, 3, '', '2019-07-04', '2019-07-25', 'xvc'),
(23, 4, '', '2019-07-17', '2019-07-17', 'Unknown'),
(24, 4, '', '2019-07-17', '2019-07-17', 'Unknown'),
(25, 4, '', '2019-07-17', '2019-07-17', 'Unknown'),
(26, 4, '', '2019-07-17', '2019-07-17', 'Unknown'),
(36, 5, '', '2019-07-02', '2019-07-31', 'fdb');

-- --------------------------------------------------------

--
-- Table structure for table `family_members`
--

CREATE TABLE `family_members` (
  `pid` bigint(20) NOT NULL,
  `fm_relation` varchar(50) DEFAULT 'unknown',
  `fm_name` varchar(30) DEFAULT 'unknown',
  `fm_age` int(3) DEFAULT '0',
  `fm_disease` varchar(30) DEFAULT NULL,
  `fm_diagnosis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `family_members`
--

INSERT INTO `family_members` (`pid`, `fm_relation`, `fm_name`, `fm_age`, `fm_disease`, `fm_diagnosis`) VALUES
(2, 'Husband', 'Mahesh', 35, 'Diabetes', 'Taking medication since 3 months'),
(3, '3rfsd', 'c', 122, 'xcvb', 'cbxvv'),
(4, 'Unknown', 'Unknown', 0, 'None', 'None'),
(5, 'Unknown', 'Unknown', 0, 'None', 'None'),
(6, 'Unknown', 'Unknown', 0, 'None', 'None'),
(7, 'Unknown', 'Unknown', 0, 'None', 'None'),
(8, 'zxcvi', 'akldjfn', 15, 'kanrnui', 'ansknx');

-- --------------------------------------------------------

--
-- Table structure for table `follow_up_record`
--

CREATE TABLE `follow_up_record` (
  `fid` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `clinical_notes` varchar(200) DEFAULT NULL,
  `prescription` varchar(200) DEFAULT NULL,
  `complaints` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow_up_record`
--

INSERT INTO `follow_up_record` (`fid`, `pid`, `clinical_notes`, `prescription`, `complaints`) VALUES
(3, 2, 'None', 'None', 'None'),
(27, 4, 'N/A', 'N/A', 'N/A'),
(28, 4, 'N/A', 'N/A', 'N/A'),
(29, 4, 'N/A', 'N/A', 'N/A'),
(30, 4, 'N/A', 'N/A', 'N/A'),
(31, 7, 'None', 'None', 'None'),
(32, 7, 'None', 'None', 'None'),
(33, 7, 'None', 'None', 'None'),
(34, 7, 'None', 'None', 'None'),
(35, 7, 'None', 'None', 'None'),
(37, 8, 'None', 'None', 'None'),
(38, 8, 'None', 'None', 'None'),
(39, 8, 'None', 'None', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `pid` bigint(20) NOT NULL,
  `image_url` varchar(767) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`pid`, `image_url`, `date`) VALUES
(2, 'P2_PB_TT_BT_20190713_1.jpeg', '2019-07-29 16:18:12'),
(2, 'P2_PB_TT_BT_20190713_2.jpeg', '2019-07-29 16:18:12'),
(4, 'P4_20190717_1.jpg', '2019-07-29 16:18:12'),
(4, 'P4_20190717_2.png', '2019-07-29 16:18:12'),
(4, 'P4_20190717_3.jpg', '2019-07-29 16:18:12'),
(7, 'P7_20190717_1.jpg', '2019-07-29 16:18:12'),
(7, 'P7_20190717_2.jpg', '2019-07-29 16:18:12'),
(7, 'P7_20190717_3.png', '2019-07-29 16:18:12'),
(8, 'P8_PB_BL_20190729_1.jpg', '2019-07-29 16:18:12'),
(8, 'P8_PB_BL_20190729_2.jpg', '2019-07-29 16:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `known_leprosy_contacts`
--

CREATE TABLE `known_leprosy_contacts` (
  `pid` bigint(20) NOT NULL,
  `kname` varchar(50) DEFAULT NULL,
  `relation` varchar(30) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `known_leprosy_contacts`
--

INSERT INTO `known_leprosy_contacts` (`pid`, `kname`, `relation`, `contact`, `address`, `description`) VALUES
(2, 'Kisan Murti', 'Neighbour', '5432167890', 'Flat No. 3, Maichel Patel Chawl, Dharavi Main Road, Koliwada', 'Loss of sensation'),
(2, 'Sujata Mathur', 'Neighbour', '9876501234', 'Flat No. 6, Maichel Patel Chawl, Dharavi Main Road, Koliwada', 'White patches on arm'),
(3, 'asdf', 'vsdrgc', 'fbcv', 'sdvxc', 'vxcvcvd'),
(4, 'Anonymous', 'Unknown', '0', 'Unknown', 'None'),
(5, 'Anonymous', 'Unknown', '0', 'Unknown', 'None'),
(6, 'Anonymous', 'Unknown', '0', 'Unknown', 'None'),
(7, 'Anonymous', 'Unknown', '0', 'Unknown', 'None'),
(8, 'asdvzxa', 'asdvxc', 'asdv', 'asdfnvkc', 'agfa');

-- --------------------------------------------------------

--
-- Table structure for table `leprosy_diagnosed`
--

CREATE TABLE `leprosy_diagnosed` (
  `rid` bigint(20) NOT NULL,
  `pb` int(1) NOT NULL DEFAULT '0',
  `mb` int(1) NOT NULL DEFAULT '0',
  `tt` int(1) NOT NULL DEFAULT '0',
  `bt` int(1) NOT NULL DEFAULT '0',
  `bb` int(1) NOT NULL DEFAULT '0',
  `bl` int(1) NOT NULL DEFAULT '0',
  `ll` int(1) NOT NULL DEFAULT '0',
  `pnl` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leprosy_diagnosed`
--

INSERT INTO `leprosy_diagnosed` (`rid`, `pb`, `mb`, `tt`, `bt`, `bb`, `bl`, `ll`, `pnl`) VALUES
(2, 1, 0, 1, 1, 0, 0, 0, 0),
(22, 0, 1, 1, 0, 0, 0, 0, 0),
(23, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 1, 0, 0, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `leprosy_relations`
--

CREATE TABLE `leprosy_relations` (
  `pid` bigint(20) NOT NULL,
  `klpid` bigint(20) NOT NULL,
  `relation` varchar(20) NOT NULL DEFAULT 'unknown'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

CREATE TABLE `medical_history` (
  `pid` bigint(20) NOT NULL,
  `disease` varchar(100) DEFAULT NULL,
  `mmyy_diagnosis` varchar(20) DEFAULT NULL,
  `mmyy_curation` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medical_history`
--

INSERT INTO `medical_history` (`pid`, `disease`, `mmyy_diagnosis`, `mmyy_curation`) VALUES
(2, 'Dengue last year', NULL, NULL),
(3, 'bz', NULL, NULL),
(4, 'None', NULL, NULL),
(5, 'None', NULL, NULL),
(6, 'None', NULL, NULL),
(7, 'None', NULL, NULL),
(8, 'asdnf   ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `next_appointment`
--

CREATE TABLE `next_appointment` (
  `fid` bigint(20) NOT NULL,
  `appointment_reason` varchar(50) DEFAULT 'unspecified',
  `appointment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obstetric_history`
--

CREATE TABLE `obstetric_history` (
  `pid` bigint(20) NOT NULL,
  `mmyy_pregnant` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `obstetric_history`
--

INSERT INTO `obstetric_history` (`pid`, `mmyy_pregnant`) VALUES
(2, 'Twins.A girl and a boy 3 years old '),
(8, '2 bache ');

-- --------------------------------------------------------

--
-- Table structure for table `past_drugs`
--

CREATE TABLE `past_drugs` (
  `pid` bigint(20) NOT NULL,
  `hospital` varchar(50) DEFAULT NULL,
  `drugs` varchar(20) DEFAULT NULL,
  `mmyy_start` varchar(20) DEFAULT NULL,
  `mmyy_end` varchar(20) DEFAULT NULL,
  `dosage` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `past_drugs`
--

INSERT INTO `past_drugs` (`pid`, `hospital`, `drugs`, `mmyy_start`, `mmyy_end`, `dosage`) VALUES
(2, 'Chhota Sion', 'Prednisone', '2018-12-07', '2018-12-28', '40'),
(3, 'dffbxcvbxc', 'vbxc', '2019-07-24', '2019-07-23', 'vbxcvb'),
(4, 'Unknown', 'Unknown', '2019-07-17', '2019-07-17', 'Unknown'),
(5, 'Unknown', 'Unknown', '2019-07-17', '2019-07-17', 'Unknown'),
(6, 'Unknown', 'Unknown', '2019-07-17', '2019-07-17', 'Unknown'),
(7, 'Unknown', 'Unknown', '2019-07-17', '2019-07-17', 'Unknown'),
(8, 'asdvzx', 'avdfj', '2019-07-01', '2019-07-30', 'knj');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` bigint(20) NOT NULL,
  `clinic` varchar(10) NOT NULL DEFAULT 'HO',
  `patient_code` varchar(20) DEFAULT NULL,
  `diagnosed` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `clinic`, `patient_code`, `diagnosed`) VALUES
(2, 'HO', '911', 1),
(3, 'HO', '123', 1),
(4, 'ESIS', '23', 1),
(5, 'HO', '0', 1),
(6, 'HO', '0', 1),
(7, 'HO', '0', 1),
(8, 'DH', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `peripheral_nerves`
--

CREATE TABLE `peripheral_nerves` (
  `rid` bigint(20) NOT NULL,
  `nerves` varchar(20) NOT NULL,
  `thickness` varchar(20) DEFAULT NULL,
  `tenderness` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peripheral_nerves`
--

INSERT INTO `peripheral_nerves` (`rid`, `nerves`, `thickness`, `tenderness`) VALUES
(2, 'Great Auricular', 'No', 'No'),
(2, 'Lateral Popliteal', 'No', 'No'),
(2, 'Medial Cutaneous', '', ''),
(2, 'Posterior Tibial', 'No', 'No'),
(2, 'Radial Cutaneous', 'No', 'No'),
(2, 'Superficial Peroneal', 'No', 'No'),
(2, 'Supra orbital', 'No', 'No'),
(2, 'Sural Nerve', 'No', 'No'),
(2, 'Ulnar', 'No', 'No'),
(22, 'Great Auricular', 'No', 'No'),
(22, 'Lateral Popliteal', 'No', 'No'),
(22, 'Medial Cutaneous', '', ''),
(22, 'Posterior Tibial', 'No', 'No'),
(22, 'Radial Cutaneous', 'No', 'No'),
(22, 'Superficial Peroneal', 'No', 'No'),
(22, 'Supra orbital', 'No', 'No'),
(22, 'Sural Nerve', 'No', 'No'),
(22, 'Ulnar', 'No', 'No'),
(23, 'Great Auricular', 'No', 'No'),
(23, 'Lateral Popliteal', 'No', 'No'),
(23, 'Medial Cutaneous', '', ''),
(23, 'Posterior Tibial', 'No', 'No'),
(23, 'Radial Cutaneous', 'No', 'No'),
(23, 'Superficial Peroneal', 'No', 'No'),
(23, 'Supra orbital', 'No', 'No'),
(23, 'Sural Nerve', 'No', 'No'),
(23, 'Ulnar', 'No', 'No'),
(24, 'Great Auricular', 'No', 'No'),
(24, 'Lateral Popliteal', 'No', 'No'),
(24, 'Medial Cutaneous', '', ''),
(24, 'Posterior Tibial', 'No', 'No'),
(24, 'Radial Cutaneous', 'No', 'Yes'),
(24, 'Superficial Peroneal', 'No', 'No'),
(24, 'Supra orbital', 'No', 'No'),
(24, 'Sural Nerve', 'Yes', 'No'),
(24, 'Ulnar', 'No', 'No'),
(25, 'Great Auricular', 'No', 'No'),
(25, 'Lateral Popliteal', 'No', 'No'),
(25, 'Medial Cutaneous', '', ''),
(25, 'Posterior Tibial', 'No', 'Yes'),
(25, 'Radial Cutaneous', 'No', 'No'),
(25, 'Superficial Peroneal', 'Yes', 'No'),
(25, 'Supra orbital', 'No', 'No'),
(25, 'Sural Nerve', 'Yes', 'No'),
(25, 'Ulnar', 'No', 'No'),
(26, 'Great Auricular', 'No', 'No'),
(26, 'Lateral Popliteal', 'No', 'Yes'),
(26, 'Medial Cutaneous', 'No', 'Yes'),
(26, 'Posterior Tibial', 'Yes', 'No'),
(26, 'Radial Cutaneous', 'No', 'Yes'),
(26, 'Superficial Peroneal', 'Yes', 'No'),
(26, 'Supra orbital', 'No', 'No'),
(26, 'Sural Nerve', 'Yes', 'No'),
(26, 'Ulnar', 'No', 'No'),
(36, 'Great Auricular', 'No', 'No'),
(36, 'Lateral Popliteal', 'No', 'Yes'),
(36, 'Medial Cutaneous', 'No', 'No'),
(36, 'Posterior Tibial', 'No', 'No'),
(36, 'Radial Cutaneous', 'No', 'No'),
(36, 'Superficial Peroneal', 'No', 'No'),
(36, 'Supra orbital', 'No', 'No'),
(36, 'Sural Nerve', 'No', 'No'),
(36, 'Ulnar', 'Yes', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `pid` bigint(20) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sex` char(11) DEFAULT NULL,
  `aadhar` bigint(12) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `person_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `person_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `economical_status` char(10) DEFAULT NULL,
  `caste` char(10) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `allergy` varchar(50) DEFAULT NULL,
  `clinic` varchar(10) DEFAULT NULL,
  `referred` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`pid`, `fname`, `dob`, `sex`, `aadhar`, `occupation`, `person_created`, `person_updated`, `economical_status`, `caste`, `age`, `allergy`, `clinic`, `referred`) VALUES
(2, 'Trishla Kayastha', '1990-08-25', 'female', 908786545321, 'Shop Keeper', '2019-07-13 16:49:09', '2019-07-13 16:49:09', 'Non-BPL', 'SC', 28, 'Pollen Allergy', 'HO', 'Dr.Kulkarni'),
(3, 'adf', '2019-07-26', 'male', 123434, 'dfg', '2019-07-17 06:10:09', '2019-07-17 06:10:09', 'Non-BPL', 'SC', 123, 'bxfgbfgb', 'HO', 'sfgcvn'),
(4, 'sadsdf', '2019-07-11', 'male', 12345, 'None', '2019-07-17 06:14:25', '2019-07-17 06:14:25', 'BPL', 'ST', 0, 'None', 'ESIS', 'None'),
(5, 'Anonymous', '0000-01-01', 'male', 0, 'None', '2019-07-17 06:24:20', '2019-07-17 06:24:20', 'BPL', 'Others', 0, 'None', 'HO', 'None'),
(6, 'Anonymous', '0000-01-01', 'male', 0, 'None', '2019-07-17 06:25:24', '2019-07-17 06:25:24', 'BPL', 'Others', 0, 'None', 'HO', 'None'),
(7, 'Anonymous', '0000-01-01', 'male', 0, 'None', '2019-07-17 06:28:36', '2019-07-17 06:28:36', 'BPL', 'Others', 0, 'None', 'HO', 'None'),
(8, 'Mihit', '2019-01-01', 'female', 123456778, 'worker', '2019-07-29 09:29:57', '2019-07-29 09:29:57', 'BPL', 'SC', 0, 'ahsdfksadckl', 'DH', 'val');

-- --------------------------------------------------------

--
-- Table structure for table `reactions`
--

CREATE TABLE `reactions` (
  `rid` bigint(20) NOT NULL,
  `type_reaction` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `neuritis` varchar(20) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reactions`
--

INSERT INTO `reactions` (`rid`, `type_reaction`, `description`, `neuritis`) VALUES
(2, 'Type1', 'Red skin patches and rashes and other light coloured patches on body', 'Neuritis'),
(22, 'Type2', 'xcvsdfg', 'No'),
(23, 'None', 'None', 'No'),
(24, 'None', 'None', 'No'),
(25, 'None', 'None', 'No'),
(26, 'None', 'None', 'No'),
(36, 'Type2', 'hey', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `rid` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `date_attend` datetime DEFAULT CURRENT_TIMESTAMP,
  `examiner` varchar(50) DEFAULT 'unknown'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`rid`, `pid`, `date_attend`, `examiner`) VALUES
(2, 2, '2019-07-13 00:00:00', 'Dr. Fatima'),
(3, 2, '2019-07-13 00:00:00', 'Dr. Fatima'),
(22, 3, '2019-07-17 00:00:00', 'cxbcx'),
(23, 4, '2019-07-17 00:00:00', 'Unknown'),
(24, 5, '2019-07-17 00:00:00', 'Unknown'),
(25, 6, '2019-07-17 00:00:00', 'Unknown'),
(26, 7, '2019-07-17 00:00:00', 'Unknown'),
(27, 4, '2019-07-17 00:00:00', 'Zxvxcv'),
(28, 4, '2019-07-17 00:00:00', 'Zxvxcv'),
(29, 4, '2019-07-17 00:00:00', 'Zxvxcv'),
(30, 4, '2019-07-17 00:00:00', 'Zxvxcv'),
(31, 7, '2019-07-17 00:00:00', 'fvxc'),
(32, 7, '2019-07-17 00:00:00', 'fvxc'),
(33, 7, '2019-07-18 00:00:00', 'Unknown'),
(34, 7, '2019-07-18 00:00:00', 'Unknown'),
(35, 7, '2019-07-18 00:00:00', 'Unknown'),
(36, 8, '2019-07-29 00:00:00', 'fvxcp'),
(37, 8, '2019-07-29 00:00:00', 'Unknown'),
(38, 8, '2019-07-29 00:00:00', 'Zxvxcv'),
(39, 8, '2019-07-29 00:00:00', 'inckna');

-- --------------------------------------------------------

--
-- Table structure for table `referred`
--

CREATE TABLE `referred` (
  `pid` bigint(20) NOT NULL,
  `doctor_name` varchar(50) DEFAULT NULL,
  `hospital` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sensory_test`
--

CREATE TABLE `sensory_test` (
  `rid` bigint(20) NOT NULL,
  `pinprick` varchar(20) DEFAULT NULL,
  `touch` varchar(20) DEFAULT NULL,
  `temperature` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sensory_test`
--

INSERT INTO `sensory_test` (`rid`, `pinprick`, `touch`, `temperature`) VALUES
(2, 'Total', 'Present', 'Hot Present/Cold Present'),
(22, 'Total', 'Present', 'Hot Absent/Cold Present'),
(23, 'None', 'None', 'Unknown'),
(24, 'None', 'None', 'Unknown'),
(25, 'None', 'None', 'Unknown'),
(26, 'None', 'None', 'Unknown'),
(36, 'Partial', 'Absent', 'Hot Present/Cold Absent');

-- --------------------------------------------------------

--
-- Table structure for table `smear_test`
--

CREATE TABLE `smear_test` (
  `rid` bigint(20) NOT NULL,
  `site` varchar(50) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `mi` float DEFAULT NULL,
  `bi` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smear_test`
--

INSERT INTO `smear_test` (`rid`, `site`, `pid`, `mi`, `bi`) VALUES
(3, 'Average', 2, 1.5, 1),
(3, 'Right Forearm', 2, 2, -1),
(3, 'Right Shoulder', 2, 1, 3),
(27, 'Average', 4, 12.5, 12),
(27, 'hand', 4, 12, 12),
(27, 'head', 4, 13, 12),
(28, 'Average', 4, 12.5, 12),
(28, 'hand', 4, 12, 12),
(28, 'head', 4, 13, 12),
(29, 'Average', 4, 12.5, 12),
(29, 'hand', 4, 12, 12),
(29, 'head', 4, 13, 12),
(30, 'Average', 4, 12.5, 12),
(30, 'hand', 4, 12, 12),
(30, 'head', 4, 13, 12),
(31, 'Average', 7, 0, 0),
(31, 'hand', 7, 12, 12),
(31, 'head', 7, 13, 12),
(32, 'Average', 7, 0, 0),
(32, 'hand', 7, 13, -1),
(32, 'head', 7, 12, 12),
(33, 'hand', 7, 5, 6),
(33, 'head', 7, 6, 5),
(34, 'Average', 7, 5.5, 5.5),
(34, 'hand', 7, 5, 6),
(34, 'head', 7, 6, 5),
(35, 'Average', 7, 0, 0),
(35, 'hand', 7, 13, 12),
(38, 'Average', 8, 13, 8.5),
(38, 'hand', 8, 13, 12),
(38, 'head', 8, 13, 5),
(39, 'Average', 8, 11.5, 16),
(39, 'face', 8, 16, 19),
(39, 'legs', 8, 7, 13);

-- --------------------------------------------------------

--
-- Table structure for table `treatment_record`
--

CREATE TABLE `treatment_record` (
  `rid` bigint(20) NOT NULL DEFAULT '0',
  `pid` bigint(20) NOT NULL,
  `opthalmic_involvement` varchar(50) DEFAULT NULL,
  `eyes` varchar(50) DEFAULT NULL,
  `skin_lesions` varchar(50) DEFAULT NULL,
  `result` varchar(100) DEFAULT NULL,
  `symptoms` varchar(100) DEFAULT NULL,
  `other_mdt_courses` varchar(50) DEFAULT NULL,
  `t_notes` varchar(100) DEFAULT NULL,
  `current_treatment` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `treatment_record`
--

INSERT INTO `treatment_record` (`rid`, `pid`, `opthalmic_involvement`, `eyes`, `skin_lesions`, `result`, `symptoms`, `other_mdt_courses`, `t_notes`, `current_treatment`) VALUES
(2, 2, 'Eyelids close and open fully', 'Vision is clear', 'No visible nodules or lumps', 'Reduction of rashes', 'Red skin patches and rashes', 'Dapsone and Ofloxacin', 'The patches are limited to arms\r\nNo other signs of leprosy elsewhere', NULL),
(22, 3, 'sdfgf', 'xcv', 'xcvxc', 'xcvz', 'fgsdfg', 'xcvz', 'zxv', NULL),
(23, 4, 'None', 'None', 'None', 'Unknown', 'None', 'None', 'None', NULL),
(24, 5, 'None', 'None', 'None', 'Unknown', 'None', 'None', 'None', NULL),
(25, 6, 'None', 'None', 'None', 'Unknown', 'None', 'None', 'None', NULL),
(26, 7, 'None', 'None', 'None', 'Unknown', 'None', 'None', 'None', NULL),
(36, 8, 'hello', '2', 'wassp', 'yes', 'flmfsdv', 'no', 'no', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, 'rahulgupta', 'rahul123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addiction`
--
ALTER TABLE `addiction`
  ADD PRIMARY KEY (`pid`,`addiction_type`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`pid`,`address`,`address_type`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`pid`,`mobile`);

--
-- Indexes for table `disability`
--
ALTER TABLE `disability`
  ADD PRIMARY KEY (`rid`,`grade`,`disability_area`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `drugs_prescribed`
--
ALTER TABLE `drugs_prescribed`
  ADD PRIMARY KEY (`rid`,`did`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `family_members`
--
ALTER TABLE `family_members`
  ADD UNIQUE KEY `pid` (`pid`),
  ADD UNIQUE KEY `pid_2` (`pid`,`fm_relation`,`fm_name`,`fm_age`);

--
-- Indexes for table `follow_up_record`
--
ALTER TABLE `follow_up_record`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD UNIQUE KEY `image_url` (`image_url`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `known_leprosy_contacts`
--
ALTER TABLE `known_leprosy_contacts`
  ADD UNIQUE KEY `pid` (`pid`,`kname`,`relation`,`contact`,`address`,`description`);

--
-- Indexes for table `leprosy_diagnosed`
--
ALTER TABLE `leprosy_diagnosed`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `leprosy_relations`
--
ALTER TABLE `leprosy_relations`
  ADD PRIMARY KEY (`pid`,`klpid`),
  ADD KEY `klpid` (`klpid`);

--
-- Indexes for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `next_appointment`
--
ALTER TABLE `next_appointment`
  ADD UNIQUE KEY `appointment_reason` (`appointment_reason`,`appointment_date`),
  ADD KEY `pid` (`fid`);

--
-- Indexes for table `obstetric_history`
--
ALTER TABLE `obstetric_history`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `past_drugs`
--
ALTER TABLE `past_drugs`
  ADD UNIQUE KEY `pid` (`pid`,`hospital`,`drugs`,`mmyy_start`,`mmyy_end`,`dosage`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `peripheral_nerves`
--
ALTER TABLE `peripheral_nerves`
  ADD PRIMARY KEY (`rid`,`nerves`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `reactions`
--
ALTER TABLE `reactions`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`rid`,`pid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `referred`
--
ALTER TABLE `referred`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `sensory_test`
--
ALTER TABLE `sensory_test`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `smear_test`
--
ALTER TABLE `smear_test`
  ADD PRIMARY KEY (`rid`,`site`);

--
-- Indexes for table `treatment_record`
--
ALTER TABLE `treatment_record`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `treatment_record_ibfk_1` (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `follow_up_record`
--
ALTER TABLE `follow_up_record`
  MODIFY `fid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `rid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addiction`
--
ALTER TABLE `addiction`
  ADD CONSTRAINT `addiction_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `disability`
--
ALTER TABLE `disability`
  ADD CONSTRAINT `disability_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `treatment_record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `drugs_prescribed`
--
ALTER TABLE `drugs_prescribed`
  ADD CONSTRAINT `drugs_prescribed_ibfk_3` FOREIGN KEY (`rid`) REFERENCES `record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `drugs_prescribed_ibfk_4` FOREIGN KEY (`did`) REFERENCES `drugs` (`did`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `family_members`
--
ALTER TABLE `family_members`
  ADD CONSTRAINT `family_members_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `follow_up_record`
--
ALTER TABLE `follow_up_record`
  ADD CONSTRAINT `follow_up_record_ibfk_1` FOREIGN KEY (`fid`) REFERENCES `record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `known_leprosy_contacts`
--
ALTER TABLE `known_leprosy_contacts`
  ADD CONSTRAINT `known_leprosy_contacts_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leprosy_diagnosed`
--
ALTER TABLE `leprosy_diagnosed`
  ADD CONSTRAINT `leprosy_diagnosed_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `treatment_record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leprosy_relations`
--
ALTER TABLE `leprosy_relations`
  ADD CONSTRAINT `leprosy_relations_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `leprosy_relations_ibfk_2` FOREIGN KEY (`klpid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD CONSTRAINT `medical_history_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `next_appointment`
--
ALTER TABLE `next_appointment`
  ADD CONSTRAINT `next_appointment_ibfk_1` FOREIGN KEY (`fid`) REFERENCES `follow_up_record` (`fid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `obstetric_history`
--
ALTER TABLE `obstetric_history`
  ADD CONSTRAINT `obstetric_history_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `past_drugs`
--
ALTER TABLE `past_drugs`
  ADD CONSTRAINT `past_drugs_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peripheral_nerves`
--
ALTER TABLE `peripheral_nerves`
  ADD CONSTRAINT `peripheral_nerves_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `treatment_record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reactions`
--
ALTER TABLE `reactions`
  ADD CONSTRAINT `reactions_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `treatment_record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `record_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `referred`
--
ALTER TABLE `referred`
  ADD CONSTRAINT `referred_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sensory_test`
--
ALTER TABLE `sensory_test`
  ADD CONSTRAINT `sensory_test_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `treatment_record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `smear_test`
--
ALTER TABLE `smear_test`
  ADD CONSTRAINT `smear_test_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `treatment_record`
--
ALTER TABLE `treatment_record`
  ADD CONSTRAINT `treatment_record_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `treatment_record_ibfk_2` FOREIGN KEY (`rid`) REFERENCES `record` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
