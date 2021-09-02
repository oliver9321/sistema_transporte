

DROP TABLE IF EXISTS `tbl_company_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_company_services` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Address` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Phone1` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Phone2` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Email` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DateCreation` datetime DEFAULT NULL,
  `UserIdCreation` int(11) DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_company_services`
--

LOCK TABLES `tbl_company_services` WRITE;
/*!40000 ALTER TABLE `tbl_company_services` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_company_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_costumer_type`
--

DROP TABLE IF EXISTS `tbl_costumer_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_costumer_type` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NameType` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DateCreation` datetime NOT NULL,
  `UserIdCreation` int(11) DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_costumer_type`
--

LOCK TABLES `tbl_costumer_type` WRITE;
/*!40000 ALTER TABLE `tbl_costumer_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_costumer_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_costumers`
--

DROP TABLE IF EXISTS `tbl_costumers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_costumers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IdCostumerType` int(11) DEFAULT NULL,
  `Name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `LastName` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Phone1` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Phone2` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DateCreation` datetime DEFAULT NULL,
  `UserIdCreation` int(11) DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIDLastModification` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `IdCostumerType_idx` (`IdCostumerType`),
  CONSTRAINT `IdCostumerType` FOREIGN KEY (`IdCostumerType`) REFERENCES `tbl_costumer_type` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_costumers`
--

LOCK TABLES `tbl_costumers` WRITE;
/*!40000 ALTER TABLE `tbl_costumers` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_costumers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_drivers`
--

DROP TABLE IF EXISTS `tbl_drivers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_drivers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `LastName` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Phone1` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Phone2` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `DateCreation` datetime DEFAULT NULL,
  `UserIdCreation` int(11) DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_drivers`
--

LOCK TABLES `tbl_drivers` WRITE;
/*!40000 ALTER TABLE `tbl_drivers` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_drivers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_order_details`
--

DROP TABLE IF EXISTS `tbl_order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_order_details` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IdOrder` int(11) NOT NULL,
  `Brand` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Model` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Color` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Year` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Vin` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `DateCreation` datetime DEFAULT NULL,
  `UserIdCreation` int(11) DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_order_details`
--

LOCK TABLES `tbl_order_details` WRITE;
/*!40000 ALTER TABLE `tbl_order_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_order_status`
--

DROP TABLE IF EXISTS `tbl_order_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_order_status` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DateCreation` datetime DEFAULT NULL,
  `UserIdCreation` int(11) DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;



--
-- Table structure for table `tbl_payments`
--

DROP TABLE IF EXISTS `tbl_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_payments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PaymentManager` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `CardHolderName` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `CreditCard` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ExpDate` datetime NOT NULL,
  `BilingAddress` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Reference` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Tel` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `NotePeiment` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `DateCreation` datetime DEFAULT NULL,
  `UserIdCreation` int(11) DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_payments`
--

LOCK TABLES `tbl_payments` WRITE;
/*!40000 ALTER TABLE `tbl_payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_payments` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Dumping data for table `tbl_order_status`
--

LOCK TABLES `tbl_order_status` WRITE;
/*!40000 ALTER TABLE `tbl_order_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_order_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_orders`
--

DROP TABLE IF EXISTS `tbl_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_orders` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IdCustomersOrigin` int(11) NOT NULL,
  `IdCustomersDestination` int(11) NOT NULL,
  `IdCompanayService` int(11) NOT NULL,
  `IdDriver` int(11) NOT NULL,
  `IdStatus` int(11) NOT NULL,
  `IdPayment` int(11) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `PickUpdate` datetime NOT NULL,
  `DeliveryDate` datetime NOT NULL,
  `OriginAddress` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `OriginCity` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `OriginState` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `OriginZip` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `OriginNote` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `DestinationAddress` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DestinationCity` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DestinationState` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DestinationZip` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DestinationNote` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Total` float NOT NULL,
  `Deposit` float NOT NULL,
  `ExtraTrukerFee` float DEFAULT NULL,
  `Earnings` float DEFAULT NULL,
  `Cod` float DEFAULT NULL,
  `TrukerRate` float DEFAULT NULL,
  `RequestStatus` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DateCreation` datetime DEFAULT NULL,
  `UserIdCreation` int(11) DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_customers_origin_idx` (`IdCustomersOrigin`),
  KEY `fk_customers_destination_idx` (`IdCustomersDestination`),
  KEY `fk_company_service_idx` (`IdCompanayService`),
  KEY `fk_driver_idx` (`IdDriver`),
  KEY `fk_estatus_order_idx` (`IdStatus`),
  KEY `fk_payment_idx` (`IdPayment`),
  CONSTRAINT `fk_company_service` FOREIGN KEY (`IdCompanayService`) REFERENCES `tbl_company_services` (`ID`),
  CONSTRAINT `fk_customers_destination` FOREIGN KEY (`IdCustomersDestination`) REFERENCES `tbl_costumers` (`ID`),
  CONSTRAINT `fk_customers_origin` FOREIGN KEY (`IdCustomersOrigin`) REFERENCES `tbl_costumers` (`ID`),
  CONSTRAINT `fk_driver` FOREIGN KEY (`IdDriver`) REFERENCES `tbl_drivers` (`ID`),
  CONSTRAINT `fk_estatus_order` FOREIGN KEY (`IdStatus`) REFERENCES `tbl_order_status` (`ID`),
  CONSTRAINT `fk_payment` FOREIGN KEY (`IdPayment`) REFERENCES `tbl_payments` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_orders`
--

LOCK TABLES `tbl_orders` WRITE;
/*!40000 ALTER TABLE `tbl_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_vehicles`
--

DROP TABLE IF EXISTS `tbl_vehicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_vehicles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Brand` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Model` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DateCreation` datetime DEFAULT NULL,
  `UserIdCreation` int(11) DEFAULT NULL,
  `LastModificationDate` datetime DEFAULT NULL,
  `UserIdLastModification` int(11) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_vehicles`
--

LOCK TABLES `tbl_vehicles` WRITE;
/*!40000 ALTER TABLE `tbl_vehicles` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_vehicles` ENABLE KEYS */;
UNLOCK TABLES;
