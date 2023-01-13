-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-12-2022 a las 23:59:55
-- Versión del servidor: 8.0.31-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int NOT NULL,
  `nombre` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `codigo` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `marca` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `caracteristicas` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `proveedor` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `stock_minimo` int UNSIGNED NOT NULL,
  `costo` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `cantidad` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `nombre`, `codigo`, `marca`, `caracteristicas`, `proveedor`, `stock_minimo`, `costo`, `cantidad`) VALUES
(3, 'perros', 'dd', 'generica', 'no ce we', 'sswww', 10, '89', 50),
(4, 'Paletas de madera', '0023', 'generica', 'madera', 'madera c.a', 10, '20', 30),
(5, 'pincel', '2822', 'pincelar', 'mediano', 'pincel c.a', 10, '10', 5),
(7, 'tornillos', '098', 'generica', 'Mediana,delgada,punt', 'Empresa LKD c.A', 10, '20.00', 45),
(8, 'bombillo', '0097', 'duramax', 'Mediana,delgada,punt', 'Empresa LKD c.A', 10, '20.00', 50),
(16, 'pato', '3029302', 'yester', 'no ce we', 'Empresa LKD c.A', 10, '20.00', 1),
(17, 'Aceite 5w20', '0002', 'Inca', 'Lubricantes', 'Empresa LKD c.A', 10, '10.00', 10),
(18, 'Aceite 10w20', '0003', 'Inca', 'Lubricantes', 'Empresa LKD c.A', 10, '20.00', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int NOT NULL,
  `numero_orden` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `costo` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `cantidad` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `proveedor` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `estado` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `numero_orden`, `nombre`, `costo`, `cantidad`, `proveedor`, `estado`) VALUES
