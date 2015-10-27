-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2015 at 02:44 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `workstarter`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_employer`
--

CREATE TABLE IF NOT EXISTS `add_employer` (
  `userid` varchar(50) NOT NULL,
  `sir_title` varchar(10) NOT NULL,
  `company_first_name` varchar(100) NOT NULL,
  `company_last_name` varchar(100) NOT NULL,
  `company_email` varchar(50) NOT NULL,
  `company_telephone` varchar(20) NOT NULL,
  `company_title` int(250) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_address` varchar(400) NOT NULL,
  `company_city` varchar(70) NOT NULL,
  `company_website` varchar(100) NOT NULL,
  `company_postal_code` varchar(20) NOT NULL,
  `company_country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `add_student`
--

CREATE TABLE IF NOT EXISTS `add_student` (
  `userid` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `current_form` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_student`
--

INSERT INTO `add_student` (`userid`, `first_name`, `last_name`, `current_form`, `gender`, `email`) VALUES
('schoolmahender', 'Mahender', 'Singh', 'no', 'Please Sel', 'msdusad@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `add_users`
--

CREATE TABLE IF NOT EXISTS `add_users` (
  `userid` varchar(50) NOT NULL,
  `salutation` varchar(7) NOT NULL,
  `user_first_name` varchar(100) NOT NULL,
  `user_last_name` varchar(100) NOT NULL,
  `user_job_title` varchar(200) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_telephone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `create_vacancy`
--

CREATE TABLE IF NOT EXISTS `create_vacancy` (
  `userid` varchar(50) NOT NULL,
  `vacancy_title` varchar(1000) NOT NULL,
  `vacancy_location` varchar(50) NOT NULL,
  `vacancy_description` varchar(1000) NOT NULL,
  `number_places` varchar(20) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `from_date1` varchar(20) NOT NULL,
  `from_date2` varchar(20) NOT NULL,
  `from_date3` varchar(20) NOT NULL,
  `to_date1` varchar(20) NOT NULL,
  `to_date2` varchar(20) NOT NULL,
  `to_date3` varchar(20) NOT NULL,
  `restriction_gender` varchar(200) NOT NULL,
  `schooling_level` varchar(50) NOT NULL,
  `selected_school_name` varchar(500) NOT NULL,
  `automatic_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_vacancy`
--

INSERT INTO `create_vacancy` (`userid`, `vacancy_title`, `vacancy_location`, `vacancy_description`, `number_places`, `duration`, `from_date1`, `from_date2`, `from_date3`, `to_date1`, `to_date2`, `to_date3`, `restriction_gender`, `schooling_level`, `selected_school_name`, `automatic_date`) VALUES
('employermahender', 'php developer', 'Solihull Branch', 'No Desciption', '3', '2 Weeks', '12/3/2015', '12/6/2015', '', '19/3/2015', '15/6/2015', '', 'Male Candidates Only', 'GCSE students only', 'no', '2015-08-19 17:28:58'),
('employermahender', 'php developer', 'Solihull Branch', 'No Desciption', '3', '2 Weeks', '12/3/2015', '12/6/2015', '', '19/3/2015', '15/6/2015', '', 'Male Candidates Only', 'GCSE students only', 'no', '2015-08-19 17:32:53'),
('employermahender', 'php developer', 'Solihull Branch', 'No Desciption', '3', '2 Weeks', '12/3/2015', '12/6/2015', '', '19/3/2015', '15/6/2015', '', 'Male Candidates Only', 'GCSE students only', 'no', '2015-08-19 17:33:19'),
('employermahender', '', '', '', 'Please Select', 'Please Select', '', '', '', '', '', '', 'Any', 'Any', '', '2015-08-19 17:45:29'),
('employermahender', '', '', '', 'Please Select', 'Please Select', '', '', '', '', '', '', 'Any', 'Any', '', '2015-08-19 17:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `employer_location`
--

CREATE TABLE IF NOT EXISTS `employer_location` (
  `userid` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `type_of_location` varchar(50) NOT NULL,
  `location_name` varchar(100) NOT NULL,
  `contact_title` varchar(10) NOT NULL,
  `contact_first_name` varchar(100) NOT NULL,
  `contact_last_name` varchar(100) NOT NULL,
  `conatct_email` varchar(50) NOT NULL,
  `contact_telephone` varchar(20) NOT NULL,
  `location_address` varchar(400) NOT NULL,
  `location_city` varchar(100) NOT NULL,
  `location_postal_code` varchar(20) NOT NULL,
  `create_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_location`
--

INSERT INTO `employer_location` (`userid`, `company_name`, `type_of_location`, `location_name`, `contact_title`, `contact_first_name`, `contact_last_name`, `conatct_email`, `contact_telephone`, `location_address`, `location_city`, `location_postal_code`, `create_time`) VALUES
('employermahender', 'location', 'Branch', 'location Name', 'Mrs', 'Mahender', 'Singh', 'msdusad@gmail.com', '09991106434', 'Ramlwas', 'Bhiwani', '127310', '0000-00-00 00:00:00'),
('employermahender', 'deho', 'Branch', 'Noida', 'Mr', 'ss', 'bhowmic', 'ww@nex.in', '999110', 'India', 'noida', '127310', '2015-08-19 17:17:33'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahender', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderss', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderss', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderss', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderss', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderss', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderss', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderss', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderss', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderssf', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('employermahenderssf', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('testing', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('testing', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('testing', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('testing', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('testinghhh', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('testinghhh', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('testing', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employer_registration`
--

CREATE TABLE IF NOT EXISTS `employer_registration` (
  `userid` varchar(50) NOT NULL,
  `company_terms` varchar(10) NOT NULL,
  `company_first_name` varchar(200) NOT NULL,
  `company_last_name` varchar(200) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `company_address` varchar(5000) NOT NULL,
  `company_region` varchar(200) NOT NULL,
  `company_city` varchar(100) NOT NULL,
  `company_postal_code` varchar(20) NOT NULL,
  `company_telephone` varchar(20) NOT NULL,
  `company_title` varchar(250) NOT NULL,
  `company_website` varchar(100) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `join_date` datetime NOT NULL,
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_registration`
--

INSERT INTO `employer_registration` (`userid`, `company_terms`, `company_first_name`, `company_last_name`, `company_email`, `company_name`, `company_address`, `company_region`, `company_city`, `company_postal_code`, `company_telephone`, `company_title`, `company_website`, `logo`, `join_date`) VALUES
('employermahender', 'checked', 'Mrs S.S', 'Bhowmic', 'msdusad@gmail.com', 'Nexg-Skills', 'C-28', 'Up', 'Noida', '127310', '9991106434', 'Software Tecnology', '', 'comshu.png', '2015-08-19 17:13:14'),
('employermahenderss', 'checked', 'Mrs testing', 'testing', 'testing@gmail.com', 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', '', '', '2015-08-20 14:41:58'),
('employermahenderssf', 'checked', 'Mrs testing', 'testing', 'testing@gmail.com', 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', '', '', '2015-08-20 16:28:25'),
('testing', 'unchecked', 'Mrs testing', 'testing', 'testing@gmail.com', 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', '', '', '2015-08-20 17:00:53'),
('testinghhh', 'unchecked', 'Mrs testing', 'testing', 'testing@gmail.com', 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', 'testing', '', '', '2015-08-20 17:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `interview_invitation`
--

CREATE TABLE IF NOT EXISTS `interview_invitation` (
  `student_invite` varchar(50) NOT NULL,
  `employer_sent` varchar(50) NOT NULL,
  `proposed_interview_date` varchar(10) NOT NULL,
  `contact_form_confirmation` varchar(100) NOT NULL,
  `email_for_confirmation` varchar(50) NOT NULL,
  `telephone_for_confirmation` varchar(20) NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview_invitation`
--

INSERT INTO `interview_invitation` (`student_invite`, `employer_sent`, `proposed_interview_date`, `contact_form_confirmation`, `email_for_confirmation`, `telephone_for_confirmation`, `message`) VALUES
('studentmahender', 'employermahender', '12/7/13', 'SS.Bhowmic', 'info@nexg.in', '5555555', 'no Message');

-- --------------------------------------------------------

--
-- Table structure for table `job_applied`
--

CREATE TABLE IF NOT EXISTS `job_applied` (
  `student_userid` varchar(100) NOT NULL,
  `cover_letter` varchar(800) NOT NULL,
  `send_media` varchar(10) NOT NULL,
  `company_userid` varchar(100) NOT NULL,
  `vacancy_time` datetime NOT NULL,
  `apply_time` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_applied`
--

INSERT INTO `job_applied` (`student_userid`, `cover_letter`, `send_media`, `company_userid`, `vacancy_time`, `apply_time`, `status`) VALUES
('studentmahender', 'cover letter hear', 'yes', 'employermahender', '2015-08-19 17:33:19', '2015-08-19 17:36:13', 'Pending'),
('studentmahender', 'cover letter hear', 'yes', 'employermahender', '2015-08-19 17:33:19', '2015-08-19 17:37:24', 'Rejected'),
('studentmahender', 'no', 'yes', 'employermahender', '2015-08-19 17:33:19', '2015-08-19 18:09:03', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `userid` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `email_confirmation` text NOT NULL,
  `last_login` datetime NOT NULL,
  UNIQUE KEY `userid` (`userid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `password`, `email`, `category`, `email_confirmation`, `last_login`) VALUES
('employermahender', '6f8f57715090da2632453988d9a1501b', 'mdusad@gmail.com', 'Employer', '', '0000-00-00 00:00:00'),
('employermahenderss', '6f8f57715090da2632453988d9a1501b', 'testing@gmail.com', 'Employer', '', '0000-00-00 00:00:00'),
('gfhgh', '2b287ba353732ca25cc95a4222017921', 'ghg@gmail.com', 'Student', '', '0000-00-00 00:00:00'),
('schoolmahender', '6f8f57715090da2632453988d9a1501b', 'msd@gmail.com', 'School', '', '2015-08-19 18:16:17'),
('studentmahender', '6f8f57715090da2632453988d9a1501b', 'msdusa@gmail.com', 'Student', '', '2015-08-20 11:21:33'),
('testing', '6f8f57715090da2632453988d9a1501b', 'testing@gmail.comg', 'Employer', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reject_applications`
--

CREATE TABLE IF NOT EXISTS `reject_applications` (
  `student_id` varchar(50) NOT NULL,
  `employer_id` varchar(50) NOT NULL,
  `rejection_message` varchar(500) NOT NULL,
  `rejection_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reject_applications`
--

INSERT INTO `reject_applications` (`student_id`, `employer_id`, `rejection_message`, `rejection_time`) VALUES
('studentmahender', 'employermahender', 'no', '2015-08-19 17:53:21');

-- --------------------------------------------------------

--
-- Table structure for table `school_registration`
--

CREATE TABLE IF NOT EXISTS `school_registration` (
  `userid` varchar(50) NOT NULL,
  `school_first_name` varchar(200) NOT NULL,
  `school_last_name` varchar(200) NOT NULL,
  `school_email` varchar(50) NOT NULL,
  `school_name` varchar(200) NOT NULL,
  `school_address` varchar(500) NOT NULL,
  `school_region` varchar(200) NOT NULL,
  `school_city` varchar(100) NOT NULL,
  `school_postal_code` varchar(20) NOT NULL,
  `school_telephone` varchar(20) NOT NULL,
  `school_title` varchar(250) NOT NULL,
  `school_terms` varchar(10) NOT NULL,
  `school_name_title` varchar(10) NOT NULL,
  `school_website` varchar(100) NOT NULL,
  `school_logo` varchar(100) NOT NULL,
  UNIQUE KEY `school_name` (`school_name`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_registration`
--

INSERT INTO `school_registration` (`userid`, `school_first_name`, `school_last_name`, `school_email`, `school_name`, `school_address`, `school_region`, `school_city`, `school_postal_code`, `school_telephone`, `school_title`, `school_terms`, `school_name_title`, `school_website`, `school_logo`) VALUES
('schoolmahender', 'Prittam', 'Singh', 'msdusad@gmail.com', 'Arya sr sec school', 'Jhojhu Kalan', 'Haryana', 'Bhiwani', '127310', '99999', 'HBSE', 'unchecked', 'Mrs', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_achievements`
--

CREATE TABLE IF NOT EXISTS `student_achievements` (
  `userid` varchar(50) NOT NULL,
  `achievement1` varchar(300) NOT NULL,
  `achievement2` varchar(300) NOT NULL,
  `achievement3` varchar(300) NOT NULL,
  `achievement4` varchar(300) NOT NULL,
  `interest1` varchar(300) NOT NULL,
  `interest2` varchar(300) NOT NULL,
  `interest3` varchar(300) NOT NULL,
  `interest4` varchar(300) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_achievements`
--

INSERT INTO `student_achievements` (`userid`, `achievement1`, `achievement2`, `achievement3`, `achievement4`, `interest1`, `interest2`, `interest3`, `interest4`) VALUES
('gfhgh', '', '', '', '', '', '', '', ''),
('studentmahender', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_cv`
--

CREATE TABLE IF NOT EXISTS `student_cv` (
  `userid` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `cv` varchar(2000) NOT NULL,
  `video` varchar(200) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `school_address` varchar(400) NOT NULL,
  `school_city` varchar(100) NOT NULL,
  `school_region` varchar(50) NOT NULL,
  `school_postalcode` varchar(20) NOT NULL,
  `gcsc_school_start_month` varchar(20) NOT NULL,
  `gcsc_school_start_year` varchar(10) NOT NULL,
  `currently_studying` varchar(10) NOT NULL,
  `gcse_summary` varchar(300) NOT NULL,
  `subject1` varchar(50) NOT NULL,
  `subject2` varchar(50) NOT NULL,
  `subject3` varchar(50) NOT NULL,
  `subject4` varchar(50) NOT NULL,
  `subject5` varchar(50) NOT NULL,
  `subject6` varchar(50) NOT NULL,
  `subject7` varchar(50) NOT NULL,
  `subject8` varchar(50) NOT NULL,
  `subject9` varchar(50) NOT NULL,
  `subject10` varchar(50) NOT NULL,
  `subject11` varchar(50) NOT NULL,
  `expected_grade1` varchar(10) NOT NULL,
  `expected_grade2` varchar(10) NOT NULL,
  `expected_grade3` varchar(10) NOT NULL,
  `expected_grade4` varchar(10) NOT NULL,
  `expected_grade5` varchar(10) NOT NULL,
  `expected_grade6` varchar(10) NOT NULL,
  `expected_grade7` varchar(10) NOT NULL,
  `expected_grade8` varchar(10) NOT NULL,
  `expected_grade9` varchar(10) NOT NULL,
  `expected_grade10` varchar(10) NOT NULL,
  `expected_grade11` varchar(10) NOT NULL,
  `alevels_summary` varchar(300) NOT NULL,
  `alevel_subject1` varchar(50) NOT NULL,
  `alevel_subject2` varchar(50) NOT NULL,
  `alevel_subject3` varchar(50) NOT NULL,
  `alevel_subject4` varchar(50) NOT NULL,
  `alevel_subject5` varchar(50) NOT NULL,
  `alevel_expected_grade1` varchar(10) NOT NULL,
  `alevel_expected_grade2` varchar(10) NOT NULL,
  `alevel_expected_grade3` varchar(10) NOT NULL,
  `alevel_expected_grade4` varchar(10) NOT NULL,
  `alevel_expected_grade5` varchar(10) NOT NULL,
  `select_school_same` varchar(10) NOT NULL,
  `other_school_name` varchar(200) NOT NULL,
  `other_school_address` varchar(400) NOT NULL,
  `other_school_city` varchar(100) NOT NULL,
  `other_school_region` varchar(50) NOT NULL,
  `other_school_postalcode` varchar(20) NOT NULL,
  `other_school_start_month` varchar(20) NOT NULL,
  `other_school_start_year` varchar(20) NOT NULL,
  `other_school_end_month` varchar(20) NOT NULL,
  `other_school_end_year` varchar(20) NOT NULL,
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_cv`
--

INSERT INTO `student_cv` (`userid`, `first_name`, `last_name`, `email`, `website`, `cv`, `video`, `school_name`, `school_address`, `school_city`, `school_region`, `school_postalcode`, `gcsc_school_start_month`, `gcsc_school_start_year`, `currently_studying`, `gcse_summary`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `subject10`, `subject11`, `expected_grade1`, `expected_grade2`, `expected_grade3`, `expected_grade4`, `expected_grade5`, `expected_grade6`, `expected_grade7`, `expected_grade8`, `expected_grade9`, `expected_grade10`, `expected_grade11`, `alevels_summary`, `alevel_subject1`, `alevel_subject2`, `alevel_subject3`, `alevel_subject4`, `alevel_subject5`, `alevel_expected_grade1`, `alevel_expected_grade2`, `alevel_expected_grade3`, `alevel_expected_grade4`, `alevel_expected_grade5`, `select_school_same`, `other_school_name`, `other_school_address`, `other_school_city`, `other_school_region`, `other_school_postalcode`, `other_school_start_month`, `other_school_start_year`, `other_school_end_month`, `other_school_end_year`) VALUES
('gfhgh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('studentmahender', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_preferences`
--

CREATE TABLE IF NOT EXISTS `student_preferences` (
  `userid` varchar(50) NOT NULL,
  `all_jobs` varchar(8) NOT NULL,
  `banking_finance` varchar(8) NOT NULL,
  `retail` varchar(8) NOT NULL,
  `construction` varchar(8) NOT NULL,
  `legal` varchar(8) NOT NULL,
  `medical` varchar(8) NOT NULL,
  `other` varchar(8) NOT NULL,
  `newsletter` varchar(8) NOT NULL,
  `vacancies_distance` varchar(5) NOT NULL,
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_preferences`
--

INSERT INTO `student_preferences` (`userid`, `all_jobs`, `banking_finance`, `retail`, `construction`, `legal`, `medical`, `other`, `newsletter`, `vacancies_distance`) VALUES
('gfhgh', '', '', '', '', '', '', '', '', ''),
('studentmahender', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '5');

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE IF NOT EXISTS `student_profile` (
  `userid` varchar(50) NOT NULL,
  `home_address` varchar(1000) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob_day` varchar(2) NOT NULL,
  `dob_month` varchar(20) NOT NULL,
  `dob_year` varchar(10) NOT NULL,
  `t_c` tinyint(1) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `website` varchar(250) NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `joining_date` datetime NOT NULL,
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`userid`, `home_address`, `phone`, `email`, `dob_day`, `dob_month`, `dob_year`, `t_c`, `first_name`, `last_name`, `gender`, `city`, `region`, `postal_code`, `website`, `profile_picture`, `video`, `cv`, `joining_date`) VALUES
('gfhgh', '', '', 'ghg@gmail.com', '1', 'March', '2008', 1, 'ghg', 'hgh', 'Male', '', '', '', '', '', '', '', '2015-08-20 10:14:16'),
('studentmahender', 'no address', '', 'msdusad@gmail.com', '15', 'February', '1995', 1, 'Mahender', 'Singh', 'Male', 'ciry', 'region', 'ps', '', 'crown.jpg', '', '', '2015-08-19 14:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `student_school`
--

CREATE TABLE IF NOT EXISTS `student_school` (
  `userid` varchar(50) NOT NULL,
  `school_name` varchar(300) NOT NULL,
  `school_address` varchar(2000) NOT NULL,
  `school_city` varchar(150) NOT NULL,
  `school_region` varchar(50) NOT NULL,
  `school_postalcode` varchar(20) NOT NULL,
  `school_contact_sr` varchar(20) NOT NULL,
  `school_contact_fname` varchar(100) NOT NULL,
  `school_contact_lname` varchar(100) NOT NULL,
  `school_phone` varchar(20) NOT NULL,
  `school_email` varchar(100) NOT NULL,
  `school_website` varchar(100) NOT NULL,
  `reference_by_school` varchar(400) NOT NULL,
  `attendance_record` varchar(10) NOT NULL,
  `ref_from` varchar(20) NOT NULL,
  `ref_to` varchar(20) NOT NULL,
  `ref_comment` varchar(300) NOT NULL,
  `ref_date` datetime NOT NULL,
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_school`
--

INSERT INTO `student_school` (`userid`, `school_name`, `school_address`, `school_city`, `school_region`, `school_postalcode`, `school_contact_sr`, `school_contact_fname`, `school_contact_lname`, `school_phone`, `school_email`, `school_website`, `reference_by_school`, `attendance_record`, `ref_from`, `ref_to`, `ref_comment`, `ref_date`) VALUES
('gfhgh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('studentmahender', '', '', '', '', '', 'Mr', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
