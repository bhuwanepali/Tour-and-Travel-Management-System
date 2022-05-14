-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 08:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `a_photo` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `name`, `email`, `password`, `a_photo`, `address`, `contact`) VALUES
(1, 'Bhuwan Nepali', 'bhuwanpariyarr@gmail.com', '513a7ee491f7dad27c560c19471ea528', 'Bhuwan.jpg', 'kupondole', '9811111111');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `boo_id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `blocation` varchar(30) NOT NULL,
  `arrival_date` date NOT NULL,
  `leaving_date` date NOT NULL,
  `b_cost` int(11) NOT NULL,
  `v_cost` int(11) NOT NULL,
  `b_type` varchar(30) NOT NULL,
  `otp_code` int(11) NOT NULL,
  `b_status` varchar(30) NOT NULL,
  `payment-status` varchar(30) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `no_of_member` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`boo_id`, `cid`, `blocation`, `arrival_date`, `leaving_date`, `b_cost`, `v_cost`, `b_type`, `otp_code`, `b_status`, `payment-status`, `u_email`, `no_of_member`, `total`) VALUES
(5, 1, 'Pokhara', '2022-04-15', '2022-04-15', 25, 100, 'Individual', 0, 'verified', 'completed', 'bhuwanepali77@gmail.com', 1, 125),
(6, 1, 'Mustang', '2022-04-15', '2022-04-16', 25, 100, 'Individual', 0, 'verified', 'completed', 'bhuwanepali77@gmail.com', 1, 250),
(8, 1, 'Pokhara', '2022-04-15', '2022-04-16', 25, 100, 'Individual', 765227, 'notverified', 'incomplete', 'bhuwanepali77@gmail.com', 1, 250),
(9, 1, 'Pokhara', '2022-04-15', '2022-04-16', 25, 100, 'Individual', 686712, 'notverified', 'incomplete', 'bhuwanepali77@gmail.com', 1, 250),
(10, 1, 'Pokhara', '2022-04-15', '2022-04-16', 25, 100, 'Individual', 239558, 'notverified', 'incomplete', 'bhuwanepali77@gmail.com', 1, 250),
(11, 1, 'Pokhara', '2022-04-15', '2022-04-16', 25, 100, 'Individual', 0, 'verified', 'incomplete', 'bhuwanepali77@gmail.com', 1, 250);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(1, 'Bhuwan Pariyar', 'bhuwanpariyar@gmail.com', 'hye'),
(2, 'Bhuwan Pariyar', 'bhuwanepali77@gmail.com', 'Thank you....');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `pro_key` int(11) NOT NULL,
  `images` text NOT NULL,
  `placename` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `pro_key`, `images`, `placename`, `name`) VALUES
(1, 0, '', 'lumbini', 'lumbini'),
(2, 2, 'janakpur.jpg', 'janakpur', 'janakpur'),
(3, 4, 'pokhara.jpg', 'Pokhara', 'Pokhara'),
(4, 4, 'mustang.jpg', 'mustang', 'mustang'),
(5, 3, 'chitwan.jpg', 'Chitwan', 'Chitwan'),
(6, 1, 'jhapa.jpg', 'Biratnagar', 'Jhapa'),
(7, 1, 'jhapa.jpg', 'Jhapa', 'jhapa'),
(8, 6, 'Dolpa.jpg', 'Dolpa', 'Dolpa'),
(10, 3, 'ktm.jpg', 'kathmandu', 'kathmandu'),
(11, 4, 'Lamjung.jpg', 'Lamjung', 'Lamjung'),
(12, 3, 'lalitpur.jpg', 'Lalitpur', 'Lalitpur'),
(13, 3, 'bkt.jpg', 'Bhaktapur', 'Bhaktapur'),
(14, 7, 'bajura.jpg', 'Bajura', 'Badimalika');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `l_id` int(11) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `rphoto` varchar(100) NOT NULL,
  `rdesc` varchar(200) NOT NULL,
  `rloc` varchar(100) NOT NULL,
  `rprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `l_id`, `rname`, `rphoto`, `rdesc`, `rloc`, `rprice`) VALUES
