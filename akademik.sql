SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `dt_prodi` (
  `idprodi` int(11) NOT NULL,
  `kdprodi` varchar(6) NOT NULL,
  `nmprodi` varchar(70) NOT NULL,
  `akreditasi` enum('A','B','C','-') NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `dt_prodi` (`idprodi`, `kdprodi`, `nmprodi`, `akreditasi`) VALUES
(1, '753', 'Manajemen Informatika', 'B');

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenisuser` enum('0','1') NOT NULL DEFAULT '0',
  `level` enum('00','01','11') NOT NULL DEFAULT '00',
  `status` enum('F','T') NOT NULL DEFAULT 'F',
  `idprodi` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`iduser`, `username`, `password`, `jenisuser`, `level`, `status`, `idprodi`) VALUES
(1, 'superadmin', 'rahasia', '1', '01', 'F', 0),
(2, 'admin1', 'rahasia', '1', '11', 'F', 1);

ALTER TABLE `dt_prodi`
  ADD PRIMARY KEY (`idprodi`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

ALTER TABLE `dt_prodi`
  MODIFY `idprodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
