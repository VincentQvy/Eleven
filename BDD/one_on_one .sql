-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 avr. 2021 à 12:04
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `one_on_one`
--

-- --------------------------------------------------------

--
-- Structure de la table `channels`
--

DROP TABLE IF EXISTS `channels`;
CREATE TABLE IF NOT EXISTS `channels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `creator_id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `banner_url` varchar(255) NOT NULL,
  `followers` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `creator_id` (`creator_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `channels`
--

INSERT INTO `channels` (`id`, `name`, `creator_id`, `link`, `bio`, `banner_url`, `followers`, `creation_date`) VALUES
(1, 'HearthstoneEsports', 1, 'https://www.youtube.com/c/hearthstoneesports', 'Official channel for Hearthstone Esports. Home of Hearthstone Grandmasters, Masters Tours, and Masters Qualifiers!', 'https://esportsedition.com/wp-content/uploads/2016/07/Hearthstone-Banner.jpg', 84400, '2017-03-29'),
(2, 'ESLArchives', 2, 'https://www.youtube.com/c/ESLArchives', 'ESL Archives is the home for all VoD and vintage content of ESL. From 2006 to the present, if you\'re looking for anything esports, you will find it here.', 'https://yt3.ggpht.com/3-AD9Zw4qtCldQ8a_c_6cq-yrdRyu4P_wKC277_CMPuQXida-YFs5bcC-Ml_q9z4TLd_AxDJOQ=w640-fcrop64=1,32b75a57cd48a5a8-k-c0xffffffff-no-nd-rj', 245000, '2008-05-26'),
(3, 'Warcraft', 3, 'https://www.youtube.com/c/Warcraft', 'Enter the World of Warcraft and descend into a world of myth, magic, and legendary adventure. Enter the Shadowlands - Available Now\r\n\r\nhttps://worldofwarcraft.com/en-us/shadowlands', 'https://i1.wp.com/www.peakofserenity.com/wp-content/uploads/2020/04/Banner.png?resize=716%2C260&ssl=1', 1570000, '2006-03-08'),
(4, 'OverwatchLeague', 4, 'https://www.youtube.com/c/overwatchleague', 'The official account of the Overwatch League. We are a professional esports league with 20 city-based teams worldwide Join us LIVE on stream RIGHT HERE throughout all of #OWL2020! \r\n\r\nThis year the battle comes home, check tickets for an event near you ', 'https://topbettingesports.com/wp-content/uploads/2020/06/Overwatch-Launch-14.jpg', 661000, '2016-10-20'),
(5, 'OTPLoL', 5, 'https://www.youtube.com/c/OTPLoL', 'Informations', 'https://www.otp.tv/uploads/LIGUES.png', 37100, '2021-01-13'),
(6, 'Doigby', 6, 'https://www.youtube.com/c/Doigby', 'Ma vie est un jeu, donc je joue ma vie ! \r\n\r\nJe suis le streamer préféré de ton streamer préféré.\r\n\r\nRejoins-nous sur Discord !\r\nDes concepts et des GIVEAWAY exclusifs rien que pour vous sur : https://dis.gd/doigby-smb', 'https://static1-fr.millenium.gg/article_old/images/contenu/actus/LOL/M_Spirit/banner_doigby.png', 1290000, '2012-03-31');

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `publication_date` date NOT NULL,
  `developpers` varchar(60) NOT NULL,
  `publishers` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`id`, `name`, `publication_date`, `developpers`, `publishers`, `description`, `image_url`) VALUES
(1, 'Counter-Strike: Global Offensive', '2012-08-21', 'Valve Corporation', 'Valve Corporation', 'Counter-Strike: Global Offensive (abrégé CS:GO) est un jeu de tir à la première personne multijoueur en ligne basé sur le jeu d\'équipe développé par Valve Corporation. Il est sorti le 21 août 2012 sur PC et consoles (Xbox 360, PlayStation 3)1. En 2017, Microsoft annonce que le jeu sur Xbox 360 sera compatible avec la Xbox One. Depuis le 6 décembre 2018, le jeu est disponible gratuitement en free-to-play2.', 'images/CSGO.jpg'),
(2, 'Dota 2', '2013-07-09', 'Valve Corporation', 'Valve Corporation', 'Dota 2 est un jeu vidéo de type arène de bataille en ligne multijoueur développé et édité par Valve Corporation avec l\'aide de certains des créateurs du jeu d\'origine : Defense of the Ancients, un mod de carte personnalisée pour le jeu de stratégie en temps réel Warcraft III: Reign of Chaos et son extension Warcraft III: The Frozen Throne. Le jeu est sorti en juillet 2013 sur Microsoft Windows, OS X et Linux mettant fin à une phase bêta commencée en 2011. Il est disponible exclusivement sur la plateforme de jeu en ligne Steam.\r\n\r\nDota 2 se joue en matches indépendants opposant deux équipes de cinq joueurs, chacune possédant une base située en coin de carte contenant un bâtiment appelé l\'« Ancient », dont la destruction mène à la victoire de l\'équipe ennemie. Chaque joueur contrôle un « Héros » et est amené à accumuler de l’expérience, gagner de l\'or, s\'équiper d\'objets et combattre l\'équipe ennemie pour parvenir à la victoire.\r\n\r\nLe développement de Dota 2 commence en 2009, lorsque Valve embauche IceFrog, programmeur principal de Defense of the Ancients. Le jeu reçoit de très bonnes critiques à sa sortie dues à son système de jeu gratifiant, sa production de qualité et sa fidélité au mod originel. Il fut néanmoins critiqué pour sa courbe d\'apprentissage raide et sa communauté peu accueillante. Dota 2 a longtemps été le jeu le plus joué sur Steam, avec des pics quotidiens de plus de 900 000 joueurs connectés en même temps1, ainsi que plus de 13 000 000 de joueurs mensuels2.', 'images/D2.jpg'),
(3, 'F1 2020', '2020-07-10', 'Codemasters Birmingham', 'Codemasters', 'F1 2020 est le jeu vidéo officiel des Championnats de Formule 1 et de Formule 2 2020 développé et édité par Codemasters. Il s\'agit du treizième titre de la série Formula One développé par le studio, sorti le 10 juillet 2020 pour Microsoft Windows, PlayStation 4, Xbox One et Stadia1. Le jeu, le douzième volet de la franchise, présente les vingt-deux circuits, vingt pilotes et dix équipes présents au championnat du monde de Formule 1 2020.\r\n\r\nF1 2020 met en vedette le championnat initialement prévu avant la pandémie de COVID-19 qui a provoqué reports et annulations.', 'images/F1.jpg'),
(4, 'FIFA 21', '2020-10-09', 'EA Canada & EA Roumanie', 'EA Sports', 'FIFA 21 est un jeu vidéo de football développé par EA Canada et EA Roumanie et édité par EA Sports. La date de sortie du jeu, annoncée le 21 juin 2020, et la sortie est prévue en septembre 2020 sur PC, PlayStation 4, Xbox One et Nintendo Switch et le 4 décembre 2020 sur PlayStation 5, Xbox Series et la version de Stadia est prévue pour le 17 mars 2021. Il n\'y aura pas de version démo cette année. Le jeu est également disponible à partir du 1er octobre pour les joueurs bénéficiant de l\'EA Access ou de l\'Origin Access. Sur Fifa 21, trois versions différentes de cet opus sont disponibles : l\'édition Standard, l\'édition Champions et l\'édition Ultimate, ainsi que l\'édition essentielle conçu uniquement pour la console Nintendo Switch. Il s\'agit du vingt neuvième opus de la franchise FIFA développé par EA Sports.\r\n\r\nPour cette édition de FIFA, c\'est l\'international français Kylian Mbappé qui figure sur la jaquette du jeu. Sur l\'édition Standard, il est vêtu du maillot domicile parisien ; sur l\'édition Champions, il est affublé du maillot extérieur avec le patch de la Ligue des Champions sur l\'épaule et sur l\'édition Ultimate, il apparaît en civil lors de l\'arrivée à Clairefontaine pour un rassemblement avec l\'Équipe de France.', 'images/F21.jpg'),
(5, 'Fortnite', '2017-07-25', 'Epic Games & People Can Fly', 'Epic Games', 'Fortnite est un jeu en ligne développé par Epic Games sous la forme de différents logiciels proposant différents modes de jeu qui partagent le même gameplay général et le même moteur de jeu. Les modes de jeu comportent Fortnite : Sauver le monde, un jeu coopératif de tir et de survie conçu pour quatre joueurs au maximum et dont le but est de combattre des zombies et de défendre des objets à l\'aide de fortifications, et Fortnite Battle Royale, un jeu de battle royal en free-to-play où jusqu\'à 100 joueurs se battent entre eux dans des espaces de plus en plus petits avec pour objectif d\'être le dernier survivant. Ces deux modes de jeux sont déconseillés aux moins de douze ans en Europe (PEGI : 12) et aux moins de treize ans en Amérique du nord (ESRB : Teen).\r\n\r\nLe mode de jeu Fortnite : Sauver le monde a été publié en 2011 en bêta alors que le mode Fortnite Battle Royale a été publié plus tard à partir de 2017 en accès anticipé ; Sauver le monde est disponible uniquement pour Microsoft Windows, MacOS, PlayStation 4 et Xbox One, tandis que Battle Royale a été publié pour ces dernières plates-formes, mais aussi pour Nintendo Switch, les appareils iOS et Android qui ne supportaient pas un tel téléchargement de données.\r\n\r\nSi les deux jeux ont été un succès pour Epic Games, Fortnite Battle Royale est devenu un phénomène de société, attirant plus de 125 millions de joueurs en moins d\'un an et générant des centaines de millions de dollars par mois. Epic Games annonce en 2019 que Fortnite compte 250 millions de joueurs, soit deux fois plus qu\'en juin 2018. Depuis début décembre 2020, il est possible de souscrire à un abonnement mensuel, la nouvelle formule payante de Fortnite.', 'images/FTN.jpg'),
(6, 'Hearthstone', '2014-03-11', 'Blizzard Entertainment', 'Blizzard Entertainment', 'Hearthstone (anciennement Hearthstone: Heroes of Warcraft) est un jeu de cartes à collectionner en ligne, développé et édité par la société Blizzard Entertainment. C\'est un jeu gratuit (free to play) s\'inspirant de l\'univers de fiction médiéval-fantastique du jeu vidéo Warcraft développé par Blizzard.\r\n\r\nAnnoncé le 22 mars 2013, le jeu sort officiellement le 11 mars 2014 sur Windows et OS X. Il est ensuite porté sur tablettes iPad le 17 avril 2014, puis Android le 16 décembre 2014. Il est enfin proposé sur iPhone et les smartphones Android à compter du 15 avril 2015\r\n\r\nConnaissant un grand succès à sa sortie, le jeu remporte le prix du meilleur jeu portable lors des Game Awards 2014. À la date de novembre 2018, Blizzard annonce avoir atteint le cap des 100 millions de joueurs inscrits au jeu. En février 2021, Blizzard annonce qu\'un peu plus de 23 millions de joueurs actifs ont été comptabilisés pour l\'année 2020.', 'images/HS.jpg'),
(7, 'League of Legends', '2009-10-27', 'Riot Games', 'Riot Games & Tencent Holdings', 'League of Legends (abrégé LoL) est un jeu vidéo sorti en 2009 de type arène de bataille en ligne, free-to-play, développé et édité par Riot Games sur Windows et Mac OS.\r\n\r\nLe mode principal du jeu voit s\'affronter deux équipes de 5 joueurs en temps réel dans des parties d\'une durée d\'environ une demi-heure, chaque équipe occupant et défendant sa propre base sur la carte. Chacun des dix joueurs contrôle un personnage à part entière parmi les plus de 150 qui sont proposés. Ces personnages, connus sous le nom de « champions » dans le jeu, disposent de compétences uniques et d\'un style de jeu qui leur est propre. Ils gagnent en puissance au fil de la partie en amassant des points d\'expérience ainsi qu\'en achetant des objets, dans le but de battre l\'équipe adverse. L\'objectif d\'une partie est de détruire le « Nexus » ennemi, une large structure située au centre de chaque base. D\'autres modes de jeu, généralement moins compétitifs et se basant quasiment toujours sur le mode principal, sont également présents — à l\'exception de Teamfight Tactics, un auto battler sorti en 2019 sans grand rapport avec le mode principal et qui dispose de sa propre communauté.\r\n\r\nInitialement inspiré de Defense of the Ancients, un ancien mod de Warcraft III, le jeu est publié le 27 octobre 2009 et adopte dès sa sortie un modèle économique « freemium ». Il est souvent considéré comme le jeu vidéo ayant la plus large scène compétitive au monde, ses compétitions étant internationales et réunissant d\'importantes audiences. Le Championnat du monde de League of Legends 2019, par exemple, réunissait plus de 44 millions de spectateurs simultanés lors de ses pics de popularité, en novembre 2019.\r\n\r\nLeague of Legends a reçu des critiques généralement positives, gagnant des prix pour son accessibilité, le design de ses personnages et sa valeur ajoutée. En juillet 2012, il était le premier jeu vidéo sur ordinateur en terme d\'heures jouées en Europe et aux États-Unis. Son importante popularité a conduit à la création de produits dérivés tels que des clips musicaux, des bandes dessinées, des nouvelles, des figurines, et, prochainement, d\'une série animée nommée Arcane.\r\n\r\nLe succès du jeu a également donné naissance à plusieurs autres jeux vidéo situés dans le même univers, tels que Legends of Runeterra, un jeu de cartes à collectionner, Ruined King: A League of Legends Story, un jeu de rôle au tour par tour, et League of Legends: Wild Rift, une adaptation sur mobile et console de LoL.', 'images/LOL.jpg'),
(8, 'Overwatch', '2016-05-24', 'Blizzard Entertainment', 'Blizzard Entertainment', 'Overwatch est un jeu vidéo de tir (FPS) en ligne et en équipe, développé et publié par Blizzard Entertainment. Le jeu est annoncé le 7 novembre 2014 à la BlizzCon, et est commercialisé le 24 mai 2016 sur Windows, PlayStation 4 et Xbox One et le 15 octobre 2019 sur Nintendo Switch. Le jeu met l\'accent sur la coopération entre différentes classes représentées par différents personnages ayant chacun leurs capacités et particularités. Le jeu s\'inspire notamment des jeux de tir en vue subjective en équipe de la décennie précédente mettant eux aussi l\'accent sur la coopération entre plusieurs classes de personnage, notamment Team Fortress 2. Le 1er novembre 2019, Blizzard annonce la production de Overwatch 2, lors de cette BlizzCon. Le développement de ce second opus reste à suivre.', 'images/OW.jpg'),
(9, 'Tom Clancy\'s Rainbow Six: Siege', '2015-12-01', 'Ubisoft Montréal', 'Ubisoft', 'Tom Clancy\'s Rainbow Six Siege est un jeu vidéo de tir tactique développé par Ubisoft Montréal et édité par Ubisoft, sorti le 1er décembre 2015 sur PlayStation 4, Xbox One et Windows.', 'images/R6.jpg'),
(10, 'Rocket League', '2015-07-07', 'Psyonix & Panic Button', 'Psyonix', 'Rocket League est un jeu vidéo de sport développé et édité par Psyonix. Il sort en juillet 2015 sur Windows et sur PlayStation 4, en février 2016 sur Xbox One, en septembre 2016 sur Linux et Mac et en novembre 2017 sur Nintendo Switch.\r\n\r\nLe jeu est inspiré du football : deux équipes, composées de un à quatre joueurs conduisant des véhicules, s\'affrontent au cours d\'un match afin de frapper un ballon et de marquer dans le but adverse. Les voitures sont équipées de propulseurs (boost) et peuvent sauter, permettant de jouer le ballon dans les airs. Des mises à jour du jeu incluent également d\'autres modes de jeu, se rapprochant du basket-ball ou du hockey sur glace.\r\n\r\nRocket League fait suite à Supersonic Acrobatic Rocket-Powered Battle-Cars, un jeu vidéo sorti en 2008 sur PlayStation 3 et également développé par Psyonix. Si ce premier jeu a reçu un accueil mitigé, une base solide d\'amateurs a motivé le studio à produire une nouvelle version, cette fois-ci disponible sur plusieurs plateformes.\r\n\r\nLe jeu est reconnu pour son style de jeu unique et a recueilli de nombreuses distinctions. Le studio revendique plus de 10 millions de ventes en deux ans (au premier trimestre 2017) et 60 millions de joueurs en 2019. Rocket League est racheté par Epic Games en 2020, qui le commercialise en free-to-play.', 'images/RL.jpg'),
(11, 'StarCraft 2: Wings of Liberty', '2010-07-27', 'Blizzard Entertainment', 'Blizzard Entertainment', 'StarCraft 2: Wings of Liberty est un jeu vidéo de stratégie en temps réel (STR) développé par Blizzard Entertainment. La première partie du jeu est publiée le 27 juillet 2010 sur PC et Macintosh et fait suite à StarCraft et à son extension StarCraft: Brood War publiés en 1998. StarCraft 2 est divisé en trois parties, le jeu de base sous-titré Wings of Liberty étant complété par deux extensions appelées Heart of the Swarm et Legacy of the Void.\r\n\r\nLe jeu prend place au xxvie siècle et relate les affrontements entre trois espèces distinctes pour la domination d’une zone de la voie lactée connue sous le nom de Secteur Koprulu : les Terrans, constitués de descendants de bagnards terriens exilés loin de leur monde natal, les Zergs, une race de créatures modifiées génétiquement et obsédées par l’assimilation des autres espèces de la galaxie, et les Protoss, une race d’humanoïdes qui dispose de technologies et de pouvoirs psioniques très avancés. L’histoire de StarCraft 2: Wings of Liberty se déroule quatre ans après les événements de StarCraft: Brood War. Elle se concentre sur la lutte d’un groupe de rebelles Terrans mené par Jim Raynor qui combat un régime autoritaire, le Dominion. Les deux extensions Heart of the Swarm et Legacy of the Void se concentrent respectivement sur l’histoire des Zergs puis sur celle des Protoss.\r\n\r\nStarCraft 2 connaît rapidement un important succès commercial avec plus de 3 millions de copies vendues un mois après sa sortie. En décembre 2010, Blizzard Entertainment annonce avoir vendu 4,5 millions de copies depuis la sortie du jeu, Starcraft II est devenu gratuit à partir de novembre 2017.', 'images/SC2.jpg'),
(12, 'Super Smash Bros. Ultimate', '2018-12-07', 'Sora Ltd. & Bandai Namco', 'Nintendo', 'Super Smash Bros. Ultimate (大乱闘スマッシュブラザーズ SPECIAL, Dairantō Sumasshu Burazāzu Supesharu?) est un jeu vidéo de combat et de plates-formes développé par Sora Ltd. et Bandai Namco et édité par Nintendo. Il s\'agit du cinquième épisode de la série Super Smash Bros.. Annoncé lors du Nintendo Direct du 8 mars 2018, il est sorti mondialement le 7 décembre 2018 exclusivement sur Nintendo Switch.', 'images/SSBU.jpg'),
(13, 'Teamfight Tactics', '2019-06-26', 'Riot Games', 'Riot Games', 'Teamfight Tactics (abrégé TFT, parfois Combat Tactique (abrégé CT) en français) est un jeu vidéo de type auto battler développé et édité par Riot Games. Il prend place dans l\'univers de League of Legends et est basé sur le jeu Dota Auto Chess, où le joueur affronte sept adversaires en ligne, qu\'il doit combattre en formant une équipe afin d\'être le dernier à rester en vie. Le jeu, directement jouable depuis le client de League of Legends, sort sur Windows et macOS le 26 juin 2019 et sur Android et iOS le 19 mars 2020.', 'images/TFT.jpg'),
(14, 'Valorant', '2020-06-02', 'Riot Games', 'Riot Games', 'Valorant (stylisé VALORANT) est un jeu vidéo free-to-play de tir à la première personne en multijoueur développé et édité par Riot Games et sorti le 2 juin 2020.', 'images/VAL.jpg'),
(15, 'World of Warcraft', '2004-11-23', 'Blizzard Entertainment', 'Blizzard Entertainment', 'World of Warcraft /wɜrld.əv.wɔr.kræft/ (abrégé WoW) est un jeu vidéo de type MMORPG (jeu de rôle en ligne massivement multijoueur) développé par la société Blizzard Entertainment. C\'est le 4e jeu de l\'univers médiéval-fantastique Warcraft, introduit par Warcraft: Orcs and Humans en 1994. World of Warcraft prend place en Azeroth, près de quatre ans après les événements de la fin du jeu précédent, Warcraft III: The Frozen Throne (2003). Blizzard Entertainment annonce World of Warcraft le 2 septembre 2001. Le jeu est sorti en Amérique du Nord le 23 novembre 2004, pour les 10 ans de la franchise Warcraft.\r\n\r\nLa première extension du jeu, The Burning Crusade, est sortie le 16 janvier 2007. Depuis, sept extensions de plus ont été développées : Wrath of the Lich King, Cataclysm, Mists of Pandaria, Warlords of Draenor, Legion, Battle for Azeroth et Shadowlands.\r\n\r\nDepuis sa sortie, World of Warcraft est le plus populaire des MMORPG. Le jeu tient le Guinness World Record pour la plus grande popularité pour un MMORPG. En avril 2008, World of Warcraft a été estimé comme rassemblant 62 % des joueurs de MMORPG. Le 7 octobre 2010, Blizzard annonce que plus de 12 millions de joueurs ont un compte World of Warcraft actif. C\'est à partir de fin 2012 que World of Warcraft a commencé à perdre continuellement un nombre croissant de joueurs. Au dernier trimestre 2012, Blizzard annonce le nombre de 9,6 millions d’abonnés à travers le monde, puis 7,7 millions pour le 2e trimestre 2013.\r\n\r\nWorld of Warcraft a fêté son 10e anniversaire en novembre 2014. Le mois suivant, à la suite de la sortie de l\'extension Warlords of Draenor, Blizzard annonce que World of Warcraft repasse le cap des 10 millions d\'abonnés.', 'images/WOW.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` tinytext NOT NULL,
  `firstname` tinytext NOT NULL,
  `lastname` tinytext NOT NULL,
  `email` mediumtext NOT NULL,
  `password` text NOT NULL,
  `profil_pic` text NOT NULL,
  `is_creator` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `firstname`, `lastname`, `email`, `password`, `profil_pic`, `is_creator`) VALUES
