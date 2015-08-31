-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2015 at 03:19 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tree_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_types`
--

CREATE TABLE IF NOT EXISTS `contact_types` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(50) NOT NULL,
  `contact_status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact_types`
--

INSERT INTO `contact_types` (`contact_id`, `contact_name`, `contact_status`) VALUES
(1, 'Customer', 1),
(2, 'Property Manager', 1),
(3, 'Tenant', 1),
(4, 'Neighbour', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'administrator', 'Administrator'),
(2, 'manager', 'Manager'),
(3, 'contractor', 'Contractor'),
(4, 'user', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `job_contacts`
--

CREATE TABLE IF NOT EXISTS `job_contacts` (
  `job_contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `job_risk_address` varchar(200) NOT NULL,
  `state_id` int(11) NOT NULL,
  `job_risk_suburb` varchar(30) NOT NULL,
  `job_risk_postcode` varchar(30) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `job_main_contact` int(1) NOT NULL,
  `job_first_name` varchar(50) NOT NULL,
  `job_surname` varchar(50) NOT NULL,
  `job_company` varchar(50) NOT NULL,
  `job_contact_address` varchar(200) NOT NULL,
  `job_contact_state` varchar(30) NOT NULL,
  `job_contact_suburb` varchar(30) NOT NULL,
  `job_contact_postcode` varchar(30) NOT NULL,
  `job_mobile` varchar(30) NOT NULL,
  `job_is_mobile_best` int(1) NOT NULL,
  `job_phone` varchar(30) NOT NULL,
  `job_is_phone_best` int(1) NOT NULL,
  `job_email` varchar(30) NOT NULL,
  PRIMARY KEY (`job_contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `job_contacts`
--

INSERT INTO `job_contacts` (`job_contact_id`, `job_id`, `job_risk_address`, `state_id`, `job_risk_suburb`, `job_risk_postcode`, `contact_id`, `job_main_contact`, `job_first_name`, `job_surname`, `job_company`, `job_contact_address`, `job_contact_state`, `job_contact_suburb`, `job_contact_postcode`, `job_mobile`, `job_is_mobile_best`, `job_phone`, `job_is_phone_best`, `job_email`) VALUES
(1, 1, '12 Pitt St', 1, 'Paddington', '75765', 1, 1, 'Techno', 'Hi This is for [removed]alert&#40;''Ok''&#41;;[remov', 'Company Name', 'Hi This is for [removed]alert&#40;''Ok''&#41;;[removed]', 'Hi This is for [removed]alert&', 'Hi This is for [removed]alert&', '87687678', '1234567890', 1, '1234567890', 1, 'Hi This is for [removed]alert&'),
(2, 2, '11 Pitt St', 1, 'Paddington', '75765', 1, 1, 'Techno', 'Hi This is for [removed]alert&#40;''Ok''&#41;;[remov', 'Hi This is for [removed]alert&#40;''Ok''&#41;;[remov', 'Hi This is for [removed]alert&#40;''Ok''&#41;;[removed]', 'Hi This is for [removed]alert&', 'Hi This is for [removed]alert&', '87687678', '1234567890', 1, '1234567890', 1, 'Hi This is for [removed]alert&'),
(3, 3, '41 Pitt St', 1, 'Paddington', '75765', 1, 1, 'Techno', 'Hi This is for [removed]alert&#40;''Ok''&#41;;[remov', 'Hi This is for [removed]alert&#40;''Ok''&#41;;[remov', 'Hi This is for [removed]alert&#40;''Ok''&#41;;[removed]', 'Hi This is for [removed]alert&', 'Hi This is for [removed]alert&', '87687678', '1234567890', 1, '1234567890', 1, 'Hi This is for [removed]alert&'),
(4, 4, 'Lorem Ipsum is simply dummy text of the printing', 1, 'Dummy Suburb', '123214', 2, 1, '123214', 'Kotwal', 'Company Name', 'Cont. address', 'MAH', 'Cont. suburb', '078690', '3334445556', 1, '9007686544', 1, 'demo@demo.com');

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE IF NOT EXISTS `job_details` (
  `job_id` int(30) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `job_description` varchar(10000) NOT NULL,
  `type_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `job_claim_no` int(30) NOT NULL,
  `job_received_date` varchar(15) NOT NULL,
  `job_provider_ref_no` int(30) NOT NULL,
  `job_project_manager` int(11) NOT NULL,
  `job_tp_response_by` varchar(15) NOT NULL,
  `priority_id` int(11) NOT NULL,
  `job_special_note` varchar(10000) NOT NULL,
  `job_note` varchar(10000) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`job_id`, `id`, `job_description`, `type_id`, `event_id`, `job_claim_no`, `job_received_date`, `job_provider_ref_no`, `job_project_manager`, `job_tp_response_by`, `priority_id`, `job_special_note`, `job_note`) VALUES
