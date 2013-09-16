DROP TABLE IF EXISTS `compiler`;
CREATE TABLE `compiler` (
  `cid` int(11) NOT NULL,
  `time` varchar(80) DEFAULT 'N/A',
  `tname` varchar(20) DEFAULT NULL,
  `problemid` varchar(5) DEFAULT NULL,
  `result` varchar(25) DEFAULT NULL,
  `runningtime` varchar(10) DEFAULT 'N/A',
  `memory` varchar(15) DEFAULT 'N/A',
  `language` varchar(10) DEFAULT 'N/A',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
UNLOCK TABLES;


DROP TABLE IF EXISTS `daemonstatus`;
CREATE TABLE `daemonstatus` (
  `running` varchar(2) DEFAULT 'n'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `online`;
CREATE TABLE `online` (
  `username` varchar(30) NOT NULL DEFAULT '' UNIQUE,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `queue`;
CREATE TABLE `queue` (
  `tname` varchar(20) DEFAULT NULL,
  `code` varchar(32000) DEFAULT NULL,
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(80) DEFAULT NULL,
  `problemid` varchar(5) DEFAULT NULL,
  `language` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

LOCK TABLES `queue` WRITE;
UNLOCK TABLES;


DROP TABLE IF EXISTS `score`;
CREATE TABLE `score` (
  `tname` varchar(20) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `solved` varchar(40) DEFAULT NULL,
  `sub` int(11) DEFAULT NULL,
  `timestmp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rank` int(11) DEFAULT NULL,
  PRIMARY KEY (`tname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `cid` int(11) NOT NULL DEFAULT '0',
  `result` varchar(200) NOT NULL DEFAULT 'WE ARE EXPERIENCING TECHNICAL DIFFICULTIES',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `tname` varchar(20) NOT NULL,
  `tpass` varchar(20) NOT NULL,
  `user1` varchar(25) DEFAULT NULL,
  `user2` varchar(25) DEFAULT NULL,
  `tid` int(15) DEFAULT NULL,
  PRIMARY KEY (`tname`),
  UNIQUE KEY `user1` (`user1`),
  UNIQUE KEY `tid` (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `fname` varchar(25) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `roll` varchar(20) DEFAULT NULL,
  `dep` varchar(20) DEFAULT NULL,
  `year` varchar(8) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) DEFAULT NULL,
  `tname` varchar(20) DEFAULT NULL,
  `hall` int(1) DEFAULT NULL,
  `room` int(3) DEFAULT NULL,
  `reg` varchar(1) DEFAULT NULL,
  `regno` int(6) DEFAULT NULL,
  `college` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
