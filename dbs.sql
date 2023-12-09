-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: app-db
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified` tinyint unsigned NOT NULL DEFAULT '0',
  `email_verify_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` bigint unsigned DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Amine Yaakoubi','super_admin',1,NULL,NULL,'amine@yaakoubi.me',NULL,NULL,'$2y$10$EmSJNhgVjTx5Khu64CZ//OQHdBfhMlVa5jVC5MGA9Pq3885VPGPbS','CmD6AVIhU1Msk5ccuRGUA4lVvoBlg51pcybkLos6gc4A99cdTmzNcDZATcPi','2023-01-31 08:03:32','2023-01-31 08:03:32');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_categories`
--

DROP TABLE IF EXISTS `blog_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_categories`
--

LOCK TABLES `blog_categories` WRITE;
/*!40000 ALTER TABLE `blog_categories` DISABLE KEYS */;
INSERT INTO `blog_categories` VALUES (1,'Social',1,'2022-03-13 03:25:11','2022-07-28 04:50:31'),(2,'Game',1,'2022-03-13 03:29:05','2022-07-28 04:50:31'),(3,'Sports',1,'2022-03-13 03:38:55','2022-07-28 04:50:31'),(4,'Life Style',1,'2022-03-13 03:39:03','2022-07-28 04:50:31'),(5,'Health',1,'2022-03-13 03:39:14','2022-07-28 04:50:31'),(6,'Travel',1,'2022-11-27 12:36:43','2022-11-27 12:36:43');
/*!40000 ALTER TABLE `blog_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_comments`
--

DROP TABLE IF EXISTS `blog_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `parent_id` bigint unsigned DEFAULT NULL,
  `commented_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_comments`
--

LOCK TABLES `blog_comments` WRITE;
/*!40000 ALTER TABLE `blog_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `admin_id` int DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image_gallery` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `visibility` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tags` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (50,'4',NULL,10,'You ten occasional saw everything but conviction','you-ten-occasional-saw-everything-but-conviction-2','<span style=\"font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: medium; white-space: pre;\">You ten occasional saw everything but conviction; you looked upon them as good, but a sentimentality you were loath to admit, as to do them justice, and as a sense you were afraid to express.\r\n\r\nMy saying that I was going away, you begged me to</span>','97','Sharifur Rahmam','',NULL,'0','#','public','on','admin',1,'2022-03-14 05:27:26','2022-11-27 12:10:01',NULL),(52,'4',NULL,10,'Had a great time together  are  added and seal there single','had-a-great-time-together-are-added-and-seal-there-single','<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">Pick up this morning’s newspaper or scan today’s web news and consider two things:</span></p><ol style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 23px; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; list-style-position: inside; list-style-image: initial; line-height: 26px; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">How do you select which articles to read</span></li><li style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">How the articles are written</span></li></ol><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">News organizations have been presenting information for several hundreds of years, in print and now via the web, and they have learned some highly effective practices that we can employ in demonstrating software.</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">Consider organizing your demonstrations like a news article.&nbsp;&nbsp;Here’s why:</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">Imagine you’ve just picked up today’s newspaper.&nbsp;&nbsp;What section do you turn to first?&nbsp;&nbsp;In many cases, people immediately select the sports section, or finance, or entertainment.&nbsp;&nbsp;Readers explore that section in as much depth as desired, then turn to the next section of interest.</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">Newspapers (and news websites) organize information in a&nbsp;<em style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">hierarchy&nbsp;of consumable components</em>&nbsp;– components that can be accessed rapidly, explored as deeply as desired, and exited at any point to move to the next component.&nbsp;&nbsp;The top level of the news hierarchy is the section – sports, finance, international, entertainment, comics…</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">Next, how do you choose which article you want to read?&nbsp;&nbsp;Typically, you scan for headlines that catch your interest.&nbsp;&nbsp;For many articles, you may only read the headline and move on rapidly – you’re not interested in the topic.&nbsp;&nbsp;Other articles engage your attention sufficiently to review the first few paragraphs, after which you stop and move on.&nbsp;&nbsp;Some articles you read all the way through, because they address a topic of real interest to you.</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">Each individual article is cleverly organized to enable readers to make rapid decisions about their depth of interest.&nbsp;&nbsp;The headline presents the topic – providing a binary opportunity for readers to pursue it or move on.&nbsp;&nbsp;The first one or two paragraphs of the article summarize the story, concisely.&nbsp;&nbsp;Many readers are completely satisfied with this level of information and read no further, returning to scan other headlines.</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">The subsequent paragraphs drill deeper and explore the story in more detail.&nbsp;&nbsp;Readers who are truly interested in the topic are the typical consumers of this level of information.</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">This organization and presentation of information are sometimes referred to as the “inverted pyramid” style of writing.&nbsp;&nbsp;It presents the most important information right at the beginning, in the first few paragraphs.&nbsp; The material in subsequent paragraphs is more and more detailed and of less importance.</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">In the bad old days of paper and ink, newspaper editors were able to cut articles to fit the space available – by cutting from the bottom of the article upwards.&nbsp;&nbsp;That way they knew they’d be removing the&nbsp;<em style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">least</em>&nbsp;important information.</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">News organizations have evolved this “inverted pyramid” method of presenting information over literally hundreds of years.&nbsp;&nbsp;Why not take advantage of this learning?</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">Consider organizing your demonstrations like a news article.&nbsp;&nbsp;Present a “headline” succinctly and rapidly.&nbsp;&nbsp;In Great Demo! the methodology we call an Illustration.</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">Assuming your audience is interested, present the key capabilities using a minimum of mouse clicks – like reading the first one or two paragraphs in a news article.&nbsp;&nbsp;The audience just wants a summary at this point – not all of the details!&nbsp;&nbsp;This corresponds to the Great Demo! “Do It” pathway.</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">Finally, for audiences that are really interested, you can dig deeper and explore the breadth and depth of the relevant capabilities – similar to those who wish to read more of the article.&nbsp;&nbsp;In Great Demo! we call this “Do It Again” or “Peel Back the Layers”.</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">Interestingly, also note that there are&nbsp;<em style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">very</em>&nbsp;few readers of the news who read&nbsp;<em style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">everything</em>&nbsp;in a newspaper or news website – similarly, you are&nbsp;<em style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">not</em>&nbsp;obligated to present everything that your software can do…!</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent;\">News organizations present information in a hierarchy of consumable components – why not apply the same ideas to your demos?</span></p>','99','Sharifur Rahmam','','99','0','#','public','on','admin',1,'2022-03-14 05:32:07','2022-10-17 05:00:16',NULL),(53,'4',NULL,10,'Tune  great time together  are  added and seal there single','tune-great-time-together-are-added-and-seal-there-single-2','<span style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\">Political  a great time together  are  added and seal there single status.</span><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\"><br></div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\">Mana Karmi, u should have warned me, I would have played that by ear.</div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\"><br></div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\">I\'ll play it better.</div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\"><br></div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\">To clarify what I was trying to explain.</div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\"><br></div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\">The typical member of our birth order who know you best</div>','98','Sharifur Rahmam','',NULL,'0','#','public','on','admin',1,'2022-03-14 05:34:47','2022-11-27 12:09:40',NULL),(54,'1',NULL,10,'Political  a great time together  are  added and seal there single','political-a-great-time-together-are-added-and-seal-there-single-1','<span style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\">Political  a great time together  are  added and seal there single status.</span><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\"><br></div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\">Mana Karmi, u should have warned me, I would have played that by ear.</div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\"><br></div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\">I\'ll play it better.</div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\"><br></div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\">To clarify what I was trying to explain.</div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\"><br></div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\">The typical member of our birth order who know you best</div>','90','Sharifur Rahmam','','101|87','0','#','public','on','admin',1,'2022-03-14 05:34:49','2022-11-27 12:09:36','road,street'),(55,'4',NULL,10,'new a great time together  are  added and seal there single','new-a-great-time-together-are-added-and-seal-there-single-1','<span style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\">new a great time together  are  added and seal there singlehood.</span><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\"><br></div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\">so there goes the state of the Sanrio boys.</div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\"><br></div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\">anyway i hope you have a very good day and i hope that these lyrics are not true and do not really happen in real life.</div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\"><br></div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\">Happy new year\'s eve everyone and be safe</div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\"><br></div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\">We won 2, it was the best of my choice even though I didn\'t got to my week and don\'t give up on it.</div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\"><br></div><div style=\"color: rgb(17, 17, 17); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 17px; white-space: pre-wrap;\">because no matter how hard it is it will get better when you least expect it.</div>','97','Sharifur Rahmam','',NULL,'0','#','public','on','admin',1,'2022-03-14 05:34:53','2022-11-27 12:09:09','me,ok'),(56,'1',NULL,10,'Covered hastilya great time together  are  added and seal there single','covered-hastilya-great-time-together-are-added-and-seal-there-single-1','<p ng-if=\"text.length > 0\" ng-repeat=\"text in output.html track by $index\" class=\"ng-binding ng-scope\" style=\"color: rgb(53, 66, 84); font-family: Roboto, sans-serif; font-size: 15px; margin: 15px 0px;\">I\'m going to be honest with you. I\'ve never really understood the appeal of dating apps. Sure, they seem convenient at times, but I always found them to be too impersonal.</p><p ng-if=\"text.length > 0\" ng-repeat=\"text in output.html track by $index\" class=\"ng-binding ng-scope\" style=\"color: rgb(53, 66, 84); font-family: Roboto, sans-serif; font-size: 15px; margin: 15px 0px;\">Dating apps have become very popular over the last few years. They allow singles to connect with each other without having to meet face-to-face. The rise of these apps has led to a new trend called \"swiping.\" Swiping refers to the way people swipe through profiles on dating apps.</p><p ng-if=\"text.length > 0\" ng-repeat=\"text in output.html track by $index\" class=\"ng-binding ng-scope\" style=\"color: rgb(53, 66, 84); font-family: Roboto, sans-serif; font-size: 15px; margin: 15px 0px;\">There are several reasons why swiping is becoming such a big deal. For starters, it allows people to get to know someone before meeting them in person. This eliminates the awkwardness of meeting someone for the first time. Also, swiping makes it easier to weed out potential matches who aren\'t worth your time.</p>','96','Sharifur Rahmam','{&amp;amp;amp;quot;en_GB&amp;amp;amp;quot;:&amp;amp;amp;quot;Enim qui molestias d cc&amp;amp;amp;quot;}',NULL,'0','#','public',NULL,'admin',1,'2022-03-14 05:34:56','2022-11-27 12:07:15',NULL),(57,'2',NULL,10,'Highways is my organization are  added and seal there single','highways-is-my-organization-are-added-and-seal-there-single-1','<p ng-if=\"text.length > 0\" ng-repeat=\"text in output.html track by $index\" class=\"ng-binding ng-scope\" style=\"color: rgb(53, 66, 84); font-family: Roboto, sans-serif; font-size: 15px; margin: 15px 0px;\">How often should you meet someone new?</p><p ng-if=\"text.length > 0\" ng-repeat=\"text in output.html track by $index\" class=\"ng-binding ng-scope\" style=\"color: rgb(53, 66, 84); font-family: Roboto, sans-serif; font-size: 15px; margin: 15px 0px;\">The dating scene has changed dramatically over the years. Thanks to social media, dating apps and other technological advances, meeting someone new has become easier than ever before.</p><p ng-if=\"text.length > 0\" ng-repeat=\"text in output.html track by $index\" class=\"ng-binding ng-scope\" style=\"color: rgb(53, 66, 84); font-family: Roboto, sans-serif; font-size: 15px; margin: 15px 0px;\">You don’t have to spend hours searching through profiles or waiting for someone to message you. Instead, you can simply swipe left or right to see who else is out there. If you want to get serious, you can even ask friends for recommendations.</p>','101','Sharifur Rahmam','','99','0','#','public','on','admin',1,'2022-03-14 05:34:58','2022-11-27 12:06:29','game,social');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'#','83',1,'2022-03-08 04:21:56','2022-03-12 01:11:21'),(2,'#','82',1,'2022-03-08 04:22:11','2022-03-12 01:11:13'),(3,'#','80',1,'2022-03-08 04:27:54','2022-03-12 01:11:04'),(4,'#','81',1,'2022-03-08 04:28:07','2022-03-12 01:09:26'),(8,'#','82',1,'2022-03-08 05:26:55','2022-03-12 01:08:54'),(9,'#','83',0,'2022-03-08 05:27:31','2022-03-13 04:33:26');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_messages`
--

DROP TABLE IF EXISTS `contact_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `form_builder_id` bigint NOT NULL,
  `fields` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `attachment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_messages`
--

LOCK TABLES `contact_messages` WRITE;
/*!40000 ALTER TABLE `contact_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `custom_domains`
--

DROP TABLE IF EXISTS `custom_domains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `custom_domains` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `old_domain` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_domain` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_domain_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `unique_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `custom_domains`
--

LOCK TABLES `custom_domains` WRITE;
/*!40000 ALTER TABLE `custom_domains` DISABLE KEYS */;
/*!40000 ALTER TABLE `custom_domains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `domains`
--

DROP TABLE IF EXISTS `domains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `domains` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `domain` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenant_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `domains_domain_unique` (`domain`),
  KEY `domains_tenant_id_foreign` (`tenant_id`),
  CONSTRAINT `domains_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domains`
--

LOCK TABLES `domains` WRITE;
/*!40000 ALTER TABLE `domains` DISABLE KEYS */;
INSERT INTO `domains` VALUES (149,'rayen5.devaly.ovh','rayen5','2023-01-31 22:43:42','2023-01-31 22:43:42'),(150,'amine.aupanier.tn','amine','2023-02-11 20:51:38','2023-02-11 20:51:38');
/*!40000 ALTER TABLE `domains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form_builders`
--

DROP TABLE IF EXISTS `form_builders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `form_builders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fields` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `success_message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_builders`
--

LOCK TABLES `form_builders` WRITE;
/*!40000 ALTER TABLE `form_builders` DISABLE KEYS */;
INSERT INTO `form_builders` VALUES (1,'Contact Form','info@nazmart.net','Submit','{\"success_message\":\"Thanx for your message\",\"field_type\":[\"text\",\"text\",\"email\",\"textarea\",\"file\"],\"field_name\":[\"kane\",\"subject\",\"email\",\"message\",\"attachment\"],\"field_placeholder\":[\"Your Name\",\"Your Subject\",\"Your Email\",\"Your Message\",\"Attahcment\"],\"field_required\":[\"on\",\"on\",\"on\",\"on\"],\"mimes_type\":{\"4\":\"mimes:jpg,jpeg,png\"}}','Thanx for your message','2022-03-09 00:18:58','2023-01-04 13:16:46'),(5,'Order Payment From','info@sohan.xgenious.com','Submit','{\"success_message\":\"Thanx for your message\",\"field_type\":[\"file\",\"textarea\"],\"field_name\":[\"file\",\"message\"],\"field_placeholder\":[\"File\",\"Message\"],\"mimes_type\":[\"mimes:jpg,jpeg,png\"]}','Thanx for your message','2022-04-17 03:03:27','2022-04-17 22:40:46'),(6,'contact us page','info@sohan.xgenious.com','Send','{\"success_message\":\"Thank you for contact with us\",\"field_type\":[\"text\",\"tel\",\"email\",\"text\",\"textarea\"],\"field_name\":[\"your-name\",\"phone\",\"email\",\"subject\",\"message\"],\"field_placeholder\":[\"Type Your Name\",\"Type Your Phone\",\"Type Your Email\",\"Type Your Subject\",\"Type Your Message\"],\"field_required\":{\"0\":\"on\",\"2\":\"on\",\"4\":\"on\"}}','Thank you for contact with us','2022-07-04 11:42:13','2023-01-04 15:07:37');
/*!40000 ALTER TABLE `form_builders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `languages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `direction` bigint unsigned NOT NULL DEFAULT '0',
  `status` bigint unsigned NOT NULL DEFAULT '0',
  `default` bigint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'English (UK)','en_GB',0,1,0,'2022-02-01 06:25:48','2023-02-01 02:40:34'),(3,'العربية','ar',1,1,0,'2022-02-01 06:34:28','2022-06-08 23:43:32'),(4,'Français','fr_FR',0,1,1,'2023-02-01 02:40:30','2023-02-01 02:40:34');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media_uploaders`
--

DROP TABLE IF EXISTS `media_uploaders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `media_uploaders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` bigint unsigned NOT NULL DEFAULT '0',
  `user_id` bigint unsigned NOT NULL DEFAULT '0',
  `dimensions` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=275 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_uploaders`
--

LOCK TABLES `media_uploaders` WRITE;
/*!40000 ALTER TABLE `media_uploaders` DISABLE KEYS */;
INSERT INTO `media_uploaders` VALUES (44,'heading-right.png','heading-right1647064241.png',NULL,'47.59 KB',0,10,'677 x 482 pixels','2022-03-11 23:50:41','2022-03-11 23:50:41'),(45,'011646734903.png','0116467349031647064585.png',NULL,'2.39 KB',0,10,'176 x 54 pixels','2022-03-11 23:56:25','2022-03-11 23:56:25'),(46,'011646724464.png','0116467244641647064585.png',NULL,'26.11 KB',0,10,'121 x 121 pixels','2022-03-11 23:56:25','2022-03-11 23:56:25'),(47,'011646739764.png','0116467397641647064586.png',NULL,'49.93 KB',0,10,'587 x 628 pixels','2022-03-11 23:56:26','2022-03-11 23:56:26'),(48,'021646647621.png','0216466476211647064586.png',NULL,'96.03 KB',0,10,'440 x 578 pixels','2022-03-11 23:56:26','2022-03-11 23:56:26'),(49,'021646734903.png','0216467349031647064586.png',NULL,'8.27 KB',0,10,'185 x 45 pixels','2022-03-11 23:56:26','2022-03-11 23:56:26'),(50,'031646647622.png','0316466476221647064586.png',NULL,'66.3 KB',0,10,'440 x 578 pixels','2022-03-11 23:56:26','2022-03-11 23:56:26'),(51,'031646734903.png','0316467349031647064586.png',NULL,'3.57 KB',0,10,'196 x 62 pixels','2022-03-11 23:56:26','2022-03-11 23:56:26'),(52,'041646734903.png','0416467349031647064587.png',NULL,'4.09 KB',0,10,'245 x 56 pixels','2022-03-11 23:56:27','2022-03-11 23:56:27'),(53,'041646647622.png','0416466476221647064586.png',NULL,'75.19 KB',0,10,'440 x 578 pixels','2022-03-11 23:56:27','2022-03-11 23:56:27'),(54,'051646647622.png','0516466476221647064587.png',NULL,'55.71 KB',0,10,'440 x 578 pixels','2022-03-11 23:56:27','2022-03-11 23:56:27'),(55,'061646647622.png','0616466476221647064587.png',NULL,'66.02 KB',0,10,'440 x 578 pixels','2022-03-11 23:56:27','2022-03-11 23:56:27'),(56,'cta-bg-min1644321111.jpg','cta-bg-min16443211111647064587.jpg',NULL,'168.99 KB',0,10,'1920 x 807 pixels','2022-03-11 23:56:28','2022-03-11 23:56:28'),(57,'faq1646564714.png','faq16465647141647064588.png',NULL,'48.97 KB',0,10,'579 x 620 pixels','2022-03-11 23:56:28','2022-03-11 23:56:28'),(58,'group-11712745741643787578.png','group-117127457416437875781647064588.png',NULL,'1.07 KB',0,10,'46 x 51 pixels','2022-03-11 23:56:28','2022-03-11 23:56:28'),(59,'copy-of-img-8338-1-41643621654.jpg','copy-of-img-8338-1-416436216541647064587.jpg',NULL,'2.2 MB',0,10,'2250 x 2850 pixels','2022-03-11 23:56:29','2022-03-11 23:56:29'),(60,'heading-right1646564714.png','heading-right16465647141647064588.png',NULL,'47.59 KB',0,10,'677 x 482 pixels','2022-03-11 23:56:29','2022-03-11 23:56:29'),(61,'logo-11643609628.png','logo-116436096281647064589.png',NULL,'1.31 KB',0,10,'109 x 35 pixels','2022-03-11 23:56:29','2022-03-11 23:56:29'),(62,'how-it-work1646564714.png','how-it-work16465647141647064589.png',NULL,'45.44 KB',0,10,'726 x 546 pixels','2022-03-11 23:56:29','2022-03-11 23:56:29'),(63,'logo-021643609627.png','logo-0216436096271647064589.png',NULL,'1.08 KB',0,10,'109 x 35 pixels','2022-03-11 23:56:29','2022-03-11 23:56:29'),(64,'logo-with-icon1643787578.png','logo-with-icon16437875781647064589.png',NULL,'4.39 KB',0,10,'337 x 51 pixels','2022-03-11 23:56:29','2022-03-11 23:56:29'),(65,'maintenance1646638668.png','maintenance16466386681647064589.png',NULL,'3.87 KB',0,10,'78 x 76 pixels','2022-03-11 23:56:29','2022-03-11 23:56:29'),(66,'trusted1646638668.png','trusted16466386681647064589.png',NULL,'3.51 KB',0,10,'80 x 78 pixels','2022-03-11 23:56:29','2022-03-11 23:56:29'),(67,'wide-brand1646638668.png','wide-brand16466386681647064589.png',NULL,'4.04 KB',0,10,'78 x 85 pixels','2022-03-11 23:56:29','2022-03-11 23:56:29'),(68,'xmlid-11643787578.png','xmlid-116437875781647064590.png',NULL,'1.06 KB',0,10,'46 x 51 pixels','2022-03-11 23:56:30','2022-03-11 23:56:30'),(69,'01.png','011647064922.png',NULL,'92.37 KB',0,10,'440 x 578 pixels','2022-03-12 00:02:02','2022-03-12 00:02:02'),(70,'02.png','021647064922.png',NULL,'96.03 KB',0,10,'440 x 578 pixels','2022-03-12 00:02:02','2022-03-12 00:02:02'),(71,'03.png','031647064923.png',NULL,'66.3 KB',0,10,'440 x 578 pixels','2022-03-12 00:02:03','2022-03-12 00:02:03'),(72,'04.png','041647064923.png',NULL,'75.19 KB',0,10,'440 x 578 pixels','2022-03-12 00:02:03','2022-03-12 00:02:03'),(73,'05.png','051647064923.png',NULL,'55.71 KB',0,10,'440 x 578 pixels','2022-03-12 00:02:03','2022-03-12 00:02:03'),(74,'06.png','061647064923.png',NULL,'66.02 KB',0,10,'440 x 578 pixels','2022-03-12 00:02:03','2022-03-12 00:02:03'),(75,'01.png','011647065213.png',NULL,'26.11 KB',0,10,'121 x 121 pixels','2022-03-12 00:06:53','2022-03-12 00:06:53'),(76,'logo-with-icon1643787578.png','logo-with-icon16437875781647067377.png',NULL,'4.39 KB',0,10,'337 x 51 pixels','2022-03-12 00:42:57','2022-03-12 00:42:57'),(77,'white-text-logo1643790182.png','white-text-logo16437901821647067377.png',NULL,'3.93 KB',0,10,'337 x 51 pixels','2022-03-12 00:42:57','2022-03-12 00:42:57'),(78,'xmlid-11643787578.png','xmlid-116437875781647067377.png',NULL,'1.06 KB',0,10,'46 x 51 pixels','2022-03-12 00:42:57','2022-03-12 00:42:57'),(79,'011646739764.png','0116467397641647067519.png',NULL,'49.93 KB',0,10,'587 x 628 pixels','2022-03-12 00:45:19','2022-03-12 00:45:19'),(80,'02.png','021647067592.png',NULL,'8.27 KB',0,10,'185 x 45 pixels','2022-03-12 00:46:32','2022-03-12 00:46:32'),(81,'01.png','011647067592.png',NULL,'2.39 KB',0,10,'176 x 54 pixels','2022-03-12 00:46:32','2022-03-12 00:46:32'),(82,'03.png','031647067593.png',NULL,'3.57 KB',0,10,'196 x 62 pixels','2022-03-12 00:46:33','2022-03-12 00:46:33'),(83,'04.png','041647067593.png',NULL,'4.09 KB',0,10,'245 x 56 pixels','2022-03-12 00:46:33','2022-03-12 00:46:33'),(84,'Developer.jpg','developer1647067863.jpg',NULL,'85.75 KB',0,10,'719 x 960 pixels','2022-03-12 00:51:03','2022-03-12 00:51:03'),(85,'1636fb5bdd0b97b09b688b9243f350e7.jpg','1636fb5bdd0b97b09b688b9243f350e71647176281.jpg',NULL,'54.33 KB',0,10,'1920 x 1108 pixels','2022-03-13 06:58:02','2022-03-13 06:58:02'),(86,'01.png','011647233451.png',NULL,'132.39 KB',0,10,'440 x 320 pixels','2022-03-13 22:50:51','2022-03-13 22:50:51'),(87,'box-music-optimized-21643441354.jpg','box-music-optimized-216434413541647233501.jpg',NULL,'26.84 KB',0,10,'527 x 351 pixels','2022-03-13 22:51:41','2022-03-13 22:51:41'),(88,'box-pexels-francesco-ungaro-23254461643543774.jpg','box-pexels-francesco-ungaro-232544616435437741647233501.jpg',NULL,'47.55 KB',0,10,'527 x 351 pixels','2022-03-13 22:51:41','2022-03-13 22:51:41'),(89,'box-pexels-rachel-claire-48257011643543964.jpg','box-pexels-rachel-claire-482570116435439641647233501.jpg',NULL,'49.92 KB',0,10,'527 x 351 pixels','2022-03-13 22:51:41','2022-03-13 22:51:41'),(90,'box-pexels-mads-thomsen-27390131643543964.jpg','box-pexels-mads-thomsen-273901316435439641647233501.jpg',NULL,'37.31 KB',0,10,'527 x 351 pixels','2022-03-13 22:51:41','2022-03-13 22:51:41'),(91,'box-pexels-ron-lach-89746441643544290.jpg','box-pexels-ron-lach-897464416435442901647233501.jpg',NULL,'46.67 KB',0,10,'527 x 351 pixels','2022-03-13 22:51:41','2022-03-13 22:51:41'),(92,'box-pexels-run-ffwpu-253-enyrp1643443857.jpg','box-pexels-run-ffwpu-253-enyrp16434438571647233501.jpg',NULL,'60.91 KB',0,10,'527 x 296 pixels','2022-03-13 22:51:41','2022-03-13 22:51:41'),(93,'box-pexels-sharad-kachhi-hhzcn1643450023.jpg','box-pexels-sharad-kachhi-hhzcn16434500231647233502.jpg',NULL,'39.56 KB',0,10,'527 x 351 pixels','2022-03-13 22:51:42','2022-03-13 22:51:42'),(94,'box-sp-optimized-31643442648.jpg','box-sp-optimized-316434426481647233502.jpg',NULL,'68.59 KB',0,10,'527 x 351 pixels','2022-03-13 22:51:42','2022-03-13 22:51:42'),(95,'box-sp-optimized-41643442648.jpg','box-sp-optimized-416434426481647233502.jpg',NULL,'54.04 KB',0,10,'527 x 351 pixels','2022-03-13 22:51:42','2022-03-13 22:51:42'),(96,'box-sp-optimized-51643442649.jpg','box-sp-optimized-516434426491647233502.jpg',NULL,'42.86 KB',0,10,'527 x 351 pixels','2022-03-13 22:51:42','2022-03-13 22:51:42'),(97,'box-travel-optimized-11643441303.jpg','box-travel-optimized-116434413031647233502.jpg',NULL,'94.68 KB',0,10,'527 x 351 pixels','2022-03-13 22:51:42','2022-03-13 22:51:42'),(98,'box-travel-optimized-21643441303.jpg','box-travel-optimized-216434413031647233502.jpg',NULL,'53.67 KB',0,10,'527 x 351 pixels','2022-03-13 22:51:42','2022-03-13 22:51:42'),(99,'box-travel-optimized-41643441304.jpg','box-travel-optimized-416434413041647233503.jpg',NULL,'41.59 KB',0,10,'527 x 351 pixels','2022-03-13 22:51:43','2022-03-13 22:51:43'),(100,'box-ujjol1645196027.jpg','box-ujjol16451960271647233503.jpg',NULL,'36.7 KB',0,10,'527 x 273 pixels','2022-03-13 22:51:43','2022-03-13 22:51:43'),(101,'box-vehicle-optimized-11643442417.jpg','box-vehicle-optimized-116434424171647233503.jpg',NULL,'56.43 KB',0,10,'527 x 351 pixels','2022-03-13 22:51:43','2022-03-13 22:51:43'),(102,'grid-mid1639824012.png','grid-mid16398240121650183083.png',NULL,'8.17 KB',0,10,'350 x 58 pixels','2022-04-17 02:11:23','2022-04-17 02:11:23'),(103,'grid-mercadopago-logo1643896370.png','grid-mercadopago-logo16438963701650183083.png',NULL,'21.7 KB',0,10,'350 x 91 pixels','2022-04-17 02:11:23','2022-04-17 02:11:23'),(104,'grid-mollie1616934783.png','grid-mollie16169347831650183083.png',NULL,'14.17 KB',0,10,'350 x 194 pixels','2022-04-17 02:11:23','2022-04-17 02:11:23'),(105,'grid-payfast-banner1639823358.jpg','grid-payfast-banner16398233581650183083.jpg',NULL,'8.8 KB',0,10,'350 x 164 pixels','2022-04-17 02:11:23','2022-04-17 02:11:23'),(106,'grid-paypal1616934784.png','grid-paypal16169347841650183083.png',NULL,'25.53 KB',0,10,'350 x 156 pixels','2022-04-17 02:11:23','2022-04-17 02:11:23'),(107,'grid-payment-getway1616934783.png','grid-payment-getway16169347831650183083.png',NULL,'19.96 KB',0,10,'350 x 292 pixels','2022-04-17 02:11:23','2022-04-17 02:11:23'),(108,'grid-paystack1616934784.jpeg','grid-paystack16169347841650183083.jpg',NULL,'8.75 KB',0,10,'350 x 97 pixels','2022-04-17 02:11:23','2022-04-17 02:11:23'),(109,'grid-paytm1616934784.png','grid-paytm16169347841650183083.png',NULL,'11.57 KB',0,10,'350 x 117 pixels','2022-04-17 02:11:23','2022-04-17 02:11:23'),(110,'grid-razorpay1616934785.png','grid-razorpay16169347851650183083.png',NULL,'16.48 KB',0,10,'350 x 210 pixels','2022-04-17 02:11:23','2022-04-17 02:11:23'),(111,'instamogo1639823357.jpg','instamogo16398233571650183083.jpg',NULL,'26.18 KB',0,10,'1200 x 675 pixels','2022-04-17 02:11:23','2022-04-17 02:11:23'),(112,'large-cash-free1639823357.png','large-cash-free16398233571650183083.png',NULL,'132.48 KB',0,10,'740 x 389 pixels','2022-04-17 02:11:23','2022-04-17 02:11:23'),(113,'large-stripe16169347851649667972.png','large-stripe161693478516496679721650183254.png',NULL,'175.53 KB',0,10,'740 x 370 pixels','2022-04-17 02:14:14','2022-04-17 02:14:14'),(114,'thumb-flutterwave16169347821649668113.jpg','thumb-flutterwave161693478216496681131650183452.jpg',NULL,'3.96 KB',0,10,'150 x 150 pixels','2022-04-17 02:17:33','2022-04-17 02:17:33'),(115,'grid-payment-getway16169347831649660231.png','grid-payment-getway161693478316496602311650183652.png',NULL,'19.96 KB',0,10,'350 x 292 pixels','2022-04-17 02:20:52','2022-04-17 02:20:52'),(116,'94-949481_high-resolution-game-of-thrones-laptop-background-id.jpg','94-949481-high-resolution-game-of-thrones-laptop-background-id1652248613.jpg',NULL,'51.64 KB',0,10,'1366 x 768 pixels','2022-05-10 23:56:53','2022-05-10 23:56:53'),(117,'wp528836.jpg','wp5288361653372009.jpg',NULL,'184.88 KB',0,10,'1440 x 1080 pixels','2022-05-24 00:00:09','2022-05-24 00:00:09'),(197,'grid-4041641989677.png','grid-40416419896771654680193.png',NULL,'36.01 KB',0,10,'350 x 234 pixels','2022-06-08 09:23:13','2022-06-08 09:23:13'),(198,'large-optimized-91641789357.jpg','large-optimized-916417893571654681807.jpg',NULL,'31.72 KB',0,10,'740 x 493 pixels','2022-06-08 09:50:07','2022-06-08 09:50:07'),(199,'windows-11-windows-10-minimalism-hd-wallpaper-preview.jpg','windows-11-windows-10-minimalism-hd-wallpaper-preview1655892658.jpg',NULL,'8.33 KB',0,10,'728 x 410 pixels','2022-06-22 10:10:58','2022-06-22 10:10:58'),(200,'wp6878829.jpg','wp68788291655903339.jpg',NULL,'82.62 KB',0,10,'1920 x 1080 pixels','2022-06-22 13:09:00','2022-06-22 13:09:00'),(201,'photo-1542831371-29b0f74f9713.jpg','photo-1542831371-29b0f74f97131655903400.jpg',NULL,'85.18 KB',0,10,'1000 x 667 pixels','2022-06-22 13:10:00','2022-06-22 13:10:00'),(203,'photo-1524169358666-79f22534bc6e.jpg','photo-1524169358666-79f22534bc6e1655903666.jpg',NULL,'78.3 KB',0,10,'1170 x 780 pixels','2022-06-22 13:14:26','2022-06-22 13:14:26'),(204,'unnamed.png','unnamed1655904901.png',NULL,'193.61 KB',0,10,'512 x 288 pixels','2022-06-22 13:35:01','2022-06-22 13:35:01'),(205,'272364744_4735687816548510_7807068761300097093_n.jpg','272364744-4735687816548510-7807068761300097093-n1656245904.jpg',NULL,'226.94 KB',0,10,'960 x 954 pixels','2022-06-26 12:18:24','2022-06-26 12:18:24'),(206,'logo.png','logo1656415519.png',NULL,'1.39 KB',0,10,'109 x 63 pixels','2022-06-28 11:25:19','2022-06-28 11:25:19'),(207,'banner-wave-s.png','banner-wave-s1656420674.png',NULL,'21.28 KB',0,10,'1115 x 1036 pixels','2022-06-28 12:51:14','2022-06-28 12:51:14'),(208,'left-dot-line.png','left-dot-line1656420692.png',NULL,'1.62 KB',0,10,'163 x 115 pixels','2022-06-28 12:51:32','2022-06-28 12:51:32'),(209,'right-dot-line.png','right-dot-line1656420703.png',NULL,'1.38 KB',0,10,'125 x 115 pixels','2022-06-28 12:51:43','2022-06-28 12:51:43'),(210,'banner-radius-shape.png','banner-radius-shape1656423130.png',NULL,'17.6 KB',0,10,'584 x 585 pixels','2022-06-28 13:32:10','2022-06-28 13:32:10'),(211,'banner-right.png','banner-right1656423161.png',NULL,'17.44 KB',0,10,'480 x 528 pixels','2022-06-28 13:32:41','2022-06-28 13:32:41'),(212,'bs1.png','bs11656423174.png',NULL,'2.86 KB',0,10,'86 x 85 pixels','2022-06-28 13:32:54','2022-06-28 13:32:54'),(213,'bs2.png','bs21656423182.png',NULL,'3.01 KB',0,10,'85 x 86 pixels','2022-06-28 13:33:03','2022-06-28 13:33:03'),(214,'bs3.png','bs31656423192.png',NULL,'3.16 KB',0,10,'86 x 85 pixels','2022-06-28 13:33:12','2022-06-28 13:33:12'),(215,'f1.png','f11656568344.png',NULL,'4.5 KB',0,10,'70 x 70 pixels','2022-06-30 05:52:24','2022-06-30 05:52:24'),(216,'feature-wave-s.png','feature-wave-s1656568774.png',NULL,'4.44 KB',0,10,'224 x 203 pixels','2022-06-30 05:59:34','2022-06-30 05:59:34'),(217,'f2.png','f21656568852.png',NULL,'495 ',0,10,'80 x 80 pixels','2022-06-30 06:00:52','2022-06-30 06:00:52'),(218,'f3.png','f31656574652.png',NULL,'2.89 KB',0,10,'70 x 70 pixels','2022-06-30 07:37:32','2022-06-30 07:37:32'),(219,'f4.png','f41656574701.png',NULL,'3.64 KB',0,10,'70 x 70 pixels','2022-06-30 07:38:21','2022-06-30 07:38:21'),(220,'f5.png','f51656574715.png',NULL,'4.81 KB',0,10,'70 x 70 pixels','2022-06-30 07:38:35','2022-06-30 07:38:35'),(221,'f6.png','f61656574745.png',NULL,'1.64 KB',0,10,'70 x 70 pixels','2022-06-30 07:39:05','2022-06-30 07:39:05'),(222,'th1.jpg','th11656585519.jpg',NULL,'25.29 KB',0,10,'458 x 573 pixels','2022-06-30 10:38:39','2022-06-30 10:38:39'),(223,'th2.jpg','th21656585572.jpg',NULL,'27.06 KB',0,10,'458 x 573 pixels','2022-06-30 10:39:32','2022-06-30 10:39:32'),(224,'th3.jpg','th31656585599.jpg',NULL,'24.94 KB',0,10,'458 x 573 pixels','2022-06-30 10:39:59','2022-06-30 10:39:59'),(225,'theme_shape.png','theme-shape1656585704.png',NULL,'3.71 KB',0,10,'128 x 228 pixels','2022-06-30 10:41:44','2022-06-30 10:41:44'),(226,'choose.png','choose1656830740.png',NULL,'35.59 KB',0,10,'625 x 573 pixels','2022-07-03 06:45:40','2022-07-03 06:45:40'),(227,'ci1.png','ci11656830833.png',NULL,'2.9 KB',0,10,'80 x 80 pixels','2022-07-03 06:47:13','2022-07-03 06:47:13'),(228,'ci2.png','ci21656830860.png',NULL,'4.51 KB',0,10,'80 x 80 pixels','2022-07-03 06:47:40','2022-07-03 06:47:40'),(229,'ci3.png','ci31656830878.png',NULL,'3.99 KB',0,10,'80 x 80 pixels','2022-07-03 06:47:59','2022-07-03 06:47:59'),(230,'choose.png','choose1656916349.png',NULL,'35.59 KB',0,10,'625 x 573 pixels','2022-07-04 06:32:29','2022-07-04 06:32:29'),(231,'question.png','question1656917313.png',NULL,'41.21 KB',0,10,'593 x 472 pixels','2022-07-04 06:48:33','2022-07-04 06:48:33'),(232,'getupdate-line.png','getupdate-line1656919987.png',NULL,'11.93 KB',0,10,'1410 x 486 pixels','2022-07-04 07:33:07','2022-07-04 07:33:07'),(233,'about.png','about1656930323.png',NULL,'50.53 KB',0,10,'1270 x 693 pixels','2022-07-04 10:25:23','2022-07-04 10:25:23'),(234,'contact1.png','contact11656936453.png',NULL,'4.97 KB',0,10,'80 x 80 pixels','2022-07-04 12:07:33','2022-07-04 12:07:33'),(235,'contact2.png','contact21656936473.png',NULL,'500 ',0,10,'80 x 80 pixels','2022-07-04 12:07:53','2022-07-04 12:07:53'),(236,'contact3.png','contact31656936494.png',NULL,'4.25 KB',0,10,'80 x 80 pixels','2022-07-04 12:08:14','2022-07-04 12:08:14'),(237,'logo.png','logo1658814161.png',NULL,'6.64 KB',0,10,'251 x 61 pixels','2022-07-26 05:42:41','2022-07-26 05:42:41'),(238,'Square-logo.jpeg','square-logo1658814802.jpg',NULL,'28.46 KB',0,10,'1280 x 720 pixels','2022-07-26 05:53:22','2022-07-26 05:53:22'),(239,'Untitled design (8).jpg','untitled-design-81658815830.jpg',NULL,'7.18 KB',0,10,'440 x 260 pixels','2022-07-26 06:10:30','2022-07-26 06:10:30'),(241,'83-836574_paytabs-in-the-news-paytabs.png','83-836574-paytabs-in-the-news-paytabs1658816083.png',NULL,'543.02 KB',0,10,'5253 x 1605 pixels','2022-07-26 06:14:44','2022-07-26 06:14:44'),(242,'logo_facebook_dimension-912ae2521fe6b786a8c78a5cd1a7dfb31434c628a7d03f4377cbeb4707d6e305.png','logo-facebook-dimension-912ae2521fe6b786a8c78a5cd1a7dfb31434c628a7d03f4377cbeb4707d6e3051658816200.png',NULL,'15.13 KB',0,10,'1200 x 630 pixels','2022-07-26 06:16:40','2022-07-26 06:16:40'),(243,'293299366_5226368390813781_8230215332468032806_n.jpg','293299366-5226368390813781-8230215332468032806-n1659608495.jpg',NULL,'633.03 KB',0,10,'2048 x 1376 pixels','2022-08-04 10:21:35','2022-08-04 10:21:35'),(244,'gettyimages-693134468.jpeg','gettyimages-6931344681659765684.jpg',NULL,'90.58 KB',0,10,'1200 x 1200 pixels','2022-08-06 06:01:24','2022-08-06 06:01:24'),(245,'image (6).png','image-61665985568.png',NULL,'43.22 KB',0,10,'2206 x 429 pixels','2022-10-17 05:46:08','2022-10-17 05:46:08'),(246,'image (7).png','image-71665985934.png',NULL,'115.19 KB',0,10,'2980 x 2548 pixels','2022-10-17 05:52:14','2022-10-17 05:52:14'),(247,'image (9).png','image-91666006737.png',NULL,'77.2 KB',0,10,'3314 x 984 pixels','2022-10-17 11:38:58','2022-10-17 11:38:58'),(249,'avatar.png','avatar1669552221.png',NULL,'8.51 KB',0,10,'1000 x 1000 pixels','2022-11-27 12:30:21','2022-11-27 12:30:21'),(250,'seotyp-2022.png','seotyp-20221670242046.png',NULL,'4.39 KB',0,10,'416 x 279 pixels','2022-12-05 12:07:26','2022-12-05 12:07:26'),(251,'0_RAingeIh9IH8rPIV.png','0-raingeih9ih8rpiv1670242309.png',NULL,'20.98 KB',0,10,'1200 x 630 pixels','2022-12-05 12:11:49','2022-12-05 12:11:49'),(252,'payfast-logo.png','payfast-logo1670242370.png',NULL,'78.94 KB',0,10,'1280 x 720 pixels','2022-12-05 12:12:50','2022-12-05 12:12:50'),(256,'black.png','black1676066762.png',NULL,'61.62 KB',0,1,'1000 x 1000 pixels','2023-02-10 23:06:03','2023-02-10 23:06:03'),(257,'blackwithouttext.png','blackwithouttext1676066787.png',NULL,'38.89 KB',0,1,'637 x 712 pixels','2023-02-10 23:06:27','2023-02-10 23:06:27'),(258,'blackrighttext.png','blackrighttext1676066823.png',NULL,'72.87 KB',0,1,'1786 x 712 pixels','2023-02-10 23:07:04','2023-02-10 23:07:04'),(259,'white black.png','white-black1676066850.png',NULL,'74.48 KB',0,1,'1000 x 1000 pixels','2023-02-10 23:07:31','2023-02-10 23:07:31'),(260,'white without text.png','white-without-text1676067053.png',NULL,'40.34 KB',0,1,'637 x 712 pixels','2023-02-10 23:10:53','2023-02-10 23:10:53'),(261,'grid-40416419896771654680193.png','grid-404164198967716546801931676067889.png',NULL,'14.05 KB',0,1,'350 x 234 pixels','2023-02-10 23:24:49','2023-02-10 23:24:49'),(262,'grid-40416419896771654680193.png','grid-404164198967716546801931676067918.png',NULL,'14.05 KB',0,1,'350 x 234 pixels','2023-02-10 23:25:18','2023-02-10 23:25:18'),(263,'whitewithouttextfullcolor.png','whitewithouttextfullcolor1676489582.png',NULL,'39.38 KB',0,1,'605 x 712 pixels','2023-02-15 20:33:02','2023-02-15 20:33:02'),(264,'whitewithouttextfullcolor.png','whitewithouttextfullcolor1676489603.png',NULL,'39.38 KB',0,1,'605 x 712 pixels','2023-02-15 20:33:23','2023-02-15 20:33:23'),(265,'blackwithouttextfullcolor.png','blackwithouttextfullcolor1676489671.png',NULL,'42.04 KB',0,1,'605 x 712 pixels','2023-02-15 20:34:31','2023-02-15 20:34:31'),(266,'blaccvbfgbfkrighttext.png','blaccvbfgbfkrighttext1676489794.png',NULL,'44.12 KB',0,1,'605 x 712 pixels','2023-02-15 20:36:35','2023-02-15 20:36:35'),(267,'blackrighttextwithcercle.png','blackrighttextwithcercle1676489850.png',NULL,'78.43 KB',0,1,'1786 x 712 pixels','2023-02-15 20:37:30','2023-02-15 20:37:30'),(268,'f41656574711.png','f416565747111676490983.png',NULL,'3.08 KB',0,1,'70 x 70 pixels','2023-02-15 20:56:23','2023-02-15 20:56:23'),(269,'f41656574713.png','f416565747131676491108.png',NULL,'3.16 KB',0,1,'70 x 65 pixels','2023-02-15 20:58:28','2023-02-15 20:58:28'),(270,'f41656574714.png','f416565747141676491162.png',NULL,'2.65 KB',0,1,'70 x 70 pixels','2023-02-15 20:59:22','2023-02-15 20:59:22'),(271,'f41656574708.png','f416565747081676491268.png',NULL,'2.86 KB',0,1,'70 x 70 pixels','2023-02-15 21:01:08','2023-02-15 21:01:08'),(272,'f41656574715.png','f416565747151676491454.png',NULL,'2.77 KB',0,1,'70 x 70 pixels','2023-02-15 21:04:15','2023-02-15 21:04:15'),(273,'f41656574716.png','f416565747161676491553.png',NULL,'3.36 KB',0,1,'70 x 70 pixels','2023-02-15 21:05:53','2023-02-15 21:05:53'),(274,'Your-Dream-Design-1671460225.png','your-dream-design-16714602251676619253.png',NULL,'228.92 KB',0,1,'1256 x 1096 pixels','2023-02-17 08:34:14','2023-02-17 08:34:14');
/*!40000 ALTER TABLE `media_uploaders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'primary_menu','[{\"ptype\":\"custom\",\"id\":2,\"antarget\":\"\",\"icon\":\"\",\"pname\":\"Home\",\"purl\":\"javascript:void(0)\",\"children\":[{\"ptype\":\"pages\",\"id\":3,\"antarget\":\"\",\"icon\":\"\",\"menulabel\":\"\",\"pid\":1},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{\"ptype\":\"custom\",\"id\":25,\"antarget\":\"\",\"icon\":\"\",\"pname\":\"Theme 01\",\"purl\":\"http://hexfashion.xyz/\"},{},{},{\"ptype\":\"custom\",\"id\":27,\"antarget\":\"\",\"icon\":\"\",\"pname\":\"Theme 02\",\"purl\":\"https://furniture.nazmart.net/\"},{}]},{\"ptype\":\"pages\",\"id\":28,\"antarget\":\"\",\"icon\":\"\",\"menulabel\":\"\",\"pid\":5},{\"ptype\":\"custom\",\"id\":29,\"antarget\":\"\",\"icon\":\"\",\"pname\":\"Pages\",\"purl\":\"javascript:void(0)\",\"children\":[{\"ptype\":\"pages\",\"id\":30,\"antarget\":\"\",\"icon\":\"\",\"menulabel\":\"\",\"pid\":6},{},{},{},{},{},{},{},{\"ptype\":\"pages\",\"id\":37,\"antarget\":\"\",\"icon\":\"\",\"menulabel\":\"\",\"pid\":7},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{}]},{\"ptype\":\"pages\",\"pid\":10,\"id\":57},{\"ptype\":\"pages\",\"id\":65,\"antarget\":\"\",\"icon\":\"\",\"menulabel\":\"\",\"pid\":12}]','default','2022-07-06 10:58:08','2023-01-04 10:44:03');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta_infos`
--

DROP TABLE IF EXISTS `meta_infos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `meta_infos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metainfoable_id` bigint unsigned NOT NULL,
  `metainfoable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta_infos`
--

LOCK TABLES `meta_infos` WRITE;
/*!40000 ALTER TABLE `meta_infos` DISABLE KEYS */;
INSERT INTO `meta_infos` VALUES (4,'','',NULL,'','',NULL,'','',NULL,5,'App\\Models\\Page','2022-06-28 10:35:08','2022-11-17 07:02:26'),(5,'','',NULL,'','',NULL,'','',NULL,6,'App\\Models\\Page','2022-06-28 10:35:25','2022-11-17 07:02:00'),(6,'','',NULL,'','',NULL,'','',NULL,7,'App\\Models\\Page','2022-06-28 10:35:37','2022-11-17 07:03:12'),(9,'','',NULL,'','',NULL,'','',NULL,10,'App\\Models\\Page','2022-06-28 10:36:02','2022-11-17 07:02:48'),(11,'','',NULL,'','',NULL,'','',NULL,12,'App\\Models\\Page','2022-06-28 10:36:23','2022-11-17 07:03:23'),(12,'','',NULL,'','',NULL,'','',NULL,13,'App\\Models\\Page','2023-01-04 14:42:33','2023-01-04 14:53:21'),(13,'','',NULL,'','',NULL,'','',NULL,14,'App\\Models\\Page','2023-01-04 14:42:40','2023-01-04 14:53:53');
/*!40000 ALTER TABLE `meta_infos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (19,'2014_10_12_100000_create_password_resets_table',1),(20,'2019_08_19_000000_create_failed_jobs_table',1),(21,'2019_09_15_000010_create_tenants_table',1),(22,'2019_09_15_000020_create_domains_table',1),(23,'2019_12_14_000001_create_personal_access_tokens_table',1),(25,'2021_12_26_170117_extra_user_info_cuolumn_in_users_table',1),(26,'2022_01_01_145526_create_tenant_activity_log_table',1),(27,'2022_01_19_000000_create_admins_table',1),(28,'2022_01_25_065131_create_media_uploaders_table',1),(29,'2022_01_27_095341_create_static_options_table',1),(30,'2022_02_01_152257_create_languages_table',1),(31,'2022_02_09_135035_add_api_palintext_token_fields_to_user_table',1),(32,'2022_02_12_073344_create_pages_table',1),(33,'2022_02_13_063256_create_meta_infos_table',1),(35,'2021_07_07_065836_create_page_builders_table',2),(36,'2022_03_08_050625_create_testimonials_table',3),(37,'2022_03_08_094423_create_brands_table',4),(38,'2021_10_07_054604_create_form_builders_table',5),(40,'2022_03_09_094928_create_contact_messages_table',6),(41,'2022_03_12_081230_create_blogs_table',7),(42,'2022_03_12_081651_create_blog_categories_table',7),(43,'2022_03_13_121230_create_meta_datas_table',8),(44,'2020_06_14_081955_create_widgets_table',9),(45,'2022_03_20_054850_blog_comments',10),(46,'2022_04_02_052148_create_services_table',11),(47,'2022_04_07_050407_create_service_categories_table',12),(48,'2022_04_10_080621_create_payment_gateways_table',13),(49,'2020_04_21_142420_create_payment_logs_table',14),(50,'2022_03_20_054850_create_blog_comments',15),(52,'2022_04_20_100718_create_permission_tables',16),(53,'2022_04_23_100733_create_notifications_table',17),(54,'2021_05_20_073306_create_support_tickets_table',18),(55,'2021_05_20_080827_create_support_ticket_messages_table',18),(56,'2021_08_29_125001_create_support_departments_table',19),(57,'2022_05_30_080904_create_plan_features_table',20),(58,'2022_05_30_110043_add_column_validity_to_payment_logs_table',21),(59,'2022_06_01_185036_add_column_tmp_password_to_users_table',22),(60,'2022_06_02_125414_add_column_renew_status_to_payment_logs_table',23),(61,'2022_06_12_134559_create_jobs_table',24),(62,'2022_06_12_172628_add_column_custom_domain_to_users_table',25),(63,'2022_06_12_180015_create_custom_domains_table',26),(65,'2022_06_13_195230_add_column_subdomain_to_custom_domains_table',27),(66,'2022_06_15_122056_create_static_option_twos_table',28),(67,'2022_06_15_122238_create_static_option_centrals_table',28),(69,'2022_06_20_121853_unique_key_to_price_plans_table',30),(81,'2022_06_23_153534_add_column_is_renew_to_payment_logs_table',31),(82,'2022_06_28_140243_create_menus_table',31),(83,'2022_07_04_112509_add_column_company_to_testimonials_table',31),(84,'2022_07_04_125618_create_newsletters_table',31),(86,'2022_02_16_085613_create_price_plans_table',1),(96,'2022_07_07_180315_create_themes_table',32),(98,'2014_10_12_000000_create_users_table',1),(105,'2022_07_18_143125_add_colum_user_id_to_tenants_table',33),(106,'2022_07_19_143538_add_batch_uuid_colum_to_tenant_activity_log_table',33),(107,'2022_07_19_161011_add_tenant_id_colum_to_payment_log_table',33),(108,'2022_07_28_125511_add_column_tenant_id_to_custom_domains_table',34),(109,'2022_03_20_054851_create_blog_comments',35),(111,'2022_08_03_172735_add_status_column_to_blog_comments_table',36),(112,'2022_08_09_130739_add_storage_permission_feature_column_to_price_plans_table',37),(113,'2021_09_30_062810_create_campaigns_table',38),(114,'2021_09_30_063002_create_campaign_products_table',38),(115,'2021_09_30_063022_create_campaign_sold_products_table',38),(117,'2022_08_29_052956_add_column_to_campaigns_table',38),(118,'2022_08_09_130745_add_global_theme_id_column_to_themes_table',39),(119,'2022_09_11_084331_add_widget_namespace_column_to_widgets_table',40),(120,'2022_10_06_145616_create_country_shippings_table',50),(122,'2022_10_06_145630_create_state_shippings_table',51),(123,'2022_10_08_185130_create_product_coupons_table',51),(124,'2021_09_25_111709_create_shipping_methods_table',52),(125,'2021_09_28_111119_create_shipping_method_options_table',52),(126,'2021_09_28_111509_create_zones_table',52),(127,'2021_09_28_111609_create_zone_regions_table',52),(128,'2021_09_28_111909_create_shipping_addresses_table',52),(129,'2021_09_28_112709_create_user_shipping_addresses_table',52),(130,'2021_09_29_112509_add_coupon_column_to_shipping_method_options_table',52),(131,'2021_10_22_045634_create_product_coupons_table',52),(133,'2022_11_08_183049_add_renew_columns_to_tenant_table',53),(134,'2022_11_29_174621_add_theme_url_column_to_theme_table',54),(135,'2022_11_02_060742_create_wallets_table',55),(136,'2022_11_02_061244_create_wallet_histories_table',55),(137,'2022_12_06_061244_create_wallet_settings_table',56),(138,'2022_12_06_082355_create_wallet_tenant_lists_table',56),(139,'2022_12_04_131151_create_tenant_exceptions_table',57),(140,'2022_12_28_153554_add_unique_key_column_to_wallets_table',58),(141,'2023_01_01_133559_add_package_badge_column_to_price_plans_table',58),(142,'2023_01_02_115927_create_zero_price_plan_histories_table',59),(143,'2023_01_15_182736_add_description_column_to_price_plans_table',60);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\Admin',1),(1,'App\\Models\\Admin',10),(2,'App\\Models\\Admin',11),(3,'App\\Models\\Admin',12),(1,'App\\Models\\Admin',15),(1,'App\\Models\\Admin',16),(1,'App\\Models\\Admin',17);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `newsletters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `newsletters_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletters`
--

LOCK TABLES `newsletters` WRITE;
/*!40000 ALTER TABLE `newsletters` DISABLE KEYS */;
/*!40000 ALTER TABLE `newsletters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_builders`
--

DROP TABLE IF EXISTS `page_builders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `page_builders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `addon_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addon_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addon_location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addon_order` bigint unsigned DEFAULT NULL,
  `addon_page_id` bigint unsigned DEFAULT NULL,
  `addon_page_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addon_settings` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `addon_namespace` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_builders`
--

LOCK TABLES `page_builders` WRITE;
/*!40000 ALTER TABLE `page_builders` DISABLE KEYS */;
INSERT INTO `page_builders` VALUES (4,'HeaderStyleOne','update','dynamic_page',1,1,'dynamic_page','{\"id\":\"4\",\"addon_name\":\"HeaderStyleOne\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcSGVhZGVyXEhlYWRlclN0eWxlT25l\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"1\",\"addon_page_id\":\"1\",\"addon_page_type\":\"dynamic_page\",\"title\":\"Commencer \\u00e0 vendre En ligne gratuitement\",\"subtitle\":\"Tout le monde r\\u00eave mais qui sont pr\\u00eats \\u00e0 les r\\u00e9aliser sont peu.\",\"button_text\":\"Commencer gratuitement\",\"button_url\":null,\"background_shape\":null,\"left_particle_shape\":null,\"right_particle_shape\":null,\"right_background_shape\":null,\"right_foreground_image\":\"274\",\"right_floating_image_1\":null,\"right_floating_image_2\":null,\"right_floating_image_3\":null,\"section_id\":\"header_section\",\"section_class\":null,\"padding_top\":\"102\",\"padding_bottom\":\"0\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Header\\HeaderStyleOne','2022-03-07 01:32:31','2023-02-17 08:35:15'),(5,'WhyChooseUs','update','dynamic_page',5,1,'dynamic_page','{\"id\":\"5\",\"addon_name\":\"WhyChooseUs\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQ29tbW9uXFdoeUNob29zZVVz\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"5\",\"addon_page_id\":\"1\",\"addon_page_type\":\"dynamic_page\",\"title\":null,\"subtitle\":null,\"section_image\":\"226\",\"why_choose_us_repeater\":{\"repeater_title_\":[\"Interface conviviale et facile \\u00e0 utiliser\",\"Large gamme d\'outils et de ressources\",\"Performance et fiabilit\\u00e9 de pointe\",\"Engagement envers un support client exceptionnel\"],\"repeater_title_url_\":[\"#\",null,null,null],\"repeater_subtitle_\":[\"Notre plateforme offre une interface conviviale qui vous permet de naviguer facilement et d\'utiliser toutes nos fonctionnalit\\u00e9s, m\\u00eame si vous n\'\\u00eates pas un expert en informatique. Nous nous effor\\u00e7ons de cr\\u00e9er une exp\\u00e9rience intuitive et simplifi\\u00e9e qui vous permet de tirer le meilleur parti de notre plateforme sans aucun probl\\u00e8me inutile.\",\"Nous proposons une large gamme d\'outils et de ressources qui peuvent vous aider \\u00e0 atteindre vos objectifs, que vous souhaitiez cr\\u00e9er un site web, lancer une boutique en ligne ou optimiser vos campagnes de marketing num\\u00e9rique. Nous comprenons que chaque utilisateur a des besoins uniques, et nous nous effor\\u00e7ons de fournir la flexibilit\\u00e9 et les options de personnalisation qui vous permettent d\'adapter notre plateforme \\u00e0 vos besoins sp\\u00e9cifiques.\",\"Notre plateforme est con\\u00e7ue en pensant \\u00e0 la performance et \\u00e0 la fiabilit\\u00e9. Nous utilisons une technologie et une infrastructure de pointe pour nous assurer que nos services sont toujours disponibles et fonctionnent \\u00e0 pleine capacit\\u00e9. Que vous traitiez des volumes de trafic \\u00e9lev\\u00e9s ou des flux de travail complexes, vous pouvez compter sur notre plateforme pour offrir les performances dont vous avez besoin.\",\"Nous nous engageons \\u00e0 fournir un support client exceptionnel et \\u00e0 r\\u00e9pondre rapidement \\u00e0 toutes vos questions ou pr\\u00e9occupations. Nous sommes l\\u00e0 pour vous aider \\u00e0 chaque \\u00e9tape du processus et \\u00e0 vous offrir l\'assistance dont vous avez besoin pour r\\u00e9ussir sur notre plateforme.\"],\"repeater_image_\":[null,null,null,null]},\"section_id\":\"about_section\",\"section_class\":null,\"padding_top\":\"88\",\"padding_bottom\":\"0\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Common\\WhyChooseUs','2022-03-07 01:38:01','2023-02-15 20:52:11'),(11,'FaqOne','update','dynamic_page',7,1,'dynamic_page','{\"id\":\"11\",\"addon_name\":\"FaqOne\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQ29tbW9uXEZhcU9uZQ==\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"10\",\"addon_page_id\":\"1\",\"addon_page_type\":\"dynamic_page\",\"title_en_GB\":\"Frequently Asked {h}Question{\\/h}\",\"subtitle_en_GB\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit.\",\"question_en_GB\":\"Frequently Asked Questions?\",\"title_ar\":null,\"subtitle_ar\":null,\"question_ar\":\"\\u0623\\u0633\\u0626\\u0644\\u0629 \\u0645\\u0643\\u0631\\u0631\\u0629\\u061f\",\"left_image\":\"231\",\"faq_repeater\":{\"repeater_title_en_GB\":[\"What is the membership fee for joining?\",\"Trending the membership fee for joining ?\",\"New way the membership fee for  many years?\"],\"repeater_description_en_GB\":[\"This is the first item\'s accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It\'s also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.\",\"This is the first item\'s accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It\'s also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.\",\"This is the first item\'s accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It\'s also worth noting that just about any HTML can go within the .accordion-body, though the transition does limit overflow.\"],\"repeater_title_ar\":[\"\\u0645\\u0627 \\u0647\\u064a \\u0631\\u0633\\u0648\\u0645 \\u0627\\u0644\\u0639\\u0636\\u0648\\u064a\\u0629 \\u0644\\u0644\\u0627\\u0646\\u0636\\u0645\\u0627\\u0645 \\u0625\\u0644\\u0649 \\u061f\",\"\\u0645\\u0627 \\u0647\\u064a \\u0631\\u0633\\u0648\\u0645 \\u0627\\u0644\\u0639\\u0636\\u0648\\u064a\\u0629 \\u0644\\u0644\\u0627\\u0646\\u0636\\u0645\\u0627\\u0645 \\u0625\\u0644\\u0649 \\u061f\",\"\\u0645\\u0627 \\u0647\\u064a \\u0631\\u0633\\u0648\\u0645 \\u0627\\u0644\\u0639\\u0636\\u0648\\u064a\\u0629 \\u0644\\u0644\\u0627\\u0646\\u0636\\u0645\\u0627\\u0645 \\u0625\\u0644\\u0649 \\u061f\"],\"repeater_description_ar\":[\"\\u0647\\u0630\\u0627 \\u0647\\u0648 \\u062c\\u0633\\u0645 \\u0623\\u0643\\u0648\\u0631\\u062f\\u064a\\u0648\\u0646 \\u0627\\u0644\\u0639\\u0646\\u0635\\u0631 \\u0627\\u0644\\u0623\\u0648\\u0644. \\u064a\\u062a\\u0645 \\u0639\\u0631\\u0636\\u0647 \\u0628\\u0634\\u0643\\u0644 \\u0627\\u0641\\u062a\\u0631\\u0627\\u0636\\u064a \\u060c \\u062d\\u062a\\u0649 \\u064a\\u0636\\u064a\\u0641 \\u0645\\u0644\\u062d\\u0642 \\u0627\\u0644\\u0637\\u064a \\u0627\\u0644\\u0641\\u0626\\u0627\\u062a \\u0627\\u0644\\u0645\\u0646\\u0627\\u0633\\u0628\\u0629 \\u0627\\u0644\\u062a\\u064a \\u0646\\u0633\\u062a\\u062e\\u062f\\u0645\\u0647\\u0627 \\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0643\\u0644 \\u0639\\u0646\\u0635\\u0631. \\u062a\\u062a\\u062d\\u0643\\u0645 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0641\\u0626\\u0627\\u062a \\u0641\\u064a \\u0627\\u0644\\u0645\\u0638\\u0647\\u0631 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u060c \\u0628\\u0627\\u0644\\u0625\\u0636\\u0627\\u0641\\u0629 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u0639\\u0631\\u0636 \\u0648\\u0627\\u0644\\u0627\\u062e\\u062a\\u0628\\u0627\\u0621 \\u0639\\u0628\\u0631 \\u0627\\u0646\\u062a\\u0642\\u0627\\u0644\\u0627\\u062a CSS. \\u064a\\u0645\\u0643\\u0646\\u0643 \\u062a\\u0639\\u062f\\u064a\\u0644 \\u0623\\u064a \\u0645\\u0646 \\u0647\\u0630\\u0627 \\u0628\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 CSS \\u0645\\u062e\\u0635\\u0635 \\u0623\\u0648 \\u062a\\u062c\\u0627\\u0648\\u0632 \\u0627\\u0644\\u0645\\u062a\\u063a\\u064a\\u0631\\u0627\\u062a \\u0627\\u0644\\u0627\\u0641\\u062a\\u0631\\u0627\\u0636\\u064a\\u0629 \\u0644\\u062f\\u064a\\u0646\\u0627. \\u0645\\u0646 \\u0627\\u0644\\u062c\\u062f\\u064a\\u0631 \\u0628\\u0627\\u0644\\u0630\\u0643\\u0631 \\u0623\\u064a\\u0636\\u064b\\u0627 \\u0623\\u0646 \\u0623\\u064a HTML \\u064a\\u0645\\u0643\\u0646 \\u0623\\u0646 \\u064a\\u0646\\u062a\\u0642\\u0644 \\u0625\\u0644\\u0649 \\u062f\\u0627\\u062e\\u0644 \\u062c\\u0633\\u0645 \\u0627\\u0644\\u0623\\u0643\\u0648\\u0631\\u062f\\u064a\\u0648\\u0646 \\u060c \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0631\\u063a\\u0645 \\u0645\\u0646 \\u0623\\u0646 \\u0627\\u0644\\u0627\\u0646\\u062a\\u0642\\u0627\\u0644 \\u064a\\u062d\\u062f \\u0645\\u0646 \\u0627\\u0644\\u0641\\u0627\\u0626\\u0636.\",\"\\u0647\\u0630\\u0627 \\u0647\\u0648 \\u062c\\u0633\\u0645 \\u0623\\u0643\\u0648\\u0631\\u062f\\u064a\\u0648\\u0646 \\u0627\\u0644\\u0639\\u0646\\u0635\\u0631 \\u0627\\u0644\\u0623\\u0648\\u0644. \\u064a\\u062a\\u0645 \\u0639\\u0631\\u0636\\u0647 \\u0628\\u0634\\u0643\\u0644 \\u0627\\u0641\\u062a\\u0631\\u0627\\u0636\\u064a \\u060c \\u062d\\u062a\\u0649 \\u064a\\u0636\\u064a\\u0641 \\u0645\\u0644\\u062d\\u0642 \\u0627\\u0644\\u0637\\u064a \\u0627\\u0644\\u0641\\u0626\\u0627\\u062a \\u0627\\u0644\\u0645\\u0646\\u0627\\u0633\\u0628\\u0629 \\u0627\\u0644\\u062a\\u064a \\u0646\\u0633\\u062a\\u062e\\u062f\\u0645\\u0647\\u0627 \\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0643\\u0644 \\u0639\\u0646\\u0635\\u0631. \\u062a\\u062a\\u062d\\u0643\\u0645 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0641\\u0626\\u0627\\u062a \\u0641\\u064a \\u0627\\u0644\\u0645\\u0638\\u0647\\u0631 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u060c \\u0628\\u0627\\u0644\\u0625\\u0636\\u0627\\u0641\\u0629 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u0639\\u0631\\u0636 \\u0648\\u0627\\u0644\\u0627\\u062e\\u062a\\u0628\\u0627\\u0621 \\u0639\\u0628\\u0631 \\u0627\\u0646\\u062a\\u0642\\u0627\\u0644\\u0627\\u062a CSS. \\u064a\\u0645\\u0643\\u0646\\u0643 \\u062a\\u0639\\u062f\\u064a\\u0644 \\u0623\\u064a \\u0645\\u0646 \\u0647\\u0630\\u0627 \\u0628\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 CSS \\u0645\\u062e\\u0635\\u0635 \\u0623\\u0648 \\u062a\\u062c\\u0627\\u0648\\u0632 \\u0627\\u0644\\u0645\\u062a\\u063a\\u064a\\u0631\\u0627\\u062a \\u0627\\u0644\\u0627\\u0641\\u062a\\u0631\\u0627\\u0636\\u064a\\u0629 \\u0644\\u062f\\u064a\\u0646\\u0627. \\u0645\\u0646 \\u0627\\u0644\\u062c\\u062f\\u064a\\u0631 \\u0628\\u0627\\u0644\\u0630\\u0643\\u0631 \\u0623\\u064a\\u0636\\u064b\\u0627 \\u0623\\u0646 \\u0623\\u064a HTML \\u064a\\u0645\\u0643\\u0646 \\u0623\\u0646 \\u064a\\u0646\\u062a\\u0642\\u0644 \\u0625\\u0644\\u0649 \\u062f\\u0627\\u062e\\u0644 \\u062c\\u0633\\u0645 \\u0627\\u0644\\u0623\\u0643\\u0648\\u0631\\u062f\\u064a\\u0648\\u0646 \\u060c \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0631\\u063a\\u0645 \\u0645\\u0646 \\u0623\\u0646 \\u0627\\u0644\\u0627\\u0646\\u062a\\u0642\\u0627\\u0644 \\u064a\\u062d\\u062f \\u0645\\u0646 \\u0627\\u0644\\u0641\\u0627\\u0626\\u0636.\",\"\\u0647\\u0630\\u0627 \\u0647\\u0648 \\u062c\\u0633\\u0645 \\u0623\\u0643\\u0648\\u0631\\u062f\\u064a\\u0648\\u0646 \\u0627\\u0644\\u0639\\u0646\\u0635\\u0631 \\u0627\\u0644\\u0623\\u0648\\u0644. \\u064a\\u062a\\u0645 \\u0639\\u0631\\u0636\\u0647 \\u0628\\u0634\\u0643\\u0644 \\u0627\\u0641\\u062a\\u0631\\u0627\\u0636\\u064a \\u060c \\u062d\\u062a\\u0649 \\u064a\\u0636\\u064a\\u0641 \\u0645\\u0644\\u062d\\u0642 \\u0627\\u0644\\u0637\\u064a \\u0627\\u0644\\u0641\\u0626\\u0627\\u062a \\u0627\\u0644\\u0645\\u0646\\u0627\\u0633\\u0628\\u0629 \\u0627\\u0644\\u062a\\u064a \\u0646\\u0633\\u062a\\u062e\\u062f\\u0645\\u0647\\u0627 \\u0644\\u062a\\u0635\\u0645\\u064a\\u0645 \\u0643\\u0644 \\u0639\\u0646\\u0635\\u0631. \\u062a\\u062a\\u062d\\u0643\\u0645 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0641\\u0626\\u0627\\u062a \\u0641\\u064a \\u0627\\u0644\\u0645\\u0638\\u0647\\u0631 \\u0627\\u0644\\u0639\\u0627\\u0645 \\u060c \\u0628\\u0627\\u0644\\u0625\\u0636\\u0627\\u0641\\u0629 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u0639\\u0631\\u0636 \\u0648\\u0627\\u0644\\u0627\\u062e\\u062a\\u0628\\u0627\\u0621 \\u0639\\u0628\\u0631 \\u0627\\u0646\\u062a\\u0642\\u0627\\u0644\\u0627\\u062a CSS. \\u064a\\u0645\\u0643\\u0646\\u0643 \\u062a\\u0639\\u062f\\u064a\\u0644 \\u0623\\u064a \\u0645\\u0646 \\u0647\\u0630\\u0627 \\u0628\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 CSS \\u0645\\u062e\\u0635\\u0635 \\u0623\\u0648 \\u062a\\u062c\\u0627\\u0648\\u0632 \\u0627\\u0644\\u0645\\u062a\\u063a\\u064a\\u0631\\u0627\\u062a \\u0627\\u0644\\u0627\\u0641\\u062a\\u0631\\u0627\\u0636\\u064a\\u0629 \\u0644\\u062f\\u064a\\u0646\\u0627. \\u0645\\u0646 \\u0627\\u0644\\u062c\\u062f\\u064a\\u0631 \\u0628\\u0627\\u0644\\u0630\\u0643\\u0631 \\u0623\\u064a\\u0636\\u064b\\u0627 \\u0623\\u0646 \\u0623\\u064a HTML \\u064a\\u0645\\u0643\\u0646 \\u0623\\u0646 \\u064a\\u0646\\u062a\\u0642\\u0644 \\u0625\\u0644\\u0649 \\u062f\\u0627\\u062e\\u0644 \\u062c\\u0633\\u0645 \\u0627\\u0644\\u0623\\u0643\\u0648\\u0631\\u062f\\u064a\\u0648\\u0646 \\u060c \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0631\\u063a\\u0645 \\u0645\\u0646 \\u0623\\u0646 \\u0627\\u0644\\u0627\\u0646\\u062a\\u0642\\u0627\\u0644 \\u064a\\u062d\\u062f \\u0645\\u0646 \\u0627\\u0644\\u0641\\u0627\\u0626\\u0636.\"]},\"section_id\":\"faq_section\",\"section_class\":null,\"padding_top\":\"110\",\"padding_bottom\":\"0\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Common\\FaqOne','2022-03-08 05:41:43','2023-02-15 20:43:50'),(15,'Themes','update','dynamic_page',3,1,'dynamic_page','{\"id\":\"15\",\"addon_name\":\"Themes\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQ29tbW9uXFRoZW1lcw==\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"3\",\"addon_page_id\":\"1\",\"addon_page_type\":\"dynamic_page\",\"title\":null,\"subtitle\":null,\"background_shape\":null,\"theme_page_url\":null,\"section_id\":null,\"section_class\":null,\"padding_top\":\"78\",\"padding_bottom\":\"0\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Common\\Themes','2022-06-30 10:40:31','2023-02-10 23:03:01'),(16,'HowItWorks','update','dynamic_page',4,1,'dynamic_page','{\"id\":\"16\",\"addon_name\":\"HowItWorks\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQ29tbW9uXEhvd0l0V29ya3M=\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"4\",\"addon_page_id\":\"1\",\"addon_page_type\":\"dynamic_page\",\"title_en_GB\":\"How it {h}Works?{\\/h}\",\"subtitle_en_GB\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit.\",\"title_ar\":null,\"subtitle_ar\":null,\"how_it_works_repeater\":{\"repeater_number_en_GB\":[\"1\",\"2\",\"3\"],\"repeater_title_en_GB\":[\"Register & Setup\",\"Upload Products\",\"Get Sales\"],\"repeater_description_en_GB\":[\"Free local dispatch for our gold and platinum members Professional advise. Dispatch for our gold and platinum members Professional advise.\",\"Free local dispatch for our gold and platinum members Professional advise. Dispatch for our gold and platinum members Professional advise.\",\"Free local dispatch for our gold and platinum members Professional advise. Dispatch for our gold and platinum members Professional advise.\"],\"repeater_number_ar\":[null,null,null],\"repeater_title_ar\":[null,null,null],\"repeater_description_ar\":[null,null,null]},\"section_id\":null,\"section_class\":null,\"padding_top\":\"110\",\"padding_bottom\":\"0\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Common\\HowItWorks','2022-06-30 11:15:20','2022-06-30 11:20:44'),(18,'BlogSliderOne','update','dynamic_page',6,1,'dynamic_page','{\"id\":\"18\",\"addon_name\":\"BlogSliderOne\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQmxvZ1xCbG9nU2xpZGVyT25l\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"9\",\"addon_page_id\":\"1\",\"addon_page_type\":\"dynamic_page\",\"title_en_GB\":\"Blog {h}Updates{\\/h}\",\"subtitle_en_GB\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit.\",\"title_ar\":null,\"subtitle_ar\":null,\"categories\":\"Select Category\",\"order_by\":\"id\",\"order\":\"asc\",\"items\":null,\"section_id\":null,\"section_class\":null,\"padding_top\":\"110\",\"padding_bottom\":\"0\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Blog\\BlogSliderOne','2022-07-04 05:44:24','2023-02-15 20:43:50'),(19,'Newsletter','update','dynamic_page',8,1,'dynamic_page','{\"id\":\"19\",\"addon_name\":\"Newsletter\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQ29tbW9uXE5ld3NsZXR0ZXI=\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"11\",\"addon_page_id\":\"1\",\"addon_page_type\":\"dynamic_page\",\"title_en_GB\":\"Get Updates as soon as they happen.\",\"subtitle_en_GB\":\"Signup now for our newsletter and app launch.\",\"button_text_en_GB\":\"Subscribe\",\"input_text_en_GB\":\"Your Email Here\",\"title_ar\":null,\"subtitle_ar\":null,\"button_text_ar\":null,\"input_text_ar\":null,\"bg_shape\":\"232\",\"section_id\":null,\"section_class\":null,\"padding_top\":\"110\",\"padding_bottom\":\"109\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Common\\Newsletter','2022-07-04 07:27:15','2023-02-15 20:43:52'),(21,'AboutHeaderStyleOne','update','dynamic_page',1,5,'dynamic_page','{\"id\":\"21\",\"addon_name\":\"AboutHeaderStyleOne\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcSGVhZGVyXEFib3V0SGVhZGVyU3R5bGVPbmU=\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"1\",\"addon_page_id\":\"5\",\"addon_page_type\":\"dynamic_page\",\"title_en_GB\":\"We\\u2019r providing quality service {h}since 2010!{\\/h}\",\"description_en_GB\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pulvinar ipsum nunc nec quam feugiat bibendum pellentesque scelerisque neque. Congue eu diam rhoncus, amet. Tristique nec, tempor suspendisse maecenas tempor lorem a, magna. Lectus neque luctus consectetur lacinia egestas nam quis nulla.\",\"title_ar\":null,\"description_ar\":null,\"image\":\"233\",\"section_id\":null,\"section_class\":null,\"padding_top\":\"102\",\"padding_bottom\":\"0\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Header\\AboutHeaderStyleOne','2022-07-04 10:27:45','2022-07-04 10:53:26'),(22,'NumberCounter','update','dynamic_page',2,5,'dynamic_page','{\"id\":\"22\",\"addon_name\":\"NumberCounter\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQ29tbW9uXE51bWJlckNvdW50ZXI=\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"2\",\"addon_page_id\":\"5\",\"addon_page_type\":\"dynamic_page\",\"counter_repeater\":{\"repeater_title_en_GB\":[\"Total Domains\",\"Total Subdomains\",\"Total Tenent\",\"Total Tenent\"],\"repeater_number_en_GB\":[\"2000\",\"1500\",\"1500\",\"3000\"],\"repeater_title_ar\":[null,null,null,null],\"repeater_number_ar\":[null,null,null,null]},\"section_id\":null,\"section_class\":null,\"padding_top\":\"52\",\"padding_bottom\":\"0\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Common\\NumberCounter','2022-07-04 10:52:23','2022-07-04 10:53:37'),(23,'WhyChooseUs','update','dynamic_page',3,5,'dynamic_page','{\"id\":\"23\",\"addon_name\":\"WhyChooseUs\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQ29tbW9uXFdoeUNob29zZVVz\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"3\",\"addon_page_id\":\"5\",\"addon_page_type\":\"dynamic_page\",\"title_en_GB\":\"Why {h}Choose us?{\\/h}\",\"subtitle_en_GB\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit.\",\"title_ar\":null,\"subtitle_ar\":null,\"section_image\":\"226\",\"why_choose_us_repeater\":{\"repeater_title_en_GB\":[\"Start Online Business\",\"Move your Business Online\",\"Switch to our Platform\"],\"repeater_title_url_en_GB\":[\"#\",\"#\",\"#\"],\"repeater_subtitle_en_GB\":[\"Free local dispatch for our gold and platinum members, Professional advise Dispatch for our gold and platinum members.\",\"Free local dispatch for our gold and platinum members, Professional advise Dispatch for our gold and platinum members.\",\"Free local dispatch for our gold and platinum members, Professional advise Dispatch for our gold and platinum members.\"],\"repeater_image_en_GB\":[\"227\",\"228\",\"229\"],\"repeater_title_ar\":[null,null,null],\"repeater_title_url_ar\":[null,null,null],\"repeater_subtitle_ar\":[null,null,null],\"repeater_image_ar\":[null,null,null]},\"section_id\":null,\"section_class\":null,\"padding_top\":\"110\",\"padding_bottom\":\"0\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Common\\WhyChooseUs','2022-07-04 10:58:14','2022-07-04 11:06:00'),(24,'FaqOne','update','dynamic_page',4,5,'dynamic_page','{\"id\":\"24\",\"addon_name\":\"FaqOne\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQ29tbW9uXEZhcU9uZQ==\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"4\",\"addon_page_id\":\"5\",\"addon_page_type\":\"dynamic_page\",\"title_en_GB\":\"Frequently Asked {h}Question{\\/h}\",\"subtitle_en_GB\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit.\",\"question_en_GB\":null,\"title_ar\":null,\"subtitle_ar\":null,\"question_ar\":null,\"left_image\":\"231\",\"faq_repeater\":{\"repeater_title_en_GB\":[\"What is the membership fee for joining Oxo?\",\"What is the membership fee for joining Oxo?\",\"What is the membership fee for joining Oxo?\",\"What is the membership fee for joining Oxo?\"],\"repeater_description_en_GB\":[\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu.\",\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu.\",\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu.\",\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu.\"],\"repeater_title_ar\":[null,null,null,null],\"repeater_description_ar\":[null,null,null,null]},\"section_id\":null,\"section_class\":null,\"padding_top\":\"83\",\"padding_bottom\":\"0\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Common\\FaqOne','2022-07-04 11:01:25','2022-07-04 11:05:45'),(25,'Newsletter','update','dynamic_page',5,5,'dynamic_page','{\"id\":\"25\",\"addon_name\":\"Newsletter\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQ29tbW9uXE5ld3NsZXR0ZXI=\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"5\",\"addon_page_id\":\"5\",\"addon_page_type\":\"dynamic_page\",\"title_en_GB\":\"Get Updates as soon as they happen.\",\"subtitle_en_GB\":\"Signup now for our newsletter and app launch.\",\"button_text_en_GB\":\"Subscribe\",\"input_text_en_GB\":\"Your Email Here\",\"title_ar\":null,\"subtitle_ar\":null,\"button_text_ar\":null,\"input_text_ar\":null,\"bg_shape\":\"232\",\"section_id\":null,\"section_class\":null,\"padding_top\":\"110\",\"padding_bottom\":\"86\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Common\\Newsletter','2022-07-04 11:05:19','2022-07-04 11:05:24'),(27,'ContactArea','update','dynamic_page',2,12,'dynamic_page','{\"id\":\"27\",\"addon_name\":\"ContactArea\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQ29tbW9uXENvbnRhY3RBcmVh\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"2\",\"addon_page_id\":\"12\",\"addon_page_type\":\"dynamic_page\",\"title\":\"Send Us an Email\",\"custom_form_id\":\"6\",\"location\":\"Dhaka\",\"map_height\":\"100\",\"section_id\":null,\"section_class\":null,\"padding_top\":\"97\",\"padding_bottom\":\"0\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Common\\ContactArea','2022-07-04 11:19:45','2022-11-27 13:24:05'),(28,'ContactCards','new','dynamic_page',1,12,'dynamic_page','{\"addon_name\":\"ContactCards\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQ29tbW9uXENvbnRhY3RDYXJkcw==\",\"addon_type\":\"new\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"1\",\"addon_page_id\":\"12\",\"addon_page_type\":\"dynamic_page\",\"contact_repeater\":{\"repeater_title_en_GB\":[\"Call Us\",\"Mail Us\",\"Support Time\"],\"repeater_info_en_GB\":[\"(480) 555-0103\",\"tim.jennings@example.com\",\"10:00 am - 10.00 pm\"],\"repeater_image_en_GB\":[\"234\",\"235\",\"236\"],\"repeater_title_ar\":[null,null,null],\"repeater_info_ar\":[null,null,null],\"repeater_image_ar\":[null,null,null]},\"section_id\":null,\"section_class\":null,\"padding_top\":\"110\",\"padding_bottom\":\"0\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Common\\ContactCards','2022-07-04 12:08:18','2022-07-04 12:08:18'),(29,'Newsletter','update','dynamic_page',3,12,'dynamic_page','{\"id\":\"29\",\"addon_name\":\"Newsletter\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQ29tbW9uXE5ld3NsZXR0ZXI=\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"3\",\"addon_page_id\":\"12\",\"addon_page_type\":\"dynamic_page\",\"title_en_GB\":\"Get Updates as soon as they happen.\",\"subtitle_en_GB\":\"Signup now for our newsletter and app launch.\",\"button_text_en_GB\":\"Subscribe\",\"input_text_en_GB\":\"Your Email Here\",\"title_ar\":null,\"subtitle_ar\":null,\"button_text_ar\":null,\"input_text_ar\":null,\"bg_shape\":\"232\",\"section_id\":null,\"section_class\":null,\"padding_top\":\"77\",\"padding_bottom\":\"61\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Common\\Newsletter','2022-07-04 12:14:12','2022-07-04 12:15:35'),(30,'Themes','update','dynamic_page',1,6,'dynamic_page','{\"id\":\"30\",\"addon_name\":\"Themes\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQ29tbW9uXFRoZW1lcw==\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"1\",\"addon_page_id\":\"6\",\"addon_page_type\":\"dynamic_page\",\"title_en_GB\":null,\"subtitle_en_GB\":null,\"title_ar\":null,\"subtitle_ar\":null,\"theme_repeater\":{\"repeater_image_en_GB\":[\"222\",\"223\",\"224\"],\"repeater_title_en_GB\":[\"Luxury Perfume Store\",\"Clothing Store\",\"Fashion Store\"],\"repeater_button_link_en_GB\":[\"#\",\"#\",\"#\"],\"repeater_image_ar\":[null,null,null],\"repeater_title_ar\":[null,null,null],\"repeater_button_link_ar\":[null,null,null]},\"background_shape\":null,\"section_id\":null,\"section_class\":null,\"padding_top\":\"63\",\"padding_bottom\":\"0\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Common\\Themes','2022-07-04 12:19:07','2022-07-04 12:19:54'),(31,'Newsletter','new','dynamic_page',2,6,'dynamic_page','{\"addon_name\":\"Newsletter\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQ29tbW9uXE5ld3NsZXR0ZXI=\",\"addon_type\":\"new\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"2\",\"addon_page_id\":\"6\",\"addon_page_type\":\"dynamic_page\",\"title_en_GB\":\"Get Updates as soon as they happen.\",\"subtitle_en_GB\":\"Signup now for our newsletter and app launch.\",\"button_text_en_GB\":\"Subscribe\",\"input_text_en_GB\":\"Your Email Here\",\"title_ar\":null,\"subtitle_ar\":null,\"button_text_ar\":null,\"input_text_ar\":null,\"bg_shape\":\"232\",\"section_id\":null,\"section_class\":null,\"padding_top\":\"110\",\"padding_bottom\":\"60\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Common\\Newsletter','2022-07-04 12:20:27','2022-07-04 12:20:27'),(32,'BlogStyleOne','update','dynamic_page',1,10,'dynamic_page','{\"id\":\"32\",\"addon_name\":\"BlogStyleOne\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQmxvZ1xCbG9nU3R5bGVPbmU=\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"1\",\"addon_page_id\":\"10\",\"addon_page_type\":\"dynamic_page\",\"title\":\"Blog\",\"subtitle\":\"Blog\",\"categories\":\"Select Category\",\"order_by\":\"created_at\",\"order\":\"desc\",\"items\":null,\"section_id\":null,\"section_class\":null,\"padding_top\":\"110\",\"padding_bottom\":\"110\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Blog\\BlogStyleOne','2022-07-04 12:34:40','2023-01-03 07:59:19'),(33,'PricePlan','update','dynamic_page',1,7,'dynamic_page','{\"id\":\"33\",\"addon_name\":\"PricePlan\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQ29tbW9uXFByaWNlUGxhbg==\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"1\",\"addon_page_id\":\"7\",\"addon_page_type\":\"dynamic_page\",\"title_en_GB\":null,\"subtitle_en_GB\":null,\"title_ar\":null,\"subtitle_ar\":null,\"order_by\":\"id\",\"order\":\"desc\",\"section_id\":null,\"section_class\":null,\"padding_top\":\"59\",\"padding_bottom\":\"1\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Common\\PricePlan','2022-07-06 11:20:38','2022-07-06 11:22:12'),(34,'Newsletter','update','dynamic_page',2,7,'dynamic_page','{\"id\":\"34\",\"addon_name\":\"Newsletter\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcQ29tbW9uXE5ld3NsZXR0ZXI=\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"2\",\"addon_page_id\":\"7\",\"addon_page_type\":\"dynamic_page\",\"title_en_GB\":\"Get Updates as soon as they happen.\",\"subtitle_en_GB\":\"Signup now for our newsletter and app launch.\",\"button_text_en_GB\":\"Sign Up\",\"input_text_en_GB\":\"Your Email Here\",\"title_ar\":null,\"subtitle_ar\":null,\"button_text_ar\":null,\"input_text_ar\":null,\"bg_shape\":\"232\",\"section_id\":null,\"section_class\":null,\"padding_top\":\"101\",\"padding_bottom\":\"77\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Common\\Newsletter','2022-07-06 11:21:19','2022-07-06 11:22:03'),(35,'FeaturesStyleOne','update','dynamic_page',2,1,'dynamic_page','{\"id\":\"35\",\"addon_name\":\"FeaturesStyleOne\",\"addon_namespace\":\"UGx1Z2luc1xQYWdlQnVpbGRlclxBZGRvbnNcTGFuZGxvcmRcSGVhZGVyXEZlYXR1cmVzU3R5bGVPbmU=\",\"addon_type\":\"update\",\"addon_location\":\"dynamic_page\",\"addon_order\":\"2\",\"addon_page_id\":\"1\",\"addon_page_type\":\"dynamic_page\",\"title\":\"Pourquoi nous choisir?\",\"subtitle\":null,\"features_repeater\":{\"repeater_image_\":[\"268\",\"269\",\"270\",\"271\",\"272\",\"273\"],\"repeater_title_\":[\"Interface conviviale et facile \\u00e0 utiliser\",\"Large gamme d\'outils et de ressources:\",\"Performance et fiabilit\\u00e9 de pointe\",\"Engagement envers un support client exceptionnel\",\"Plan gratuit \\u00e0 vie:\",\"Flexibilit\\u00e9 et personnalisation:\"],\"repeater_description_\":[\"Notre plateforme offre une interface conviviale qui vous permet de naviguer facilement et d\'utiliser toutes nos fonctionnalit\\u00e9s, m\\u00eame si vous n\'\\u00eates pas un expert en informatique. Nous nous effor\\u00e7ons de cr\\u00e9er une exp\\u00e9rience intuitive et simplifi\\u00e9e qui vous permet de tirer le meilleur parti de notre plateforme sans aucun probl\\u00e8me inutile.\",\"Nous proposons une large gamme d\'outils et de ressources qui peuvent vous aider \\u00e0 atteindre vos objectifs, que vous souhaitiez cr\\u00e9er un site web, lancer une boutique en ligne ou optimiser vos campagnes de marketing num\\u00e9rique. Nous comprenons que chaque utilisateur a des besoins uniques, et nous nous effor\\u00e7ons de fournir la flexibilit\\u00e9 et les options de personnalisation qui vous permettent d\'adapter notre plateforme \\u00e0 vos besoins sp\\u00e9cifiques.\",\"Notre plateforme est con\\u00e7ue en pensant \\u00e0 la performance et \\u00e0 la fiabilit\\u00e9. Nous utilisons une technologie et une infrastructure de pointe pour nous assurer que nos services sont toujours disponibles et fonctionnent \\u00e0 pleine capacit\\u00e9. Que vous traitiez des volumes de trafic \\u00e9lev\\u00e9s ou des flux de travail complexes, vous pouvez compter sur notre plateforme pour offrir les performances dont vous avez besoin.\",\"Nous nous engageons \\u00e0 fournir un support client exceptionnel et \\u00e0 r\\u00e9pondre rapidement \\u00e0 toutes vos questions ou pr\\u00e9occupations. Nous sommes l\\u00e0 pour vous aider \\u00e0 chaque \\u00e9tape du processus et \\u00e0 vous offrir l\'assistance dont vous avez besoin pour r\\u00e9ussir sur notre plateforme.\",\"Nous offrons un plan gratuit pour notre plateforme qui est disponible \\u00e0 vie. Cela signifie que vous pouvez utiliser notre plateforme gratuitement sans frais cach\\u00e9s ou limites de temps, ce qui vous permet de commencer \\u00e0 construire votre pr\\u00e9sence en ligne sans investissement financier initial.\",\"Nous nous effor\\u00e7ons de fournir \\u00e0 nos utilisateurs la flexibilit\\u00e9 et les options de personnalisation dont ils ont besoin pour atteindre leurs objectifs en ligne. Que vous souhaitiez personnaliser votre site web, votre boutique en ligne ou vos campagnes de marketing num\\u00e9rique, nous sommes l\\u00e0 pour vous aider \\u00e0 cr\\u00e9er une exp\\u00e9rience unique et personnalis\\u00e9e qui refl\\u00e8te votre marque et vos objectifs.\"],\"repeater_button_text_\":[null,null,null,null,null,null],\"repeater_button_link_\":[null,null,null,null,null,null]},\"background_shape\":null,\"section_id\":null,\"section_class\":null,\"padding_top\":\"57\",\"padding_bottom\":\"54\"}','Plugins\\PageBuilder\\Addons\\Landlord\\Header\\FeaturesStyleOne','2023-02-15 20:51:51','2023-02-15 21:19:33');
/*!40000 ALTER TABLE `page_builders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `visibility` bigint unsigned NOT NULL DEFAULT '0',
  `page_builder` bigint unsigned NOT NULL DEFAULT '0',
  `breadcrumb` int unsigned NOT NULL DEFAULT '0',
  `status` bigint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Home','home','<br>',0,1,0,1,'2022-03-05 06:22:14','2022-11-17 07:03:17'),(5,'about','about',NULL,0,1,1,1,'2022-06-28 10:35:08','2022-08-21 23:36:50'),(6,'amazing themes','amazing-themes',NULL,0,1,1,1,'2022-06-28 10:35:25','2022-08-21 23:36:41'),(7,'Pricing plan','pricing-plan',NULL,0,1,1,1,'2022-06-28 10:35:37','2022-11-17 07:03:12'),(10,'Blog','blog',NULL,0,1,1,1,'2022-06-28 10:36:02','2022-11-17 07:02:48'),(12,'Contact','contact',NULL,0,1,1,1,'2022-06-28 10:36:23','2022-11-17 07:03:23'),(13,'Terms and Condition','terms-and-condition','<h1 style=\"box-sizing: border-box; outline: 0px; -webkit-font-smoothing: antialiased; margin-top: 0px; margin-bottom: 0px; font-weight: 500; line-height: 1.08333; font-size: 48px;\">Generate Terms &amp; Conditions for websites</h1><h1 style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; line-height: 1.08333; font-size: 48px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif;\"><div style=\"outline: 0px; -webkit-font-smoothing: antialiased; font-size: 16px;\"><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: var(--paragraph-color); font-family: var(--body-font); hyphens: auto; line-height: 1.6;\"><br style=\"outline: 0px; -webkit-font-smoothing: antialiased;\"></p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(74, 80, 115); font-family: &quot;Nunito Sans&quot;, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\"><span style=\"outline: 0px; -webkit-font-smoothing: antialiased; font-weight: bolder;\">1)&nbsp;</span>Creating a Terms &amp; Conditions for your application or website can take a lot of time. You could either spend tons of money on hiring a lawyer, or you could simply use our service and get a unique Terms &amp; Conditions fully custumized to your website.</p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(74, 80, 115); font-family: &quot;Nunito Sans&quot;, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\">You can also generate your Terms &amp; Conditions for website templates like:</p></div><div style=\"outline: 0px; -webkit-font-smoothing: antialiased; font-size: 16px;\"><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: var(--paragraph-color); font-family: &quot;Nunito Sans&quot;, sans-serif; hyphens: auto; line-height: 1.6; font-size: 1rem;\">For any app you are developing you will need a Terms &amp; Conditions to launch it. Termify can help you generate the best for the case and get your app ready for review.</p></div></h1><h4 style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; line-height: 1.2381; font-size: 20px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif;\"><br style=\"outline: 0px; -webkit-font-smoothing: antialiased;\"></h4><h6 style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; line-height: 1.08333; font-size: 14px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif;\"><span style=\"outline: 0px; -webkit-font-smoothing: antialiased; font-weight: bolder;\">Many platforms like facebook are requiring users that are submitting their official apps to submit a Terms &amp; Conditions even if you are not collecting any data from your users. Generate your Terms &amp; Conditions and get your unique link to submit to those platforms.</span></h6><h1 style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; line-height: 1.08333; font-size: 48px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif;\"><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; hyphens: auto; line-height: 1.6; font-size: 16px;\"><br style=\"outline: 0px; -webkit-font-smoothing: antialiased;\"></p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(74, 80, 115); font-family: &quot;Nunito Sans&quot;, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\"><span style=\"outline: 0px; -webkit-font-smoothing: antialiased; font-weight: bolder;\">2)</span>&nbsp;Creating a Terms &amp; Conditions for your application or website can take a lot of time. You could either spend tons of money on hiring a lawyer, or you could simply use our service and get a unique Terms &amp; Conditions fully custumized to your website.</p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(74, 80, 115); font-family: &quot;Nunito Sans&quot;, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\">You can also generate your Terms &amp; Conditions for website templates like:</p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; hyphens: auto; line-height: 1.6; font-size: 16px;\"><br style=\"outline: 0px; -webkit-font-smoothing: antialiased;\"></p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(74, 80, 115); font-family: &quot;Nunito Sans&quot;, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\"><span style=\"outline: 0px; -webkit-font-smoothing: antialiased; font-weight: bolder;\">Note:</span>&nbsp;For any app you are developing you will need a Terms &amp; Conditions to launch it. Termify can help you generate the best for the case and get your app ready for review. Many platforms like facebook are requiring users that are submitting their official apps to submit a Terms &amp; Conditions even if you are not collecting any data from your users. Generate your Terms &amp; Conditions and get your unique link to submit to those platforms.</p></h1>',0,0,1,1,'2023-01-04 14:42:33','2023-01-04 14:53:21'),(14,'Privacy Policy','privacy-policy','<h1 style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; line-height: 1.08333; font-size: 48px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif;\">How can I get a privacy policy on my website? A GDPR compliant privacy policy</h1><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\"><br style=\"outline: 0px; -webkit-font-smoothing: antialiased;\"></p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\">The privacy policy can be written as an independent page on your website, and be made accessible as a link in the header or footer of your website, or on your ‘About’ page. It may also be hosted by a privacy policy-service with a link from your homepage.</p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\">Basically, it doesn’t matter where you choose to place it, as long as your users have access to it.The privacy policy is a legal text. The phrasing depends on which jurisdictions your website falls under and how&nbsp; website handles data.</p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\"><br style=\"outline: 0px; -webkit-font-smoothing: antialiased;\"></p><h1 style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; line-height: 1.08333; font-size: 16px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif;\"><span style=\"outline: 0px; -webkit-font-smoothing: antialiased; font-weight: bolder;\">All websites are different. We always recommend that you consult a lawyer to ensure that your privacy policy is compliant with all applicable laws.&nbsp;</span></h1><h1 style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; line-height: 1.08333; font-size: 16px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif;\"><span style=\"outline: 0px; -webkit-font-smoothing: antialiased; font-weight: bolder;\"><br style=\"outline: 0px; -webkit-font-smoothing: antialiased;\"></span></h1><h1 style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; line-height: 1.08333; font-size: 16px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif;\"><span style=\"outline: 0px; -webkit-font-smoothing: antialiased; font-weight: bolder;\"><br style=\"outline: 0px; -webkit-font-smoothing: antialiased;\"></span>However, this might seem as a large expense if you are, for instance, a hobby blogger or small business.</h1><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\">What you should&nbsp;<a href=\"https://medium.com/@StartupPolicy/five-reasons-why-copying-someone-else-s-terms-of-use-and-privacy-policy-is-a-bad-idea-fd8d126ac0b3\" style=\"outline: 0px; -webkit-font-smoothing: antialiased; color: inherit; text-decoration: none;\">never do, is to copy a privacy policy from some other website</a>.</p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\">That is also why using a privacy policy generator can be a hazardous thing, since you must be very careful to include all the specific information of your website, and not just have privacy policy generator spit out a default one that isn\'t aligned with your domain</p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\"><br style=\"outline: 0px; -webkit-font-smoothing: antialiased;\"></p><h5 style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; line-height: 1.08333; font-size: 16px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif;\">GDPR&nbsp;<span style=\"outline: 0px; -webkit-font-smoothing: antialiased; font-weight: bolder;\">privacy policy templates &amp; privacy policy generators</span></h5><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\">There exists numerous tools for creating privacy policies, and privacy policy templates and privacy policy generators on the internet.</p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\">Some are free and others come at a price. Some are not GDPR compliant privacy policies.</p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\"><br style=\"outline: 0px; -webkit-font-smoothing: antialiased;\"></p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\">1) Maintain all the content properly</p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\">2) Ensure your all input is right</p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\">3) if you can do multiple task that will be plus</p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\"><br style=\"outline: 0px; -webkit-font-smoothing: antialiased;\"></p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\">There policy is the numerous tools for creating privacy policies, and privacy policy templates and privacy policy generators on the internet. Some are free and others come at a price. Some are not GDPR compliant privacy policies.</p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\"><br style=\"outline: 0px; -webkit-font-smoothing: antialiased;\"></p><p style=\"outline: 0px; -webkit-font-smoothing: antialiased; margin-bottom: 0px; color: rgb(22, 34, 42); font-family: Gotham, sans-serif; hyphens: auto; line-height: 1.6; font-size: 16px;\"><span style=\"outline: 0px; -webkit-font-smoothing: antialiased; font-weight: bolder;\">Note :&nbsp;</span>just have privacy policy generator spit out a default one that isn\'t aligned with your domain So it\'s very important loyal technical theury of our reservation.</p>',0,0,1,1,'2023-01-04 14:42:40','2023-01-04 14:53:53');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('testdoc2021@gmail.com','1WuWbjzI4trm7iNw4wFKVDXDNJt41I',NULL);
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_gateways`
--

DROP TABLE IF EXISTS `payment_gateways`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payment_gateways` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `test_mode` tinyint(1) NOT NULL DEFAULT '0',
  `credentials` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_gateways`
--

LOCK TABLES `payment_gateways` WRITE;
/*!40000 ALTER TABLE `payment_gateways` DISABLE KEYS */;
INSERT INTO `payment_gateways` VALUES (1,'paypal','106','if your currency is not available in paypal, it will convert you currency value to USD value based on your currency exchange rate.',1,1,'{\"sandbox_client_id\":\"AUP7AuZMwJbkee-2OmsSZrU-ID1XUJYE-YB-2JOrxeKV-q9ZJZYmsr-UoKuJn4kwyCv5ak26lrZyb-gb\",\"sandbox_client_secret\":\"EEIxCuVnbgING9EyzcF2q-gpacLneVbngQtJ1mbx-42Lbq-6Uf6PEjgzF7HEayNsI4IFmB9_CZkECc3y\",\"sandbox_app_id\":null,\"live_client_id\":null,\"live_client_secret\":null,\"live_app_id\":null}','2022-04-17 01:54:18','2022-12-21 05:31:31'),(2,'paytm','109','if your currency is not available in paytm, it will convert you currency value to INR value based on your currency exchange rate.',1,1,'{\"merchant_key\":\"dv0XtmsPYpewNag&\",\"merchant_mid\":\"Digita57697814558795\",\"merchant_website\":\"WEBSTAGING\",\"channel\":null,\"industry_type\":null}','2022-04-17 01:54:18','2022-12-21 05:31:31'),(3,'stripe','113','',1,1,'{\"public_key\":\"pk_test_51GwS1SEmGOuJLTMsIeYKFtfAT3o3Fc6IOC7wyFmmxA2FIFQ3ZigJ2z1s4ZOweKQKlhaQr1blTH9y6HR2PMjtq1Rx00vqE8LO0x\",\"secret_key\":\"sk_test_51GwS1SEmGOuJLTMs2vhSliTwAGkOt4fKJMBrxzTXeCJoLrRu8HFf4I0C5QuyE3l3bQHBJm3c0qFmeVjd0V9nFb6Z00VrWDJ9Uw\"}','2022-04-17 01:54:18','2022-12-21 05:31:31'),(4,'razorpay','110','if your currency is not available in Razorpay, it will convert you currency value to INR value based on your currency exchange rate.',1,1,'{\"api_key\":\"rzp_test_SXk7LZqsBPpAkj\",\"api_secret\":\"Nenvq0aYArtYBDOGgmMH7JNv\"}','2022-04-17 01:54:18','2022-12-21 05:31:31'),(5,'paystack','108','if your currency is not available in Paystack, it will convert you currency value to NGN value based on your currency exchange rate.',1,1,'{\"public_key\":\"pk_test_0a2cea63c4a34691fae697fb8f6b72a856e96e12\",\"secret_key\":\"sk_test_bfb4d04c41f8bcfa9fb6dac84eeb6ea54e1a93b4\",\"merchant_email\":\"testxgenious@gmail.com\"}','2022-04-17 01:54:18','2022-12-21 05:31:31'),(6,'mollie','104','if your currency is not available in mollie, it will convert you currency value to USD value based on your currency exchange rate.',1,1,'{\"public_key\":\"test_fVk76gNbAp6ryrtRjfAVvzjxSHxC2v\"}','2022-04-17 01:54:18','2022-12-21 05:31:31'),(8,'midtrans','102','',1,1,'{\"merchant_id\":\"G770543580\",\"server_key\":\"SB-Mid-server-9z5jztsHyYxEdSs7DgkNg2on\",\"client_key\":\"SB-Mid-client-iDuy-jKdZHkLjL_I\"}','2022-04-17 01:54:18','2022-12-21 05:31:31'),(10,'cashfree','112','',1,1,'{\"app_id\":\"94527832f47d6e74fa6ca5e3c72549\",\"secret_key\":\"ec6a3222018c676e95436b2e26e89c1ec6be2830\"}','2022-04-17 01:54:18','2022-12-21 05:31:31'),(11,'instamojo','111','',1,1,'{\"client_id\":\"test_nhpJ3RvWObd3uryoIYF0gjKby5NB5xu6S9Z\",\"client_secret\":\"test_iZusG4P35maQVPTfqutbCc6UEbba3iesbCbrYM7zOtDaJUdbPz76QOnBcDgblC53YBEgsymqn2sx3NVEPbl3b5coA3uLqV1ikxKquOeXSWr8Ruy7eaKUMX1yBbm\",\"username\":null,\"password\":null}','2022-04-17 01:54:18','2022-12-21 05:31:31'),(12,'marcadopago','103','',1,1,'{\"client_id\":\"TEST-0a3cc78a-57bf-4556-9dbe-2afa06347769\",\"client_secret\":\"TEST-4644184554273630-070813-7d817e2ca1576e75884001d0755f8a7a-786499991\"}','2022-04-17 01:54:18','2022-12-21 05:31:31'),(13,'zitopay','237','',1,1,'{\"username\":\"Suzon\"}','2022-07-26 06:34:58','2022-12-21 05:31:31'),(14,'squareup','238','',1,1,'{\"location_id\":\"LE9C12TNM5HAS\",\"access_token\":\"EAAAEOuLQObrVwJvCvoio3H13b8Ssqz1ighmTBKZvIENW9qxirHGHkqsGcPBC1uN\"}','2022-07-26 06:34:58','2022-12-21 05:31:31'),(15,'cinetpay','239','',1,1,'{\"apiKey\":\"12912847765bc0db748fdd44.40081707\",\"site_id\":\"445160\"}','2022-07-26 06:34:58','2022-12-21 05:31:31'),(16,'paytabs','241','',1,1,'{\"profile_id\":\"96698\",\"region\":\"GLOBAL\",\"server_key\":\"SKJNDNRHM2-JDKTZDDH2N-H9HLMJNJ2L\"}','2022-07-26 06:34:58','2022-12-21 05:31:31'),(17,'billplz','242','',1,1,'{\"key\":\"b2ead199-e6f3-4420-ae5c-c94f1b1e8ed6\",\"version\":\"v4\",\"x_signature\":\"S-HDXHxRJB-J7rNtoktZkKJg\",\"collection_name\":\"kjj5ya006\"}','2022-07-26 06:34:58','2022-12-21 05:31:31'),(19,'toyyibpay','250','',1,1,'{\"client_secret\":\"wnbtrqle-9t9l-m02j-e2bz-iaj2tkp52sfo\",\"category_code\":\"0m0j9yc4\"}','2022-12-05 11:54:12','2022-12-21 05:31:31'),(20,'flutterwave','251','if your currency is not available in flutterwave, it will convert you currency value to USD value based on your currency exchange rate.',1,1,'{\"public_key\":\"FLWPUBK_TEST-86cce2ec43c63e09a517290a8347fcab-X\",\"secret_key\":\"FLWSECK_TEST-d37a42d8917db84f1b2f47c125252d0a-X\",\"secret_hash\":\"nazmart\"}','2022-12-05 11:56:40','2022-12-21 05:31:31'),(21,'payfast','252','',1,1,'{\"merchant_id\":\"10024000\",\"merchant_key\":\"77jcu5v4ufdod\",\"passphrase\":\"testpayfastsohan\",\"itn_url\":\"https:\\/\\/fundorex.test\\/nazmart-payfast\"}','2022-12-05 11:56:40','2022-12-21 05:31:31'),(22,'manual_payment','115','',1,1,'{\"name\":\"Manual Payment\",\"description\":\"Manual Payment Here\"}','2022-04-17 01:54:18','2022-12-21 05:31:31');
/*!40000 ALTER TABLE `payment_gateways` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_logs`
--

DROP TABLE IF EXISTS `payment_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payment_logs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_gateway` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `tenant_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `attachments` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `custom_fields` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `track` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `start_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `renew_status` int DEFAULT NULL,
  `is_renew` bigint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_logs`
--

LOCK TABLES `payment_logs` WRITE;
/*!40000 ALTER TABLE `payment_logs` DISABLE KEYS */;
INSERT INTO `payment_logs` VALUES (1,'rayen@test.com','Rayen','Advance Plan','350','paypal','7',1,'test','complete','complete',NULL,NULL,NULL,'EZlVd8hjKa','2023-01-31 21:51:24','2023-01-31 21:54:53','31-01-2023 09:51:24','2023-03-03 09:51:24',NULL,0),(2,'rayen@test.com','Rayen','Advance Plan','350','manual_payment','7',1,'rayen2','complete','complete','sdfsdfsd','visuel-plateforme-de-revision-041675198843.jpg',NULL,'yX4EASVeNU','2023-01-31 22:00:43','2023-01-31 22:09:34','31-01-2023 10:00:43','2023-03-03 10:00:43',NULL,0),(3,'rayen@test.com','Rayen','Simple Plan','200',NULL,'1',1,'rayen5','complete','complete',NULL,NULL,NULL,'fVT4SddAmc2HdMjveiwe','2023-01-31 22:43:45','2023-01-31 22:49:18','31-01-2023 10:43:28','2023-03-03 10:43:28',NULL,0),(4,'jypij@mailinator.com','Jamal Padilla','Gratuit','0','manual_payment','8',4,'amine','complete','complete','','',NULL,'9mBlzWgFyx','2023-02-11 20:45:37','2023-02-11 21:18:10','11-02-2023 08:45:37',NULL,NULL,0),(5,'juqehegere@mailinator.com','Amela Riley','Gratuit','0','manual_payment','8',3,'hatem','pending','pending','','',NULL,'nzkabvKu0N','2023-02-12 12:27:54','2023-02-12 12:27:55','12-02-2023 12:27:54',NULL,NULL,0);
/*!40000 ALTER TABLE `payment_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=401 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (58,'form-submission','admin',NULL,NULL),(316,'page-list','admin','2022-07-17 06:54:45','2022-07-17 06:54:45'),(317,'page-create','admin','2022-07-17 06:54:45','2022-07-17 06:54:45'),(318,'page-edit','admin','2022-07-17 06:54:45','2022-07-17 06:54:45'),(319,'page-delete','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(320,'price-plan-list','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(321,'price-plan-create','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(322,'price-plan-edit','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(323,'price-plan-delete','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(324,'package-order-all-order','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(325,'package-order-pending-order','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(326,'package-order-progress-order','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(327,'package-order-complete-order','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(328,'package-order-success-order-page','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(329,'package-order-cancel-order-page','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(330,'package-order-order-page-manage','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(331,'package-order-order-report','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(332,'package-order-payment-logs','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(333,'package-order-payment-report','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(334,'package-order-delete','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(335,'package-order-edit','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(336,'testimonial-list','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(337,'testimonial-create','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(338,'testimonial-edit','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(339,'testimonial-delete','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(340,'brand-list','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(341,'brand-create','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(342,'brand-edit','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(343,'brand-delete','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(344,'blog-category-list','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(345,'blog-category-create','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(346,'blog-category-edit','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(347,'blog-category-delete','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(348,'blog-list','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(349,'blog-create','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(350,'blog-edit','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(351,'blog-delete','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(352,'blog-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(353,'blog-comments','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(354,'service-category-list','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(355,'service-category-create','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(356,'service-category-edit','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(357,'service-category-delete','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(358,'service-list','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(359,'service-create','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(360,'service-edit','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(361,'service-delete','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(362,'service-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(363,'service-comments','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(364,'form-builder','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(365,'widget-builder','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(366,'general-settings-page-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(367,'general-settings-global-navbar-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(368,'general-settings-global-footer-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(369,'general-settings-site-identity','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(370,'general-settings-basic-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(371,'general-settings-color-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(372,'general-settings-typography-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(373,'general-settings-seo-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(374,'general-settings-payment-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(375,'general-settings-third-party-script-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(376,'general-settings-smtp-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(377,'general-settings-custom-css-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(378,'general-settings-custom-js-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(379,'general-settings-database-upgrade-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(380,'general-settings-cache-clear-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(381,'general-settings-license-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(382,'language-list','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(383,'language-create','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(384,'language-edit','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(385,'language-delete','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(386,'menu-manage','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(387,'topbar-manage','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(388,'other-settings','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(389,'newsletter-list','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(390,'newsletter-create','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(391,'newsletter-edit','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(392,'newsletter-delete','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(393,'support-ticket-list','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(394,'support-ticket-create','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(395,'support-ticket-edit','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(396,'support-ticket-delete','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(397,'support-ticket-department-list','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(398,'support-ticket-department-create','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(399,'support-ticket-department-edit','admin','2022-07-17 06:54:46','2022-07-17 06:54:46'),(400,'support-ticket-department-delete','admin','2022-07-17 06:54:46','2022-07-17 06:54:46');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan_features`
--

DROP TABLE IF EXISTS `plan_features`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plan_features` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `plan_id` bigint NOT NULL,
  `feature_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=273 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_features`
--

LOCK TABLES `plan_features` WRITE;
/*!40000 ALTER TABLE `plan_features` DISABLE KEYS */;
INSERT INTO `plan_features` VALUES (247,7,'products',0,'2023-01-04 06:21:04','2023-01-04 06:21:04'),(248,7,'pages',0,'2023-01-04 06:21:04','2023-01-04 06:21:04'),(249,7,'blog',0,'2023-01-04 06:21:04','2023-01-04 06:21:04'),(250,7,'storage',0,'2023-01-04 06:21:04','2023-01-04 06:21:04'),(251,7,'inventory',0,'2023-01-04 06:21:04','2023-01-04 06:21:04'),(252,7,'campaign',0,'2023-01-04 06:21:04','2023-01-04 06:21:04'),(253,1,'products',0,'2023-01-04 06:33:47','2023-01-04 06:33:47'),(254,1,'pages',0,'2023-01-04 06:33:47','2023-01-04 06:33:47'),(255,1,'blog',0,'2023-01-04 06:33:47','2023-01-04 06:33:47'),(256,1,'storage',0,'2023-01-04 06:33:47','2023-01-04 06:33:47'),(257,4,'products',0,'2023-01-04 06:34:32','2023-01-04 06:34:32'),(258,4,'pages',0,'2023-01-04 06:34:32','2023-01-04 06:34:32'),(259,4,'blog',0,'2023-01-04 06:34:32','2023-01-04 06:34:32'),(260,4,'storage',0,'2023-01-04 06:34:32','2023-01-04 06:34:32'),(261,4,'inventory',0,'2023-01-04 06:34:32','2023-01-04 06:34:32'),(262,4,'campaign',0,'2023-01-04 06:34:32','2023-01-04 06:34:32'),(263,3,'products',0,'2023-01-04 06:34:48','2023-01-04 06:34:48'),(264,3,'pages',0,'2023-01-04 06:34:48','2023-01-04 06:34:48'),(265,3,'blog',0,'2023-01-04 06:34:48','2023-01-04 06:34:48'),(266,3,'storage',0,'2023-01-04 06:34:48','2023-01-04 06:34:48'),(267,2,'products',0,'2023-01-04 06:36:22','2023-01-04 06:36:22'),(268,2,'pages',0,'2023-01-04 06:36:22','2023-01-04 06:36:22'),(269,2,'blog',0,'2023-01-04 06:36:22','2023-01-04 06:36:22'),(270,2,'storage',0,'2023-01-04 06:36:22','2023-01-04 06:36:22'),(271,8,'products',0,'2023-02-11 20:41:25','2023-02-11 20:41:25'),(272,8,'storage',0,'2023-02-11 20:41:25','2023-02-11 20:41:25');
/*!40000 ALTER TABLE `plan_features` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `price_plans`
--

DROP TABLE IF EXISTS `price_plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `price_plans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` bigint unsigned DEFAULT NULL,
  `status` bigint unsigned NOT NULL DEFAULT '0',
  `price` double NOT NULL,
  `faq` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog_permission_feature` int DEFAULT NULL,
  `product_permission_feature` int DEFAULT NULL,
  `page_permission_feature` int DEFAULT NULL,
  `has_trial` tinyint(1) NOT NULL DEFAULT '0',
  `trial_days` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `storage_permission_feature` int DEFAULT NULL,
  `package_badge` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `price_plans`
--

LOCK TABLES `price_plans` WRITE;
/*!40000 ALTER TABLE `price_plans` DISABLE KEYS */;
INSERT INTO `price_plans` VALUES (1,'Simple Plan',0,1,200,'a:2:{s:5:\"title\";a:3:{i:0;s:28:\"What is a subscription plan?\";i:1;s:34:\"How does a subscription plan work?\";i:2;s:34:\"Can I change my subscription plan?\";}s:11:\"description\";a:3:{i:0;s:239:\"A subscription plan is a service that allows a customer to pay a recurring fee in exchange for access to a product or service. This can be anything from a monthly subscription to a streaming service, to a yearly subscription to a magazine.\";i:1;s:253:\"When a customer subscribes to a plan, they typically pay a regular fee (either monthly or annually) to access the product or service. The subscription will automatically renew at the end of the subscription period, unless the customer chooses to cancel.\";i:2;s:269:\"It is possible to change your subscription plan with some companies. For example, you may be able to upgrade from a monthly plan to an annual plan, or downgrade from an annual plan to a monthly plan. It is worth contacting the company to see what options are available.\";}}',12,12,12,1,10,'2022-07-06 10:16:18','2023-01-04 06:33:47',100,'Basic',NULL),(2,'Large Plan',1,1,500,'a:2:{s:5:\"title\";a:1:{i:0;s:28:\"What is a subscription plan?\";}s:11:\"description\";a:1:{i:0;s:239:\"A subscription plan is a service that allows a customer to pay a recurring fee in exchange for access to a product or service. This can be anything from a monthly subscription to a streaming service, to a yearly subscription to a magazine.\";}}',25,25,25,1,30,'2022-07-06 10:17:55','2023-01-04 06:36:22',100,'Royal',NULL),(3,'Medium Plan',2,1,999,'a:2:{s:5:\"title\";a:1:{i:0;N;}s:11:\"description\";a:1:{i:0;N;}}',100,200,100,0,NULL,'2022-07-06 11:08:15','2023-01-04 06:34:48',50,'Enterprise',NULL),(4,'Ultimate Plan',0,1,599,'a:2:{s:5:\"title\";a:1:{i:0;s:28:\"What is a subscription plan?\";}s:11:\"description\";a:1:{i:0;s:239:\"A subscription plan is a service that allows a customer to pay a recurring fee in exchange for access to a product or service. This can be anything from a monthly subscription to a streaming service, to a yearly subscription to a magazine.\";}}',100,500,50,1,3,'2022-08-09 07:13:55','2023-01-04 06:34:32',100,'Ultimate',NULL),(7,'Advance Plan',0,1,350,'a:2:{s:5:\"title\";a:1:{i:0;N;}s:11:\"description\";a:1:{i:0;N;}}',20,20,20,1,10,'2023-01-04 06:21:04','2023-01-04 06:21:04',100,'Business',NULL),(8,'Gratuit',2,1,0,'a:2:{s:5:\"title\";a:1:{i:0;N;}s:11:\"description\";a:1:{i:0;N;}}',NULL,10,NULL,0,NULL,'2023-02-11 20:41:25','2023-02-11 20:41:25',100,'Gratuit','Gratuit');
/*!40000 ALTER TABLE `price_plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Super Admin','admin','2022-04-20 21:35:00','2022-04-20 21:35:00'),(2,'Admin','admin','2022-04-20 21:36:28','2022-04-20 21:36:28'),(3,'Editor','admin','2022-04-20 21:36:36','2022-04-20 21:36:36');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_categories`
--

DROP TABLE IF EXISTS `service_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `service_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_categories`
--

LOCK TABLES `service_categories` WRITE;
/*!40000 ALTER TABLE `service_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `service_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `static_option_centrals`
--

DROP TABLE IF EXISTS `static_option_centrals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `static_option_centrals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `unique_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `static_option_centrals`
--

LOCK TABLES `static_option_centrals` WRITE;
/*!40000 ALTER TABLE `static_option_centrals` DISABLE KEYS */;
INSERT INTO `static_option_centrals` VALUES (1,'custom_domain_settings_title','Read Before Sending Custom Domain Request',NULL,'2022-06-15 06:45:51','2022-06-15 06:45:51'),(2,'custom_domain_settings_description','Before sending request for your custom domain, You need to add CNAME records (given in below table) in your custom domain from your domain registrar account (like - namecheap, godaddy etc...).\r\n CNAME records are needed to point your custom domain to our domain ( nazmart.net ), so that our website can show your website on your custom domain\r\n Different domain registrar (like - godaddy, namecheap etc...) has different interface for adding CNAME records. If you cannot find the place to add CNAME record in your domain registrar account, then please contact your domain registrar support, they will show you the place to add CNAME record for your custom domain. They can also help you with adding CNAME record for you.',NULL,'2022-06-15 06:45:51','2022-11-24 13:16:01'),(3,'custom_domain_table_title','Add CNAME records (take data from below table) in your custom domain from your domain registrar panel:',NULL,'2022-06-15 06:45:51','2022-06-15 06:45:51'),(4,'custom_domain_settings_screem_show_image','101',NULL,'2022-06-15 06:45:51','2022-06-15 06:45:51'),(5,'get_script_version','1.0.0',NULL,'2022-06-15 06:45:51','2022-06-15 06:45:51');
/*!40000 ALTER TABLE `static_option_centrals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `static_options`
--

DROP TABLE IF EXISTS `static_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `static_options` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `static_options_option_name_index` (`option_name`)
) ENGINE=InnoDB AUTO_INCREMENT=234 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `static_options`
--

LOCK TABLES `static_options` WRITE;
/*!40000 ALTER TABLE `static_options` DISABLE KEYS */;
INSERT INTO `static_options` VALUES (1,'site_logo','267','2022-01-30 23:38:48','2023-02-15 20:37:53'),(2,'site_white_logo','267','2022-01-30 23:38:48','2023-02-15 20:37:53'),(3,'site_favicon','266','2022-01-30 23:38:48','2023-02-15 20:36:53'),(4,'site_title','Au panier','2022-02-02 00:54:56','2023-02-10 23:11:57'),(5,'site_tag_line','Construisez votre site e-commerce en utilisant notre plateforme','2022-02-02 00:54:56','2023-02-10 23:11:57'),(6,'site_footer_copyright_text','{copy} {year} All right reserved','2022-02-02 00:54:56','2023-02-10 23:11:57'),(10,'dark_mode_for_admin_panel',NULL,'2022-02-02 00:58:27','2023-01-31 21:57:44'),(11,'maintenance_mode',NULL,'2022-02-02 00:58:27','2023-02-10 23:14:02'),(12,'backend_preloader',NULL,'2022-02-02 00:58:27','2022-02-02 00:58:27'),(13,'user_email_verify_status','on','2022-02-02 00:58:27','2022-06-18 12:06:14'),(14,'get_script_version','1.0.1','2022-02-02 01:29:18','2022-02-02 01:29:18'),(15,'language_selector_status','on','2022-02-02 03:25:58','2022-02-02 03:29:31'),(19,'main_color_one','rgb(0, 0, 0)','2022-02-02 05:55:27','2023-02-10 22:59:33'),(20,'main_color_two','rgb(255, 247, 92)','2022-02-02 05:55:27','2023-02-15 19:48:38'),(21,'heading_color','rgb(51, 51, 51)','2022-02-02 05:55:27','2022-02-02 06:13:22'),(22,'secondary_color','rgb(247, 243, 163)','2022-02-02 05:55:27','2023-02-15 19:48:38'),(23,'paragraph_color','rgb(130, 130, 130)','2022-02-02 05:55:27','2022-02-02 06:13:22'),(28,'site_global_email','info@devaly.ovh','2022-02-07 01:31:24','2023-01-31 21:44:47'),(29,'site_smtp_host','sandbox.smtp.mailtrap.io','2022-02-07 01:31:24','2023-01-31 21:44:47'),(30,'site_smtp_username','d3d95052b6c912','2022-02-07 01:31:24','2023-02-11 17:25:16'),(31,'site_smtp_password','025c7599c071e0','2022-02-07 01:31:24','2023-02-11 17:25:16'),(32,'site_smtp_port','2525','2022-02-07 01:31:24','2023-01-31 21:45:21'),(33,'site_smtp_encryption','tls','2022-02-07 01:31:24','2023-01-04 13:13:57'),(34,'site_smtp_driver','smtp','2022-02-07 01:31:24','2022-02-07 01:31:24'),(35,'site_en_GB_meta_title','Tenancyland','2022-03-06 01:26:03','2022-03-06 01:26:03'),(36,'site_en_GB_meta_tags','Tenancyland','2022-03-06 01:26:03','2022-03-06 01:26:03'),(37,'site_en_GB_meta_keywords','Tenancyland','2022-03-06 01:26:03','2022-03-06 01:26:03'),(38,'site_en_GB_meta_description','Tenancyland','2022-03-06 01:26:03','2022-03-06 01:26:03'),(39,'site_en_GB_og_meta_title','Tenancyland','2022-03-06 01:26:03','2022-03-06 01:26:03'),(40,'site_en_GB_og_meta_description','Tenancyland','2022-03-06 01:26:04','2022-03-06 01:26:04'),(41,'site_en_GB_og_meta_image','13','2022-03-06 01:26:04','2022-03-06 01:26:04'),(42,'site_bo_meta_title','الإيجار','2022-03-06 01:26:04','2022-03-06 01:26:33'),(43,'site_bo_meta_tags','الإيجار','2022-03-06 01:26:04','2022-03-06 01:26:33'),(44,'site_bo_meta_keywords','الإيجار','2022-03-06 01:26:04','2022-03-06 01:26:34'),(45,'site_bo_meta_description','الإيجار','2022-03-06 01:26:04','2022-03-06 01:26:34'),(46,'site_bo_og_meta_title','الإيجار','2022-03-06 01:26:04','2022-03-06 01:26:34'),(47,'site_bo_og_meta_description','الإيجار','2022-03-06 01:26:04','2022-03-06 01:26:34'),(48,'site_bo_og_meta_image','13','2022-03-06 01:26:04','2022-03-06 01:26:34'),(49,'site_disqus_key',NULL,'2022-03-06 02:54:08','2022-03-06 02:54:08'),(50,'site_google_analytics','<!-- Global site tag (gtag.js) - Google Analytics -->\r\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-173946136-1\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'UA-173946136-1\');\r\n</script>','2022-03-06 02:54:08','2022-06-18 10:57:27'),(51,'tawk_api_key','<!--Start of Tawk.to Script-->\r\n<script type=\"text/javascript\">\r\nvar Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n(function(){\r\nvar s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\ns1.async=true;\r\ns1.src=\'https://embed.tawk.to/5f61a79ff0e7167d0010b454/default\';\r\ns1.charset=\'UTF-8\';\r\ns1.setAttribute(\'crossorigin\',\'*\');\r\ns0.parentNode.insertBefore(s1,s0);\r\n})();\r\n</script>\r\n<!--End of Tawk.to Script-->','2022-03-06 02:54:08','2022-06-18 10:57:42'),(52,'site_third_party_tracking_code',NULL,'2022-03-06 02:54:08','2022-06-11 09:07:01'),(53,'site_google_captcha_v3_site_key','6LdvUeQUAAAAAHKM02AWBjtKAAL0-AqUk_qkqa0O','2022-03-06 02:54:08','2022-06-18 10:52:54'),(54,'site_google_captcha_v3_secret_key','6LdvUeQUAAAAABaCkkQbMY-z2XaqYsLSWwYgB6Ru','2022-03-06 02:54:08','2022-06-18 10:52:54'),(55,'enable_google_login',NULL,'2022-03-06 02:54:08','2022-03-06 02:54:08'),(56,'google_client_id',NULL,'2022-03-06 02:54:08','2022-03-06 02:54:08'),(57,'google_client_secret',NULL,'2022-03-06 02:54:08','2022-03-06 02:54:08'),(58,'enable_facebook_login',NULL,'2022-03-06 02:54:08','2022-03-06 02:54:08'),(59,'facebook_client_id',NULL,'2022-03-06 02:54:08','2022-03-06 02:54:08'),(60,'facebook_client_secret',NULL,'2022-03-06 02:54:08','2022-03-06 02:54:08'),(61,'google_adsense_publisher_id',NULL,'2022-03-06 02:54:08','2022-03-06 02:54:08'),(62,'google_adsense_customer_id',NULL,'2022-03-06 02:54:08','2022-03-06 02:54:08'),(63,'enable_google_adsense',NULL,'2022-03-06 02:54:08','2022-03-06 02:54:08'),(64,'instagram_access_token',NULL,'2022-03-06 02:54:08','2022-03-06 02:54:08'),(65,'category_page_item_show','3','2022-03-16 05:07:51','2022-03-16 05:08:10'),(66,'tag_page_item_show','4','2022-03-16 06:37:50','2022-03-16 06:37:50'),(67,'search_page_item_show','2','2022-03-16 06:37:50','2022-03-16 06:37:50'),(71,'home_page','1','2022-04-17 00:30:37','2022-07-17 11:14:12'),(72,'site_global_currency','USD','2022-04-17 02:07:21','2022-04-17 02:07:21'),(73,'site_global_payment_gateway',NULL,'2022-04-17 02:07:21','2022-04-17 02:07:21'),(74,'site_usd_to_ngn_exchange_rate','444.54','2022-04-17 02:07:21','2022-12-06 09:57:17'),(75,'site_euro_to_ngn_exchange_rate',NULL,'2022-04-17 02:07:21','2022-04-17 02:07:21'),(76,'site_currency_symbol_position','left','2022-04-17 02:07:21','2022-04-17 02:07:21'),(77,'site_default_payment_gateway','paypal','2022-04-17 02:07:21','2022-04-17 02:07:21'),(78,'site__to_idr_exchange_rate','14365.30','2022-04-17 02:07:21','2022-04-17 02:07:21'),(79,'site__to_inr_exchange_rate',NULL,'2022-04-17 02:07:21','2022-04-17 02:07:21'),(80,'site__to_ngn_exchange_rate',NULL,'2022-04-17 02:07:21','2022-04-17 02:07:21'),(81,'site__to_zar_exchange_rate','15.86','2022-04-17 02:07:21','2022-04-17 02:07:21'),(82,'site__to_brl_exchange_rate',NULL,'2022-04-17 02:07:21','2022-04-17 02:07:21'),(83,'site_usd_to_idr_exchange_rate','15646.35','2022-04-17 02:10:34','2022-12-06 09:57:17'),(84,'site_usd_to_inr_exchange_rate','82.58','2022-04-17 02:10:34','2022-12-06 09:57:17'),(85,'site_usd_to_zar_exchange_rate','17.33','2022-04-17 02:10:34','2022-12-06 09:57:17'),(86,'site_usd_to_brl_exchange_rate','5.28','2022-04-17 02:10:34','2022-12-06 09:57:17'),(87,'site_order_success_page_en_GB_title','Thank you!','2022-04-17 03:44:18','2022-04-17 03:44:18'),(88,'site_order_success_page_en_GB_description','Your order has been placed successfully!','2022-04-17 03:44:18','2022-04-17 03:44:18'),(91,'order_page_en_GB_form_title','Order Information','2022-04-17 04:04:33','2022-04-17 04:04:33'),(93,'order_form','5','2022-04-17 04:04:33','2022-04-17 04:04:33'),(94,'topbar_twitter_url','#','2022-04-22 22:26:06','2022-04-22 22:26:06'),(95,'topbar_linkedin_url','#','2022-04-22 22:26:06','2022-04-22 22:26:06'),(96,'topbar_facebook_url','#','2022-04-22 22:26:06','2022-04-22 22:26:06'),(97,'topbar_youtube_url','#','2022-04-22 22:26:06','2022-04-22 22:26:06'),(98,'landlord_frontend_language_show_hide','on','2022-04-22 22:26:06','2022-04-22 22:50:11'),(99,'support_ticket_en_GB_login_notice',NULL,'2022-05-25 01:49:38','2023-01-04 07:40:23'),(100,'support_ticket_en_GB_form_title',NULL,'2022-05-25 01:49:38','2023-01-04 07:40:23'),(101,'support_ticket_en_GB_button_text',NULL,'2022-05-25 01:49:38','2023-01-04 07:40:23'),(102,'support_ticket_en_GB_success_message',NULL,'2022-05-25 01:49:38','2023-01-04 07:40:23'),(107,'guest_order_system_status',NULL,'2022-05-30 05:34:58','2022-05-30 05:34:58'),(108,'timezone','Africa/Tunis','2022-05-30 05:36:32','2023-02-01 02:42:13'),(109,'first_package_expire_notify_mail','5','2022-06-01 05:24:55','2022-06-01 07:09:24'),(110,'second_package_expire_notify_mail','2','2022-06-01 05:24:56','2022-06-01 05:36:19'),(111,'package_expire_notify_mail_days','[\"3\"]','2022-06-01 08:04:50','2022-06-09 01:06:04'),(115,'error_404_page_en_GB_subtitle','Opps page not found','2022-06-08 09:17:33','2022-06-08 09:17:33'),(116,'error_404_page_en_GB_button_text','Go Back','2022-06-08 09:17:33','2022-06-08 09:17:33'),(117,'error_image','262','2022-06-08 09:17:33','2023-02-10 23:26:12'),(120,'maintains_page_en_GB_title','We are on Scheduled Maintenance','2022-06-08 09:50:14','2022-06-08 09:50:14'),(121,'maintains_page_en_GB_description','Way off why half led have near bed. At engage simple father of period others except. \r\nMy giving do summer of though narrow marked at. Spring formal no county ye waited.','2022-06-08 09:50:14','2022-06-08 09:50:14'),(124,'maintenance_logo','247','2022-06-08 09:50:14','2023-01-04 07:51:27'),(125,'maintenance_bg_image','198','2022-06-08 09:50:14','2022-06-08 09:50:14'),(126,'mentenance_back_date','2023-07-05 00:00','2022-06-08 10:20:37','2023-01-04 13:16:15'),(127,'site_smtp_mail_mailer',NULL,'2022-06-11 09:11:49','2022-06-11 09:11:49'),(128,'site_smtp_mail_host',NULL,'2022-06-11 09:11:49','2022-06-11 09:11:49'),(129,'site_smtp_mail_port',NULL,'2022-06-11 09:11:49','2022-06-11 09:11:49'),(130,'site_smtp_mail_username',NULL,'2022-06-11 09:11:49','2022-06-11 09:11:49'),(131,'site_smtp_mail_password',NULL,'2022-06-11 09:11:49','2022-06-11 09:11:49'),(132,'site_smtp_mail_encryption',NULL,'2022-06-11 09:11:49','2022-06-11 09:11:49'),(133,'gradient_one_color',NULL,'2022-06-11 09:12:30','2022-06-11 09:12:30'),(134,'gradient_two_color',NULL,'2022-06-11 09:12:30','2022-06-11 09:12:30'),(135,'custom_domain_settings_title','Read Before Sending Custom Domain Request','2022-06-15 05:37:11','2022-06-15 05:40:06'),(136,'custom_domain_settings_description','Before sending request for your custom domain, You need to add CNAME records (given in below table) in your custom domain from your domain registrar account (like - namecheap, godaddy etc...).\r\n CNAME records are needed to point your custom domain to our domain ( sassotest.xyz ), so that our website can show your website on your custom domain\r\n Different domain registrar (like - godaddy, namecheap etc...) has different interface for adding CNAME records. If you cannot find the place to add CNAME record in your domain registrar account, then please contact your domain registrar support, they will show you the place to add CNAME record for your custom domain. They can also help you with adding CNAME record for you.','2022-06-15 05:37:11','2022-06-15 05:40:06'),(137,'custom_domain_table_title','Add CNAME records (take data from below table) in your custom domain from your domain registrar panel:','2022-06-15 05:37:11','2022-06-15 05:40:06'),(138,'custom_domain_table_info_type_one','CNAME Record','2022-06-15 05:37:11','2022-06-15 05:46:06'),(139,'custom_domain_table_info_host_one','www','2022-06-15 05:37:11','2022-06-15 05:46:06'),(140,'custom_domain_table_info_value_one','tenancy.xyz','2022-06-15 05:37:11','2022-06-15 05:46:06'),(141,'custom_domain_table_info_ttl_one','Automatic','2022-06-15 05:37:11','2022-06-15 05:46:06'),(142,'custom_domain_table_info_type_two','CNAME Record','2022-06-15 05:37:11','2022-06-15 05:46:06'),(143,'custom_domain_table_info_host_two','@','2022-06-15 05:37:11','2022-06-15 06:05:51'),(144,'custom_domain_table_info_value_two','tenancy.xyz','2022-06-15 05:37:11','2022-06-15 05:46:06'),(145,'custom_domain_table_info_ttl_two','Automatic','2022-06-15 05:37:11','2022-06-15 05:46:06'),(146,'custom_domain_settings_screem_show_image','101','2022-06-15 05:38:16','2022-06-15 06:15:36'),(147,'body_font_family','Manrope','2022-06-18 06:50:15','2022-06-28 12:25:57'),(148,'heading_font_family','Roboto Slab','2022-06-18 06:50:15','2022-06-28 12:08:31'),(149,'heading_font','on','2022-06-18 06:50:15','2022-06-18 07:11:08'),(150,'body_font_variant','a:7:{i:0;s:5:\"0,200\";i:1;s:5:\"0,300\";i:2;s:5:\"0,400\";i:3;s:5:\"0,500\";i:4;s:5:\"0,600\";i:5;s:5:\"0,700\";i:6;s:5:\"0,800\";}','2022-06-18 06:50:15','2022-06-28 12:25:57'),(151,'heading_font_variant','a:6:{i:0;s:5:\"0,100\";i:1;s:5:\"0,300\";i:2;s:5:\"0,400\";i:3;s:5:\"0,500\";i:4;s:5:\"0,700\";i:5;s:5:\"0,900\";}','2022-06-18 06:50:15','2022-06-18 07:20:57'),(159,'account_remove_day_within_expiration','5','2022-06-22 09:48:40','2022-06-22 09:57:18'),(160,'tenant_account_delete_notify_mail_days','[\"5\"]','2022-06-22 09:51:32','2022-06-22 10:50:29'),(161,'main_color_three','#599A8D','2022-06-28 11:53:53','2022-06-28 11:53:53'),(162,'main_color_four','#1E88E5','2022-06-28 11:53:53','2022-06-28 11:53:53'),(163,'secondary_color_two','rgb(255, 253, 210)','2022-06-28 11:53:53','2023-02-15 19:48:38'),(164,'section_bg_1','#FFFBFB','2022-06-28 11:53:53','2022-06-28 11:53:53'),(165,'section_bg_2','rgb(254, 255, 238)','2022-06-28 11:53:53','2023-02-15 19:48:38'),(166,'section_bg_3','#F4F8FB','2022-06-28 11:53:53','2022-06-28 11:53:53'),(167,'section_bg_4','#F2F3FB','2022-06-28 11:53:53','2022-06-28 11:53:53'),(168,'section_bg_5','rgb(247, 249, 242)','2022-06-28 11:53:53','2023-02-15 19:48:38'),(169,'section_bg_6','#E5EFF8','2022-06-28 11:53:53','2022-06-28 11:53:53'),(170,'body_color','#666666','2022-06-28 11:53:53','2022-06-28 11:53:53'),(171,'light_color','#666666','2022-06-28 11:53:53','2022-06-28 11:53:53'),(172,'extra_light_color','#888888','2022-06-28 11:53:53','2022-06-28 11:53:53'),(173,'review_color','#FABE50','2022-06-28 11:53:53','2022-06-28 11:53:53'),(174,'new_color','#5AB27E','2022-06-28 11:53:53','2022-06-28 11:53:53'),(177,'pricing_plan','7','2022-07-17 10:46:18','2022-07-17 11:12:03'),(179,'default_theme','theme-1','2022-08-04 11:36:52','2023-01-02 04:59:52'),(180,'feedback_bg_item',NULL,'2022-08-11 02:23:39','2022-08-11 02:23:39'),(186,'blog_page','1','2022-09-12 12:31:40','2022-09-12 12:31:40'),(187,'shop_page',NULL,'2022-09-12 12:31:40','2022-09-12 12:31:40'),(188,'site_order_cancel_page_en_GB_title','Order Cancel','2022-11-06 09:44:03','2022-11-06 09:44:03'),(189,'site_order_cancel_page_en_GB_subtitle','Your Order has Been Canceled','2022-11-06 09:44:03','2022-11-06 09:44:03'),(190,'site_order_cancel_page_en_GB_description','The Package You Have Ordered is Cancel Due to Any Reason','2022-11-06 09:44:03','2022-11-06 09:44:03'),(191,'site_order_cancel_page_ar_title',NULL,'2022-11-06 09:44:03','2022-11-06 09:44:03'),(192,'site_order_cancel_page_ar_subtitle',NULL,'2022-11-06 09:44:03','2022-11-06 09:44:03'),(193,'site_order_cancel_page_ar_description',NULL,'2022-11-06 09:44:03','2022-11-06 09:44:03'),(194,'site_ar_title',NULL,'2022-11-08 07:49:47','2022-11-08 07:49:47'),(195,'site_ar_tag_line',NULL,'2022-11-08 07:49:47','2022-11-08 07:49:47'),(196,'site_ar_footer_copyright_text',NULL,'2022-11-08 07:49:47','2022-11-08 07:49:47'),(199,'up_coming_themes_backend','on','2022-11-27 11:32:43','2022-11-27 11:32:43'),(200,'up_coming_themes_frontend','on','2022-11-27 11:32:43','2022-11-27 11:32:43'),(201,'blogs_page_item_show',NULL,'2022-11-27 12:32:08','2022-11-27 12:32:08'),(202,'blog_avatar_image','249','2022-11-27 12:33:50','2022-11-27 12:33:50'),(203,'zero_plan_limit','1','2023-01-02 04:59:52','2023-01-02 05:04:27'),(204,'support_ticket_ar_login_notice',NULL,'2023-01-04 07:32:05','2023-01-04 07:32:05'),(205,'support_ticket_ar_form_title',NULL,'2023-01-04 07:32:05','2023-01-04 07:32:05'),(206,'support_ticket_ar_button_text',NULL,'2023-01-04 07:32:05','2023-01-04 07:32:05'),(207,'support_ticket_ar_success_message',NULL,'2023-01-04 07:32:05','2023-01-04 07:32:05'),(208,'support_ticket_login_notice','Login to create support ticket land','2023-01-04 07:49:56','2023-01-04 07:49:56'),(209,'support_ticket_form_title','Create New Support Ticket','2023-01-04 07:49:56','2023-01-04 07:49:56'),(210,'support_ticket_button_text','Submit Ticket','2023-01-04 07:49:56','2023-01-04 07:49:56'),(211,'support_ticket_success_message','Thanks for contact us, we will reply soon','2023-01-04 07:49:56','2023-01-04 07:49:56'),(212,'error_404_page_ar_subtitle',NULL,'2023-01-04 07:51:07','2023-01-04 07:51:07'),(213,'error_404_page_ar_button_text',NULL,'2023-01-04 07:51:07','2023-01-04 07:51:07'),(214,'maintains_page_ar_title',NULL,'2023-01-04 07:51:27','2023-01-04 07:51:27'),(215,'maintains_page_ar_description',NULL,'2023-01-04 07:51:27','2023-01-04 07:51:27'),(216,'error_404_page_subtitle','Opps page not found','2023-01-04 08:05:37','2023-01-04 08:05:37'),(217,'error_404_page_button_text','Go Back','2023-01-04 08:05:37','2023-01-04 08:05:37'),(218,'maintains_page_title','We are on Scheduled Maintenance','2023-01-04 08:14:16','2023-01-04 08:14:16'),(219,'maintains_page_description','Way off why half led have near bed. At engage simple father of period others except. \r\nMy giving do summer of though narrow marked at. Spring formal no county ye waited.','2023-01-04 08:14:16','2023-01-04 08:14:16'),(220,'site_meta_title',NULL,'2023-01-04 09:55:24','2023-01-04 09:55:24'),(221,'site_meta_tags',NULL,'2023-01-04 09:55:24','2023-01-04 09:55:24'),(222,'site_meta_keywords',NULL,'2023-01-04 09:55:24','2023-01-04 09:55:24'),(223,'site_meta_description',NULL,'2023-01-04 09:55:24','2023-01-04 09:55:24'),(224,'site_og_meta_title',NULL,'2023-01-04 09:55:24','2023-01-04 09:55:24'),(225,'site_og_meta_description',NULL,'2023-01-04 09:55:25','2023-01-04 09:55:25'),(226,'site_og_meta_image',NULL,'2023-01-04 09:55:25','2023-01-04 09:55:25'),(227,'track_order',NULL,'2023-01-04 14:42:49','2023-01-04 14:42:49'),(228,'terms_condition','13','2023-01-04 14:42:49','2023-01-04 14:42:49'),(229,'privacy_policy','14','2023-01-04 14:42:49','2023-01-04 14:42:49'),(230,'placeholder_image',NULL,'2023-02-01 02:42:13','2023-02-01 02:42:13'),(231,'item_purchase_key','af225edf-b32e-40c3-823d-11238e18b32a','2023-01-31 21:52:41','2023-01-31 21:52:41'),(232,'item_license_status','not_verified','2023-01-31 21:52:41','2023-02-11 21:30:35'),(233,'item_license_msg','you have purchased Regular License and already used your purchase code to license a website, to use the script again you have to purchase new license','2023-01-31 21:52:41','2023-02-11 21:30:35');
/*!40000 ALTER TABLE `static_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `support_departments`
--

DROP TABLE IF EXISTS `support_departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `support_departments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `support_departments`
--

LOCK TABLES `support_departments` WRITE;
/*!40000 ALTER TABLE `support_departments` DISABLE KEYS */;
INSERT INTO `support_departments` VALUES (1,'Login Issue','1','2022-05-25 02:58:53','2023-01-04 07:34:50'),(2,'License Issue','1','2022-05-25 03:02:37','2023-01-04 07:34:42');
/*!40000 ALTER TABLE `support_departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `support_ticket_messages`
--

DROP TABLE IF EXISTS `support_ticket_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `support_ticket_messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `notify` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `support_ticket_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `support_ticket_messages`
--

LOCK TABLES `support_ticket_messages` WRITE;
/*!40000 ALTER TABLE `support_ticket_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `support_ticket_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `support_tickets`
--

DROP TABLE IF EXISTS `support_tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `support_tickets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `via` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `operating_system` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `subject` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `admin_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `support_tickets`
--

LOCK TABLES `support_tickets` WRITE;
/*!40000 ALTER TABLE `support_tickets` DISABLE KEYS */;
INSERT INTO `support_tickets` VALUES (3,'This is a test ticket from admin user','website',NULL,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.64 Safari/537.36','ddd','test','close','high',NULL,15,NULL,'2022-05-25 04:58:49','2022-07-30 04:30:58');
/*!40000 ALTER TABLE `support_tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tenant_activity_log`
--

DROP TABLE IF EXISTS `tenant_activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tenant_activity_log` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint unsigned DEFAULT NULL,
  `causer_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint unsigned DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `batch_uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject` (`subject_type`,`subject_id`),
  KEY `causer` (`causer_type`,`causer_id`),
  KEY `tenant_activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenant_activity_log`
--

LOCK TABLES `tenant_activity_log` WRITE;
/*!40000 ALTER TABLE `tenant_activity_log` DISABLE KEYS */;
INSERT INTO `tenant_activity_log` VALUES (1,'default','created','App\\Models\\PaymentLogs',1,'App\\Models\\User',1,'{\"attributes\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Advance Plan\", \"package_price\": \"350\"}}',NULL,'created','2023-01-31 21:51:24','2023-01-31 21:51:24'),(2,'default','updated','App\\Models\\PaymentLogs',1,'App\\Models\\Admin',1,'{\"old\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Advance Plan\", \"package_price\": \"350\"}, \"attributes\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Advance Plan\", \"package_price\": \"350\"}}',NULL,'updated','2023-01-31 21:53:02','2023-01-31 21:53:02'),(3,'default','updated','App\\Models\\PaymentLogs',1,'App\\Models\\Admin',1,'{\"old\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Advance Plan\", \"package_price\": \"350\"}, \"attributes\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Advance Plan\", \"package_price\": \"350\"}}',NULL,'updated','2023-01-31 21:54:36','2023-01-31 21:54:36'),(4,'default','updated','App\\Models\\PaymentLogs',1,'App\\Models\\Admin',1,'{\"old\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Advance Plan\", \"package_price\": \"350\"}, \"attributes\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Advance Plan\", \"package_price\": \"350\"}}',NULL,'updated','2023-01-31 21:54:53','2023-01-31 21:54:53'),(5,'default','created','App\\Models\\PaymentLogs',2,'App\\Models\\User',1,'{\"attributes\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Advance Plan\", \"package_price\": \"350\"}}',NULL,'created','2023-01-31 22:00:43','2023-01-31 22:00:43'),(6,'default','updated','App\\Models\\PaymentLogs',2,'App\\Models\\User',1,'{\"old\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Advance Plan\", \"package_price\": \"350\"}, \"attributes\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Advance Plan\", \"package_price\": \"350\"}}',NULL,'updated','2023-01-31 22:00:43','2023-01-31 22:00:43'),(7,'default','updated','App\\Models\\PaymentLogs',2,'App\\Models\\Admin',1,'{\"old\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Advance Plan\", \"package_price\": \"350\"}, \"attributes\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Advance Plan\", \"package_price\": \"350\"}}',NULL,'updated','2023-01-31 22:02:43','2023-01-31 22:02:43'),(8,'default','updated','App\\Models\\PaymentLogs',2,'App\\Models\\Admin',1,'{\"old\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Advance Plan\", \"package_price\": \"350\"}, \"attributes\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Advance Plan\", \"package_price\": \"350\"}}',NULL,'updated','2023-01-31 22:09:21','2023-01-31 22:09:21'),(9,'default','updated','App\\Models\\PaymentLogs',2,'App\\Models\\Admin',1,'{\"old\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Advance Plan\", \"package_price\": \"350\"}, \"attributes\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Advance Plan\", \"package_price\": \"350\"}}',NULL,'updated','2023-01-31 22:09:34','2023-01-31 22:09:34'),(10,'default','created','App\\Models\\PaymentLogs',3,'App\\Models\\Admin',1,'{\"attributes\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Simple Plan\", \"package_price\": \"200\"}}',NULL,'created','2023-01-31 22:43:45','2023-01-31 22:43:45'),(11,'default','updated','App\\Models\\PaymentLogs',3,'App\\Models\\Admin',1,'{\"old\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Simple Plan\", \"package_price\": \"200\"}, \"attributes\": {\"name\": \"Rayen\", \"user_id\": 1, \"package_name\": \"Simple Plan\", \"package_price\": \"200\"}}',NULL,'updated','2023-01-31 22:49:18','2023-01-31 22:49:18'),(12,'default','created','App\\Models\\PaymentLogs',4,'App\\Models\\User',4,'{\"attributes\": {\"name\": \"Jamal Padilla\", \"user_id\": 4, \"package_name\": \"Gratuit\", \"package_price\": \"0\"}}',NULL,'created','2023-02-11 20:45:37','2023-02-11 20:45:37'),(13,'default','updated','App\\Models\\PaymentLogs',4,'App\\Models\\User',4,'{\"old\": {\"name\": \"Jamal Padilla\", \"user_id\": 4, \"package_name\": \"Gratuit\", \"package_price\": \"0\"}, \"attributes\": {\"name\": \"Jamal Padilla\", \"user_id\": 4, \"package_name\": \"Gratuit\", \"package_price\": \"0\"}}',NULL,'updated','2023-02-11 20:45:37','2023-02-11 20:45:37'),(14,'default','updated','App\\Models\\PaymentLogs',4,'App\\Models\\Admin',1,'{\"old\": {\"name\": \"Jamal Padilla\", \"user_id\": 4, \"package_name\": \"Gratuit\", \"package_price\": \"0\"}, \"attributes\": {\"name\": \"Jamal Padilla\", \"user_id\": 4, \"package_name\": \"Gratuit\", \"package_price\": \"0\"}}',NULL,'updated','2023-02-11 20:51:20','2023-02-11 20:51:20'),(15,'default','updated','App\\Models\\PaymentLogs',4,'App\\Models\\Admin',1,'{\"old\": {\"name\": \"Jamal Padilla\", \"user_id\": 4, \"package_name\": \"Gratuit\", \"package_price\": \"0\"}, \"attributes\": {\"name\": \"Jamal Padilla\", \"user_id\": 4, \"package_name\": \"Gratuit\", \"package_price\": \"0\"}}',NULL,'updated','2023-02-11 21:18:10','2023-02-11 21:18:10'),(16,'default','created','App\\Models\\PaymentLogs',5,'App\\Models\\User',3,'{\"attributes\": {\"name\": \"Amela Riley\", \"user_id\": 3, \"package_name\": \"Gratuit\", \"package_price\": \"0\"}}',NULL,'created','2023-02-12 12:27:55','2023-02-12 12:27:55'),(17,'default','updated','App\\Models\\PaymentLogs',5,'App\\Models\\User',3,'{\"old\": {\"name\": \"Amela Riley\", \"user_id\": 3, \"package_name\": \"Gratuit\", \"package_price\": \"0\"}, \"attributes\": {\"name\": \"Amela Riley\", \"user_id\": 3, \"package_name\": \"Gratuit\", \"package_price\": \"0\"}}',NULL,'updated','2023-02-12 12:27:55','2023-02-12 12:27:55');
/*!40000 ALTER TABLE `tenant_activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tenant_exceptions`
--

DROP TABLE IF EXISTS `tenant_exceptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tenant_exceptions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tenant_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `domain_create_status` tinyint(1) NOT NULL DEFAULT '1',
  `seen_status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenant_exceptions`
--

LOCK TABLES `tenant_exceptions` WRITE;
/*!40000 ALTER TABLE `tenant_exceptions` DISABLE KEYS */;
INSERT INTO `tenant_exceptions` VALUES (1,'tr5ial-z-zz-z','Domain create','Does not exist, Tenant does not exists',0,0,'2022-12-29 11:46:45','2022-12-29 11:46:45'),(2,'tr5ial-z-zz-z','Domain create','Does not exist, Tenant does not exists',0,0,'2022-12-29 11:48:08','2022-12-29 11:48:08'),(3,'test-trial-z-z-z-z-z-z','Domain create','Does not exist, Tenant does not exists',0,0,'2022-12-29 12:01:14','2022-12-29 12:01:14'),(4,'z-z-z-z-zz-z-z-z-z','Domain create','Does not exist, Tenant does not exists',0,0,'2022-12-29 12:28:21','2022-12-29 12:28:21'),(5,'z-z-z-z-zz-z-z-z-z','Domain create','Does not exist, Tenant does not exists',0,0,'2022-12-29 12:28:56','2022-12-29 12:28:56'),(6,'z-z-z-z-zz-z-z-z-z','Domain create','Does not exist, Tenant does not exists',0,0,'2022-12-29 12:29:34','2022-12-29 12:29:34'),(7,'zz-z-z-z-z-z-z','Domain create','Does not exist, Tenant does not exists',0,0,'2022-12-29 12:39:28','2022-12-29 12:39:28'),(8,'zz-z-z-z-z-z-z','Domain create','Does not exist, Tenant does not exists',0,0,'2022-12-29 12:41:46','2022-12-29 12:41:46'),(9,'zz-z-z-z-z-z-z','Domain create','Does not exist, Tenant does not exists',0,0,'2022-12-29 12:53:22','2022-12-29 12:53:22'),(10,'zz-z-z-z-z-z-z','Domain create','Does not exist, Tenant does not exists',0,0,'2022-12-29 12:54:07','2022-12-29 12:54:07'),(11,'rayen','domain failed on trial','Database created failed, Make sure your database user has permission to create database',0,0,'2023-01-31 21:49:36','2023-01-31 21:49:36');
/*!40000 ALTER TABLE `tenant_exceptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tenants`
--

DROP TABLE IF EXISTS `tenants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tenants` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int DEFAULT NULL,
  `theme_slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `data` json DEFAULT NULL,
  `renew_status` int unsigned DEFAULT NULL,
  `is_renew` int unsigned NOT NULL DEFAULT '0',
  `start_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenants`
--

LOCK TABLES `tenants` WRITE;
/*!40000 ALTER TABLE `tenants` DISABLE KEYS */;
INSERT INTO `tenants` VALUES ('amine',4,'theme-2','2023-02-11 20:51:20','2023-02-12 12:35:17','{\"tenancy_db_name\": \"nazmart_tenant_amine\"}',0,0,'11-02-2023 08:45:37',NULL),('rayen',NULL,NULL,'2023-01-31 21:49:35','2023-01-31 21:49:36','{\"tenancy_db_name\": \"nazmart_tenant_rayen\"}',NULL,0,NULL,NULL),('rayen2',NULL,NULL,'2023-01-31 22:09:34','2023-01-31 22:09:34','{\"tenancy_db_name\": \"nazmart_tenant_rayen2\"}',NULL,0,NULL,NULL),('rayen3',NULL,NULL,'2023-01-31 22:41:30','2023-01-31 22:41:30','{\"tenancy_db_name\": \"nazmart_tenant_rayen3\"}',NULL,0,NULL,NULL),('rayen4',NULL,NULL,'2023-01-31 22:42:54','2023-01-31 22:42:54','{\"tenancy_db_name\": \"nazmart_tenant_rayen4\"}',NULL,0,NULL,NULL),('rayen5',1,'theme-1','2023-01-31 22:43:28','2023-01-31 22:43:28','{\"tenancy_db_name\": \"nazmart_tenant_rayen5\"}',NULL,0,'31-01-2023 10:43:28','03-03-2023 10:43:28'),('test',NULL,NULL,'2023-01-31 21:53:02','2023-01-31 21:53:02','{\"tenancy_db_name\": \"nazmart_tenant_test\"}',NULL,0,NULL,NULL);
/*!40000 ALTER TABLE `tenants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (4,'Williamson Johnson','Marketing Executive','I was able to learn a large amount in a short amount of time. The practical nature helped me understand what we were trying to do, and how to achieve it.','75',1,'2022-03-08 01:34:45','2022-11-16 13:45:39','Daraz'),(12,'Austin Hull','Manager','I was able to learn a large amount in a short amount of time. The practical nature helped me understand what we were trying to do, and how to achieve it.','75',1,'2022-03-08 03:40:51','2022-11-16 13:43:41','eBay'),(13,'Albert Flores','CEO','I was able to learn a large amount in a short amount of time. The practical nature helped me understand what we were trying to do, and how to achieve it.','75',1,'2022-03-21 23:06:35','2022-11-16 13:42:14','EG Commerce'),(14,'Cameron Williamson','Sales Manager','I was able to learn a large amount in a short amount of time. The practical nature helped me understand what we were trying to do, and how to achieve it.','75',1,'2022-11-16 13:45:08','2023-01-04 06:07:00','Starbucks');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `themes`
--

DROP TABLE IF EXISTS `themes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `themes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 is inactive, 1 is active',
  `is_premium` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `unique_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `themes`
--

LOCK TABLES `themes` WRITE;
/*!40000 ALTER TABLE `themes` DISABLE KEYS */;
INSERT INTO `themes` VALUES (1,'Clothing Store','theme-1','This theme has a best design for clothing store',1,0,'2022-07-16 11:47:14','2023-01-31 22:59:03',NULL,'http://hexfashion.xyz/'),(2,'Luxury Perfume Store','theme-2','This theme has a best design for clothing store',1,0,'2022-07-16 11:47:14','2023-01-31 22:59:02',NULL,'https://furniture.nazmart.net/'),(3,'Fashion Shop','theme-3','This theme has a best design for fashion shop. This theme has a best design for fashion shop',0,0,'2022-07-16 11:47:14','2022-11-17 11:20:04',NULL,NULL);
/*!40000 ALTER TABLE `themes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `has_subdomain` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified` tinyint unsigned NOT NULL DEFAULT '0',
  `email_verify_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Rayen','rayen@test.com',NULL,'$2y$10$lt8rv68VADHcbMaL2Z5z/OtgcQ3s70quePXHxwwIelHsLhEsFQUQO',NULL,'rayen',0,1,'OhW2GFYN',NULL,NULL,NULL,NULL,NULL,'Tunisia',NULL,'2023-02-01 02:39:12','2023-01-31 21:47:51'),(2,'Hyatt Hammond','begab@mailinator.com',NULL,'$2y$10$nR3LJAUuEylvtd3k1eRDzelnMQGH6IWvtAfY4h/FoZu3uvFQ3cEda',NULL,'gycipitisa',0,1,'TWedCOI1',NULL,NULL,NULL,NULL,NULL,'Tunisia',NULL,'2023-02-11 00:04:30','2023-02-11 00:07:37'),(3,'Amela Riley','juqehegere@mailinator.com',NULL,'$2y$10$Rf8T3BWEWIXjAVDhklWK5ueSrJ.DpDnbDqkJZybaR6biHgwndXHiK','UFyXQ8zBjfWN99IbsuVkVYdIArz2QRORKuNmZOOrFDWWiyCKL2QbbT91KeAK','saruvumupa',0,1,'mbKUoytK',NULL,NULL,NULL,NULL,NULL,'Tunisia',NULL,'2023-02-11 17:24:11','2023-02-12 12:27:32'),(4,'Jamal Padilla','jypij@mailinator.com',NULL,'$2y$10$PzVarjU9PgPi2ufwk5iC/e/vzjVOE4GPiovs3dulP8TASsdyTRGKy',NULL,'test',0,1,'4Nr4Rws2',NULL,NULL,NULL,NULL,NULL,'Tunisia',NULL,'2023-02-11 20:32:00','2023-02-11 20:44:55');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wallet_histories`
--

DROP TABLE IF EXISTS `wallet_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wallet_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `payment_gateway` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `transaction_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manual_payment_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wallet_histories_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wallet_histories`
--

LOCK TABLES `wallet_histories` WRITE;
/*!40000 ALTER TABLE `wallet_histories` DISABLE KEYS */;
/*!40000 ALTER TABLE `wallet_histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wallet_settings`
--

DROP TABLE IF EXISTS `wallet_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wallet_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `renew_package` tinyint(1) DEFAULT '0',
  `wallet_alert` tinyint(1) DEFAULT '0',
  `minimum_amount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wallet_settings_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wallet_settings`
--

LOCK TABLES `wallet_settings` WRITE;
/*!40000 ALTER TABLE `wallet_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `wallet_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wallet_tenant_lists`
--

DROP TABLE IF EXISTS `wallet_tenant_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wallet_tenant_lists` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `tenant_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wallet_tenant_lists_user_id_index` (`user_id`),
  KEY `wallet_tenant_lists_tenant_id_index` (`tenant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wallet_tenant_lists`
--

LOCK TABLES `wallet_tenant_lists` WRITE;
/*!40000 ALTER TABLE `wallet_tenant_lists` DISABLE KEYS */;
/*!40000 ALTER TABLE `wallet_tenant_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wallets`
--

DROP TABLE IF EXISTS `wallets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wallets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `balance` double NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `unique_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wallets`
--

LOCK TABLES `wallets` WRITE;
/*!40000 ALTER TABLE `wallets` DISABLE KEYS */;
/*!40000 ALTER TABLE `wallets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `widgets`
--

DROP TABLE IF EXISTS `widgets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `widgets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `widget_area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `widget_order` int DEFAULT NULL,
  `widget_location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `widget_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `widget_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `widget_namespace` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widgets`
--

LOCK TABLES `widgets` WRITE;
/*!40000 ALTER TABLE `widgets` DISABLE KEYS */;
INSERT INTO `widgets` VALUES (4,NULL,1,'footer','AboutUsWidgetTwo','a:8:{s:2:\"id\";s:1:\"4\";s:11:\"widget_name\";s:16:\"AboutUsWidgetTwo\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:6:\"footer\";s:12:\"widget_order\";s:1:\"1\";s:9:\"namespace\";s:46:\"Plugins\\WidgetBuilder\\Widgets\\AboutUsWidgetTwo\";s:10:\"logo_image\";s:3:\"258\";s:15:\"footer_repeater\";a:2:{s:14:\"repeater_text_\";a:2:{i:0;s:19:\"contact@aupanier.tn\";i:1;s:8:\"54546546\";}s:18:\"repeater_text_url_\";a:2:{i:0;s:26:\"mailto:contact@aupanier.tn\";i:1;s:10:\"tel:546546\";}}}','2022-11-17 07:40:50','2023-02-10 23:18:58','Plugins\\WidgetBuilder\\Widgets\\AboutUsWidgetTwo'),(5,NULL,2,'footer','CustomPageWithLinkWidget','a:8:{s:2:\"id\";s:1:\"5\";s:11:\"widget_name\";s:24:\"CustomPageWithLinkWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:6:\"footer\";s:12:\"widget_order\";s:1:\"2\";s:9:\"namespace\";s:54:\"Plugins\\WidgetBuilder\\Widgets\\CustomPageWithLinkWidget\";s:5:\"title\";s:8:\"About Us\";s:28:\"footer_custom_page_with_link\";a:2:{s:15:\"repeater_title_\";a:4:{i:0;s:14:\"Work Portfolio\";i:1;s:8:\"About us\";i:2;s:4:\"Team\";i:3;s:7:\"Pricing\";}s:19:\"repeater_title_url_\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}}}','2022-11-17 08:05:43','2022-11-17 08:36:33','Plugins\\WidgetBuilder\\Widgets\\CustomPageWithLinkWidget'),(6,NULL,3,'footer','CustomPageWithLinkWidget','a:8:{s:2:\"id\";s:1:\"6\";s:11:\"widget_name\";s:24:\"CustomPageWithLinkWidget\";s:11:\"widget_type\";s:6:\"update\";s:15:\"widget_location\";s:6:\"footer\";s:12:\"widget_order\";s:1:\"3\";s:9:\"namespace\";s:54:\"Plugins\\WidgetBuilder\\Widgets\\CustomPageWithLinkWidget\";s:5:\"title\";s:8:\"Services\";s:28:\"footer_custom_page_with_link\";a:2:{s:15:\"repeater_title_\";a:4:{i:0;s:10:\"Web Design\";i:1;s:12:\"Ui/Ux Design\";i:2;s:15:\"App Development\";i:3;s:16:\"Game Development\";}s:19:\"repeater_title_url_\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}}}','2022-11-17 08:20:59','2022-11-17 08:36:36','Plugins\\WidgetBuilder\\Widgets\\CustomPageWithLinkWidget'),(7,NULL,4,'footer','ContactInfoWidgetTwo','a:8:{s:11:\"widget_name\";s:20:\"ContactInfoWidgetTwo\";s:11:\"widget_type\";s:3:\"new\";s:15:\"widget_location\";s:6:\"footer\";s:12:\"widget_order\";s:1:\"4\";s:9:\"namespace\";s:50:\"Plugins\\WidgetBuilder\\Widgets\\ContactInfoWidgetTwo\";s:5:\"title\";s:11:\"Our Address\";s:11:\"description\";s:53:\"Unit 4, The Courtyard, Lynton Road, Crouch End N8 8SL\";s:28:\"footer_contact_info_landlord\";a:2:{s:14:\"repeater_icon_\";a:4:{i:0;s:17:\"lab la-facebook-f\";i:1;s:14:\"lab la-twitter\";i:2;s:16:\"lab la-instagram\";i:3;s:14:\"lab la-youtube\";}s:13:\"repeater_url_\";a:4:{i:0;s:1:\"#\";i:1;s:1:\"#\";i:2;s:1:\"#\";i:3;s:1:\"#\";}}}','2022-11-17 08:30:55','2022-11-17 08:30:55','Plugins\\WidgetBuilder\\Widgets\\ContactInfoWidgetTwo');
/*!40000 ALTER TABLE `widgets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zero_price_plan_histories`
--

DROP TABLE IF EXISTS `zero_price_plan_histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zero_price_plan_histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `plan_id` int unsigned DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zero_price_plan_histories`
--

LOCK TABLES `zero_price_plan_histories` WRITE;
/*!40000 ALTER TABLE `zero_price_plan_histories` DISABLE KEYS */;
INSERT INTO `zero_price_plan_histories` VALUES (1,7,1,'2023-01-31 22:00:43','2023-01-31 22:00:43'),(2,8,4,'2023-02-11 20:45:37','2023-02-11 20:45:37'),(3,8,3,'2023-02-12 12:27:55','2023-02-12 12:27:55');
/*!40000 ALTER TABLE `zero_price_plan_histories` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-18 19:02:06