(1, 1, 'Dream Nepal Restaurant and Bar', 'dreamnepalrestaurantandbar.jpg', 'well manage restaurant and bar', 'jhapa', 100),
(2, 0, 'Bhuwan', 'background.webp', 'Wonderful', 'Kathmandu', 50);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pid` int(11) NOT NULL,
  `ptype` varchar(30) NOT NULL,
  `pcost` int(11) NOT NULL,
  `pdesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pid`, `ptype`, `pcost`, `pdesc`) VALUES
(1, 'Individual', 25, 'A Individual package tour, package vacation, or package holiday comprises transport and accommodation are arranged by tour operator. Other services may be provided such a rental car, activities or outings during the holiday. '),
(2, 'Group', 20, 'if you are looking for Group tour packages, than search and book Group tickets online from our site at great deals and discounts on various vacations ...'),
(3, 'Family', 20, 'Best of family tour packages guarantee relaxation and activities for the complete family. Right from adults and kids to elderly, family packages include a vast range of sightseeing trips, historical tours, fun activities, a little bit of adventure and a lot of relaxing time.'),
(4, 'Couple', 25, 'If you are planning your first romantic vacation, then we have couple packages on offer. No country gives you options of more places and ways to spend your first few days together, than Nepal.');

-- --------------------------------------------------------

--
-- Table structure for table `place_details`
--

CREATE TABLE `place_details` (
  `p_id` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `pdesc` text NOT NULL,
  `pimages` text NOT NULL,
  `province_key` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `pmap` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place_details`
--

