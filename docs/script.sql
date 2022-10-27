CREATE DATABASE `reserva_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

CREATE TABLE `clientes_tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `status` int NOT NULL COMMENT '1 - Ativo / 0 - Inativo / 2 - Pendência de pagamento (pode reservar, mas com atenção) / 3 - Bloqueado',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `andares_tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `andar` int NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `status` int NOT NULL COMMENT '1 - Ativo / 0 - Inativo',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



CREATE TABLE `categorias_tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) DEFAULT NULL,
  `status` int DEFAULT NULL COMMENT '1 - Ativo / 0 - Inativo',
  `valor` decimal(8,2) DEFAULT NULL,
  `tipo_cobranca` int DEFAULT NULL COMMENT '1 - Por pessoa / 2 - Valor Fixo',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `quartos_tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_andar` int NOT NULL,
  `numero` varchar(10) NOT NULL,
  `qtd_pessoas` int NOT NULL,
  `id_categoria` int NOT NULL,
  `status` int NOT NULL COMMENT '1 - Ativo / 0 - Inativo',
  PRIMARY KEY (`id`),
  KEY `fk_id_andar_idx` (`id_andar`),
  KEY `fk_id_categoria_idx` (`id_categoria`),
  CONSTRAINT `fk_id_andar` FOREIGN KEY (`id_andar`) REFERENCES `andares_tb` (`id`),
  CONSTRAINT `fk_id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categorias_tb` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `reserva_tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int NOT NULL,
  `id_quarto` int NOT NULL,
  `status` int NOT NULL COMMENT '0 - Pendente / 1 - Reservado mediante pagamento adiantado / 2 - Cancelado / 3 - Reserva Negada',
  `observacao` varchar(300) DEFAULT NULL,
  `data_entrada` date NOT NULL,
  `data_saida` date NOT NULL,
  `data_reserva` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_cliente_idx` (`id_cliente`),
  KEY `fk_id_quarto_idx` (`id_quarto`),
  CONSTRAINT `fk_id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes_tb` (`id`),
  CONSTRAINT `fk_id_quarto` FOREIGN KEY (`id_quarto`) REFERENCES `quartos_tb` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `pagamento_tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_reserva` int DEFAULT NULL,
  `valor_total` decimal(8,2) DEFAULT NULL,
  `acrescimo` decimal(8,2) DEFAULT NULL,
  `desconto` decimal(8,2) DEFAULT NULL,
  `tipo_pagamento` int DEFAULT NULL COMMENT '1 - Dinheiro / 2 - Cartão de Débito / 3 - Cartão de Crédito / 4 - PIX / 5 - Prêmio (bônus)',
  `data_pagamento` datetime DEFAULT NULL,
  `id_pagamento` int DEFAULT NULL,
  `situacao` int DEFAULT NULL COMMENT '1 - Pagamento completo / 2 - Pagamento parcial (informar o id_pagamento ao qual está ligado)',
  PRIMARY KEY (`id`),
  KEY `fk_id_reserva_idx` (`id_reserva`),
  CONSTRAINT `fk_id_reserva` FOREIGN KEY (`id_reserva`) REFERENCES `reserva_tb` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `admin_tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `nivel` int DEFAULT NULL COMMENT '1 - Administrador (acesso completo) / 2 - Gerência (acesso comum) / 3 - Usuário (apenas acompanhar)',
  `status` int DEFAULT NULL COMMENT '1 - Ativo / 0 - Inativo',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `reserva_db`.`admin_tb`
(`nome`, `login`, `senha`, `nivel`, `status`)
VALUES
('Administrador', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1);