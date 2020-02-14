-- Staff Apps
CREATE TABLE `staffapps` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `fname` varchar(50) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `timezone` varchar(50) NOT NULL,
  `reference` varchar(50) NOT NULL,
  `sent_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `steamid` varchar(30) DEFAULT NULL,
  `howlong` varchar(50) DEFAULT NULL,
  `why` text DEFAULT NULL,
  `what` text DEFAULT NULL,
  `microphone` varchar(30) DEFAULT NULL
);

-- Developer Apps
CREATE TABLE IF NOT EXISTS devapps (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    country VARCHAR(50) NOT NULL,
    timezone VARCHAR(50) NOT NULL,
    qualities TEXT NOT NULL,
    future TEXT NOT NULL,
    reference VARCHAR(50) NOT NULL,
    sent_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Supportcases
CREATE TABLE IF NOT EXISTS supportcases (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(30) NOT NULL,
  `steamid` varchar(30) NOT NULL,
  `discord` varchar(30) NOT NULL,
  `punishment` varchar(30) NOT NULL,
  `casesubject` varchar(30) DEFAULT NULL,
  `staffmember` varchar(30) NOT NULL,
  `reason` text DEFAULT NULL,
  `evidence` blob DEFAULT NULL
)

-- PASTE THE TEXT OVER THIS IN THE SQL IN PHPMYADMIN