CREATE TABLE `paarden` (
  `id` int(11) NOT NULL,
  `naam` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `soort` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `paarden`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `paarden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;