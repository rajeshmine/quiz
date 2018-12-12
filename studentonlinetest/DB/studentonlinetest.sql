-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 11:02 AM
-- Server version: 5.7.11-log
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentonlinetest`
--

-- --------------------------------------------------------

--
-- Table structure for table `collegenamedetails`
--

CREATE TABLE `collegenamedetails` (
  `UniqueId` int(11) NOT NULL,
  `InterviewDate` date NOT NULL,
  `CollegeName` text NOT NULL,
  `CStatus` varchar(10) NOT NULL DEFAULT 'Y',
  `CreatedBy` text NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `collegenamedetails`
--

INSERT INTO `collegenamedetails` (`UniqueId`, `InterviewDate`, `CollegeName`, `CStatus`, `CreatedBy`, `CreatedDate`) VALUES
(30, '2018-02-08', 'ACE', 'Y', 'Admin', '2018-02-15 04:25:34'),
(36, '2018-02-09', 'PMC', 'Y', 'Admin', '2018-02-09 05:29:03'),
(37, '2018-02-12', 'GCT', 'Y', 'Admin', '2018-02-14 09:20:26'),
(38, '2018-02-08', 'SIT', 'Y', 'Admin', '2018-02-08 09:12:57'),
(39, '2018-02-08', 'VIT', 'Y', 'Admin', '2018-02-08 09:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `coursedetails`
--

CREATE TABLE `coursedetails` (
  `degree` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `coursestatus` varchar(100) NOT NULL DEFAULT 'Y',
  `Uniqueid` int(11) NOT NULL,
  `Createdby` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coursedetails`
--

