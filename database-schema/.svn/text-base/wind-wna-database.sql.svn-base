
SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for areas
-- ----------------------------
DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `region_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(40) NOT NULL DEFAULT '',
  `ip_start` int(10) NOT NULL DEFAULT '0',
  `ip_end` int(10) NOT NULL DEFAULT '0',
  `info` text,
  PRIMARY KEY (`id`),
  KEY `region_id` (`region_id`),
  KEY `name` (`name`),
  KEY `ip_start` (`ip_start`),
  KEY `ip_end` (`ip_end`)
) ENGINE=MyISAM AUTO_INCREMENT=156 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for communities
-- ----------------------------
DROP TABLE IF EXISTS `communities`;
CREATE TABLE `communities` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `windURL` varchar(255) DEFAULT NULL,
  `TOS` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `dnstld` varchar(255) DEFAULT NULL,
  `ns1` int(10) DEFAULT NULL,
  `ns2` int(10) DEFAULT NULL,
  `central_node` int(10) DEFAULT NULL,
  `admins` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `dnstld` (`dnstld`),
  UNIQUE KEY `fullname` (`fullname`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for dns_nameservers
-- ----------------------------
DROP TABLE IF EXISTS `dns_nameservers`;
CREATE TABLE `dns_nameservers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `node_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` enum('ns0','ns1','ns2','ns3') NOT NULL DEFAULT 'ns0',
  `ip` int(10) NOT NULL DEFAULT '0',
  `status` enum('waiting','active','pending','rejected','invalid') NOT NULL DEFAULT 'waiting',
  `delete_req` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_keys` (`name`,`node_id`),
  KEY `date_in` (`date_in`),
  KEY `node_id` (`node_id`),
  KEY `ip` (`ip`),
  KEY `status` (`status`),
  KEY `delete_req` (`delete_req`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for dns_zones
-- ----------------------------
DROP TABLE IF EXISTS `dns_zones`;
CREATE TABLE `dns_zones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` enum('forward','reverse') NOT NULL DEFAULT 'forward',
  `name` varchar(30) NOT NULL DEFAULT '',
  `node_id` int(10) unsigned DEFAULT '0',
  `status` enum('waiting','active','pending','rejected','invalid') NOT NULL DEFAULT 'waiting',
  `info` text,
  `delete_req` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_keys` (`name`,`type`),
  KEY `type` (`type`),
  KEY `date_in` (`date_in`),
  KEY `node_id` (`node_id`),
  KEY `status` (`status`),
  KEY `delete_req` (`delete_req`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for dns_zones_nameservers
-- ----------------------------
DROP TABLE IF EXISTS `dns_zones_nameservers`;
CREATE TABLE `dns_zones_nameservers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `zone_id` int(10) unsigned NOT NULL DEFAULT '0',
  `nameserver_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_keys` (`zone_id`,`nameserver_id`),
  KEY `nameserver_id` (`nameserver_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ip_addresses
-- ----------------------------
DROP TABLE IF EXISTS `ip_addresses`;
CREATE TABLE `ip_addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hostname` varchar(50) NOT NULL DEFAULT '',
  `ip` int(10) NOT NULL DEFAULT '0',
  `mac` varchar(17) DEFAULT NULL,
  `node_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` enum('router','server','pc','wireless-bridge','voip','camera','other') NOT NULL DEFAULT 'pc',
  `always_on` enum('Y','N') NOT NULL DEFAULT 'N',
  `info` text,
  PRIMARY KEY (`id`),
  KEY `ip` (`ip`),
  KEY `node_id` (`node_id`),
  KEY `hostname` (`hostname`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ip_ranges
-- ----------------------------
DROP TABLE IF EXISTS `ip_ranges`;
CREATE TABLE `ip_ranges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `node_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_start` int(10) NOT NULL DEFAULT '0',
  `ip_end` int(10) NOT NULL DEFAULT '0',
  `status` enum('waiting','active','pending','rejected','invalid') NOT NULL DEFAULT 'waiting',
  `info` text,
  `delete_req` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_keys` (`node_id`,`ip_start`,`ip_end`),
  KEY `date_in` (`date_in`),
  KEY `ip_start` (`ip_start`),
  KEY `ip_end` (`ip_end`),
  KEY `status` (`status`),
  KEY `delete_req` (`delete_req`)
) ENGINE=MyISAM AUTO_INCREMENT=317 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for links
-- ----------------------------
DROP TABLE IF EXISTS `links`;
CREATE TABLE `links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `node_id` int(10) unsigned NOT NULL DEFAULT '0',
  `peer_node_id` int(10) unsigned DEFAULT NULL,
  `peer_ap_id` int(10) unsigned DEFAULT NULL,
  `type` enum('p2p','ap','client','hs') NOT NULL DEFAULT 'client',
  `ssid` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `protocol` enum('IEEE 802.11b','IEEE 802.11g','IEEE 802.11a','IEEE 802.11g-turbo','IEEE 802.11a-turbo','IEEE 802.11n','VPN','IEEE 802.3 (Ethernet)','other') CHARACTER SET utf8 DEFAULT NULL,
  `channel` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `security` enum('sec_inactive','sec_active') NOT NULL DEFAULT 'sec_inactive',
  `status` enum('active','inactive') CHARACTER SET utf8 NOT NULL DEFAULT 'active',
  `equipment` text CHARACTER SET utf8,
  `info` text CHARACTER SET utf8,
  `ip` int(10) NOT NULL,
  `hs_logged_in_msg` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1355 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for nodes
-- ----------------------------
DROP TABLE IF EXISTS `nodes`;
CREATE TABLE `nodes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(50) NOT NULL DEFAULT '',
  `name_ns` varchar(50) NOT NULL DEFAULT '',
  `area_id` int(10) unsigned DEFAULT '0',
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `elevation` int(10) unsigned DEFAULT '6',
  `info` text,
  `freeifs` enum('0','1','2','3','4','5','6','7') DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `ip` int(10) NOT NULL,
  `internetaccess` enum('Freespot AWMN','Hotspot WNA (roaming)','Hotspot (other)','Free access','N/A') DEFAULT 'N/A',
  `internetprovider` enum('ArNet.gr','Wind','Vivodi','OTE-Cosmote','On Telecoms','Net One','HOL-Vodafone','Forthnet','Cyta','N/A') DEFAULT 'N/A',
  `community_id` int(10) DEFAULT '1',
  `com_wind_id` int(10) DEFAULT NULL,
  `system_identity` varchar(255) DEFAULT NULL,
  `visibility_groups` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_keys` (`name_ns`),
  UNIQUE KEY `system_identity` (`system_identity`),
  KEY `community_id` (`community_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1076 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for nodes_services
-- ----------------------------
DROP TABLE IF EXISTS `nodes_services`;
CREATE TABLE `nodes_services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `node_id` int(10) unsigned NOT NULL DEFAULT '0',
  `service_id` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_id` int(10) unsigned DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `info` text,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `protocol` enum('tcp','udp') DEFAULT NULL,
  `port` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `date_in` (`date_in`),
  KEY `node_id` (`node_id`),
  KEY `service_id` (`service_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for photos
-- ----------------------------
DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `node_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` enum('galery','view') NOT NULL DEFAULT 'galery',
  `view_point` enum('N','NE','E','SE','S','SW','W','NW','PANORAMIC') DEFAULT NULL,
  `info` text,
  PRIMARY KEY (`id`),
  KEY `date_in` (`date_in`),
  KEY `node_id` (`node_id`),
  KEY `type` (`type`),
  KEY `view_point` (`view_point`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for regions
-- ----------------------------
DROP TABLE IF EXISTS `regions`;
CREATE TABLE `regions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL DEFAULT '',
  `ip_start` int(10) NOT NULL DEFAULT '0',
  `ip_end` int(10) NOT NULL DEFAULT '0',
  `dns_suffix` varchar(6) NOT NULL DEFAULT 'wn',
  `info` text,
  `image` varchar(255) DEFAULT NULL,
  `min_lat` float DEFAULT NULL,
  `min_long` float DEFAULT NULL,
  `max_lat` float DEFAULT NULL,
  `max_long` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `ip_start` (`ip_start`),
  KEY `ip_end` (`ip_end`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for rights
-- ----------------------------
DROP TABLE IF EXISTS `rights`;
CREATE TABLE `rights` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `type` enum('blocked','admin','ap-owner','hostmaster','cadmin') NOT NULL DEFAULT 'blocked',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_keys` (`type`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `protocol` enum('tcp','udp') DEFAULT NULL,
  `port` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `title` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for subnets
-- ----------------------------
DROP TABLE IF EXISTS `subnets`;
CREATE TABLE `subnets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `node_id` int(10) unsigned DEFAULT NULL,
  `ip_start` int(10) NOT NULL DEFAULT '0',
  `ip_end` int(10) NOT NULL DEFAULT '0',
  `type` enum('local','link','client') NOT NULL DEFAULT 'local',
  `link_id` int(10) unsigned DEFAULT NULL,
  `client_node_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `node_id` (`node_id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(40) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `info` text,
  `last_session` datetime DEFAULT NULL,
  `last_visit` datetime DEFAULT NULL,
  `status` enum('activated','pending') NOT NULL DEFAULT 'pending',
  `account_code` varchar(20) DEFAULT NULL,
  `language` varchar(30) DEFAULT NULL,
  `region` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`region`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `date_in` (`date_in`),
  KEY `password` (`password`),
  KEY `surname` (`surname`),
  KEY `name` (`name`),
  KEY `status` (`status`),
  KEY `region` (`region`)
) ENGINE=MyISAM AUTO_INCREMENT=291 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for users_nodes
-- ----------------------------
DROP TABLE IF EXISTS `users_nodes`;
CREATE TABLE `users_nodes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `node_id` int(10) unsigned NOT NULL DEFAULT '0',
  `owner` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_keys` (`node_id`,`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2905 DEFAULT CHARSET=latin1;
