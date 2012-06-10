-- MySQL dump 10.13  Distrib 5.1.36, for apple-darwin9.7.0 (i386)
--
-- Host: localhost    Database: limbo
-- ------------------------------------------------------
-- Server version	5.1.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `featuredProducts`
--

DROP TABLE IF EXISTS `featuredProducts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `featuredProducts` (
  `productid` int(11) NOT NULL,
  `weight` int(11) NOT NULL DEFAULT '1',
  `format` varchar(50) DEFAULT NULL,
  KEY `productid` (`productid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `featuredProducts`
--

LOCK TABLES `featuredProducts` WRITE;
/*!40000 ALTER TABLE `featuredProducts` DISABLE KEYS */;
INSERT INTO `featuredProducts` VALUES (14,1,'PC'),(3,2,'PC'),(23,3,'PC'),(30,4,'PC'),(12,5,'PC'),(1,6,'PC'),(2,1,'MAC'),(14,2,'MAC'),(17,3,'MAC'),(20,4,'MAC'),(22,5,'MAC'),(24,6,'MAC');
/*!40000 ALTER TABLE `featuredProducts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderItems`
--

DROP TABLE IF EXISTS `orderItems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderItems` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `priceEach` decimal(4,2) NOT NULL,
  PRIMARY KEY (`orderid`,`productid`),
  KEY `productid` (`productid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderItems`
--

LOCK TABLES `orderItems` WRITE;
/*!40000 ALTER TABLE `orderItems` DISABLE KEYS */;
/*!40000 ALTER TABLE `orderItems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `orderDate` datetime DEFAULT NULL,
  `shippedDate` datetime DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `comments` text,
  PRIMARY KEY (`orderid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `studio` varchar(50) DEFAULT '',
  `publisher` varchar(50) NOT NULL,
  `languages` varchar(100) DEFAULT NULL,
  `multiplayer` tinyint(4) DEFAULT '0',
  `description` text,
  `genre` varchar(50) NOT NULL,
  `releaseDate` datetime NOT NULL,
  `rating` smallint(6) NOT NULL DEFAULT '0',
  `price` decimal(4,2) NOT NULL DEFAULT '0.00',
  `discountPercent` int(11) DEFAULT '0',
  `vat` int(11) DEFAULT '23',
  `format` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Max Payne 3','Rockstar Studios','Rockstar Games','English, French, German, Italian',1,'For Max Payne, the tragedies that took his loved ones years ago are wounds that refuse to heal. No longer a cop, close to washed up and addicted to pain killers, Max takes a job in Sao Paulo, Brazil, protecting the family of wealthy real estate mogul Rodrigo Branco, in an effort to finally escape his troubled past.','Action','2012-06-01 00:00:00',0,'49.99',0,23,'PC'),(2,'Call of Duty: Modern Warfare 3','Infinity Ward','Activision','English, French, German, Italian,Spanish',1,'The best-selling first person action series of all-time returns with the epic sequel to multiple \"Game of the Year\" award winner, Call of Duty: Modern Warfare 2. In the world\'s darkest hour, are you willing to do what is necessary? Prepare yourself for a cinematic thrill-ride only Call of Duty can deliver.','Action','2011-09-08 00:00:00',9,'39.99',0,23,'PC,MAC'),(3,'Crysis ','Crytek','Electronic Arts','English, French, German, Italian,Spanish',1,'Adapt to Survive - An epic story thrusts players into an ever-changing environment, forcing them to adapt their tactics and approach to conquer battlefields ranging from newly frozen jungle to zero-gravity alien environments. Suit up!','Action','2007-09-13 00:00:00',9,'49.99',50,23,'PC'),(4,'Alan Wake','Remedy Entertainment','Remedy Entertainment','English, French, German, Italian',0,'When the wife of the best-selling writer Alan Wake disappears on their vacation, his search turns up pages from a thriller he doesn\'t even remember writing. A Dark Presence stalks the small town of Bright Falls, pushing Wake to the brink of sanity in his fight to unravel the mystery and save his love.','Action','2012-02-16 00:00:00',7,'44.99',0,23,'PC'),(5,'Counter-Strike: Source','Valve','Valve','English, French, German, Italian, Chinese',1,'THE NEXT INSTALLMENT OF THE WORLD\'S NUMBER1 ONLINE ACTION GAME Counter-Strike: Source blends Counter-Strike\'s award-winning teamplay action with the advanced technology of Source technology. Featuring state of the art graphics, all new sounds, and introducing physics, Counter-Strike: Source is a must-have for every action gamer.','Action','2004-09-01 00:00:00',8,'29.99',50,23,'PC,MAC'),(6,'Fallout: New Vegas','Obsidian Entertainment','Bethesda Softworks','English, French, German, Italian,Spanish',1,'Welcome Back to New Vegas! With the introduction of the Ultimate Edition, Bethesda Softworks offers you the chance to double-down and get the complete package of New Vegas fun. For the first time in one package, you can get all the Fallout: New Vegas content including the full suite of highly acclaimed add-on content: Dead Money, Honest...','Action','2012-02-10 00:00:00',8,'44.99',0,23,'PC'),(7,'Gothic Complete Pack','Piranha - Bytes','Nordic Games','English, French, German, Italian,Spanish',0,'War has been waged across the kingdom of Myrtana. Orcish hordes invaded human territory and the king of the land needed a lot of ore to forge enough weapons, should his army stand against this threat. Whoever breaks the law in these darkest of times is sentenced to serve in the giant penal colony of Khorinis, mining the so much needed...','RPG','2011-03-15 00:00:00',7,'29.99',50,23,'PC'),(8,'King Arthur II','NEOCORE GAMES','Paradox Interactive','English',1,'Critically praised by reviewers and gamers alike, King Arthur was received as one of the biggest surprises to emerge on the gaming scene in 2010. Now the Fantasy/Roleplaying RTS returns in a sequel set to push the boundaries of the genre even further.','Strategy','2012-01-28 00:00:00',6,'9.99',0,23,'PC'),(9,'Gettysburg: Armored Warfare','Radioactive Software','Paradox Interactive','English',1,'The outcome of the Civil War is in peril. Weapons, armor and machinery have been sent back in time. The Confederate forces are now attempting to overthrow the Union and change the course of history. Take control of either side and engage in massive online battles with unique Real Time Strategy / Third Person Shooter gameplay mechanics.','Strategy','2012-03-27 00:00:00',6,'9.99',0,23,'PC,MAC'),(10,'Eve Online','CCP','CCP','English, French, German, Italian,Spanish',1,'New Nebulaes, New Ships, New Scalable UI, New Modules, New Captain\'s Quarters and over 50 additional features! Within EVE\'s eternal crucible of warfare, politics and industry, even the most passionate and skilled are tested. EVE Online: CRUCIBLE pumps the bellows, turning up the heat on the space combat experience in EVE Online.','MMO','2008-09-12 00:00:00',7,'39.99',50,23,'PC,MAC'),(11,'Star Wars The Old Republic','Bioware','Lucas Arts','English, French, German, Italian, Chinese',1,'Choose Your Path. It is four thousand years before the Galactic Empire and hundreds of Jedi Knights have fallen in battle against the ruthless Sith. You are the last hope of the Jedi Order. Can you master the awesome power of the Force on your quest to save the Republic? Or will you fall to the lure of the dark side?','MMO','2011-12-11 00:00:00',9,'49.99',0,23,'PC'),(12,'Guild Wars 2','Arenanet','Ncsoft','English, French, German, Italian,Spanish',1,'An award-winning online fantasy epic awaits. No Subscription Fees! Take your first step into Guild Wars, the award-winning fantasy online roleplaying game enjoyed by millions of players. Across Tyria, the human kingdoms are under attack by the vicious Charr.','MMO','1900-01-01 00:00:00',0,'49.99',0,23,'PC'),(13,'Men of War','1C-SoftClub','1C Company','English,Russian',1,'Men of War: Condemned Heroes tells the story of one of the infamous Soviet penal battalions during the WWII. These battalions are famous for being formed under Stalin\'s No step back! order 227. They consisted of court-martialed officers that were given a chance to redeem their crimes, or incompetence, in blood by serving as the lowest...','Strategy','2012-03-12 00:00:00',6,'9.99',0,23,'PC'),(14,'Assassin\'s Creed','Ubisoft Montreal','Ubisoft','English, French, German, Italian,Spanish',0,'When a man has won all his battles and defeated his enemies; what is left for him to achieve? Ezio Auditore must leave his life behind in search of answers, In search of the truth. In Assassin\'s Creed Revelations, master assassin Ezio Auditore walks in the footsteps of the legendary mentor Altair, on a journey of discovery and...','Action','2011-12-01 00:00:00',8,'49.99',0,23,'PC,MAC'),(15,'Football Manager 2012','Sports Interactive','SEGA','English',1,'Counting over 800 new features, not including changes to the rules of the games 50+ leagues, Football Manager 2012 promises to be the most realistic, immersive and playable football management simulation ever for any fan who has ever dreamed of making the big decisions, both on and off the field.','Simulation','2011-10-21 00:00:00',8,'29.99',0,23,'PC,MAC'),(16,'Train Simulator 2012','RailSimulator.com','RailSimulator.com','English, French, German, Italian,Spanish,Russian',0,'The future of train simulation is here! Train Simulator 2012 puts you right inside the cab, driving incredibly realistic steam, diesel and electric trains on stunning real-world routes in the UK, US and Germany. Built-in tutorials help you get to grips with the controls and different driving techniques.','Simulation','2011-11-01 00:00:00',6,'29.99',25,23,'PC,MAC'),(17,'NBA 2K12','Visual Concepts','2K Sports','English, French, German, Italian,Spanish',1,'This year the NBA 2K franchise is back and bigger than ever, providing fans with the opportunity they\'ve always dreamed of - to finally END THE DEBATE as to who are the best teams and players of all time with the ALL-NEW NBA\'s Greatest mode.','Simulation','2011-10-04 00:00:00',7,'39.99',0,23,'PC,MAC'),(18,'Kingdoms of Amalur: Reckoning','38 Studios','38 Studios','English, French, German, Italian,Spanish,Russian',0,'The minds of New York Times bestselling author R.A. Salvatore, Spawn creator Todd McFarlane, and Elder Scrolls IV: Oblivion lead designer Ken Rolston have combined to create Kingdoms of Amalur: Reckoning, a new role-playing game set in a world worth saving.','RPG','2012-02-10 00:00:00',8,'49.99',0,23,'PC'),(19,'Risen 2','Piranha - Bytes','Deep Silver','English, French, German, Italian',0,'Set several years after the end of Risen, raging titans have devastated the world and pushed humanity to the brink of existence. Subsequently, monstrous creatures have risen from the watery depths of the sea and their attacks have brought all seafaring to a grinding halt.','RPG','2012-04-27 00:00:00',8,'49.99',0,23,'PC'),(20,'Dungeon Defenders','Trendy Entertainment','Trendy Entertainment','English, French, German, Italian, Chinese',1,'Dungeon Defenders is a Tower Defense Action-RPG where you must save the land of Etheria from an Ancient Evil! Create a hero from one of four distinct classes to fight back wave after wave of enemies by summoning defenses and directly participating in the action-packed combat!','Strategy','2011-10-19 00:00:00',8,'19.99',25,23,'PC,MAC'),(21,'Insanely Twisted Shadow Planet','Shadow Planet Productions','Microsoft Game Studios','English, French, German, Italian,Spanish',0,'In this Insanely Twisted, 2-D action-adventure game, explore unique environments and battle bizarre creatures as you make your way toward the center of the mysterious Shadow Planet! Solve complex puzzles and upgrade your ship with alien technology as you fight to save your home world.','Adventure','2012-04-17 00:00:00',7,'13.99',0,23,'PC,MAC'),(22,'Tales of Monkey Island Complete Pack','Telltale Games','Telltale Games','English, French, German, Italian',0,'While explosively stripping the evil pirate LeChuck of his demonic mojo, Guybrush Threepwood inadvertently infects the entire Caribbean with the arch-fiends expelled voodoo, which threatens to transform buccaneers into unruly pirate monsters.','Adventure','2009-07-07 00:00:00',8,'39.99',20,23,'PC,MAC'),(23,'Deus Ex : Human Revolution','Eidos Montreal','Square Enix','English, French, German, Italian,Simplified Chinese,Japanese',1,'You play Adam Jensen, a security specialist, handpicked to oversee the defense of one of America\'s most experimental biotechnology firms. But when a black ops team uses a plan you designed to break in and kill the scientists you were hired to protect, everything you thought you knew about your job changes.','RPG','2011-08-26 00:00:00',9,'49.99',0,23,'PC'),(24,'Sims 3 ','The Sims Studio','Electronic Arts','English, French, German, Italian',0,'The freedom of The Sims 3 will inspire you with endless creative possibilities and amuse you with unexpected moments of surprise and mischief! Create over a million unique Sims and control their lives. Customize everything from their appearances, to their personalities and even the home of their dreams.','Simulation','2009-07-02 00:00:00',9,'39.99',0,23,'PC,MAC'),(25,'Tropico 4 ','Haemimont Games','Kalypso Media Digital','English, French, German, Italian',1,'The world is changing and Tropico is moving with the times - geographical powers rise and fall and the world market is dominated by new players with new demands and offers - and you, as El Presidente, face a whole new set of challenges.','Strategy','2011-09-01 00:00:00',8,'39.99',15,23,'PC,MAC'),(26,'Rift','Trion Worlds','Trion Worlds','English, French, German, Italian,Simplified Chinese,Spanish',1,'Choose your side. Fight the invasions. Enter the RIF. Adventure in the world of Telara as either a noble Guardian or technomagical Defiant and enter a dynamic fantasy where 8 primal forces battle for control in an ever-changing landscape.','MMO','2011-03-04 00:00:00',8,'29.99',0,23,'PC'),(27,'Gemini Rue','Joshua Neurnberger','Wadjet Eye Games','English',0,'Azriel Odin, ex-assassin, arrives on the rain-drenched planet of Barracus. When things go horribly wrong, he can only seek help from the very criminals he used to work for. Meanwhile, across the galaxy, a man called Delta-Six wakes up in a hospital with no memory.','Adventure','2011-10-06 00:00:00',7,'19.99',0,23,'PC,MAC'),(28,'Myst V','Cyan Worlds','Cyan Worlds','English, French, German, Italian,Spanish,Russian',0,'The Grand Finale of the greatest adventure! Decide the fate of a civilization in this triumphant final chapter to the Myst saga. Embark on an epic journey into the heart of a shattered empire as the only explorer who can still save it- or destroy it with the wrong choices.','Adventure','2012-03-16 00:00:00',8,'9.99',0,23,'PC'),(29,'Trine 2','Frozenbyte','Frozenbyte','English, French, German, Italian',0,'Trine 2 is a sidescrolling game of action, puzzles and platforming where you play as one of Three Heroes who make their way through dangers untold in a fantastical fairytale world. Key Features: Physics-based puzzles with fire, water, gravity and magic Accessible for both casual and hardcore gamers Online and local co-op with up to three...','Adventure','2011-12-07 00:00:00',8,'12.99',0,23,'PC,MAC'),(30,'The Elder Scrolls V: Skyrim','Bethesda Game Studios','Bethesda Softworks','English, French, German, Italian,Spanish,Russian',0,'EPIC FANTASY REBORN The next chapter in the highly anticipated Elder Scrolls saga arrives from the makers of the 2006 and 2008 Games of the Year, Bethesda Game Studios. Skyrim reimagines and revolutionizes the open-world fantasy epic, bringing to life a complete virtual world open for you to explore any way you choose.','RPG','2011-11-11 00:00:00',9,'49.99',0,23,'PC');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shoppingCart`
--

DROP TABLE IF EXISTS `shoppingCart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shoppingCart` (
  `cartid` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL,
  `cartSessionId` varchar(100) DEFAULT NULL,
  `priceEach` decimal(4,2) NOT NULL DEFAULT '0.00',
  `creationDate` datetime NOT NULL,
  PRIMARY KEY (`cartid`),
  KEY `productid` (`productid`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppingCart`
--

LOCK TABLES `shoppingCart` WRITE;
/*!40000 ALTER TABLE `shoppingCart` DISABLE KEYS */;
/*!40000 ALTER TABLE `shoppingCart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `scrambledid` varchar(100) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `secret` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'','gdmerm@gmail.com','*12F066F9C69024B041EFAABC17212982D2248F02','Giorgos','','kontou'),(2,'','constantinos.merm@gmail.com','*23AE809DDACAF96AF0FD78ED04B6A265E05AA257','Konstantinos','','kontou'),(3,'','chr@gmail.com','*23AE809DDACAF96AF0FD78ED04B6A265E05AA257','christoula','','123'),(4,'','constantinos.merm@gmail.com','*016D172A9D178FDB08A95E799488049FC2A3021A','svdgashj','',''),(5,'','gdmerm@gmail.com','*23AE809DDACAF96AF0FD78ED04B6A265E05AA257','kostas','','kontou');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-06-10 14:34:12