INSERT INTO `coursedetails` (`degree`, `course`, `createddate`, `coursestatus`, `Uniqueid`, `Createdby`) VALUES
('BE', 'Electronics and Communication Engineering', '2018-02-08 04:35:33', 'Y', 44, 'Admin'),
('BE', 'Biomedical Engineering', '2018-02-08 04:49:46', 'Y', 45, 'Admin'),
('BE', 'Computer Science and Engineering', '2018-02-08 04:49:55', 'Y', 46, 'Admin'),
('BE', 'Information Technology', '2018-02-08 04:50:05', 'Y', 47, 'Admin'),
('BE', 'Electrical and Electronics Engineering', '2018-02-08 04:50:46', 'Y', 48, 'Admin'),
('BTech', 'Information Technology', '2018-02-08 04:53:40', 'Y', 50, 'Admin'),
('BTech', 'Chemical Engineering', '2018-02-08 04:54:36', 'Y', 51, 'Admin'),
('BTech', 'Ceramic Technology', '2018-02-08 04:55:13', 'Y', 53, 'Admin'),
('BE', 'Mechanical Engineering', '2018-02-08 04:57:32', 'Y', 63, 'Admin'),
('BE', 'Civil Engineering', '2018-02-08 05:03:12', 'Y', 64, 'Admin'),
('BE', 'Aeronautical Engineering', '2018-02-08 05:03:30', 'Y', 65, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `fileupload`
--

CREATE TABLE `fileupload` (
  `s.No` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fileupload`
--

INSERT INTO `fileupload` (`s.No`, `name`, `email`) VALUES
(1, 'venkatesh', 'venki@gmail.com'),
(2, 'veeramani', 'veeramani@gmail.com'),
(3, 'rajesh\n\n\n\n', 'rajesh@gmail.com'),
(4, 'divya', 'divya@gmail.com'),
(5, 'SET_A', 'TECHNICAL'),
(6, 'SET_A', 'TECHNICAL'),
(7, 'SET_A', 'TECHNICAL'),
(8, 'SET_A', 'TECHNICAL'),
(9, 'SET_A', 'TECHNICAL'),
(10, 'SET_A', 'TECHNICAL'),
(11, 'SET_A', 'TECHNICAL'),
(12, 'SET_A', 'TECHNICAL'),
(13, 'SET_A', 'TECHNICAL'),
(14, 'SET_A', 'TECHNICAL'),
(15, 'SET_A', 'TECHNICAL'),
(16, 'SET_A', 'TECHNICAL'),
(17, 'SET_A', 'TECHNICAL'),
(18, 'SET_A', 'TECHNICAL');

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE `logindetails` (
  `UniqueId` int(11) NOT NULL,
  `UserId` varchar(25) NOT NULL,
  `Pwd` text NOT NULL,
  `Role` varchar(100) NOT NULL DEFAULT 'user',
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `MobileNo` varchar(20) NOT NULL,
  `UserName` varchar(500) NOT NULL,
  `user_status` varchar(50) NOT NULL DEFAULT 'Y',
  `logindate` date NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`UniqueId`, `UserId`, `Pwd`, `Role`, `CreatedDate`, `MobileNo`, `UserName`, `user_status`, `logindate`, `Email`) VALUES
(62, '070218144857 ', 'suresh0227', 'user', '2018-02-07 11:57:54', '9963352412', 'suresh', 'Y', '2018-02-07', 'suresh@gmail.com'),
(63, '070218145308 ', 'Divya0824', 'user', '2018-02-07 11:58:02', '9789636854', 'Divya', 'Y', '2018-02-07', 'divyabernet75@gmail.com'),
(64, '070218145442 ', 'Moses0208', 'user', '2018-02-07 11:13:05', '9009009001', 'Moses', 'Y', '2018-02-08', 'testmoses@gmail.com'),
(65, '1001', '1001', 'Admin', '2018-02-07 09:48:24', '9878787889', 'Admin', 'Y', '2018-02-07', 'admin@gmail.com'),
(66, '070218145603 ', 'joshua0205', 'user', '2018-02-07 11:38:26', '9098909890', 'joshua', 'Y', '2018-02-07', 'joshua12@gmail.com'),
(67, '111', '111', 'user', '2018-02-18 16:41:10', '9865876532', 'User', 'N', '2018-02-07', 'useer@gmail.com'),
(68, '070218173100 ', 'veera0520', 'user', '2018-05-11 08:57:11', '9887989898', 'veera', 'N', '2018-02-07', 'test@gmail.com'),
(69, '080218181235 ', 'Rajesh0220', 'user', '2018-02-18 16:38:34', '9791329930', 'Rajesh', 'Y', '2018-02-08', 'rajeshjas20296@gmail.com'),
(70, '080218181353 ', 'venkateshwaran0224', 'user', '2018-02-10 09:08:27', '9945576380', 'venkateshwaran', 'Y', '2018-02-08', 'hwi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `questiondetails`
--

CREATE TABLE `questiondetails` (
  `UniqueId` int(11) NOT NULL,
  `SetType` text NOT NULL,
  `TestType` text NOT NULL,
  `QuestionNo` int(11) NOT NULL,
  `QuestionDetails` text NOT NULL,
  `Option_A` text NOT NULL,
  `Option_B` text NOT NULL,
  `Option_C` text,
  `Option_D` text,
  `Option_E` text,
  `Answer` text NOT NULL,
  `CreatedBy` text NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `QStatus` varchar(5) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questiondetails`
--

INSERT INTO `questiondetails` (`UniqueId`, `SetType`, `TestType`, `QuestionNo`, `QuestionDetails`, `Option_A`, `Option_B`, `Option_C`, `Option_D`, `Option_E`, `Answer`, `CreatedBy`, `CreatedDate`, `QStatus`) VALUES
(1, 'SET_A', 'APTITUDE', 1, 'ABOMINATE', 'loathe', 'despise ', 'adore ', 'abhor ', 'attach', 'C', 'Admin', '2018-02-03 05:45:19', 'Y'),
(2, 'SET_B', 'APTITUDE', 1, 'RECANT', 'entangle', 'rescue', 'fail', 'assert', 'predict', 'D', 'Admin', '2018-02-03 05:45:19', 'Y'),
(3, 'SET_A', 'APTITUDE', 2, 'OBSEQUIOUS', 'servile', 'first', 'fawning', 'supercilious', 'improper', 'D', 'Admin', '2018-02-03 05:45:19', 'Y'),
(4, 'SET_A', 'APTITUDE', 3, 'OROTUND', 'not resonant', 'not reddish', ' not eager', 'pompous', 'loud', 'A', 'Admin', '2018-02-03 05:45:19', 'Y'),
(5, 'SET_A', 'APTITUDE', 4, 'Luxuriant', 'Beautiful', 'Luxurious', 'Abundant', 'lovely', '', 'C', 'Admin', '2018-02-03 05:45:20', 'Y'),
(6, 'SET_A', 'APTITUDE', 5, 'Memorable', 'Memorial', 'worth remembering', 'mending', 'striking', '', 'B', 'Admin', '2018-02-03 05:45:20', 'Y'),
(7, 'SET_A', 'APTITUDE', 6, ' Pointing to Manju, Raju said, “The son of her only brother is the brother of my wife”. How is Manju related to Raju?', 'Mother’s sister', 'Grandmother', 'Mother-in-law', 'Sister of father-in-law', 'Maternal aunt', 'D', 'Admin', '2018-02-03 05:45:20', 'Y'),
(8, 'SET_A', 'APTITUDE', 7, 'Introducing a man to her husband, a woman said, “His brother’s father is the only son of my grandfather.” How is the woman related to this man?', 'Mother', 'Aunt', 'Sister', 'Daughter', 'Grandmother', 'C', 'Admin', '2018-02-03 05:45:20', 'Y'),
(9, 'SET_A', 'APTITUDE', 8, 'How is Radha’s mother’s mother’s daughter-in-law’s daughter related to Radha?', 'Sister', 'Mother', 'Cousin', 'Aunt', '', 'C', 'Admin', '2018-02-03 05:45:20', 'Y'),
(10, 'SET_A', 'APTITUDE', 9, 'How many small cubes will have only two faces coloured?', '12', '24', '16', '14', '', 'C', 'Admin', '2018-02-03 05:45:20', 'Y'),
(11, 'SET_A', 'APTITUDE', 10, 'How many small cubes have three faces coloured ?', '24', '20', '16', '8', '', 'D', 'Admin', '2018-02-03 05:45:20', 'Y'),
(12, 'SET_A', 'APTITUDE', 11, 'The difference between the local value and face value of 7 in the numeral 657903 is:\n', '0', '7896', '6993', '903', '', 'C', 'Admin', '2018-02-03 05:45:20', 'Y'),
(13, 'SET_A', 'APTITUDE', 12, 'The sum of three prime numbers is 100. If one of them exceeds another by 36, then one of the numbers is:\n', '7', '29', '41', '67', '', 'D', 'Admin', '2018-02-03 05:45:20', 'Y'),
(14, 'SET_A', 'APTITUDE', 13, 'Anitha had 80 currency notes in all, some of which are of  Rs 95 denomination and the remaining of Rs\n    45 denomination. The total amount of all these currency notes was Rs. 4000. How much amount (in Rs)\n    did she have in the denomination of Rs 45?', '3500', '72', '2000psycopg2', 'None of these', '', 'B', 'Admin', '2018-02-03 05:45:20', 'Y'),
(15, 'SET_A', 'APTITUDE', 14, 'How many 1/8s are there in 37 1/2?', '300', '400', '500', 'Can’t be determined', '', 'A', 'Admin', '2018-02-03 05:45:20', 'Y'),
(16, 'SET_A', 'APTITUDE', 15, 'How many pieces of 0.85 metres can be cut from a rod 42.5 metres long?', '30', '40', '60', 'None of these', '', 'D', 'Admin', '2018-02-03 05:45:20', 'Y'),
(17, 'SET_B', 'APTITUDE', 2, 'UPBRAID', 'defer', 'vacillate', 'sever', 'conjoin', 'laud', 'E', 'Admin', '2018-02-03 05:45:20', 'Y'),
(18, 'SET_B', 'APTITUDE', 3, 'PLENITUDE ', 'luxury', 'magnificence', 'richness', 'contentment', 'scarcity', 'E', 'Admin', '2018-02-03 05:45:20', 'Y'),
(19, 'SET_B', 'APTITUDE', 4, 'Officious', 'concerning office', 'legal', 'interfering', 'permissible', NULL, 'C', 'Admin', '2018-02-03 05:54:21', 'Y'),
(47, 'SET_A', 'TECHNICAL', 1, ' Inside which HTML element do we put the JavaScript?', '<script></script>', '<javascript></javascript>', '<scripting></scripting>', '<js></js>', '', ' A\n', 'Admin', '2018-02-07 08:38:43', 'Y'),
(48, 'SET_A', 'TECHNICAL', 2, 'What is the correct JavaScript syntax to change the content of the HTML element below?\n<p id="demo">This is a demonstration.</p>\n', 'document.getElement("p").innerHTML = "Hello World!";', '#demo.innerHTML = "Hello World!";', 'document.getElementByName("p").innerHTML = "Hello World!";', 'document.getElementById("demo").innerHTML = "Hello World!";', '', 'D', 'Admin', '2018-02-07 07:25:16', 'Y'),
(49, 'SET_A', 'TECHNICAL', 3, 'What is the output of "10"+20+30 in JavaScript?', '102030', '60', '1050', '160', '', 'A', 'Admin', '2018-02-07 07:25:16', 'Y'),
(50, 'SET_A', 'TECHNICAL', 4, 'How do you write "Hello World" in an alert box?', 'msgBox("Hello World");', 'alertBox("Hello World");', 'msg("Hello World");', 'alert("Hello World");', '', 'D', 'Admin', '2018-02-07 07:25:16', 'Y'),
(51, 'SET_A', 'TECHNICAL', 5, 'What is the correct HTML for referring to an external style sheet?', '<stylesheet>mystyle.css</stylesheet>', '<link rel="stylesheet" type="text/css" href="mystyle.css">', '<style src="mystyle.css"></style>', '<link src="mystyle.css">', '', 'B', 'Admin', '2018-02-07 07:29:56', 'Y'),
(52, 'SET_A', 'TECHNICAL', 6, 'Consider the following HTML/CSS code:\r\n<style type="text/css">                                                                                                     .text span { color: red;}                                                                                                         span {color:blue}                                                                                                                      h1{color: green}\r\nh1 span {color: black;}                                                                                                                      p span{color: yellow;}                                                                                                                    </style>                                                                                                                        <h1><p><span class="text"><span>Text</span></span></h1>\r\nWhat color will be applied to the text?', 'Red', 'Yellow', 'Green', 'Blue', '', 'A', 'Admin', '2018-02-07 08:20:13', 'Y'),
(53, 'SET_A', 'TECHNICAL', 7, ' Which is the correct CSS syntax?', 'body:color=black;', 'body {color: black;}', '{body;color:black;}', '{body:color=black;}', '', 'B', 'Admin', '2018-02-07 07:25:16', 'Y'),
(54, 'SET_A', 'TECHNICAL', 8, 'Who is making the Web standards?', 'Microsoft', 'Mozilla', 'Google', 'The World Wide Web Consortium', '', 'D', 'Admin', '2018-02-07 07:25:16', 'Y'),
(55, 'SET_A', 'TECHNICAL', 9, 'How do you add a background color for all <h1> elements?', 'h1 {background-color:#FFFFFF;}', 'all.h1 {background-color:#FFFFFF;}', 'h1.all {background-color:#FFFFFF;}', '.h1{ background-color:#FFFFFF;}', '', 'A', 'Admin', '2018-02-07 07:25:16', 'Y'),
(56, 'SET_A', 'TECHNICAL', 10, 'Which HTML attribute specifies an alternate text for an image, if the image cannot be displayed?', 'title', 'src', 'alt', 'long', '', 'C', 'Admin', '2018-02-07 07:25:16', 'Y'),
(57, 'SET_A', 'TECHNICAL', 11, ' In HTML, which attribute is used to specify that an input field must be filled out?', 'formvalidate', 'validate', 'required', 'placeholder ', '', 'C', 'Admin', '2018-02-07 08:37:06', 'Y'),
(58, 'SET_A', 'TECHNICAL', 12, 'Can you use this() and super() both in a constructor?', 'No', 'Yes', 'Both can be used', 'None can be used ', '', ' A', 'Admin', '2018-02-07 08:37:06', 'Y'),
(59, 'SET_A', 'TECHNICAL', 13, 'class HappyGarbage01 \n{ \n    public static void main(String args[]) \n    {\n        HappyGarbage01 h = new HappyGarbage01(); \n        h.methodA(); /* Line 6 */\n    } \n    Object methodA() \n    {\n        Object obj1 = new Object(); \n        Object [] obj2 = new Object[1]; \n        obj2[0] = obj1; \n        obj1 = null; \n        return obj2[0]; \n    } \n}                                                                                                                                                 Where will be the most chance of the garbage collector being invoked?', 'After line 9', 'After line 10', 'After line 11', 'Garbage collector never invoked in methodA()', '', 'D', 'Admin', '2018-02-07 08:37:06', 'Y'),
(60, 'SET_A', 'TECHNICAL', 14, ' You need to store elements in a collection that guarantees that no duplicates are stored and all elements can be accessed in natural order. Which interface provides that capability?', ' java.util.Map', 'java.util.Set', ' java.util.List', ' java.util.Collection', '', 'B', 'Admin', '2018-02-07 08:37:06', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `store_image`
--

CREATE TABLE `store_image` (
  `S.No` int(11) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store_image`
--

INSERT INTO `store_image` (`S.No`, `image`) VALUES
(30, 0x6861692e706e67),
(31, 0x53637265656e73686f7420283331292e706e67),
(32, 0x6861692e706e67),
(33, 0x53637265656e73686f7420283338292e706e67),
(34, 0x53637265656e73686f7420283338292e706e67),
(35, 0x53637265656e73686f7420283338292e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `testtimingdetails`
--

CREATE TABLE `testtimingdetails` (
  `UniqueId` int(11) NOT NULL,
  `AssignDate` date NOT NULL,
  `BatchNo` int(11) DEFAULT NULL,
  `TestType` text NOT NULL,
  `MinTime` int(11) NOT NULL,
  `SET_A` text NOT NULL,
  `SET_B` text,
  `SET_C` text,
  `SET_D` text,
  `SET_E` text,
  `CreatedBy` text NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testtimingdetails`
--

INSERT INTO `testtimingdetails` (`UniqueId`, `AssignDate`, `BatchNo`, `TestType`, `MinTime`, `SET_A`, `SET_B`, `SET_C`, `SET_D`, `SET_E`, `CreatedBy`, `CreatedDate`) VALUES
(9, '2018-02-08', 1, 'TECHNICAL', 30, 'Y', 'N', 'N', 'N', 'N', 'Admin', '2018-02-08 12:41:39'),
(11, '2018-02-09', 1, 'APTITUDE', 30, 'Y', 'Y', 'N', 'N', 'N', 'Admin', '2018-02-09 05:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `userregistrationdetails`
--

CREATE TABLE `userregistrationdetails` (
  `UniqueId` int(11) NOT NULL,
  `UserId` varchar(25) NOT NULL,
  `Name` varchar(5000) NOT NULL,
  `DOB` date NOT NULL,
  `MobileNo` varchar(20) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `CollegeName` varchar(5000) NOT NULL,
  `Degree` varchar(5000) NOT NULL,
  `DeptName` varchar(500) NOT NULL,
  `Gender` text NOT NULL,
  `RegisterDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userregistrationdetails`
--

INSERT INTO `userregistrationdetails` (`UniqueId`, `UserId`, `Name`, `DOB`, `MobileNo`, `EmailId`, `CollegeName`, `Degree`, `DeptName`, `Gender`, `RegisterDate`) VALUES
(18, '020218104007 ', 'venkatesh', '2018-02-24', '9943372380', 'v@gmail.com', 'dfab', 'dfb', 'sdfb', 'male', '0000-00-00'),
(19, '020218104424 ', 'dzbh', '2018-02-24', '8098265414', 'venki@gmail.com', 'sdf', 'df', 'df', 'male', '0000-00-00'),
(20, '020218104736 ', 'sdfg', '2018-02-24', '9047651408', 'dfb@gmail.com', 'sdfG', 'dfb', 'dfbZ', 'male', '0000-00-00'),
(21, '020218105058 ', 'sb', '2018-02-24', '9943352620', 'bg@gmail.com', 'sdgv', 'dfb', 'dfb', 'male', '0000-00-00'),
(22, '020218105331 ', 'dfz', '2018-02-24', '9934472380', 'nh@gmail.com', 'df', 'dfzb', 'dfzb', 'male', '0000-00-00'),
(23, '020218105440 ', 'venkateshwaran', '2018-02-24', '9943352680', 'kani@gmail.com', 'fgn', 'nz', 'fgzn', 'male', '0000-00-00'),
(24, '020218110001 ', 'divi', '2018-02-15', '7686756756', 'fgfgdf@gmail.com', 'tyhtfyh', 'fdsdftd', 'xcfgxdfgxd', 'female', '0000-00-00'),
(25, '020218110512 ', 'drtdr', '2017-03-09', '9878964563', 'dg@gmail.com', 'sdfsdf', 'dfsdf', 'dsfsd', 'male', '0000-00-00'),
(35, '020218180448 ', 'sairam', '2005-03-17', '9944948032', 'sairam.iyer95@gmail.com', 'GCEB', 'BE', 'CSE', 'male', '0000-00-00'),
(36, '020218180457 ', 'Ashok', '1996-09-12', '9952102045', 'ashoksennan@gmail.com', 'Adhiyamaan College of Engineering', 'Btech', 'IT', 'male', '0000-00-00'),
(37, '020218180513 ', 'Divya', '2018-02-16', '9898989898', 'divyabernet23@gmail.coom', 'ACE', 'Btech', 'IT', 'female', '0000-00-00'),
(38, '020218180515 ', 'iniyan', '2018-02-03', '9894591650', 'iniyan455@gmail.com', 'adhiyamaan', 'B.tech', 'It', 'male', '0000-00-00'),
(39, '020218180516 ', 'Priyadharshini K', '1996-02-09', '8608879972', 'kpriyadharshinicsepmc@gmail.com', 'PMC TECH, hosur', 'BE', 'CSE', 'female', '0000-00-00'),
(40, '020218180544 ', 'Thangamani', '1993-09-23', '8012873006', 'mani@gmail.com', 'MGR', 'BCA', 'Computer science', 'male', '0000-00-00'),
(42, '020218180700 ', 'Murugan', '2018-02-02', '8754137753', 'murugan@prematix.com', 'SNCET', 'B.E', 'CSE', 'male', '0000-00-00'),
(43, '020218180709 ', 'NagArjun', '2007-09-02', '9843760440', 'arjunreddy129597@gmail.com', 'ACE', 'B.Tech', 'IT', 'male', '0000-00-00'),
(44, '020218182134 ', 'dads', '2018-02-15', '9878761234', 'jsdfhg@gmail.com', 'hgfgf', 'dsfsdf', 'sdfssdf', 'male', '0000-00-00'),
(45, '020218182723 ', 'kavi', '2009-02-27', '9943378560', 'kavi@gmail.com', 'ase', 'btech', 'it', 'female', '0000-00-00'),
(46, '030218160927 ', 'Thilak', '2018-02-03', '9362311570', 'loghith@gmail.com', 'Prematix', 'BE', 'CSE', 'male', '0000-00-00'),
(47, '030218163006 ', 'Selvam', '1985-08-30', '9442603558', '', '', '', '', 'male', '0000-00-00'),
(48, '030218163201 ', 'selva', '2018-02-03', '9344552264', 'selvam@gamil.com', '', '', '', 'male', '0000-00-00'),
(49, '030218164452 ', 'DivyaV', '2018-02-20', '9789636855', 'divi@gmail.com', 'ACE', 'BTECH', 'IT', 'female', '0000-00-00'),
(50, '030218170124 ', 'shashanl', '2016-06-24', '9842603558', 'shashank@gmail.com', 'VIT Vellore Ins Of Tech', 'B.Tech', 'CSE', 'male', '0000-00-00'),
(53, '060218144937 ', '11111', '2018-02-06', '1234567809', 'ss@gg.com', '1', '1', '1', 'male', '0000-00-00'),
(55, '070218142055 ', 'venkatesh', '2018-02-21', '9943374174', 'ghdg@gmail.com', 'ACE', 'BE', 'ECE', 'male', '2018-02-07'),
(56, '070218142305 ', 'venkateshwaran', '2018-02-25', '9943372360', 'venkateshbtech24@gmail.com', 'ACE', 'BE', 'ECE', 'male', '2018-02-07'),
(57, '070218144125 ', 'bala ', '2018-02-25', '9943356820', 'bala@gmail.com', 'ACE', 'ME', 'IT', 'male', '2018-02-07'),
(58, '070218144318 ', 'lokesh', '2018-02-28', '9933562540', 'lokal@gmail.com', 'ACE', 'ME', 'IT', 'male', '2018-02-07'),
(59, '070218144857 ', 'suresh', '2018-02-27', '9963352412', 'suresh@gmail.com', 'ACE', 'ME', 'IT', 'male', '2018-02-07'),
(60, '070218145308 ', 'Divya', '1996-08-24', '9789636854', 'divyabernet75@gmail.com', 'ACE', 'BE', 'CS', 'female', '2018-02-07'),
(61, '070218145442 ', 'Moses', '2018-02-08', '9009009001', 'testmoses@gmail.com', 'ACE', 'BE', 'CS', 'male', '2018-02-07'),
(62, '070218145603 ', 'joshua', '2018-02-05', '9098909890', 'joshua12@gmail.com', 'ACE', 'BE', 'CS', 'male', '2018-02-07'),
(63, '070218173100 ', 'veera', '1996-05-20', '9887989898', 'test@gmail.com', 'ACE', 'BTech', 'IT', 'male', '2018-02-07'),
(64, '080218181235 ', 'Rajesh', '1996-02-20', '9791329930', 'rajeshjas20296@gmail.com', 'PMC', 'BE', 'Computer Science and Engineering', 'male', '2018-02-08'),
(65, '080218181353 ', 'venkateshwaran', '2018-02-24', '9945576380', 'hwi@gmail.com', 'VIT', 'BTech', 'Information Technology', 'male', '2018-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `usertestresults`
--

CREATE TABLE `usertestresults` (
  `UniqueId` int(11) NOT NULL,
  `UserId` text NOT NULL,
  `UserName` text NOT NULL,
  `DeptName` text NOT NULL,
  `SetType` text NOT NULL,
  `TestType` text NOT NULL,
  `TotalQuestion` int(11) NOT NULL,
  `TotalAttend` int(11) NOT NULL,
  `TotalResult` int(11) NOT NULL,
  `Date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usertestresults`
--

INSERT INTO `usertestresults` (`UniqueId`, `UserId`, `UserName`, `DeptName`, `SetType`, `TestType`, `TotalQuestion`, `TotalAttend`, `TotalResult`, `Date`) VALUES
(14, '080218181235 ', 'Rajesh', 'Computer Science and Engineering', 'SET_A', 'APTITUDE', 15, 15, 7, '2018-02-08'),
(15, '080218181235 ', 'Rajesh', 'Computer Science and Engineering', 'SET_A', 'TECHNICAL', 14, 14, 4, '2018-02-08'),
(16, '080218181353 ', 'venkateshwaran', 'Information Technology', 'SET_A', 'APTITUDE', 15, 15, 2, '2018-02-08'),
(17, '080218181353 ', 'venkateshwaran', 'Information Technology', 'SET_A', 'TECHNICAL', 14, 14, 3, '2018-02-08'),
(18, '111', 'User', '', 'SET_A', 'APTITUDE', 15, 0, 0, '2018-02-09'),
(19, '111', 'User', '', 'SET_A', 'TECHNICAL', 14, 0, 0, '2018-02-09'),
(20, '111', 'User', '', 'SET_A', 'APTITUDE', 15, 0, 0, '2018-02-10'),
(21, '111', 'User', '', 'SET_A', 'APTITUDE', 15, 15, 4, '2018-02-13'),
(22, '111', 'User', '', 'SET_A', 'TECHNICAL', 14, 4, 0, '2018-02-13'),
(23, '111', 'User', '', 'SET_A', 'APTITUDE', 15, 0, 0, '2018-02-14'),
(24, '111', 'User', '', 'SET_A', 'TECHNICAL', 14, 0, 0, '2018-02-14'),
(25, '111', 'User', '', 'SET_A', 'APTITUDE', 15, 11, 4, '2018-02-14'),
(26, '111', 'User', '', 'SET_A', 'TECHNICAL', 14, 14, 7, '2018-02-14'),
(27, '111', 'User', '', 'SET_A', 'APTITUDE', 15, 0, 0, '2018-02-18'),
(28, '111', 'User', '', 'SET_A', 'TECHNICAL', 14, 10, 5, '2018-02-18'),
(29, '070218173100 ', 'veera', 'IT', 'SET_A', 'APTITUDE', 15, 8, 2, '2018-05-11'),
(30, '070218173100 ', 'veera', 'IT', 'SET_A', 'TECHNICAL', 14, 2, 0, '2018-05-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collegenamedetails`
--
ALTER TABLE `collegenamedetails`
  ADD PRIMARY KEY (`UniqueId`);

--
-- Indexes for table `coursedetails`
--
ALTER TABLE `coursedetails`
  ADD PRIMARY KEY (`Uniqueid`);

--
-- Indexes for table `fileupload`
--
ALTER TABLE `fileupload`
  ADD PRIMARY KEY (`s.No`);

--
-- Indexes for table `logindetails`
--
ALTER TABLE `logindetails`
  ADD PRIMARY KEY (`UniqueId`);

--
-- Indexes for table `questiondetails`
--
ALTER TABLE `questiondetails`
  ADD PRIMARY KEY (`UniqueId`);

--
-- Indexes for table `store_image`
--
ALTER TABLE `store_image`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `testtimingdetails`
--
ALTER TABLE `testtimingdetails`
  ADD PRIMARY KEY (`UniqueId`);

--
-- Indexes for table `userregistrationdetails`
--
ALTER TABLE `userregistrationdetails`
  ADD PRIMARY KEY (`UniqueId`);

--
-- Indexes for table `usertestresults`
--
ALTER TABLE `usertestresults`
  ADD PRIMARY KEY (`UniqueId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collegenamedetails`
--
ALTER TABLE `collegenamedetails`
  MODIFY `UniqueId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `coursedetails`
--
ALTER TABLE `coursedetails`
  MODIFY `Uniqueid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `fileupload`
--
ALTER TABLE `fileupload`
  MODIFY `s.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `logindetails`
--
ALTER TABLE `logindetails`
  MODIFY `UniqueId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `questiondetails`
--
ALTER TABLE `questiondetails`
  MODIFY `UniqueId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `store_image`
--
ALTER TABLE `store_image`
  MODIFY `S.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `testtimingdetails`
--
ALTER TABLE `testtimingdetails`
  MODIFY `UniqueId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `userregistrationdetails`
--
ALTER TABLE `userregistrationdetails`
  MODIFY `UniqueId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `usertestresults`
--
ALTER TABLE `usertestresults`
  MODIFY `UniqueId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
