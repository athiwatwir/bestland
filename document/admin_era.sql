-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2017 at 08:10 AM
-- Server version: 5.5.31-log
-- PHP Version: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_era`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` char(36) NOT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `moo` varchar(100) DEFAULT NULL,
  `soi` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `amphur` varchar(100) DEFAULT NULL,
  `province_id` char(36) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `amphurs`
--

CREATE TABLE `amphurs` (
  `id` char(36) NOT NULL,
  `amphur_code` varchar(60) DEFAULT NULL,
  `amphur_name` varchar(60) DEFAULT NULL,
  `postcode` varchar(60) DEFAULT NULL,
  `geo_id` int(5) DEFAULT NULL,
  `province_id` char(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `isactive` enum('Y','N') DEFAULT 'Y',
  `category_id` char(36) NOT NULL,
  `seq` int(5) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` char(36) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `asset_type_id` char(36) NOT NULL,
  `asset_type_des` varchar(255) DEFAULT NULL,
  `user_id` char(36) NOT NULL,
  `created` datetime DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `floor_total` decimal(18,2) DEFAULT NULL,
  `bedroom` int(5) DEFAULT NULL,
  `bathroom` int(5) DEFAULT NULL,
  `kitchen_room` int(5) DEFAULT NULL,
  `reception_room` int(5) DEFAULT NULL,
  `dining_room` int(5) DEFAULT NULL,
  `maid_room` int(5) DEFAULT NULL,
  `parking` int(5) DEFAULT NULL,
  `area_rai` decimal(18,2) DEFAULT NULL,
  `area_ngan` decimal(18,2) DEFAULT NULL,
  `area_wah` decimal(18,2) DEFAULT NULL,
  `area_meter` decimal(18,2) DEFAULT NULL,
  `price_per_wah` decimal(18,2) DEFAULT NULL,
  `price_amounnt` decimal(18,2) NOT NULL DEFAULT '0.00',
  `option` text,
  `address_id` char(36) DEFAULT NULL,
  `zone_id` char(36) NOT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `isspecial_marketprice` enum('Y','N') DEFAULT 'N',
  `isspecial_appraised` enum('Y','N') DEFAULT 'N',
  `area_width` int(5) NOT NULL,
  `area_long` int(5) NOT NULL,
  `iscovering` enum('Y','N') NOT NULL,
  `isdweller` enum('Y','N') NOT NULL,
  `direction` varchar(255) NOT NULL,
  `price_amounnt_lower` decimal(18,2) NOT NULL,
  `issale` enum('Y','N') NOT NULL,
  `isrent` enum('Y','N') NOT NULL,
  `issalerent` enum('Y','N') NOT NULL,
  `issellout` enum('Y','N') NOT NULL,
  `issaledown` enum('Y','N') NOT NULL,
  `floor` decimal(18,2) DEFAULT NULL,
  `price_rent` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `asset_images`
--

CREATE TABLE `asset_images` (
  `id` char(36) NOT NULL,
  `asset_id` char(36) NOT NULL,
  `image_id` char(36) NOT NULL,
  `isdefault` enum('Y','N') NOT NULL DEFAULT 'N',
  `created` datetime DEFAULT NULL,
  `seq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `asset_options`
--

CREATE TABLE `asset_options` (
  `id` char(36) NOT NULL,
  `asset_id` char(36) NOT NULL,
  `option_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `asset_types`
--

CREATE TABLE `asset_types` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `breatedby` varchar(100) DEFAULT NULL,
  `seq` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `decription` varchar(255) DEFAULT NULL,
  `isactive` enum('Y','N') DEFAULT 'Y',
  `seq` int(5) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` char(36) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `message` text,
  `created` datetime DEFAULT NULL,
  `createdby` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` char(36) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `lineid` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer_assets`
--

CREATE TABLE `customer_assets` (
  `id` char(36) NOT NULL,
  `zone_id` char(36) DEFAULT NULL,
  `customer_id` char(36) NOT NULL,
  `description` text,
  `asset_type_id` char(36) NOT NULL,
  `asset_type_des` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `floor_total` int(5) DEFAULT NULL,
  `bedroom` int(5) DEFAULT NULL,
  `bathroom` int(5) DEFAULT NULL,
  `kitchen_room` int(5) DEFAULT NULL,
  `reception_room` int(5) DEFAULT NULL,
  `dining_room` int(5) DEFAULT NULL,
  `maid_room` int(5) DEFAULT NULL,
  `parking` int(5) DEFAULT NULL,
  `area_rai` decimal(18,2) DEFAULT NULL,
  `area_ngan` decimal(18,2) DEFAULT NULL,
  `area_wah` decimal(18,2) DEFAULT NULL,
  `area_meter` decimal(18,2) DEFAULT NULL,
  `price_per_wah` decimal(18,2) DEFAULT NULL,
  `price_amounnt` decimal(18,2) DEFAULT '0.00',
  `isreqconsult` enum('Y','N') DEFAULT 'N',
  `type` varchar(100) NOT NULL COMMENT 'S=Sales,P=Purchase',
  `budgets` varchar(100) DEFAULT NULL,
  `address_id` char(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `path` text,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('FACI','PLAC','OTHER') NOT NULL,
  `created` datetime DEFAULT NULL,
  `seq` int(5) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` char(36) NOT NULL,
  `province_code` varchar(100) DEFAULT NULL,
  `province_name` varchar(255) DEFAULT NULL,
  `geoid` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` char(36) NOT NULL,
  `email_receiver_contact` varchar(255) DEFAULT NULL,
  `email_receiver_seller` varchar(255) DEFAULT NULL,
  `email_receiver_purchase` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `useimages`
--

CREATE TABLE `useimages` (
  `id` char(36) NOT NULL,
  `image_id` char(36) NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `usercode` varchar(100) DEFAULT NULL,
  `title` varchar(60) DEFAULT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `lineid` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `isactive` enum('Y','N') DEFAULT 'N',
  `isverify` enum('Y','N') DEFAULT 'N',
  `islocked` enum('Y','N') DEFAULT 'N',
  `iscustomer` enum('Y','N') DEFAULT 'Y',
  `isseller` enum('Y','N') DEFAULT 'N',
  `gender` enum('F','M') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `verifycode` varchar(255) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `address_id` char(36) NOT NULL,
  `created` datetime DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_province` (`province_id`);

--
-- Indexes for table `amphurs`
--
ALTER TABLE `amphurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_category` (`category_id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_type` (`asset_type_id`),
  ADD KEY `asset_seller` (`user_id`),
  ADD KEY `asset_address` (`address_id`),
  ADD KEY `zone_id` (`zone_id`);

--
-- Indexes for table `asset_images`
--
ALTER TABLE `asset_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `asset_id` (`asset_id`);

--
-- Indexes for table `asset_options`
--
ALTER TABLE `asset_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_id` (`asset_id`),
  ADD KEY `option_id` (`option_id`);

--
-- Indexes for table `asset_types`
--
ALTER TABLE `asset_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_assets`
--
ALTER TABLE `customer_assets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_type` (`asset_type_id`),
  ADD KEY `cus_asset_custo` (`customer_id`),
  ADD KEY `cus_asset_zone` (`zone_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useimages`
--
ALTER TABLE `useimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `useimage_image` (`image_id`),
  ADD KEY `useimage_user` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `useradd_user` (`user_id`),
  ADD KEY `useradd_address` (`address_id`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `address_province` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`);

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `article_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assets`
--
ALTER TABLE `assets`
  ADD CONSTRAINT `assets_ibfk_1` FOREIGN KEY (`zone_id`) REFERENCES `zones` (`id`),
  ADD CONSTRAINT `asset_address` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asset_seller` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `asset_type` FOREIGN KEY (`asset_type_id`) REFERENCES `asset_types` (`id`);

--
-- Constraints for table `asset_images`
--
ALTER TABLE `asset_images`
  ADD CONSTRAINT `asset_images_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asset_images_ibfk_2` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `asset_options`
--
ALTER TABLE `asset_options`
  ADD CONSTRAINT `asset_options_ibfk_1` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asset_options_ibfk_2` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`);

--
-- Constraints for table `customer_assets`
--
ALTER TABLE `customer_assets`
  ADD CONSTRAINT `cus_asset_custo` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cus_asset_type` FOREIGN KEY (`asset_type_id`) REFERENCES `asset_types` (`id`),
  ADD CONSTRAINT `cus_asset_zone` FOREIGN KEY (`zone_id`) REFERENCES `zones` (`id`);

--
-- Constraints for table `useimages`
--
ALTER TABLE `useimages`
  ADD CONSTRAINT `useimage_image` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `useimage_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD CONSTRAINT `useradd_address` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`),
  ADD CONSTRAINT `useradd_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
