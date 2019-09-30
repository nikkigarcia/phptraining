<?php
require_once('connect.php');
$sql = "SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";
SET time_zone = \"+00:00\";
USE `test`;
CREATE TABLE `content` (
  `id` int(4) UNSIGNED NOT NULL,
  `pagename` varchar(30) NOT NULL,
  `pagetitle` varchar(30) NOT NULL,
  `pagecontent` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `content` (`id`, `pagename`, `pagetitle`, `pagecontent`) VALUES
(1, 'Home', 'Welcome to our homepage, yo', '<p>This is page content</p>'),
(2, 'About', 'A little about us.', '<p>We started with a simple idea: ball bearings. And then we made more ball bearings. The End.</p>'),
(3, 'Contact', 'How to get ahold of us.', '<p> Phone:</p><p>559-555-1212</p><a href="mailto:bob@bob.com">Bob</a>'),
(4, 'features', 'Features', '<p>lorem</p>');


ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `content`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
  ";
  ?>