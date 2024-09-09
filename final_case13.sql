-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2024 at 12:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_case13`
--

-- --------------------------------------------------------

--
-- Table structure for table `avatar`
--

CREATE TABLE `avatar` (
  `avatar_id` int(11) NOT NULL,
  `avatar_name` varchar(255) NOT NULL,
  `avatar_image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `avatar`
--

INSERT INTO `avatar` (`avatar_id`, `avatar_name`, `avatar_image`) VALUES
(1, 'male', 'male.jpeg'),
(2, 'female', 'female.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'bug'),
(2, 'task'),
(3, 'improvement');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `plan_id` int(11) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `members` int(11) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`plan_id`, `plan_name`, `members`, `price`, `description`) VALUES
(1, 'plan 1', 4, 100, 'For individuals or small teams just getting started with basic project management and task\r\n                tracking needs.'),
(2, 'plan 2', 6, 120, 'For larger teams with professional needs including customization, advanced support'),
(3, 'plan3', 10, 900, 'For large organizations needing comprehensive solutions with enterprise-grade features'),
(4, 'plan 4', 15, 1400, 'For growing teams needing more features like collaboration tools and integrations.');

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE `priority` (
  `priority_id` int(11) NOT NULL,
  `priority_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`priority_id`, `priority_name`) VALUES
(1, 'Very High'),
(2, 'High'),
(3, 'Moderate'),
(4, 'Low'),
(5, 'Very Low');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `user_id`) VALUES
(37, 'Project Sunrise', 18),
(38, 'Blue Sky Ventures', 18),
(39, 'Urban Explorer', 18),
(40, 'Bright Future', 18),
(41, 'Next Step', 18),
(42, 'Simple Solutions', 18);

-- --------------------------------------------------------

--
-- Table structure for table `project members`
--

CREATE TABLE `project members` (
  `promembers_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `member` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project members`
--

INSERT INTO `project members` (`promembers_id`, `user_id`, `project_id`, `member`) VALUES
(62, 19, 37, 'suhailashaheen67@gmail.com'),
(63, NULL, 37, 'John@gmail.com'),
(64, NULL, 37, 'Mark@gmail.com'),
(65, NULL, 37, 'Julia@gmail.com'),
(66, NULL, 37, 'Ascia@gmail.com'),
(67, 19, 38, 'suhailashaheen67@gmail.com'),
(68, 21, 38, 'saifmonim1313@gmail.com'),
(69, NULL, 38, 'saifmonim13@gmail.com'),
(70, 18, 37, '');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'leader'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `sprint`
--

CREATE TABLE `sprint` (
  `sprint_id` int(11) NOT NULL,
  `sprint_name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `sprint_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sprint`
--

INSERT INTO `sprint` (`sprint_id`, `sprint_name`, `start_date`, `end_date`, `user_id`, `project_id`, `sprint_status_id`) VALUES
(51, 'Bloom', '2024-08-31', '2024-09-12', 18, 37, 1),
(52, 'Dawn', '2024-08-23', '2024-09-03', 18, 37, 1),
(53, 'Rise', '2024-08-24', '2024-09-03', 18, 37, 1),
(54, 'Horizon', '2024-08-24', '2024-09-04', 18, 37, 1),
(55, 'Glow', '2024-08-26', '2024-09-05', 18, 37, 1),
(56, 'Aurora', '2024-08-26', '2024-09-06', 18, 37, 1),
(57, 'Horizon', '2024-08-24', '2024-09-07', 18, 38, 1),
(58, 'Discovery', '2024-08-24', '2024-09-03', 18, 38, 1),
(59, 'Summit', '2024-08-24', '2024-09-05', 18, 38, 1),
(60, 'Venture', '2024-08-24', '2024-09-07', 18, 38, 1),
(61, 'Elevation', '2024-08-30', '2024-09-27', 18, 38, 1),
(62, 'Metropolis', '2024-08-23', '2024-09-07', 18, 39, 1),
(63, 'Expedition', '2024-08-30', '2024-09-20', 18, 39, 1),
(64, 'Urbanity', '2024-08-24', '2024-09-04', 18, 39, 1),
(65, 'Beacon', '2024-08-24', '2024-09-04', 18, 40, 1),
(66, 'Radiance', '2024-08-24', '2024-09-05', 18, 40, 1),
(67, 'Vision', '2024-08-31', '2024-09-12', 18, 40, 1),
(68, 'Progress', '2024-08-24', '2024-08-31', 18, 41, 1),
(69, 'Leap', '2024-08-24', '2024-09-07', 18, 41, 1),
(70, 'Transition', '2024-08-24', '2024-09-07', 18, 41, 1),
(71, 'Clarity', '2024-08-23', '2024-09-05', 18, 42, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sprint_status`
--

CREATE TABLE `sprint_status` (
  `sprint_status_id` int(11) NOT NULL,
  `sprint_status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sprint_status`
--

INSERT INTO `sprint_status` (`sprint_status_id`, `sprint_status_name`) VALUES
(1, 'To do'),
(2, 'In progress'),
(3, 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'To do'),
(2, 'In progress'),
(3, 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `descreption` longtext NOT NULL,
  `name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `sprint_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prio_id` int(11) NOT NULL,
  `reporter_id` int(11) NOT NULL,
  `assignee_id` int(11) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `assignee_email` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `descreption`, `name`, `start_date`, `end_date`, `sprint_id`, `cat_id`, `prio_id`, `reporter_id`, `assignee_id`, `status_id`, `file`, `assignee_email`, `label`) VALUES
(79, 'Analyze current market trends to identify opportunities and potential challenges for the project.', 'Research Market Trends', '2024-09-01', '2024-09-03', 51, 2, 1, 18, 19, 1, 'Market Trends Report.pdf', ' ', 'Research'),
(80, 'Create wireframes to outline the basic structure and layout of the project’s key pages or features.', 'Design Initial Wireframes', '2024-09-02', '2024-09-07', 51, 3, 2, 18, 18, 1, 'WhatsApp Image 2024-08-22 at 7.35.36 AM.jpeg', ' ', 'Design'),
(81, 'Build and implement core features of the project prototype for initial testing and feedback.', 'Develop Prototype Features', '2024-09-02', '2024-09-04', 51, 2, 3, 18, NULL, 1, 'Prototype Features List.xlsx', 'Mark@gmail.com ', 'Development'),
(82, 'Draft detailed user stories to define project requirements and ensure alignment with user needs and goals.', 'Write User Stories', '2024-09-03', '2024-09-05', 51, 3, 4, 18, NULL, 1, 'User Stories Document.docx', 'Julia@gmail.com ', 'Documentation'),
(83, 'Develop a comprehensive marketing strategy to promote the project and engage target audiences effectively.', 'Create Marketing Strategy', '2024-09-04', '2024-09-06', 51, 1, 5, 18, 18, 1, 'WhatsApp Video 2024-08-22 at 7.43.03 AM.mp4', ' ', 'Marketing'),
(84, 'Create and implement the landing page for the project, ensuring it is responsive and user-friendly.', 'Develop Landing Page', '2024-08-24', '2024-08-27', 52, 1, 3, 18, 19, 1, 'Social-media-marketing-landing-page-mockup-scaled.jpg.jpeg', ' ', 'Development'),
(86, 'Perform usability tests on the prototype to identify any usability issues and gather feedback.', 'Conduct Usability Testing', '2024-08-29', '2024-08-30', 52, 1, 1, 18, NULL, 1, 'Usability Testing Report.pdf', 'Mark@gmail.com ', ' Testing'),
(87, 'Review and finalize the list of features to be included in the next release based on stakeholder feedback.', 'Finalize Feature List', '2024-08-26', '2024-08-29', 53, 2, 1, 18, NULL, 1, 'Feature List.xlsx', 'Julia@gmail.com ', 'Planning'),
(88, 'Implement a user onboarding flow to guide new users through the initial setup and key features.', 'Develop User Onboarding Flow', '2024-08-25', '2024-08-27', 53, 3, 3, 18, NULL, 1, 'onboarding flow chart.jpeg', 'Ascia@gmail.com ', 'Development');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `avatar_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_password`, `avatar_id`, `role_id`, `plan_id`, `gender`) VALUES
(18, 'Sama', 'samashaheenn776@gmail.com', '01030773614', '$2y$10$y/s8hVK0u6/Y43soCuFRu.yqHNZZFybhyinz3cSIDZsyAnlpdJpTK', 2, 1, 2, 'Female'),
(19, 'Suhaila', 'suhailashaheen67@gmail.com', '01098991339', '$2y$10$GMc7wBHi.RCQxmDzfyp6Ae.3l3upsYFos79xBlz/6FLD4eqD1JNCa', 2, 1, NULL, 'Female'),
(20, 'Seif', 'saifmonim13@gmail.com', '01121407873', '$2y$10$X.AAoEbCEmaGut6YBqvL9eb3eT.kDqNeFq1wQF08UkxDMBCf/sY3u', 1, 1, NULL, 'Male'),
(21, 'monim', 'saifmonim1313@gmail.com', '01121407873', '$2y$10$ZjUqNbcb5V6V5P2BN8mf/O17GPJKsKCeD3qZg.nDOdaVuLC1xp/cK', 1, 2, NULL, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avatar`
--
ALTER TABLE `avatar`
  ADD PRIMARY KEY (`avatar_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `task_id` (`task_id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`priority_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `project members`
--
ALTER TABLE `project members`
  ADD PRIMARY KEY (`promembers_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `sprint`
--
ALTER TABLE `sprint`
  ADD PRIMARY KEY (`sprint_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `sprint_status_id` (`sprint_status_id`);

--
-- Indexes for table `sprint_status`
--
ALTER TABLE `sprint_status`
  ADD PRIMARY KEY (`sprint_status_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `sprint_id` (`sprint_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `prio_id` (`prio_id`),
  ADD KEY `reporter_id` (`reporter_id`),
  ADD KEY `user_id` (`assignee_id`),
  ADD KEY `statues_id` (`status_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `plan_id` (`plan_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `avatar_id` (`avatar_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avatar`
--
ALTER TABLE `avatar`
  MODIFY `avatar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `priority`
--
ALTER TABLE `priority`
  MODIFY `priority_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `project members`
--
ALTER TABLE `project members`
  MODIFY `promembers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sprint`
--
ALTER TABLE `sprint`
  MODIFY `sprint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `sprint_status`
--
ALTER TABLE `sprint_status`
  MODIFY `sprint_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `task` (`task_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project members`
--
ALTER TABLE `project members`
  ADD CONSTRAINT `project members_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project members_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sprint`
--
ALTER TABLE `sprint`
  ADD CONSTRAINT `sprint_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sprint_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sprint_ibfk_3` FOREIGN KEY (`sprint_status_id`) REFERENCES `sprint_status` (`sprint_status_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`sprint_id`) REFERENCES `sprint` (`sprint_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_ibfk_3` FOREIGN KEY (`prio_id`) REFERENCES `priority` (`priority_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_ibfk_4` FOREIGN KEY (`reporter_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_ibfk_5` FOREIGN KEY (`assignee_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `task_ibfk_6` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`avatar_id`) REFERENCES `avatar` (`avatar_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
