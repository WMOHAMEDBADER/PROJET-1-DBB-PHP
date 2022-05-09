SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Database: stagiaires




-- Table structure for table stagiaires


CREATE TABLE stagiaires (
  id int(11) NOT NULL,
  nom varchar(45) DEFAULT NULL,
  prenom varchar(45) DEFAULT NULL,
  age int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Dumping data for table stagiaires


INSERT INTO stagiaires (id, nom, prenom, age) VALUES
(1, 'Jamaoui', 'Mouad', 28),
(10, 'Riahi', 'Rabie', 18);


-- Indexes for dumped tables



-- Indexes for table stagiaires

ALTER TABLE stagiaires
  ADD PRIMARY KEY (id);


-- AUTO_INCREMENT for dumped tables



-- AUTO_INCREMENT for table stagiaires

ALTER TABLE stagiaires
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