INSERT INTO `place_details` (`p_id`, `pname`, `pdesc`, `pimages`, `province_key`, `rating`, `pmap`) VALUES
(1, 'Pokhara', '<ul>\r\n	<li><span style=\"color:#4e5f70\">Pokhara is Nepal&#39;s number 1 adventure and leisure destination, a gateway to treks in the Annapurna region with plenty of entertainment for individual travellers and their families.</span></li>\r\n	<li><span style=\"color:#4e5f70\">In Pokhara you can experience the excitement of adventure: boating, hiking, pony rides, paragliding, bungee, zipline or simply relaxing at one of the several lakes in the valley.</span></li>\r\n	<li><span style=\"color:#4e5f70\">Relax at the shores of Fewa Lake in Pokhara. Pokhara will overwhelm you with its natural beauty and great photo ops. Walk along the shores of the Fewa Lake, enjoy the greenery surrounding you and gaze at the spectacular panoramic view of the Himalayan peaks of the Annapurna Massif.</span></li>\r\n	<li><span style=\"color:#4e5f70\">Brightly painted wooden boats add vibrant colors to the greenery, while paragliders float down slowly from above.</span></li>\r\n	<li><span style=\"color:#4e5f70\">Flying over the lake is probably going to be one of the highlights of your travel experience in Nepal.</span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 'pokhara.jpg', 4, 5, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224976.28917527467!2d83.81653089991237!3d28.229953541401265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937bbf0376ff%3A0xf6cf823b25802164!2sPokhara!5e0!3m2!1sen!2snp!4v1650006382048!5m2!1sen!2snp'),
(2, 'Kathmandu', '<ul>\r\n	<li><span style=\"color:#4e5f70\">Kathmandu, which is also known as the city of temples, is the capital city of Nepal. it is also known as one of the largest cities in Nepal with high population density.</span></li>\r\n	<li><span style=\"color:#4e5f70\">This city is an amazing place for it is filled with heritages and temples and all those cultural related stuff which is sure to make any travelers jealous with its tempting beauty.</span></li>\r\n	<li><span style=\"color:#4e5f70\">This place is rich in culture and the lifestyle of indigenous people that have been residing there will give you a different sightseeing experience when you are actually inside the city.</span></li>\r\n	<li><span style=\"color:#4e5f70\">People here believe in different gods and as a result, you will get to see different festivals celebrated here every day. You will get to encounter with chariots in every street of Kathmandu.</span></li>\r\n	<li><span style=\"color:#4e5f70\">The city is the first step for all travelers because it has the only international airport in Nepal.Kathmandu, which is also known as the city of temples, is the capital city of Nepal.</span></li>\r\n	<li><span style=\"color:#4e5f70\">it is also known as one of the largest cities in Nepal with high population density. This city is an amazing place for it is filled with heritages and temples and all those cultural related stuff which is sure to make any travelers jealous with its tempting beauty.</span></li>\r\n	<li><span style=\"color:#4e5f70\">This place is rich in culture and the lifestyle of indigenous people that have been residing there will give you a different sightseeing experience when you are actually inside the city.</span></li>\r\n	<li><span style=\"color:#4e5f70\">People here believe in different gods and as a result, you will get to see different festivals celebrated here every day. You will get to encounter with chariots in every street of Kathmandu. The city is the first step for all travelers because it has the only international airport in Nepal.</span></li>\r\n</ul>\r\n', 'ktm.jpg', 3, 4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.276892025526!2d85.29111314602402!3d27.70903193362816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1650007593295!5m2!1sen!2snp'),
(3, 'Janakpur', '<ul>\r\n	<li><span style=\"color:#4e5f70\">Located in south-central Nepal on the Terai plains, Janakpur was once the capital of a millennia-old Indian kingdom known as Mithila, and the Maithili culture still thrives here.</span></li>\r\n	<li><span style=\"color:#4e5f70\">The city is located in the Terai region of Nepal and is the administrative headquarters of Dhanusa district. The Ram Janaki Temple is the main attraction in Janakpur.</span></li>\r\n	<li><span style=\"color:#4e5f70\">The centre of Mithila culture, Janakpurdham is also one of the revered sites on the holy Parikrama (route undertaken by devout Hindus) along with Ayodhya, Kashi and Brij in India.</span></li>\r\n	<li><span style=\"color:#4e5f70\">Hindus believe Janakpur is the place where Lord Ram wed Sita, also known as Janaki, and thousands of Hindus from all over the world flock to the temple of Janaki Mandir each year to celebrate the anniversary of their marriage.</span></li>\r\n	<li><span style=\"color:#4e5f70\">With its three-story construction and 60 rooms, the massive 19th-century marble structure is the largest temple in Nepal. Janakpur is known for the more than 100 sacred pools and ponds scattered around the tranquil city as well.</span></li>\r\n</ul>\r\n', 'janakpur.jpg', 2, 4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114005.8994062078!2d85.86675920071956!3d26.754446981811558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ec4005fb138bb9%3A0x533a64cf0e13c2d1!2sJanakpur!5e0!3m2!1sen!2snp!4v1650007652592!5m2!1sen!2snp'),
(4, 'Mustang', '<ul>\r\n	<li><span style=\"color:#4e5f70\">Upper Mustang is a restricted site of Nepal that had its own royal kingdom within the territory of Nepal until recently in 1950.</span></li>\r\n	<li><span style=\"color:#4e5f70\">This place remained untouched from the globalizing world for centuries; as a result, the authentic taste of ancient culture still lingers in the air of the upper Mustang.</span></li>\r\n	<li><span style=\"color:#4e5f70\">There are beautiful palaces, and labyrinth-like tall caves to join and spend your time in. Otherwise, there is nothing to see except a far-stretching deserted plain.</span></li>\r\n	<li><span style=\"color:#4e5f70\">Exploring the upper mustang is analogous is visiting Tibet as the upper mustang is a part of a Tibetan plateau. It is a unique experience to be there.</span></li>\r\n	<li><span style=\"color:#4e5f70\">Upper Mustang is the choice of braves as the trail is very difficult to pass through and the air is mostly dusty by the winds. Only if you have the gut to challenge yourself in every step can you attempt this trek.</span></li>\r\n</ul>\r\n', 'mustang.jpg', 4, 4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d893779.8459565126!2d83.30316006745053!3d28.94800852401342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39be6c7eb19f2ab7%3A0x2c40a8c5a03d3c04!2sMustang!5e0!3m2!1sen!2snp!4v1650007797120!5m2!1sen!2snp'),
(5, 'Lumbini', '<ul>\r\n	<li><span style=\"color:#4e5f70\">Lumbini, the birthplace of Lord Buddha, is among the famous Nepal tourist spots. The peaceful ambiance of the city located in the Kapilavasta region is perfect for meditation.</span></li>\r\n	<li><span style=\"color:#4e5f70\">The temples and monuments built in accordance with the Buddhist architecture are highly admired. Lord Shiva is known to born in the year 623 BC in Lumbini which is basically in the southern part of Nepal.</span></li>\r\n	<li><span style=\"color:#4e5f70\">A lot of people visit Nepal only to see Lumbini. It is said that Lumbini is one of the holiest places in all over the world for the people who follow Buddhism.</span></li>\r\n	<li><span style=\"color:#4e5f70\">According to the people who have authenticated this place as the birthplace of Buddha all the boundaries of the wall of the garden in Lumbini proves that this is the place where Buddha was born.</span></li>\r\n	<li><span style=\"color:#4e5f70\">This place is now protected by the Ancient Monument Preservation Act which was passed in the year 1956. Lumbini has a huge historical significance for a lot of people.</span></li>\r\n	<li><span style=\"color:#4e5f70\">All the people who follow Buddhism have a goal to visit Lumbini where Buddha was born. The popularity of Lumbini is increasing day by day because a number of people are converting into Buddhism and planning to visit here.</span></li>\r\n	<li><span style=\"color:#4e5f70\">There has been a lot of hotels set up around Lumbini so that the tourists are able to enjoy Nepal sightseeing. Lumbini has no magical monuments to leave you jaw-dropping, but if you are a peace-seeker or monastery explorer, then Lumbini can give you all that you want.</span></li>\r\n</ul>\r\n', 'lumbini.jpg', 5, 5, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14162.471363100456!2d83.24124522390355!3d27.450018318308178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3996eb334fe91fc1%3A0x5793b8b9b8917fcd!2sLumbini%2032900!5e0!3m2!1sen!2snp!4v1650007952408!5m2!1sen!2snp'),
(6, 'Lamjung', '<ul>\r\n	<li><span style=\"color:#4e5f70\">Lamjung District (Nepali: lamjung District (About this soundlisten)), a part of Gandaki Province, is one of the 77 districts of Nepal.</span></li>\r\n	<li><span style=\"color:#4e5f70\">The district, with Besisahar as its district headquarters, covers an area of 1,692 square kilometres (653 sq mi) and as of 2011 had a population of 167,724.</span></li>\r\n	<li><span style=\"color:#4e5f70\">Lamjung lies in the mid-hills of Nepal spanning tropical to trans-Himalayan geo-ecological belts, including the geographical midpoint of the country (i.e., Duipipal).</span></li>\r\n	<li><span style=\"color:#4e5f70\">It has mixed habitation of casts and ethnicities. It is host to probably the highest density of the Gurung ethnic population in the country.</span></li>\r\n</ul>\r\n', 'Lamjung.jpg', 4, 4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d449728.03259133524!2d84.16050834783074!3d28.28316649151821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995a6aeaed110df%3A0xee0fb6ab24592a26!2sLamjung!5e0!3m2!1sen!2snp!4v1650008029445!5m2!1sen!2snp'),
(7, 'Lalitpur', '<ul>\r\n	<li><span style=\"color:#4e5f70\">Situated across the Bagmati River from Kathmandu, Patan is as well known for its artisans as for its stunning display of Newari architecture.</span></li>\r\n	<li><span style=\"color:#4e5f70\">Built in the 17th century, the palaces, courtyards and temples of the Patan Durbar are the city&rsquo;s star attractions.</span></li>\r\n	<li><span style=\"color:#4e5f70\">With its multi-columned fa&ccedil;ade and gilded spires, the recently restored stone Krishna Temple is particularly striking, as is the recently restored Sundari Chowk, a courtyard with an elaborately carved sunken bath as its centerpiece.</span></li>\r\n	<li><span style=\"color:#4e5f70\">Patan is one of the best places in Nepal to buy the gorgeous handmade silk saris that once were the garment of choice for the country&rsquo;s royalty and aristocracy.</span></li>\r\n</ul>\r\n', 'lalitpur.jpg', 3, 4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56542.93013661501!2d85.28813229572708!3d27.65754042493165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19d3cf18ca51%3A0xd10ec3d53656e18f!2sLalitpur!5e0!3m2!1sen!2snp!4v1650008089995!5m2!1sen!2snp'),
(8, 'Jhapa', '<ul>\r\n	<li><span style=\"color:#4e5f70\">Jhapa District Coordination Committee (DCC), formerly called Jhapa District is located in Province 1 of the eastern region of Nepal.</span></li>\r\n	<li><span style=\"color:#4e5f70\">It borders with West Bengal (India) to the East, Morang to the West, Illam to the North and Bihar (India) to the South. Jhapa has 8 municipalities and 7 rural municipalities.</span></li>\r\n	<li><span style=\"color:#4e5f70\">The total area of Jhapa is 1,606 km2. The lowest elevation point is 58 meter which is the lowest point of Nepal and highest elevation point is 500 meter above sea level.</span></li>\r\n	<li><span style=\"color:#4e5f70\">The current population of Jhapa is 647,492 and the average population density is around 400 people per square km.</span></li>\r\n	<li><span style=\"color:#4e5f70\">The headquarter of Jhapa is connected by feeder road to the East-West Highway at Birtamod, and is also connected to the Hill parts of the eastern region of Nepal. Jhapa is the gateway to India for the eastern region of Nepal.</span></li>\r\n</ul>\r\n', 'jhapa.jpg', 1, 4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d456705.9388304878!2d87.63152335529381!3d26.583889217329762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e5bcb8fd2d8589%3A0x17a56116204711c!2sJhapa!5e0!3m2!1sen!2snp!4v1650008143278!5m2!1sen!2snp'),
(9, 'Biratnagar', '<ul>\r\n	<li><span style=\"color:#4e5f70\">Biratnagar (Nepali:Biratnagar is a metropolitan city in Nepal, which serves as the capital of Province No. 1 With a population of 242,548 as per the 2011 census, it is the largest city in the province and also the headquarters of Morang district.</span></li>\r\n	<li><span style=\"color:#4e5f70\">Biratnagar is located 399 km (248 mi) east of the capital, Kathmandu, and 6 km (3.7 mi) north of the bordering town of Jogbani in the Indian state of Bihar.</span></li>\r\n	<li><span style=\"color:#4e5f70\">The highest peak in the world, Mount Everest, is situated 174 km (108 mi) north of the city. Biratnagar was declared a metropolitan city on 22 May 2017,thus pushing the total population to over 240,000.</span></li>\r\n	<li><span style=\"color:#4e5f70\">This made it the fourth-most populated city in the country following the urban agglomeration of Kathmandu and Lalitpur, Pokhara, and Bharatpur.</span></li>\r\n	<li><span style=\"color:#4e5f70\">The city is home to the Biratnagar Jute Mills, the first large-scale industry of Nepal. Besides being considered as the industrial capital of Nepal, the city has contributed actively to the Nepalese democracy movement by being the birthplace of five prime ministers of democratic Nepal.</span></li>\r\n	<li><span style=\"color:#4e5f70\">The latter claim is also evident from the fact that the first labor strike leading to the anti-Rana movement started from Biratnagar. Modern-day Biratnagar serves as an entry point to eastern Nepal as well as north-eastern India.</span></li>\r\n	<li><span style=\"color:#4e5f70\">It is the second Nepalese city, after Janakpur, to have a connection with the Indian Railways and the only city other than Birgunj to operate an integrated check post (ICP) on the Indian border.</span></li>\r\n</ul>\r\n', 'biratnagar.png', 1, 4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114311.3253137709!2d87.20176634384573!3d26.448349079488366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef744704331cc5%3A0x6d9a85e45c54b3fc!2sBiratnagar%2056613!5e0!3m2!1sen!2snp!4v1650008193857!5m2!1sen!2snp'),
(10, 'Bhaktapur', '<ul>\r\n	<li><span style=\"color:#4e5f70\">Bhaktapur is the best among the Nepal tourist attractions for shopping for terracotta and handicraft products. Clothes and souvenirs also available. The history of Bhaktapur goes back to about the 8th century.</span></li>\r\n	<li><span style=\"color:#4e5f70\">This place was the capital of Nepal from the 12th century to about the 15th century. In the 18th century, this place became a country on its own with boundary walls and gates to the city.</span></li>\r\n	<li><span style=\"color:#4e5f70\">The citizen of Bhaktapur are mostly peasants, public employees, handicraft manufacturers or businessman. Shopping at this vibrant destination is certainly one of the top things to do in Nepal.</span></li>\r\n	<li><span style=\"color:#4e5f70\">A lot of tourists visit this city every year which helps in the economy of the city. The city is filled with red bricks which makes it look very beautiful.</span></li>\r\n	<li><span style=\"color:#4e5f70\">People will also be able to find a lot of animals present in this area who are kept as a pet, something that makes it one of the best tourist places in Nepal.</span></li>\r\n	<li><span style=\"color:#4e5f70\">Bhaktapur is the best among the Nepal tourist attractions for shopping for terracotta and handicraft products. Clothes and souvenirs also available.</span></li>\r\n	<li><span style=\"color:#4e5f70\">The history of Bhaktapur goes back to about the 8th century. This place was the capital of Nepal from the 12th century to about the 15th century.</span></li>\r\n	<li><span style=\"color:#4e5f70\">In the 18th century, this place became a country on its own with boundary walls and gates to the city. The citizen of Bhaktapur are mostly peasants, public employees, handicraft manufacturers or businessman. Shopping at this vibrant destination is certainly one of the top things to do in Nepal.</span></li>\r\n	<li><span style=\"color:#4e5f70\">A lot of tourists visit this city every year which helps in the economy of the city. The city is filled with red bricks which makes it look very beautiful. People will also be able to find a lot of animals present in this area who are kept as a pet, something that makes it one of the best tourist places in Nepal.</span></li>\r\n</ul>\r\n', 'bkt.jpg', 3, 4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28266.31885658507!2d85.40695700633573!3d27.677434854679834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1aae42806ba1%3A0x5449e079404e5e82!2sBhaktapur!5e0!3m2!1sen!2snp!4v1650008274700!5m2!1sen!2snp'),
(11, 'Chitwan', '<ul>\r\n	<li><span style=\"color:#4e5f70\">Established in 1973, Chitwan National Park soon got listed in the book of World Heritage Sites (1984) because of its wilderness.</span></li>\r\n	<li><span style=\"color:#4e5f70\">It is the home for over 650 species of birds, a countless variety of mammals (Royal Bengal Tiger, one-horned rhinoceros, Deer, etc.), and reptiles (python, crocodiles, etc.) that make Chitwan the top destination among nature lovers.</span></li>\r\n	<li><span style=\"color:#4e5f70\">The Rapti river, flowing through the woods of this National Park, shelters two species of crocodiles- Gharials and Muggers- and a Gangetic Dolphin which is rarely sighted jumping in the water of the Rapti. Chitwan is best for Photography.</span></li>\r\n	<li><span style=\"color:#4e5f70\">Also, exploring the wilderness of Chitwan is full of fun. This trip can be best for the family.</span></li>\r\n</ul>\r\n', 'chitwan.jpg', 3, 4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d452506.4339391408!2d84.07741137146948!3d27.618119986194213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994439ad1ca5a8d%3A0x6c5e40f75e1f474f!2sChitawan!5e0!3m2!1sen!2snp!4v1650008350841!5m2!1sen!2snp'),
(12, 'Dolpa', '<ul>\r\n	<li><span style=\"color:#4e5f70\">Dolpo is a culturally rich remote region of far-western Nepal. This place is isolated from the rest of the world, and the people living here are nomadic traders.</span></li>\r\n	<li><span style=\"color:#4e5f70\">During the summer, they grow millet, barley, and other commodities in the soil and when the winter approaches, they travel across the Himalayas for trading purposes.</span></li>\r\n	<li><span style=\"color:#4e5f70\">In the meantime, the Dolpo becomes vacant. The lifestyles of these people greatly correspond with the ancestral way of living such as the firewood, they use yak dung, etc.</span></li>\r\n	<li><span style=\"color:#4e5f70\">To explore these unique vivacities of Nepal is in itself an adventure. Let us venture together. Dolpo is only for the daredevils. Dolpo is understandably a region of high passes, rare and diverse flora and fauna, and sweeping views of the high Himalaya.</span></li>\r\n	<li><span style=\"color:#4e5f70\">This trek is for those who want to experience a combination of rare nature enriched with traditional Tibetan culture and heritage.</span></li>\r\n	<li><span style=\"color:#4e5f70\">Protected by Shey-Phoksundo National Park, the largest national park in Nepal, Dolpo is a well-preserved eco-system providing majestic views of Kanjiroba Peak, Phoksundo Lake, and the Dhaulagiri massif.</span></li>\r\n	<li><span style=\"color:#4e5f70\">A visit to Phoksundo Gompa, which is dedicated to the ancient Bonpo religion, local to Dolpo and Tibet, is an experience that will make this a journey of a lifetime.</span></li>\r\n</ul>\r\n', 'Dolpa.jpg', 6, 4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d891473.640013294!2d82.47570863156187!3d29.21417280489249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39bc544cf041c747%3A0xc7c37669f5276eca!2sDolpa!5e0!3m2!1sen!2snp!4v1650008411171!5m2!1sen!2snp'),
(14, 'Bajura', '<ul>\r\n	<li><span style=\"color:#4e5f70\">Badimalika is an important tourist destination and an important religious site in Far Western Nepal. It has mesmerizing scenarios.</span></li>\r\n	<li><span style=\"color:#4e5f70\">It looks similar to the old windows screen. It is 4200m above from sea level. The trek gets harder as it has got lots of steep trails.</span></li>\r\n	<li><span style=\"color:#4e5f70\">There are two rivers called Ganga and Jamuna. High hills of neighboring districts can also be seen from here. This region is rich in medicinal herbs as well.</span></li>\r\n	<li><span style=\"color:#4e5f70\">The weather is cold and trekkers need to assemble all the needed stuff by themselves. Badimalika can be a paradise for hiking and trek lovers.</span></li>\r\n</ul>\r\n', 'bajura.jpg', 6, 4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6954.909581291242!2d81.3061652235955!3d29.356970129637357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a3bae59e05efdd%3A0x39b521ad4425c1e8!2sBajura%2010600!5e0!3m2!1sen!2snp!4v1650008488251!5m2!1sen!2snp');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(11) NOT NULL,
  `pro_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `pro_name`) VALUES
(1, 'Province-1'),
(2, 'Province-2'),
(3, 'Bagmati'),
(4, 'Gandaki'),
(5, 'Lumbini'),
(6, 'Karnali'),
(7, 'Sudurpaschim');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL,
  `rdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `name`, `email_id`, `review`, `rating`, `rdate`) VALUES
(1, 'Muskan', 'muskan@gmail.com', 'cool', 4, '2021-08-17 06:15:42'),
(2, 'Mukesh', 'Mukesh@gmail.com', 'awesome', 5, '2021-08-17 06:15:42'),
(3, 'Samip', 'samip@gmail.com', 'wonderful', 5, '2021-08-17 06:15:42'),
(4, 'Bhuwan', 'bhuwan@gmail.com', 'great', 4, '2021-08-17 06:15:42'),
(5, 'Bhuwan Pariyar', 'bhuwanepali77@gmail.com', 'well experience', 5, '2021-08-17 13:41:00'),
(6, 'Bhuwan Pariyar', 'bhuwanepali77@gmail.com', 'intermediate', 3, '2021-08-18 11:47:00'),
(7, 'samip pokharel', 'samip@gmail.com', 'nice', 5, '2022-01-10 09:32:00'),
(8, 'Bhuwan Nepali', 'bhuwan@gmail.com', 'Intermediate', 2, '2022-04-05 21:33:00'),
(9, 'Bhuwan Nepali', 'bhuwan@gmail.com', 'bad experience', 1, '2022-04-05 21:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `sid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `sphoto` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`sid`, `sname`, `designation`, `sphoto`, `phone`, `address`, `email`) VALUES
(1, 'Bhuwan Pariyar', 'Administrator', 'Bhuwan.jpg', 1000000000, 'sarlahi', 'bhuwan@gmail.com'),
(2, 'Mukesh Kumar mahato', 'Accountant', 'mukesh.jpg', 1111111111, 'Siraha', 'mukesh@gmail.com'),
(3, 'Samip Pokharel', 'field incharge', 'samip.jpg', 222222222, 'Bhaktapur', 'samip@gmail.com'),
(4, 'Muskan Manandhar', 'Receptionist', 'muskan.jpg', 333333333, 'Bafal', 'muskan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(1, 'bhuwanepali77@gmail.com'),
(2, 'bhuwanepali77@gmail.com'),
(3, 'bhuwanepali77@gmail.com'),
(4, 'bhuwanepali77@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `id` int(11) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `tphoto` varchar(200) NOT NULL,
  `tprice` int(11) NOT NULL,
  `no_of_sits` int(11) NOT NULL,
  `tdesc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`id`, `tname`, `tphoto`, `tprice`, `no_of_sits`, `tdesc`) VALUES
(1, 'Bus', 'bus.png', 200, 20, 'A bus is a public transport road vehicle designed to carry significantly more passengers than the average car or van. Buses can have a capacity as high as 300 passengers,[2] although the average bus usually carries between 30 to 100. The most common type is the single-deck rigid bus, with double-decker and articulated buses carrying larger loads, and midibuses and minibusses carrying smaller loads. Coaches are used for longer-distance services.'),
(3, 'Van', 'van.jpg', 50, 10, 'A van is a type of road vehicle used for transporting goods or people. Depending on the type of van, it can be bigger or smaller than a pickup truck and SUV, and bigger than a common car.'),
(7, 'Alicante Taxi', 'taxi.png', 50, 4, 'A taxi, also known as a taxicab or simply a cab, is a type of vehicle for hire with a driver, used by a single passenger or small group of passengers, often for a non-shared ride. A taxicab conveys passengers between locations of their choice. This differs from public transport where the pick-up and drop-off locations are decided by the service provider, not by the customers, although demand responsive transport and share taxis provide a hybrid bus/taxi mode.'),
(8, 'Mahindra car', 'car.png', 100, 4, 'Mahindra and Mahindra, which was formerly known as Muhammad and Mahindra, was established in 1945. The company, which has its headquarters in Mumbai, is a part of the Mahindra Group, an Indian conglomerate.\n\nThe company has factories located in Nashik, Mumbai, and Pune, all in the state of Maharashtra. The carmaker currently sells models such as the KUV100 NXT, Bolero, Bolero Neo, Marazzo, Scorpio, Alturas G4, XUV300, Thar, and the latest entrant, the XUV700.\n\nAlso in the works from the brand are a few other models such as the new-gen Scorpio, five-door Thar, all-new Bolero, all-new XUV300, as well as hybrid and fully electric models in the next five years. ');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `c_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `pswd` varchar(100) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_mobile` varchar(100) NOT NULL,
  `c_photo` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `c_pswd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`c_id`, `username`, `c_email`, `pswd`, `c_address`, `c_mobile`, `c_photo`, `fname`, `lname`, `city`, `c_pswd`) VALUES
(1, 'Bhuwan', 'bhuwanepali77@gmail.com', '33d46152b091974f201d1db69fda4222', 'kupondole', '9813246534', 'Bhuwan.jpg', 'Bhuwan', 'Nepali', 'lalitpur', '33d46152b091974f201d1db69fda4222');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `vid` int(11) NOT NULL,
  `vname` varchar(30) NOT NULL,
  `video` text NOT NULL,
  `pcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`vid`, `vname`, `video`, `pcode`) VALUES
(1, 'Pokhara', 'Pokhara.mp4', 4),
(2, 'Kathmandu', 'kathmandu.mp4', 3),
(3, 'Janakpur', 'janakpur.mp4', 2),
(4, 'Mustang', 'Mustang.mp4', 4),
(5, 'Lumbini', 'Lumbini.mp4', 5),
(6, 'Lamjung', 'Lamjung.mp4', 4),
(7, 'Lalipur', 'Lalitpur.mp4', 3),
(8, 'Jhapa', 'jhapa.mp4', 1),
(9, 'Biratnagar', 'biratnagar.mp4', 1),
(10, 'Bhaktapur', 'bhaktapur.mp4', 3),
(11, 'Chitwan', 'Chitwan.mp4', 3),
(12, 'Dolpa', 'dolpa.mp4', 6),
(14, 'Bajura', 'video-61dd5dba3dacb0.82685957.mp4', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`boo_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `place_details`
--
ALTER TABLE `place_details`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `boo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `place_details`
--
ALTER TABLE `place_details`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
