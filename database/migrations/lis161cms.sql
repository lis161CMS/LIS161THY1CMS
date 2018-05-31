-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2018 at 04:55 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lis161cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `contentTitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `contentType_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contenttypes`
--

CREATE TABLE `contenttypes` (
  `id` int(11) NOT NULL,
  `contentType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contentTypeDesc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_05_17_035304_create_contents_table', 1),
(2, '2018_05_17_035304_create_contenttypes_table', 1),
(3, '2018_05_17_035304_create_navigationcontents_table', 1),
(4, '2018_05_17_035304_create_navigations_table', 1),
(5, '2018_05_17_035304_create_navigationtypes_table', 1),
(6, '2018_05_17_035304_create_permissions_table', 1),
(7, '2018_05_17_035304_create_revisions_table', 1),
(8, '2018_05_17_035304_create_roles_table', 1),
(9, '2018_05_17_035304_create_users_table', 1),
(10, '2018_05_17_035307_add_foreign_keys_to_contents_table', 1),
(11, '2018_05_17_035307_add_foreign_keys_to_contenttypes_table', 1),
(12, '2018_05_17_035307_add_foreign_keys_to_navigationcontents_table', 1),
(13, '2018_05_17_035307_add_foreign_keys_to_navigations_table', 1),
(14, '2018_05_17_035307_add_foreign_keys_to_navigationtypes_table', 1),
(15, '2018_05_17_035307_add_foreign_keys_to_permissions_table', 1),
(16, '2018_05_17_035307_add_foreign_keys_to_revisions_table', 1),
(17, '2018_05_17_035307_add_foreign_keys_to_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `navigationcontents`
--

CREATE TABLE `navigationcontents` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `navigation_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `navigations`
--

CREATE TABLE `navigations` (
  `id` int(11) NOT NULL,
  `navigationName` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `navigationLink` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `navactivated` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `navigationType_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navigations`
--

INSERT INTO `navigations` (`id`, `navigationName`, `navigationLink`, `navactivated`, `created_at`, `updated_at`, `deleted_at`, `role_id`, `navigationType_id`, `user_id`) VALUES
(1, 'View Content', 'viewcontent', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 0),
(2, 'Add Content', 'addcontent', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 0),
(3, 'View Own Content', 'usercontent', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 0),
(4, 'name4', 'link4', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 2),
(5, 'name5', 'link5', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 2),
(6, 'name6', 'link6', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 2),
(7, 'name7', 'link7', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 2),
(8, 'name8', 'link8', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 2),
(9, 'name9', 'link9', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 2),
(10, 'name10', 'link10', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `navigationtypes`
--

CREATE TABLE `navigationtypes` (
  `id` int(11) NOT NULL,
  `navigationType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `permission` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `permission`, `created_at`, `updated_at`, `deleted_at`, `role_id`) VALUES
