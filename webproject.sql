-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2017 at 06:06 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_ID` int(11) NOT NULL,
  `content` text NOT NULL,
  `catagory` varchar(17) NOT NULL,
  `author` varchar(20) NOT NULL,
  `date` varchar(120) NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID`, `name`, `created_ID`, `content`, `catagory`, `author`, `date`, `image`) VALUES
(5, 'Italian Sayings', 54, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Literature', 'Zain Abbas', 'January 5th, 2017', './images/literature.jpg'),
(8, 'My Thoughs on Phones S7', 54, 'When we first looked at Samsung\'s Galaxy S7, there was no doubt it was the best Android smartphone you could buy. Since then several other phones have hit the market.\r\n\r\nBut with Apple\'s iPhone 7 and now the OnePlus 3T out, you probably want to know how these two high-end flagships compare with the Samsung Galaxy S7. To help you out, we\'ve added a brief analysis to the tail end of this review, comparing the OnePlus 3T and iPhone 7 with the Samsung Galaxy S7. You can skip straight there using the dropdown menu above if that\'s what you want to know.\r\n\r\nOne thing hasn\'t changed, though: you still face a choice between the S7 and the S7 Edge. But unlike previous generations, it\'s now a much clearer choice than it was. If you like your smartphones big, you\'ll want to opt for the 5.5in Samsung Galaxy S7 Edge and pay a bit more; if you don\'t like having to sew up holes in your pockets every few months, the smaller, slightly cheaper 5.1in Samsung Galaxy S7 we\'re reviewing here is the way to go. Either way, we think you are still getting the best smartphone on the market.', 'Entertainment', 'Zain Abbas', 'January 5, 2017', './images/entertainment.jpg'),
(7, 'Civic Review', 54, 'Right around the turn of the century, though, something felt... off. The seventh generation seemed to lose any semblance of the fun it once possessed, rendering the Civic just another bland econobox with little to offer families beyond two rows of seats and a trunk. Matters improved with the eighth-gen model in 2006, but the Civic that immediately followed it was so bad that it necessitated a substantial refresh after just one year.\r\n\r\nWhat a breath of fresh air it was, then, when Honda debuted today\'s 10th-generation Civic. It has some wacky styling, sure, but it once again attempts to stand out in a very crowded segment using Old Honda\'s tricks -- a blend of efficiency and sportiness that\'s hard to match.\r\n\r\nEven the hatchback has returned, once again offering expanded cargo space without sacrificing any of the aforementioned qualities. In its Sport trim, it proves once again that Honda can build one hell of an entertaining, affordable car.', 'Fashion', 'Zain Abbas', 'January 5, 2017', './images/fashion.jpg'),
(9, 'Pakistan Team in Crisis', 54, 'What a night. The scorecard will say that it was one-sided, but it was a fierce contest nonetheless. It\'s also a night of vindication for the much-criticised Shane Watson and the much-questioned Glenn Maxwell. They took Australia to victory from a vulnerable position, Watson with his second half-century of the tournament, Maxwell with another attacking hand.\r\nThe man of the match award goes to Josh Hazelwood, who took 4/35, and there\'s a story in that too given he just came back into the side. He should edge Pat Cummins for a place in the semifinal. Pakistan didn\'t have any core to their innings, each batsman made a start and then gave it away. \r\nBut defending a low 200s score was well within their remit, and this game should be remembered for the bowling of Wahab Riaz. Without Mohammed Irfan, injured and out of the tournament, Wahab had to take the lead. He did it against South Africa with 3/45, and he nearly did it tonight.\r\nHe ended with 2/54 tonight but it should really have been more like 4/40, having both Watson and Maxwell dropped early in their respective innings. Had those catches been taken, Pakistan might well have gone on to win. But the batsmen took their chances and were the ones to go on instead. Then there was Steve Smith, who played the night\'s critical innings when the tension was high. He made 65.\r\nSo three of the semi-final spots have gone as expected, it only remains to be seen whether the West Indies can offer an upset against New Zealand tomorrow', 'Sports', 'Zain Abbas', 'Saturday, January, 2017', './images/sports.jpg'),
(10, 'End of Malaria', 53, 'The report was launched at a dinner hosted by Mr. Gates and Mr. Chambers and attended by Presidents Jakaya Kikwete of Tanzania and Ellen Johnson Sirleaf of Liberia, two key drivers of the extraordinary 69 percent decline in child malaria deaths in Africa since 2000; WHO Director General Margaret Chan; business leaders; and key decision makers from the United States, Canada, Ethiopia, United Arab Emirates and Australia. The group toasted the plan and pledged support to help make it a reality.', 'Medical', 'Zain Abbas', 'Saturday, January, 2017', './images/medical.jpg'),
(11, 'Pakistan and NY Stock Exchange', 54, 'The NewYork Stock Exchange is on the rise, and shares have been rocketing!\r\nPakistan\'s benchmark index briefly touched a record high level of 50,050.19 on Tuesday, before edging down, underpinned by buying in cement sector.\r\nThe Pakistan Stock Exchange\'s benchmark 100-share index touched the key level soon after the market opened for trading on Tuesday.\r\n"It is a technical market correction; market may hover close to 50,000 level and may cross the fifty thousand mark in current or next session," Fawad Khan, head of research at KASB Securities Private Ltd, told Reuters.\r\n"The index performance shows the local investors\' confidence in the market."\r\nA delegation from a Chinese-led consortium, made up of China Financial Futures Exchange, Shanghai Stock Exchange, Shenzhen Stock Exchange and two other firms, formally signed documents on Friday to buy a 40 percent stake in the Pakistan Stock Exchange. The deal was made public in December last year.', 'Business', 'Zain Abbas', 'Saturday, January, 2017', './images/buissness.jpg'),
(12, 'The MilkyWay', 54, 'We know that stars in the night sky appear in fixed locations only because they are too far for us to perceive their movements. And we also know that far from being static, stars have a dynamic existence, changing and morphing through their millions and billions of years.\r\nBut a new theory proposed by astronomers from Harvard-Smithsonian Center for Astrophysics still comes as somewhat of a surprise. In a study, accepted for publication in the Astrophysical Journal, they suggest that half the farthest stars in our galaxy, the Milky Way, were stolen from another galaxy.\r\nLocated about 300,000 light-years from Earth are 11 stars, the farthest known stars in our galaxy, well outside the spiral disk of the Milky Way. And according to the Harvard astronomers, five of the 11 were ripped off, due to our galaxyâ€™s gravitational tides, from a nearby mini-galaxy called the Sagittarius dwarf, which is one among dozens of mini-galaxies that surround the Milky Way.', 'Nature', 'Zain Abbas', 'Saturday, January, 2017', './images/nature.jpg'),
(13, 'George R.R Martin Promises Anthology', 54, 'Itâ€™s too early to tell if The Winds of Winter will be finished this year like George R.R. Martin hopes, but we now know that weâ€™ll get at least one new story out of the world he created.\r\nMartin is contributing a story to the upcoming fantasy anthology Book of Swords, which is edited by Martinâ€™s longtime co-editor Gardner Dozois. The book, which fans recently stumbled into on Amazon, will be released Oct. 10. For those who might doubt the validity of an Amazon page, the same information appears on Random Houseâ€™s website, which includes Bantam, the imprint under which the book publishes.\r\nFifteen original tales celebrating fantasyâ€™s golden age of sword and sorcery, including a new story from George R. R. Martin set in the world of A Game of Thrones! the anthologyâ€™s description reads.\r\nThereâ€™s no indication on what Martin wants to include and he has yet to mention his story being part of Dozois anthology on his blog. Some fans have surmised that he might include a story from Fire and Blood, an unpublished and comprehensive history of the Targaryen family. One Tumblr user believes it might be a version of a story heâ€™s read at conventions in the past.\r\nHeâ€™s previously released stories in the world of A Song of Ice and Fire in other anthologies including the Tales of Dunk and Egg, The Princess and the Queen, and The Rogue Prince, which all revolve around the Targaryens decades before Daenerys Targaryens birth', 'Literature', 'Zain Abbas', 'Saturday, January, 2017', './images/literature.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `fullName`, `username`, `password`, `picture`) VALUES
(54, 'Zain Abbas', 'ZainAbbas', 'test', './images/userimages/trooper.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
