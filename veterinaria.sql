-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2021 a las 12:49:34
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombres_cl` varchar(250) NOT NULL,
  `apellidos_cl` varchar(250) NOT NULL,
  `num_documento` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombres_cl`, `apellidos_cl`, `num_documento`) VALUES
(1, 'Jose', 'Mirna', 70279545),
(2, 'Miriam', 'Larico', 78456598),
(11, 'Carmen', 'Lorenzo de la Cruz', 78986545),
(12, 'Cristian', 'Chipana Huaman', 45789865),
(13, 'Oriana', 'Ramos Salcedo', 70758684),
(14, 'Candiotty', 'Chavez Navarro', 45698745),
(15, 'Romani', 'Vasquez De la Cruz', 45789865),
(16, 'Carmen', 'Lima Tesla', 78456589),
(17, 'Lady Emilyn', 'Ayala Pfuturi', 70528965),
(18, 'Rosario', 'Paco Lindo', 45678945),
(19, 'Ricardo', 'Ayala Quispe', 78986545),
(20, 'Lucio', 'Quispe Chavez', 98785445),
(21, 'Luis', 'Flores Garcia', 75631498),
(22, 'Luis', 'Flores Garcia', 75631498),
(23, 'Rosa', 'Gonzales Palacios', 65212486),
(24, 'Miguel', 'Terrones Salazar', 95368564),
(25, 'Romani', 'Vasquez De la Cruz', 45789865),
(26, 'Juan', 'Fernandez Arango', 74259146),
(27, 'Gonzalo', 'Guerrero Palacios', 74125834),
(28, 'Feliciano', 'Requejo Rueda', 71429514),
(29, 'Sonia', 'Salvatierra Gomez', 74379504),
(1, 'Jose', 'Mirna', 70279545),
(2, 'Miriam', 'Larico', 78456598),
(11, 'Carmen', 'Lorenzo de la Cruz', 78986545),
(12, 'Cristian', 'Chipana Huaman', 45789865),
(13, 'Oriana', 'Ramos Salcedo', 70758684),
(14, 'Candiotty', 'Chavez Navarro', 45698745),
(15, 'Romani', 'Vasquez De la Cruz', 45789865),
(16, 'Carmen', 'Lima Tesla', 78456589),
(17, 'Lady Emilyn', 'Ayala Pfuturi', 70528965),
(18, 'Rosario', 'Paco Lindo', 45678945),
(19, 'Ricardo', 'Ayala Quispe', 78986545),
(20, 'Lucio', 'Quispe Chavez', 98785445),
(21, 'Luis', 'Flores Garcia', 75631498),
(22, 'Luis', 'Flores Garcia', 75631498),
(23, 'Rosa', 'Gonzales Palacios', 65212486),
(24, 'Miguel', 'Terrones Salazar', 95368564),
(25, 'Romani', 'Vasquez De la Cruz', 45789865),
(26, 'Juan', 'Fernandez Arango', 74259146),
(27, 'Gonzalo', 'Guerrero Palacios', 74125834),
(28, 'Feliciano', 'Requejo Rueda', 71429514),
(29, 'Sonia', 'Salvatierra Gomez', 74379504);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_rol`
--

CREATE TABLE `detalle_rol` (
  `iddet_rol` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idrol` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_rol`
--

INSERT INTO `detalle_rol` (`iddet_rol`, `idusuario`, `idrol`, `estado`) VALUES
(1, 1, 4, 'activo'),
(4, 4, 4, 'activo'),
(54, 61, 1, ''),
(55, 62, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL,
  `foto_producto` varchar(250) NOT NULL,
  `nom_producto` varchar(250) NOT NULL,
  `prec_uni_producto` float NOT NULL,
  `tot_cant_producto` int(11) NOT NULL,
  `estado_producto` varchar(20) NOT NULL,
  `descrip_producto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `foto_producto`, `nom_producto`, `prec_uni_producto`, `tot_cant_producto`, `estado_producto`, `descrip_producto`) VALUES
