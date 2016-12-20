-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2016 at 07:44 PM
-- Server version: 10.1.18-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id319703_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`) VALUES
(1, 'alma', 'abc123', 'a@yahoo.com'),
(2, 'admin', 'admin123', 'admin@yahoo.com'),
(3, 'sebas', 'sebas', 's@yahoo.com'),
(24, 'chinua', 'chinua', 't@gmail.com'),
(25, 'Cynthia', 'Cynthia', 'agonzalez26@student.gsu.edu');

-- --------------------------------------------------------

--
-- Table structure for table `masonry`
--

CREATE TABLE `masonry` (
  `itemid` int(10) NOT NULL,
  `item` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masonry`
--

INSERT INTO `masonry` (`itemid`, `item`, `username`) VALUES
(1, '<img src=\"http://media-cache-ec0.pinimg.com/736x/c3/10/22/c3102281f88237e7a2515099d2e6651f.jpg\" />', 'alma'),
(2, '<img src=\"https://userscontent2.emaze.com/images/67a08ecf-862d-4e67-94ca-b8ea0c0470f5/e335696bee6ff9973b95cb8ced3f9c46.jpg\" />', 'alma'),
(3, '<a href=\"https://www.instagram.com/almagonzalez24/?hl=en\">Follow me on Instagram!</a>', 'alma'),
(4, '<img src=\"http://www.colorcombos.com/images/colors/000066.png\" /><h2>My favorite color.</h2>', 'alma'),
(5, '<img src=\"http://www.travelingjobsnow.com/assets/img/slider1.jpg\" /><br/><h4>I want to travel and visit different cultures of the universe.</h4>', 'alma'),
(6, '<img src=\"https://lyricfablog.files.wordpress.com/2016/04/panic-at-disco.jpg\"/>', 'alma'),
(7, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/34Na4j8AVgA\" frameborder=\"0\" allowfullscreen></iframe>', 'alma'),
(8, '<img src=\"http://civilistberlin.com/app/uploads/2015/01/vans-500x500.jpg\"><h3>Vans are life!</h3>', 'alma'),
(9, '<img src=\"https://www.vaughanmills.com/media/stores/logos/XXIForever.png.450x240_q85.png\">Let us go shopping!!', 'alma'),
(10, '<a href=\"https://almagonzalez.me/\">My Website</a>', 'alma'),
(11, '<img src=\"http://www.northshorevisitor.com/wp-content/uploads/2015/04/hiking-trails.jpg\" /><h4>Hiking is my passion!!</h4>', 'alma'),
(12, '<img src=\"http://www.lovingthislifejada.com/wp-content/uploads/2015/10/halloween.jpg\">', 'alma'),
(13, '<a href=\"https://www.facebook.com/alma.gonzalez.370177?ref=br_rs\">Let us be Facebook friends:):)</a>', 'alma'),
(14, '<img src=\"http://zznbobs.com/wp-content/uploads/2015/03/o-CHICKEN-WINGS-facebook.jpg\">', 'alma'),
(15, '<img src=\"http://www.johnscaffe.com/wp-content/uploads/2016/03/slider-Johns-Caffe-Pizza.jpg\">', 'sebas'),
(16, '<img src=\"http://cdn.akamai.steamstatic.com/steam/apps/72850/header.jpg?t=1477612894\" />', 'sebas'),
(17, '<img src=\"https://tvfiles.alphacoders.com/198/poster-thumb-1985.jpg\" />', 'sebas'),
(18, '<img src=\"http://citizencope.com/wp-content/uploads/2011/12/CC-Cover-317x317.jpg\" /><h2>My favorite artist, Citizen Cope.</h2>', 'sebas'),
(19, '<img src=\"http://first-edition.com/files/swatches/282.png\" /><br/><h4>Royal Blue lover!s</h4>', 'sebas'),
(20, '<h2>A conspiracist at heart.</h2>', 'sebas'),
(21, '<img src=\"http://images.streetmoda.com/images/US-Polo-Assn-Skip-Mens-Canvas-Fashion-Boat-Sneakers-217674-Khaki-Navy-Pic1.jpg\"/>My favorite shoes.', 'sebas'),
(22, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/njSyHmcEdkw\" frameborder=\"0\" allowfullscreen></iframe>', 'sebas'),
(23, '<img src=\"http://s3.amazonaws.com/digitaltrends-uploads-prod/2016/04/volkswagen-emblem.jpg\"><h3>Volkswagons are the best!</h3>', 'sebas'),
(24, '<a href=\"https://www.instagram.com/mk4_wtfsebiherrod6t/\">Follow me on Instagram!</a>', 'sebas'),
(25, '<img src=\"https://upload.wikimedia.org/wikipedia/en/thumb/2/22/American_Eagle_Outfitters_logo.svg/1200px-American_Eagle_Outfitters_logo.svg.png\">Let us go shopping!!', 'sebas'),
(26, '<img src=\"https://s-media-cache-ak0.pinimg.com/originals/d5/17/0d/d5170d004b30261601b575d665644586.jpg\" /><h4>Jack Johnson is awesommee!!!</h4>', 'sebas'),
(27, '<img src=\"http://pop.orange.com/wp-content/uploads/2015/10/illustration-cover-retrogaming.jpg\">', 'sebas'),
(28, '<img src=\"https://www.apple.com/ac/structured-data/images/knowledge_graph_logo.png?201611302356\">', 'alma'),
(30, '<img src=\"http://s7d2.scene7.com/is/image/DSWShoes/383826_991_ss_01?scl=3.125&qlt=70&fmt=jpeg&wid=480&hei=360&op_sharpen=1\">', 'alma'),
(31, '<img src=\"http://indiabistro.ca/img/indian-food-vancouver-india-bistro.png\">', 'vib'),
(32, '<img src =\"http://2.bp.blogspot.com/-hA-s3uwwaC0/VnGrbDQQTwI/AAAAAAAAeCQ/ZLMpMNJXid8/s1600/runescape1.jpg\"><h4>one of my favorite games</h4>', 'vib'),
(33, '<img src=\"https://kathika.com/wp-content/uploads/shutterstock_roller_coaster.jpg\">', 'vib');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `linkid` int(10) NOT NULL,
  `links` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`linkid`, `links`) VALUES
(1, '<a href=\"aboutme.php\">MyAboutME</a>'),
(2, '<a href=\"sliders.php\">MySliders</a>'),
(3, '<a href=\"masonry.php\">MyMasonry</a>'),
(4, '<a href=\"logout.php\">MyLogout</a>');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `sliderid` int(10) NOT NULL,
  `slider` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`sliderid`, `slider`, `username`) VALUES
