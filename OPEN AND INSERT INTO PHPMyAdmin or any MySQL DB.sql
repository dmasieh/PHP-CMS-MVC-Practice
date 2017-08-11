/* SQL database created and imported to Wampserver - phpMyAdmin database */
/*DROP DATABASE IF EXISTS "Database Name";
CREATE DATABASE "Database Name";
USE "Database Name";
*/

DROP DATABASE IF EXISTS phpcms;
CREATE DATABASE phpcms;
USE phpcms;

/*Table and table field attributes*/
CREATE TABLE `quote` (
  `quoteId` int(3) NOT NULL AUTO_INCREMENT,
  `quoteAuthor` varchar(90) NOT NULL,
  `quoteYear` int(4) NOT NULL,
  `quoteText` varchar(500) NOT NULL,
  PRIMARY KEY (quoteId)
);

/*the data....THE PRECIOUS DATA!!!!!*/
INSERT INTO `quote` (`quoteId`, `quoteAuthor`, `quoteYear`, `quoteText`) VALUES
(1, 'Hypothetical', 2017, 'Hypothetical'),
(2, 'Hypothetical', 2017, 'Hypothetical'),
(3, 'Hypothetical', 2017, 'Hypothetical'),
(4, 'Hypothetical', 2017, 'Hypothetical');
