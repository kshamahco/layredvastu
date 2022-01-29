-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 12:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `layeredvastu`
--

-- --------------------------------------------------------

--
-- Table structure for table `menuheaders`
--

CREATE TABLE `menuheaders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `controller` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `action` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `navid` int(11) NOT NULL,
  `status` enum('active','deactive') COLLATE latin1_general_ci NOT NULL DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `menuheaders`
--

INSERT INTO `menuheaders` (`id`, `name`, `controller`, `action`, `navid`, `status`) VALUES
(1, 'Menus', 'menuheaders', 'menuheaders', 0, 'active'),
(2, 'Vastu Categories', 'VastusCategories', 'VastusCategories', 0, 'active'),
(3, 'Vastu', 'Vastus', 'Vastus', 0, 'active'),
(4, 'Pages', 'pages', 'pages', 0, 'active'),
(5, 'Static Informations', 'StaticInformations', 'StaticInformations', 0, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menuheader_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `controller` varchar(200) NOT NULL,
  `action` varchar(30) NOT NULL,
  `navid` int(11) NOT NULL,
  `status` enum('active','deactive') NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `url_display` varchar(100) DEFAULT NULL,
  `seo_title` varchar(250) DEFAULT NULL,
  `seo_description` varchar(256) DEFAULT NULL,
  `heading_1` varchar(256) DEFAULT NULL,
  `heading_2` varchar(256) DEFAULT NULL,
  `listing_image` varchar(256) DEFAULT NULL,
  `video_url` varchar(256) DEFAULT NULL,
  `banner_image` varchar(256) DEFAULT NULL,
  `desc_heading` varchar(256) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `url_display`, `seo_title`, `seo_description`, `heading_1`, `heading_2`, `listing_image`, `video_url`, `banner_image`, `desc_heading`, `description`, `created`) VALUES
(1, 'index', 'HCORealEstates - Your Real Estate Guide', 'Buy Commercial & Residential Property in India from HcoRealEstates Leading portal in India. Get Best Properties by Prominent Builders.', 'Layred Vastu Heading1', 'Layred Vastu Heading2', 'e83f3dfb16_listing_image.jpg', 'https://www.youtube.com/watch?v=SdiSCz4YtYg', '41a5697d52_dlf-plots-chennai-banner.webp', 'Lorem Ipsum is simply dummy text of the printing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', '2022-01-29 11:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `static_informations`
--

CREATE TABLE `static_informations` (
  `id` int(11) NOT NULL,
  `logo` varchar(256) DEFAULT NULL,
  `facebook_url` varchar(256) DEFAULT NULL,
  `utube_url` varchar(256) DEFAULT NULL,
  `twiter_url` varchar(256) DEFAULT NULL,
  `insta_url` varchar(256) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tawkto` varchar(256) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `static_informations`
--

INSERT INTO `static_informations` (`id`, `logo`, `facebook_url`, `utube_url`, `twiter_url`, `insta_url`, `phone`, `email`, `tawkto`, `created`) VALUES
(1, '1429d0b5f8_logo.png', 'dfdfxfdf', 'fdfdfdfdf', 'dsfsdfsdfsdf', 'dfsdfsdfsdf', '9454669774', 'gfgdfg@gmail.com', 'xxfgfgccg', '2022-01-29 13:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `password_enc` varchar(200) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `menuheader` text NOT NULL,
  `menu` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `password_enc`, `role`, `menuheader`, `menu`, `created`, `modified`, `name`) VALUES
