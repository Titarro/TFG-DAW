
--
-- Base de datos: `proyecto_garda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listapedidos`
--

CREATE TABLE `listapedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  `subtotal` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `listapedidos`
--

INSERT INTO `listapedidos` (`id_pedido`, `id_producto`, `cantidad`, `precio`, `subtotal`) VALUES
(1, 9, 3, '2.00', '6.00'),
(1, 27, 6, '7.00', '42.00'),
(1, 12, 3, '2.50', '7.50'),
(2, 3, 1, '22.00', '22.00'),
(2, 45, 1, '9.00', '9.00'),
(2, 38, 1, '5.00', '5.00'),
(2, 46, 1, '25.00', '25.00'),
(2, 32, 1, '8.50', '8.50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(20) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total` decimal(5,2) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_usuario`, `total`, `fecha`) VALUES
(1, 1, '55.50', '2021-12-12 05:12:13'),
(2, 1, '69.50', '2021-12-12 05:12:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codp` int(11) NOT NULL,
  `nomp` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `desp` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `preciop` decimal(5,2) NOT NULL,
  `categoriap` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagp` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codp`, `nomp`, `desp`, `estado`, `preciop`, `categoriap`, `imagp`) VALUES
(1, 'Harina de Trigo Suave H6 25kg', '', 1, '20.00', 'harina', 'h6.jpg'),
(2, 'Harina de Trigo Suave H12 25kg', '', 1, '20.00', 'harina', 'h12.jpg'),
(3, 'Harina Extramidi H16 25kg', '', 1, '22.00', 'harina', 'h16.jpg'),
(4, 'Harina de Trigo Lenta H24 25kg', '', 1, '22.00', 'harina', 'h24.jpg'),
(5, 'Semola de Trigo Duro H100 25kg', '', 1, '24.00', 'harina', 'h100.jpg'),
(6, 'Harina Multicereales 25kg', '', 1, '24.00', 'harina', 'multicereale.jpg'),
(7, 'Harina Manitoba Bio 25kg', '', 1, '26.00', 'harina', 'manitoba.jpg'),
(8, 'Semola Trigo Duro Remojada 5kg', '', 1, '15.00', 'harina', 'rimacinata.jpg'),
(9, 'Penne 500g', '', 1, '2.00', 'pasta', 'penne.png'),
(10, 'Eliche 500g', '', 1, '3.20', 'pasta', 'eliche.png'),
(11, 'Penne Rigate 500g', '', 1, '2.50', 'pasta', 'penne_rigate.png'),
(12, 'Rigatoni 500g', '', 1, '2.50', 'pasta', 'rigatoni.png'),
(13, 'Spaghetti 500g', '', 1, '3.00', 'pasta', 'spaghetti.png'),
(14, 'Tagliatelle 500g', '', 1, '2.50', 'pasta', 'tagliatelle.png'),
(15, 'Linguine 500g', '', 1, '2.00', 'pasta', 'linguine.png'),
(16, 'Lasagna 500g', '', 1, '3.20', 'pasta', 'lasagna.png'),
(17, 'Finocchiona 3kg', '', 1, '12.50', 'levoni', 'finocchiona.jpg'),
(18, 'Salami Milano 1.5kg', '', 1, '15.00', 'levoni', 's_milano.jpg'),
(19, 'Salami Gentile 1kg', '', 1, '12.00', 'levoni', 's_gentile.jpg'),
(20, 'Salchicha Picante 400g', '', 1, '4.00', 'levoni', 'salchicha_pica.jpg'),
(21, 'Mortadela Pistacho 4kg', '', 1, '10.00', 'levoni', 'mortadela_pistacho.jpg'),
(22, 'Mortadela Tartufo 4kg', '', 1, '18.00', 'levoni', 'mortadela_tartufo.jpg'),
(23, 'Bacon Ahumado 4kg', '', 1, '12.00', 'levoni', 'bacon_ahumado.jpg'),
(24, 'Pancetta Arrotolata 2.5kg', '', 1, '15.00', 'levoni', 'pancetta_arrotolata.jpg'),
(25, 'Prosciutto Cotto 8kg', '', 1, '18.00', 'levoni', 'prosciutto_cotto.jpg'),
(26, 'Prosciutto Parma 5kg', '', 1, '25.00', 'levoni', 'prosciutto_parma.jpg'),
(27, 'Doppio Concentrado', '', 1, '7.00', 'levoni', 'doppio_concentrado.jpg'),
(28, 'Pelati San Marzano', '', 1, '15.00', 'mutti', 'pelati_san_marzano.jpg'),
(29, 'Pelati', '', 1, '8.00', 'mutti', 'pelati.jpg'),
(30, 'Polpa', '', 1, '6.50', 'mutti', 'polpa.jpg'),
(31, 'Polpa a Pezzi', '', 1, '7.00', 'mutti', 'polpa_pezzi.jpg'),
(32, 'Pizza Sauce', '', 1, '8.50', 'mutti', 'pizza_sauce.jpg'),
(33, 'Pomodorini', '', 1, '7.00', 'mutti', 'pomodorini.jpg'),
(34, 'Bomba', '', 1, '9.00', 'queso', 'bomba.jpg'),
(35, 'Burratina', '', 1, '4.00', 'queso', 'burratina.jpg'),
(36, 'Burratina Tartufo', '', 1, '6.00', 'queso', 'burratina_tartufo.jpg'),
(37, 'Ricotta', '', 1, '3.50', 'queso', 'ricotta.jpg'),
(38, 'Rulo de Cabra', '', 1, '5.00', 'queso', 'rulo_cabra.jpg'),
(39, 'Mozzarella Santa Maria', '', 1, '12.00', 'queso', 'mozzarella_santa_maria.jpg'),
(40, 'Mozzarella Emme', '', 1, '10.00', 'queso', 'mozzarella_emme.jpg'),
(41, 'Mascarpone', '', 1, '4.00', 'queso', 'mascarpone.jpg'),
(42, 'Grana Padano', '', 1, '9.00', 'queso', 'grana_padano.jpg'),
(43, 'Gran Bon', '', 1, '12.00', 'queso', 'gran_bon.jpg'),
(44, 'Pecorino Romano', '', 1, '9.00', 'queso', 'pecorino_romano.jpg'),
(45, 'Parmesano', '', 1, '9.00', 'queso', 'parmesano.jpg'),
(46, 'Moliterno Tartufo', '', 1, '25.00', 'queso', 'moliterno_tartufo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_cliente` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telf` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `rol` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_cliente`, `usuario`, `pass`, `mail`, `telf`, `rol`) VALUES
(6, 'Titarro', '123456', 'titorivero2@gmail.com', '657614816', 0),
(8, 'Simoej', '1234', '123456', '123455456', 1),
(9, 'admin', 'admin', 'admin@gmail.com', '666666666', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codp`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
