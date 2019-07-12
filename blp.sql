-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2019 at 10:08 AM
-- Server version: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `addiction_start` varchar(20) DEFAULT NULL,
  `addiction_end` varchar(20) DEFAULT NULL,
  `addiction_frequency` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addiction`
--

INSERT INTO `addiction` (`pid`, `addiction_type`, `addiction_start`, `addiction_end`, `addiction_frequency`) VALUES
(23, 'Alcohol', '', '', '0'),
(23, 'Cigarette', '', '', '0'),
(23, 'Tobacco', '', '', '5'),
(26, 'Alcohol', '', '', '0'),
(26, 'Cigarette', '', '', '0'),
(26, 'Tobacco', '', '', '0'),
(27, 'Alcohol', '', '', '0'),
(27, 'Cigarette', '', '', '0'),
(27, 'Tobacco', '', '', '0'),
(28, 'Alcohol', '', '', '0'),
(28, 'Cigarette', '', '', '0'),
(28, 'Tobacco', '', '', '0'),
(29, 'Alcohol', '', '', '0'),
(29, 'Cigarette', '', '', '0'),
(29, 'Tobacco', '', '', '0'),
(30, 'Alcohol', '', '', '0'),
(30, 'Cigarette', '', '', '0'),
(30, 'Tobacco', '', '', '0'),
(31, 'Alcohol', '', '', '0'),
(31, 'Cigarette', '', '', '0'),
(31, 'Tobacco', '', '', '0'),
(32, 'Alcohol', '', '', '0'),
(32, 'Cigarette', '', '', '0'),
(32, 'Tobacco', '', '', '0');

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
(23, 'Beside Paan Ki Dukaan,\r\nBihar', 'Permanent'),
(23, 'Opposite Bhojpuri Cinema,\r\nSion', 'Local'),
(26, 'None', 'Permanent'),
(27, 'None', 'Permanent'),
(28, 'None', 'Permanent'),
(29, 'None', 'Permanent'),
(30, 'None', 'Permanent'),
(31, 'None', 'Local'),
(31, 'None', 'Permanent'),
(32, 'None', 'Local'),
(32, 'None', 'Permanent');

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
(23, 0),
(23, 98654321),
(26, 0),
(27, 0),
(28, 0),
(29, 0),
(30, 0);

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
(21, 0, 'Grade0');

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
(1, 'penicillin'),
(2, 'cash'),
(3, 'some drug'),
(4, 'Ofloxin'),
(5, ''),
(6, 'Unknown');

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
(21, 4, '', '2019-07-07', '2019-08-06', '400'),
(29, 6, '', '2019-07-10', '2019-07-10', 'Unknown'),
(30, 6, '', '2019-07-10', '2019-07-10', 'Unknown');

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
(23, 'Husband', 'Subhash', 33, '', ''),
(32, 'Unknown', 'Unknown', 0, 'None', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `follow_up_record`
--

CREATE TABLE `follow_up_record` (
  `fid` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `clinical_notes` varchar(120) DEFAULT NULL,
  `prescription` varchar(120) DEFAULT NULL,
  `complaints` varchar(100) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `further_observations` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `pid` bigint(20) NOT NULL,
  `image_url` varchar(767) NOT NULL,
  `tags` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`pid`, `image_url`, `tags`) VALUES
(23, 'P23_PB_BT_LL_PNL_20190707_1.png', NULL),
(23, 'P23_PB_BT_LL_PNL_20190707_2.png', NULL);

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
(23, 'Anonymous', 'Unknown', '0', 'Unknown', 'None'),
(26, 'Anonymous', 'Unknown', '0', 'Unknown', 'None'),
(27, 'Anonymous', 'Unknown', '0', 'Unknown', 'None'),
(30, 'Anonymous', 'Unknown', '0', 'Unknown', 'None'),
(31, 'Anonymous', 'Unknown', '0', 'Unknown', 'None'),
(32, 'Anonymous', 'Unknown', '0', 'Unknown', 'None');

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
(21, 1, 0, 0, 1, 0, 0, 1, 1),
(24, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 0, 0, 0, 0, 0, 0, 0, 0);

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
(23, 'Heart Stroke', NULL, NULL),
(26, 'None', NULL, NULL),
(27, 'None', NULL, NULL),
(28, 'None', NULL, NULL),
(29, 'None', NULL, NULL),
(30, 'None', NULL, NULL),
(31, 'None', NULL, NULL),
(32, 'None', NULL, NULL);

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
(26, 'This should work'),
(27, 'This should work');

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
(23, 'Unknown', 'Unknown', '2018-10-02', '2018-12-29', 'Unknown'),
(26, 'Unknown', 'Unknown', '', '', 'Unknown'),
(27, 'Unknown', 'Unknown', '', '', 'Unknown'),
(30, 'Unknown', 'Unknown', '', '', 'Unknown'),
(31, 'Unknown', 'Unknown', '2019-07-10', '2019-07-10', 'Unknown'),
(32, 'Unknown', 'Unknown', '2019-07-10', '2019-07-10', 'Unknown');

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
(23, 'HO', '1270', 1),
(26, 'ESIS', '234', 1),
(27, 'ESIS', '234', 1),
(28, 'HO', '0', 1),
(29, 'HO', '0', 1),
(30, 'SG', '2089', 1),
(31, 'DHUHC', '456', 1),
(32, 'DHUHC', '456', 1);

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
(21, 'Great Auricular', 'No', 'No'),
(21, 'Lateral Popliteal', 'No', 'No'),
(21, 'Medial Cutaneous', '', ''),
(21, 'Posterior Tibial', 'No', 'No'),
(21, 'Radial Cutaneous', 'No', 'No'),
(21, 'Superficial Peroneal', 'No', 'No'),
(21, 'Supra orbital', 'No', 'No'),
(21, 'Sural Nerve', 'No', 'No'),
(21, 'Ulnar', 'No', 'No'),
(24, 'Great Auricular', 'No', 'No'),
(24, 'Lateral Popliteal', 'No', 'No'),
(24, 'Medial Cutaneous', '', ''),
(24, 'Posterior Tibial', 'No', 'No'),
(24, 'Radial Cutaneous', 'No', 'No'),
(24, 'Superficial Peroneal', 'No', 'No'),
(24, 'Supra orbital', 'No', 'No'),
(24, 'Sural Nerve', 'No', 'No'),
(24, 'Ulnar', 'No', 'No'),
(25, 'Great Auricular', 'No', 'No'),
(25, 'Lateral Popliteal', 'No', 'No'),
(25, 'Medial Cutaneous', '', ''),
(25, 'Posterior Tibial', 'No', 'No'),
(25, 'Radial Cutaneous', 'No', 'No'),
(25, 'Superficial Peroneal', 'No', 'No'),
(25, 'Supra orbital', 'No', 'No'),
(25, 'Sural Nerve', 'No', 'No'),
(25, 'Ulnar', 'No', 'No'),
(26, 'Great Auricular', 'No', 'No'),
(26, 'Lateral Popliteal', 'No', 'No'),
(26, 'Medial Cutaneous', '', ''),
(26, 'Posterior Tibial', 'No', 'No'),
(26, 'Radial Cutaneous', 'No', 'No'),
(26, 'Superficial Peroneal', 'No', 'No'),
(26, 'Supra orbital', 'No', 'No'),
(26, 'Sural Nerve', 'No', 'No'),
(26, 'Ulnar', 'No', 'No'),
(27, 'Great Auricular', 'No', 'No'),
(27, 'Lateral Popliteal', 'No', 'No'),
(27, 'Medial Cutaneous', '', ''),
(27, 'Posterior Tibial', 'No', 'No'),
(27, 'Radial Cutaneous', 'No', 'No'),
(27, 'Superficial Peroneal', 'No', 'No'),
(27, 'Supra orbital', 'No', 'No'),
(27, 'Sural Nerve', 'No', 'No'),
(27, 'Ulnar', 'No', 'No'),
(28, 'Great Auricular', 'No', 'No'),
(28, 'Lateral Popliteal', 'No', 'No'),
(28, 'Medial Cutaneous', '', ''),
(28, 'Posterior Tibial', 'No', 'No'),
(28, 'Radial Cutaneous', 'No', 'No'),
(28, 'Superficial Peroneal', 'No', 'No'),
(28, 'Supra orbital', 'No', 'No'),
(28, 'Sural Nerve', 'No', 'No'),
(28, 'Ulnar', 'No', 'No'),
(29, 'Great Auricular', 'No', 'No'),
(29, 'Lateral Popliteal', 'No', 'No'),
(29, 'Medial Cutaneous', '', ''),
(29, 'Posterior Tibial', 'No', 'No'),
(29, 'Radial Cutaneous', 'No', 'No'),
(29, 'Superficial Peroneal', 'No', 'No'),
(29, 'Supra orbital', 'No', 'No'),
(29, 'Sural Nerve', 'No', 'No'),
(29, 'Ulnar', 'No', 'No'),
(30, 'Great Auricular', 'No', 'No'),
(30, 'Lateral Popliteal', 'No', 'No'),
(30, 'Medial Cutaneous', '', ''),
(30, 'Posterior Tibial', 'No', 'No'),
(30, 'Radial Cutaneous', 'No', 'No'),
(30, 'Superficial Peroneal', 'No', 'No'),
(30, 'Supra orbital', 'No', 'No'),
(30, 'Sural Nerve', 'No', 'No'),
(30, 'Ulnar', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `pid` bigint(20) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
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

INSERT INTO `person` (`pid`, `fname`, `mname`, `lname`, `dob`, `sex`, `aadhar`, `occupation`, `person_created`, `person_updated`, `economical_status`, `caste`, `age`, `allergy`, `clinic`, `referred`) VALUES
(23, 'Smita Bhojpuri', NULL, NULL, '1990-08-20', 'Male', 123423456789, 'Radio Jockey at India\'s Got Radio', '2019-07-06 23:47:22', '2019-07-06 23:47:22', 'Non-BPL', 'ST', 28, 'School Exams', 'HO', 'Dr.Kulkarni'),
(26, 'Random Name', NULL, NULL, '0000-01-01', 'female', 0, 'None', '2019-07-06 23:58:29', '2019-07-06 23:58:29', 'BPL', 'Others', 35, 'None', 'ESIS', 'None'),
(27, 'Random Name', NULL, NULL, '0000-01-01', 'female', 0, 'None', '2019-07-07 00:12:29', '2019-07-07 00:12:29', 'BPL', 'Others', 35, 'None', 'ESIS', 'None'),
(28, 'Anonymous', NULL, NULL, '0000-01-01', 'Male', 0, 'None', '2019-07-07 06:52:54', '2019-07-07 06:52:54', 'Non-BPL', 'Others', 0, 'None', 'HO', 'None'),
(29, 'Anonymous', NULL, NULL, '0000-01-01', 'Male', 0, 'None', '2019-07-07 07:49:59', '2019-07-07 07:49:59', 'Non-BPL', 'Others', 0, 'None', 'HO', 'None'),
(30, 'Kuldeep yadav', NULL, NULL, '0000-01-01', 'male', 0, 'None', '2019-07-10 00:23:08', '2019-07-10 00:23:08', 'BPL', 'Others', 0, 'None', 'SG', 'None'),
(31, 'Kabir Joker', NULL, NULL, '0000-01-01', 'male', 0, 'None', '2019-07-10 01:09:03', '2019-07-10 01:09:03', 'BPL', 'Others', 0, 'None', 'DHUHC', 'None'),
(32, 'Kabir Joker', NULL, NULL, '0000-01-01', 'male', 0, 'None', '2019-07-10 01:10:31', '2019-07-10 01:10:31', 'BPL', 'Others', 0, 'None', 'DHUHC', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `reactions`
--

CREATE TABLE `reactions` (
  `rid` bigint(20) NOT NULL,
  `type_reaction` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `neuritis` varchar(20) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reactions`
