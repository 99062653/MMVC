CREATE TABLE `reserveringen` (
  `id` int(11) NOT NULL,
  `paardid` int(100) NOT NULL,
  `klantid` int(100) NOT NULL,
  `aantaluren` int(100) NOT NULL,
  `date` date NOT NULL,
  `tijd` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `reserveringen`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `reserveringen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;