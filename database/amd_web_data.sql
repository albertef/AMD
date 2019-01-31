-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2019 at 05:13 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amd_web_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `amd_campus`
--

CREATE TABLE IF NOT EXISTS `amd_campus` (
  `campus_id` int(11) NOT NULL AUTO_INCREMENT,
  `campus_image` text NOT NULL,
  `campus_caption` text NOT NULL,
  PRIMARY KEY (`campus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `amd_campus`
--

INSERT INTO `amd_campus` (`campus_id`, `campus_image`, `campus_caption`) VALUES
(1, 'campus-img1.jpg', 'Life Drawing Studio'),
(2, 'campus-img2.jpg', 'Outdoor Campus');

-- --------------------------------------------------------

--
-- Table structure for table `amd_contact`
--

CREATE TABLE IF NOT EXISTS `amd_contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_address` text NOT NULL,
  `contact_corp` text NOT NULL,
  `contact_phone` text NOT NULL,
  `contact_email` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `amd_contact`
--

INSERT INTO `amd_contact` (`contact_id`, `contact_address`, `contact_corp`, `contact_phone`, `contact_email`) VALUES
(1, '<p>70/2671 A, Sai Padmam, Second floor</p>\r\n<p>Deshabhimani Junction, Kaloor</p>\r\n<p>Cochin - 682017</p>', '<p>1st  Floor, SJ Complex, Next to</p>\r\n<p>Kalyan silks, Railway Station Rd</p>\r\n<p>Parakkunnam, Palakkad</p>\r\n<p>Kerala - 678001</p>', '+91 7909106151', 'info@amdindia.edu.in');

-- --------------------------------------------------------

--
-- Table structure for table `amd_courses`
--

CREATE TABLE IF NOT EXISTS `amd_courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` text NOT NULL,
  `course_scope` text NOT NULL,
  `course_objective` text NOT NULL,
  `course_modules` text NOT NULL,
  `course_technology` text NOT NULL,
  `course_eligibility` text NOT NULL,
  `course_method` text NOT NULL,
  `course_image` text NOT NULL,
  `course_banner` text NOT NULL,
  `course_duration` varchar(250) NOT NULL,
  `course_session` varchar(250) NOT NULL,
  `course_color` varchar(250) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `amd_courses`
--

INSERT INTO `amd_courses` (`course_id`, `course_name`, `course_scope`, `course_objective`, `course_modules`, `course_technology`, `course_eligibility`, `course_method`, `course_image`, `course_banner`, `course_duration`, `course_session`, `course_color`) VALUES
(1, 'Advanced Certification Course in Advertising Design', 'This course is for those who aspire to become a Graphic Designer, Visual Designer, Advertising and Brand Identity Designer.', 'Purpose of this course is to develop Students Creativity Skill, Problem Solving Skill, Communication Design and Story Telling Skill, Message Generating Skill, Ideation Skill, Drawing Skill, Observation Skill, Natural Learning Skill, Visual Design Skill, Design Research and Analysis', '<li>Visual Design</li>\r\n<li>Communication Design</li>\r\n<li>Photography</li>\r\n    <li>Creative Thinking </li>\r\n    <li>Ideation </li>\r\n    <li>Design Research</li> \r\n    <li>Advertising </li>\r\n    <li>Copy Writing</li>\r\n    <li>Marketing Communication </li>\r\n    <li>Brand Identity Design</li>\r\n    <li>Marketing Collateral, (Logo, Brochure, Advertisement, \r\n        Poster, Package, Magazine, News Letter, \r\n        Outdoor Ads, Dangler, Digital Art) </li>\r\n    <li>Book and Newsletter </li>\r\n    <li>Typography </li>', '<li>King soft</li>\r\n<li>Light room</li>\r\n<li>Photoshop</li>\r\n<li>Illustrator</li>\r\n<li>In design </li>\r\n<li>Acrobat Distiller</li>\r\n<li>Adobe Bridge</li>', '<li>Plus Two Level and above</li>', 'Online and Offline, Process Oriented Training Method, Co-Operative, Case Study, Blended learning method. Level and above', 'advertising-design.png', 'course-main-banner1.jpg', '4', '2 hours practical class, 2 hours theory class.', 'green'),
(2, 'Advanced Certification Course in Web designing, UI & UX', 'This course is for those who aspire to become User Interface Engineer, UX Designer, Web Designer, Digital Product Designer, Web Designer, UI Designer, UI Engineer, Visual Communication Designer, Interaction Designer, Information Architecture Design, Front End Developer, HTML Programmer. UX Designer, Presentation Designer, Lay outing Artist and Web and Mobile App Designer.', 'Purpose of this course is to develop students Creativity Skill, Problem Solving Skill, Interaction Design Skill, Ideation Skill, Drawing Skill, Observation Skill, Natural Learning Skill, Visual Design Skill, Design Research and Analysis, UI Design Skills.', '<li>Visual Design</li>\r\n<li>Communication Design</li>\r\n<li>Photography</li>\r\n<li>Creative Thinking</li>\r\n<li>Ideation</li>\r\n<li>Design Research and Analysis</li>\r\n<li>The foundation of Product Design</li>\r\n<li>Interaction Design</li>\r\n<li>Human Computer Interaction (HCI)</li>\r\n<li>Information Architecture Design</li>\r\n<li>Task Analysis</li>\r\n<li>Task Flow Analysis</li>\r\n<li>Web UI Design</li>\r\n<li>App UI Design</li>\r\n<li>UI Animation</li>\r\n<li>Usability Analysis</li>\r\n<li>Usability Testing</li>\r\n<li>Basic of Agile – Sprint</li>\r\n<li>Foundation of UX Design</li>\r\n<li>Design Psychology</li>\r\n<li>Wireframing</li>\r\n<li>Prototyping</li>\r\n<li>Design for Touch Devices and Wearable''s</li>\r\n<li>Responsive Design</li>\r\n<li>Accessibility Analysis and Design</li>\r\n<li>Basic of Human Factor Engineering</li>\r\n<li>Web Hosting and Management</li>\r\n<li>IOT - Technology Walkthrough, Augmented Reality, Virtual \r\n      Reality, Sensors</li>\r\n<li>Power of Pattern – UI Patterns</li>', '<li>HTML5 - CSS3, JQuery Basics</li>\r\n<li>Bootstrap</li>\r\n<li>In vision</li>\r\n<li>XD</li>\r\n<li>Photoshop</li>\r\n<li>Lightroom</li>\r\n<li>King soft</li>\r\n<li>Dreamweaver</li>\r\n<li>Adobe Edge Animate</li>\r\n<li>Adobe Edge Inspect</li>\r\n<li>Adobe Edge Reflow</li>', '<li>Plus Two Level and above</li>', 'Online and Offline, Process Oriented Training Method, Co-Operative, Case Study, Blended learning method.', 'web-designing.png', 'course-main-banner2.jpg', '4', '2 hours practical class, 2 hours theory class.', 'pink'),
(3, 'Advanced Certification Course in 360 Digital Design ', 'This course is for those who aspire to become, Graphic Designer, Visual Designer, Advertising and Brand Identity Designer, Digital Product Designer, Web Designer, UI Designer, UI Engineer, Visual Communication Designer, Interaction Designer, Information Architecture Design, Front End Developer, HTML Programmer UX Designer, Presentation Designer, Lay outing Artist, Web and Mobile App Designer.', 'Purpose of this course is to develop students Creativity Skill, Problem Solving Skill, Communication Design and Story Telling Skill, Message Generating Skill, Ideation Skill, Drawing Skill, Observation Skill, Natural Learning Skill, Visual Design Skill, Design Research and Analysis, Develop the Ability of Design Thinking.', '<p>Session 1:</p>\r\n<li>Visual Design</li>\r\n<li>Communication Design</li>\r\n<li>Photography</li>\r\n<li>Creative Thinking </li>\r\n<li>Ideation </li>\r\n<li>Design Research </li>\r\n<li>Advertising </li>\r\n<li>Copy Writing</li>\r\n<li>Marketing Communication (Online and Offline)</li>\r\n<li>Brand Identity Design</li>\r\n<li>Marketing Collateral, (Logo, Brochure, Advertisement, Poster,\r\n      Package, Magazine, News Letter, Outdoor Ads, Dangler\r\n,     Digital Art) </li>\r\n<li>Book and Newsletter </li>\r\n<li>Typography </li>\r\n<p>Session 2:</p>\r\n<li>The foundation of Product Design</li>\r\n<li>Interaction Design</li>\r\n<li>Human Computer Interaction (HCI)</li>\r\n<li>Information Architecture Design</li>\r\n<li>Task Analysis</li>\r\n<li>Task Flow Analysis</li>\r\n<li>Web UI Design</li>\r\n<li>App UI Design</li>\r\n<li>UI Animation</li>\r\n<li>Usability Analysis</li>\r\n<li>Usability Testing</li>\r\n<li>Basic of Agile – Sprint.</li>\r\n<li>Foundation of UX Design</li>\r\n<li>Design Psychology</li>\r\n<li>Wireframing</li>\r\n<li>Prototyping</li>\r\n<li>Design for Touch Devices and Wearable''s</li>\r\n<li>Responsive Design</li>\r\n<li>Accessibility Analysis and Design</li>\r\n<li>Basic of Human Factor Engineering</li>\r\n<li>Web Hosting and Management.</li>\r\n<li>IOT  - Technology Walkthrough. Augmented Reality, \r\n      Virtual Reality, Sensors</li>\r\n<li>Power of Pattern – UI Patterns</li>', '<li>King soft</li>\r\n<li>Lightroom</li>\r\n<li>Photoshop</li>\r\n<li>Illustrator</li>\r\n<li>In design </li>\r\n<li>Acrobat Distiller</li>\r\n<li>Adobe Bridge</li>', '<li>Plus Two Level and above</li>', 'Online and Offline, Process Oriented Training Method, Co-Operative, Case Study, Blended learning method.', 'digital-design.png', 'course-main-banner3.jpg', '8', '2 hours practical class, 2 hours theory class.', 'blue'),
(4, 'Advanced Certification Course in Video Production', 'This course is for those who are inspired to become Video Blogger, Brand Managers, Video Story Teller, Online Video Production, TVC, Visual Communication Designer, Presentation Designer, Lay outing Artist, Corporate Video Creator, Documentary Director, TVC, Explainer Video Creator, Video Editor, Video Compositor, Video Album Direct, Video blogger and Corporate Video Content Manager.', 'Purpose of this course is to develop students Creativity Skill, Problem Solving Skill, Ideation Skill, Drawing Skill, Observation Skill, Natural Learning Skill, Visual Design Skill, Design Research and Analysis, Story Telling Skill, Editing Skill, Online Chanel Management.', '<li>Visual Design</li>\r\n<li>Communication Design</li>\r\n<li>Photography</li>\r\n<li>Creative Thinking</li>\r\n<li>Ideation</li>\r\n<li>Design Research and Analysis</li>\r\n<li>Lighting Basics</li>\r\n<li>Cinematic Story Telling</li>\r\n<li>Basic of Cinematography</li>\r\n<li>Basic of Direction</li>\r\n<li>Basic of Editing and Story Telling</li>\r\n<li>Basic of Design and Composition</li>\r\n<li>Basic of Sound editing</li>\r\n<li>Basic of Scriptwriting </li>\r\n<li>Pre Production Planning </li>\r\n<li>Corporate Video Creation / Documentary</li>\r\n<li>YouTube Chanel Management</li>\r\n<li>Composition and visual Semiotics</li>', '<li>King soft</li>\r\n<li>Premiere</li>\r\n<li>After Effects, Photoshop</li>\r\n<li>Audition, </li>\r\n<li>Lightroom</li>\r\n<li>Adobe Speed Grade</li>\r\n<li>Adobe Media Encoder</li>\r\n<li>Adobe Animate</li>', '<li>Plus Two Level and above</li>', 'Online and Offline, Process Oriented Training Method, Co-Operative, Case Study, Blended learning method.', 'video-production.png', '', '6', '2 hours practical class, 2 hours theory class.', 'yellow');

-- --------------------------------------------------------

--
-- Table structure for table `amd_faculty`
--

CREATE TABLE IF NOT EXISTS `amd_faculty` (
  `faculty_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_name` text NOT NULL,
  `faculty_qualification` text NOT NULL,
  `faculty_desc` text NOT NULL,
  `faculty_image` text NOT NULL,
  `faculty_facebook` text NOT NULL,
  `faculty_instagram` text NOT NULL,
  `faculty_twitter` text NOT NULL,
  `faculty_linkedin` text NOT NULL,
  `faculty_color` text NOT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `amd_faculty`
--

INSERT INTO `amd_faculty` (`faculty_id`, `faculty_name`, `faculty_qualification`, `faculty_desc`, `faculty_image`, `faculty_facebook`, `faculty_instagram`, `faculty_twitter`, `faculty_linkedin`, `faculty_color`) VALUES
(1, 'Philip Thomas', 'PG in Industrial Design, IDC, IIT Bombay', 'He has 30+ years of rich experience in Design, Development, Engineering, Research and allied fields working in industry as well as academics. For many years he was holding a key position in VIP Industries Ltd. Nasik. Under his leadership the company could establish its position as one of the top design driven companies in the country.', 'philip.jpg', 'philipthomas', 'philipthomas', 'philipthomas', 'philipthomas', 'pink'),
(2, 'S Balaram', 'FRSA (Fellow, Royal Society of Art, UK)\r\nIndustrial Designer & Author', 'Prof. S Balaram is an internationally reputed Designer and author with over four decades of teaching experience. Presently he is Founder Dean at D J Academy of Design and Emeritus professor of CEPT University, India. He had held top positions at the National institute of Design including Chairman, Education and Governor. He founded the Craft Development Institute in Kashmir for Government of India.Many of his designs were produced and acclaimed. ', 'balaram.jpg', 'sbalaram', 'sbalaram', 'sbalaram', '', 'blue'),
(3, 'Kanaka Ananth', 'M Des -Design Programme,  IIT Kanpur', 'Kanaka Ananth has been in the board of advisor of the CHILD magazine which is part of the transasia group, USA. She was a faculty for design at NID, Ahmedabad and has previously worked with companies such as Creative Educational aids Pvt Ltd (Delhi), Funskool India Ltd (Chennai), before taking up a teaching position with D.J. Academy of Design, Coimbatore.', 'kanaka.jpg', 'kanakaananth', '', 'kanakaananth', 'kanakaananth', 'green'),
(4, 'Kanaka Ananth1', 'M Des -Design Programme,  IIT Kanpur', 'Kanaka Ananth has been in the board of advisor of the CHILD magazine which is part of the transasia group, USA. She was a faculty for design at NID, Ahmedabad and has previously worked with companies such as Creative Educational aids Pvt Ltd (Delhi), Funskool India Ltd (Chennai), before taking up a teaching position with D.J. Academy of Design, Coimbatore.', 'kanaka.jpg', 'kanakaananth', '', 'kanakaananth', 'kanakaananth', 'green');

-- --------------------------------------------------------

--
-- Table structure for table `amd_placements`
--

CREATE TABLE IF NOT EXISTS `amd_placements` (
  `placements_id` int(11) NOT NULL AUTO_INCREMENT,
  `placements_image` text NOT NULL,
  `placements_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`placements_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `amd_placements`
--

INSERT INTO `amd_placements` (`placements_id`, `placements_image`, `placements_status`) VALUES
(1, 'img1.jpg', 1),
(2, 'img2.jpg', 1),
(3, 'img3.jpg', 1),
(4, 'img4.jpg', 1),
(5, 'img5.jpg', 1),
(6, 'img6.jpg', 1),
(7, 'img7.jpg', 1),
(8, 'img8.jpg', 1),
(9, 'img9.jpg', 1),
(10, 'img10.jpg', 1),
(11, 'img11.jpg', 1),
(12, 'img12.jpg', 1),
(13, 'img13.jpg', 1),
(14, 'img14.jpg', 1),
(15, 'img15.jpg', 1),
(16, 'img16.jpg', 1),
(17, 'img17.jpg', 1),
(18, 'img18.jpg', 1),
(19, 'img19.jpg', 1),
(20, 'img20.jpg', 1),
(21, 'img21.jpg', 1),
(22, 'img22.jpg', 1),
(23, 'img23.jpg', 1),
(24, 'img24.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `amd_powerhouse`
--

CREATE TABLE IF NOT EXISTS `amd_powerhouse` (
  `powerhouse_id` int(11) NOT NULL AUTO_INCREMENT,
  `powerhouse_name` text NOT NULL,
  `powerhouse_image` text NOT NULL,
  `powerhouse_designation` text NOT NULL,
  `powerhouse_desc` text NOT NULL,
  `powerhouse_color` text NOT NULL,
  PRIMARY KEY (`powerhouse_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `amd_powerhouse`
--

INSERT INTO `amd_powerhouse` (`powerhouse_id`, `powerhouse_name`, `powerhouse_image`, `powerhouse_designation`, `powerhouse_desc`, `powerhouse_color`) VALUES
(1, 'Philip Thomas', 'img2.jpg', 'Managing Directoor, AMD', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'pink'),
(2, 'Philip Thomas', 'img1.jpg', 'Managing Directoor, AMD', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'blue'),
(3, 'Philip Thomas', 'img2.jpg', 'Managing Directoor, AMD', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'green'),
(4, 'Philip Thomas', 'img1.jpg', 'Managing Directoor, AMD', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'pink');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
