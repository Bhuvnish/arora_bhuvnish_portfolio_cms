-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2024 at 04:52 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form_submissions`
--

DROP TABLE IF EXISTS `contact_form_submissions`;
CREATE TABLE IF NOT EXISTS `contact_form_submissions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `subject` text NOT NULL,
  `submission_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_form_submissions`
--

INSERT INTO `contact_form_submissions` (`id`, `firstname`, `lastname`, `email`, `phone`, `company`, `subject`, `submission_date`) VALUES
(1, 'bhuvnish', 'arora', 'b_arora163217@fanshaweonline.ca', '5196944816', 'mm', 'hrcwbhrbivbsbdhvbiuer', '2024-02-22 18:11:36'),
(2, 'bhuvnish', 'arora', 'b_arora163217@fanshaweonline.ca', '5196944816', 'mm', 'nh', '2024-02-26 10:56:44'),
(3, 'test', 'test', 'akjdasjkajdkjas@asdas.com', '5564464444', 'mm', 'hggg', '2024-02-26 11:24:22'),
(4, 'bhuvnish', 'arora', '12shn@gmail.com', '5564464444', 'mm', 'eded', '2024-02-26 18:36:09'),
(5, 'bhuvnish', 'arora', 'b_arora163217@fanshaweonline.ca', '5196944816', 'mm', 'dd', '2024-02-26 20:16:39'),
(6, 'bhuvnish', 'arora', '22222@gmail.com', '5196944816', 'mm', 'xx', '2024-02-26 20:17:11'),
(7, 'bhuvnish', 'arora', 'b_arora163217@fanshaweonline.ca', '5196944816', 'mm', 'hcvwduhvcyiudbc', '2024-02-26 21:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_id` int DEFAULT NULL,
  `image_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `project_id`, `image_filename`) VALUES
(1, 1, 'image1a.jpg'),
(2, 1, 'image1b.jpg'),
(3, 1, 'image1cc.jpg'),
(4, 2, 'image2aa.jpg'),
(5, 2, 'image2b.jpg'),
(6, 2, 'image2c.jpg'),
(7, 3, 'image3a.jpg'),
(8, 3, 'image3b.jpg'),
(9, 3, 'image3c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `execution` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `objective` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `conclusion` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `image_url`, `execution`, `objective`, `conclusion`) VALUES
(1, 'EARBUDS', 'The primary objective of this project was to conceive and design a distinctive pair of earbuds and a cutting-edge charging case. Leveraging the capabilities of Cinema 4D, our goal was to seamlessly merge aesthetics with functionality, creating a product that not only looked visually appealing but also boasted superior features. Extensive research and brainstorming were undertaken to generate innovative ideas for the earbuds, and a parallel challenge was set to design a charging case that harmonized with the earbuds while incorporating state-of-the-art features. Additionally, the team was tasked with crafting promotional material, including captivating images and a compelling video using After Effects.\r\n    \r\n Execution\r\n        In the execution phase, we delved into the world of Cinema 4D to meticulously model, texture, light, and animate the earbuds and charging cases. The software allowed us to navigate the intricate details of the design, ensuring that the final products were a faithful representation of our imaginative concepts. After the design phase, we transitioned to the creation of promotional material. Visually striking promotional images were developed, highlighting key features and staying true to the initial design vision. Subsequently, a video was produced using After Effects, strategically crafted to evoke a profound sense of admiration for the earbuds.\r\n    \r\n Conclusion\r\n        The culmination of this project resulted in a successful blend of creativity and technical expertise. The earbuds and charging case not only met but exceeded expectations in both aesthetics and functionality. The promotional material, including captivating images and an engaging video, effectively conveyed the essence of our design, leaving a lasting impact on the audience. This project stands as a testament to the team\'s ability to bring imaginative concepts to life, setting a new standard for innovative product design and promotion in the realm of audio technology\r\n    ', 'project1_thumb.jpg', ' In the execution phase, we delved into the world of Cinema 4D to meticulously model, texture, light, and animate the earbuds and charging cases. The software allowed us to navigate the intricate details of the design, ensuring that the final products were a faithful representation of our imaginative concepts. After the design phase, we transitioned to the creation of promotional material. Visually striking promotional images were developed, highlighting key features and staying true to the initial design vision. Subsequently, a video was produced using After Effects, strategically crafted to evoke a profound sense of admiration for the earbuds.\r\n    ', 'The primary objective of this project was to conceive and design a distinctive pair of earbuds and a cutting-edge charging case. Leveraging the capabilities of Cinema 4D, our goal was to seamlessly merge aesthetics with functionality, creating a product that not only looked visually appealing but also boasted superior features. Extensive research and brainstorming were undertaken to generate innovative ideas for the earbuds, and a parallel challenge was set to design a charging case that harmonized with the earbuds while incorporating state-of-the-art features. Additionally, the team was tasked with crafting promotional material, including captivating images and a compelling video using After Effects.', ' The culmination of this project resulted in a successful blend of creativity and technical expertise. The earbuds and charging case not only met but exceeded expectations in both aesthetics and functionality. The promotional material, including captivating images and an engaging video, effectively conveyed the essence of our design, leaving a lasting impact on the audience. This project stands as a testament to the team\'s ability to bring imaginative concepts to life, setting a new standard for innovative product design and promotion in the realm of audio technology'),
(2, 'KAVORKA', 'Description for Project 2', 'project2_thumb.jpg', '\r\n\r\nConducted market research to understand current trends in makeup brand logos.\r\nBrainstormed and conceptualized multiple logo design options, keeping in mind the brand\'s essence and target audience.\r\nIteratively refined the chosen logo design based on feedback from stakeholders and design principles.\r\nEnsured that the finalized logo is versatile, scalable, and visually appealing for various applications.\r\nBottle Design:\r\n\r\nAnalyzed competitor products and industry standards for makeup packaging design.\r\nDeveloped innovative bottle designs that reflect the brand\'s identity and differentiate it in the market.\r\n\r\n\r\n\r\nIdentified the required sizes and dimensions for banners across different social media platforms and advertising channels.\r\nDesigned visually striking banners that maintain consistency with the brand\'s new logo and packaging design.\r\nTailored the content and imagery of each banner to resonate with the target audience and align with the brand\'s messaging.\r\nTested the responsiveness and visual appeal of banners on various devices and screen sizes.\r\n\r\n\r\nDeveloped a storyboard outlining the narrative, visuals, and key messages of the advertisement.\r\nDirected the filming process, ensuring high-quality footage and adherence to the brand\'s aesthetic.\r\nEdited the video footage, incorporating animations, graphics, and sound effects to enhance engagement.\r\nOptimized the video for distribution on social media platforms and other digital channels', 'The primary objective of this project is to redesign the logo, design new bottles, and create banners of various sizes for Kavorka, an American-based makeup brand established in 2022. Additionally, the aim is to produce an advertisement video that effectively showcases the brand\'s identity and products. The overarching goal is to modernize the brand\'s visual identity, enhance its market presence, and establish a cohesive brand image across different platforms, particularly on social media', 'Through strategic planning and creative execution, the project successfully achieved its objectives of rebranding Kavorka makeup. The redesigned logo, innovative bottle designs, and visually appealing banners have refreshed the brand\'s image and increased its appeal to the target market. The advertisement video serves as a compelling promotional tool, effectively communicating the brand\'s value proposition and driving engagement with potential customers. Moving forward, continuous monitoring and adaptation to market dynamics will be essential to sustaining the brand\'s relevance and competitiveness in the ever-evolving beauty industry.'),
(3, 'ZIMA', 'Description for Project 3', 'project3_thumb.jpg', '\r\n\r\nConducted thorough market research to identify current trends, consumer preferences, and competitors\' strategies in the beverage industry.\r\nAnalyzed demographic data and consumer insights to understand target audience preferences and purchasing behavior.\r\nIdentified emerging trends in packaging design, flavor profiles, and marketing strategies within the beverage market.\r\nBrand Identity Redefinition:\r\n\r\nCollaborated with stakeholders to redefine Zima\'s brand identity, including its mission, values, and unique selling proposition (USP).\r\nDeveloped a brand personality that resonates with the target audience and reflects contemporary lifestyle trends.\r\nCrafted a new brand narrative that communicates Zima\'s story and differentiation in a compelling and authentic manner.\r\n\r\n\r\nUpdated Zima\'s logo and visual elements to reflect the brand\'s refreshed identity and resonate with modern consumers.\r\nIncorporated vibrant colors, sleek typography, and dynamic graphics to create a visually appealing and memorable brand identity.\r\nEnsured consistency in branding across various touchpoints, including packaging, marketing materials, and digital assets.\r\nProduct Innovation and Diversification:\r\n\r\nRevamped Zima\'s product lineup to align with evolving consumer preferences and market trends.\r\nIntroduced new flavor variations, formulations, and packaging options to cater to diverse consumer tastes and preferences.\r\n\r\n\r\nDeveloped a comprehensive marketing campaign to launch the rebranded Zima and generate buzz among target consumers.\r\nLeveraged multiple channels, including social media\r\nCreated engaging content, including videos, blog posts, and interactive experiences, to showcase Zima\'s brand story and product offerings.\r\n', 'The objective of this project is to rebrand Zima, a beverage company, in alignment with ongoing trends in the beverage industry. The goal is to refresh the brand\'s image, appeal to a wider audience, and position Zima as a contemporary and relevant player in the market. Through this rebranding effort, the aim is to increase brand awareness, drive consumer engagement, and ultimately boost sales', 'The rebranding of Zima has successfully revitalized the brand and positioned it for growth in a competitive beverage market. By embracing ongoing trends and consumer preferences, Zima has enhanced its relevance and appeal to a wider audience. The refreshed brand identity, innovative product offerings, and integrated marketing campaign have generated excitement and positive reception among consumers, driving increased brand awareness and sales. Moving forward, ongoing monitoring of market trends and consumer feedback will be essential to sustaining Zima\'s success and maintaining its position as a leading player in the beverage industry.');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
