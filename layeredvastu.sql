-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 09:50 AM
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
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `phone`, `comment`, `created`) VALUES
(1, 'kshama', 'kshama.hco@gmail.com', '8299125651', 'test', '2022-02-03 09:30:15'),
(2, 'kshama test', 'kshama.hco@gmail.com', '8299125651', 'test', '2022-02-03 11:37:02');

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
(1, 'index', 'Vastu - Your Real Vastu', 'unknown printer took a galley of type and scrambled it to make a type specimen book', 'Layred Vastu Heading1', 'Layred Vastu Heading2', '7103fa9b66_overview-01.png', 'https://www.youtube.com/watch?v=meEdw7JYG0M', '4ed4b7f171_home_banner.jpg', 'Lorem ipsum dolor. Sunt natus quasi officiis veniam quod qui eos obcaecati id optio laborum?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis similique alias voluptatum consequatur nihil cumque nesciunt eaque molestiae deserunt voluptatem, minus commodi eveniet dicta iste doloribus explicabo aliquam quidem!', '2022-01-29 11:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `static_informations`
--

CREATE TABLE `static_informations` (
  `id` int(11) NOT NULL,
  `logo` varchar(256) DEFAULT NULL,
  `logo_alt` varchar(100) DEFAULT NULL,
  `facebook_url` varchar(256) DEFAULT NULL,
  `utube_url` varchar(256) DEFAULT NULL,
  `twiter_url` varchar(256) DEFAULT NULL,
  `insta_url` varchar(256) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `whatsapp_no` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tawkto` varchar(256) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `static_informations`
--

INSERT INTO `static_informations` (`id`, `logo`, `logo_alt`, `facebook_url`, `utube_url`, `twiter_url`, `insta_url`, `phone`, `whatsapp_no`, `email`, `tawkto`, `created`) VALUES
(1, '1429d0b5f8_logo.png', 'Layred Vastu Alt', 'dfdfxfdf', 'fdfdfdfdf', 'dsfsdfsdfsdf', 'dfsdfsdfsdf', '9454669774', '9874125639', 'gfgdfg@gmail.com', 'xxfgfgccg', '2022-01-29 13:52:56');

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
  `first_para` text COLLATE latin1_general_ci DEFAULT NULL,
  `first_para_image` varchar(256) COLLATE latin1_general_ci DEFAULT NULL,
  `second_para` text COLLATE latin1_general_ci DEFAULT NULL,
  `second_para_image` varchar(256) COLLATE latin1_general_ci DEFAULT NULL,
  `third_para` text COLLATE latin1_general_ci DEFAULT NULL,
  `third_para_image` varchar(256) COLLATE latin1_general_ci DEFAULT NULL,
  `fourth_para` text COLLATE latin1_general_ci DEFAULT NULL,
  `fourth_para_image` varchar(256) COLLATE latin1_general_ci DEFAULT NULL,
  `fifth_para` varchar(256) COLLATE latin1_general_ci DEFAULT NULL,
  `fifth_para_image` varchar(256) COLLATE latin1_general_ci DEFAULT NULL,
  `sixth_para` text COLLATE latin1_general_ci DEFAULT NULL,
  `sixth_para_image` varchar(256) COLLATE latin1_general_ci DEFAULT NULL,
  `seo_title` varchar(256) COLLATE latin1_general_ci DEFAULT NULL,
  `seo_description` text COLLATE latin1_general_ci DEFAULT NULL,
  `listing_image` varchar(256) COLLATE latin1_general_ci DEFAULT NULL,
  `video_url` varchar(256) COLLATE latin1_general_ci DEFAULT NULL,
  `ping_on_home` enum('no','yes') COLLATE latin1_general_ci NOT NULL DEFAULT 'no',
  `mark_as_similar` enum('yes','no') COLLATE latin1_general_ci NOT NULL DEFAULT 'no',
  `created` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `vastus`
--

INSERT INTO `vastus` (`id`, `category_id`, `url`, `name`, `heading_1`, `heading_2`, `short_post`, `first_para`, `first_para_image`, `second_para`, `second_para_image`, `third_para`, `third_para_image`, `fourth_para`, `fourth_para_image`, `fifth_para`, `fifth_para_image`, `sixth_para`, `sixth_para_image`, `seo_title`, `seo_description`, `listing_image`, `video_url`, `ping_on_home`, `mark_as_similar`, `created`) VALUES
(1, 2, 'vastu-for-business', 'Vastu For Business', 'Vastu For Business', 'Vastu For Business', 'If you’ve planned out to purchase a home in the coming year then check these facilities and services come along with it before making any vital decision.', '<p>The year 2021 is about to end and a brand new year 2022 is waiting you ahead. So have you planned out anything for the upcoming New Year? It is obvious that you must have planned to celebrate the New Year.</p>\r\n\r\n<p>I&rsquo;m planning to celebrate this new year with my family, I&rsquo;ve cancelled all my outing plans with friends. Because fully I&rsquo;ll be available for my family only. I&rsquo;ve made many plans regarding this; I&rsquo;ve decided to spend the whole couple of days with my parents (My World) and make the moments more special with them.</p>\r\n\r\n<p>And this time, I&rsquo;m going to celebrate this occasion little differently, this time I&rsquo;m going to gift them with a new address, a new feeling, a new home, and I&rsquo;m pretty sure they will be very pleased by this surprise.&nbsp;</p>\r\n\r\n<p><strong>Why a home?</strong></p>\r\n\r\n<p>Because this is the place, where you can reunite with your loved ones, home is the only place where family bonding gets strong. Undoubtedly, it is the address of happiness and everybody would agree with this statement. &nbsp;</p>\r\n\r\n<p>If you are also in the same boat with me then I&rsquo;ll encourage you to go ahead with your decision. Because buying a home will be easier in the coming year in comparison to 2021. As the home demands did not stop even in the COVID period, instead it increases which has shown a positive indication that home buyers are continually doing shopping and for that reason, builders also approached with many residential developments to meet them their needs.</p>\r\n\r\n<p>The best example is DLF One Midtown Delhi. This development is one of the best constructions that carry upgrade living and lifestyle amenities within. The address perfectly matches home buyers&#39; demand for what they wish to see in a home after relocating.</p>\r\n\r\n<p><strong>Here are the list given below that a high-end user would prefer to see in a home&nbsp;</strong></p>\r\n\r\n<p>First of all, a home buyer would like to purchase a new property rather than an existing home. Because a new construction brings various facilities within, hence, you can easily get all things at one place. Second thing is, most homebuyers prefer to live in a suburban area and that is why they would prefer to buy an apartment living close to all conveniences wisely inserted within. Plus they will seek an address that will promote sustainable living.</p>\r\n\r\n<p><strong>Laundry room</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.onemidtowndelhi.com/img/blogs/a85cde1a8c_Laundryroom.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>This counts as the topmost wanted feature for a home as nearly half of homebuyers to prefer and is quite desirable. Additionally, many buyers prefer the first floor where they can take the advantage of effective use of the energy star appliances. As the first floor relocate consumes less electricity and that will be energy saving.</p>\r\n\r\n<p><strong>Spacious rooms&nbsp;</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.onemidtowndelhi.com/img/blogs/925f1251b9_spacious-room.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>This is another demand of home buyers, where they demand spacious units in an apartment, as nowadays modern home buyers prefer to live in a spacious home where they can unwind themselves. Besides this, the demands for spacious homes are increasing as such features offer congested - free living.</p>\r\n\r\n<p><strong>Modular kitchen</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.onemidtowndelhi.com/img/blogs/477a781016_Modularkitchen.png\" style=\"width:100%\" /></p>\r\n\r\n<p>Buyers also focused a lot on the project interior, especially they are very much going into detail with the kitchen. A modular kitchen is most desirable amongst high-end users as such kind of kitchen has ample storage space with, all appliances are wisely set up so that home buyers need not to purchase any further kitchen appliances.</p>\r\n\r\n<p>Nowadays, the demand for apartment living is high and that is why most of the home buyers prefer to live in a gated community and for that, they search on all the above-mentioned features in a house, along with 3 other features &nbsp;such as : -</p>\r\n\r\n<p><strong>Outdoor living space&nbsp;</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.onemidtowndelhi.com/img/blogs/75fd66ae1b_Outdoorlivingspace.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Open living space is another demand in a residential project, where buyers can involve themselves in outdoor activity. At least 70% of open space must have to allocate in a residential project which is necessary. So in present days, home buyers are also focused on this service too while purchasing a home.</p>\r\n\r\n<p><strong>Amenities&nbsp;</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.onemidtowndelhi.com/img/blogs/0b833b49d9_Amenities.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Amenities come next, in-home buying is the best part of community living so when homebuyers make their mind to purchase a home then definitely go this option first. Here, you can easily get all things in one place.</p>\r\n\r\n<p><strong>Secured Community&nbsp;</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.onemidtowndelhi.com/img/blogs/b7357b2bcd_SecuredCommunity.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>And lastly, home buyers always choose to live in a gated society, where one can live at least in a secure environment for a lifetime. Manned security and advanced security features are some major advantages of living in a gated community.</p>\r\n\r\n<p><strong>Location&nbsp;</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://www.onemidtowndelhi.com/img/blogs/f7e5d409ad_home-buyers.png\" style=\"width:100%\" /></p>\r\n\r\n<p>This is the most crucial part while seeking a home because the location is the prime thing that always comes with the best advantages, so whenever you go for property always check the location and the connectivity then make your decision. &nbsp;</p>\r\n\r\n<p>So, this New Year doubles your celebration with a new home which is only designed for you and that address is known by <strong><a href=\"https://www.onemidtowndelhi.com/\">DLF One Midtown</a></strong> which carries all the above-mentioned facilities at one single address.</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'What Are Homebuyers Looking For In 2022?', 'If you’ve planned out to purchase a home in the coming year then check these facilities and services come along with it before making any vital decision.', '6b0e32d6f6_vastu-listing-image.png', NULL, 'no', 'no', '2021-12-24 10:06:14'),
(2, 1, 'vastu-for-house', 'Vastu for house', 'Vastu for House- Make Your Home Affluent', 'Enhance Positive Energy in Your Home with Vastu', 'Vastu for house Heading oneVastu for house Heading one', '<p>Our homes should be subdued, peaceful, and prosperous, as we all hope for the best. You may stay positive and pray, but do you ever wonder what else you can do to hit all your goals and attract positivity and peace into your life? The answer is Vastu. It can help rejuvenate your home by adding an abundance of positive aura.</p>\r\n', NULL, '<p>Your &quot;house&quot; will become a &quot;home&quot; when you have it. Building a house according to Vastu preferences will eliminate negative energies from entering such houses. Adding the Vastu touch to a house is as simple as arranging and aligning certain things. Using Vastu, you can create an aura of harmony and peace in your home by considering the layout, design, measurements, and spatial coordinates.</p>\r\n', NULL, '<p>There is truly no place like home where your mind, heart, body, and soul can all find peace. Complement your home with Vastu and bring immense peace to it.</p>\r\n', NULL, '<p>Vastu Shastra considers a house to be a living soul that is balanced to produce the greatest amount of positive energy by balancing all five elements (earth, fire, water, space, and air). Harmony and happiness can only occur within a house that radiates the most pleasant and happy kind of energy. Ultimately, the energy of any home affects the mental health of its occupants.</p>\r\n', NULL, 'Vastu is Important for a Vigorous and Joyful Environment', NULL, '<p>Vastu sounds complicated and confusing to many. It is actually quite easy and simple to understand. Vastu Shastra can help you experience significant changes in your home when you follow these tips. Eventually, you will feel the effects of these when you bring them to fruition.</p>\r\n\r\n<ul>\r\n	<li><i class=\"fa-thin fa-hand-back-point-right\"></i>Keep your front door clean and well decorated so that wealth can flow into the house.</li>\r\n	<li><i class=\"fa-thin fa-hand-back-point-right\"></i>Cash lockers and almirahs where you keep cash should be situated on the South or South-West wall.</li>\r\n	<li><i class=\"fa-thin fa-hand-back-point-right\"></i>The position of the puja room affects peace and prosperity in the house.</li>\r\n	<li><i class=\"fa-thin fa-hand-back-point-right\"></i>Fix leaky faucets, taps, and faulty plumbing to avoid financial losses.</li>\r\n</ul>\r\n', NULL, 'Commercial Vastu Seo Title', 'Vastu for house Heading one', 'dbf9875466_inner-img-01.png', 'https://www.youtube.com/embed/FLhCUrdl00E', 'yes', 'no', '2022-01-24 10:19:27'),
(3, 1, 'vastu-for-balcony', 'Vastu For Balcony', 'Vastu For Balcony', 'Cast out all negativities from home with simple Balcony Vastu ', 'Sit out and relax in a healthy space', '<p>How peaceful and beautiful is it to start the day with an eye-catching view? That we all get from our balconies. It&#39;s always an amazing idea to have a balcony at home. Nowadays the demand for balconies has increased tremendously and they are considered to be a necessity for the people searching home. The balcony is also a special corner of the home, as it adds an extra element to the home.</p>\r\n', NULL, '<p>But you might not be aware of the fact that with the beautiful balcony, it is also important to have it Vastu compliant. Yes, wrong orientation can cause major problems at home.</p>\r\n\r\n<p>Vastu experts believe that balconies should be located in the North, East, or North-East of a house. Because this is the direction in which the sun shines most, it is an ideal direction. It is considered negative for balconies to face south or west. You should also keep your balcony floor lower than the floor of the main building.</p>\r\n', NULL, '<p>Vaastu principles are based on the logic of architecture and following them guarantees a durable, healthy, happy, prosperous, and peaceful environment.</p>\r\n', '', '<p><strong>Easy Tips For Vastu-Compliant Balcony</strong></p>\r\n\r\n<ul>\r\n	<li><i class=\"fa-thin fa-hand-back-point-right\"></i>Try keeping the balcony clean and clear all the time and avoid accumulating clutter. Clear is always better.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><i class=\"fa-thin fa-hand-back-point-right\"></i>Well, the balcony being a place to sit and relax, it should have that positive vibe and for the same, it&#39;s best to paint balcony walls in cool, pastel colors.</li>\r\n	<li><i class=\"fa-thin fa-hand-back-point-right\"></i>It is recommended that balconies should either be of square or rectangle shape. Other shapes are not recommended in Vastu.</li>\r\n</ul>\r\n', '', 'A balcony can boost your house\'s energy', '', '<p>Having a balcony gives us constant access to clean fresh air, sunshine, and if it&#39;s designed according to Vastu principles, it will result in better results and positive energy. You should feel an abundance of peace and comfort as soon as you enter here. But, if there is a Vastu-dosh present, it will create troubles and difficulties. So, to prevent the Vastu-dosh, make sure your balcony is built in the right direction, and as such, it is a good replacement for an open space in your home.</p>\r\n\r\n<p>Following the Vastu experts&#39; suggestions for your balcony will help you to bring positive energy into your home.</p>\r\n', '', 'Vastu For Balcony – Vastu Tips By Seema Bhattia', 'Vastu for house Heading one', '04d14c6b93_vastu-listing-image.png', '', 'yes', 'yes', '2022-01-24 10:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `vastu_categories`
--

CREATE TABLE `vastu_categories` (
  `id` int(11) NOT NULL,
  `category_url` varchar(256) DEFAULT NULL,
  `priority` varchar(11) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `seo_title` varchar(256) DEFAULT NULL,
  `seo_description` varchar(256) DEFAULT NULL,
  `heading_1` varchar(256) DEFAULT NULL,
  `heading_2` varchar(256) DEFAULT NULL,
  `listing_image` varchar(256) DEFAULT NULL,
  `video_url` varchar(256) DEFAULT NULL,
  `banner_image` varchar(256) DEFAULT NULL,
  `merged_image` varchar(256) DEFAULT NULL,
  `desc_heading` varchar(256) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vastu_categories`
--

INSERT INTO `vastu_categories` (`id`, `category_url`, `priority`, `name`, `seo_title`, `seo_description`, `heading_1`, `heading_2`, `listing_image`, `video_url`, `banner_image`, `merged_image`, `desc_heading`, `description`, `created`) VALUES
(1, 'residential-vastu', '1', 'Residential Vastu', 'Residential Vastu', 'Residential Vastu', 'Residential Vastu', 'Residential Vastu', 'f54db99950_listing-image.png', 'https://www.youtube.com/embed/FLhCUrdl00E?autoplay=1', 'adc558c470_banner-bg.jpg', '34e1b124c5_residential-merged.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolorum ab animi ut sit assumenda test.', 'The north direction is dedicated to Kuber, the God of wealth, according to Vastu. For north-facing homes to be truly rewarding, the whole house should be Vastu-compliant and the defects should be rectified test', '2022-01-21 06:44:26'),
(2, 'commercial-vastu', '2', 'Commercial Vastu', 'Commercial Vastu Seo Title', 'Commercial Vastu  Seo Desc', 'Commercial Vastu H1', 'Commercial Vastu H2', '4691e6358e_listing-image.png', '', 'e18825051d_dlf-plots-chennai-banner.webp', '36978609a7_listing_image.jpg', '', 'Commercial Vastu Description', '2022-01-21 09:44:01'),
(3, 'industrial-vastu', '3', 'Industrial Vastu', 'Industrial Vastu Seo Title', 'Industrial Vastu Seo Description', 'Industrial Vastu h1', 'Industrial Vastu h2', '55389a0da3_listing-image.png', 'Video Url', 'e6ade9ddca_dlf-plots-chennai-banner.webp', 'eb80f1c9af_listing_image.jpg', '', 'Industrial Vastu Description', '2022-01-28 08:42:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vastu_categories`
--
ALTER TABLE `vastu_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
