
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agss`
--

-- --------------------------------------------------------

--
-- Table structure for table `rcard`
--

CREATE TABLE IF NOT EXISTS `rcard` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `CFNAME` nvarchar(100) NOT NULL,
  `MNAME` nvarchar(100) NOT NULL,
  `FNAME` nvarchar(100) NOT NULL,
  `DOB` nvarchar(100) NOT NULL,
  `GEN` nvarchar(100) NOT NULL,
  `RCN` nvarchar(40) NOT NULL,
  `MUSS` nvarchar(30) NOT NULL,
  `MNO` nvarchar(100) NOT NULL,
  `ADD` nvarchar(150) NOT NULL,
  `MPHOTO` nvarchar(150) NOT NULL,
  `HPHOTO` nvarchar(150) NOT NULL,
  `SPHOTO` nvarchar(150) NOT NULL,
  `DPHOTO` nvarchar(150) NOT NULL,
  `EPHOTO` nvarchar(150) NOT NULL,
  `FPHOTO` nvarchar(150) NOT NULL,
  `GPHOTO` nvarchar(150) NOT NULL,
  `ADDER` nvarchar(60) NOT NULL,
  `DOCA` nvarchar(150) NOT NULL,
  `DOCB` nvarchar(150) NOT NULL,
  `DOCC` nvarchar(150) NOT NULL,
  `DOCD` nvarchar(150) NOT NULL,
  `ADDRN` nvarchar(150) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;