(1, 'https://www.purdue.edu/convocations/wp-content/uploads/2016/01/PATD_1280x620.jpg', 'alma'),
(2, 'http://img09.deviantart.net/e142/i/2013/187/4/6/pierce_the_veil_by_lilysmilingfish-d6c8b0a.png', 'alma'),
(3, 'http://netstorage.metrolyrics.com/artists/hero/the-weeknd-566f46fe-hero.jpg', 'alma'),
(4, 'http://img.wennermedia.com/featured-promo-724/why-the-beatles-broke-up-2009-e484add3-63dc-4a66-ba11-7c53be32c673.jpg', 'alma'),
(5, 'http://chevydetroit.com/wp-content/uploads/2012/09/citizen-cope-540x330_1338424544.jpg', 'sebas'),
(12, 'http://cdn.pcwallart.com/images/sleeping-with-sirens-wallpaper-4.jpg', 'alma'),
(6, 'https://heavyeditorial.files.wordpress.com/2015/07/joan-sebastian.jpg?quality=65&strip=all', 'sebas'),
(7, 'http://www.7stonesboracay.com/wp-content/uploads/2015/12/upside-down-jack-johnson.jpg', 'sebas'),
(8, 'http://www.billboard.com/files/styles/article_main_image/public/media/Metallica-1985-group-billboard-650.jpg', 'sebas'),
(11, 'https://www.nubimagazine.com/wp-content/uploads/2015/11/Coldplay-feat.jpg', 'sebas'),
(13, 'http://www.fisheries.noaa.gov/stories/2015/07/shark_wk_2015.jpg', 'vib'),
(14, 'http://www.gordonconwell.edu/hamilton/current/images/01.jpg', 'vib');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masonry`
--
ALTER TABLE `masonry`
  ADD PRIMARY KEY (`itemid`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`linkid`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`sliderid`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `masonry`
--
ALTER TABLE `masonry`
  MODIFY `itemid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `linkid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `sliderid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
