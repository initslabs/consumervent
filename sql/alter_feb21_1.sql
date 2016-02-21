

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `issue_types`
--
ALTER TABLE `issue_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sort_order` (`sort_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `issue_types`
--
ALTER TABLE `issue_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;


ALTER TABLE `companies` CHANGE `email_address` `email_address` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;


ALTER TABLE `company_users` ADD `company_id` INT NOT NULL DEFAULT '0' AFTER `id`;
