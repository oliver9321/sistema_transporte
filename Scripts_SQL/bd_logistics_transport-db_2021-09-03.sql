-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-09-2021 a las 18:17:37
-- Versión del servidor: 8.0.23
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_logistics_transport`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_company_services`
--

CREATE TABLE `tbl_company_services` (
  `Id` int NOT NULL,
  `CompanyName` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Address` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Phone1` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Phone2` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Email` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DateCreation` datetime DEFAULT CURRENT_TIMESTAMP,
  `UserIdCreation` int DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `Id` int NOT NULL,
  `IdCustomerType` int NOT NULL,
  `Name` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `LastName` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Phone1` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Phone2` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DateCreation` datetime DEFAULT CURRENT_TIMESTAMP,
  `UserIdCreation` int DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIDLastModification` int DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_customer_type`
--

CREATE TABLE `tbl_customer_type` (
  `Id` int NOT NULL,
  `NameType` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DateCreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UserIdCreation` int DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_drivers`
--

CREATE TABLE `tbl_drivers` (
  `Id` int NOT NULL,
  `Name` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `LastName` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Phone1` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Phone2` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `DateCreation` datetime DEFAULT CURRENT_TIMESTAMP,
  `UserIdCreation` int DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `Id` int NOT NULL,
  `IdCustomerOrigin` int NOT NULL,
  `IdCustomerDestination` int NOT NULL,
  `IdCompanayService` int NOT NULL,
  `IdDriver` int NOT NULL,
  `IdStatus` int NOT NULL,
  `IdPayment` int NOT NULL,
  `OrderDate` datetime NOT NULL,
  `PickUpDate` datetime NOT NULL,
  `DeliveryDate` datetime NOT NULL,
  `OriginAddress` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `OriginCity` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `OriginState` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `OriginZip` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `OriginNote` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `DestinationAddress` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DestinationCity` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DestinationState` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DestinationZip` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DestinationNote` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `Total` float NOT NULL,
  `Deposit` float NOT NULL,
  `ExtraTrukerFee` float DEFAULT NULL,
  `Earnings` float DEFAULT NULL,
  `Cod` float DEFAULT NULL,
  `TrukerRate` float DEFAULT NULL,
  `RequestStatus` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DateCreation` datetime DEFAULT CURRENT_TIMESTAMP,
  `UserIdCreation` int DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `Id` int NOT NULL,
  `IdOrder` int NOT NULL,
  `Brand` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Model` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Color` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Year` int NOT NULL,
  `Vin` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `DateCreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UserIdCreation` int DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_order_status`
--

CREATE TABLE `tbl_order_status` (
  `Id` int NOT NULL,
  `Status` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DateCreation` datetime DEFAULT CURRENT_TIMESTAMP,
  `UserIdCreation` int DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_order_status`
--

INSERT INTO `tbl_order_status` (`Id`, `Status`, `DateCreation`, `UserIdCreation`, `LastModificationDate`, `UserIdLastModification`, `IsActive`) VALUES
(1, 'Pending', '2021-09-03 10:36:30', NULL, '2021-09-03 15:35:26', NULL, b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_payments`
--

CREATE TABLE `tbl_payments` (
  `Id` int NOT NULL,
  `PaymentOwnerName` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `CardHolderName` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `CreditCard` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ExpDate` varchar(20) NOT NULL,
  `BilingAddress` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Reference` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Tel` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NotePayment` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `DateCreation` datetime DEFAULT CURRENT_TIMESTAMP,
  `UserIdCreation` int DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `Id` int NOT NULL,
  `ProfileUserId` int NOT NULL,
  `Name` varchar(50) NOT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `UserName` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Password` text NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Image` text,
  `DateCreation` datetime DEFAULT NULL,
  `UserIdCreation` int DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int DEFAULT NULL,
  `IsActive` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user_profiles`
--

CREATE TABLE `tbl_user_profiles` (
  `Id` int NOT NULL,
  `Profile` varchar(50) NOT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `DateCreation` datetime DEFAULT CURRENT_TIMESTAMP,
  `UserIdCreation` int DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int DEFAULT NULL,
  `IsActive` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_vehicles`
--

CREATE TABLE `tbl_vehicles` (
  `Id` int NOT NULL,
  `Brand` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Model` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DateCreation` datetime DEFAULT CURRENT_TIMESTAMP,
  `UserIdCreation` int DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int DEFAULT NULL,
  `IsActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_company_services`
--
ALTER TABLE `tbl_company_services`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdCostumerType_idx` (`IdCustomerType`);

--
-- Indices de la tabla `tbl_customer_type`
--
ALTER TABLE `tbl_customer_type`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tbl_drivers`
--
ALTER TABLE `tbl_drivers`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_customers_origin_idx` (`IdCustomerOrigin`),
  ADD KEY `fk_customers_destination_idx` (`IdCustomerDestination`),
  ADD KEY `fk_company_service_idx` (`IdCompanayService`),
  ADD KEY `fk_driver_idx` (`IdDriver`),
  ADD KEY `fk_estatus_order_idx` (`IdStatus`),
  ADD KEY `fk_payment_idx` (`IdPayment`);

--
-- Indices de la tabla `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdOrder` (`IdOrder`);

--
-- Indices de la tabla `tbl_order_status`
--
ALTER TABLE `tbl_order_status`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tbl_payments`
--
ALTER TABLE `tbl_payments`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ProfileUserId` (`ProfileUserId`);

--
-- Indices de la tabla `tbl_user_profiles`
--
ALTER TABLE `tbl_user_profiles`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tbl_vehicles`
--
ALTER TABLE `tbl_vehicles`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_company_services`
--
ALTER TABLE `tbl_company_services`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_customer_type`
--
ALTER TABLE `tbl_customer_type`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_drivers`
--
ALTER TABLE `tbl_drivers`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_order_status`
--
ALTER TABLE `tbl_order_status`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_user_profiles`
--
ALTER TABLE `tbl_user_profiles`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_vehicles`
--
ALTER TABLE `tbl_vehicles`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD CONSTRAINT `IdCostumerType` FOREIGN KEY (`IdCustomerType`) REFERENCES `tbl_customer_type` (`Id`);

--
-- Filtros para la tabla `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD CONSTRAINT `fk_company_service` FOREIGN KEY (`IdCompanayService`) REFERENCES `tbl_company_services` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_customers_destination` FOREIGN KEY (`IdCustomerDestination`) REFERENCES `tbl_customers` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_customers_origin` FOREIGN KEY (`IdCustomerOrigin`) REFERENCES `tbl_customers` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_driver` FOREIGN KEY (`IdDriver`) REFERENCES `tbl_drivers` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_estatus_order` FOREIGN KEY (`IdStatus`) REFERENCES `tbl_order_status` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_payment` FOREIGN KEY (`IdPayment`) REFERENCES `tbl_payments` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`IdOrder`) REFERENCES `tbl_orders` (`Id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`ProfileUserId`) REFERENCES `tbl_users` (`Id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