--

INSERT INTO `reactions` (`rid`, `type_reaction`, `description`, `neuritis`) VALUES
(21, 'Type2', 'Lepra Reaction aroind the LL pole of spectrum', 'Neuritis'),
(24, 'None', 'None', 'No'),
(25, 'None', 'None', 'No'),
(26, 'None', 'None', 'No'),
(27, 'None', 'None', 'No'),
(28, 'None', 'None', 'No'),
(29, 'None', 'None', 'No'),
(30, 'None', 'None', 'No');

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
(21, 23, '2019-07-07 00:00:00', 'Dr.Pratima'),
(24, 26, '2019-07-07 00:00:00', 'Unknown'),
(25, 27, '2019-07-07 00:00:00', 'Unknown'),
(26, 28, '2019-07-07 00:00:00', 'Unknown'),
(27, 29, '2019-07-07 00:00:00', 'Unknown'),
(28, 30, '2019-07-10 00:00:00', 'Unknown'),
(29, 31, '2019-07-10 00:00:00', 'Unknown'),
(30, 32, '2019-07-10 00:00:00', 'Unknown');

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
(21, 'Partial', 'Present', 'Hot Present/Cold Absent'),
(24, 'None', 'None', 'Unknown'),
(25, 'None', 'None', 'Unknown'),
(26, 'None', 'None', 'Unknown'),
(27, 'None', 'None', 'Unknown'),
(28, 'None', 'None', 'Unknown'),
(29, 'None', 'None', 'Unknown'),
(30, 'None', 'None', 'Unknown');

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
  `t_notes` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `treatment_record`
