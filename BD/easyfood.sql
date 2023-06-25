/*
Navicat MySQL Data Transfer

Source Server         : ThulioBatista
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : easyfood

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-06-25 20:06:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cardapio
-- ----------------------------
DROP TABLE IF EXISTS `cardapio`;
CREATE TABLE `cardapio` (
  `CODCARDAPIO` int(11) NOT NULL AUTO_INCREMENT,
  `CNPJ` int(11) DEFAULT NULL,
  `TITULO` varchar(50) DEFAULT '',
  `DESCRICAO` varchar(50) DEFAULT '',
  `VALOR` decimal(18,2) DEFAULT 0.00,
  `TEMP_PREPARO` varchar(50) DEFAULT NULL,
  `CATEGORIA` int(11) DEFAULT NULL,
  `QUANTIDADE` int(11) DEFAULT NULL,
  `URL` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`CODCARDAPIO`) USING BTREE,
  KEY `CNPJ` (`CNPJ`) USING BTREE,
  KEY `CATEGORIA` (`CATEGORIA`) USING BTREE,
  CONSTRAINT `cardapio_ibfk_1` FOREIGN KEY (`CNPJ`) REFERENCES `restauramte` (`CNPJ`),
  CONSTRAINT `cardapio_ibfk_2` FOREIGN KEY (`CATEGORIA`) REFERENCES `categoria` (`CODCATEGORIA`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for carrinho
-- ----------------------------
DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE `carrinho` (
  `CODCARRINHO` int(11) NOT NULL AUTO_INCREMENT,
  `CODUSUARIO` int(11) DEFAULT NULL,
  `CNPJ` int(11) DEFAULT NULL,
  `QUANTIDADE` int(11) DEFAULT NULL,
  `SUBTOTAL` float DEFAULT NULL,
  `DESCRIÇÃO` varchar(50) DEFAULT NULL,
  `TAXAENTREGA` float DEFAULT NULL,
  `TOTAL` float DEFAULT NULL,
  PRIMARY KEY (`CODCARRINHO`) USING BTREE,
  KEY `CPF` (`CODUSUARIO`) USING BTREE,
  KEY `CNPJ` (`CNPJ`) USING BTREE,
  CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`CODUSUARIO`) REFERENCES `usuario` (`CODUSUARIO`),
  CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`CNPJ`) REFERENCES `restauramte` (`CNPJ`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for categoria
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `CODCATEGORIA` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRICAO` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CODCATEGORIA`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for compra
-- ----------------------------
DROP TABLE IF EXISTS `compra`;
CREATE TABLE `compra` (
  `CODCOMPRA` int(11) NOT NULL AUTO_INCREMENT,
  `CODUSUARIO` int(11) DEFAULT NULL,
  `CNPJ` int(11) DEFAULT NULL,
  `TITULO` varchar(250) DEFAULT NULL,
  `DESCRICAO` varchar(250) DEFAULT NULL,
  `VALOR` decimal(18,2) DEFAULT 0.00,
  `QUANTIDADE` int(11) DEFAULT NULL,
  `TAXA` float(7,2) DEFAULT 0.00,
  PRIMARY KEY (`CODCOMPRA`),
  KEY `CODUSUARIO` (`CODUSUARIO`),
  KEY `CNPJ` (`CNPJ`),
  CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`CODUSUARIO`) REFERENCES `usuario` (`CODUSUARIO`),
  CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`CNPJ`) REFERENCES `restauramte` (`CNPJ`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Table structure for pedidos
-- ----------------------------
DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos` (
  `CODPEDIDOS` int(11) NOT NULL AUTO_INCREMENT,
  `CODUSUARIO` int(11) DEFAULT NULL,
  `CNPJ` int(11) DEFAULT NULL,
  `DTHINSERT` timestamp NOT NULL DEFAULT current_timestamp(),
  `ESTATUS` int(11) DEFAULT NULL,
  `DESCRIÇÃO` varchar(100) DEFAULT NULL,
  `TOTAL` varchar(20) DEFAULT NULL,
  `TIPOENTREGA` int(11) DEFAULT NULL,
  PRIMARY KEY (`CODPEDIDOS`) USING BTREE,
  KEY `CPF` (`CODUSUARIO`) USING BTREE,
  KEY `CNPJ` (`CNPJ`) USING BTREE,
  KEY `TIPOENTREGA` (`TIPOENTREGA`) USING BTREE,
  CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`CODUSUARIO`) REFERENCES `usuario` (`CODUSUARIO`),
  CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`CNPJ`) REFERENCES `restauramte` (`CNPJ`),
  CONSTRAINT `pedidos_ibfk_4` FOREIGN KEY (`TIPOENTREGA`) REFERENCES `tipoentrega` (`CODTIPO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for promocao
-- ----------------------------
DROP TABLE IF EXISTS `promocao`;
CREATE TABLE `promocao` (
  `CODPROMOCAO` int(11) NOT NULL AUTO_INCREMENT,
  `CNPJ` int(11) DEFAULT NULL,
  `TITULO` varchar(50) DEFAULT '',
  `DESCRICAO` varchar(250) DEFAULT '',
  `VALOR` decimal(18,2) DEFAULT 0.00,
  `QUANTIDADE` int(11) DEFAULT NULL,
  `TEMPOPREPARO` int(11) DEFAULT NULL,
  `IMAGEM` varchar(250) DEFAULT '',
  `DTHRINSERT` date NOT NULL,
  `TAXA` float(7,2) DEFAULT 0.00,
  PRIMARY KEY (`CODPROMOCAO`),
  KEY `CNPJ` (`CNPJ`),
  CONSTRAINT `promocao_ibfk_1` FOREIGN KEY (`CNPJ`) REFERENCES `restauramte` (`CNPJ`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Table structure for restauramte
-- ----------------------------
DROP TABLE IF EXISTS `restauramte`;
CREATE TABLE `restauramte` (
  `CNPJ` int(11) NOT NULL,
  `RAZAOSOCIAL` varchar(50) DEFAULT NULL,
  `TELEFONE` varchar(50) DEFAULT NULL,
  `ENDEREÇO` varchar(50) DEFAULT NULL,
  `COMPLEMENTO` varchar(20) DEFAULT NULL,
  `BAIRRO` varchar(20) DEFAULT NULL,
  `CIDADE` varchar(20) DEFAULT NULL,
  `UF` char(2) DEFAULT NULL,
  `CEP` int(11) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `SENHA` varchar(50) DEFAULT NULL,
  `TIPOCOZINHA` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CNPJ`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for reviews
-- ----------------------------
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `CODREVIWS` int(11) NOT NULL AUTO_INCREMENT,
  `CODUSUARIO` int(11) DEFAULT NULL,
  `DESCRICAO` varchar(100) DEFAULT NULL,
  `IMAGEM` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`CODREVIWS`) USING BTREE,
  KEY `CPF` (`CODUSUARIO`) USING BTREE,
  CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`CODUSUARIO`) REFERENCES `usuario` (`CODUSUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for tipoentrega
-- ----------------------------
DROP TABLE IF EXISTS `tipoentrega`;
CREATE TABLE `tipoentrega` (
  `CODTIPO` int(11) NOT NULL,
  `DESCRICAO` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CODTIPO`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `CODUSUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `CPF` int(11) DEFAULT NULL,
  `NOME` varchar(50) DEFAULT NULL,
  `NASCIMENTO` varchar(20) DEFAULT NULL,
  `TELEFONE` varchar(15) DEFAULT NULL,
  `ENDERECO` varchar(50) DEFAULT '',
  `COMPLEMENTO` varchar(20) DEFAULT NULL,
  `BAIRRO` varchar(20) DEFAULT NULL,
  `CIDADE` varchar(20) DEFAULT NULL,
  `UF` char(2) DEFAULT NULL,
  `CEP` int(11) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `SENHA` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CODUSUARIO`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;
