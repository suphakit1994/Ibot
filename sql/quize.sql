-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2021 at 01:41 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibot`
--

-- --------------------------------------------------------

--
-- Table structure for table `quize`
--

CREATE TABLE `quize` (
  `quiz_id` int(11) NOT NULL COMMENT 'รหัสคำถาม',
  `question` varchar(20) NOT NULL COMMENT 'คำถาม',
  `check_ans` int(5) NOT NULL COMMENT 'เฉลย',
  `quiz_lesson_id` int(11) NOT NULL COMMENT 'รหัสบทเรียน',
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quize`
--

INSERT INTO `quize` (`quiz_id`, `question`, `check_ans`, `quiz_lesson_id`, `number`) VALUES
(1408, 'q1', 11, 1234, 1),
(1409, 'q2', 22, 1234, 1),
(1410, 'q3', 33, 1234, 1),
(1411, 'q4', 44, 1234, 1),
(1412, 'q5', 55, 1234, 1),
(1413, 'q1', 11, 1234, 1),
(1414, 'q2', 22, 1234, 1),
(1415, 'q3', 33, 1234, 1),
(1416, 'q4', 44, 1234, 1),
(1417, 'q5', 55, 1234, 1),
(1418, 'q1', 11, 1234, 1),
(1419, 'q2', 22, 1234, 1),
(1420, 'q3', 33, 1234, 1),
(1421, 'q4', 44, 1234, 1),
(1422, 'q5', 55, 1234, 1),
(1423, 'q1', 11, 1234, 1),
(1424, 'q2', 22, 1234, 1),
(1425, 'q3', 33, 1234, 1),
(1426, 'q4', 44, 1234, 1),
(1427, 'q5', 55, 1234, 1),
(1428, 'q1', 11, 1234, 1),
(1429, 'q2', 22, 1234, 1),
(1430, 'q3', 33, 1234, 1),
(1431, 'q4', 44, 1234, 1),
(1432, 'q5', 55, 1234, 1),
(1433, 'q1', 11, 1234, 1),
(1434, 'q2', 22, 1234, 1),
(1435, 'q3', 33, 1234, 1),
(1436, 'q4', 44, 1234, 1),
(1437, 'q5', 55, 1234, 1),
(1438, 'q1', 11, 1234, 1),
(1439, 'q2', 22, 1234, 1),
(1440, 'q3', 33, 1234, 1),
(1441, 'q4', 44, 1234, 1),
(1442, 'q5', 55, 1234, 1),
(1443, 'q1', 11, 1234, 1),
(1444, 'q2', 22, 1234, 1),
(1445, 'q3', 33, 1234, 1),
(1446, 'q4', 44, 1234, 1),
(1447, 'q5', 55, 1234, 1),
(1448, 'q1', 11, 1234, 1),
(1449, 'q2', 22, 1234, 1),
(1450, 'q3', 33, 1234, 1),
(1451, 'q4', 44, 1234, 1),
(1452, 'q5', 55, 1234, 1),
(1453, 'q1', 11, 1234, 1),
(1454, 'q2', 22, 1234, 1),
(1455, 'q3', 33, 1234, 1),
(1456, 'q4', 44, 1234, 1),
(1457, 'q5', 55, 1234, 1),
(1458, 'q1', 11, 1234, 1),
(1459, 'q2', 22, 1234, 1),
(1460, 'q3', 33, 1234, 1),
(1461, 'q4', 44, 1234, 1),
(1462, 'q5', 55, 1234, 1),
(1463, 'q1', 11, 1234, 1),
(1464, 'q2', 22, 1234, 1),
(1465, 'q3', 33, 1234, 1),
(1466, 'q4', 44, 1234, 1),
(1467, 'q5', 55, 1234, 1),
(1468, '', 0, 1234, 1),
(1469, '', 0, 1234, 1),
(1470, '', 0, 1234, 1),
(1471, '', 0, 1234, 1),
(1472, '', 0, 1234, 1),
(1473, '', 0, 1234, 1),
(1474, '', 0, 1234, 1),
(1475, '', 0, 1234, 1),
(1476, '', 0, 1234, 1),
(1477, '', 0, 1234, 1),
(1478, '', 0, 1234, 1),
(1479, '', 0, 1234, 1),
(1480, '', 0, 1234, 1),
(1481, '', 0, 1234, 1),
(1482, '', 0, 1234, 1),
(1483, '', 0, 1234, 1),
(1484, '', 0, 1234, 1),
(1485, '', 0, 1234, 1),
(1486, '', 0, 1234, 1),
(1487, '', 0, 1234, 1),
(1488, '', 0, 1234, 1),
(1489, '', 0, 1234, 1),
(1490, '', 0, 1234, 1),
(1491, '', 0, 1234, 1),
(1492, '', 0, 1234, 1),
(1493, '', 0, 1234, 1),
(1494, '', 0, 1234, 1),
(1495, '', 0, 1234, 1),
(1496, '', 0, 1234, 1),
(1497, '', 0, 1234, 1),
(1498, '', 0, 1234, 1),
(1499, '', 0, 1234, 1),
(1500, '', 0, 1234, 1),
(1501, '', 0, 1234, 1),
(1502, '', 0, 1234, 1),
(1503, '', 0, 1234, 1),
(1504, '', 0, 1234, 1),
(1505, '', 0, 1234, 1),
(1506, '', 0, 1234, 1),
(1507, '', 0, 1234, 1),
(1508, '', 0, 1234, 1),
(1509, '', 0, 1234, 1),
(1510, '', 0, 1234, 1),
(1511, '', 0, 1234, 1),
(1512, '', 0, 1234, 1),
(1513, '', 0, 1234, 1),
(1514, '', 0, 1234, 1),
(1515, '', 0, 1234, 1),
(1516, '', 0, 1234, 1),
(1517, '', 0, 1234, 1),
(1518, '', 0, 1234, 1),
(1519, '', 0, 1234, 1),
(1520, '', 0, 1234, 1),
(1521, '', 0, 1234, 1),
(1522, '', 0, 1234, 1),
(1523, '', 0, 1234, 1),
(1524, '', 0, 1234, 1),
(1525, '', 0, 1234, 1),
(1526, '', 0, 1234, 1),
(1527, '', 0, 1234, 1),
(1528, '', 0, 1234, 1),
(1529, '', 0, 1234, 1),
(1530, '', 0, 1234, 1),
(1531, '', 0, 1234, 1),
(1532, '', 0, 1234, 1),
(1533, '', 0, 1234, 1),
(1534, '', 0, 1234, 1),
(1535, '', 0, 1234, 1),
(1536, '', 0, 1234, 1),
(1537, '', 0, 1234, 1),
(1538, '', 0, 1234, 1),
(1539, '', 0, 1234, 1),
(1540, '', 0, 1234, 1),
(1541, '', 0, 1234, 1),
(1542, '', 0, 1234, 1),
(1543, '', 0, 1234, 1),
(1544, '', 0, 1234, 1),
(1545, '', 0, 1234, 1),
(1546, '', 0, 1234, 1),
(1547, '', 0, 1234, 1),
(1548, '', 0, 1234, 1),
(1549, '', 0, 1234, 1),
(1550, '', 0, 1234, 1),
(1551, '', 0, 1234, 1),
(1552, '', 0, 1234, 1),
(1553, '', 0, 1234, 1),
(1554, '', 0, 1234, 1),
(1555, '', 0, 1234, 1),
(1556, '', 0, 1234, 1),
(1557, '', 0, 1234, 1),
(1558, 'qqqqqqqq1', 1, 1234, 1),
(1559, 'qqqqqqq2', 2, 1234, 1),
(1560, 'qqqqqq3', 3, 1234, 1),
(1561, 'qqq4', 4, 1234, 1),
(1562, 'qqqqqqq5', 5, 1234, 1),
(1563, 'qqqqqqqq1', 11, 1234, 1),
(1564, 'qqqqqqq2', 22, 1234, 1),
(1565, 'qqqqqq3', 33, 1234, 1),
(1566, 'qqq4', 44, 1234, 1),
(1567, 'qqqqqqq5', 55, 1234, 1),
(1568, 'qqqqqqqq1', 11, 1234, 1),
(1569, 'qqqqqqq2', 22, 1234, 1),
(1570, 'qqqqqq3', 33, 1234, 1),
(1571, 'qqq4', 44, 1234, 1),
(1572, 'qqqqqqq5', 55, 1234, 1),
(1573, 'qqqqqqqq1', 11, 1234, 1),
(1574, 'qqqqqqq2', 22, 1234, 1),
(1575, 'qqqqqq3', 33, 1234, 1),
(1576, 'qqq4', 44, 1234, 1),
(1577, 'qqqqqqq5', 55, 1234, 1),
(1578, 'qqqqqqqq1', 11, 1234, 1),
(1579, 'qqqqqqq2', 22, 1234, 1),
(1580, 'qqqqqq3', 33, 1234, 1),
(1581, 'qqq4', 44, 1234, 1),
(1582, 'qqqqqqq5', 55, 1234, 1),
(1583, 'qqqqqqqq1', 11, 1234, 1),
(1584, 'qqqqqqq2', 22, 1234, 1),
(1585, 'qqqqqq3', 33, 1234, 1),
(1586, 'qqq4', 44, 1234, 1),
(1587, 'qqqqqqq5', 55, 1234, 1),
(1588, 'qqqqqqqq1', 11, 1234, 1),
(1589, 'qqqqqqq2', 22, 1234, 1),
(1590, 'qqqqqq3', 33, 1234, 1),
(1591, 'qqq4', 44, 1234, 1),
(1592, 'qqqqqqq5', 55, 1234, 1),
(1593, 'qqqqqqqq1', 11, 1234, 1),
(1594, 'qqqqqqq2', 22, 1234, 1),
(1595, 'qqqqqq3', 33, 1234, 1),
(1596, 'qqq4', 44, 1234, 1),
(1597, 'qqqqqqq5', 55, 1234, 1),
(1598, 'qqqqqqqq1', 11, 1234, 1),
(1599, 'qqqqqqq2', 22, 1234, 1),
(1600, 'qqqqqq3', 33, 1234, 1),
(1601, 'qqq4', 44, 1234, 1),
(1602, 'qqqqqqq5', 55, 1234, 1),
(1603, 'qqqqqqqq1', 11, 1234, 1),
(1604, 'qqqqqqq2', 22, 1234, 1),
(1605, 'qqqqqq3', 33, 1234, 1),
(1606, 'qqq4', 44, 1234, 1),
(1607, 'qqqqqqq5', 55, 1234, 1),
(1608, 'qqqqqqqq1', 11, 1234, 1),
(1609, 'qqqqqqq2', 22, 1234, 1),
(1610, 'qqqqqq3', 33, 1234, 1),
(1611, 'qqq4', 44, 1234, 1),
(1612, 'qqqqqqq5', 55, 1234, 1),
(1613, 'qqqqqqqq1', 11, 1234, 1),
(1614, 'qqqqqqq2', 22, 1234, 1),
(1615, 'qqqqqq3', 33, 1234, 1),
(1616, 'qqq4', 44, 1234, 1),
(1617, 'qqqqqqq5', 55, 1234, 1),
(1618, 'qqqqqqqq1', 11, 1234, 1),
(1619, 'qqqqqqq2', 22, 1234, 1),
(1620, 'qqqqqq3', 33, 1234, 1),
(1621, 'qqq4', 44, 1234, 1),
(1622, 'qqqqqqq5', 55, 1234, 1),
(1623, 'qqqqqqqq1', 11, 1234, 1),
(1624, 'qqqqqqq2', 22, 1234, 1),
(1625, 'qqqqqq3', 33, 1234, 1),
(1626, 'qqq4', 44, 1234, 1),
(1627, 'qqqqqqq5', 55, 1234, 1),
(1628, 'qqqqqqqq1', 11, 1234, 1),
(1629, 'qqqqqqq2', 22, 1234, 1),
(1630, 'qqqqqq3', 33, 1234, 1),
(1631, 'qqq4', 44, 1234, 1),
(1632, 'qqqqqqq5', 55, 1234, 1),
(1633, 'qqqqqqqq1', 11, 1234, 1),
(1634, 'qqqqqqq2', 22, 1234, 1),
(1635, 'qqqqqq3', 33, 1234, 1),
(1636, 'qqq4', 44, 1234, 1),
(1637, 'qqqqqqq5', 55, 1234, 1),
(1638, 'qqqqqqqq1', 11, 1234, 1),
(1639, 'qqqqqqq2', 22, 1234, 1),
(1640, 'qqqqqq3', 33, 1234, 1),
(1641, 'qqq4', 44, 1234, 1),
(1642, 'qqqqqqq5', 55, 1234, 1),
(1643, 'qqqqqqqq1', 11, 1234, 1),
(1644, 'qqqqqqq2', 22, 1234, 1),
(1645, 'qqqqqq3', 33, 1234, 1),
(1646, 'qqq4', 44, 1234, 1),
(1647, 'qqqqqqq5', 55, 1234, 1),
(1648, 'qqqqqqqq1', 11, 1234, 1),
(1649, 'qqqqqqq2', 22, 1234, 1),
(1650, 'qqqqqq3', 33, 1234, 1),
(1651, 'qqq4', 44, 1234, 1),
(1652, 'qqqqqqq5', 55, 1234, 1),
(1653, 'qqqqqqqq1', 11, 1234, 1),
(1654, 'qqqqqqq2', 22, 1234, 1),
(1655, 'qqqqqq3', 33, 1234, 1),
(1656, 'qqq4', 44, 1234, 1),
(1657, 'qqqqqqq5', 55, 1234, 1),
(1658, 'qqqqqqqq1', 11, 1234, 1),
(1659, 'qqqqqqq2', 22, 1234, 1),
(1660, 'qqqqqq3', 33, 1234, 1),
(1661, 'qqq4', 44, 1234, 1),
(1662, 'qqqqqqq5', 55, 1234, 1),
(1663, 'qqqqqqqq1', 11, 1234, 1),
(1664, 'qqqqqqq2', 22, 1234, 1),
(1665, 'qqqqqq3', 33, 1234, 1),
(1666, 'qqq4', 44, 1234, 1),
(1667, 'qqqqqqq5', 55, 1234, 1),
(1668, 'qqqqqqqq1', 11, 1234, 1),
(1669, 'qqqqqqq2', 22, 1234, 1),
(1670, 'qqqqqq3', 33, 1234, 1),
(1671, 'qqq4', 44, 1234, 1),
(1672, 'qqqqqqq5', 55, 1234, 1),
(1673, 'qqqqqqqq1', 11, 1234, 1),
(1674, 'qqqqqqq2', 22, 1234, 1),
(1675, 'qqqqqq3', 33, 1234, 1),
(1676, 'qqq4', 44, 1234, 1),
(1677, 'qqqqqqq5', 55, 1234, 1),
(1678, 'qqqqqqqq1', 11, 1234, 1),
(1679, 'qqqqqqq2', 22, 1234, 1),
(1680, 'qqqqqq3', 33, 1234, 1),
(1681, 'qqq4', 44, 1234, 1),
(1682, 'qqqqqqq5', 55, 1234, 1),
(1683, 'qqqqqqqq1', 11, 1234, 1),
(1684, 'qqqqqqq2', 22, 1234, 1),
(1685, 'qqqqqq3', 33, 1234, 1),
(1686, 'qqq4', 44, 1234, 1),
(1687, 'qqqqqqq5', 55, 1234, 1),
(1688, 'qqqqqqqq1', 11, 1234, 1),
(1689, 'qqqqqqq2', 22, 1234, 1),
(1690, 'qqqqqq3', 33, 1234, 1),
(1691, 'qqq4', 44, 1234, 1),
(1692, 'qqqqqqq5', 55, 1234, 1),
(1693, 'qqqqqqqq1', 11, 1234, 1),
(1694, 'qqqqqqq2', 22, 1234, 1),
(1695, 'qqqqqq3', 33, 1234, 1),
(1696, 'qqq4', 44, 1234, 1),
(1697, 'qqqqqqq5', 55, 1234, 1),
(1698, '', 0, 1234, 1),
(1699, '', 0, 1234, 1),
(1700, '', 0, 1234, 1),
(1701, '', 0, 1234, 1),
(1702, '', 0, 1234, 1),
(1703, '', 0, 1234, 1),
(1704, '', 0, 1234, 1),
(1705, '', 0, 1234, 1),
(1706, '', 0, 1234, 1),
(1707, '', 0, 1234, 1),
(1708, '', 0, 1234, 1),
(1709, '', 0, 1234, 1),
(1710, '', 0, 1234, 1),
(1711, '', 0, 1234, 1),
(1712, '', 0, 1234, 1),
(1713, 'Array', 0, 1234, 1),
(1714, 'Array', 0, 1234, 1),
(1715, 'Array', 0, 1234, 1),
(1716, 'Array', 0, 1234, 1),
(1717, 'Array', 0, 1234, 1),
(1718, '', 0, 1234, 1),
(1719, '', 0, 1234, 1),
(1720, '', 0, 1234, 1),
(1721, '', 0, 1234, 1),
(1722, '', 0, 1234, 1),
(1723, 'q1', 0, 1234, 1),
(1724, 'q2', 22, 1234, 1),
(1725, '', 0, 1234, 1),
(1726, '', 0, 1234, 1),
(1727, '', 0, 1234, 1),
(1728, 'Array', 0, 1234, 1),
(1729, 'Array', 0, 1234, 1),
(1730, 'Array', 0, 1234, 1),
(1731, 'Array', 0, 1234, 1),
(1732, 'Array', 0, 1234, 1),
(1733, 'aa1', 1, 1234, 1),
(1734, 'aa2', 2, 1234, 1),
(1735, 'aa3', 3, 1234, 1),
(1736, '', 0, 1234, 1),
(1737, '', 0, 1234, 1),
(1738, 'aa1', 1, 1234, 1),
(1739, 'aa2', 2, 1234, 1),
(1740, 'aa3', 3, 1234, 1),
(1741, 'q4', 4, 1234, 1),
(1742, 'a5', 5, 1234, 1),
(1743, 'aa1', 1, 1234, 1),
(1744, 'aa2', 2, 1234, 1),
(1745, 'aa3', 3, 1234, 1),
(1746, 'q4', 4, 1234, 1),
(1747, 'a5', 5, 1234, 1),
(1748, 'aa1', 1, 1234, 1),
(1749, 'aa2', 2, 1234, 1),
(1750, 'aa3', 3, 1234, 1),
(1751, 'q4', 4, 1234, 1),
(1752, 'a5', 5, 1234, 1),
(1753, '', 0, 1234, 1),
(1754, '', 0, 1234, 1),
(1755, '', 0, 1234, 1),
(1756, '', 0, 1234, 1),
(1757, '', 0, 1234, 1),
(1758, '', 0, 1234, 1),
(1759, '', 0, 1234, 1),
(1760, '', 0, 1234, 1),
(1761, '', 0, 1234, 1),
(1762, '', 0, 1234, 1),
(1763, '', 0, 1234, 1),
(1764, '', 0, 1234, 1),
(1765, '', 0, 1234, 1),
(1766, '', 0, 1234, 1),
(1767, '', 0, 1234, 1),
(1768, '', 0, 1234, 1),
(1769, '', 0, 1234, 1),
(1770, '', 0, 1234, 1),
(1771, '', 0, 1234, 1),
(1772, '', 0, 1234, 1),
(1773, '', 0, 1234, 1),
(1774, '', 0, 1234, 1),
(1775, '', 0, 1234, 1),
(1776, '', 0, 1234, 1),
(1777, '', 0, 1234, 1),
(1778, '', 0, 1234, 1),
(1779, '', 0, 1234, 1),
(1780, '', 0, 1234, 1),
(1781, '', 0, 1234, 1),
(1782, '', 0, 1234, 1),
(1783, '', 0, 1234, 1),
(1784, '', 0, 1234, 1),
(1785, '', 0, 1234, 1),
(1786, '', 0, 1234, 1),
(1787, '', 0, 1234, 1),
(1788, '', 0, 1234, 1),
(1789, '', 0, 1234, 1),
(1790, '', 0, 1234, 1),
(1791, '', 0, 1234, 1),
(1792, '', 0, 1234, 1),
(1793, '', 0, 1234, 1),
(1794, '', 0, 1234, 1),
(1795, '', 0, 1234, 1),
(1796, '', 0, 1234, 1),
(1797, '', 0, 1234, 1),
(1798, '', 0, 1234, 1),
(1799, '', 0, 1234, 1),
(1800, '', 0, 1234, 1),
(1801, '', 0, 1234, 1),
(1802, '', 0, 1234, 1),
(1803, '', 0, 1234, 1),
(1804, '', 0, 1234, 1),
(1805, '', 0, 1234, 1),
(1806, '', 0, 1234, 1),
(1807, '', 0, 1234, 1),
(1808, '', 0, 1234, 1),
(1809, '', 0, 1234, 1),
(1810, '', 0, 1234, 1),
(1811, '', 0, 1234, 1),
(1812, '', 0, 1234, 1),
(1813, 'aa1', 1, 1234, 1),
(1814, 'aa2', 2, 1234, 1),
(1815, 'aa3', 3, 1234, 1),
(1816, 'q4', 4, 1234, 1),
(1817, 'aa5', 5, 1234, 1),
(1818, 'aa1', 0, 1234, 1),
(1819, 'aa1', 1, 1234, 1),
(1820, 'aa2', 2, 1234, 1),
(1821, 'aa3', 3, 1234, 1),
(1822, 'q4', 4, 1234, 1),
(1823, 'aa5', 5, 1234, 1),
(1824, 'aa1', 0, 1234, 1),
(1825, 'q11', 11, 1234, 1),
(1826, 'q21', 21, 1234, 1),
(1827, 'q31', 31, 1234, 1),
(1828, 'q41', 41, 1234, 1),
(1829, 'q51', 51, 1234, 1),
(1830, 'q12', 12, 1234, 1),
(1831, 'q22', 22, 1234, 1),
(1832, 'q32', 32, 1234, 1),
(1833, 'q42', 42, 1234, 1),
(1834, 'q52', 52, 1234, 1),
(1835, 'q13', 13, 1234, 1),
(1836, 'q23', 23, 1234, 1),
(1837, 'q33', 33, 1234, 1),
(1838, 'q43', 43, 1234, 1),
(1839, 'q53', 53, 1234, 1),
(1840, 'q11', 11, 1234, 1),
(1841, 'q21', 21, 1234, 1),
(1842, 'q31', 31, 1234, 1),
(1843, 'q41', 41, 1234, 1),
(1844, 'q51', 51, 1234, 1),
(1845, 'q12', 12, 1234, 1),
(1846, 'q22', 22, 1234, 1),
(1847, 'q32', 32, 1234, 1),
(1848, 'q42', 42, 1234, 1),
(1849, 'q52', 52, 1234, 1),
(1850, 'q13', 13, 1234, 1),
(1851, 'q23', 23, 1234, 1),
(1852, 'q33', 33, 1234, 1),
(1853, 'q43', 43, 1234, 1),
(1854, 'q53', 53, 1234, 1),
(1855, 'q11', 11, 1234, 1),
(1856, 'q21', 21, 1234, 1),
(1857, 'q31', 31, 1234, 1),
(1858, 'q41', 41, 1234, 1),
(1859, 'q51', 51, 1234, 1),
(1860, 'q12', 12, 1234, 1),
(1861, 'q22', 22, 1234, 1),
(1862, 'q32', 32, 1234, 1),
(1863, 'q42', 42, 1234, 1),
(1864, 'q52', 52, 1234, 1),
(1865, 'q13', 13, 1234, 1),
(1866, 'q23', 23, 1234, 1),
(1867, 'q33', 33, 1234, 1),
(1868, 'q43', 43, 1234, 1),
(1869, 'q53', 53, 1234, 1),
(1870, 'q41', 41, 1236, 1),
(1871, 'q52', 52, 1236, 1),
(1872, 'q41', 41, 1236, 1),
(1873, 'q52', 52, 1236, 1),
(1874, 'qq1', 0, 1236, 1),
(1875, 'qq2', 0, 1236, 1),
(1876, 'qq22', 0, 1236, 2),
(1877, 'qq22', 0, 1236, 2),
(1878, 'qq22', 0, 1236, 2),
(1879, 'qq1', 0, 1236, 1),
(1880, 'qq2', 0, 1236, 1),
(1881, 'qq22', 0, 1236, 2),
(1882, 'qq22', 0, 1236, 2),
(1883, 'qq22', 0, 1236, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quize`
--
ALTER TABLE `quize`
  ADD PRIMARY KEY (`quiz_id`),
  ADD KEY `FK_quiz_lesson_id` (`quiz_lesson_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quize`
--
ALTER TABLE `quize`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสคำถาม', AUTO_INCREMENT=1884;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quize`
--
ALTER TABLE `quize`
  ADD CONSTRAINT `quiz_lesson_id` FOREIGN KEY (`quiz_lesson_id`) REFERENCES `file` (`file_lesson_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;