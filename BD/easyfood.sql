/*
 Navicat Premium Data Transfer

 Source Server         : ThulioBatista
 Source Server Type    : MySQL
 Source Server Version : 100428
 Source Host           : localhost:3306
 Source Schema         : easyfood

 Target Server Type    : MySQL
 Target Server Version : 100428
 File Encoding         : 65001

 Date: 13/06/2023 12:05:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cardapio
-- ----------------------------
DROP TABLE IF EXISTS `cardapio`;
CREATE TABLE `cardapio`  (
  `CODCARDAPIO` int NOT NULL AUTO_INCREMENT,
  `CNPJ` int NULL DEFAULT NULL,
  `DESCRICAO` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `VALOR` decimal(18, 2) NULL DEFAULT 0.00,
  `TEMP_PREPARO` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `CATEGORIA` int NULL DEFAULT NULL,
  PRIMARY KEY (`CODCARDAPIO`) USING BTREE,
  INDEX `CNPJ`(`CNPJ` ASC) USING BTREE,
  INDEX `CATEGORIA`(`CATEGORIA` ASC) USING BTREE,
  CONSTRAINT `cardapio_ibfk_1` FOREIGN KEY (`CNPJ`) REFERENCES `restauramte` (`CNPJ`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `cardapio_ibfk_2` FOREIGN KEY (`CATEGORIA`) REFERENCES `categoria` (`CODCATEGORIA`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cardapio
-- ----------------------------

-- ----------------------------
-- Table structure for carrinho
-- ----------------------------
DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE `carrinho`  (
  `CODCARRINHO` int NOT NULL AUTO_INCREMENT,
  `CPF` int NULL DEFAULT NULL,
  `CNPJ` int NULL DEFAULT NULL,
  `QUANTIDADE` int NULL DEFAULT NULL,
  `SUBTOTAL` float NULL DEFAULT NULL,
  `DESCRIÇÃO` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `TAXAENTREGA` float NULL DEFAULT NULL,
  `TOTAL` float NULL DEFAULT NULL,
  PRIMARY KEY (`CODCARRINHO`) USING BTREE,
  INDEX `CPF`(`CPF` ASC) USING BTREE,
  INDEX `CNPJ`(`CNPJ` ASC) USING BTREE,
  CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`CPF`) REFERENCES `usuario` (`CPF`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`CNPJ`) REFERENCES `restauramte` (`CNPJ`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of carrinho
-- ----------------------------

-- ----------------------------
-- Table structure for categoria
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria`  (
  `CODCATEGORIA` int NOT NULL AUTO_INCREMENT,
  `DESCRICAO` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`CODCATEGORIA`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categoria
-- ----------------------------

-- ----------------------------
-- Table structure for endereco
-- ----------------------------
DROP TABLE IF EXISTS `endereco`;
CREATE TABLE `endereco`  (
  `CODENDERECO` int NOT NULL AUTO_INCREMENT,
  `CPF` int NULL DEFAULT NULL,
  `CNPJ` int NULL DEFAULT NULL,
  `ENDEREÇO` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `COMPLEMENTO` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `BAIRRO` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `CIDADE` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `UF` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `CEP` int NULL DEFAULT NULL,
  PRIMARY KEY (`CODENDERECO`) USING BTREE,
  INDEX `CPF`(`CPF` ASC) USING BTREE,
  INDEX `CNPJ`(`CNPJ` ASC) USING BTREE,
  CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`CPF`) REFERENCES `usuario` (`CPF`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `endereco_ibfk_2` FOREIGN KEY (`CNPJ`) REFERENCES `restauramte` (`CNPJ`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of endereco
-- ----------------------------

-- ----------------------------
-- Table structure for pedidos
-- ----------------------------
DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos`  (
  `CODPEDIDOS` int NOT NULL AUTO_INCREMENT,
  `CPF` int NULL DEFAULT NULL,
  `CNPJ` int NULL DEFAULT NULL,
  `DTHINSERT` timestamp NOT NULL DEFAULT current_timestamp,
  `ESTATUS` int NULL DEFAULT NULL,
  `DESCRIÇÃO` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `TOTAL` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `TIPOENTREGA` int NULL DEFAULT NULL,
  `ENDERECO` int NULL DEFAULT NULL,
  PRIMARY KEY (`CODPEDIDOS`) USING BTREE,
  INDEX `CPF`(`CPF` ASC) USING BTREE,
  INDEX `CNPJ`(`CNPJ` ASC) USING BTREE,
  INDEX `ENDERECO`(`ENDERECO` ASC) USING BTREE,
  INDEX `TIPOENTREGA`(`TIPOENTREGA` ASC) USING BTREE,
  CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`CPF`) REFERENCES `usuario` (`CPF`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`CNPJ`) REFERENCES `restauramte` (`CNPJ`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pedidos_ibfk_3` FOREIGN KEY (`ENDERECO`) REFERENCES `endereco` (`CODENDERECO`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pedidos_ibfk_4` FOREIGN KEY (`TIPOENTREGA`) REFERENCES `tipoentrega` (`CODTIPO`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pedidos
-- ----------------------------

-- ----------------------------
-- Table structure for restauramte
-- ----------------------------
DROP TABLE IF EXISTS `restauramte`;
CREATE TABLE `restauramte`  (
  `CNPJ` int NOT NULL,
  `RAZAOSOCIAL` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `TELEFONE` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `SENHA` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `TIPOCOZINHA` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`CNPJ`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of restauramte
-- ----------------------------

-- ----------------------------
-- Table structure for reviews
-- ----------------------------
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews`  (
  `CODREVIWS` int NOT NULL AUTO_INCREMENT,
  `CPF` int NULL DEFAULT NULL,
  `DESCRICAO` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`CODREVIWS`) USING BTREE,
  INDEX `CPF`(`CPF` ASC) USING BTREE,
  CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`CPF`) REFERENCES `usuario` (`CPF`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reviews
-- ----------------------------

-- ----------------------------
-- Table structure for tipoentrega
-- ----------------------------
DROP TABLE IF EXISTS `tipoentrega`;
CREATE TABLE `tipoentrega`  (
  `CODTIPO` int NOT NULL,
  `DESCRICAO` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`CODTIPO`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tipoentrega
-- ----------------------------

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `CPF` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `NASCIMENTO` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `TELEFONE` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `SENHA` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`CPF`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuario
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
