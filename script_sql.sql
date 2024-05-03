--Il seguente codice è frutto di un dump automatico fatto tramite PHP-MyAdmin, normalmente non è necessario racchiudere i nomi di tabelle e campi tra apici inversi ``  :)

CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Struttura della tabella `gatti`
--

CREATE TABLE `gatti` (
  `id_gatto` int(11) NOT NULL,
  `nome_gatto` varchar(200) DEFAULT NULL,
  `razza` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `username` varchar(20) NOT NULL,
  `password_utente` char(255) DEFAULT NULL,
  `ruolo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--

INSERT INTO `utenti` (`username`, `password_utente`, `ruolo`) VALUES
('Anto', '$2y$10$0nFwyVqOdBwP30qGe63Wk.vBPSLEwNKqdJfM2K2zh1FEwaGREFvr.', 'admin'),
('Bho', '$2y$10$EHSa5Apa4YvY9oun4QVu..MLGlC6eLYORShUQkRPACgZTuFGdjZA.', 'base');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `gatti`
--
ALTER TABLE `gatti`
  ADD PRIMARY KEY (`id_gatto`),
  ADD UNIQUE KEY `nome_gatto` (`nome_gatto`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `gatti`
--
ALTER TABLE `gatti`
  MODIFY `id_gatto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
