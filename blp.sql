-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2019 at 12:41 AM
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
  `addiction_notes` varchar(50) DEFAULT NULL,
  `addiction_frequency` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addiction`
--

INSERT INTO `addiction` (`pid`, `addiction_type`, `addiction_notes`, `addiction_frequency`) VALUES
(2, 'Alcohol', 'Local Alcohol', '20'),
(2, 'Cigarette', 'Hand Made Cigarette', '1'),
(2, 'Tobacco', 'Shaggies', '5');

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
(2, 'Flat No. 5, Maichel Patel Chawl,\r\nDharavi Main Road,\r\nKoliwada', 'Local');

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
(2, 1234567890);

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
(2, 1, 'Hand');

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
(2, 'Clofazimine');

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
(2, 2, '', '2019-07-13', '2019-07-11', '400');

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
(2, 'Husband', 'Mahesh', 35, 'Diabetes', 'Taking medication since 3 months');

-- --------------------------------------------------------

--
-- Table structure for table `follow_up_record`
--

CREATE TABLE `follow_up_record` (
  `fid` bigint(20) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `clinical_notes` varchar(200) DEFAULT NULL,
  `prescription` varchar(200) DEFAULT NULL,
  `complaints` varchar(200) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `further_observations` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow_up_record`
--

INSERT INTO `follow_up_record` (`fid`, `pid`, `clinical_notes`, `prescription`, `complaints`, `due_date`, `further_observations`) VALUES
(3, 2, 'None', 'None', 'None', NULL, NULL);

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
(2, 'P2_PB_TT_BT_20190713_1.jpeg', NULL),
(2, 'P2_PB_TT_BT_20190713_2.jpeg', NULL);

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
(2, 'Sujata Mathur', 'Neighbour', '9876501234', 'Flat No. 6, Maichel Patel Chawl, Dharavi Main Road, Koliwada', 'White patches on arm');

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
(2, 1, 0, 1, 1, 0, 0, 0, 0);

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
(2, 'Dengue last year', NULL, NULL);

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
(2, 'Twins.A girl and a boy 3 years old ');

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
(2, 'Chhota Sion', 'Prednisone', '2018-12-07', '2018-12-28', '40');

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
(2, 'HO', '911', 1);

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
(2, 'Ulnar', 'No', 'No');

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
(2, 'Trishla Kayastha', NULL, NULL, '1990-08-25', 'female', 908786545321, 'Shop Keeper', '2019-07-13 16:49:09', '2019-07-13 16:49:09', 'Non-BPL', 'SC', 28, 'Pollen Allergy', 'HO', 'Dr.Kulkarni');

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
(2, 'Type1', 'Red skin patches and rashes and other light coloured patches on body', 'Neuritis');

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
(3, 2, '2019-07-13 00:00:00', 'Dr. Fatima');

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
(2, 'Total', 'Present', 'Hot Present/Cold Present');

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
(3, 'Right Shoulder', 2, 1, 3);

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
(2, 2, 'Eyelids close and open fully', 'Vision is clear', 'No visible nodules or lumps', 'Reduction of rashes', 'Red skin patches and rashes', 'Dapsone and Ofloxacin', 'The patches are limited to arms\r\nNo other signs of leprosy elsewhere');

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
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `follow_up_record`
--
ALTER TABLE `follow_up_record`
  MODIFY `fid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `rid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
