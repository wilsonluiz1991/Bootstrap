create database fseletroo;

use fseletroo;

CREATE TABLE `fseletroo`.`produtos` (
  `idprodutos` INT NOT NULL AUTO_INCREMENT,
  `Categoria` VARCHAR(150) NOT NULL,
  `descricao` VARCHAR(500) NOT NULL,
  `preco` DECIMAL(8,2) NOT NULL,
  `preco_venda` DECIMAL(8,2) NOT NULL,
  `im` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idprodutos`));

INSERT INTO `fseletroo`.`produtos` (`Categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES ('Geladeira', 'Geladeira Electrolux forst free', '4599.00', ' 4549.00', './img2gel.jpg');
INSERT INTO `fseletroo`.`produtos` (`Categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES ('Geladeira', 'Geladeira Electrolux forst free Bottom', '5599.00', '4499.00', './img/5gel.jpg');
INSERT INTO `fseletroo`.`produtos` (`Categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES ('Geladeira', 'Geladeira Electrolux forst free duplex', '6799.00', '5700.00', './img/8gel.jpg');
INSERT INTO `fseletroo`.`produtos` (`Categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES ('Geladeira', 'Geladeira Electrolux forst free', '6899.00', '5699.00', './img/11gel.jpg');
INSERT INTO `fseletroo`.`produtos` (`Categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES ('Fogao', 'Fogão Consul 5 Bocas Inox', '649.00', '549.00', './img/1fog.jpg');
INSERT INTO `fseletroo`.`produtos` (`Categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES ('Fogao', 'Fogão 4 bocas agata smaltec', '749.00', '699.00', './img/4fog.jpg');
INSERT INTO `fseletroo`.`produtos` (`Categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES ('Fogao', 'Fogão 4 bocas atlas branco', '749.00', '699.00', './img/7fog.jpg');
INSERT INTO `fseletroo`.`produtos` (`Categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES ('Fogao', 'Fogão 4 bocas supreme dako', '799.00', '599.oo', './img/10fog.jpg');
INSERT INTO `fseletroo`.`produtos` (`Categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES ('Microondas', 'Microondas 21 litros Panasonic', '549.00', '499.00', './img/3mic.jpg');
INSERT INTO `fseletroo`.`produtos` (`Categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES ('Microondas', 'Microondas consul 20 litros inox', '699.00', '649.00', './img/6mic.jpg');
INSERT INTO `fseletroo`.`produtos` (`Categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES ('Microondas', 'Microondas consul 32 litros inox', '649.00', '600.00', './img/9mic.jpg');
INSERT INTO `fseletroo`.`produtos` (`Categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES ('Microondas', 'Microondas philco 25 litro preto', '799.00', '650.00', './img/12mic.jpg');
INSERT INTO `fseletroo`.`produtos` (`Categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES ('Lavadoura', 'Lavadora de Roupas Electrolux  Inox', '4349.00', '3549.00', './img/lava1.jpg');
INSERT INTO `fseletroo`.`produtos` (`Categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES ('Lavadoura', 'Lavadoura Brastemp 15kg titânio', '4799.00', '4799.00', './img/lava2.jpg');
INSERT INTO `fseletroo`.`produtos` (`Categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES ('Lavadoura', 'Lavadoura Midea Inverter 11Kg Branca', '4649.00', '3600.00', './img/lava3.jpg');

 
 CREATE TABLE `fseletroo`.`comentarios` (
  `idcomentarios` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL,
  `msg` VARCHAR(300) NULL,
  `data` DATETIME NULL,
  PRIMARY KEY (`idcomentarios`));

