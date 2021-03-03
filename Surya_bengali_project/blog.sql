-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 03:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(1050) CHARACTER SET utf8 NOT NULL,
  `selects` varchar(255) CHARACTER SET latin1 NOT NULL,
  `writes` varchar(1250) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `selects`, `writes`, `date`, `name`) VALUES
(29, 'llll', 'lllllllll', 'New Series', 'iiiiiiiiiiiiiiiii\r\nlll', '2021-02-21', 'surya'),
(36, 'hello world', 'suryabrata Daas', 'New Series', 'hi i am surya', '2021-02-21', 'surya'),
(37, 'my life', 'surya', 'New Series', 'My life mu choice', '2021-02-21', 'surya'),
(38, 'aasas', 'sss', 'New Series', 'sdsdssd', '2021-02-21', 'surya'),
(39, 'asasas', 'sasas', 'New Series', 'sasaasa', '2021-02-21', 'surya'),
(41, 'asss', 'asas', 'New Series', 'asss\r\nsasasa\r\nsasaas\r\nasassd', '2021-02-21', 'surya'),
(47, 'rupu2', 'asdf', 'Rupantor', 'ami \r\nruponor e\r\n\r\nari', '2021-02-21', 'surya'),
(48, 'modify', 'qwe', 'New Series', 'new modification', '2021-02-21', 'surya'),
(49, 'modify', 'qwe', 'New Series', 'new modification', '2021-02-21', 'surya'),
(51, 'my fiction', 'qwerttt3', 'Bengali Fiction', 'my first fiction potikrit', '2021-02-21', 'surya'),
(53, 'my  hrr stories', '123456', 'Horror series', 'hi i am iron ghost', '2021-02-21', 'surya'),
(57, 'saada', 'aaaaa', 'New Series', 'lorel \r\n\r\n ipsum ', '2021-02-22', 'surya'),
(58, 'qqqqq', 'wwww', 'Bengali Fiction', 'bla bla bla \r\n\r\nBlackship\r\n\r\nWElcome\r\nll', '2021-02-22', 'surya'),
(59, 'www', 'rrr', 'Bengali Fiction', 'qwerttrey\r\nasdadsaffssf\r\n\r\naferetetetereredsfs\r\n', '2021-02-22', 'surya'),
(61, 'eeee', 'asd', 'Rupantor', 'ami valo achi\r\n', '2021-02-22', 'surya'),
(62, 'ssss', 'asasa', 'Rupantor', 'qwer\r\n\r\nasss\r\n\r\n|', '2021-02-22', 'surya'),
(63, 'www', 'fff', 'Bengali Fiction', 'eeee\r\neee\r\n\r\neeeeee\r\n\r\nfffff', '2021-02-22', 'surya'),
(65, 'dsdsd', 'dsffff', 'Bengali Fictionss', 'sddad', '2021-02-22', 'surya'),
(66, 'An Approach for Security of Text by Steganography', 'ssss', 'New Series', 'kano \r\nkani\r\n\r\n\r\nkka\r\n\r\nhaha\r\n', '2021-02-23', 'surya'),
(70, 'ttt', 'gg', 'Poems', 'gggdfsfdf', '2021-02-23', 'surya'),
(71, 'sass', 'eee', 'Child Stories', 'sasadadsad', '2021-02-24', 'surya'),
(72, 'sass', 'eee', 'Child Stories', 'sasadadsad', '2021-02-24', 'surya'),
(73, 'sass', 'eee', 'Child Stories', 'sasadadsad', '2021-02-24', 'surya'),
(74, 'sass', 'eee', 'Child Stories', 'sasadadsad', '2021-02-24', 'surya'),
(76, 'qwer', 'www', 'New Series', '<p>asas</p>sasa zzxxzxzzxzxxzxzxz aasssdsdccadd&nbsp;', '2021-02-24', 'surya'),
(77, 'qwer', 'www', 'New Series', '<p>asas</p>sasa zzxxzxzzxzxxzxzxz aasssdsdccadd&nbsp;', '2021-02-24', 'surya'),
(78, 'An Approach for Security of Text by Steganography', 'mmmm', 'Bengali Fiction', 'zxzXZX', '2021-02-25', 'surya'),
(81, 'An Approach for Security of Text by Steganography', 'ssss', 'New Series', 'অদিতি যদি কোনও কবিতা হত’ ৷৷\r\n', '2021-02-25', 'surya'),
(82, 'অদিতি কোনও কবিতা', 'surya', 'New Series', 'দিতি যদি কোনও কবিতা হত’ ৷৷\r\nএভাবেও কি জন্ম দেওয়া যায় ?\r\n            আচ্ছন্ন অনির্বাণ আর….\r\nজীবনের ফেলে আসা রূপকথার ফুলশয্যা\r\nএভাবেও কি জন্ম দেওয়া যায় ?\r\nযদি অদিতি কোনও কবিতা হত’ !\r\nআমার রক্ত দিয়ে রাঙানো আধুলি\r\nবিক্রি করে দিত হাজার ডলার ৷\r\nযদি অদিতি কোনও কবিতা হত’……..৷\r\nরুদ্ধশ্বাস  রুদ্ধ কণ্ঠ –\r\nআঢ়ষ্ঠ জিহ্বা – উদ্গত ', '2021-02-25', 'surya'),
(83, 'সানুনয় নিবেদন ', 'হাসান ইমতি', 'New Series', 'ক্ষুধিত ইচ্ছেময় পুরুষ-গন্ধি রাতের বুক পকেটের\r\n\r\nঅনৈতিক ভাজে রাখা কাম-ভেজা কোন শরীরময়\r\n\r\nবোধের সাথে আমার আর হয়না নির্ঘুম সহবাস …\r\n\r\nস্পর্ধিত বিশ্বাসের উর্বশী পাখায় লোলুপ আগুন\r\n\r\nজ্বেলে পুড়িয়ে ফেলেছি আমার সব সুখস্বপ্ন', '2021-02-25', 'surya'),
(84, 'কিছু কথা', 'অমিতাভ বাগ', 'New Series', 'কিছু কথা – কখনও বলা হয় নি – ।\r\nজানালার ধারে – মাথা এলিয়ে –\r\nবৃষ্টি যখন আদর করে ঘুম পাড়িয়ে দিতো –\r\nপরতে পরতে ভিজে হাওয়ার নরম ছোঁয়া –\r\nবড় ভালোবাসতাম।\r\n\r\nগোধূলি হাওয়ায় – রং তুলি সাজানো ক্যানভাস –\r\nতোমার শূন্য দৃষ্টির মতো – সাজানো শস্য ,\r\nঅথবা উষ্ণ নিঃশ্বাসের ঘ্রান', '2021-02-25', 'surya'),
(85, 'আমি নয় – ওরা', 'অমিতাভ বাগ', 'New Series', 'সেই এক সুর – বড় একঘেয়ে – মিনমিনে এক সুর।\r\nঅথবা সবলে উৎপাটিত কোনো –\r\nইতিহাসের পাতা খুঁড়ে খুঁড়ে বিবর্ণ মমির মতো।\r\nএক – অবিনশ্বর – অদ্বিতীয় – অমোঘ।\r\nপচা – দীর্ণ – দুস্থ – দিনের পর দিনের উদ্বৃত্ত বাসি মড়ার মতো,\r\nএক সুর।\r\nবড়ো প্রত্যাশিত ।\r\nআমি নয়, আমরাও নয় – ওরা।', '2021-02-25', 'surya'),
(86, 'আমি নয় – ওরা', 'অমিতাভ বাগ', 'New Series', 'সেই এক সুর – বড় একঘেয়ে – মিনমিনে এক সুর।\r\nঅথবা সবলে উৎপাটিত কোনো –\r\nইতিহাসের পাতা খুঁড়ে খুঁড়ে বিবর্ণ মমির মতো।\r\nএক – অবিনশ্বর – অদ্বিতীয় – অমোঘ।\r\nপচা – দীর্ণ – দুস্থ – দিনের পর দিনের উদ্বৃত্ত বাসি মড়ার মতো,\r\nএক সুর।\r\nবড়ো প্রত্যাশিত ।\r\nআমি নয়, আমরাও নয় – ওরা।', '2021-02-25', 'surya'),
(87, 'আমি নয় – ওরা', 'অমিতাভ বাগ', 'New Series', 'সেই এক সুর – বড় একঘেয়ে – মিনমিনে এক সুর।\r\nঅথবা সবলে উৎপাটিত কোনো –\r\nইতিহাসের পাতা খুঁড়ে খুঁড়ে বিবর্ণ মমির মতো।\r\nএক – অবিনশ্বর – অদ্বিতীয় – অমোঘ।\r\nপচা – দীর্ণ – দুস্থ – দিনের পর দিনের উদ্বৃত্ত বাসি মড়ার মতো,\r\nএক সুর।\r\nবড়ো প্রত্যাশিত ।\r\nআমি নয়, আমরাও নয় – ওরা।', '2021-02-25', 'surya'),
(88, 'আমি নয় – ওরা', 'অমিতাভ বাগ', 'New Series', 'সেই এক সুর – বড় একঘেয়ে – মিনমিনে এক সুর।\r\nঅথবা সবলে উৎপাটিত কোনো –\r\nইতিহাসের পাতা খুঁড়ে খুঁড়ে বিবর্ণ মমির মতো।\r\nএক – অবিনশ্বর – অদ্বিতীয় – অমোঘ।\r\nপচা – দীর্ণ – দুস্থ – দিনের পর দিনের উদ্বৃত্ত বাসি মড়ার মতো,\r\nএক সুর।\r\nবড়ো প্রত্যাশিত ।\r\nআমি নয়, আমরাও নয় – ওরা।', '2021-02-25', 'surya'),
(89, 'অদিতি কোনও ', 'অতুলপ্রসাদ সেন', 'New Series', 'হও ধরমেতে ধীর হও করমেতে বীর,\r\nহও উন্নত শির, নাহি ভয় |\r\nভুলি ভেদাভেদ জ্ঞান, হও সবে আগুয়ান,\r\nসাথে আছে ভগবান,—হবে জয় |\r\nনানা ভাষা, নানা মত, নানা পরিধান,\r\nবিবিধের মাঝে দেখ মিলন মহান্ ;\r\nদেখিয়া ভারেতে মহা-জাতির উত্থান—জগজন মানিবে বিস্ময়!\r\nতেত্রিশ কোটি মোরা নহি কভু ক্ষীণ,\r\nহতে পারি দীন, তবু নহি মোরা হীন!\r\nভারতে জনম, পুনঃ আসিবে সুদিন—ঐ দেখ প্রভাত-উদয়!\r\nন্যায় বিরাজিত যাদের করে, বিঘ্ন পরাজিত তাদের শরে ;\r\nসাম্য কভু নাহি স্বার্থে ডরে—সত্যের নাহি পরাজয় |', '2021-02-26', ''),
(90, 'গোপনতা ', 'অরুণ মিত্র', 'New Series', 'নানা গোপনতার মধ্যে আমি বাস করি,\r\n\r\nআমার পায়ের আঙুলে রেগে নুড়ি বাজলে আমি শুনি ঝর্ণা\r\n\r\nসে-আওয়াজ কি আর কারো কাছে পৌঁছয়?\r\n\r\nএকটা ঝিঁঝির ডাক যেই ওঠে সারা বন অন্ধকারে দুলতে থাকে', '2021-02-26', 'surya'),
(92, 'wikipedia', 'অমিতাভ বাগ', 'New Series', 'asasasa', '2021-02-28', 'Suryabrata  Das'),
(93, 'zzzzzz', 'অমিতাভ বাগ', 'New Series', '446456', '2021-02-28', 'Suryabrata  Das'),
(94, 'zzzzzz', 'অমিতাভ বাগ', 'New Series', '446456', '2021-02-28', 'Suryabrata  Das'),
(95, 'An Approach for Security of Text by Steganography', 'অমিতাভ বাগ', 'Kandari', 'asafcaf', '2021-02-28', 'Suryabrata  Das'),
(96, 'bnb', 'অমিতাভ বাগ', 'Kandari', 'ssfsffsfsSfffF', '2021-02-28', 'Suryabrata  Das'),
(104, 'aaa', 'wwww', 'kandari', 'qwerty', '2021-02-28', 'Suryabrata  Das'),
(105, 'aaa', 'wwww', 'kandari', 'qwerty', '2021-02-28', 'Suryabrata  Das'),
(106, 'aaa', 'wwww', 'kandari', 'qwerty', '2021-02-28', 'Suryabrata  Das'),
(107, 'qqq', 'ssss', 'Ahoron', 'qwertt', '2021-02-28', 'Suryabrata  Das'),
(108, 'qqq', 'eeee', 'Kandari', 'asddd', '2021-02-28', 'Suryabrata  Das'),
(109, 'aaa', 'rrr', 'Rupantor', 'ssss', '2021-02-28', 'Suryabrata  Das'),
(110, 'qqqq', 'aaaa', 'Pothikrit', 'qqqqqqqwwwww', '2021-02-28', 'surya'),
(111, 'sssss', 'sssss', 'Pothikrit', 'ssss', '2021-02-28', 'surya'),
(112, 'qqq', 'qqq', 'Pothikrit', 'qqqq', '2021-02-28', 'surya'),
(113, 'www', 'www', 'Pothikrit', 'zzzzz', '2021-02-28', 'surya'),
(114, 'fff', 'eee', 'Pothikrit', 'aaaaaa', '2021-02-28', 'surya'),
(115, 'www', 'qqq', 'Pothikrit', 'ddsdsddsds', '2021-02-28', 'surya'),
(116, 'qqq', 'www', 'Notundisha', 'qqqqqqq', '2021-02-28', 'surya'),
(117, 'eeeee', 'ddddd', 'Notundisha', 'asdff', '2021-02-28', ''),
(118, 'ffff', 'dddd', 'Notundisha', 'vvvvvvvvvvvvvvvvvvvvvvvv', '2021-02-28', 'surya'),
(119, 'sssfsffs', 'gggg', 'Notundisha', 'wwwwwwwwwwww', '2021-02-28', 'surya'),
(120, 'sssfsffs', 'gggg', 'Notundisha', 'wwwwwwwwwwww', '2021-02-28', 'surya'),
(121, 'sssfsffs', 'gggg', 'Notundisha', 'wwwwwwwwwwww', '2021-02-28', 'surya'),
(122, 'ffff', 'dddd', 'Notundisha', 'vvvvvvvvvvvvvvvvvvvvvvvv', '2021-02-28', ''),
(123, 'aaa', 'ffff', 'onnovubhan', 'dfdfdffdvvf\r\nd\r\n\r\nv', '2021-02-28', 'surya'),
(124, 'zZZ', 'sasss', 'Potibimbo', 'sdfccv\r\nxvvv\r\n\r\nvxv', '2021-02-28', 'surya'),
(125, 'zzz', 'zxzxzxxz', 'Potibimbo', 'xzzxzxz', '2021-02-28', 'surya'),
(126, 'dsdsdsds', 'ddddd', 'Protibimbo', 'dsddsd', '2021-02-28', 'surya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