(1, 'Manage Users', '2018-05-31 06:52:36', '2018-05-31 06:52:36', NULL, 1),
(2, 'Create Post', '2018-05-31 06:53:19', '2018-05-31 06:53:19', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `revisions`
--

CREATE TABLE `revisions` (
  `id` int(11) NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisionNo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at_copy1` datetime DEFAULT NULL,
  `updated_at_copy1` datetime DEFAULT NULL,
  `deleted_at_copy1` datetime DEFAULT NULL,
  `imageLink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roleShortName` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `roleShortName`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator', 'admin', NULL, NULL, NULL),
(2, 'User', 'usr', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middleName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `userPhoto` mediumblob,
  `remember_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `middleName`, `lastName`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`, `role_id`, `userPhoto`, `remember_token`) VALUES
(3, 'Ma. Nicole', 'Reduta', 'Tacuboy', 'tma.nicole@gmail.com', '$2y$10$9OyvCJhpdrFJwW/iM5RbGec0ZLWGNI.Gyw7OBvhVqbtuu0JEmTcG6', '2018-05-24 20:08:18', '2018-05-24 20:08:18', NULL, 1, NULL, NULL),
(4, 'Jeanne Denyse', 'Viudez', 'Torres', 'jvtorres2@up.edu.ph', '$2y$10$Cl6kglTiwh8d2j9wxpRh4ehCW8bktVO4qRn7oTPhuBvcwvctGR9LO', '2018-05-24 23:31:24', '2018-05-24 23:31:24', NULL, 1, NULL, '2GziP7foaTnOf3oMwHvvbNPj3oQpuiGHFoMw737OftnRDMUQgFJ53V2Ooefs'),
(5, 'Winston', 'Sison', 'Isaac', 'marc@winstonisaac.com', '$2y$10$JV49qRP2imgpdBEeM1NLR.YW2ktKSDc/W.N0IE.btJUnlXhLk23hS', '2018-05-25 10:52:34', '2018-05-25 10:52:34', NULL, 1, NULL, 'llhLcgMjDmSJ96tukBmXT15OQIs4NwllZ7spPD0Im3OZXJtqNmlseeloqHvA'),
(6, 'First', 'Middle', 'Last', 'email@email.com', '$2y$10$IJGwLghot/YigNBm1/MvfOWOPW1x5kJVGFwaet0j.8BgaIvOY9JEK', '2018-05-30 03:58:56', '2018-05-30 03:58:56', NULL, 1, NULL, 'sEltAazFDCa1Ux70g12PRD9RAZUgCMPnl128Yj96BRDKX5sTenUpZnWHqLpE'),
(7, 'User', 'Middle', 'Last', 'email2@email.com', '$2y$10$0o3jMRckrhhrw1d9M9GP2.Z9ISPwVhfXeBSxR6/vFQ6lHQOCjkoQ6', '2018-05-30 04:30:55', '2018-05-30 04:30:55', NULL, 2, NULL, 'dOYNCpCWhKFnbytNEGdm044cXzl5mIrVFvWOkoYNSFGjkVtsdlRYska1ZvFk'),
(8, 'Admin', 'Middle', 'Last', 'admin@email.com', '$2y$10$.B1VEDwcwr7N6xCcVSdaa.FxCfuU3AHsFW5GDLoA.6i6sTnF3vspu', '2018-05-30 04:38:04', '2018-05-30 04:38:04', NULL, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_content_contentTypes1_idx` (`contentType_id`),
  ADD KEY `fk_content_users1_idx` (`user_id`);

--
-- Indexes for table `contenttypes`
--
ALTER TABLE `contenttypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_contentTypes_users1_idx` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigationcontents`
--
ALTER TABLE `navigationcontents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_navigationcontents_navigations1_idx` (`navigation_id`),
  ADD KEY `fk_navigationcontents_contents1_idx` (`content_id`);

--
-- Indexes for table `navigations`
--
ALTER TABLE `navigations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_navigations_roles1_idx` (`role_id`),
  ADD KEY `fk_navigations_navigationTypes1_idx` (`navigationType_id`),
  ADD KEY `fk_navigations_users1_idx` (`user_id`);

--
-- Indexes for table `navigationtypes`
--
ALTER TABLE `navigationtypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_navigationTypes_users1_idx` (`user_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_permissions_roles1_idx` (`role_id`);

--
-- Indexes for table `revisions`
--
ALTER TABLE `revisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_revisions_contents1_idx` (`content_id`),
  ADD KEY `fk_revisions_users1_idx` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_roles_idx` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contenttypes`
--
ALTER TABLE `contenttypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `navigationcontents`
--
ALTER TABLE `navigationcontents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `navigations`
--
ALTER TABLE `navigations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `navigationtypes`
--
ALTER TABLE `navigationtypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `revisions`
--
ALTER TABLE `revisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `fk_content_contentTypes1` FOREIGN KEY (`contentType_id`) REFERENCES `contenttypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_content_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `contenttypes`
--
ALTER TABLE `contenttypes`
  ADD CONSTRAINT `fk_contentTypes_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `navigationcontents`
--
ALTER TABLE `navigationcontents`
  ADD CONSTRAINT `fk_navigationcontents_contents1` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_navigationcontents_navigations1` FOREIGN KEY (`navigation_id`) REFERENCES `navigations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `navigations`
--
ALTER TABLE `navigations`
  ADD CONSTRAINT `fk_navigations_navigationTypes1` FOREIGN KEY (`navigationType_id`) REFERENCES `navigationtypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_navigations_roles1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_navigations_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `navigationtypes`
--
ALTER TABLE `navigationtypes`
  ADD CONSTRAINT `fk_navigationTypes_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `fk_permissions_roles1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `revisions`
--
ALTER TABLE `revisions`
  ADD CONSTRAINT `fk_revisions_contents1` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_revisions_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
