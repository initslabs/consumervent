-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2016 at 03:54 PM
-- Server version: 5.5.42
-- PHP Version: 5.5.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `koding_consumer_vent`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL,
  `company_user_id` int(10) unsigned NOT NULL,
  `submission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `comment_text` text,
  `comment_type` smallint(5) unsigned DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(10) unsigned NOT NULL,
  `company_user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email_address` text,
  `googleplacesid` varchar(255) DEFAULT NULL,
  `google_places_data` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_user_id`, `name`, `domain`, `website`, `email_address`, `googleplacesid`, `google_places_data`, `created`, `modified`) VALUES
(8, 0, 'MTN Nigeria', 'mtnnigeria.net', 'mtnnigeria.net', 'customercare@mtnnigeria.net,genevia@mtnnigeria.net,mtnbusiness@mtnnigeria.net,olusayr@mtnnigeria.net,kenechok@mtnnigeria.net,abioduad@mtnnigeria.net,hostmaster@mtnnigeria.net,internationalroaming@mtnnigeria.net,funmilom@mtnnigeria.net,enquires@mtnnigeria.net,babatuom@mtnnigeria.net,razaqaz@mtnnigeria.net,saviouu@mtnnigeria.net,babajiaw@mtnnigeria.net,adebayob@mtnnigeria.net,omobolo@mtnnigeria.net,chineza@mtnnigeria.net,sonieo@mtnnigeria.net,mosesm@mtnnigeria.net,iloae@mtnnigeria.net,charles@mtnnigeria.net,uloma@mtnnigeria.net,mtnnigeria@mtnnigeria.net,hrmanagers@mtnnigeria.net,groupceos@mtnnigeria.net,aminaoyag@mtnnigeria.net,michaelikp@mtnnigeria.net,ayobani@mtnnigeria.net,mosunma@mtnnigeria.net,garbab@mtnnigeria.net,wellini@mtnnigeria.net,amakae@mtnnigeria.net,odohij@mtnnigeria.net,danlada@mtnnigeria.net,abuabu@mtnnigeria.net,emiliaa@mtnnigeria.net,aliyua@mtnnigeria.net,shomoluconnect@mtnnigeria.net,benin2connect@mtnnigeria.net,ilorinconnect@mtnnigeria.net,agegeconnect@mtnnigeria.net,eketconnect@mtnnigeria.net,phcservicecentre2@mtnnigeria.net,festacconnect@mtnnigeria.net,nationalassemblyconnect@mtnnigeria.net,gusauconnect@mtnnigeria.net,ilorin2connectstore@mtnnigeria.net,ekwulobiaconnect@mtnnigeria.net,shoprite-enugu@mtnnigeria.net,ikejasc@mtnnigeria.net,oronconnect@mtnnigeria.net,sagamuconnect@mtnnigeria.net,kadunaconnect@mtnnigeria.net,ondoconnectstore@mtnnigeria.net,abuleegbaconnectlite@mtnnigeria.net,shopriteconnectabuja@mtnnigeria.net,dutseconnect@mtnnigeria.net,owerri2connect@mtnnigeria.net,katsinaconnect@mtnnigeria.net,ahoadaconnect@mtnnigeria.net,v.isc@mtnnigeria.net,kano2connect@mtnnigeria.net,ifo@mtnnigeria.net,marinaconnect@mtnnigeria.net,aba2connect2@mtnnigeria.net,makurdiconnect@mtnnigeria.net,offaconnect@mtnnigeria.net,orluconnect@mtnnigeria.net,awkaconnect@mtnnigeria.net,kontagoraconnect@mtnnigeria.net,obigboconnect@mtnnigeria.net,ogbaconnect@mtnnigeria.net,kanoconnect@mtnnigeria.net,matorisc@mtnnigeria.net,ogwashiukwuconnect@mtnnigeria.net,birninkebbiconnect@mtnnigeria.net,kubwaconnect@mtnnigeria.net,ikoroduconnect@mtnnigeria.net,auchiconnect@mtnnigeria.net,apapasc@mtnnigeria.net,wuseiiconnect@mtnnigeria.net,ohafiaconnect@mtnnigeria.net,ogidiconnect@mtnnigeria.net,sokotoservicecenter@mtnnigeria.net,feignes@mtnnigeria.net,adeolar@mtnnigeria.net,taviam@mtnnigeria.net,mustapo@mtnnigeria.net,franss@mtnnigeria.net,muideea@mtnnigeria.net,ibrahid@mtnnigeria.net,gbengas@mtnnigeria.net,know-customerservice@mtnnigeria.net,josephad@mtnnigeria.net,abdulaki@mtnnigeria.net,oyerono@mtnnigeria.net,sundaa@mtnnigeria.net,memcos@mtnnigeria.net,josephab@mtnnigeria.net,matthee@mtnnigeria.net', NULL, NULL, '2016-02-21 10:32:50', '2016-02-21 10:32:50'),
(9, 0, 'MTN Consulting', 'mtnconsulting.com.au', 'http://mtnconsulting.com.au', '', 'ChIJK_kAwWmuEmsRl6ua7aYLNCk', NULL, '2016-02-21 10:44:55', '2016-02-21 10:44:55'),
(10, 0, 'Walmart Labs', 'www.walmartlabs.com', 'http://www.walmartlabs.com/', '', 'ChIJOXP6myJoMhURJQjiBXH7evU', NULL, '2016-02-21 12:33:41', '2016-02-21 12:33:41'),
(11, 0, 'Simplyinfants', 'simplyinfants.com', 'simplyinfants.com', 'support@simplyinfants.com,internally.sales@simplyinfants.com,sales@simplyinfants.com', NULL, NULL, '2016-02-21 12:55:37', '2016-02-21 12:55:37'),
(12, 0, NULL, NULL, 'http://www.walmartlabs.com/', '', NULL, NULL, '2016-02-21 13:11:06', '2016-02-21 13:11:06'),
(13, 0, 'Sadie Clothing Co.', NULL, '', NULL, 'ChIJqfDGRh-uEmsRAsFaGk-P7xc', NULL, '2016-02-21 13:26:11', '2016-02-21 13:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `company_users`
--

DROP TABLE IF EXISTS `company_users`;
CREATE TABLE IF NOT EXISTS `company_users` (
  `id` int(10) unsigned NOT NULL,
  `company_id` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(255) DEFAULT NULL,
  `email_address` int(10) unsigned DEFAULT NULL,
  `passwd` int(10) unsigned DEFAULT NULL,
  `active` smallint(5) unsigned DEFAULT '0',
  `created` int(10) unsigned DEFAULT NULL,
  `modified` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `experience_types`
--

DROP TABLE IF EXISTS `experience_types`;
CREATE TABLE IF NOT EXISTS `experience_types` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience_types`
--

INSERT INTO `experience_types` (`id`, `name`) VALUES
(1, 'Negative'),
(2, 'Neutral'),
(3, 'Positive');

-- --------------------------------------------------------

--
-- Table structure for table `issue_types`
--

DROP TABLE IF EXISTS `issue_types`;
CREATE TABLE IF NOT EXISTS `issue_types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '10'
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_types`
--

INSERT INTO `issue_types` (`id`, `name`, `sort_order`) VALUES
(1, 'Advertising Issues', 10),
(3, 'Billing/Collection Issues', 10),
(4, 'Delivery Issues', 10),
(5, 'Guarantee/Warranty Issues', 10),
(6, 'Problems with Product(s)', 10),
(7, 'Problematic Service', 10),
(8, 'Other Issues', 0),
(9, 'Unwanted Calls/Texts', 10);

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

DROP TABLE IF EXISTS `submissions`;
CREATE TABLE IF NOT EXISTS `submissions` (
  `id` int(10) unsigned NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `submission_status_id` int(10) unsigned NOT NULL,
  `company_id` int(10) unsigned NOT NULL,
  `experience_type_id` int(10) unsigned NOT NULL DEFAULT '0',
  `submission_type_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_display_name` varchar(255) DEFAULT NULL,
  `user_email_address` varchar(255) DEFAULT NULL,
  `user_phone_number` varchar(255) DEFAULT NULL,
  `recommendation_level` smallint(5) unsigned DEFAULT '0',
  `user_company_website` varchar(255) DEFAULT NULL,
  `detected_website` varchar(255) DEFAULT NULL,
  `incident_date` date DEFAULT NULL,
  `incident_address` varchar(255) DEFAULT NULL,
  `user_company_contacted` smallint(5) unsigned DEFAULT '0',
  `user_amount_involved` decimal(10,2) DEFAULT '0.00',
  `user_company_twitter_handle` varchar(255) DEFAULT NULL,
  `user_company_email` varchar(255) DEFAULT NULL,
  `user_company_name` varchar(255) DEFAULT NULL,
  `review` text
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`id`, `users_id`, `submission_status_id`, `company_id`, `experience_type_id`, `submission_type_id`, `created`, `modified`, `user_display_name`, `user_email_address`, `user_phone_number`, `recommendation_level`, `user_company_website`, `detected_website`, `incident_date`, `incident_address`, `user_company_contacted`, `user_amount_involved`, `user_company_twitter_handle`, `user_company_email`, `user_company_name`, `review`) VALUES
(1, 0, 1, 9, 2, 0, '2016-02-21 10:45:42', '2016-02-21 10:45:42', NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, 0, '0.00', NULL, NULL, NULL, NULL),
(2, 0, 3, 10, 1, 0, '2016-02-21 12:33:41', '2016-02-21 13:13:41', '', '', '', 5, NULL, NULL, NULL, NULL, 1, '0.00', NULL, NULL, NULL, 'This is my complaint or review'),
(3, 0, 1, 11, 2, 0, '2016-02-21 12:55:37', '2016-02-21 12:55:37', NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, 0, '0.00', NULL, NULL, NULL, 'Nope'),
(4, 0, 1, 13, 1, 0, '2016-02-21 13:26:11', '2016-02-21 13:26:11', NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, 0, '0.00', NULL, NULL, NULL, 'sdc');

-- --------------------------------------------------------

--
-- Table structure for table `submission_issues`
--

DROP TABLE IF EXISTS `submission_issues`;
CREATE TABLE IF NOT EXISTS `submission_issues` (
  `id` int(11) NOT NULL,
  `submission_id` int(11) NOT NULL,
  `issue_type_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission_issues`
--

INSERT INTO `submission_issues` (`id`, `submission_id`, `issue_type_id`) VALUES
(1, 2, 3),
(2, 2, 7),
(3, 2, 6),
(4, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `submission_statuses`
--

DROP TABLE IF EXISTS `submission_statuses`;
CREATE TABLE IF NOT EXISTS `submission_statuses` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submission_types`
--

DROP TABLE IF EXISTS `submission_types`;
CREATE TABLE IF NOT EXISTS `submission_types` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `facebookid` varchar(50) DEFAULT NULL,
  `googleid` varchar(50) DEFAULT NULL,
  `twitterid` varchar(50) DEFAULT NULL,
  `from_facebook` smallint(5) unsigned DEFAULT '0',
  `from_google` smallint(5) unsigned DEFAULT '0',
  `from_twitter` smallint(5) unsigned DEFAULT '0',
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `display_name` varchar(50) DEFAULT NULL,
  `mobile_number` varchar(15) DEFAULT NULL,
  `avatar_url` varchar(255) DEFAULT NULL,
  `active` smallint(5) unsigned DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_FKIndex1` (`company_user_id`),
  ADD KEY `comments_FKIndex2` (`submission_id`),
  ADD KEY `comments_FKIndex3` (`user_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_users`
--
ALTER TABLE `company_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience_types`
--
ALTER TABLE `experience_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_types`
--
ALTER TABLE `issue_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sort_order` (`sort_order`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submissions_FKIndex1` (`submission_type_id`),
  ADD KEY `submissions_FKIndex2` (`experience_type_id`),
  ADD KEY `submissions_FKIndex3` (`company_id`),
  ADD KEY `submissions_FKIndex4` (`submission_status_id`),
  ADD KEY `submissions_FKIndex5` (`users_id`);

--
-- Indexes for table `submission_issues`
--
ALTER TABLE `submission_issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submission_statuses`
--
ALTER TABLE `submission_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submission_types`
--
ALTER TABLE `submission_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `company_users`
--
ALTER TABLE `company_users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `experience_types`
--
ALTER TABLE `experience_types`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `issue_types`
--
ALTER TABLE `issue_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `submission_issues`
--
ALTER TABLE `submission_issues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `submission_statuses`
--
ALTER TABLE `submission_statuses`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `submission_types`
--
ALTER TABLE `submission_types`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;