--

INSERT INTO `treatment_record` (`rid`, `pid`, `opthalmic_involvement`, `eyes`, `skin_lesions`, `result`, `symptoms`, `other_mdt_courses`, `t_notes`) VALUES
(21, 23, 'Ocular manifestation is under control', 'Good condition', 'Damage and disfiguring', 'Decrease in redness and blisters. Patches have shrunk in size.', 'Blisters and redness', 'Combination of Rifampicin, clofazimine, dapsone', 'Initial stage of Leprosy.\r\nHere are some $ymbo!s to "test" character\'s es<ape.'),
(24, 26, 'None', 'None', 'None', 'Unknown', 'None', 'None', 'None'),
(25, 27, 'None', 'None', 'None', 'Unknown', 'None', 'None', 'None'),
(26, 28, 'None', 'None', 'None', 'Unknown', 'None', 'None', 'None'),
(27, 29, 'None', 'None', 'None', 'Unknown', 'None', 'None', 'None'),
(28, 30, 'None', 'None', 'None', 'Unknown', 'None', 'None', 'None'),
(29, 31, 'None', 'None', 'None', 'Unknown', 'None', 'None', 'None'),
(30, 32, 'None', 'None', 'None', 'Unknown', 'None', 'None', 'None');

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
(3, 'rahulgupta', 'rahul123');

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
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `follow_up_record`
--
ALTER TABLE `follow_up_record`
  MODIFY `fid` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `rid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
