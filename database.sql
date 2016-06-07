/* CREATE TABLE */
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* INSERT DATA */
INSERT INTO `usuarios` (`id`, `nome`, `email`)
VALUES
	(1,'Emerson P. Souza','dictum.eu@a.co.uk'),
	(2,'Ralph','molestie.orci.tincidunt@nec.ca'),
	(3,'Armand','neque.et@Duisacarcu.ca'),
	(4,'Malcolm','metus.facilisis.lorem@Nullamutnisi.net'),
	(5,'Adam','enim.Nunc@ligula.co.uk'),
	(6,'Thaddeus','ornare.egestas.ligula@adipiscingelit.edu'),
	(7,'Addison','dictum.eu@nonummy.ca'),
	(8,'Rashad','risus@venenatislacusEtiam.org'),
	(9,'Novo usuario','user@test.com'),
	(10,'dasas','asdasd@asdasd.com');