(1, 1, 'INS- Grind tree stump but don''t remove it.', 1, 1, 1234567, '30/08/2015 03:4', 1234567, 2, '30/08/2015 03:4', 1, 'Hi This is for [removed]alert&#40;''Ok''&#41;;[removed]', 'Hi This is for [removed]alert&#40;''Ok''&#41;;[removed]'),
(2, 1, 'ABC- Grind tree stump but don''t remove it.', 1, 1, 1234567, '30/08/2015 03:5', 1234567, 3, '30/08/2015 03:5', 1, 'Hi This is for [removed]alert&#40;''Ok''&#41;;[removed]', 'Hi This is for [removed]alert&#40;''Ok''&#41;;[removed]'),
(3, 1, 'XYZ- Grind tree stump but don''t remove it.', 1, 1, 1234567, '31-08-2015 03:5', 1234567, 2, '30-08-2015 03:5', 1, 'Hi This is for [removed]alert&#40;''Ok''&#41;;[removed]', 'Hi This is for [removed]alert&#40;''Ok''&#41;;[removed]'),
(4, 1, 'Lorem Ipsum is simply dummy text of the printing', 2, 1, 2147483647, '18-08-2015 14:3', 2, 3, '31-08-2015 14:3', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `job_events`
--

CREATE TABLE IF NOT EXISTS `job_events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(50) NOT NULL,
  `event_status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `job_events`
--

INSERT INTO `job_events` (`event_id`, `event_name`, `event_status`) VALUES
(1, 'Cyclone Marcia', 1),
(2, 'Cyclone Olwyn WA', 1),
(3, 'Sydney October Storm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_priorities`
--

CREATE TABLE IF NOT EXISTS `job_priorities` (
  `priority_id` int(11) NOT NULL AUTO_INCREMENT,
  `priority_name` varchar(50) NOT NULL,
  `priority_status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`priority_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `job_priorities`
--

INSERT INTO `job_priorities` (`priority_id`, `priority_name`, `priority_status`) VALUES
(1, '1. Critical (Must be completed ASAP)', 1),
(2, '2. Urgent (Must be completed same day)', 1),
(3, '3. Urgent (Not need same day)', 1),
(4, '4. ASAP (when time/weather/accessability permits)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE IF NOT EXISTS `job_types` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) DEFAULT NULL,
  `type_status` int(1) DEFAULT '1',
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `job_types`
--

INSERT INTO `job_types` (`type_id`, `type_name`, `type_status`) VALUES
(1, 'Make Safe', 1),
(2, 'Do and Charge', 1),
(3, 'Request Quote', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(50) NOT NULL,
  `state_status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`, `state_status`) VALUES
(1, 'ACT', 1),
(2, 'NSW', 1),
(3, 'NT', 1),
(4, 'QLD', 1),
(5, 'SA', 1),
(6, 'TAS', 1),
(7, 'VIC', 1),
(8, 'WA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'DRfSp7iIjB7KwaH33HCRPe', 1268889823, 1440993032, 1, 'Avez', 'Kotwal', 'ADMIN', '0'),
(2, '127.0.0.1', 'manager', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'm1@manager.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'Delonix', 'istrator', 'MANAGER', '0'),
(3, '127.0.0.1', 'manager', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'm2@manager.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'manager', 'istrator', 'MANAGER', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(3, 1, 3),
(4, 1, 4),
(2, 2, 2),
(5, 3, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