(1, 'centro_de_vitrina.jpg', 'Centro de vitrina Olinda 50\"', 399.9, 7, '0', 'Este centro de entretenimiento Linea Brasil fue fabricado en madera, es el mejor mueble para tu hogar ya que tiene un amplio espacio para equipos de audio y vídeo, para una tv de hasta 55\'\', posee espacios para colocar objetos decorativos y en su parte inferior entrepaño interno con puertas ideales para almacenar teatro en casa, parlantes, etc. Tiene un diseño elegante que le dará el toque perfecto para tener la mejor decoración en tu hogar y combinar con el entorno. Siempre se recomienda tomarse el tiempo necesario para hacer una buena elección de los productos que utilizaremos en nuestro hogar y sobre todo los que utilizaremos para equipar nuestra sala de estar, ya que de ello depende el buen estado de nuestras preparaciones y permitir realizar las tareas domesticas mas sencillas. Esta marca se distingue por la calidad y rigurosidad en la elaboración de todos sus productos, no te arrepentirás, sin duda alguna, de tu elección.'),
(2, 'centro_de_entretenimiento.jpg', 'Centro de Entretenimiento Austin', 1399, 5, '0', 'Este centro de entretenimiento Linea Brasil fue fabricado en madera, es el mejor mueble para tu hogar ya que tiene un amplio espacio para equipos de audio y vídeo, para una tv de hasta 55\', posee espacios para colocar objetos decorativos y en su parte inferior entrepaño interno con puertas ideales para almacenar teatro en casa, parlantes, etc. Tiene un diseño elegante que le dará el toque perfecto para tener la mejor decoración en tu hogar y combinar con el entorno. Siempre se recomienda tomarse el tiempo necesario para hacer una buena elección de los productos que utilizaremos en nuestro hogar y sobre todo los que utilizaremos para equipar nuestra sala de estar, ya que de ello depende el buen estado de nuestras preparaciones y permitir realizar las tareas domesticas mas sencillas. Linea Brasil se distingue por la calidad y rigurosidad en la elaboración de todos sus productos, no te arrepentirás, sin duda alguna, de tu elección.'),
(3, 'BASE DE CAMA RIZZOLI TAPIZADA DE 1.5 PLAZAS.jpg', 'BASE DE CAMA RIZZOLI TAPIZADA DE 1.5 PLAZAS', 1049, 10, '1', 'Si lo que buscas es resistencia y mucha comodidad, con Rizzoli tendrás lo que tanto necesitas. Esta base tapizada está fabricada con materiales de alta calidad, que te brindan la seguridad que buscas para un producto de total calidad. '),
(4, 'BASE DE CAMA RIZZOLI TAPIZADA DE 2 PLAZAS.jpg', 'BASE DE CAMA RIZZOLI TAPIZADA DE 2 PLAZAS', 1229, 15, '1', 'Si lo que buscas es resistencia y mucha comodidad, con Rizzoli tendrás lo que tanto necesitas. Esta base tapizada está fabricada con materiales de alta calidad, que te brindan la seguridad que buscas para un producto de total calidad. Su elegante diseño te encantará y combinará perfecto con los demás muebles y accesorios de tu habitación.'),
(5, 'BASE DE CAMA RIZZOLI TAPIZADA DE 3 PLAZAS.jpg', 'BASE DE CAMA RIZZOLI TAPIZADA DE 3 PLAZAS', 1499, 10, '1', 'Si lo que buscas es resistencia y mucha comodidad, con Rizzoli tendrás lo que tanto necesitas. Esta base tapizada está fabricada con materiales de alta calidad, que te brindan la seguridad que buscas para un producto de total calidad. Su elegante diseño te encantará y combinará perfecto con los demás muebles y accesorios de tu habitación.'),
(6, 'BASE DE CAMA FORLI BOXET UNIVERSAL DE 1.5 PLAZAS.jpg', 'BASE DE CAMA FORLI BOXET UNIVERSAL DE 1.5 PLAZAS', 989, 20, '1', 'Forli te presentan una gran variedad de juegos de cama diseñados para darte el confort y la comodidad que necesitas a la hora de dormir. Los productos que Forli pone a tu alcance están elaborados con materiales de primera calidad que se acoplan a tus necesidades garantizando durabilidad y resistencia.'),
(7, 'BASE DE CAMA FORLI BOXET UNIVERSAL DE 2 PLAZAS.jpg', 'BASE DE CAMA FORLI BOXET UNIVERSAL DE 2 PLAZAS', 1199, 10, '1', 'Forli te presenta una gran variedad de juegos de cama diseñados para darte el confort y la comodidad que necesitas a la hora de dormir. Los productos que Forli pone a tu alcance están elaborados con materiales de primera calidad que se acoplan a tus necesidades garantizando durabilidad y resistencia.'),
(8, 'BASE DE CAMA EL CISNE BOX SPACE DE 1.5 PLAZAS.jpg', 'BASE DE CAMA EL CISNE BOX SPACE DE 1.5 PLAZAS', 1169, 12, '1', 'Disfruta de un sueño más confortable gracias a los productos El Cisne. Mucho confort y toda la durabilidad que solo el box de esta reconocida marca te ofrece. Sus innovadores diseños y fabricación con materiales de la más alta calidad, brindan a sus usuarios un descanso placentero, ayudando a tener una postura adecuada al momento de dormir.'),
(9, 'BASE DE CAMA DRIMER PRACTIBOX GRIS DE 1.5 PLAZAS.jpg', 'BASE DE CAMA DRIMER PRACTIBOX GRIS DE 1.5 PLAZAS', 1119, 13, '1', 'Encuentra el descanso perfecto con los nuevos productos que trae la exclusiva marca Drimer. Siente la comodidad Practibox; ideal para ahorrar espacio debido a su amplio compartimiento interno y la fácil apertura lateral debido a sus sistema con pistones.'),
(10, 'BASE DE CAMA DRIMER PRACTIBOX AZUL DE 1 PLAZA.jpg', 'BASE DE CAMA DRIMER PRACTIBOX AZUL DE 1 PLAZA', 1119, 10, '1', 'Encuentra el descanso perfecto con los nuevos productos que trae la exclusiva marca Drimer. Siente la comodidad Practibox; ideal para ahorrar espacio debido a su amplio compartimiento interno y la fácil apertura lateral debido a sus sistema con pistones.'),
(11, 'BASE DE CAMA DRIMER PRACTIBOX MARRÓN DE 1 PLAZA.jpg', 'BASE DE CAMA DRIMER PRACTIBOX MARRÓN DE 1 PLAZA', 1119, 15, '1', 'Encuentra el descanso perfecto con los nuevos productos que trae la exclusiva marca Drimer. Siente la comodidad Practibox; ideal para ahorrar espacio debido a su amplio compartimiento interno y la fácil apertura lateral debido a sus sistema con pistones.'),
(12, 'BASE DE CAMA ROSEN DIVÁN DE 1.5 PLAZAS.jpg', 'BASE DE CAMA ROSEN DIVÁN DE 1.5 PLAZAS', 999, 20, '1', 'Base diván de Rosen es un modelo de 1.5 plazas que tiene relleno de fibra de poliéster y capas de poliuretano,para que disfrutes de un cómodo descanso. Además, cuenta con un sistema de ventilación de floating system que mantendrá el colchón siempre fresco. Su base es de madera y está cubierta de tela jaquard. Viene con cama auxiliar de 1 plaza.'),
(13, 'BASE DE CAMA EL CISNE DIVÁN DE 2 PLAZAS.jpg', 'BASE DE CAMA EL CISNE DIVÁN DE 2 PLAZAS', 1259, 17, '1', 'Disfruta de un sueño mucho más confortable con productos El Cisne. El innovador diseño y fabricación con materiales de la más alta calidad de esta base diván, te brinda un descanso placentero, ayudando a tener una postura adecuada al momento de dormir.'),
(14, 'BASE DE CAMA ROSEN BOXET ERGO DE 2 PLAZAS.jpg', 'BASE DE CAMA ROSEN BOXET ERGO DE 2 PLAZAS', 1099, 8, '1', 'Ahora tus descansos jamás van a ser los mismos gracias a esta excelente base boxet de Rosen. Su acolchado climatizado air flow combina puntos de contacto de poliuretano flexible y espacios de aire en circulación con una mullida napa de micro fibras huecas de poliéster, regulando la temperatura del colchón.'),
(15, 'BASE DE CAMA ROSEN EUROPEA GRAFITO DE 1.5 PLAZAS.jpg', 'BASE DE CAMA ROSEN EUROPEA GRAFITO DE 1.5 PLAZAS', 999, 25, '1', 'Este práctico e ideal kit de dormitorio es ideal para darte un nuevo estilo y armonía a tu cuarto, los juegos de dormitorio Rosen están fabricados con materiales de primera calidad que garantizan el correcto funcionamiento de sus productos para darles la mayor satisfacción a sus clientes.'),
(16, 'BASE DE CAMA ROSEN  EUROPEA ERGO T DE 1.5 PLAZAS.jpg', 'BASE DE CAMA ROSEN  EUROPEA ERGO T DE 1.5 PLAZAS', 599, 30, '1', 'Si lo que buscas es resistencia y mucha comodidad, con Rosen tendrás lo que tanto necesitas. La base europea Ergo T, está fabricada con materiales de alta calidad, que te brindan la seguridad que buscas para un producto de total calidad.'),
(17, 'BASE DE CAMA DRIMER CANTABRIA CON CAJONES DE 3 PLAZAS.jpg', 'BASE DE CAMA DRIMER CANTABRIA CON CAJONES DE 3 PLAZAS', 1329, 10, '1', 'Cuando pienses en adquirir lo mejor para tu dormitorio; piensa en Drimer. Encuentra las mejores opciones ya que son productos fabricados con materiales de primera calidad que te darán los mejores beneficios para un mejor descanso.'),
(18, 'BASE DE CAMA FORLI BOX UNIVERSAL DE 2.5 PLAZAS.jpg', 'BASE DE CAMA FORLI BOX UNIVERSAL DE 2.5 PLAZAS\r\n', 749, 20, '1', 'Forli te presentan una gran variedad de juegos de cama diseñados para darte el confort y la comodidad que necesitas a la hora de dormir. Los productos que Forli pone a tu alcance están elaborados con materiales de primera calidad que se acoplan a tus necesidades garantizando durabilidad y resistencia.'),
(19, 'BASE DE CAMA DRIMER PRACTIBOX AZUL DE 2.5 PLAZAS.jpg', 'BASE DE CAMA DRIMER PRACTIBOX AZUL DE 2.5 PLAZAS', 1559, 5, '1', 'Encuentra el descanso perfecto con los nuevos productos que trae la exclusiva marca Drimer. Siente la comodidad Practibox; ideal para ahorrar espacio debido a su amplio compartimiento interno y la fácil apertura lateral debido a sus sistema con pistones.'),
(20, 'BASE DE CAMA DRIMER PRACTIBOX GRIS DE 2 PLAZAS.jpg', 'BASE DE CAMA DRIMER PRACTIBOX GRIS DE 2 PLAZAS', 1559, 7, '1', 'Encuentra el descanso perfecto con los nuevos productos que trae la exclusiva marca Drimer. Siente la comodidad Practibox; ideal para ahorrar espacio debido a su amplio compartimiento interno y la fácil apertura lateral debido a sus sistema con pistones.'),
(21, 'BASE DE CAMA DRIMER PRACTIBOX MARRÓN DE 2.5 PLAZAS.jpg', 'BASE DE CAMA DRIMER PRACTIBOX MARRÓN DE 2.5 PLAZAS', 1349, 10, '1', 'Encuentra el descanso perfecto con los nuevos productos que trae la exclusiva marca Drimer. Siente la comodidad Practibox; ideal para ahorrar espacio debido a su amplio compartimiento interno y la fácil apertura lateral debido a sus sistema con pistones.'),
(22, 'BASE DE CAMA ROSEN BOXET ERGO DE 1.5 PLAZAS.jpg', 'BASE DE CAMA ROSEN BOXET ERGO DE 1.5 PLAZAS', 999, 15, '1', 'Este precioso modelo de Rosen trae consigo el acolchado climatizado Air Flow, que combina puntos de contacto de poliuretano flexible y espacios de aire en circulación con una mullida napa de microfibras huecas de poliéster, regulando así la temperatura del colchón.'),
(1, 'centro_de_vitrina.jpg', 'Centro de vitrina Olinda 50\"', 399.9, 7, '0', 'Este centro de entretenimiento Linea Brasil fue fabricado en madera, es el mejor mueble para tu hogar ya que tiene un amplio espacio para equipos de audio y vídeo, para una tv de hasta 55\'\', posee espacios para colocar objetos decorativos y en su parte inferior entrepaño interno con puertas ideales para almacenar teatro en casa, parlantes, etc. Tiene un diseño elegante que le dará el toque perfecto para tener la mejor decoración en tu hogar y combinar con el entorno. Siempre se recomienda tomarse el tiempo necesario para hacer una buena elección de los productos que utilizaremos en nuestro hogar y sobre todo los que utilizaremos para equipar nuestra sala de estar, ya que de ello depende el buen estado de nuestras preparaciones y permitir realizar las tareas domesticas mas sencillas. Esta marca se distingue por la calidad y rigurosidad en la elaboración de todos sus productos, no te arrepentirás, sin duda alguna, de tu elección.'),
(2, 'centro_de_entretenimiento.jpg', 'Centro de Entretenimiento Austin', 1399, 5, '0', 'Este centro de entretenimiento Linea Brasil fue fabricado en madera, es el mejor mueble para tu hogar ya que tiene un amplio espacio para equipos de audio y vídeo, para una tv de hasta 55\', posee espacios para colocar objetos decorativos y en su parte inferior entrepaño interno con puertas ideales para almacenar teatro en casa, parlantes, etc. Tiene un diseño elegante que le dará el toque perfecto para tener la mejor decoración en tu hogar y combinar con el entorno. Siempre se recomienda tomarse el tiempo necesario para hacer una buena elección de los productos que utilizaremos en nuestro hogar y sobre todo los que utilizaremos para equipar nuestra sala de estar, ya que de ello depende el buen estado de nuestras preparaciones y permitir realizar las tareas domesticas mas sencillas. Linea Brasil se distingue por la calidad y rigurosidad en la elaboración de todos sus productos, no te arrepentirás, sin duda alguna, de tu elección.'),
(3, 'BASE DE CAMA RIZZOLI TAPIZADA DE 1.5 PLAZAS.jpg', 'BASE DE CAMA RIZZOLI TAPIZADA DE 1.5 PLAZAS', 1049, 10, '1', 'Si lo que buscas es resistencia y mucha comodidad, con Rizzoli tendrás lo que tanto necesitas. Esta base tapizada está fabricada con materiales de alta calidad, que te brindan la seguridad que buscas para un producto de total calidad. '),
(4, 'BASE DE CAMA RIZZOLI TAPIZADA DE 2 PLAZAS.jpg', 'BASE DE CAMA RIZZOLI TAPIZADA DE 2 PLAZAS', 1229, 15, '1', 'Si lo que buscas es resistencia y mucha comodidad, con Rizzoli tendrás lo que tanto necesitas. Esta base tapizada está fabricada con materiales de alta calidad, que te brindan la seguridad que buscas para un producto de total calidad. Su elegante diseño te encantará y combinará perfecto con los demás muebles y accesorios de tu habitación.'),
(5, 'BASE DE CAMA RIZZOLI TAPIZADA DE 3 PLAZAS.jpg', 'BASE DE CAMA RIZZOLI TAPIZADA DE 3 PLAZAS', 1499, 10, '1', 'Si lo que buscas es resistencia y mucha comodidad, con Rizzoli tendrás lo que tanto necesitas. Esta base tapizada está fabricada con materiales de alta calidad, que te brindan la seguridad que buscas para un producto de total calidad. Su elegante diseño te encantará y combinará perfecto con los demás muebles y accesorios de tu habitación.'),
(6, 'BASE DE CAMA FORLI BOXET UNIVERSAL DE 1.5 PLAZAS.jpg', 'BASE DE CAMA FORLI BOXET UNIVERSAL DE 1.5 PLAZAS', 989, 20, '1', 'Forli te presentan una gran variedad de juegos de cama diseñados para darte el confort y la comodidad que necesitas a la hora de dormir. Los productos que Forli pone a tu alcance están elaborados con materiales de primera calidad que se acoplan a tus necesidades garantizando durabilidad y resistencia.'),
(7, 'BASE DE CAMA FORLI BOXET UNIVERSAL DE 2 PLAZAS.jpg', 'BASE DE CAMA FORLI BOXET UNIVERSAL DE 2 PLAZAS', 1199, 10, '1', 'Forli te presenta una gran variedad de juegos de cama diseñados para darte el confort y la comodidad que necesitas a la hora de dormir. Los productos que Forli pone a tu alcance están elaborados con materiales de primera calidad que se acoplan a tus necesidades garantizando durabilidad y resistencia.'),
(8, 'BASE DE CAMA EL CISNE BOX SPACE DE 1.5 PLAZAS.jpg', 'BASE DE CAMA EL CISNE BOX SPACE DE 1.5 PLAZAS', 1169, 12, '1', 'Disfruta de un sueño más confortable gracias a los productos El Cisne. Mucho confort y toda la durabilidad que solo el box de esta reconocida marca te ofrece. Sus innovadores diseños y fabricación con materiales de la más alta calidad, brindan a sus usuarios un descanso placentero, ayudando a tener una postura adecuada al momento de dormir.'),
(9, 'BASE DE CAMA DRIMER PRACTIBOX GRIS DE 1.5 PLAZAS.jpg', 'BASE DE CAMA DRIMER PRACTIBOX GRIS DE 1.5 PLAZAS', 1119, 13, '1', 'Encuentra el descanso perfecto con los nuevos productos que trae la exclusiva marca Drimer. Siente la comodidad Practibox; ideal para ahorrar espacio debido a su amplio compartimiento interno y la fácil apertura lateral debido a sus sistema con pistones.'),
(10, 'BASE DE CAMA DRIMER PRACTIBOX AZUL DE 1 PLAZA.jpg', 'BASE DE CAMA DRIMER PRACTIBOX AZUL DE 1 PLAZA', 1119, 10, '1', 'Encuentra el descanso perfecto con los nuevos productos que trae la exclusiva marca Drimer. Siente la comodidad Practibox; ideal para ahorrar espacio debido a su amplio compartimiento interno y la fácil apertura lateral debido a sus sistema con pistones.'),
(11, 'BASE DE CAMA DRIMER PRACTIBOX MARRÓN DE 1 PLAZA.jpg', 'BASE DE CAMA DRIMER PRACTIBOX MARRÓN DE 1 PLAZA', 1119, 15, '1', 'Encuentra el descanso perfecto con los nuevos productos que trae la exclusiva marca Drimer. Siente la comodidad Practibox; ideal para ahorrar espacio debido a su amplio compartimiento interno y la fácil apertura lateral debido a sus sistema con pistones.'),
(12, 'BASE DE CAMA ROSEN DIVÁN DE 1.5 PLAZAS.jpg', 'BASE DE CAMA ROSEN DIVÁN DE 1.5 PLAZAS', 999, 20, '1', 'Base diván de Rosen es un modelo de 1.5 plazas que tiene relleno de fibra de poliéster y capas de poliuretano,para que disfrutes de un cómodo descanso. Además, cuenta con un sistema de ventilación de floating system que mantendrá el colchón siempre fresco. Su base es de madera y está cubierta de tela jaquard. Viene con cama auxiliar de 1 plaza.'),
(13, 'BASE DE CAMA EL CISNE DIVÁN DE 2 PLAZAS.jpg', 'BASE DE CAMA EL CISNE DIVÁN DE 2 PLAZAS', 1259, 17, '1', 'Disfruta de un sueño mucho más confortable con productos El Cisne. El innovador diseño y fabricación con materiales de la más alta calidad de esta base diván, te brinda un descanso placentero, ayudando a tener una postura adecuada al momento de dormir.'),
(14, 'BASE DE CAMA ROSEN BOXET ERGO DE 2 PLAZAS.jpg', 'BASE DE CAMA ROSEN BOXET ERGO DE 2 PLAZAS', 1099, 8, '1', 'Ahora tus descansos jamás van a ser los mismos gracias a esta excelente base boxet de Rosen. Su acolchado climatizado air flow combina puntos de contacto de poliuretano flexible y espacios de aire en circulación con una mullida napa de micro fibras huecas de poliéster, regulando la temperatura del colchón.'),
(15, 'BASE DE CAMA ROSEN EUROPEA GRAFITO DE 1.5 PLAZAS.jpg', 'BASE DE CAMA ROSEN EUROPEA GRAFITO DE 1.5 PLAZAS', 999, 25, '1', 'Este práctico e ideal kit de dormitorio es ideal para darte un nuevo estilo y armonía a tu cuarto, los juegos de dormitorio Rosen están fabricados con materiales de primera calidad que garantizan el correcto funcionamiento de sus productos para darles la mayor satisfacción a sus clientes.'),
(16, 'BASE DE CAMA ROSEN  EUROPEA ERGO T DE 1.5 PLAZAS.jpg', 'BASE DE CAMA ROSEN  EUROPEA ERGO T DE 1.5 PLAZAS', 599, 30, '1', 'Si lo que buscas es resistencia y mucha comodidad, con Rosen tendrás lo que tanto necesitas. La base europea Ergo T, está fabricada con materiales de alta calidad, que te brindan la seguridad que buscas para un producto de total calidad.'),
(17, 'BASE DE CAMA DRIMER CANTABRIA CON CAJONES DE 3 PLAZAS.jpg', 'BASE DE CAMA DRIMER CANTABRIA CON CAJONES DE 3 PLAZAS', 1329, 10, '1', 'Cuando pienses en adquirir lo mejor para tu dormitorio; piensa en Drimer. Encuentra las mejores opciones ya que son productos fabricados con materiales de primera calidad que te darán los mejores beneficios para un mejor descanso.'),
(18, 'BASE DE CAMA FORLI BOX UNIVERSAL DE 2.5 PLAZAS.jpg', 'BASE DE CAMA FORLI BOX UNIVERSAL DE 2.5 PLAZAS\r\n', 749, 20, '1', 'Forli te presentan una gran variedad de juegos de cama diseñados para darte el confort y la comodidad que necesitas a la hora de dormir. Los productos que Forli pone a tu alcance están elaborados con materiales de primera calidad que se acoplan a tus necesidades garantizando durabilidad y resistencia.'),
(19, 'BASE DE CAMA DRIMER PRACTIBOX AZUL DE 2.5 PLAZAS.jpg', 'BASE DE CAMA DRIMER PRACTIBOX AZUL DE 2.5 PLAZAS', 1559, 5, '1', 'Encuentra el descanso perfecto con los nuevos productos que trae la exclusiva marca Drimer. Siente la comodidad Practibox; ideal para ahorrar espacio debido a su amplio compartimiento interno y la fácil apertura lateral debido a sus sistema con pistones.'),
(20, 'BASE DE CAMA DRIMER PRACTIBOX GRIS DE 2 PLAZAS.jpg', 'BASE DE CAMA DRIMER PRACTIBOX GRIS DE 2 PLAZAS', 1559, 7, '1', 'Encuentra el descanso perfecto con los nuevos productos que trae la exclusiva marca Drimer. Siente la comodidad Practibox; ideal para ahorrar espacio debido a su amplio compartimiento interno y la fácil apertura lateral debido a sus sistema con pistones.'),
(21, 'BASE DE CAMA DRIMER PRACTIBOX MARRÓN DE 2.5 PLAZAS.jpg', 'BASE DE CAMA DRIMER PRACTIBOX MARRÓN DE 2.5 PLAZAS', 1349, 10, '1', 'Encuentra el descanso perfecto con los nuevos productos que trae la exclusiva marca Drimer. Siente la comodidad Practibox; ideal para ahorrar espacio debido a su amplio compartimiento interno y la fácil apertura lateral debido a sus sistema con pistones.'),
(22, 'BASE DE CAMA ROSEN BOXET ERGO DE 1.5 PLAZAS.jpg', 'BASE DE CAMA ROSEN BOXET ERGO DE 1.5 PLAZAS', 999, 15, '1', 'Este precioso modelo de Rosen trae consigo el acolchado climatizado Air Flow, que combina puntos de contacto de poliuretano flexible y espacios de aire en circulación con una mullida napa de microfibras huecas de poliéster, regulando así la temperatura del colchón.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_cambios`
--

CREATE TABLE `registro_cambios` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `accion` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_cambios`
--

INSERT INTO `registro_cambios` (`id`, `idusuario`, `accion`, `fecha`, `descripcion`) VALUES
(1, 1, 'editar', '2021-07-26 11:30:12', 'a a'),
(2, 1, 'editar', '2021-07-26 18:52:44', 'Cajero a Dispensador'),
(3, 1, 'editar', '2021-07-26 18:54:20', 'Cajero a Dispensador'),
(4, 1, 'editar', '2021-07-26 18:54:33', 'Cajero a Vendedor'),
(5, 1, 'editar', '2021-07-26 18:54:37', 'Cajero a Vendedor'),
(6, 1, 'editar', '2021-07-26 18:55:01', 'Cajero a Vendedor'),
(7, 1, 'editar', '2021-07-26 18:55:05', 'Cajero a Dispensador'),
(8, 1, 'editar', '2021-07-26 19:03:24', 'Cajero a Operador Logistico'),
(9, 1, 'editar', '2021-07-26 19:03:29', 'Cajero a Operador Logistico'),
(10, 3, 'editar', '2021-07-26 19:03:36', 'Dispensador a Recepcionista'),
(11, 3, 'editar', '2021-07-26 10:06:03', 'Dispensador a Recepcionista'),
(12, 3, 'editar', '2021-07-26 10:06:17', 'Dispensador a Recepcionista'),
(13, 1, 'editar', '2021-07-26 10:06:20', 'Cajero a Dispensador'),
(14, 1, 'editar', '2021-07-26 12:06:51', 'Cajero a Dispensador'),
(15, 1, 'editar', '2021-07-26 12:06:54', 'Cajero a Operador Logistico'),
(16, 1, 'editar', '2021-07-26 12:07:27', 'Cajero a Operador Logistico'),
(17, 5, 'editar', '2021-07-26 12:07:31', 'Operador Logistico a Vendedor'),
(18, 5, 'editar', '2021-07-26 12:13:27', 'Operador Logistico a Vendedor'),
(19, 1, 'editar', '2021-07-26 12:13:33', 'Cajero a Dispensador'),
(20, 1, 'editar', '2021-07-26 12:14:35', 'Cajero a Dispensador'),
(21, 1, 'editar', '2021-07-26 12:15:28', 'Cajero a Dispensador'),
(22, 1, 'editar', '2021-07-26 12:20:31', 'Cajero a Vendedor'),
(23, 17, 'editar', '2021-07-26 13:30:14', 'Administrador a Cajero'),
(24, 17, 'editar', '2021-07-26 13:37:58', 'Cajero a Administrador'),
(25, 1, 'editar', '2021-07-26 14:09:54', 'Vendedor a Cajero'),
(26, 6, 'editar', '2021-07-26 14:29:11', 'Dispensador a Cajero'),
(27, 1, 'editar', '2021-07-26 14:54:06', 'Cajero a Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `rol`, `estado`) VALUES
(1, 'Cliente', 'activo'),
(4, 'Administrador', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `pass_user` varchar(50) NOT NULL,
  `nombres` varchar(250) NOT NULL,
  `apellidos` varchar(250) NOT NULL,
  `num_doc` varchar(12) NOT NULL,
  `respuesta` varchar(100) NOT NULL,
  `estado_cuenta` varchar(10) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_modificacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `pass_user`, `nombres`, `apellidos`, `num_doc`, `respuesta`, `estado_cuenta`, `fecha_registro`, `fecha_modificacion`) VALUES
(1, 'ingenieria', 'Jorge', 'Chavez Candiotty', '11111111', 'peluza', 'activo', '2021-10-29 01:03:28', '2021-07-13 03:18:54'),
(4, 'cliente123123', 'Oriana', 'Ramos Salcedo', '44444444', 'Lapadula', 'inactivo', '2021-11-03 10:24:56', '2021-07-13 03:19:56'),
(61, 'cliente123', 'Paull', 'Del Aguila Caute', '22222222', 'coliflor', 'activo', '2021-11-03 10:24:42', '2021-10-29 01:11:38'),
(62, 'cliente123', 'Jairoo', 'Villacrizz', '33333333', 'fresa', 'activo', '2021-11-03 10:23:21', '2021-10-29 01:12:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD KEY `cliente` (`idcliente`);

--
-- Indices de la tabla `detalle_rol`
--
ALTER TABLE `detalle_rol`
  ADD PRIMARY KEY (`iddet_rol`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idrol` (`idrol`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD KEY `producto` (`idproducto`);

--
-- Indices de la tabla `registro_cambios`
--
ALTER TABLE `registro_cambios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`),
  ADD KEY `rol` (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `idusuario_2` (`idusuario`),
  ADD UNIQUE KEY `idusuario_3` (`idusuario`),
  ADD KEY `idusuario` (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `detalle_rol`
--
ALTER TABLE `detalle_rol`
  MODIFY `iddet_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `registro_cambios`
--
ALTER TABLE `registro_cambios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_rol`
--
ALTER TABLE `detalle_rol`
  ADD CONSTRAINT `detalle_rol_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_rol_ibfk_2` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