(17, '0090', 'hdjd', '20', '30', 'Empresa LKD c.A', 'Pendiente'),
(18, '0090', 'hdjd', '20', '30', 'Empresa LKD c.A', 'Pendiente'),
(19, '0096', 'clavos negros', '20.00', '30', 'Empresa LKD c.A', 'Confirmado'),
(20, '0090', 'lapiz', '', '20', 'Empresa LKD c.A', 'Anulado'),
(21, '894', 'Paletas de madera', '20.00', '', 'Empresa LKD c.A', 'Pendiente'),
(22, '6373', 'pincel', '30', '40', 'Empresa LKD c.A', 'Pendiente'),
(23, '3738', 'Paletas de madera', '20', '90', 'Empresa LKD c.A', 'Pendiente'),
(24, '3738', 'Paletas de madera', '20', '90', 'Empresa LKD c.A', 'Pendiente'),
(25, '66', 'cables', '68', 'trtrt', 'Empresa LKD c.A', ''),
(26, '66', 'Paletas de madera', '68', '56', 'Empresa LKD c.A', ''),
(27, '66', 'Paletas de madera', '68', '56', 'Empresa LKD c.A', ''),
(28, '66', 'Paletas de madera', '68', '56', 'Empresa LKD c.A', ''),
(29, '43432222', 'ladrillo', '1000', '3', 'Cra', ''),
(30, '855', 'Paletas de madera', '68', '3', 'Empresa LKD c.A', 'Pendiente'),
(31, '855', 'Paletas de madera', '68', '3', 'Empresa LKD c.A', 'Pendiente'),
(32, '855', 'Paletas de madera', '68', '3', 'Empresa LKD c.A', ''),
(33, '855', 'Paletas de madera', '68', '3', 'Empresa LKD c.A', ''),
(34, '855', 'Paletas de madera', '68', '3', 'Empresa LKD c.A', 'Pendiente IEUWIUEIWU'),
(39, '855', 'Paletas de madera', '68', '3', 'Empresa LKD c.A', 'Confirmado'),
(40, '6668', 'cables', '68', '3', 'Empresa LKD c.A', 'Pendiente'),
(41, '855', 'Paletas de madera', '5$', '3', 'Empresa LKD c.A', ''),
(42, '855', 'Paletas de madera', '68', '3', 'Empresa LKD c.A', 'Confirmado'),
(43, '00011', 'Aceite 5w20', '5', '20', 'Empresa LKD C.A', 'Confirmado'),
(44, '00011', 'Paletas de madera', '20', '10', 'Empresa LKD C.A', 'Confirmado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialistas`
--

CREATE TABLE `especialistas` (
  `id` int NOT NULL,
  `codigo` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `cedula` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `apellido` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `telefono` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `cargo` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `kit_herramientas` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `especialistas`
--

INSERT INTO `especialistas` (`id`, `codigo`, `cedula`, `nombre`, `apellido`, `telefono`, `cargo`, `kit_herramientas`) VALUES
(2, 'israel', '29511606', 'israel', 'muñoz', '04144484303', 'Alguacil', 'alicate mar'),
(3, 'israel', '29511606', 'israel', 'Nuñez', '04000000', 'Doctor', 'alicate martillo'),
(5, '12345', '12334234', 'qwerty', 'qwerty', '12345', 'Gerente', 'camioneta'),
(6, '0001', '15908576', 'Elvis', 'Gamboa', '02832413520', 'Ing de Sistemas', 'Laptop');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` int NOT NULL,
  `estado` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `estado`, `fecha`) VALUES
(1, 'Confirmado', '2022-12-01'),
(4, 'Anulado', '2022-12-01'),
(5, 'Pendiente', '2022-12-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` int NOT NULL,
  `nro_fact` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `codigo_fact` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `n_servicio` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `n_cliente` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `total` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id`, `nro_fact`, `codigo_fact`, `n_servicio`, `n_cliente`, `total`, `fecha`) VALUES
(1, '', '009', 'Limpieza', 'graciela', '100', '2022-11-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_orden`
--

CREATE TABLE `factura_orden` (
  `order_id` int NOT NULL,
  `user_id` int NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_receiver_name` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `order_receiver_address` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `order_total_before_tax` decimal(10,2) NOT NULL,
  `order_total_tax` decimal(10,2) NOT NULL,
  `order_tax_per` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `order_total_after_tax` double(10,2) NOT NULL,
  `order_amount_paid` decimal(10,2) NOT NULL,
  `order_total_amount_due` decimal(10,2) NOT NULL,
  `note` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura_orden`
--

INSERT INTO `factura_orden` (`order_id`, `user_id`, `order_date`, `order_receiver_name`, `order_receiver_address`, `order_total_before_tax`, `order_total_tax`, `order_tax_per`, `order_total_after_tax`, `order_amount_paid`, `order_total_amount_due`, `note`) VALUES
(1, 1, '2022-11-30 05:10:30', 'avion tornado', 'hdjshjdhsjhdjshds ss', '3716.00', '594.56', '16', 4310.56, '0.00', '4310.56', 'no hay notas'),
(2, 1, '2022-11-30 13:44:17', 'ff', 'kajskja jakjsa aa', '45.00', '5454.00', '5', 54545445.00, '4545454.00', '0.00', 'ssss'),
(3, 1, '2022-11-30 13:47:10', 'rtrtrt', 'kajskja jakjsa aa', '45.00', '5454.00', '5', 54545445.00, '4545454.00', '0.00', 'ssss'),
(4, 1, '2022-11-30 14:38:42', 'fdfdf', '454545', '30.00', '3.00', '10', 33.00, '0.00', '33.00', 'no hay'),
(5, 1, '2022-12-04 01:24:08', 'cara de rabo', 'ni idea vro', '135.00', '0.00', '', 135.00, '0.00', '135.00', 'no hay notas'),
(6, 1, '2022-12-04 02:31:34', 'no sé', 'mucho menos', '2.00', '0.14', '7', 2.14, '2.14', '0.00', 'esta vaina está devaluada auxilio'),
(7, 1, '2022-12-04 02:31:58', 'rerere', 'erer', '0.00', '0.00', '', 0.00, '0.00', '0.00', ''),
(8, 1, '2022-12-04 02:33:51', 'mipre', 'gfdgfd', '324.00', '12.96', '4', 336.96, '0.00', '336.96', 'fdsfd'),
(9, 1, '2022-12-04 02:35:04', 'no sé', '', '132.00', '26.40', '20', 158.40, '0.00', '158.40', 'oooo'),
(10, 1, '2022-12-04 02:40:12', 'yyyyyyyy', 'ytyty', '1332.00', '0.00', '', 1332.00, '0.00', '1332.00', '454545'),
(11, 1, '2022-12-04 02:40:51', '45', 'rtredgfsdgdf', '22981.00', '0.00', '', 22981.00, '0.00', '22981.00', 'eweee'),
(12, 1, '2022-12-04 02:43:15', 'la', '', '0.00', '0.00', '', 0.00, '0.00', '0.00', ''),
(13, 1, '2022-12-04 02:43:24', 'la', '', '0.00', '0.00', '', 0.00, '0.00', '0.00', ''),
(14, 1, '2022-12-04 02:48:35', 'pe', '', '0.00', '0.00', '', 0.00, '0.00', '0.00', ''),
(15, 1, '2022-12-04 02:48:54', 'we', '', '0.00', '0.00', '', 0.00, '0.00', '0.00', ''),
(16, 1, '2022-12-04 02:50:12', '90s', '', '0.00', '0.00', '', 0.00, '0.00', '0.00', ''),
(17, 1, '2022-12-04 05:31:36', 'o9p', '', '0.00', '0.00', '', 0.00, '0.00', '0.00', ''),
(18, 1, '2022-12-04 05:36:43', 'po', '', '0.00', '0.00', '', 0.00, '0.00', '0.00', ''),
(19, 1, '2022-12-04 07:25:07', 'a', '', '0.00', '0.00', '', 0.00, '0.00', '0.00', ''),
(20, 1, '2022-12-04 07:28:55', 'eeerrrrrrrrr', '', '0.00', '0.00', '', 0.00, '0.00', '0.00', ''),
(21, 1, '2022-12-04 08:09:38', 'peter pan', '', '0.00', '0.00', '', 0.00, '0.00', '0.00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_orden_producto`
--

CREATE TABLE `factura_orden_producto` (
  `order_item_id` int NOT NULL,
  `order_id` int NOT NULL,
  `item_code` varchar(250) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `order_item_quantity` decimal(10,2) NOT NULL,
  `order_item_price` decimal(10,2) NOT NULL,
  `order_item_final_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `factura_orden_producto`
--

INSERT INTO `factura_orden_producto` (`order_item_id`, `order_id`, `item_code`, `item_name`, `order_item_quantity`, `order_item_price`, `order_item_final_amount`) VALUES
(5, 2, '323', 'rrrtttt', '4.00', '45.00', '4555.00'),
(6, 3, 'fffff', 'sdds', '434.00', '4434.00', '3434.00'),
(13, 4, '23232', 'gggg', '6.00', '5.00', '30.00'),
(14, 5, '4444566', 'no sé we', '45.00', '3.00', '135.00'),
(15, 6, 'petroleo', 'petróleo venezolano', '1.00', '2.00', '2.00'),
(16, 7, '', '', '0.00', '0.00', '0.00'),
(17, 8, '4545', 'dfsdfsd', '54.00', '6.00', '324.00'),
(18, 9, '34', 'tyrtrt', '34.00', '3.00', '102.00'),
(19, 9, '89', 'ueuwyew', '5.00', '6.00', '30.00'),
(20, 10, '45345', 'etertert', '3.00', '444.00', '1332.00'),
(21, 11, '6767', 'uuuuu', '67.00', '343.00', '22981.00'),
(22, 12, '', '', '0.00', '0.00', '0.00'),
(23, 13, '', '', '0.00', '0.00', '0.00'),
(24, 14, '', '', '0.00', '0.00', '0.00'),
(25, 15, '', '', '0.00', '0.00', '0.00'),
(26, 16, '', '', '0.00', '0.00', '0.00'),
(27, 17, '', '', '0.00', '0.00', '0.00'),
(28, 18, '', '', '0.00', '0.00', '0.00'),
(29, 19, '', '', '0.00', '0.00', '0.00'),
(34, 20, '', '', '0.00', '0.00', '0.00'),
(39, 21, '', '', '0.00', '0.00', '0.00'),
(48, 1, '7898', 'carro', '4.00', '677.00', '2708.00'),
(49, 1, '6755', 'avion', '1.00', '669.00', '669.00'),
(50, 1, '7884', 'palo', '5.00', '67.00', '335.00'),
(51, 1, '7673', 'cejas', '1.00', '4.00', '4.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_usuarios`
--

CREATE TABLE `factura_usuarios` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile` bigint NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `factura_usuarios`
--

INSERT INTO `factura_usuarios` (`id`, `email`, `password`, `first_name`, `last_name`, `mobile`, `address`) VALUES
(1, 'registro@baulphp.com', '12345', 'BaulPHPOOO', '', 78979676, 'Cerca de un gran arbol azul');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int NOT NULL,
  `nombrearticulo` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `codigoarticulo` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `cantidad` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `stok` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `nombrearticulo`, `codigoarticulo`, `cantidad`, `stok`, `fecha`) VALUES
(1, '', '', '20', '9', '2022-12-03'),
(2, '', '', '09', '9', '2022-12-03'),
(4, 'paleta', '777', '', '7', '2022-12-03'),
(5, 'Paletas de madera', '0023', '', '', '0000-00-00'),
(6, 'Paletas de madera', '0023', '', '5', '0000-00-00'),
(7, '', '', '0', '5', '0000-00-00'),
(8, 'Paletas de madera', '', '0', '5', '0000-00-00'),
(9, 'tornillos', '', '0', '5', '2022-12-04'),
(10, 'Paletas de madera', '', '0', '5', '2022-12-05'),
(11, '0', '', '', '', '2022-12-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kit`
--

CREATE TABLE `kit` (
  `id` int NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `numero` int NOT NULL,
  `herramientas` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pclientes`
--

CREATE TABLE `pclientes` (
  `id` int NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ci` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `telefono` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `correo` varchar(30) NOT NULL,
  `direccion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `receptor` varchar(20) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `pclientes`
--

INSERT INTO `pclientes` (`id`, `nombre`, `ci`, `telefono`, `correo`, `direccion`, `receptor`, `fecha`) VALUES
(90, 'empresa C.C', 'J-29511606', '04144484303', 'empresa@hotmail.com', 'El pueblo avenida nro 7 con calle violeta frente al semaforo', 'Luis Perez', '2022-12-04'),
(91, 'israel', '29511606', '04144484303', 'empresa@hotmail.com', 'El pueblo avenida nro 7 con calle violeta frente al semaforo', 'patricia', '2022-12-04'),
(93, 'Elvis Gamboa', '15908576', '02832413520', 'gamboamej@gmail.com', 'Av. Intercomunal', 'El Tigre 1', '2022-12-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `ced_rif` varchar(16) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `direccion` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `telefono` varchar(16) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombre`, `ced_rif`, `direccion`, `telefono`, `fecha`) VALUES
(1, 'Empresa LKD C.A', 'J-5017907400', 'Maracay', '123456789', '2022-12-01'),
(2, 'Empresa LKD c.A', 'J-5017907400', 'Maracay Edo. Aragua', '04243015756', '2022-12-01'),
(3, 'Empresa LKD c.A', 'J-5017907400', 'maracay', '02432833341', '2022-12-01'),
(4, 'Cra', '19829182918', 'El pueblo', '04000000', '2022-12-03'),
(5, 'Elvis Gamboa', '15908576', 'Av. Intercomunal', '12345', '2022-12-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `acceso` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `acceso`, `fecha`) VALUES
(1, 'administrador', '1,2,3,4,5,6,7,8,9,10', '2022-11-28'),
(2, 'jefe', '1,2,3,4', '2022-08-17'),
(3, 'gerente', '4,5,6', '2022-08-17'),
(4, 'principal', '1,2,3,4,5,6', '2022-11-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `codigo` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `encargado` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `insumos` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `costo` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `nombre`, `codigo`, `encargado`, `insumos`, `costo`) VALUES
(14, 'Reemplazo de Gomas', '0001', 'Elvis Gamboa', 'gomas, aceite', '2000'),
(15, 'Reemplazo de Pistones', '0002', 'Elvis Gamboa', 'pistones', '20'),
(16, 'Reemplazo de Mangueras', '0003', 'Elvis Gamboa', 'mangueras', '20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `cedula` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `clave` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `rol` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `cedula`, `correo`, `clave`, `fecha`, `rol`) VALUES
(1, 'admin', '26954133', 'gracielaangelino@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2022-08-17', 1),
(2, 'milagros', '8188417', 'losunanimes005@hotmail.com', '50d6b9bd229d5b1d80eeb79963e9ede0', '2022-08-17', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `especialistas`
--
ALTER TABLE `especialistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura_orden`
--
ALTER TABLE `factura_orden`
  ADD PRIMARY KEY (`order_id`);

--
-- Indices de la tabla `factura_orden_producto`
--
ALTER TABLE `factura_orden_producto`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indices de la tabla `factura_usuarios`
--
ALTER TABLE `factura_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `kit`
--
ALTER TABLE `kit`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pclientes`
--
ALTER TABLE `pclientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `especialistas`
--
ALTER TABLE `especialistas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `factura_orden`
--
ALTER TABLE `factura_orden`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `factura_orden_producto`
--
ALTER TABLE `factura_orden_producto`
  MODIFY `order_item_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `factura_usuarios`
--
ALTER TABLE `factura_usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `kit`
--
ALTER TABLE `kit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pclientes`
--
ALTER TABLE `pclientes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
