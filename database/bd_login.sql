-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2025 a las 09:05:45
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_premios`
--

CREATE TABLE `productos_premios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `detalle` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `cantidad` int(11) DEFAULT 0,
  `estado` enum('activo','inactivo') DEFAULT 'activo',
  `fecha_sorteo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos_premios`
--

INSERT INTO `productos_premios` (`id`, `titulo`, `detalle`, `foto`, `cantidad`, `estado`, `fecha_sorteo`) VALUES
(1, ' Kaiyi X3 Pro Luxury', '2023', 'camionet.jpg', 10, 'inactivo', '2025-06-15'),
(2, 'Terreno propio', 'gran terreno en zona urbanizada\r\n', 'terreno.jpg', 50, 'inactivo', '2025-06-10'),
(3, 'Auriculares Gamer Razer Kraken', 'Auriculares con sonido envolvente y micrófono ajustable.', 'audifonos.jpg', 15, 'activo', '2025-06-12'),
(4, 'Cocina Black & Decker', 'Cocina de 4 hornillas tipo industrial', 'cocina.jpg', 30, 'activo', '2025-06-15'),
(5, 'iPhone 13', 'Smartphone con pantalla Super Retina XDR y 128GB de almacenamiento.', 'iphone13.jpg', 40, 'activo', '2025-06-20'),
(6, 'Laptop Gamer ASUS ROG Strix', 'Laptop con procesador i7, 16GB RAM y tarjeta gráfica RTX 3070.', 'laptop.jpg', 10, 'activo', '2025-06-25'),
(7, 'Lavadora LG 10kg', 'Lavadora con capacidad de 10kg y tecnología de lavado eficiente.', 'lavadora.jpg', 8, 'activo', '2025-07-01'),
(8, 'PC Gamer Alienware Aurora R12', 'PC de alto rendimiento con procesador i9 y tarjeta gráfica RTX 3080.', 'pc.jpg', 25, 'activo', '2025-07-05'),
(9, 'Consola PlayStation 5', 'Consola de última generación con 825GB de almacenamiento SSD.', 'ps5.jpg', 18, 'activo', '2025-07-10'),
(10, 'Moto Scooter', 'Scooter eléctrico con batería de larga duración y velocidad de hasta 25 km/h.', 'scoter.jpg', 20, 'activo', '2025-07-15'),
(11, 'Televisor LG 55\" 4K UHD', 'Televisor de 55 pulgadas con resolución 4K y Smart TV.', 'tvlg.jpg', 15, 'activo', '2025-07-20'),
(12, 'Monitor LG 27GN950-B', 'Monitor 4K de 27 pulgadas con 144Hz de tasa de refresco.', 'lg_27gn950b.jpg', 10, 'activo', '2025-07-25'),
(13, 'Tablet Apple iPad Pro 12.9', 'Tablet de 12.9 pulgadas con chip M1 y 256GB de almacenamiento.', 'ipad_pro_12.9.jpg', 8, 'activo', '2025-07-30'),
(14, 'Impresora HP Envy 6055', 'Impresora inalámbrica con soporte para impresión móvil.', 'hp_envy_6055.jpg', 12, 'activo', '2025-08-01'),
(15, 'Robot Aspiradora Roomba 692', 'Robot aspiradora con Wi-Fi y control por app.', 'roomba_692.jpg', 20, 'activo', '2025-08-05'),
(16, 'Alexa Echo Dot (4ta Gen)', 'Altavoz inteligente con Alexa integrada.', 'echo_dot_4.jpg', 25, 'activo', '2025-08-10'),
(17, 'Sony Playstation VR', 'Sistema de realidad virtual para PlayStation 4 y 5.', 'ps_vr.jpg', 18, 'activo', '2025-08-15'),
(18, 'Cámara GoPro HERO9', 'Cámara de acción con 5K de resolución y estabilización avanzada.', 'gopro_hero9.jpg', 12, 'activo', '2025-08-20'),
(19, 'Apple MacBook Air M1', 'Laptop ultradelgada con chip M1 de Apple y 256GB SSD.', 'macbook_air_m1.jpg', 10, 'activo', '2025-08-25'),
(20, 'Teléfono Xiaomi Redmi Note 10', 'Smartphone con pantalla AMOLED de 6.43\" y 64GB de almacenamiento.', 'redmi_note_10.jpg', 30, 'activo', '2025-08-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`) VALUES
(1, 'ww', 'ed@gmail.com', '$2y$10$Jlih9Z6opmOqHmLMv7zef.IV1X8y1rmXG5BoJd.wsaN2zo/PGjUGq'),
(2, 'ddddd', 'edwar@gmial.com', '$2y$10$CdTxfaAo4OxZXx12ZPGTaO5VC6krud7ID9QDJ9HdD0KDMxZvymg9y'),
(5, 'alberto', 'alberto123@gmail.com', '$2y$10$P0VM2CrNn0.EbL1rXrKgk.UQThZVLVe1NQiTQEdgK5z9XQWKH8dWC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos_premios`
--
ALTER TABLE `productos_premios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos_premios`
--
ALTER TABLE `productos_premios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
