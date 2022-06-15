-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 11:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `csskate`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  `correo` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  `pass` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `correo`, `pass`, `admin`) VALUES
(1, 'Oscar Romero', 'oscar@csskate.com', 'pass', 0),
(2, 'Admin', 'admin@csskate.com', 'admin', 1),
(3, 'Magdalena', 'magdalena@csskate.com', 'magdalena123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Dumping data for table `compra`
--

INSERT INTO `compra` (`id_compra`, `id_cliente`, `id_producto`, `cantidad`, `fecha`) VALUES
(3, 1, 15, 1, '2022-05-26'),
(6, 1, 13, 1, '2022-05-31'),
(7, 1, 2, 1, '2022-05-31'),
(8, 1, 12, 3, '2022-05-31'),
(9, 1, 10, 1, '2022-05-31'),
(9, 1, 11, 2, '2022-05-31'),
(9, 1, 12, 3, '2022-05-31'),
(10, 1, 10, 2, '2022-05-31'),
(10, 1, 11, 2, '2022-05-31'),
(10, 1, 12, 3, '2022-05-31'),
(11, 1, 4, 1, '2022-05-31'),
(11, 1, 12, 2, '2022-05-31'),
(12, 1, 15, 1, '2022-05-31'),
(13, 1, 8, 2, '2022-05-31'),
(13, 1, 10, 1, '2022-05-31'),
(13, 1, 12, 1, '2022-05-31'),
(13, 1, 16, 1, '2022-05-31'),
(14, 1, 10, 1, '2022-05-31'),
(14, 1, 12, 1, '2022-05-31'),
(1, 2, 4, 5, '2022-05-26'),
(1, 2, 6, 3, '2022-05-26'),
(2, 2, 10, 1, '2022-05-26'),
(4, 2, 13, 1, '2022-05-31'),
(5, 2, 17, 1, '2022-05-31'),
(15, 2, 11, 1, '2022-06-05'),
(16, 2, 12, 1, '2022-06-05'),
(17, 2, 11, 1, '2022-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf16_spanish_ci NOT NULL,
  `detalles` text COLLATE utf16_spanish_ci NOT NULL,
  `longboard` tinyint(1) NOT NULL DEFAULT 0,
  `precio` double NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `img` varchar(255) COLLATE utf16_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `detalles`, `longboard`, `precio`, `stock`, `img`) VALUES
(2, 'Element Section Black Complete', 'Empieza a rodar por las calles con la Element Section Black Complete 8,0 x 31,75. Este es un completo de alta calidad que es perfecto para los patinadores principiantes, los que tienen un presupuesto limitado y los ciclistas más pequeños que recién comienzan. Cuenta con una plataforma de arce Element de 7 capas de alta calidad, ruedas Element, rodamientos blindados abec 7 y hardware de llave allen. Viene completamente ensamblado y listo para usar nada más sacarlo de la caja.', 0, 94.99, 9, 'img/productos/1.webp'),
(3, 'Element Seal Black Complete', 'Comienza a rodar con el Element Seal Black Complete 8.0 x 31.75. Un completo de alta calidad que es perfecto para los patinadores principiantes o aquellos con un presupuesto limitado. Cuenta con una plataforma de arce Element de 7 capas de alta calidad, ejes Element, ruedas Element 52 mm 95a, herrajes allen y rodamientos blindados. Completamente ensamblado y listo para salir de la caja.', 0, 94.99, 25, 'img/productos/2.webp'),
(4, 'Enjoi Litter Box Exclusive Complete', 'Comience a rodar con el Enjoi LIitter Box Exclusive Complete 7.5 x 31.1 Diseñado con componentes de alta calidad que incluyen una plataforma tradicional de arce de 7 capas Enjoi, con ruedas Enjoi, camiones Tensor, lija impresa Enjoi, rodamientos blindados y herrajes phillips estándar. Perfecto para pequeños ciclistas jóvenes que recién comienzan y aquellos con un presupuesto limitado que buscan una gran oferta. Montado y listo para montar nada más sacarlo de la caja.', 0, 84.99, 40, 'img/productos/3.webp'),
(5, 'Enjoi Whitey Panda Soft Top Complete', 'Disfrute del skateboarding y comience a rodar bien con el Enjoi Whitey Panda Complete 6.75 x 27. Diseñado con componentes de alta calidad que incluyen una tabla tradicional de arce de 7 capas Enjoi, con ruedas Enjoi de 51 mm, ejes Tensor, rodamientos blindados y herrajes phillips estándar. Perfecto para los ciclistas más pequeños que están aprendiendo a patinar. Completamente ensamblado y listo para usar nada más sacarlo de la caja.', 0, 89.99, 35, 'img/productos/4.webp'),
(6, 'Alien Workshop Spectrum Navy Complete', 'Sal de este mundo con la patineta Alien Workshop Spectrum Navy Complete Skateboard. Este Spectrum Complete de calidad profesional mide 8\" de ancho x 31.625\" de largo y es ideal para todos los niveles de habilidad. Patina en la calle, en la piscina, en el parque o en el vert con este asombroso monopatín completo de Alien Workshop. Tiene toneladas de pop y viene preensamblado que incluye camiones, ruedas, cojinetes, herrajes y cinta de agarre. Montado en fábrica por Alien Workshop y listo para patinar nada más sacarlo de la caja.', 0, 72.98, 16, 'img/productos/5.webp'),
(7, 'Alien Workshop Believe Black Complete', 'Comienza a rodar por las calles con Alien Workshop Believe Black Complete 7.75 x 31. Este es un completo de alta calidad que es perfecto para patinadores principiantes, aquellos con un presupuesto limitado y ciclistas más pequeños que recién comienzan. Cuenta con una cubierta de arce Alien Workshop de 7 capas de alta calidad, ruedas Alien Workshop, rodamientos blindados abec 7 y herrajes phillips estándar. Viene completamente ensamblado y listo para usar nada más sacarlo de la caja.', 0, 72.98, 82, 'img/productos/6.webp'),
(8, 'Arbor Seed Woodcut Mini Complete', 'Un diseño versátil de calle y parque con un cóncavo más suave para mayor comodidad y control y dimensiones más pequeñas, perfecto para que los patinadores más jóvenes aprendan y mejoren sus habilidades de patinaje. Con obras de arte de estilo de impresión de bloque caprichoso del artista Brian Reedy con sede en Miami.', 0, 110, 39, 'img/productos/7.webp'),
(9, 'Santa Cruz Classic Dot Micro Complete', 'Comienza a rodar a la derecha y patina con el Santa Cruz Classic Dot Micro Complete 7.5 x 28.25. Este es un monopatín completo de alta calidad que es perfecto para patinadores principiantes para aquellos con un presupuesto limitado, diseñado pensando en los ciclistas más pequeños. Cuenta con una cubierta de arce Santa Cruz de 7 capas de alta calidad, ruedas Bullet trucks OJ y cojinetes blindados. Completamente ensamblado y listo para usar nada más sacarlo de la caja.', 0, 109.95, 52, 'img/productos/8.webp'),
(10, 'Santa Cruz Rad Dot Pintail Complete', 'Recorra las calles con un estilo colorido en el Santa Cruz Blossom Dot 27.5\" Cruiser Complete Skateboard. Este crucero compacto presenta un gráfico floral azul con superposición de texto para una apariencia colorida. Los ejes de la marca Bullet mantienen el andar estable a velocidades más altas y los 65 mm, 78a Las ruedas mantienen el agarre en las curvas pronunciadas al mismo tiempo que proporcionan una excelente aceleración.Con un acabado cóncavo suave y una nariz puntiaguda junto con una cola pequeña y de dos puntas, esta tabla proporciona una superficie de conducción estable y una forma original.', 1, 139.98, 63, 'img/productos/9.webp'),
(11, 'Santa Cruz Prismatic Dot Shark Complete', 'Carve alrededor en el Santa Cruz Prismatic Dot Shark Complete 8.8 x 27.7. Esta es una patineta completa de alta calidad que es perfecta para aquellos que buscan navegar por la ciudad o que buscan acostumbrarse simplemente a andar en patineta. Cuenta con una cubierta de arce Santa Cruz de 9 capas de alta calidad, camiones Bullet, ruedas Santa Cruz y rodamientos blindados. Totalmente ensamblado y listo para patinar nada más sacarlo de la caja.', 1, 139.99, 4, 'img/productos/10.webp'),
(12, 'Santa Cruz Split Hand Drop Down Cruzer', 'Muévete del punto A al B y con el Cruzer desplegable de mano partida de Santa Cruz 9,5 x 37,52. Esta es una patineta completa de alta calidad que es perfecta para aquellos que buscan navegar por la ciudad o que buscan acostumbrarse simplemente a andar en patineta. Cuenta con una cubierta de arce Santa Cruz de 9 capas de alta calidad, camiones Bullet, ruedas Santa Cruz y rodamientos blindados. Totalmente ensamblado y listo para patinar nada más sacarlo de la caja.', 1, 199.95, -6, 'img/productos/11.webp'),
(13, 'Arbor Foundation Breach Complete', 'Talla el pavimento con el Arbor Foundation Breach Complete 8 x 34. Una forma rocker sobre bandas en forma de cuña con una distancia entre ejes más larga que es ágil y sensible para bombear con fuerza.', 1, 180, 89, 'img/productos/12.webp'),
(14, 'Arbor Lovelace Shaper Surfskate Complete', 'Talla el pavimento con el Arbor Lovelace Shaper Surfskate Complete 10 x 32. Actualizado con una punta ligeramente más ancha para un mejor control del pie delantero, esta es una versión más corta de nuestra Resin, lo que hace que este modelo sea un poco más ágil y fácil de bombear.', 1, 280, 2, 'img/productos/13.webp'),
(15, 'Duster\'s Flashback Felix Complete', 'La Dusters Felix Flashback Yellow/White 28\" Complete Cruiser es una estupenda cruiser de la conocida marca Dusters. Tiene un estupendo estampado de Felix The Cat y está fabricada en material de primera calidad. Esto te permite navegar sin problemas por las calles.', 1, 99.98, 12, 'img/productos/14.webp'),
(16, 'Duster\'s Channel Felix Longboard', 'Comienza a navegar por las calles con el Duster\'s Channel Felix Longboard 9.125 x 34. Un monopatín completo preconstruido de alta calidad para navegar por las calles. Cuenta con una plataforma de Duster, camiones con pivote central inverso Drop Through Slant de 180 mm, ruedas de crucero 78A de 71 mm de Duster, rodamientos Abec 7 y lija de Duster. Completamente ensamblado y listo para rodar directamente de la caja.', 1, 144.98, 39, 'img/productos/15.webp'),
(17, 'Globe Big Blazer Red Toadstool Complete', 'El Big Blazer en Red Toadstool es un crucero de cola de diamante de resina 7 de arce duro de eslora media con un abrebotellas incorporado. Con un cóncavo suave con kick tail para maniobrabilidad, ruedas de crucero cónicas de 62 mm 78a resistentes a la abrasión y ejes de aleación Tensor de 6.0\".', 1, 149.99, 52, 'img/productos/16.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_cliente`,`id_compra`,`id_producto`),
  ADD KEY `FK_id_prod` (`id_producto`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `FK_id_prod` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`),
  ADD CONSTRAINT `compra_FK_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_FK_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
