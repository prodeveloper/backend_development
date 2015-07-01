CREATE TABLE `users` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL DEFAULT '',
 `password` varchar(255) NOT NULL DEFAULT '',
 `email` varchar(255) NOT NULL DEFAULT '',
 `created` date NOT NULL DEFAULT '0000-00-00',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
