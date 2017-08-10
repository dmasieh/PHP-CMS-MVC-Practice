DROP DATABASE IF EXISTS doug_glo_2;
CREATE DATABASE doug_glo_2;
USE doug_glo_2;

CREATE TABLE `quote` (
  `quoteId` int(3) NOT NULL AUTO_INCREMENT,
  `quoteAuthor` varchar(90) NOT NULL,
  `quoteYear` int(4) NOT NULL,
  `quoteText` varchar(500) NOT NULL,
  PRIMARY KEY (quoteId)
);

INSERT INTO `quote` (`quoteId`, `quoteAuthor`, `quoteYear`, `quoteText`) VALUES
(1, 'Robert California', 2012, 'I am the f****** lizard king!'),
(2, 'Master Yoda', 1980, 'Judge me by my size, do you?'),
(3, 'Mr. Spock', 1979, 'Live Long and Prosper'),
(4, 'Evan Enke', 2017, 'What do ya mean you don\'t have any cats!!'),
(5, 'The Dude', 1998, '...Nobody calls me Lebowski. You got the wrong guy. I\'m the Dude, man.'),
(6, 'Ron Burgundy', 2004, 'Do you know who I am?...I do not know how to put this, but, I\'m kind of a big deal...People know me.'),
(7, 'Bob Wiley', 1991, 'Roses are red, violets are blue. I\'m a schizophrenic and so am I.'),
(8, 'George Carlin', 1996, 'What does it mean to pre-board? Do you get on before you get on?'),
(9, 'Bill Burr', 	2008, 'You have no idea how long a year is until you\'re stone sober.'),
(10, 'Jim Gaffigan', 2010, 'There is the vegetarian Hot Pocket for those of us who don\'t want to eat meat, but would still like diarrhea.');