(5, 'admin', 'c17ad2185988d68eadd1ee719cab179a', 'ADmin2012', 'admin', '', '', '2014-06-06 11:31:18', '2015-10-09 06:05:55', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `vastus`
--

CREATE TABLE `vastus` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `name` varchar(256) COLLATE latin1_general_ci DEFAULT NULL,
  `heading_1` varchar(256) COLLATE latin1_general_ci DEFAULT NULL,
  `heading_2` varchar(256) COLLATE latin1_general_ci DEFAULT NULL,
  `short_post` varchar(256) COLLATE latin1_general_ci DEFAULT NULL,
  `post` text COLLATE latin1_general_ci DEFAULT NULL,
  `seo_title` varchar(256) COLLATE latin1_general_ci DEFAULT NULL,
  `seo_description` text COLLATE latin1_general_ci DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `vastus`
--

INSERT INTO `vastus` (`id`, `category_id`, `url`, `name`, `heading_1`, `heading_2`, `short_post`, `post`, `seo_title`, `seo_description`, `created`) VALUES
(1, 2, 'vastu-for-business', 'Vastu For Business', 'Vastu For Business', 'Vastu For Business', 'If you’ve planned out to purchase a home in the coming year then check these facilities and services come along with it before making any vital decision.', '<p>The year 2021 is about to end and a brand new year 2022 is waiting you ahead. So have you planned out anything for the upcoming New Year? It is obvious that you must have planned to celebrate the New Year.</p>\r\n\r\n<p>I&rsquo;m planning to celebrate this new year with my family, I&rsquo;ve cancelled all my outing plans with friends. Because fully I&rsquo;ll be available for my family only. I&rsquo;ve made many plans regarding this; I&rsquo;ve decided to spend the whole couple of days with my parents (My World) and make the moments more special with them.</p>\r\n\r\n<p>And this time, I&rsquo;m going to celebrate this occasion little differently, this time I&rsquo;m going to gift them with a new address, a new feeling, a new home, and I&rsquo;m pretty sure they will be very pleased by this surprise.&nbsp;</p>\r\n\r\n<p><strong>Why a home?</strong></p>\r\n\r\n<p>Because this is the place, where you can reunite with your loved ones, home is the only place where family bonding gets strong. Undoubtedly, it is the address of happiness and everybody would agree with this statement. &nbsp;</p>\r\n\r\n<p>If you are also in the same boat with me then I&rsquo;ll encourage you to go ahead with your decision. Because buying a home will be easier in the coming year in comparison to 2021. As the home demands did not stop even in the COVID period, instead it increases which has shown a positive indication that home buyers are continually doing shopping and for that reason, builders also approached with many residential developments to meet them their needs.</p>\r\n\r\n<p>The best example is DLF One Midtown Delhi. This development is one of the best constructions that carry upgrade living and lifestyle amenities within. The address perfectly matches home buyers&#39; demand for what they wish to see in a home after relocating.</p>\r\n\r\n<p><strong>Here are the list given below that a high-end user would prefer to see in a home&nbsp;</strong></p>\r\n\r\n<p>First of all, a home buyer would like to purchase a new property rather than an existing home. Because a new construction brings various facilities within, hence, you can easily get all things at one place. Second thing is, most homebuyers prefer to live in a suburban area and that is why they would prefer to buy an apartment living close to all conveniences wisely inserted within. Plus they will seek an address that will promote sustainable living.</p>\r\n\r\n<p><strong>Laundry room</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.onemidtowndelhi.com/img/blogs/a85cde1a8c_Laundryroom.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>This counts as the topmost wanted feature for a home as nearly half of homebuyers to prefer and is quite desirable. Additionally, many buyers prefer the first floor where they can take the advantage of effective use of the energy star appliances. As the first floor relocate consumes less electricity and that will be energy saving.</p>\r\n\r\n<p><strong>Spacious rooms&nbsp;</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.onemidtowndelhi.com/img/blogs/925f1251b9_spacious-room.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>This is another demand of home buyers, where they demand spacious units in an apartment, as nowadays modern home buyers prefer to live in a spacious home where they can unwind themselves. Besides this, the demands for spacious homes are increasing as such features offer congested - free living.</p>\r\n\r\n<p><strong>Modular kitchen</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.onemidtowndelhi.com/img/blogs/477a781016_Modularkitchen.png\" style=\"width:100%\" /></p>\r\n\r\n<p>Buyers also focused a lot on the project interior, especially they are very much going into detail with the kitchen. A modular kitchen is most desirable amongst high-end users as such kind of kitchen has ample storage space with, all appliances are wisely set up so that home buyers need not to purchase any further kitchen appliances.</p>\r\n\r\n<p>Nowadays, the demand for apartment living is high and that is why most of the home buyers prefer to live in a gated community and for that, they search on all the above-mentioned features in a house, along with 3 other features &nbsp;such as : -</p>\r\n\r\n<p><strong>Outdoor living space&nbsp;</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.onemidtowndelhi.com/img/blogs/75fd66ae1b_Outdoorlivingspace.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Open living space is another demand in a residential project, where buyers can involve themselves in outdoor activity. At least 70% of open space must have to allocate in a residential project which is necessary. So in present days, home buyers are also focused on this service too while purchasing a home.</p>\r\n\r\n<p><strong>Amenities&nbsp;</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.onemidtowndelhi.com/img/blogs/0b833b49d9_Amenities.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Amenities come next, in-home buying is the best part of community living so when homebuyers make their mind to purchase a home then definitely go this option first. Here, you can easily get all things in one place.</p>\r\n\r\n<p><strong>Secured Community&nbsp;</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.onemidtowndelhi.com/img/blogs/b7357b2bcd_SecuredCommunity.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>And lastly, home buyers always choose to live in a gated society, where one can live at least in a secure environment for a lifetime. Manned security and advanced security features are some major advantages of living in a gated community.</p>\r\n\r\n<p><strong>Location&nbsp;</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.onemidtowndelhi.com/img/blogs/f7e5d409ad_home-buyers.png\" style=\"width:100%\" /></p>\r\n\r\n<p>This is the most crucial part while seeking a home because the location is the prime thing that always comes with the best advantages, so whenever you go for property always check the location and the connectivity then make your decision. &nbsp;</p>\r\n\r\n<p>So, this New Year doubles your celebration with a new home which is only designed for you and that address is known by <strong><a href=\"https://www.onemidtowndelhi.com/\">DLF One Midtown</a></strong> which carries all the above-mentioned facilities at one single address.</p>\r\n', 'What Are Homebuyers Looking For In 2022?', 'If you’ve planned out to purchase a home in the coming year then check these facilities and services come along with it before making any vital decision.', '2021-12-24 10:06:14'),
(2, 1, 'vastu-for-house', 'kshama', 'Vastu for house Heading one', 'Residential Vastu heading2', 'Vastu for house Heading oneVastu for house Heading one', 'Vastu for house Heading one', 'Commercial Vastu Seo Title', 'Vastu for house Heading one', '2022-01-24 10:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `vastu_categories`
--

CREATE TABLE `vastu_categories` (
  `id` int(11) NOT NULL,
  `category_url` varchar(256) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `seo_title` varchar(256) DEFAULT NULL,
  `seo_description` varchar(256) DEFAULT NULL,
  `heading_1` varchar(256) DEFAULT NULL,
  `heading_2` varchar(256) DEFAULT NULL,
  `listing_image` varchar(256) DEFAULT NULL,
  `video_url` varchar(256) DEFAULT NULL,
  `banner_image` varchar(256) DEFAULT NULL,
  `merged_image` varchar(256) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vastu_categories`
--

INSERT INTO `vastu_categories` (`id`, `category_url`, `name`, `seo_title`, `seo_description`, `heading_1`, `heading_2`, `listing_image`, `video_url`, `banner_image`, `merged_image`, `description`, `created`) VALUES
(1, 'residential-vastu', 'Residential Vastu', 'Residential Vastu', 'Residential Vastu', 'Residential Vastu', 'Residential Vastu', NULL, NULL, NULL, NULL, 'Residential Vastu', '2022-01-21 06:44:26'),
(2, 'commercial-vastu', 'Commercial Vastu', 'Commercial Vastu Seo Title', 'Commercial Vastu  Seo Desc', 'Commercial Vastu H1', 'Commercial Vastu H2', 'e449c34fd5_listing_image.jpg', '', 'e18825051d_dlf-plots-chennai-banner.webp', '36978609a7_listing_image.jpg', 'Commercial Vastu Description', '2022-01-21 09:44:01'),
(3, 'industrial-vastu', 'Industrial Vastu', 'Industrial Vastu Seo Title', 'Industrial Vastu Seo Description', 'Industrial Vastu h1', 'Industrial Vastu h2', '091fe96a83_listing_image.jpg', 'Video Url', 'e6ade9ddca_dlf-plots-chennai-banner.webp', 'eb80f1c9af_listing_image.jpg', 'Industrial Vastu Description', '2022-01-28 08:42:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menuheaders`
--
ALTER TABLE `menuheaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static_informations`
--
ALTER TABLE `static_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vastus`
--
ALTER TABLE `vastus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vastu_categories`
--
ALTER TABLE `vastu_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menuheaders`
--
ALTER TABLE `menuheaders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `static_informations`
--
ALTER TABLE `static_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vastus`
--
ALTER TABLE `vastus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vastu_categories`
--
ALTER TABLE `vastu_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
