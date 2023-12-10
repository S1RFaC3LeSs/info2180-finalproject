DROP DATABASE IF EXISTS dolphin_crm;
CREATE DATABASE dolphin_crm;

USE dolphin_crm;

-- Users Table
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
);

--  Contacts Table

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telephone` varchar(250) NOT NULL,
  `company` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `assigned_to` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
);

--  Notes Table
CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `comment` TEXT,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
);

-- Contacts Table Indices

ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

 ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- Users Table Indices
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
  
 ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


-- Indexes for table Notes
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

 ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO users ('firstname', 'lastname', 'password_hash','email', 'role') 
VALUES ('Admin', 'Purposes', '$2y$10$gjsO0Y6301wR9uRa1/bBSuTUh6HH2fgslC4j76/xSVVSXEt1sNC4K', 'admin@project2.com', 'user');