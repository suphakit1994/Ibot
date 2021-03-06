-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2021 at 01:39 AM
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
-- Table structure for table `choice`
--

CREATE TABLE `choice` (
  `id` int(11) NOT NULL,
  `selected` varchar(255) NOT NULL,
  `key_all` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`id`, `selected`, `key_all`) VALUES
(2025, 'c11', 1638),
(2026, 'c12', 1638),
(2027, 'c13', 1638),
(2028, 'c14', 1638),
(2029, 'c21', 1639),
(2030, 'c22', 1639),
(2031, 'c23', 1639),
(2032, 'c24', 1639),
(2033, 'c31', 1640),
(2034, 'c32', 1640),
(2035, 'c33', 1640),
(2036, 'c34', 1640),
(2037, 'c41', 1641),
(2038, 'c42', 1641),
(2039, 'c43', 1641),
(2040, 'c44', 1641),
(2041, 'c51', 1642),
(2042, 'c52', 1642),
(2043, 'c53', 1642),
(2044, 'c54', 1642),
(2045, 'c11', 1643),
(2046, 'c12', 1643),
(2047, 'c13', 1643),
(2048, 'c14', 1643),
(2049, 'c21', 1644),
(2050, 'c22', 1644),
(2051, 'c23', 1644),
(2052, 'c24', 1644),
(2053, 'c31', 1645),
(2054, 'c32', 1645),
(2055, 'c33', 1645),
(2056, 'c34', 1645),
(2057, 'c41', 1646),
(2058, 'c42', 1646),
(2059, 'c43', 1646),
(2060, 'c44', 1646),
(2061, 'c51', 1647),
(2062, 'c52', 1647),
(2063, 'c53', 1647),
(2064, 'c54', 1647),
(2065, 'c11', 1648),
(2066, 'c12', 1648),
(2067, 'c13', 1648),
(2068, 'c14', 1648),
(2069, 'c21', 1649),
(2070, 'c22', 1649),
(2071, 'c23', 1649),
(2072, 'c24', 1649),
(2073, 'c31', 1650),
(2074, 'c32', 1650),
(2075, 'c33', 1650),
(2076, 'c34', 1650),
(2077, 'c41', 1651),
(2078, 'c42', 1651),
(2079, 'c43', 1651),
(2080, 'c44', 1651),
(2081, 'c51', 1652),
(2082, 'c52', 1652),
(2083, 'c53', 1652),
(2084, 'c54', 1652),
(2085, 'c11', 1653),
(2086, 'c12', 1653),
(2087, 'c13', 1653),
(2088, 'c14', 1653),
(2089, 'c21', 1654),
(2090, 'c22', 1654),
(2091, 'c23', 1654),
(2092, 'c24', 1654),
(2093, 'c31', 1655),
(2094, 'c32', 1655),
(2095, 'c33', 1655),
(2096, 'c34', 1655),
(2097, 'c41', 1656),
(2098, 'c42', 1656),
(2099, 'c43', 1656),
(2100, 'c44', 1656),
(2101, 'c51', 1657),
(2102, 'c52', 1657),
(2103, 'c53', 1657),
(2104, 'c54', 1657),
(2105, 'c11', 1658),
(2106, 'c12', 1658),
(2107, 'c13', 1658),
(2108, 'c14', 1658),
(2109, 'c21', 1659),
(2110, 'c22', 1659),
(2111, 'c23', 1659),
(2112, 'c24', 1659),
(2113, 'c31', 1660),
(2114, 'c32', 1660),
(2115, 'c33', 1660),
(2116, 'c34', 1660),
(2117, 'c41', 1661),
(2118, 'c42', 1661),
(2119, 'c43', 1661),
(2120, 'c44', 1661),
(2121, 'c51', 1662),
(2122, 'c52', 1662),
(2123, 'c53', 1662),
(2124, 'c54', 1662),
(2125, 'c11', 1663),
(2126, 'c12', 1663),
(2127, 'c13', 1663),
(2128, 'c14', 1663),
(2129, 'c21', 1664),
(2130, 'c22', 1664),
(2131, 'c23', 1664),
(2132, 'c24', 1664),
(2133, 'c31', 1665),
(2134, 'c32', 1665),
(2135, 'c33', 1665),
(2136, 'c34', 1665),
(2137, 'c41', 1666),
(2138, 'c42', 1666),
(2139, 'c43', 1666),
(2140, 'c44', 1666),
(2141, 'c51', 1667),
(2142, 'c52', 1667),
(2143, 'c53', 1667),
(2144, 'c54', 1667),
(2145, 'c11', 1668),
(2146, 'c12', 1668),
(2147, 'c13', 1668),
(2148, 'c14', 1668),
(2149, 'c21', 1669),
(2150, 'c22', 1669),
(2151, 'c23', 1669),
(2152, 'c24', 1669),
(2153, 'c31', 1670),
(2154, 'c32', 1670),
(2155, 'c33', 1670),
(2156, 'c34', 1670),
(2157, 'c41', 1671),
(2158, 'c42', 1671),
(2159, 'c43', 1671),
(2160, 'c44', 1671),
(2161, 'c51', 1672),
(2162, 'c52', 1672),
(2163, 'c53', 1672),
(2164, 'c54', 1672),
(2165, 'c11', 1673),
(2166, 'c12', 1673),
(2167, 'c13', 1673),
(2168, 'c14', 1673),
(2169, 'c21', 1674),
(2170, 'c22', 1674),
(2171, 'c23', 1674),
(2172, 'c24', 1674),
(2173, 'c31', 1675),
(2174, 'c32', 1675),
(2175, 'c33', 1675),
(2176, 'c34', 1675),
(2177, 'c41', 1676),
(2178, 'c42', 1676),
(2179, 'c43', 1676),
(2180, 'c44', 1676),
(2181, 'c51', 1677),
(2182, 'c52', 1677),
(2183, 'c53', 1677),
(2184, 'c54', 1677),
(2185, 'c11', 1678),
(2186, 'c12', 1678),
(2187, 'c13', 1678),
(2188, 'c14', 1678),
(2189, 'c21', 1679),
(2190, 'c22', 1679),
(2191, 'c23', 1679),
(2192, 'c24', 1679),
(2193, 'c31', 1680),
(2194, 'c32', 1680),
(2195, 'c33', 1680),
(2196, 'c34', 1680),
(2197, 'c41', 1681),
(2198, 'c42', 1681),
(2199, 'c43', 1681),
(2200, 'c44', 1681),
(2201, 'c51', 1682),
(2202, 'c52', 1682),
(2203, 'c53', 1682),
(2204, 'c54', 1682),
(2205, 'c11', 1683),
(2206, 'c12', 1683),
(2207, 'c13', 1683),
(2208, 'c14', 1683),
(2209, 'c21', 1684),
(2210, 'c22', 1684),
(2211, 'c23', 1684),
(2212, 'c24', 1684),
(2213, 'c31', 1685),
(2214, 'c32', 1685),
(2215, 'c33', 1685),
(2216, 'c34', 1685),
(2217, 'c41', 1686),
(2218, 'c42', 1686),
(2219, 'c43', 1686),
(2220, 'c44', 1686),
(2221, 'c51', 1687),
(2222, 'c52', 1687),
(2223, 'c53', 1687),
(2224, 'c54', 1687),
(2225, 'c11', 1688),
(2226, 'c12', 1688),
(2227, 'c13', 1688),
(2228, 'c14', 1688),
(2229, 'c21', 1689),
(2230, 'c22', 1689),
(2231, 'c23', 1689),
(2232, 'c24', 1689),
(2233, 'c31', 1690),
(2234, 'c32', 1690),
(2235, 'c33', 1690),
(2236, 'c34', 1690),
(2237, 'c41', 1691),
(2238, 'c42', 1691),
(2239, 'c43', 1691),
(2240, 'c44', 1691),
(2241, 'c51', 1692),
(2242, 'c52', 1692),
(2243, 'c53', 1692),
(2244, 'c54', 1692),
(2245, 'c11', 1693),
(2246, 'c12', 1693),
(2247, 'c13', 1693),
(2248, 'c14', 1693),
(2249, 'c21', 1694),
(2250, 'c22', 1694),
(2251, 'c23', 1694),
(2252, 'c24', 1694),
(2253, 'c31', 1695),
(2254, 'c32', 1695),
(2255, 'c33', 1695),
(2256, 'c34', 1695),
(2257, 'c41', 1696),
(2258, 'c42', 1696),
(2259, 'c43', 1696),
(2260, 'c44', 1696),
(2261, 'c51', 1697),
(2262, 'c52', 1697),
(2263, '', 1698),
(2264, '', 1698),
(2265, '', 1698),
(2266, '', 1698),
(2267, '', 1699),
(2268, '', 1699),
(2269, '', 1699),
(2270, '', 1699),
(2271, '', 1700),
(2272, '', 1700),
(2273, '', 1700),
(2274, '', 1700),
(2275, '', 1701),
(2276, '', 1701),
(2277, '', 1701),
(2278, '', 1701),
(2279, '', 1702),
(2280, '', 1702),
(2281, '', 1702),
(2282, '', 1702),
(2283, '', 1703),
(2284, '', 1703),
(2285, '', 1703),
(2286, '', 1703),
(2287, '', 1704),
(2288, '', 1704),
(2289, '', 1704),
(2290, '', 1704),
(2291, '', 1705),
(2292, '', 1705),
(2293, '', 1705),
(2294, '', 1705),
(2295, '', 1706),
(2296, '', 1706),
(2297, '', 1706),
(2298, '', 1706),
(2299, '', 1707),
(2300, '', 1707),
(2301, '', 1707),
(2302, '', 1707),
(2303, '', 1708),
(2304, '', 1708),
(2305, '', 1708),
(2306, '', 1708),
(2307, '', 1709),
(2308, '', 1709),
(2309, '', 1709),
(2310, '', 1709),
(2311, '', 1710),
(2312, '', 1710),
(2313, '', 1710),
(2314, '', 1710),
(2315, '', 1711),
(2316, '', 1711),
(2317, '', 1711),
(2318, '', 1711),
(2319, '', 1712),
(2320, '', 1712),
(2321, '', 1712),
(2322, '', 1712),
(2323, 'Array', 1713),
(2324, 'Array', 1713),
(2325, 'Array', 1713),
(2326, 'Array', 1713),
(2327, 'Array', 1714),
(2328, 'Array', 1714),
(2329, 'Array', 1714),
(2330, 'Array', 1714),
(2331, 'Array', 1715),
(2332, 'Array', 1715),
(2333, 'Array', 1715),
(2334, 'Array', 1715),
(2335, 'Array', 1716),
(2336, 'Array', 1716),
(2337, 'Array', 1716),
(2338, 'Array', 1716),
(2339, 'Array', 1717),
(2340, 'Array', 1717),
(2341, 'Array', 1717),
(2342, 'Array', 1717),
(2343, '', 1718),
(2344, '', 1718),
(2345, '', 1718),
(2346, '', 1718),
(2347, '', 1719),
(2348, '', 1719),
(2349, '', 1719),
(2350, '', 1719),
(2351, '', 1720),
(2352, '', 1720),
(2353, '', 1720),
(2354, '', 1720),
(2355, '', 1721),
(2356, '', 1721),
(2357, '', 1721),
(2358, '', 1721),
(2359, '', 1722),
(2360, '', 1722),
(2361, '', 1722),
(2362, '', 1722),
(2363, '', 1723),
(2364, '', 1723),
(2365, '', 1723),
(2366, '', 1723),
(2367, '', 1724),
(2368, '', 1724),
(2369, '', 1724),
(2370, '', 1724),
(2371, '', 1725),
(2372, '', 1725),
(2373, '', 1725),
(2374, '', 1725),
(2375, '', 1726),
(2376, '', 1726),
(2377, '', 1726),
(2378, '', 1726),
(2379, '', 1727),
(2380, '', 1727),
(2381, '', 1727),
(2382, '', 1727),
(2383, 'Array', 1728),
(2384, 'Array', 1728),
(2385, 'Array', 1728),
(2386, 'Array', 1728),
(2387, 'Array', 1729),
(2388, 'Array', 1729),
(2389, 'Array', 1729),
(2390, 'Array', 1729),
(2391, 'Array', 1730),
(2392, 'Array', 1730),
(2393, 'Array', 1730),
(2394, 'Array', 1730),
(2395, 'Array', 1731),
(2396, 'Array', 1731),
(2397, 'Array', 1731),
(2398, 'Array', 1731),
(2399, 'Array', 1732),
(2400, 'Array', 1732),
(2401, 'Array', 1732),
(2402, 'Array', 1732),
(2403, 'c11', 1738),
(2404, 'c12', 1738),
(2405, 'c13', 1738),
(2406, 'c14', 1738),
(2407, 'c21', 1739),
(2408, 'c22', 1739),
(2409, 'c23', 1739),
(2410, 'c24', 1739),
(2411, 'c31', 1740),
(2412, 'c32', 1740),
(2413, 'c33', 1740),
(2414, 'c34', 1740),
(2415, 'c41', 1741),
(2416, 'c42', 1741),
(2417, 'c43', 1741),
(2418, 'c44', 1741),
(2419, 'c51', 1742),
(2420, 'c52', 1742),
(2421, 'c53', 1742),
(2422, 'c54', 1742),
(2423, 'c11', 1743),
(2424, 'c12', 1743),
(2425, 'c13', 1743),
(2426, 'c14', 1743),
(2427, 'c21', 1744),
(2428, 'c22', 1744),
(2429, 'c23', 1744),
(2430, 'c24', 1744),
(2431, 'c31', 1745),
(2432, 'c32', 1745),
(2433, 'c33', 1745),
(2434, 'c34', 1745),
(2435, 'c41', 1746),
(2436, 'c42', 1746),
(2437, 'c43', 1746),
(2438, 'c44', 1746),
(2439, 'c51', 1747),
(2440, 'c52', 1747),
(2441, 'c53', 1747),
(2442, 'c54', 1747),
(2443, 'c11', 1748),
(2444, 'c12', 1748),
(2445, 'c13', 1748),
(2446, 'c14', 1748),
(2447, 'c21', 1749),
(2448, 'c22', 1749),
(2449, 'c23', 1749),
(2450, 'c24', 1749),
(2451, 'c31', 1750),
(2452, 'c32', 1750),
(2453, 'c33', 1750),
(2454, 'c34', 1750),
(2455, 'c41', 1751),
(2456, 'c42', 1751),
(2457, 'c43', 1751),
(2458, 'c44', 1751),
(2459, 'c51', 1752),
(2460, 'c52', 1752),
(2461, 'c53', 1752),
(2462, 'c54', 1752),
(2463, '', 1753),
(2464, '', 1753),
(2465, '', 1753),
(2466, '', 1753),
(2467, '', 1754),
(2468, '', 1754),
(2469, '', 1754),
(2470, '', 1754),
(2471, '', 1755),
(2472, '', 1755),
(2473, '', 1755),
(2474, '', 1755),
(2475, '', 1756),
(2476, '', 1756),
(2477, '', 1756),
(2478, '', 1756),
(2479, '', 1757),
(2480, '', 1757),
(2481, '', 1757),
(2482, '', 1757),
(2483, '', 1758),
(2484, '', 1758),
(2485, '', 1758),
(2486, '', 1758),
(2487, '', 1759),
(2488, '', 1759),
(2489, '', 1759),
(2490, '', 1759),
(2491, '', 1760),
(2492, '', 1760),
(2493, '', 1760),
(2494, '', 1760),
(2495, '', 1761),
(2496, '', 1761),
(2497, '', 1761),
(2498, '', 1761),
(2499, '', 1762),
(2500, '', 1762),
(2501, '', 1762),
(2502, '', 1762),
(2503, '', 1763),
(2504, '', 1763),
(2505, '', 1763),
(2506, '', 1763),
(2507, '', 1764),
(2508, '', 1764),
(2509, '', 1764),
(2510, '', 1764),
(2511, '', 1765),
(2512, '', 1765),
(2513, '', 1765),
(2514, '', 1765),
(2515, '', 1766),
(2516, '', 1766),
(2517, '', 1766),
(2518, '', 1766),
(2519, '', 1767),
(2520, '', 1767),
(2521, '', 1767),
(2522, '', 1767),
(2523, '', 1768),
(2524, '', 1768),
(2525, '', 1768),
(2526, '', 1768),
(2527, '', 1769),
(2528, '', 1769),
(2529, '', 1769),
(2530, '', 1769),
(2531, '', 1770),
(2532, '', 1770),
(2533, '', 1770),
(2534, '', 1770),
(2535, '', 1771),
(2536, '', 1771),
(2537, '', 1771),
(2538, '', 1771),
(2539, '', 1772),
(2540, '', 1772),
(2541, '', 1772),
(2542, '', 1772),
(2543, '', 1773),
(2544, '', 1773),
(2545, '', 1773),
(2546, '', 1773),
(2547, '', 1774),
(2548, '', 1774),
(2549, '', 1774),
(2550, '', 1774),
(2551, '', 1775),
(2552, '', 1775),
(2553, '', 1775),
(2554, '', 1775),
(2555, '', 1776),
(2556, '', 1776),
(2557, '', 1776),
(2558, '', 1776),
(2559, '', 1777),
(2560, '', 1777),
(2561, '', 1777),
(2562, '', 1777),
(2563, '', 1778),
(2564, '', 1778),
(2565, '', 1778),
(2566, '', 1778),
(2567, '', 1779),
(2568, '', 1779),
(2569, '', 1779),
(2570, '', 1779),
(2571, '', 1780),
(2572, '', 1780),
(2573, '', 1780),
(2574, '', 1780),
(2575, '', 1781),
(2576, '', 1781),
(2577, '', 1781),
(2578, '', 1781),
(2579, '', 1782),
(2580, '', 1782),
(2581, '', 1782),
(2582, '', 1782),
(2583, '', 1783),
(2584, '', 1783),
(2585, '', 1783),
(2586, '', 1783),
(2587, '', 1784),
(2588, '', 1784),
(2589, '', 1784),
(2590, '', 1784),
(2591, '', 1785),
(2592, '', 1785),
(2593, '', 1785),
(2594, '', 1785),
(2595, '', 1786),
(2596, '', 1786),
(2597, '', 1786),
(2598, '', 1786),
(2599, '', 1787),
(2600, '', 1787),
(2601, '', 1787),
(2602, '', 1787),
(2603, '', 1788),
(2604, '', 1788),
(2605, '', 1788),
(2606, '', 1788),
(2607, '', 1789),
(2608, '', 1789),
(2609, '', 1789),
(2610, '', 1789),
(2611, '', 1790),
(2612, '', 1790),
(2613, '', 1790),
(2614, '', 1790),
(2615, '', 1791),
(2616, '', 1791),
(2617, '', 1791),
(2618, '', 1791),
(2619, '', 1792),
(2620, '', 1792),
(2621, '', 1792),
(2622, '', 1792),
(2623, '', 1793),
(2624, '', 1793),
(2625, '', 1793),
(2626, '', 1793),
(2627, '', 1794),
(2628, '', 1794),
(2629, '', 1794),
(2630, '', 1794),
(2631, '', 1795),
(2632, '', 1795),
(2633, '', 1795),
(2634, '', 1795),
(2635, '', 1796),
(2636, '', 1796),
(2637, '', 1796),
(2638, '', 1796),
(2639, '', 1797),
(2640, '', 1797),
(2641, '', 1797),
(2642, '', 1797),
(2643, '', 1798),
(2644, '', 1798),
(2645, '', 1798),
(2646, '', 1798),
(2647, '', 1799),
(2648, '', 1799),
(2649, '', 1799),
(2650, '', 1799),
(2651, '', 1800),
(2652, '', 1800),
(2653, '', 1800),
(2654, '', 1800),
(2655, '', 1801),
(2656, '', 1801),
(2657, '', 1801),
(2658, '', 1801),
(2659, '', 1802),
(2660, '', 1802),
(2661, '', 1802),
(2662, '', 1802),
(2663, '', 1803),
(2664, '', 1803),
(2665, '', 1803),
(2666, '', 1803),
(2667, '', 1804),
(2668, '', 1804),
(2669, '', 1804),
(2670, '', 1804),
(2671, '', 1805),
(2672, '', 1805),
(2673, '', 1805),
(2674, '', 1805),
(2675, '', 1806),
(2676, '', 1806),
(2677, '', 1806),
(2678, '', 1806),
(2679, '', 1807),
(2680, '', 1807),
(2681, '', 1807),
(2682, '', 1807),
(2683, '', 1808),
(2684, '', 1808),
(2685, '', 1808),
(2686, '', 1808),
(2687, '', 1809),
(2688, '', 1809),
(2689, '', 1809),
(2690, '', 1809),
(2691, '', 1810),
(2692, '', 1810),
(2693, '', 1810),
(2694, '', 1810),
(2695, '', 1811),
(2696, '', 1811),
(2697, '', 1811),
(2698, '', 1811),
(2699, '', 1812),
(2700, '', 1812),
(2701, '', 1812),
(2702, '', 1812),
(2703, 'c11', 1813),
(2704, 'c12', 1813),
(2705, 'c13', 1813),
(2706, 'c14', 1813),
(2707, 'cc21', 1814),
(2708, 'cc22', 1814),
(2709, 'cc23', 1814),
(2710, 'cc24', 1814),
(2711, 'cc31', 1815),
(2712, 'cc32', 1815),
(2713, 'cc33', 1815),
(2714, 'cc34', 1815),
(2715, 'cc41', 1816),
(2716, 'c42', 1816),
(2717, 'cc42', 1816),
(2718, 'cc44', 1816),
(2719, 'cc51', 1817),
(2720, 'cc52', 1817),
(2721, 'cc53', 1817),
(2722, 'cc54', 1817),
(2723, 'c11', 1819),
(2724, 'c12', 1819),
(2725, 'c13', 1819),
(2726, 'c14', 1819),
(2727, 'cc21', 1820),
(2728, 'cc22', 1820),
(2729, 'cc23', 1820),
(2730, 'cc24', 1820),
(2731, 'cc31', 1821),
(2732, 'cc32', 1821),
(2733, 'cc33', 1821),
(2734, 'cc34', 1821),
(2735, 'cc41', 1822),
(2736, 'c42', 1822),
(2737, 'cc42', 1822),
(2738, 'cc44', 1822),
(2739, 'cc51', 1823),
(2740, 'cc52', 1823),
(2741, 'cc53', 1823),
(2742, 'cc54', 1823),
(2743, 'c111', 1825),
(2744, 'c121', 1825),
(2745, 'c131', 1825),
(2746, 'c141', 1825),
(2747, 'c211', 1826),
(2748, 'c221', 1826),
(2749, 'c231', 1826),
(2750, 'c241', 1826),
(2751, 'c311', 1827),
(2752, 'c321', 1827),
(2753, 'c331', 1827),
(2754, 'c341', 1827),
(2755, 'c411', 1828),
(2756, 'c421', 1828),
(2757, 'c431', 1828),
(2758, 'c441', 1828),
(2759, 'c511', 1829),
(2760, 'c521', 1829),
(2761, 'c531', 1829),
(2762, 'c541', 1829),
(2763, 'c112', 1830),
(2764, 'c122', 1830),
(2765, 'c132', 1830),
(2766, 'c142', 1830),
(2767, 'c212', 1831),
(2768, 'c222', 1831),
(2769, 'c232', 1831),
(2770, 'c242', 1831),
(2771, 'c312', 1832),
(2772, 'c322', 1832),
(2773, 'c332', 1832),
(2774, 'c342', 1832),
(2775, 'c412', 1833),
(2776, 'c422', 1833),
(2777, 'c432', 1833),
(2778, 'c442', 1833),
(2779, 'c512', 1834),
(2780, 'c522', 1834),
(2781, 'c532', 1834),
(2782, 'c542', 1834),
(2783, 'c113', 1835),
(2784, 'c123', 1835),
(2785, 'c133', 1835),
(2786, 'c143', 1835),
(2787, 'c213', 1836),
(2788, 'c223', 1836),
(2789, 'c233', 1836),
(2790, 'c243', 1836),
(2791, 'c313', 1837),
(2792, 'c323', 1837),
(2793, 'c333', 1837),
(2794, 'c343', 1837),
(2795, 'c413', 1838),
(2796, 'c423', 1838),
(2797, 'c433', 1838),
(2798, 'c443', 1838),
(2799, 'c512', 1839),
(2800, 'c523', 1839),
(2801, 'c533', 1839),
(2802, 'c543', 1839),
(2803, 'c111', 1840),
(2804, 'c121', 1840),
(2805, 'c131', 1840),
(2806, 'c141', 1840),
(2807, 'c211', 1841),
(2808, 'c221', 1841),
(2809, 'c231', 1841),
(2810, 'c241', 1841),
(2811, 'c311', 1842),
(2812, 'c321', 1842),
(2813, 'c331', 1842),
(2814, 'c341', 1842),
(2815, 'c411', 1843),
(2816, 'c421', 1843),
(2817, 'c431', 1843),
(2818, 'c441', 1843),
(2819, 'c511', 1844),
(2820, 'c521', 1844),
(2821, 'c531', 1844),
(2822, 'c541', 1844),
(2823, 'c112', 1845),
(2824, 'c122', 1845),
(2825, 'c132', 1845),
(2826, 'c142', 1845),
(2827, 'c212', 1846),
(2828, 'c222', 1846),
(2829, 'c232', 1846),
(2830, 'c242', 1846),
(2831, 'c312', 1847),
(2832, 'c322', 1847),
(2833, 'c332', 1847),
(2834, 'c342', 1847),
(2835, 'c412', 1848),
(2836, 'c422', 1848),
(2837, 'c432', 1848),
(2838, 'c442', 1848),
(2839, 'c512', 1849),
(2840, 'c522', 1849),
(2841, 'c532', 1849),
(2842, 'c542', 1849),
(2843, 'c113', 1850),
(2844, 'c123', 1850),
(2845, 'c133', 1850),
(2846, 'c143', 1850),
(2847, 'c213', 1851),
(2848, 'c223', 1851),
(2849, 'c233', 1851),
(2850, 'c243', 1851),
(2851, 'c313', 1852),
(2852, 'c323', 1852),
(2853, 'c333', 1852),
(2854, 'c343', 1852),
(2855, 'c413', 1853),
(2856, 'c423', 1853),
(2857, 'c433', 1853),
(2858, 'c443', 1853),
(2859, 'c512', 1854),
(2860, 'c523', 1854),
(2861, 'c533', 1854),
(2862, 'c543', 1854),
(2863, 'c111', 1855),
(2864, 'c121', 1855),
(2865, 'c131', 1855),
(2866, 'c141', 1855),
(2867, 'c211', 1856),
(2868, 'c221', 1856),
(2869, 'c231', 1856),
(2870, 'c241', 1856),
(2871, 'c311', 1857),
(2872, 'c321', 1857),
(2873, 'c331', 1857),
(2874, 'c341', 1857),
(2875, 'c411', 1858),
(2876, 'c421', 1858),
(2877, 'c431', 1858),
(2878, 'c441', 1858),
(2879, 'c511', 1859),
(2880, 'c521', 1859),
(2881, 'c531', 1859),
(2882, 'c541', 1859),
(2883, 'c112', 1860),
(2884, 'c122', 1860),
(2885, 'c132', 1860),
(2886, 'c142', 1860),
(2887, 'c212', 1861),
(2888, 'c222', 1861),
(2889, 'c232', 1861),
(2890, 'c242', 1861),
(2891, 'c312', 1862),
(2892, 'c322', 1862),
(2893, 'c332', 1862),
(2894, 'c342', 1862),
(2895, 'c412', 1863),
(2896, 'c422', 1863),
(2897, 'c432', 1863),
(2898, 'c442', 1863),
(2899, 'c512', 1864),
(2900, 'c522', 1864),
(2901, 'c532', 1864),
(2902, 'c542', 1864),
(2903, 'c113', 1865),
(2904, 'c123', 1865),
(2905, 'c133', 1865),
(2906, 'c143', 1865),
(2907, 'c213', 1866),
(2908, 'c223', 1866),
(2909, 'c233', 1866),
(2910, 'c243', 1866),
(2911, 'c313', 1867),
(2912, 'c323', 1867),
(2913, 'c333', 1867),
(2914, 'c343', 1867),
(2915, 'c413', 1868),
(2916, 'c423', 1868),
(2917, 'c433', 1868),
(2918, 'c443', 1868),
(2919, 'c512', 1869),
(2920, 'c523', 1869),
(2921, 'c533', 1869),
(2922, 'c543', 1869),
(2923, 'c411', 1870),
(2924, 'c421', 1870),
(2925, 'c431', 1870),
(2926, 'c441', 1870),
(2927, 'c512', 1871),
(2928, 'c522', 1871),
(2929, 'c532', 1871),
(2930, 'c542', 1871),
(2931, 'c411', 1872),
(2932, 'c421', 1872),
(2933, 'c431', 1872),
(2934, 'c441', 1872),
(2935, 'c512', 1873),
(2936, 'c522', 1873),
(2937, 'c532', 1873),
(2938, 'c542', 1873);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choice`
--
ALTER TABLE `choice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_quize` (`key_all`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choice`
--
ALTER TABLE `choice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2939;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `choice`
--
ALTER TABLE `choice`
  ADD CONSTRAINT `id_quize` FOREIGN KEY (`key_all`) REFERENCES `quize` (`quiz_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
