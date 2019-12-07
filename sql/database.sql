-- Staff Applications
CREATE TABLE 'staffapps' (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `timezone` varchar(50) NOT NULL,
  `qualities` text NOT NULL,
  `future` text NOT NULL,
  `reference` varchar(50) NOT NULL,
  `sent_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;