(1, 'Hearthstone Esports', 'Cedric', 'Bucher', 'cedric.bucher@blizzard.com', 'f4083d8a7aa26b28321bbc1d18c4dadf', 'https://pbs.twimg.com/profile_images/981433283153203201/KV1c7rTC.jpg', 1),
(2, 'ESL Archives', 'Craig', 'Levine', 'craig.levine@eslgaming.com', '33856c69831556f78947903d82a7e2a1', 'https://www.nygamesconference.com/wp-content/uploads/sites/3/2018/08/Craig-levine.jpg', 1),
(3, 'World of Warcraft', 'Chris', 'Metzen', 'chris.metzen@blizzard.com', '7ef9141f0c3c1f5197b95d281d656f8a', 'https://pbs.twimg.com/profile_images/937437002101768192/vdOMQH-q_400x400.jpg', 1),
(4, 'Overwatch League', 'Jeff', 'Kaplan', 'jeff.kaplan@blizzard.com', '94cd0fb23b2a7c6200d35548b37e0a7e', 'https://anniversaire-celebrite.com/upload/250x333/jeff-kaplan-250.jpg', 1),
(5, 'OTP LoL', 'Kevin', 'Remy', 'kevin.remy@gmail.com', 'b2dbf41b9895300fe14dd20dd96c5b06', 'http://www.eclypsia.com/public/upload/cke/Tops/Buzz/HostLCSFr/1.jpg', 1),
(6, 'Doigby', 'Arif', 'Akin', 'doigby@doigby.com', 'fc0813034f2ea80b8a42aa1660b5be63', 'https://www.streamingnews.fr/wp-content/uploads/2019/04/doigby-femme.jpg', 1),
(13, 'Eskaa', 'Batiste', 'Nugier', 'bnugier@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0', 0),
(27, 'Woojys', 'Vincent', 'Quivy', 'v.quivy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0', 0),
(28, 'jean', 'dupont', 'valentin', 'dupont@gmail.com', 'ab4f63f9ac65152575886860dde480a1', '0', 0),
(29, 'bogoss', 'delers', 'etienne', 'delers@gmail.com', 'ab4f63f9ac65152575886860dde480a1', '0', 0),
(32, 'nice', 'trois', 'maxime', 'maxime@gmail.com', 'ab4f63f9ac65152575886860dde480a1', '0', 0),
(33, 'wooojys', 'valjean', 'jean', 'valjean@gmail.com', 'ab4f63f9ac65152575886860dde480a1', '0', 0);

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `url` text NOT NULL,
  `image` text NOT NULL,
  `publication_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`),
  KEY `game_id` (`game_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`id`, `channel_id`, `game_id`, `name`, `url`, `image`, `publication_date`) VALUES
(1, 1, 6, 'Eddie vs Tincho', 'https://www.youtube.com/embed/U0pHhMpVrSE', 'images/Hearstone.jpg', '2021-04-23 07:39:22'),
(2, 1, 6, 'Eddie vs Tincho', 'https://www.youtube.com/embed/U0pHhMpVrSE', 'images/Hearstone.jpg', '2021-04-23 07:39:38'),
(3, 1, 6, 'Eddie vs Tincho', 'https://www.youtube.com/embed/U0pHhMpVrSE', 'images/Hearstone.jpg', '2021-04-23 07:39:38'),
(4, 1, 6, 'Eddie vs Tincho', 'https://www.youtube.com/embed/U0pHhMpVrSE', 'images/Hearstone.jpg', '2021-04-23 07:39:38'),
(5, 1, 6, 'Eddie vs Tincho', 'https://www.youtube.com/embed/U0pHhMpVrSE', 'images/Hearstone.jpg', '2021-04-23 07:39:38'),
(6, 1, 6, 'Eddie vs Tincho', 'https://www.youtube.com/embed/U0pHhMpVrSE', 'images/Hearstone.jpg', '2021-04-23 07:39:38'),
(7, 1, 6, 'Eddie vs Tincho', 'https://www.youtube.com/embed/U0pHhMpVrSE', 'images/Hearstone.jpg', '2021-04-23 07:39:38'),
(8, 1, 6, 'Eddie vs Tincho', 'https://www.youtube.com/embed/U0pHhMpVrSE', 'images/Hearstone.jpg', '2021-04-23 07:39:38'),
(9, 1, 6, 'Eddie vs Tincho', 'https://www.youtube.com/embed/U0pHhMpVrSE', 'images/Hearstone.jpg', '2021-04-23 07:39:38'),
(10, 2, 1, 'CS:GO - G2 Esports vs. Team Liquid', 'https://www.youtube.com/embed/4sRGY4XMluU', 'images/CSGO.jpg', '2021-04-23 07:42:03'),
(11, 2, 1, 'CS:GO - G2 Esports vs. Team Liquid', 'https://www.youtube.com/embed/4sRGY4XMluU', 'images/CSGO.jpg', '2021-04-23 07:42:10'),
(12, 2, 1, 'CS:GO - G2 Esports vs. Team Liquid', 'https://www.youtube.com/embed/4sRGY4XMluU', 'images/CSGO.jpg', '2021-04-23 07:42:03'),
(13, 2, 1, 'CS:GO - G2 Esports vs. Team Liquid', 'https://www.youtube.com/embed/4sRGY4XMluU', 'images/CSGO.jpg', '2021-04-23 07:42:10'),
(14, 2, 1, 'CS:GO - G2 Esports vs. Team Liquid', 'https://www.youtube.com/embed/4sRGY4XMluU', 'images/CSGO.jpg', '2021-04-23 07:42:03'),
(15, 2, 1, 'CS:GO - G2 Esports vs. Team Liquid', 'https://www.youtube.com/embed/4sRGY4XMluU', 'images/CSGO.jpg', '2021-04-23 07:42:10'),
(16, 2, 1, 'CS:GO - G2 Esports vs. Team Liquid', 'https://www.youtube.com/embed/4sRGY4XMluU', 'images/CSGO.jpg', '2021-04-23 07:42:03'),
(17, 2, 1, 'CS:GO - G2 Esports vs. Team Liquid', 'https://www.youtube.com/embed/4sRGY4XMluU', 'images/CSGO.jpg', '2021-04-23 07:42:10'),
(18, 3, 15, 'AWC SL Circuit | Week 4 Day 2', 'https://www.youtube.com/embed/veRkjLdlQWI', 'images/Wow.jpg', '2021-04-23 07:47:00'),
(19, 3, 15, 'AWC SL Circuit | Week 4 Day 2', 'https://www.youtube.com/embed/veRkjLdlQWI', 'images/Wow.jpg', '2021-04-23 07:47:02'),
(20, 3, 15, 'AWC SL Circuit | Week 4 Day 2', 'https://www.youtube.com/embed/veRkjLdlQWI', 'images/Wow.jpg', '2021-04-23 07:47:00'),
(21, 3, 15, 'AWC SL Circuit | Week 4 Day 2', 'https://www.youtube.com/embed/veRkjLdlQWI', 'images/Wow.jpg', '2021-04-23 07:47:02'),
(22, 3, 15, 'AWC SL Circuit | Week 4 Day 2', 'https://www.youtube.com/embed/veRkjLdlQWI', 'images/Wow.jpg', '2021-04-23 07:47:00'),
(23, 3, 15, 'AWC SL Circuit | Week 4 Day 2', 'https://www.youtube.com/embed/veRkjLdlQWI', 'images/Wow.jpg', '2021-04-23 07:47:02'),
(24, 3, 15, 'AWC SL Circuit | Week 4 Day 2', 'https://www.youtube.com/embed/veRkjLdlQWI', 'images/Wow.jpg', '2021-04-23 07:47:00'),
(25, 3, 15, 'AWC SL Circuit | Week 4 Day 2', 'https://www.youtube.com/embed/veRkjLdlQWI', 'images/Wow.jpg', '2021-04-23 07:47:02'),
(26, 4, 8, 'FRANCE VS POLOGNE Overwatch Worldcup 2018', 'https://www.youtube.com/embed/DpfHGZzo6D4', 'images/Overwatch.jpg', '2021-04-23 07:50:29'),
(27, 4, 8, 'FRANCE VS POLOGNE Overwatch Worldcup 2018', 'https://www.youtube.com/embed/DpfHGZzo6D4', 'images/Overwatch.jpg', '2021-04-23 07:50:31'),
(28, 4, 8, 'FRANCE VS POLOGNE Overwatch Worldcup 2018', 'https://www.youtube.com/embed/DpfHGZzo6D4', 'images/Overwatch.jpg', '2021-04-23 07:50:31'),
(29, 4, 8, 'FRANCE VS POLOGNE Overwatch Worldcup 2018', 'https://www.youtube.com/embed/DpfHGZzo6D4', 'images/Overwatch.jpg', '2021-04-23 07:50:29'),
(30, 4, 8, 'FRANCE VS POLOGNE Overwatch Worldcup 2018', 'https://www.youtube.com/embed/DpfHGZzo6D4', 'images/Overwatch.jpg', '2021-04-23 07:50:29'),
(31, 4, 8, 'FRANCE VS POLOGNE Overwatch Worldcup 2018', 'https://www.youtube.com/embed/DpfHGZzo6D4', 'images/Overwatch.jpg', '2021-04-23 07:50:31'),
(32, 4, 8, 'FRANCE VS POLOGNE Overwatch Worldcup 2018', 'https://www.youtube.com/embed/DpfHGZzo6D4', 'images/Overwatch.jpg', '2021-04-23 07:50:31'),
(33, 4, 8, 'FRANCE VS POLOGNE Overwatch Worldcup 2018', 'https://www.youtube.com/embed/DpfHGZzo6D4', 'images/Overwatch.jpg', '2021-04-23 07:50:29'),
(34, 6, 5, 'GRANDE FINALE DE LA LYON E-SPORT !', 'https://www.youtube.com/embed/Ag0IjbHVaP8', 'images/Fortnite.jpg', '2021-04-23 07:52:23'),
(35, 6, 5, 'GRANDE FINALE DE LA LYON E-SPORT !', 'https://www.youtube.com/embed/Ag0IjbHVaP8', 'images/Fortnite.jpg', '2021-04-23 07:52:24'),
(36, 6, 5, 'GRANDE FINALE DE LA LYON E-SPORT !', 'https://www.youtube.com/embed/Ag0IjbHVaP8', 'images/Fortnite.jpg', '2021-04-23 07:52:24'),
(37, 6, 5, 'GRANDE FINALE DE LA LYON E-SPORT !', 'https://www.youtube.com/embed/Ag0IjbHVaP8', 'images/Fortnite.jpg', '2021-04-23 07:52:23'),
(38, 6, 5, 'GRANDE FINALE DE LA LYON E-SPORT !', 'https://www.youtube.com/embed/Ag0IjbHVaP8', 'images/Fortnite.jpg', '2021-04-23 07:52:23'),
(39, 6, 5, 'GRANDE FINALE DE LA LYON E-SPORT !', 'https://www.youtube.com/embed/Ag0IjbHVaP8', 'images/Fortnite.jpg', '2021-04-23 07:52:24'),
(40, 6, 5, 'GRANDE FINALE DE LA LYON E-SPORT !', 'https://www.youtube.com/embed/Ag0IjbHVaP8', 'images/Fortnite.jpg', '2021-04-23 07:52:24'),
(41, 6, 5, 'GRANDE FINALE DE LA LYON E-SPORT !', 'https://www.youtube.com/embed/Ag0IjbHVaP8', 'images/Fortnite.jpg', '2021-04-23 07:52:23');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `channels`
--
ALTER TABLE `channels`
  ADD CONSTRAINT `creator_id` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `channel_id` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`),
  ADD CONSTRAINT `game_id` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
