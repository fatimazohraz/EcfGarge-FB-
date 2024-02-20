-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `horaires`;
CREATE TABLE IF NOT EXISTS `horaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jour` varchar(255) NOT NULL,
  'état' varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `jour`,`matin`,`aprés midi`,`état`) VALUES
(1, 'lundi',``,``,NULL),
(2, 'mardi',``,``,NULL),
(3, 'mercredi',``,``,NULL);
(4, 'jeudi',``,``,NULL),
(5, 'vendredi',``,``,NULL),
(6, 'samedi',``,``,NULL),
(7, 'dimanche',``,``,NULL);

-- --------------------------------------------------------