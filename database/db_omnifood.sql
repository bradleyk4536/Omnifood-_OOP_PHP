-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2016 at 03:00 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_omnifood`
--

-- --------------------------------------------------------

--
-- Table structure for table `block_benefits`
--

CREATE TABLE `block_benefits` (
  `block_id` int(3) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  `section_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `block_benefits`
--

INSERT INTO `block_benefits` (`block_id`, `icon`, `title`, `description`, `display`, `section_name`) VALUES
(3, 'ion-ios-calendar-outline', 'Up To 365 Days/Year', 'Never cook again! We really mean that. Our subscription plans include up to 365 day/year coverage. You can also choose to order more flexibly if that&#39;s you style', 'true', 'get_food'),
(4, 'ion-ios-clock-outline', 'Ready in 20 Minutes', 'You&#39;re only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you&#39;re 100% happy', 'true', 'get_food'),
(5, 'ion-ios-nutrition-outline', '100% Organic', 'All our vegetables are fresh, organic and locally grown. Animals are raised without added hormones or antibiotics. Good for you health, the environment, and it also tastes better!', 'true', 'get_food'),
(6, 'ion-ios-cart-outline', 'Order Anything', 'We don&#39;t limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It&#39;s up to you', 'true', 'get_food');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `cities_id` int(3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon_1` varchar(255) NOT NULL,
  `icon_2` varchar(255) NOT NULL,
  `social_icon` varchar(255) NOT NULL,
  `description_1` varchar(255) NOT NULL,
  `description_2` varchar(255) NOT NULL,
  `smedia_link` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  `section_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cities_id`, `image`, `name`, `icon_1`, `icon_2`, `social_icon`, `description_1`, `description_2`, `smedia_link`, `display`, `section_name`) VALUES
(2, 'lisbon-3.jpg', 'Lisbon', 'ion-ios-people-outline', 'ion-android-restaurant', 'ion-social-twitter-outline', '1600+ happy eaters', '60+ top chefs', '@omnifood_1x', 'true', 'cities'),
(3, 'san-francisco.jpg', 'San Francisco', 'ion-ios-people-outline', 'ion-android-restaurant', 'ion-social-twitter-outline', '1600+ happy eaters', '160+ top chefs', '@omnifood_sf', 'true', 'cities'),
(4, 'london.jpg', 'London', 'ion-ios-people-outline', 'ion-android-restaurant', 'ion-social-twitter-outline', '1600+ happy eaters', '50+ top chefs', '@omnifood_london', 'true', 'cities'),
(5, 'berlin.jpg', 'Berlin', 'ion-ios-people-outline', 'ion-android-restaurant', 'ion-social-twitter-outline', '1600+ happy eaters', '110+ top chefs', '@omnifood_berlin', 'true', 'cities');

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `dish_id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `display` varchar(255) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`dish_id`, `name`, `description`, `display`, `section_name`, `image`) VALUES
(1, 'Coriander Sticky Beef', 'A lime and chilli spiked Asian style beef hash recipe that delivers layer after layer of flavor. Crunchy green broccolini and spring onions add colour and texture, and a perfectly sunny-side-up egg nestled on top finishes things off nicely', 'true', 'dish', '1.jpg'),
(2, 'Spinach-Feta Greek Pizza', 'Do you love thin crust pizza? Then this delicious greek pizza is for you. Topped with fresh tomatoes and spinach', 'true', 'dish', 'gre.jpg'),
(3, 'Lemon Seared Chicken', 'These chicken breasts are lightly coated in seasoned flour then seared in butter for a deliciously browned crust', 'true', 'dish', '3.jpg'),
(4, 'Curried Butternut Squash Soup', 'Sweetened with a light touch of honey this curried soup will keep you warm in the winter', 'true', 'dish', '4.jpg'),
(5, 'Seared Beef and Bean Sprouts', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate id rem iusto magnam illum eum voluptates qui deserunt amet numquam recusandae veritatis, nihil laudantium neque vitae ullam, libero vero error!', 'true', 'dish', '5.jpg'),
(6, 'Lemon Seared Chicken On Gourmet Roll', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt qui cum beatae necessitatibus sequi iste debitis nostrum minima quo, nam rem fugiat quia dicta officiis. Quo porro dolorum, magni at', 'true', 'dish', '6.jpg'),
(7, 'Gourmet Burger and Fries', 'Delicious burger made with fresh ground beef and topped with Canadian bacon and aged cheese...&nbsp;', 'true', 'dish', '7.jpg'),
(8, 'Greek Yogurt and Berries Desert', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt qui cum beatae necessitatibus sequi iste debitis nostrum minima quo, nam rem fugiat quia dicta officiis. Quo porro dolorum, magni at', 'true', 'dish', '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `hero_id` int(3) NOT NULL,
  `brand_icon` varchar(255) NOT NULL,
  `brand_text` varchar(255) NOT NULL,
  `background_img` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `newsletter_text` varchar(255) NOT NULL,
  `hero_text` varchar(255) NOT NULL,
  `hero_subtext` varchar(255) NOT NULL,
  `display` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`hero_id`, `brand_icon`, `brand_text`, `background_img`, `logo`, `newsletter_text`, `hero_text`, `hero_subtext`, `display`) VALUES
(11, 'ion-android-restaurant', 'Omnifoods', '', 'logo.png', 'Subscribe to our great newsletter', 'Goodbye Junk Food', 'Hello Super Health Meals', 'false'),
(16, 'ion-android-restaurant', 'Omnifoods', '', 'logo-white.png', 'Subscribe to our great newsletter', 'Goodbye Junk Food', 'Hello Super Health Meals', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `how_works`
--

CREATE TABLE `how_works` (
  `how_id` int(3) NOT NULL,
  `instruction` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `how_works`
--

INSERT INTO `how_works` (`how_id`, `instruction`, `image`, `section_name`, `display`) VALUES
(4, 'Choose you subscription plan that best fits your needs and sign up today', 'app-iPhone.png', 'how_works', 'true'),
(5, 'Order you delicious meal using our mobile app or website. You can even go old school and call us!', '', 'how_works', 'true'),
(6, 'Enjoy you meal after less than 20 minutes. See you next time!', '', 'how_works', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `image_id` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `alternate_text` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`image_id`, `caption`, `filename`, `alternate_text`, `type`, `size`) VALUES
(11, 'Asian Stir Fry', '3.jpg', 'Asian Stir Fry', 'image/jpeg', 179452),
(12, 'Lisbon', 'lisbon-3.jpg', 'Lisbon', 'image/jpeg', 130660),
(15, 'Company Logo', 'logo.png', 'Company Logo', 'image/png', 34545),
(18, 'San Francisco', 'san-francisco.jpg', 'Golden Gate Bridge', 'image/jpeg', 112082),
(19, 'Berlin', 'berlin.jpg', 'Berlin', 'image/jpeg', 130800),
(20, 'Egg on top of noodles', '1.jpg', 'afafafdafdaf', 'image/jpeg', 238663),
(21, 'Customer One', 'customer-1.jpg', 'Customer One', 'image/jpeg', 10291);

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `plan_id` int(11) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `plan_price` varchar(255) NOT NULL,
  `plan_description` varchar(255) NOT NULL,
  `plan_icon1` varchar(255) NOT NULL,
  `plan_feature1` varchar(255) NOT NULL,
  `plan_icon2` varchar(255) NOT NULL,
  `plan_feature2` varchar(255) NOT NULL,
  `plan_icon3` varchar(255) NOT NULL,
  `plan_feature3` varchar(255) NOT NULL,
  `plan_icon4` varchar(255) NOT NULL,
  `plan_feature4` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`plan_id`, `plan_name`, `plan_price`, `plan_description`, `plan_icon1`, `plan_feature1`, `plan_icon2`, `plan_feature2`, `plan_icon3`, `plan_feature3`, `plan_icon4`, `plan_feature4`, `display`, `section_name`, `action`) VALUES
(3, 'Premium', '$399 / month', 'That&#39;s only $13.30 per meal.', 'ion-checkmark', '1 meal every day', 'ion-checkmark', 'Order 24/7', 'ion-checkmark', 'Access to newest creations', 'ion-checkmark', 'Free delivery', 'true', 'start_eating', 'btn-full'),
(4, 'Pro', '$149 / month', 'That&#39;s only $14.90 per meal.', 'ion-checkmark', '1 meal 10 days / month', 'ion-checkmark', 'Order 24/7', 'ion-checkmark', 'Access to newest creations', 'ion-checkmark', 'Free delivery', 'true', 'start_eating', 'btn-ghost'),
(5, 'Starter', '$19.00', '', 'ion-checkmark', '1 meal', 'ion-checkmark', 'Order from 8 am to 12 pm', 'ion-checkmark', 'Free delivery', '', '', 'true', 'start_eating', 'btn-ghost');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(3) NOT NULL,
  `role` varchar(255) NOT NULL,
  `role_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role`, `role_description`) VALUES
(1, 'Subscriber', 'Limited access to site. Able to Read and update only. '),
(2, 'Admin', 'Full control of site. Able to create, read, update and delete from any table.');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(3) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  `section_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `icon`, `title`, `description`, `display`, `section_name`) VALUES
(10, 'ion-android-restaurant', 'Get Food Fast  &mdash;  Not Fast Food', 'Hello, were Omnifood, your new premium food delivery service. We know you&#39;re alway&#39;s busy. No time for cooking. So let us take care of that for you. We are really good at it, we promise you.', 'true', 'get_food'),
(11, '', 'How It Works &mdash; Simple as 1, 2, 3', '', 'true', 'how_works'),
(12, '', 'Were Currently In These Cities', '', 'true', 'cities'),
(13, '', 'Our Customers Can&#39;t Live Without Us', '', 'true', 'testimonial'),
(14, '', 'Start Eating Healthy Today', '', 'true', 'start_eating'),
(15, 'ion-android-restaurant', 'Our Delicious Dishes', '', 'true', 'dish');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int(3) NOT NULL,
  `testimonial` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `testimonial`, `display`, `section_name`, `image`, `author`) VALUES
(2, 'Omnifood is just awesome I just launched a startup which leaves me with no time for cooking, so Ominfood is a life-saver. Now that I got used to it, I couldn&#39;t live without it.&nbsp;', 'true', 'testimonial', 'customer-1.jpg', 'Alberto Duncan'),
(3, 'Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omnifood.', 'true', 'testimonial', 'customer-2.jpg', 'Joana Silva'),
(4, 'Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omnifood.', 'true', 'testimonial', 'customer-3.jpg', 'Milton Chapman'),
(8, 'Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omnifood.', 'false', 'testimonial', 'customer-3.jpg', 'Milton Chapman');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `role` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `role`, `username`, `first_name`, `last_name`, `email`, `password`) VALUES
(8, 'Admin', 'bradleyk', 'Kenneth', 'Bradley', 'k_bnet570@verizon.net', '$2y$10$NM1qPEjsZocnAhGKnATFwOEM.9/DzCf.YhkzxEbPppiHSfPBQ1yHC'),
(51, 'Subscriber', 'bradleyg', 'Gladys', 'Bradley', 'gb@example.com', '$2y$10$2E2N7Q4IvuwtGodnoqXIxuklqr.5fbPb0N3qZp/TZdrf5HJm2BHba'),
(52, 'Subscriber', 'bradleym', 'Minnie', 'Bradley', 'mg@example.com', '$2y$10$sDyt5mnrP2c/QddMdP2b0.R2gTV3cx9zHlBF0DoSYsy0jAofhvgje'),
(53, 'Subscriber', 'diazB', 'Brandan', 'Diaz', 'db@example.com', '$2y$10$8Z2uBd/kwG9qSEJc0Iww2ua4JzAB.uugcYqaKCGvPKNoHOcX.lAra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block_benefits`
--
ALTER TABLE `block_benefits`
  ADD PRIMARY KEY (`block_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cities_id`);

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`hero_id`);

--
-- Indexes for table `how_works`
--
ALTER TABLE `how_works`
  ADD PRIMARY KEY (`how_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `block_benefits`
--
ALTER TABLE `block_benefits`
  MODIFY `block_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `cities_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `dish_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `hero_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `how_works`
--
ALTER TABLE `how_works`
  MODIFY `how_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
