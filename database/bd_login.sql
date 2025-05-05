-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2025 a las 05:32:26
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
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `descripcion`, `fecha`, `imagen`, `estado`, `creado_en`) VALUES
(1, 'Concierto Exclusivo', 'Ven a disfrutar de un concierto privado con artistas invitados.', '2025-06-10', 'ruta/a/la/imagen.jpg', 1, '2025-05-02 19:39:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `creado_en` datetime NOT NULL,
  `usado` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `creado_en`, `usado`) VALUES
(1, 'edwardwilson574@gmail.com', 'c2881af292fab8f01eb161a0c7b84527dd95205aef16b11c91811932fc3c5b95181d18a5ca6ccef4549ebb6ddcb959c523e1', '0000-00-00 00:00:00', 0),
(2, 'edwardwilson574@gmail.com', '5fa4f773fc2db24cc2f6dc08755026cd456051b5fd49617602556a7c11b0ad071826ff450c920e64621c9539e04f5a26eb3f', '0000-00-00 00:00:00', 0),
(3, 'edwardwilson574@gmail.com', 'fae0f1de5de505d376ffd524ee2f323bafe767643bbc9ab795f9e511f8380d501b6b05ab173f5586568b0431aad30b3fec72', '0000-00-00 00:00:00', 0),
(4, 'edwardwilson574@gmail.com', '0ef55febeb91c1617774c17620f017d9d66d171f5c0e9fd5150db22e8f0794be827427b51809109916d48bca04f4a6f0e27a', '0000-00-00 00:00:00', 0),
(5, 'edwardwilson574@gmail.com', 'b53ebe0cceb4971833120c326ce6b32c7673752ea8672a7f19171eaa293a4410514528bfed6cd7f0b6a345b6dff42c311c12', '0000-00-00 00:00:00', 0);

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
  `contrasena` varchar(255) NOT NULL,
  `dni` varchar(15) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `evidencia_pago` varchar(255) NOT NULL,
  `estado_cuenta` tinyint(4) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`, `dni`, `celular`, `plan`, `evidencia_pago`, `estado_cuenta`) VALUES
(10, 'Edwar', 'edwardwilson574@gmail.com', '$2y$10$S6wXlLVeEiBFLrpmnx3Gk.2HTffd9LxTgNn13Dne//5g6lPkrGBPa', '74862994', '954377257', 'mensual', '33a13c304a2cee6fa07f2566500a1b27.jpg', 1),
(11, 'tilin', 'tilin@gmail.com', '$2y$10$TCqKMS5rqYWl/dpEMIpJ4uxjXpgbdvzqiMkXXru1AVHzHrkbgi6Vu', '47381250', '999999999', 'mensual', '8a907e7e88cd7bc97e52511ab2a240fc.jpeg', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos_premios`
--
ALTER TABLE `productos_premios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
