CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'Designs'),
(2, 'Manicure'),
(3, 'Soin');


CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `nom` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `categorie` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `services` (`id`, `nom`, `image`, `categorie`) VALUES
(19, 'Extension', './assets/images/categories/2/55.jpg', '2'),
(16, 'Capsules', './assets/images/categories/2/25..jpg', '2'),
(18, 'Vernis-Per', './assets/images/categories/2/56.jpg', '2'),
(14, 'frensh', './assets/images/categories/1/45.jpg', '1'),
(11, 'Ombre', './assets/images/categories/1/58..jpg', '1'),
(12, 'Tigre', './assets/images/categories/1/33.jpg', '1'),
(13, 'fleurs', './assets/images/categories/1/50..jpg', '1');


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(225) NOT NULL,
  `prenom` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(11, 'hanen', 'kh', 'kh@gmail.com', '123');

ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;
