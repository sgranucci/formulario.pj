DROP TABLE IF EXISTS `fotos_configuracion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fotos_configuracion` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fotos_configuracion`
--

LOCK TABLES `fotos_configuracion` WRITE;
/*!40000 ALTER TABLE `fotos_configuracion` DISABLE KEYS */;
INSERT INTO `fotos_configuracion` VALUES
(1,'FOTO PALMA DERECHA',0,'2021-04-20 18:22:29','2021-04-20 18:22:29'),
(2,'FOTO PALMA IZQUIERDA',0,'2021-04-20 18:22:29','2021-04-20 18:22:29'),
(3,'FOTO DE FRENTE',0,'2021-04-20 18:22:30','2021-04-20 18:22:30');
/*!40000 ALTER TABLE `fotos_configuracion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fotos_registro`
--

DROP TABLE IF EXISTS `fotos_registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fotos_registro` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `registro_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `index` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fotos_registro_registro_id_foreign` (`registro_id`),
  CONSTRAINT `fotos_registro_registro_id_foreign` FOREIGN KEY (`registro_id`) REFERENCES `registros` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `registros`
--
ALTER TABLE `registros`
ADD `aagi` tinyint(1) NOT NULL;
