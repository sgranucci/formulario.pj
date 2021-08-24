-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: formulario
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actividades`
--

DROP TABLE IF EXISTS `actividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actividades` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=959 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividades`
--

LOCK TABLES `actividades` WRITE;
/*!40000 ALTER TABLE `actividades` DISABLE KEYS */;
INSERT INTO `actividades` VALUES (1,'Jubilado','7',NULL,NULL),(2,'Estudiante','8',NULL,NULL),(3,'Ama de casa','9',NULL,NULL),(4,'Ex - Agente de la Adm. Publica','10',NULL,NULL),(5,'Trabajo Relac. Dependencia','11',NULL,NULL),(6,'Sin Actividad Economica','12',NULL,NULL),(7,'Agricultura Familiar','13',NULL,NULL),(8,'Cultivo de arroz','11111',NULL,NULL),(9,'Cultivo de trigo','11112',NULL,NULL),(10,'Cultivo de cereales n.c.p., excepto los de uso forrajero','11119',NULL,NULL),(11,'Cultivo de maíz','11121',NULL,NULL),(12,'Cultivo de cereales de uso forrajero n.c.p.','11129',NULL,NULL),(13,'Cultivo de pastos de uso forrajero','11130',NULL,NULL),(14,'Cultivo de soja','11211',NULL,NULL),(15,'Cultivo de girasol','11291',NULL,NULL),(16,'Cultivo de oleaginosas n.c.p. excepto soja y girasol','11299',NULL,NULL),(17,'Cultivo de papa, batata y mandioca','11310',NULL,NULL),(18,'Cultivo de tomate','11321',NULL,NULL),(19,'Cultivo de bulbos, brotes, raíces y hortalizas de fruto n.c.p.','11329',NULL,NULL),(20,'Cultivo de hortalizas de hoja y de otras hortalizas frescas','11331',NULL,NULL),(21,'Cultivo de legumbres frescas','11341',NULL,NULL),(22,'Cultivo de legumbres secas','11342',NULL,NULL),(23,'Cultivo de tabaco','11400',NULL,NULL),(24,'Cultivo de algodón','11501',NULL,NULL),(25,'Cultivo de plantas para la obtención de fibras n.c.p.','11509',NULL,NULL),(26,'Cultivo de flores','11911',NULL,NULL),(27,'Cultivo de plantas orcodigontales','11912',NULL,NULL),(28,'Cultivos temporales n.c.p.','11990',NULL,NULL),(29,'Cultivo de vid para vinificar','12110',NULL,NULL),(30,'Cultivo de uva de mesa','12121',NULL,NULL),(31,'Cultivo de frutas cítricas','12200',NULL,NULL),(32,'Cultivo de manzana y pera','12311',NULL,NULL),(33,'Cultivo de frutas de pepita n.c.p.','12319',NULL,NULL),(34,'Cultivo de frutas de carozo','12320',NULL,NULL),(35,'Cultivo de frutas tropicales y subtropicales','12410',NULL,NULL),(36,'Cultivo de frutas secas','12420',NULL,NULL),(37,'Cultivo de frutas n.c.p.','12490',NULL,NULL),(38,'Cultivo de caña de azúcar','12510',NULL,NULL),(39,'Cultivo de plantas sacaríferas n.c.p.','12590',NULL,NULL),(40,'Cultivo de frutos oleaginosos','12600',NULL,NULL),(41,'Cultivo de yerba mate','12701',NULL,NULL),(42,'Cultivo de té y otras plantas cuyas hojas se utilizan para preparar infusiones','12709',NULL,NULL),(43,'Cultivo de especias y de plantas aromáticas y medicinales','12800',NULL,NULL),(44,'Cultivos perennes n.c.p.','12900',NULL,NULL),(45,'Producción de semillas híbridas de cereales y oleaginosas','13011',NULL,NULL),(46,'Producción de semillas varietales o autofecundadas de cereales, oleaginosas, y forrajeras','13012',NULL,NULL),(47,'Producción de semillas de hortalizas y legumbres, flores y plantas orcodigontales y árboles frutales','13013',NULL,NULL),(48,'Producción de semillas de cultivos agrícolas n.c.p.','13019',NULL,NULL),(49,'Producción de otras formas de propagación de cultivos agrícolas','13020',NULL,NULL),(50,'Cría de ganado bovino, excepto la realizada en cabañas y para la producción de leche','14113',NULL,NULL),(51,'Invernada  de ganado bovino excepto el engorde en corrales (Feed-Lot)','14114',NULL,NULL),(52,'Engorde en corrales (Feed-Lot)','14115',NULL,NULL),(53,'Cría de ganado bovino realizada en cabañas','14121',NULL,NULL),(54,'Cría de ganado equino, excepto la realizada en haras','14211',NULL,NULL),(55,'Cría de camélidos','14300',NULL,NULL),(56,'Cría de ganado ovino -excepto en cabañas y para la  producción de lana y leche','14410',NULL,NULL),(57,'Cría de ganado ovino realizada en cabañas','14420',NULL,NULL),(58,'Cría de ganado caprino -excepto la realizada en cabañas y para producción de pelos y de leche','14430',NULL,NULL),(59,'Cría de ganado caprino realizada en cabañas','14440',NULL,NULL),(60,'Cría de ganado porcino, excepto la realizada en cabañas','14510',NULL,NULL),(61,'Cría de ganado porcino realizado en cabañas','14520',NULL,NULL),(62,'Producción de leche bovina','14610',NULL,NULL),(63,'Producción de leche de oveja y de cabra','14620',NULL,NULL),(64,'Producción de lana y pelo de oveja y cabra (cruda)','14710',NULL,NULL),(65,'Producción de pelos de ganado n.c.p.','14720',NULL,NULL),(66,'Cría de aves de corral, excepto para la producción de huevos','14810',NULL,NULL),(67,'Producción de huevos','14820',NULL,NULL),(68,'Apicultura','14910',NULL,NULL),(69,'Cunicultura','14920',NULL,NULL),(70,'Cría de animales pelíferos, pilíferos y plumíferos, excepto de las especies ganaderas','14930',NULL,NULL),(71,'Cría de animales y obtención de productos de origen animal, n.c.p.','14990',NULL,NULL),(72,'Servicios de labranza, siembra, transplante  y  cuidados culturales','16111',NULL,NULL),(73,'Servicios de pulverización, desinfección y fumigación terrestre','16112',NULL,NULL),(74,'Servicios de pulverización, desinfección y fumigación aérea','16113',NULL,NULL),(75,'Servicios de maquinaria agrícola n.c.p., excepto los de cosecha mecánica','16119',NULL,NULL),(76,'Servicios de cosecha mecánica','16120',NULL,NULL),(77,'Servicios de contratistas de mano de obra agrícola','16130',NULL,NULL),(78,'Servicios de post cosecha','16140',NULL,NULL),(79,'Servicios de procesamiento de semillas para su siembra','16150',NULL,NULL),(80,'Servicios de apoyo agrícolas n.c.p','16190',NULL,NULL),(81,'Inseminación artificial y servicios n.c.p. para mejorar la reproducción de los animales y el rendimiento de sus productos','16210',NULL,NULL),(82,'Servicios de contratistas de mano de obra pecuaria','16220',NULL,NULL),(83,'Servicios de esquila de animales','16230',NULL,NULL),(84,'Servicios para el control de plagas, baños parasiticidas, etc.','16291',NULL,NULL),(85,'Albergue y cuidado de  animales de terceros','16292',NULL,NULL),(86,'Servicios de apoyo pecuarios n.c.p.','16299',NULL,NULL),(87,'Caza y repoblación  de animales de caza','17010',NULL,NULL),(88,'Servicios de apoyo para la caza','17020',NULL,NULL),(89,'Plantación de bosques','21010',NULL,NULL),(90,'Repoblación y conservación de bosques nativos y zonas forestadas','21020',NULL,NULL),(91,'Explotación de viveros forestales','21030',NULL,NULL),(92,'Extracción de productos forestales de bosques cultivados','22010',NULL,NULL),(93,'Extracción de productos forestales de bosques nativos','22020',NULL,NULL),(94,'Servicios forestales para la extracción de madera','24010',NULL,NULL),(95,'Servicios forestales excepto los servicios para la extracción de madera','24020',NULL,NULL),(96,'Pesca de organismos marinos, excepto cuando es realizada en buques procesadores','31110',NULL,NULL),(97,'Pesca y elaboración de productos marinos realizada a bordo de buques procesadores','31120',NULL,NULL),(98,'Recolección de organismos marinos excepto peces, crustáceos y moluscos','31130',NULL,NULL),(99,'Pesca continental: fluvial y lacustre','31200',NULL,NULL),(100,'Servicios de apoyo para la pesca','31300',NULL,NULL),(101,'Explotación de criaderos de peces, granjas piscícolas y otros frutos acuáticos  (acuicultura)','32000',NULL,NULL),(102,'Extracción y aglomeración de carbón','51000',NULL,NULL),(103,'Extracción y aglomeración de lignito','52000',NULL,NULL),(104,'Extracción de petróleo crudo','61000',NULL,NULL),(105,'Extracción de gas natural','62000',NULL,NULL),(106,'Extracción de minerales de hierro','71000',NULL,NULL),(107,'Extracción de minerales y concentrados de uranio y torio','72100',NULL,NULL),(108,'Extracción de metales preciosos','72910',NULL,NULL),(109,'Extracción de minerales metalíferos no ferrosos n.c.p., excepto minerales de uranio y torio','72990',NULL,NULL),(110,'Extracción de rocas orcodigontales','81100',NULL,NULL),(111,'Extracción de piedra caliza y yeso','81200',NULL,NULL),(112,'Extracción de arenas, canto rodado y triturados pétreos','81300',NULL,NULL),(113,'Extracción de arcilla y caolín','81400',NULL,NULL),(114,'Extracción de minerales para la fabricación de abonos excepto turba','89110',NULL,NULL),(115,'Extracción de minerales para la fabricación de productos químicos','89120',NULL,NULL),(116,'Extracción y aglomeración de turba','89200',NULL,NULL),(117,'Extracción de sal','89300',NULL,NULL),(118,'Explotación de minas y canteras n.c.p.','89900',NULL,NULL),(119,'Servicios de apoyo para la extracción de petróleo y gas natural','91000',NULL,NULL),(120,'Servicios de apoyo para la minería, excepto para la extracción de petróleo y gas natual','99000',NULL,NULL),(121,'Matanza de ganado bovino','101011',NULL,NULL),(122,'Procesamiento de carne de ganado bovino','101012',NULL,NULL),(123,'Saladero y peladero de cueros de ganado bovino','101013',NULL,NULL),(124,'Producción y procesamiento de carne de aves','101020',NULL,NULL),(125,'Elaboración de fiambres y embutidos','101030',NULL,NULL),(126,'Matanza de ganado excepto el bovino y procesamiento de su carne','101040',NULL,NULL),(127,'Fabricación de aceites y grasas de origen animal','101091',NULL,NULL),(128,'Matanza de animales n.c.p. y procesamiento de su carne, elaboración de subproductos cárnicos n.c.p.','101099',NULL,NULL),(129,'Elaboración de pescados de mar, crustáceos y  productos marinos','102001',NULL,NULL),(130,'Elaboración de pescados de ríos y lagunas y otros productos fluviales y lacustres','102002',NULL,NULL),(131,'Fabricación de aceites, grasas, harinas y productos a base de pescados','102003',NULL,NULL),(132,'Preparación de conservas de frutas, hortalizas y legumbres','103011',NULL,NULL),(133,'Elaboración y envasado de dulces, mermeladas y jaleas','103012',NULL,NULL),(134,'Elaboración de jugos naturales y sus concentrados, de frutas, hortalizas y legumbres','103020',NULL,NULL),(135,'Elaboración de frutas, hortalizas y legumbres congeladas','103030',NULL,NULL),(136,'Elaboración de hortalizas y legumbres deshidratadas o desecadas, preparación n.c.p. de hortalizas y legumbres','103091',NULL,NULL),(137,'Elaboración de frutas deshidratadas o desecadas, preparación n.c.p. de frutas','103099',NULL,NULL),(138,'Elaboración de aceites y grasas vegetales  sin refinar','104011',NULL,NULL),(139,'Elaboración de aceite de oliva','104012',NULL,NULL),(140,'Elaboración de aceites y grasas vegetales refinados','104013',NULL,NULL),(141,'Elaboración de margarinas y grasas vegetales comestibles similares','104020',NULL,NULL),(142,'Elaboración de leches y productos lácteos deshidratados','105010',NULL,NULL),(143,'Elaboración de quesos','105020',NULL,NULL),(144,'Elaboración industrial de helados','105030',NULL,NULL),(145,'Elaboración de productos lácteos n.c.p.','105090',NULL,NULL),(146,'Molienda de trigo','106110',NULL,NULL),(147,'Preparación de arroz','106120',NULL,NULL),(148,'Elaboración de alimentos a base de cereales','106131',NULL,NULL),(149,'Preparación y molienda de legumbres y cereales n.c.p., excepto trigo y arroz y molienda húmeda de maíz','106139',NULL,NULL),(150,'Elaboración de almidones y productos derivados del almidón, molienda húmeda de maíz','106200',NULL,NULL),(151,'Elaboración de galletitas y bizcochos','107110',NULL,NULL),(152,'Elaboración industrial de productos de panadería, excepto galletitas y bizcochos','107121',NULL,NULL),(153,'Elaboración de productos de panadería n.c.p.','107129',NULL,NULL),(154,'Elaboración de azúcar','107200',NULL,NULL),(155,'Elaboración de cacao y chocolate','107301',NULL,NULL),(156,'Elaboración de productos de confitería n.c.p.','107309',NULL,NULL),(157,'Elaboración de pastas alimentarias frescas','107410',NULL,NULL),(158,'Elaboración de pastas alimentarias secas','107420',NULL,NULL),(159,'Elaboración de comidas preparadas para reventa','107500',NULL,NULL),(160,'Tostado, torrado y molienda de café','107911',NULL,NULL),(161,'Elaboración y molienda de hierbas aromáticas y  especias','107912',NULL,NULL),(162,'Preparación de hojas de té','107920',NULL,NULL),(163,'Elaboración de yerba mate','107930',NULL,NULL),(164,'Elaboración de extractos, jarabes y concentrados','107991',NULL,NULL),(165,'Elaboración de vinagres','107992',NULL,NULL),(166,'Elaboración de productos alimenticios n.c.p.','107999',NULL,NULL),(167,'Elaboración de alimentos preparados para animales','108000',NULL,NULL),(168,'Servicios industriales para la elaboración de alimentos y bebidas','109000',NULL,NULL),(169,'Destilación, rectificación y mezcla de bebidas espiritosas','110100',NULL,NULL),(170,'Elaboración de mosto','110211',NULL,NULL),(171,'Elaboración de vinos','110212',NULL,NULL),(172,'Elaboración de sidra y otras bebidas alcohólicas fermentadas','110290',NULL,NULL),(173,'Elaboración de cerveza, bebidas malteadas y malta','110300',NULL,NULL),(174,'Embotellado de aguas naturales y minerales','110411',NULL,NULL),(175,'Fabricación de sodas','110412',NULL,NULL),(176,'Elaboración de bebidas gaseosas, excepto soda','110420',NULL,NULL),(177,'Elaboración de hielo','110491',NULL,NULL),(178,'Elaboración de bebidas no alcohólicas n.c.p.','110492',NULL,NULL),(179,'Preparación de hojas de tabaco','120010',NULL,NULL),(180,'Elaboración de cigarrillos','120091',NULL,NULL),(181,'Elaboración de productos de tabaco n.c.p.','120099',NULL,NULL),(182,'Preparación de fibras textiles vegetales, desmotado de algodón','131110',NULL,NULL),(183,'Preparación de fibras animales de uso textil','131120',NULL,NULL),(184,'Fabricación de hilados textiles de lana, pelos y sus mezclas','131131',NULL,NULL),(185,'Fabricación de hilados textiles de algodón y sus mezclas','131132',NULL,NULL),(186,'Fabricación de hilados textiles n.c.p., excepto de lana  y de algodón','131139',NULL,NULL),(187,'Fabricación de tejidos (telas) planos de lana y sus mezclas, incluye hilanderías y tejedurías integradas','131201',NULL,NULL),(188,'Fabricación de tejidos (telas) planos de algodón y sus mezclas, incluye hilanderías y tejedurías integradas','131202',NULL,NULL),(189,'Fabricación de tejidos (telas) planos de fibras textiles n.c.p., incluye hilanderías y tejedurías integradas','131209',NULL,NULL),(190,'Acabado de productos textiles','131300',NULL,NULL),(191,'Fabricación de tejidos de punto','139100',NULL,NULL),(192,'Fabricación de frazadas, mantas, ponchos, colchas, cobertores, etc.','139201',NULL,NULL),(193,'Fabricación de ropa de cama y mantelería','139202',NULL,NULL),(194,'Fabricación de artículos de lona y sucedáneos de lona','139203',NULL,NULL),(195,'Fabricación de bolsas de materiales textiles para productos a granel','139204',NULL,NULL),(196,'Fabricación de artículos confeccionados de materiales textiles n.c.p., excepto prendas de vestir','139209',NULL,NULL),(197,'Fabricación de tapices y alfombras','139300',NULL,NULL),(198,'Fabricación de cuerdas, cordeles, bramantes y redes','139400',NULL,NULL),(199,'Fabricación de productos textiles n.c.p.','139900',NULL,NULL),(200,'Confección de ropa interior, prendas para dormir y para la playa','141110',NULL,NULL),(201,'Confección de ropa de trabajo, uniformes y guardapolvos','141120',NULL,NULL),(202,'Confección de prendas de vestir para bebés y niños','141130',NULL,NULL),(203,'Confección de prendas deportivas','141140',NULL,NULL),(204,'Fabricación de accesorios de vestir excepto de cuero','141191',NULL,NULL),(205,'Confección de prendas de vestir n.c.p., excepto prendas de piel, cuero y de punto','141199',NULL,NULL),(206,'Fabricación de accesorios de vestir de cuero','141201',NULL,NULL),(207,'Confección de prendas de vestir de cuero','141202',NULL,NULL),(208,'Terminación y teñido de pieles, fabricación de artículos de piel','142000',NULL,NULL),(209,'Fabricación de medias','143010',NULL,NULL),(210,'Fabricación de prendas de vestir y artículos similares de punto','143020',NULL,NULL),(211,'Servicios industriales para la industria confeccionista','149000',NULL,NULL),(212,'Curtido y terminación de cueros','151100',NULL,NULL),(213,'Fabricación de maletas, bolsos de mano y similares, artículos de talabartería y artículos de cuero n.c.p.','151200',NULL,NULL),(214,'Fabricación de calzado de cuero, excepto calzado deportivo y ortopédico','152011',NULL,NULL),(215,'Fabricación de calzado de materiales n.c.p., excepto calzado deportivo y ortopédico','152021',NULL,NULL),(216,'Fabricación de calzado deportivo','152031',NULL,NULL),(217,'Fabricación de partes de calzado','152040',NULL,NULL),(218,'Aserrado y cepillado de madera  nativa','161001',NULL,NULL),(219,'Aserrado y cepillado de madera implantada','161002',NULL,NULL),(220,'Fabricación de hojas de madera para enchapado, fabricación de tableros contrachapados, tableros laminados, tableros de partículas y tableros y paneles n.c.p.','162100',NULL,NULL),(221,'Fabricación de aberturas y estructuras de madera para la construcción','162201',NULL,NULL),(222,'Fabricación de viviendas prefabricadas de madera','162202',NULL,NULL),(223,'Fabricación de recipientes de madera','162300',NULL,NULL),(224,'Fabricación de ataúdes','162901',NULL,NULL),(225,'Fabricación de artículos de madera en tornerías','162902',NULL,NULL),(226,'Fabricación de productos de corcho','162903',NULL,NULL),(227,'Fabricación de productos de madera n.c.p, fabricación de artículos de paja y materiales trenzables','162909',NULL,NULL),(228,'Fabricación de pasta de madera','170101',NULL,NULL),(229,'Fabricación de papel y cartón excepto envases','170102',NULL,NULL),(230,'Fabricación de papel ondulado y envases de papel','170201',NULL,NULL),(231,'Fabricación de cartón ondulado y envases de cartón','170202',NULL,NULL),(232,'Fabricación de artículos de papel y cartón de uso doméstico e higiénico sanitario','170910',NULL,NULL),(233,'Fabricación de artículos de papel y cartón n.c.p.','170990',NULL,NULL),(234,'Impresión de diarios y revistas','181101',NULL,NULL),(235,'Impresión n.c.p., excepto de diarios y revistas','181109',NULL,NULL),(236,'Servicios relacionados con la impresión','181200',NULL,NULL),(237,'Reproducción de grabaciones','182000',NULL,NULL),(238,'Fabricación de productos de hornos de coque','191000',NULL,NULL),(239,'Fabricación de productos de la refinación del petróleo','192000',NULL,NULL),(240,'Fabricación de gases industriales y medicinales comprimidos o licuados','201110',NULL,NULL),(241,'Fabricación de curtientes naturales y sintéticos','201120',NULL,NULL),(242,'Fabricación de materias colorantes básicas, excepto pigmentos preparados','201130',NULL,NULL),(243,'Fabricación de combustible nuclear, sustancias y materiales radiactivos','201140',NULL,NULL),(244,'Fabricación de materias químicas inorgánicas básicas n.c.p.','201180',NULL,NULL),(245,'Fabricación de materias químicas orgánicas básicas n.c.p.','201190',NULL,NULL),(246,'Fabricación de alcohol','201210',NULL,NULL),(247,'Fabricación de biocombustibles excepto alcohol','201220',NULL,NULL),(248,'Fabricación de abonos y compuestos de nitrógeno','201300',NULL,NULL),(249,'Fabricación de resinas y cauchos sintéticos','201401',NULL,NULL),(250,'Fabricación de materias plásticas en formas primarias n.c.p.','201409',NULL,NULL),(251,'Fabricación de insecticidas, plaguicidas y  productos químicos de uso agropecuario','202101',NULL,NULL),(252,'Fabricación de pinturas, barnices y productos de revestimiento similares, tintas de imprenta y masillas','202200',NULL,NULL),(253,'Fabricación de preparados para limpieza, pulido y saneamiento','202311',NULL,NULL),(254,'Fabricación de jabones y detergentes','202312',NULL,NULL),(255,'Fabricación de cosméticos, perfumes y  productos de higiene y tocador','202320',NULL,NULL),(256,'Fabricación de explosivos y productos de pirotecnia','202906',NULL,NULL),(257,'Fabricación de colas, adhesivos, aprestos y cementos excepto los odontológicos obtenidos de sustancias minerales y vegetales','202907',NULL,NULL),(258,'Fabricación de productos químicos n.c.p.','202908',NULL,NULL),(259,'Fabricación de fibras manufacturadas','203000',NULL,NULL),(260,'Servicios industriales para la fabricación de sustancias y productos químicos','204000',NULL,NULL),(261,'Fabricación de medicamentos de uso humano y productos farmacéuticos','210010',NULL,NULL),(262,'Fabricación de medicamentos de uso veterinario','210020',NULL,NULL),(263,'Fabricación de sustancias químicas para la elaboración de medicamentos','210030',NULL,NULL),(264,'Fabricación de productos de laboratorio y productos botánicos de uso farmaceútico n.c.p.','210090',NULL,NULL),(265,'Fabricación de cubiertas y cámaras','221110',NULL,NULL),(266,'Recauchutado y renovación de cubiertas','221120',NULL,NULL),(267,'Fabricación de  autopartes de caucho excepto cámaras y cubiertas','221901',NULL,NULL),(268,'Fabricación  de productos de caucho n.c.p.','221909',NULL,NULL),(269,'Fabricación de envases plásticos','222010',NULL,NULL),(270,'Fabricación de productos plásticos en formas básicas y artículos de plástico n.c.p., excepto muebles','222090',NULL,NULL),(271,'Fabricación de envases de vidrio','231010',NULL,NULL),(272,'Fabricación y elaboración de vidrio plano','231020',NULL,NULL),(273,'Fabricación de productos de vidrio n.c.p.','231090',NULL,NULL),(274,'Fabricación de productos de cerámica refractaria','239100',NULL,NULL),(275,'Fabricación de ladrillos','239201',NULL,NULL),(276,'Fabricación de revestimientos cerámicos','239202',NULL,NULL),(277,'Fabricación de productos de arcilla y cerámica no refractaria para uso estructural n.c.p.','239209',NULL,NULL),(278,'Fabricación de artículos sanitarios de cerámica','239310',NULL,NULL),(279,'Fabricación de objetos cerámicos para uso doméstico excepto artefactos sanitarios','239391',NULL,NULL),(280,'Fabricación de artículos de cerámica no refractaria para uso no estructural n.c.p.','239399',NULL,NULL),(281,'Elaboración de cemento','239410',NULL,NULL),(282,'Elaboración de  yeso','239421',NULL,NULL),(283,'Elaboración de cal','239422',NULL,NULL),(284,'Fabricación de mosaicos','239510',NULL,NULL),(285,'Elaboración de hormigón','239591',NULL,NULL),(286,'Fabricación de premoldeadas para la construcción','239592',NULL,NULL),(287,'Fabricación de artículos de cemento, fibrocemento y yeso excepto hormigón y mosaicos','239593',NULL,NULL),(288,'Corte, tallado y acabado de la piedra','239600',NULL,NULL),(289,'Fabricación de productos minerales no metálicos n.c.p.','239900',NULL,NULL),(290,'Laminación y estirado. Producción de lingotes, planchas o barras fabricadas por operadores independientes','241001',NULL,NULL),(291,'Fabricación en industrias básicas de productos de hierro y acero n.c.p.','241009',NULL,NULL),(292,'Elaboración de aluminio primario y semielaborados de aluminio','242010',NULL,NULL),(293,'Fabricación de productos primarios de metales preciosos y metales no ferrosos n.c.p. y sus semielaborados','242090',NULL,NULL),(294,'Fundición de hierro y acero','243100',NULL,NULL),(295,'Fundición de metales no ferrosos','243200',NULL,NULL),(296,'Fabricación de carpintería metálica','251101',NULL,NULL),(297,'Fabricación de productos metálicos para uso estructural','251102',NULL,NULL),(298,'Fabricación de tanques, depósitos y recipientes de metal','251200',NULL,NULL),(299,'Fabricación de generadores de vapor','251300',NULL,NULL),(300,'Fabricación de armas y municiones','252000',NULL,NULL),(301,'Forjado, prensado, estampado y laminado de metales, pulvimetalurgia','259100',NULL,NULL),(302,'Tratamiento y revestimiento de metales y trabajos de metales en general','259200',NULL,NULL),(303,'Fabricación de herramientas manuales y sus accesorios','259301',NULL,NULL),(304,'Fabricación de artículos de cuchillería y utensillos de mesa y de cocina','259302',NULL,NULL),(305,'Fabricación de cerraduras, herrajes y artículos de ferretería n.c.p.','259309',NULL,NULL),(306,'Fabricación de envases metálicos','259910',NULL,NULL),(307,'Fabricación de tejidos de alambre','259991',NULL,NULL),(308,'Fabricación de cajas de seguridad','259992',NULL,NULL),(309,'Fabricación de productos metálicos de tornería y/o matricería','259993',NULL,NULL),(310,'Fabricación de productos elaborados de metal n.c.p.','259999',NULL,NULL),(311,'Fabricación de componentes electrónicos','261000',NULL,NULL),(312,'Fabricación de equipos y productos informáticos','262000',NULL,NULL),(313,'Fabricación  de equipos de comunicaciones y transmisores de radio y televisión','263000',NULL,NULL),(314,'Fabricación de receptores de radio y televisión, aparatos de grabación y reproducción de sonido y video, y productos conexos','264000',NULL,NULL),(315,'Fabricación de instrumentos y aparatos para medir, verificar, ensayar, navegar y otros fines, excepto el equipo de control de procesos industriales','265101',NULL,NULL),(316,'Fabricación de equipo de control de procesos industriales','265102',NULL,NULL),(317,'Fabricación de relojes','265200',NULL,NULL),(318,'Fabricación de equipo médico y quirúrgico y de aparatos ortopédicos principalmente electrónicos y/o eléctricos','266010',NULL,NULL),(319,'Fabricación de equipo médico y quirúrgico y de aparatos ortopédicos n.c.p.','266090',NULL,NULL),(320,'Fabricación de equipamiento e instrumentos ópticos y sus accesorios','267001',NULL,NULL),(321,'Fabricación de aparatos y accesorios para fotografía excepto películas, placas y papeles sensibles','267002',NULL,NULL),(322,'Fabricación de soportes ópticos y magnéticos','268000',NULL,NULL),(323,'Fabricación de motores, generadores y transformadores eléctricos','271010',NULL,NULL),(324,'Fabricación de aparatos de distribución y control de la energía eléctrica','271020',NULL,NULL),(325,'Fabricación de acumuladores, pilas y baterías primarias','272000',NULL,NULL),(326,'Fabricación de cables de fibra óptica','273110',NULL,NULL),(327,'Fabricación de hilos y cables aislados n.c.p.','273190',NULL,NULL),(328,'Fabricación de lámparas eléctricas y equipo de iluminación','274000',NULL,NULL),(329,'Fabricación de cocinas, calefones, estufas y calefactores no eléctricos','275010',NULL,NULL),(330,'Fabricación de heladeras, \"freezers\", lavarropas y secarropas','275020',NULL,NULL),(331,'Fabricación de ventiladores, extractores de aire, aspiradoras y similares','275091',NULL,NULL),(332,'Fabricación de planchas, calefactores, hornos eléctricos, tostadoras y otros aparatos generadores de calor','275092',NULL,NULL),(333,'Fabricación de aparatos de uso doméstico n.c.p.','275099',NULL,NULL),(334,'Fabricación  de equipo eléctrico n.c.p.','279000',NULL,NULL),(335,'Fabricación  de  motores  y  turbinas,  excepto  motores  para aeronaves, vehículos automotores   y motocicletas','281100',NULL,NULL),(336,'Fabricación de bombas','281201',NULL,NULL),(337,'Fabricación de compresores, grifos y válvulas','281301',NULL,NULL),(338,'Fabricación de cojinetes, engranajes, trenes de engranaje y piezas de transmisión','281400',NULL,NULL),(339,'Fabricación de hornos, hogares y quemadores','281500',NULL,NULL),(340,'Fabricación de maquinaria y equipo de elevación y manipulación','281600',NULL,NULL),(341,'Fabricación de maquinaria y equipo de oficina, excepto equipo informático','281700',NULL,NULL),(342,'Fabricación de  maquinaria y equipo de uso general n.c.p.','281900',NULL,NULL),(343,'Fabricación de tractores','282110',NULL,NULL),(344,'Fabricación de maquinaria y equipo de uso agropecuario y forestal','282120',NULL,NULL),(345,'Fabricación de implementos de uso agropecuario','282130',NULL,NULL),(346,'Fabricación de máquinas herramienta','282200',NULL,NULL),(347,'Fabricación de maquinaria metalúrgica','282300',NULL,NULL),(348,'Fabricación de maq para la explotación de minas y canteras y para obras de construcción','282400',NULL,NULL),(349,'Fabricación de maquinaria para la elaboración de alimentos, bebidas y tabaco','282500',NULL,NULL),(350,'Fabricación de maquinaria para la elaboración de productos textiles, prendas de vestir y cueros','282600',NULL,NULL),(351,'Fabricación de maquinaria para la industria del papel y las artes gráficas','282901',NULL,NULL),(352,'Fabricación de maquinaria y equipo de uso especial n.c.p.','282909',NULL,NULL),(353,'Fabricación de vehículos automotores','291000',NULL,NULL),(354,'Fabricación de carrocerías para vehículos automotores, fabricación de remolques y semirremolques','292000',NULL,NULL),(355,'Rectificación de motores','293011',NULL,NULL),(356,'Fabricación de partes, piezas y accesorios para vehículos automotores y sus motores n.c.p.','293090',NULL,NULL),(357,'Construcción y reparación de buques','301100',NULL,NULL),(358,'Construcción y reparación de embarcaciones de recreo y deporte','301200',NULL,NULL),(359,'Fabricación y reparación de locomotoras y material rodante p transporte ferroviario','302000',NULL,NULL),(360,'Fabricación y reparación de aeronaves','303000',NULL,NULL),(361,'Fabricación de motocicletas','309100',NULL,NULL),(362,'Fabricación de bicicletas y de sillones de ruedas ortopédicos','309200',NULL,NULL),(363,'Fabricación de equipo de transporte n.c.p.','309900',NULL,NULL),(364,'Fabricación de muebles y partes de muebles, principalmente de madera','310010',NULL,NULL),(365,'Fabricación de muebles y partes de muebles, excepto los que son principalmente de madera (metal, plástico, etc.)','310020',NULL,NULL),(366,'Fabricación de somieres y colchones','310030',NULL,NULL),(367,'Fabricación de joyas finas y artículos conexos','321011',NULL,NULL),(368,'Fabricación de objetos de platería','321012',NULL,NULL),(369,'Fabricación de bijouterie','321020',NULL,NULL),(370,'Fabricación de instrumentos de música','322001',NULL,NULL),(371,'Fabricación de artículos de deporte','323001',NULL,NULL),(372,'Fabricación de juegos y juguetes','324000',NULL,NULL),(373,'Fabricación de lápices, lapiceras,  bolígrafos, sellos y artículos similares para oficinas y artistas','329010',NULL,NULL),(374,'Fabricación de escobas, cepillos y pinceles','329020',NULL,NULL),(375,'Fabricación de carteles, señales e indicadores  -eléctricos o no-','329030',NULL,NULL),(376,'Fabricación de equipo de protección y seguridad, excepto calzado','329040',NULL,NULL),(377,'Industrias manufactureras n.c.p.','329090',NULL,NULL),(378,'Reparación y mantenimiento de productos de metal, excepto maquinaria y equipo','331101',NULL,NULL),(379,'Reparación y mantenimiento de maquinaria de uso general','331210',NULL,NULL),(380,'Reparación y mantenimiento de maquinaria y equipo de uso agropecuario y forestal','331220',NULL,NULL),(381,'Reparación y mantenimiento de maquinaria de uso especial n.c.p.','331290',NULL,NULL),(382,'Reparación y mantenimiento de maquinaria y aparatos eléctricos','331400',NULL,NULL),(383,'Reparación y mantenimiento de máquinas y equipo n.c.p.','331900',NULL,NULL),(384,'Instalación de maquinaria y equipos industriales','332000',NULL,NULL),(385,'Generación de energía térmica convencional','351110',NULL,NULL),(386,'Generación de energía térmica nuclear','351120',NULL,NULL),(387,'Generación de energía hidráulica','351130',NULL,NULL),(388,'Generación de energía n.c.p.','351190',NULL,NULL),(389,'Transporte de energía eléctrica','351201',NULL,NULL),(390,'Comercio mayorista de energía eléctrica','351310',NULL,NULL),(391,'Distribución de energía eléctrica','351320',NULL,NULL),(392,'Fabricación de gas y procesamiento de gas natural','352010',NULL,NULL),(393,'Distribución de combustibles gaseosos por tuberías','352020',NULL,NULL),(394,'Suministro de vapor y aire acondicionado','353001',NULL,NULL),(395,'Captación, depuración y distribución de agua de fuentes subterráneas','360010',NULL,NULL),(396,'Captación, depuración y distribución de agua de fuentes superficiales','360020',NULL,NULL),(397,'Servicios de depuración de aguas residuales, alcantarillado y cloacas','370000',NULL,NULL),(398,'Recolección, transporte, tratamiento y disposición final de residuos no peligrosos','381100',NULL,NULL),(399,'Recolección, transporte, tratamiento y disposición final de residuos peligrosos','381200',NULL,NULL),(400,'Recuperación de materiales y desechos metálicos','382010',NULL,NULL),(401,'Recuperación de materiales y desechos no metálicos','382020',NULL,NULL),(402,'Descontaminación y otros servicios de gestión de residuos','390000',NULL,NULL),(403,'Construcción, reforma y reparación de edificios residenciales','410011',NULL,NULL),(404,'Construcción, reforma y reparación de edificios no residenciales','410021',NULL,NULL),(405,'Construcción, reforma y reparación de obras de infraestructura para el transporte','421000',NULL,NULL),(406,'Perforación de pozos de agua','422100',NULL,NULL),(407,'Construcción, reforma y reparación de redes distribución de electricidad, gas, agua, telecomunicaciones y de otros servicios públicos','422200',NULL,NULL),(408,'Construcción, reforma y reparación de obras hidráulicas','429010',NULL,NULL),(409,'Construcción de obras de ingeniería civil n.c.p.','429090',NULL,NULL),(410,'Demolición y voladura de edificios y de sus partes','431100',NULL,NULL),(411,'Movimiento de suelos y preparación de terrenos para obras','431210',NULL,NULL),(412,'Instalación de sistemas de iluminación, control y señalización eléctrica para el transporte','432110',NULL,NULL),(413,'Instalación, ejecución y mantenimiento de instalaciones eléctricas, electromecánicas y electrónicas n.c.p.','432190',NULL,NULL),(414,'Instalaciones de gas, agua, sanitarios y de climatización, con sus artefactos conexos','432200',NULL,NULL),(415,'Instalaciones de ascensores, montacargas y  escaleras mecánicas','432910',NULL,NULL),(416,'Aislamiento térmico, acústico, hídrico y antivibratorio','432920',NULL,NULL),(417,'Instalaciones para edificios y obras de ingeniería civil n.c.p.','432990',NULL,NULL),(418,'Instalaciones de carpintería, herrería de obra y artística','433010',NULL,NULL),(419,'Terminación y revestimiento de paredes y pisos','433020',NULL,NULL),(420,'Colocación de cristales en obra','433030',NULL,NULL),(421,'Pintura y trabajos de decoración','433040',NULL,NULL),(422,'Terminación de edificios n.c.p.','433090',NULL,NULL),(423,'Alquiler de equipo de construcción o demolición dotado de operarios','439100',NULL,NULL),(424,'Hincado de pilotes, cimentación y otros trabajos de hormigón armado','439910',NULL,NULL),(425,'Actividades especializadas de construcción n.c.p.','439990',NULL,NULL),(426,'Venta de autos, camionetas y utilitarios nuevos','451110',NULL,NULL),(427,'Venta de vehículos automotores nuevos n.c.p.','451190',NULL,NULL),(428,'Venta de autos, camionetas y utilitarios, usados','451210',NULL,NULL),(429,'Venta de vehículos automotores usados n.c.p.','451290',NULL,NULL),(430,'Lavado automático y manual de vehículos automotores','452101',NULL,NULL),(431,'Reparación de cámaras y cubiertas','452210',NULL,NULL),(432,'Reparación de amortiguadores,  alineación de dirección y balanceo de ruedas','452220',NULL,NULL),(433,'Instalación y reparación de parabrisas, lunetas y ventanillas, cerraduras no eléctricas y grabado de cristales','452300',NULL,NULL),(434,'Reparaciones eléctricas del tablero e instrumental, reparación y recarga de baterías, instalación de alarmas, radios, sistemas de climatización','452401',NULL,NULL),(435,'Tapizado y retapizado de automotores','452500',NULL,NULL),(436,'Reparación y pintura de carrocerías, colocación y reparación de guardabarros y protecciones exteriores','452600',NULL,NULL),(437,'Instalación y reparación de caños de escape y radiadores','452700',NULL,NULL),(438,'Mantenimiento y reparación de frenos y embragues','452800',NULL,NULL),(439,'Instalación y reparación de equipos de GNC','452910',NULL,NULL),(440,'Mantenimiento y reparación del motor n.c.p., mecánica integral','452990',NULL,NULL),(441,'Venta al por mayor de partes, piezas y accesorios de vehículos automotores','453100',NULL,NULL),(442,'Venta al por menor de cámaras y cubiertas','453210',NULL,NULL),(443,'Venta al por menor de baterías','453220',NULL,NULL),(444,'Venta al por menor de partes, piezas y accesorios nuevos n.c.p.','453291',NULL,NULL),(445,'Venta al por menor de partes, piezas y accesorios usados n.c.p.','453292',NULL,NULL),(446,'Venta de motocicletas y de sus partes, piezas y accesorios','454010',NULL,NULL),(447,'Mantenimiento y reparación de motocicletas','454020',NULL,NULL),(448,'Venta al por mayor en comisión o consignación de cereales (incluye arroz), oleaginosas y forrajeras excepto semillas','461011',NULL,NULL),(449,'Venta al por mayor en comisión o consignación de semillas','461012',NULL,NULL),(450,'Venta al por mayor en comisión o consignación de frutas','461013',NULL,NULL),(451,'Acopio y acondicionamiento en comisión o consignación de cereales (incluye arroz), oleaginosas y forrajeras excepto semillas','461014',NULL,NULL),(452,'Venta al por mayor en comisión o consignación de productos agrícolas n.c.p.','461019',NULL,NULL),(453,'Venta al por mayor en comisión o consignación de ganado bovino en pie','461021',NULL,NULL),(454,'Venta al por mayor en comisión o consignación de ganado en pie excepto bovino','461022',NULL,NULL),(455,'Venta al por mayor en comisión o consignación de productos pecuarios n.c.p.','461029',NULL,NULL),(456,'Operaciones de intermediación de carne - consignatario directo -','461031',NULL,NULL),(457,'Operaciones de intermediación de carne excepto consignatario directo','461032',NULL,NULL),(458,'Venta al por mayor en comisión o consignación de alimentos, bebidas y tabaco n.c.p.','461039',NULL,NULL),(459,'Venta al por mayor en comisión o consignación de combustibles','461040',NULL,NULL),(460,'Vta al por mayor en comisión o consignación de  madera y materiales para la construcción','461092',NULL,NULL),(461,'Venta al por mayor en comisión o consignación de minerales, metales y productos químicos industriales','461093',NULL,NULL),(462,'Venta al por mayor en comisión o consignación de  maquinaria, equipo profesional industrial y comercial, embarcaciones y aeronaves','461094',NULL,NULL),(463,'Venta al por mayor en comisión o consignación de papel, cartón, libros, revistas, diarios, materiales de embalaje y artículos de librería','461095',NULL,NULL),(464,'Venta al por mayor en comisión o consignación de  mercaderías n.c.p.','461099',NULL,NULL),(465,'Acopio de algodón','462110',NULL,NULL),(466,'Venta al por mayor de semillas y granos para forrajes','462120',NULL,NULL),(467,'Venta al por mayor de cereales (incluye arroz), oleaginosas y forrajeras excepto semillas','462131',NULL,NULL),(468,'Acopio y acondicionamiento de cereales y semillas, excepto de algodón y semillas y granos para forrajes','462132',NULL,NULL),(469,'Venta al por mayor de materias primas agrícolas y de la silvicultura n.c.p.','462190',NULL,NULL),(470,'Venta al por mayor de lanas, cueros en bruto y productos afines','462201',NULL,NULL),(471,'Venta al por mayor de materias primas pecuarias n.c.p. incluso animales vivos','462209',NULL,NULL),(472,'Venta al por mayor de productos lácteos','463111',NULL,NULL),(473,'Venta al por mayor de fiambres y quesos','463112',NULL,NULL),(474,'Venta al por mayor de carnes rojas y derivados','463121',NULL,NULL),(475,'Venta al por mayor de aves, huevos y productos de granja y de la caza n.c.p.','463129',NULL,NULL),(476,'Venta al por mayor de pescado','463130',NULL,NULL),(477,'Venta al por mayor y empaque de frutas, de legumbres y hortalizas frescas','463140',NULL,NULL),(478,'Venta al por mayor de pan, productos de confitería y pastas frescas','463151',NULL,NULL),(479,'Venta al por mayor de azúcar','463152',NULL,NULL),(480,'Venta al por mayor de aceites y grasas','463153',NULL,NULL),(481,'Venta al por mayor de café, té, yerba mate y otras infusiones y especias y condimentos','463154',NULL,NULL),(482,'Venta al por mayor de productos y subproductos de molinería n.c.p.','463159',NULL,NULL),(483,'Venta al por mayor de chocolates, golosinas y productos para kioscos y polirrubros n.c.p., excepto cigarrillos','463160',NULL,NULL),(484,'Venta al por mayor de alimentos balanceados para animales','463170',NULL,NULL),(485,'Venta al por mayor en supermercados mayoristas de alimentos','463180',NULL,NULL),(486,'Venta al por mayor de frutas, legumbres y cereales secos y en conserva','463191',NULL,NULL),(487,'Venta al por mayor de productos alimenticios n.c.p.','463199',NULL,NULL),(488,'Venta al por mayor de vino','463211',NULL,NULL),(489,'Venta al por mayor de bebidas espiritosas','463212',NULL,NULL),(490,'Venta al por mayor de bebidas alcohólicas n.c.p.','463219',NULL,NULL),(491,'Venta al por mayor de bebidas no alcohólicas','463220',NULL,NULL),(492,'Venta al por mayor de cigarrillos y productos de tabaco','463300',NULL,NULL),(493,'Venta al por mayor de tejidos (telas)','464111',NULL,NULL),(494,'Venta al por mayor de artículos de mercería','464112',NULL,NULL),(495,'Venta al por mayor de mantelería, ropa de cama y artículos textiles para el hogar','464113',NULL,NULL),(496,'Venta al por mayor de tapices y alfombras de materiales textiles','464114',NULL,NULL),(497,'Venta al por mayor de productos textiles n.c.p.','464119',NULL,NULL),(498,'Venta al por mayor de prendas de vestir de cuero','464121',NULL,NULL),(499,'Venta al por mayor de medias y prendas de punto','464122',NULL,NULL),(500,'Venta al por mayor de prendas y accesorios de vestir n.c.p., excepto uniformes y ropa de trabajo','464129',NULL,NULL),(501,'Venta al por mayor de calzado excepto el ortopédico','464130',NULL,NULL),(502,'Venta al por mayor de pieles y cueros curtidos y salados','464141',NULL,NULL),(503,'Venta al por mayor de suelas y afines','464142',NULL,NULL),(504,'Venta al por mayor de artículos de marroquinería,  paraguas y productos similares n.c.p.','464149',NULL,NULL),(505,'Venta al por mayor de uniformes y ropa de trabajo','464150',NULL,NULL),(506,'Venta al por mayor de libros y publicaciones','464211',NULL,NULL),(507,'Venta al por mayor de diarios y revistas','464212',NULL,NULL),(508,'Venta al por mayor de papel y productos de papel y cartón excepto envases','464221',NULL,NULL),(509,'Venta al por mayor de envases de papel y cartón','464222',NULL,NULL),(510,'Venta al por mayor de artículos de librería y papelería','464223',NULL,NULL),(511,'Venta al por mayor de productos farmacéuticos','464310',NULL,NULL),(512,'Venta al por mayor de productos cosméticos, de tocador y de perfumería','464320',NULL,NULL),(513,'Venta al por mayor de instrumental médico y odontológico y artículos ortopédicos','464330',NULL,NULL),(514,'Venta al por mayor de productos veterinarios','464340',NULL,NULL),(515,'Venta al por mayor de artículos de óptica y de fotografía','464410',NULL,NULL),(516,'Venta al por mayor de artículos de relojería, joyería y fantasías','464420',NULL,NULL),(517,'Venta al por mayor de electrodomésticos y artefactos para el hogar excepto equipos de audio y video','464501',NULL,NULL),(518,'Venta al por mayor de equipos de audio, video y televisión','464502',NULL,NULL),(519,'Venta al por mayor de muebles excepto de oficina, artículos de mimbre y corcho, colchones y somieres','464610',NULL,NULL),(520,'Venta al por mayor de artículos de iluminación','464620',NULL,NULL),(521,'Venta al por mayor de artículos de vidrio','464631',NULL,NULL),(522,'Venta al por mayor de artículos de bazar y menaje excepto de vidrio','464632',NULL,NULL),(523,'Venta al por mayor de materiales y productos de limpieza','464920',NULL,NULL),(524,'Venta al por mayor de juguetes','464930',NULL,NULL),(525,'Venta al por mayor de bicicletas y rodados similares','464940',NULL,NULL),(526,'Venta al por mayor de artículos de esparcimiento y deportes','464950',NULL,NULL),(527,'Venta al por mayor de flores y plantas naturales y artificiales','464991',NULL,NULL),(528,'Venta al por mayor de artículos de uso doméstico o personal n.c.p','464999',NULL,NULL),(529,'Venta al por mayor de equipos, periféricos, accesorios y programas informáticos','465100',NULL,NULL),(530,'Venta al por mayor de equipos de telefonía y comunicaciones','465210',NULL,NULL),(531,'Venta al por mayor de componentes electrónicos','465220',NULL,NULL),(532,'Venta al por mayor de máquinas, equipos e implementos de uso en los sectores agropecuario, jardinería, silvicultura, pesca y caza','465310',NULL,NULL),(533,'Venta al por mayor de máquinas, equipos e implementos de uso en la elaboración de alimentos, bebidas y tabaco','465320',NULL,NULL),(534,'Venta al por mayor de máquinas, equipos e implementos de uso en la fabricación de textiles, prendas y accesorios de vestir, calzado, artículos de cuero y marroquinería','465330',NULL,NULL),(535,'Venta al por mayor de máquinas, equipos e implementos de uso en imprentas, artes gráficas y actividades conexas','465340',NULL,NULL),(536,'Venta al por mayor de máquinas, equipos e implementos de uso médico y paramédico','465350',NULL,NULL),(537,'Venta al por mayor de máquinas, equipos e implementos de uso en la industria del plástico y del caucho','465360',NULL,NULL),(538,'Venta al por mayor de máquinas, equipos e implementos de uso especial n.c.p.','465390',NULL,NULL),(539,'Venta al por mayor de máquinas - herramienta de uso general','465400',NULL,NULL),(540,'Vta x mayor de vehículos, eq y máquinas p transporte ferroviario, aéreo y de navegación','465500',NULL,NULL),(541,'Venta al por mayor de muebles e instalaciones para oficinas','465610',NULL,NULL),(542,'Venta al por mayor de muebles e instalaciones para la industria, el comercio y los servicios n.c.p.','465690',NULL,NULL),(543,'Venta al por mayor de máquinas y equipo de control y seguridad','465910',NULL,NULL),(544,'Venta al por mayor de maquinaria y equipo de oficina, excepto equipo informático','465920',NULL,NULL),(545,'Venta al por mayor de equipo profesional y científico e instrumentos de medida y de control n.c.p.','465930',NULL,NULL),(546,'Venta al por mayor de máquinas, equipo y materiales conexos n.c.p.','465990',NULL,NULL),(547,'Venta al por mayor de combustibles y lubricantes para automotores','466110',NULL,NULL),(548,'Fraccionamiento y distribución de gas licuado','466121',NULL,NULL),(549,'Venta al por mayor de combustibles, lubricantes, leña y carbón, excepto gas licuado y combustibles y lubricantes para automotores','466129',NULL,NULL),(550,'Venta al por mayor de metales y minerales metalíferos','466200',NULL,NULL),(551,'Venta al por mayor de aberturas','466310',NULL,NULL),(552,'Venta al por mayor de productos de madera excepto muebles','466320',NULL,NULL),(553,'Venta al por mayor de artículos de ferretería y materiales eléctricos','466330',NULL,NULL),(554,'Venta al por mayor de pinturas y productos conexos','466340',NULL,NULL),(555,'Venta al por mayor de cristales y espejos','466350',NULL,NULL),(556,'Venta al por mayor de artículos para plomería, instalación de gas y calefacción','466360',NULL,NULL),(557,'Venta al por mayor de papeles para pared, revestimiento para pisos de goma, plástico y textiles,  y artículos similares para la decoración','466370',NULL,NULL),(558,'Venta al por mayor de artículos de loza, cerámica y porcelana de uso en construcción','466391',NULL,NULL),(559,'Venta al por mayor de artículos para la construcción n.c.p.','466399',NULL,NULL),(560,'Venta al por mayor de productos intermedios n.c.p., desperdicios y desechos textiles','466910',NULL,NULL),(561,'Venta al por mayor de productos intermedios n.c.p., desperdicios y desechos de papel y cartón','466920',NULL,NULL),(562,'Venta al por mayor de artículos de plástico','466931',NULL,NULL),(563,'Venta al por mayor de abonos, fertilizantes y plaguicidas','466932',NULL,NULL),(564,'Venta al por mayor de productos intermedios, desperdicios y desechos de vidrio, caucho, goma y químicos n.c.p.','466939',NULL,NULL),(565,'Venta al por mayor de productos intermedios n.c.p., desperdicios y desechos metálicos','466940',NULL,NULL),(566,'Venta al por mayor de productos intermedios, desperdicios y desechos n.c.p.','466990',NULL,NULL),(567,'Venta al por mayor de insumos agropecuarios diversos','469010',NULL,NULL),(568,'Venta al por mayor de mercancías n.c.p.','469090',NULL,NULL),(569,'Venta al por menor en hipermercados','471110',NULL,NULL),(570,'Venta al por menor en supermercados','471120',NULL,NULL),(571,'Venta al por menor en minimercados','471130',NULL,NULL),(572,'Venta al por menor en kioscos, polirrubros y comercios no especializados n.c.p.','471190',NULL,NULL),(573,'Venta al por menor en comercios no especializados, sin predominio de productos alimenticios y bebidas','471900',NULL,NULL),(574,'Venta al por menor de productos lácteos','472111',NULL,NULL),(575,'Venta al por menor de fiambres y embutidos','472112',NULL,NULL),(576,'Venta al por menor de productos de almacén y dietética','472120',NULL,NULL),(577,'Venta al por menor de carnes rojas, menudencias y chacinados frescos','472130',NULL,NULL),(578,'Venta al por menor de huevos, carne de aves y  productos de granja y de la caza','472140',NULL,NULL),(579,'Venta al por menor de pescados y  productos de la pesca','472150',NULL,NULL),(580,'Venta al por menor de frutas, legumbres y hortalizas frescas','472160',NULL,NULL),(581,'Venta al por menor de pan y productos de panadería','472171',NULL,NULL),(582,'Venta al por menor de bombones, golosinas y demás productos de confitería','472172',NULL,NULL),(583,'Venta al por menor de productos alimenticios n.c.p., en comercios especializados','472190',NULL,NULL),(584,'Venta al por menor de bebidas en comercios especializados','472200',NULL,NULL),(585,'Venta al por menor de tabaco en comercios especializados','472300',NULL,NULL),(586,'Venta al por menor de combustible para vehículos automotores y motocicletas','473000',NULL,NULL),(587,'Venta al por menor de equipos, periféricos,  accesorios y programas informáticos','474010',NULL,NULL),(588,'Venta al por menor de aparatos de telefonía y comunicación','474020',NULL,NULL),(589,'Venta al por menor de hilados, tejidos y artículos de mercería','475110',NULL,NULL),(590,'Venta al por menor de confecciones para el hogar','475120',NULL,NULL),(591,'Venta al por menor de artículos textiles n.c.p. excepto prendas de vestir','475190',NULL,NULL),(592,'Venta al por menor de aberturas','475210',NULL,NULL),(593,'Venta al por menor de maderas y artículos de madera  y corcho, excepto muebles','475220',NULL,NULL),(594,'Venta al por menor de artículos de ferretería y materiales eléctricos','475230',NULL,NULL),(595,'Venta al por menor de pinturas y productos conexos','475240',NULL,NULL),(596,'Venta al por menor de artículos para plomería e instalación de gas','475250',NULL,NULL),(597,'Venta al por menor de cristales, espejos, mamparas y cerramientos','475260',NULL,NULL),(598,'Venta al por menor de papeles para pared, revestimientos para pisos y artículos similares para la decoración','475270',NULL,NULL),(599,'Venta al por menor de materiales de construcción n.c.p.','475290',NULL,NULL),(600,'Venta al por menor  de electrodomésticos, artefactos para el hogar y equipos de audio y video','475300',NULL,NULL),(601,'Venta al por menor de muebles para el hogar, artículos de mimbre y corcho','475410',NULL,NULL),(602,'Venta al por menor de colchones y somieres','475420',NULL,NULL),(603,'Venta al por menor de artículos de iluminación','475430',NULL,NULL),(604,'Venta al por menor de artículos de bazar y menaje','475440',NULL,NULL),(605,'Venta al por menor de artículos para el hogar n.c.p.','475490',NULL,NULL),(606,'Venta al por menor de libros','476110',NULL,NULL),(607,'Venta al por menor de diarios y revistas','476120',NULL,NULL),(608,'Venta al por menor de papel, cartón, materiales de embalaje y artículos de librería','476130',NULL,NULL),(609,'Venta al por menor de equipos  y artículos deportivos','476310',NULL,NULL),(610,'Venta al por menor de armas, artículos para la caza y pesca','476320',NULL,NULL),(611,'Venta al por menor de juguetes, artículos de cotillón y juegos de mesa','476400',NULL,NULL),(612,'Venta al por menor de ropa interior, medias, prendas para dormir y para la playa','477110',NULL,NULL),(613,'Venta al por menor de uniformes escolares y guardapolvos','477120',NULL,NULL),(614,'Venta al por menor de indumentaria para bebés y niños','477130',NULL,NULL),(615,'Venta al por menor de indumentaria deportiva','477140',NULL,NULL),(616,'Venta al por menor de prendas de cuero','477150',NULL,NULL),(617,'Venta al por menor de prendas y accesorios de vestir n.c.p.','477190',NULL,NULL),(618,'Venta al por menor de artículos de talabartería y artículos regionales','477210',NULL,NULL),(619,'Venta al por menor de calzado, excepto el ortopédico y el deportivo','477220',NULL,NULL),(620,'Venta al por menor de calzado deportivo','477230',NULL,NULL),(621,'Venta al por menor de artículos de marroquinería, paraguas y similares n.c.p.','477290',NULL,NULL),(622,'Venta al por menor de productos farmacéuticos y de herboristería','477310',NULL,NULL),(623,'Venta al por menor de productos cosméticos, de tocador y de perfumería','477320',NULL,NULL),(624,'Venta al por menor de instrumental médico y odontológico y artículos ortopédicos','477330',NULL,NULL),(625,'Venta al por menor de artículos de óptica y fotografía','477410',NULL,NULL),(626,'Venta al por menor de artículos de relojería y joyería','477420',NULL,NULL),(627,'Venta al por menor de bijouterie y fantasía','477430',NULL,NULL),(628,'Venta al por menor de flores, plantas, semillas, abonos, fertilizantes y otros productos de vivero  ','477440',NULL,NULL),(629,'Venta al por menor de materiales y productos de limpieza','477450',NULL,NULL),(630,'Venta al por menor de fuel oil, gas en garrafas, carbón y leña','477460',NULL,NULL),(631,'Venta al por menor de productos veterinarios, animales domésticos y alimento balanceado para mascotas','477470',NULL,NULL),(632,'Venta al por menor de obras de arte','477480',NULL,NULL),(633,'Venta al por menor de artículos nuevos n.c.p.','477490',NULL,NULL),(634,'Venta al por menor de muebles usados','477810',NULL,NULL),(635,'Venta al por menor de libros, revistas y similares usados','477820',NULL,NULL),(636,'Venta al por menor de antigüedades','477830',NULL,NULL),(637,'Venta al por menor de oro, monedas, sellos y similares','477840',NULL,NULL),(638,'Venta al por menor de artículos usados n.c.p. excepto+E1155 automotores y motocicletas','477890',NULL,NULL),(639,'Venta al por menor de alimentos, bebidas y tabaco en puestos móviles y mercados','478010',NULL,NULL),(640,'Venta al por menor de productos n.c.p. en puestos móviles y mercados','478090',NULL,NULL),(641,'Venta al por menor por internet','479101',NULL,NULL),(642,'Venta al por menor por correo, televisión y otros medios de comunicación n.c.p.','479109',NULL,NULL),(643,'Venta al por menor no realizada en establecimientos  n.c.p.','479900',NULL,NULL),(644,'Servicio de transporte ferroviario urbano y suburbano de pasajeros','491110',NULL,NULL),(645,'Servicio de transporte ferroviario interurbano de pasajeros','491120',NULL,NULL),(646,'Servicio de transporte ferroviario de cargas','491200',NULL,NULL),(647,'Servicio de transporte automotor urbano y suburbano regular de pasajeros','492110',NULL,NULL),(648,'Servicios de transporte automotor de pasajeros mediante taxis y remises, alquiler de autos con chofer','492120',NULL,NULL),(649,'Servicio de transporte escolar','492130',NULL,NULL),(650,'Serv de transporte automotor urbano y suburbano no regular de pasajeros de oferta libre,  excepto mediante taxis y remises, alq de autos con chofer y transporte escolar','492140',NULL,NULL),(651,'Servicio de transporte automotor interurbano regular de pasajeros, Eexcepto transporte internacional','492150',NULL,NULL),(652,'Servicio de transporte automotor interurbano no regular de pasajeros','492160',NULL,NULL),(653,'Servicio de transporte automotor internacional de pasajeros','492170',NULL,NULL),(654,'Servicio de transporte automotor turístico de pasajeros','492180',NULL,NULL),(655,'Servicio de transporte automotor de pasajeros n.c.p.','492190',NULL,NULL),(656,'Servicios de mudanza','492210',NULL,NULL),(657,'Servicio de transporte automotor de cereales','492221',NULL,NULL),(658,'Servicio de transporte automotor de mercaderías a granel n.c.p.','492229',NULL,NULL),(659,'Servicio de transporte automotor de animales','492230',NULL,NULL),(660,'Servicio de transporte por camión cisterna','492240',NULL,NULL),(661,'Servicio de transporte automotor de mercaderías y sustancias peligrosas','492250',NULL,NULL),(662,'Servicio de transporte automotor urbano de carga n.c.p.','492280',NULL,NULL),(663,'Servicio de transporte automotor de cargas n.c.p.','492290',NULL,NULL),(664,'Servicio de transporte por oleoductos','493110',NULL,NULL),(665,'Servicio de transporte por poliductos y fueloductos','493120',NULL,NULL),(666,'Servicio de transporte por gasoductos','493200',NULL,NULL),(667,'Servicio de transporte marítimo de pasajeros','501100',NULL,NULL),(668,'Servicio de transporte marítimo de carga','501200',NULL,NULL),(669,'Servicio de transporte fluvial y lacustre de pasajeros','502101',NULL,NULL),(670,'Servicio de transporte fluvial y lacustre de carga','502200',NULL,NULL),(671,'Servicio de transporte aéreo de pasajeros','511000',NULL,NULL),(672,'Servicio de transporte aéreo de cargas','512000',NULL,NULL),(673,'Servicios de manipulación de carga en el ámbito terrestre','521010',NULL,NULL),(674,'Servicios de manipulación de carga en el ámbito portuario','521020',NULL,NULL),(675,'Servicios de manipulación de carga en el ámbito aéreo','521030',NULL,NULL),(676,'Servicios de almacenamiento y depósito en silos','522010',NULL,NULL),(677,'Servicios de almacenamiento y depósito en cámaras frigoríficas','522020',NULL,NULL),(678,'Servicios de usuarios directos de zona franca','522091',NULL,NULL),(679,'Servicios de gestión de depósitos fiscales','522092',NULL,NULL),(680,'Servicios de almacenamiento y depósito n.c.p.','522099',NULL,NULL),(681,'Servicios de gestión aduanera realizados por despachantes de aduana','523011',NULL,NULL),(682,'Servicios de gestión aduanera para el transporte de mercaderías n.c.p.','523019',NULL,NULL),(683,'Servicios de agencias marítimas para el transporte de mercaderías','523020',NULL,NULL),(684,'Servicios de gestión de agentes de transporte aduanero excepto agencias marítimas','523031',NULL,NULL),(685,'Servicios de operadores logísticos seguros (OLS) en el ámbito aduanero','523032',NULL,NULL),(686,'Servicios de operadores logísticos n.c.p.','523039',NULL,NULL),(687,'Servicios de gestión y logística para el transporte de mercaderías n.c.p.','523090',NULL,NULL),(688,'Servicios de explotación de infraestructura para el transporte terrestre, peajes y otros derechos','524110',NULL,NULL),(689,'Servicios  de playas de estacionamiento y garajes','524120',NULL,NULL),(690,'Servicios de estaciones terminales de ómnibus y ferroviárias','524130',NULL,NULL),(691,'Servicios complementarios para el transporte terrestre n.c.p.','524190',NULL,NULL),(692,'Servicios de explotación de infraestructura para el transporte marítimo, derechos de puerto','524210',NULL,NULL),(693,'Servicios de guarderías náuticas','524220',NULL,NULL),(694,'Servicios para la navegación','524230',NULL,NULL),(695,'Servicios complementarios para el transporte marítimo n.c.p.','524290',NULL,NULL),(696,'Servicios de explotación de infraestructura para el transporte aéreo, derechos de aeropuerto','524310',NULL,NULL),(697,'Servicios de hangares y estacionamiento de aeronaves','524320',NULL,NULL),(698,'Servicios para la aeronavegación','524330',NULL,NULL),(699,'Servicios complementarios para el transporte aéreo n.c.p.','524390',NULL,NULL),(700,'Servicio de correo postal','530010',NULL,NULL),(701,'Servicios de mensajerías.','530090',NULL,NULL),(702,'Servicios de alojamiento por hora','551010',NULL,NULL),(703,'Servicios de alojamiento en pensiones','551021',NULL,NULL),(704,'Servicios de alojamiento en hoteles, hosterías y residenciales similares, excepto por hora, que incluyen servicio de restaurante al público','551022',NULL,NULL),(705,'Servicios de alojamiento en hoteles, hosterías y residenciales similares, excepto por hora, que no incluyen servicio de restaurante al público','551023',NULL,NULL),(706,'Servicios de hospedaje temporal n.c.p.','551090',NULL,NULL),(707,'Servicios de alojamiento en campings','552000',NULL,NULL),(708,'Servicios de restaurantes y cantinas sin espectáculo','561011',NULL,NULL),(709,'Servicios de restaurantes y cantinas con espectáculo','561012',NULL,NULL),(710,'Servicios de \"fast food\" y locales de venta de comidas y bebidas al paso','561013',NULL,NULL),(711,'Servicios de expendio de bebidas en bares','561014',NULL,NULL),(712,'Servicios de expendio de comidas y bebidas en establecimientos con servicio de mesa y/o en mostrador n.c.p.','561019',NULL,NULL),(713,'Servicios de preparación de comidas para llevar','561020',NULL,NULL),(714,'Servicio de expendio de helados','561030',NULL,NULL),(715,'Servicios de preparación de comidas realizadas por/para vendedores ambulantes.','561040',NULL,NULL),(716,'Servicios de preparación de comidas para empresas y eventos','562010',NULL,NULL),(717,'Servicios de cantinas con atención exclusiva  a los empleados o estudiantes dentro de empresas o establecimientos educativos.','562091',NULL,NULL),(718,'Servicios de comidas n.c.p.','562099',NULL,NULL),(719,'Edición de libros, folletos, y otras publicaciones','581100',NULL,NULL),(720,'Edición de directorios y listas de correos','581200',NULL,NULL),(721,'Edición de periódicos, revistas y publicaciones periódicas','581300',NULL,NULL),(722,'Edición n.c.p.','581900',NULL,NULL),(723,'Producción de filmes y videocintas','591110',NULL,NULL),(724,'Postproducción de filmes y videocintas','591120',NULL,NULL),(725,'Distribución de filmes y videocintas','591200',NULL,NULL),(726,'Exhibición de filmes y videocintas','591300',NULL,NULL),(727,'Servicios de grabación de sonido y edición de música','592000',NULL,NULL),(728,'Emisión y retransmisión de radio','601000',NULL,NULL),(729,'Emisión y retransmisión  de televisión abierta','602100',NULL,NULL),(730,'Operadores de televisión por suscripción.','602200',NULL,NULL),(731,'Emisión de señales de televisión por suscripción','602310',NULL,NULL),(732,'Producción de programas de televisión','602320',NULL,NULL),(733,'Servicios de televisión n.c.p','602900',NULL,NULL),(734,'Servicios de locutorios','611010',NULL,NULL),(735,'Servicios de telefonía fija, excepto locutorios','611090',NULL,NULL),(736,'Servicios de telefonía móvil','612000',NULL,NULL),(737,'Servicios de telecomunicaciones vía satélite, excepto servicios de transmisión de televisión','613000',NULL,NULL),(738,'Servicios de proveedores de acceso a internet','614010',NULL,NULL),(739,'Servicios de telecomunicación vía internet n.c.p.','614090',NULL,NULL),(740,'Servicios de telecomunicaciones n.c.p.','619000',NULL,NULL),(741,'Servicios de consultores en informática y suministros de programas de informática','620100',NULL,NULL),(742,'Servicios de consultores en equipo de informática','620200',NULL,NULL),(743,'Servicios de consultores en tecnología de la información','620300',NULL,NULL),(744,'Servicios de informática n.c.p.','620900',NULL,NULL),(745,'Procesamiento de datos','631110',NULL,NULL),(746,'Hospedaje de datos','631120',NULL,NULL),(747,'Actividades conexas al procesamiento y hospedaje de datos n.c.p.','631190',NULL,NULL),(748,'Portales web','631200',NULL,NULL),(749,'Agencias de noticias','639100',NULL,NULL),(750,'Servicios de información n.c.p.','639900',NULL,NULL),(751,'Servicios de la banca central','641100',NULL,NULL),(752,'Servicios de la banca mayorista','641910',NULL,NULL),(753,'Servicios de la banca de inversión','641920',NULL,NULL),(754,'Servicios de la banca minorista','641930',NULL,NULL),(755,'Servicios de intermediación financiera realizada por las compañías financieras','641941',NULL,NULL),(756,'Servicios de intermediación financiera realizada por sociedades de ahorro y préstamo para la vivienda y otros inmuebles','641942',NULL,NULL),(757,'Servicios de intermediación financiera realizada por cajas de crédito','641943',NULL,NULL),(758,'Servicios de sociedades de cartera','642000',NULL,NULL),(759,'Servicios de fideicomisos','643001',NULL,NULL),(760,'Fondos y sociedades de inversión y entidades financieras similares n.c.p.','643009',NULL,NULL),(761,'Arrendamiento financiero, leasing','649100',NULL,NULL),(762,'Actividades de crédito para financiar otras actividades económicas','649210',NULL,NULL),(763,'Servicios de entidades de tarjeta de compra y/o crédito','649220',NULL,NULL),(764,'Servicios de crédito n.c.p.','649290',NULL,NULL),(765,'Servicios de agentes de mercado abierto \"puros\"','649910',NULL,NULL),(766,'Servicios de socios inversores en sociedades regulares según Ley 19.550 - S.R.L., S.C.A, etc, excepto socios inversores en sociedades anónimas incluidos en 649999 -','649991',NULL,NULL),(767,'Servicios de financiación y actividades financieras n.c.p.','649999',NULL,NULL),(768,'Servicios de seguros de salud','651110',NULL,NULL),(769,'Servicios de seguros de vida','651120',NULL,NULL),(770,'Servicios de seguros personales excepto  los de salud y de vida','651130',NULL,NULL),(771,'Servicios de aseguradoras de riesgo de trabajo (ART)','651210',NULL,NULL),(772,'Servicios de seguros patrimoniales excepto los de las aseguradoras de riesgo de trabajo (ART)','651220',NULL,NULL),(773,'Obras Sociales','651310',NULL,NULL),(774,'Servicios de cajas de previsión social pertenecientes a asociaciones profesionales','651320',NULL,NULL),(775,'Reaseguros','652000',NULL,NULL),(776,'Administración de fondos de pensiones, excepto la seguridad social obligatoria','653000',NULL,NULL),(777,'Servicios de mercados y cajas de valores','661111',NULL,NULL),(778,'Servicios de mercados a término','661121',NULL,NULL),(779,'Servicios de bolsas de comercio','661131',NULL,NULL),(780,'Servicios bursátiles de mediación o por cuenta de terceros','661910',NULL,NULL),(781,'Servicios de casas y agencias de cambio','661920',NULL,NULL),(782,'Servicios de sociedades calificadoras de riesgos financieros','661930',NULL,NULL),(783,'Servicios de envio y recepción de fondos desde y hacia el exterior','661991',NULL,NULL),(784,'Servicios de administradoras de vales y tickets','661992',NULL,NULL),(785,'Servicios auxiliares a la intermediación financiera n.c.p.','661999',NULL,NULL),(786,'Servicios de evaluación de riesgos y daños','662010',NULL,NULL),(787,'Servicios de productores  y asesores de seguros','662020',NULL,NULL),(788,'Servicios auxiliares a los servicios de seguros n.c.p.','662090',NULL,NULL),(789,'Servicios de gestión de fondos a cambio de una retribución o por contrata','663000',NULL,NULL),(790,'Servicios de alquiler y explotación de inmuebles para fiestas, convenciones y otros eventos similares','681010',NULL,NULL),(791,'Servicios de alquiler  de consultorios médicos','681020',NULL,NULL),(792,'Servicios inmobiliarios realizados por cuenta propia, con bienes urbanos propios o arrendados n.c.p.','681098',NULL,NULL),(793,'Servicios inmobiliarios realizados por cuenta propia, con bienes rurales propios o arrendados n.c.p.','681099',NULL,NULL),(794,'Servicios de administración de consorcios de edificios','682010',NULL,NULL),(795,'Servicios prestados por inmobiliarias','682091',NULL,NULL),(796,'Servicios inmobiliarios realizados a cambio de una retribución o por contrata n.c.p.','682099',NULL,NULL),(797,'Servicios jurídicos','691001',NULL,NULL),(798,'Servicios  notariales','691002',NULL,NULL),(799,'Servicios de contabilidad, auditoría y asesoría fiscal','692000',NULL,NULL),(800,'Servicios de gerenciamiento de empresas e instituciones de salud, servicios de auditoria y medicina legal, servicio de asesoramiento farmacéutico','702010',NULL,NULL),(801,'Servicios de asesoramiento, dirección y gestión empresarial realizados por integrantes de los órganos de administración y/o fiscalización en sociedades anónimas','702091',NULL,NULL),(802,'Servicios de asesoramiento, dirección y gestión empresarial realizados por integrantes de cuerpos de dirección en sociedades excepto las anónimas','702092',NULL,NULL),(803,'Servicios de asesoramiento, dirección y gestión empresarial n.c.p.','702099',NULL,NULL),(804,'Servicios relacionados con la construcción.','711001',NULL,NULL),(805,'Servicios geológicos y de prospección','711002',NULL,NULL),(806,'Servicios relacionados con la electrónica y las comunicaciones','711003',NULL,NULL),(807,'Servicios de arquitectura e ingeniería y servicios conexos de asesoramiento técnico n.c.p.','711009',NULL,NULL),(808,'Ensayos y análisis técnicos','712000',NULL,NULL),(809,'Investigación  y desarrollo experimental en el campo de la ingeniería y la tecnología','721010',NULL,NULL),(810,'Investigación  y desarrollo experimental en el campo de las ciencias médicas','721020',NULL,NULL),(811,'Investigación  y desarrollo experimental en el campo de las ciencias agropecuarias','721030',NULL,NULL),(812,'Investigación y desarrollo experimental en el campo de las ciencias exactas y naturales n.c.p.','721090',NULL,NULL),(813,'Investigación  y desarrollo experimental en el campo de las ciencias sociales','722010',NULL,NULL),(814,'Investigación  y desarrollo experimental en el campo de las ciencias humanas','722020',NULL,NULL),(815,'Servicios de comercialización de tiempo y espacio publicitario','731001',NULL,NULL),(816,'Servicios de publicidad n.c.p.','731009',NULL,NULL),(817,'Estudio de mercado, realización de encuestas de opinión pública','732000',NULL,NULL),(818,'Servicios de diseño especializado','741000',NULL,NULL),(819,'Servicios de fotografía','742000',NULL,NULL),(820,'Servicios de traducción e interpretación','749001',NULL,NULL),(821,'Servicios de representación e intermediación de artistas y modelos','749002',NULL,NULL),(822,'Servicios de representación e intermediación de deportistas profesionales','749003',NULL,NULL),(823,'Actividades profesionales, científicas y técnicas n.c.p.','749009',NULL,NULL),(824,'Servicios veterinarios','750000',NULL,NULL),(825,'Alquiler de automóviles sin conductor','771110',NULL,NULL),(826,'Alquiler de vehículos automotores n.c.p., sin conductor ni operarios','771190',NULL,NULL),(827,'Alquiler de equipo de transporte para vía acuática, sin operarios ni tripulación','771210',NULL,NULL),(828,'Alquiler de equipo de transporte para vía aérea, sin operarios ni tripulación','771220',NULL,NULL),(829,'Alquiler de equipo de transporte n.c.p. sin conductor ni operarios','771290',NULL,NULL),(830,'Alquiler de videos y video juegos','772010',NULL,NULL),(831,'Alquiler de prendas de vestir','772091',NULL,NULL),(832,'Alquiler de efectos personales y enseres domésticos n.c.p.','772099',NULL,NULL),(833,'Alquiler de maquinaria y equipo agropecuario y forestal, sin operarios','773010',NULL,NULL),(834,'Alquiler de maquinaria y equipo para la minería, sin operarios','773020',NULL,NULL),(835,'Alquiler de maquinaria y equipo de construcción e ingeniería civil, sin operarios','773030',NULL,NULL),(836,'Alquiler de maquinaria y equipo de oficina, incluso computadoras','773040',NULL,NULL),(837,'Alquiler de maquinaria y equipo n.c.p., sin personal','773090',NULL,NULL),(838,'Arrendamiento y gestión de bienes intangibles no financieros','774000',NULL,NULL),(839,'Obtención y dotación de personal','780000',NULL,NULL),(840,'Servicios minoristas de agencias de viajes','791100',NULL,NULL),(841,'Servicios mayoristas de agencias de viajes','791200',NULL,NULL),(842,'Servicios de turismo aventura','791901',NULL,NULL),(843,'Servicios complementarios de apoyo turístico n.c.p.','791909',NULL,NULL),(844,'Servicios de transporte de caudales y objetos de valor','801010',NULL,NULL),(845,'Servicios de sistemas de seguridad','801020',NULL,NULL),(846,'Servicios de seguridad e investigación n.c.p.','801090',NULL,NULL),(847,'Servicio combinado de apoyo a edificios','811000',NULL,NULL),(848,'Servicios de limpieza general de edificios','812010',NULL,NULL),(849,'Servicios de desinfección y exterminio de plagas en el ámbito urbano','812020',NULL,NULL),(850,'Servicios de limpieza n.c.p.','812090',NULL,NULL),(851,'Servicios de jardinería y mantenimiento de espacios verdes','813000',NULL,NULL),(852,'Servicios combinados de gestión administrativa de oficinas','821100',NULL,NULL),(853,'Servicios de fotocopiado, preparación de documentos y otros servicios de apoyo de oficina','821900',NULL,NULL),(854,'Servicios de call center','822000',NULL,NULL),(855,'Servicios de organización de convenciones y exposiciones comerciales, excepto culturales y deportivos','823000',NULL,NULL),(856,'Servicios de agencias de cobro y calificación crediticia','829100',NULL,NULL),(857,'Servicios de envase y empaque','829200',NULL,NULL),(858,'Servicios empresariales n.c.p.','829900',NULL,NULL),(859,'Servicios generales de la Administración Pública','841100',NULL,NULL),(860,'Servicios para la regulación de las actividades sanitarias, educativas, culturales, y restantes servicios sociales, excepto seguridad social obligatoria','841200',NULL,NULL),(861,'Servicios para la regulación de la actividad económica','841300',NULL,NULL),(862,'Servicios auxiliares para los servicios generales de la Administración Pública','841900',NULL,NULL),(863,'Servicios de asuntos exteriores','842100',NULL,NULL),(864,'Servicios de defensa','842200',NULL,NULL),(865,'Servicios para el orden público y la seguridad','842300',NULL,NULL),(866,'Servicios de justicia','842400',NULL,NULL),(867,'Servicios de protección civil','842500',NULL,NULL),(868,'Servicios de la seguridad social obligatoria, excepto obras sociales','843000',NULL,NULL),(869,'Guarderías y jardines maternales','851010',NULL,NULL),(870,'Enseñanza inicial, jardín de infantes y primaria','851020',NULL,NULL),(871,'Enseñanza secundaria de formación general','852100',NULL,NULL),(872,'Enseñanza secundaria de formación técnica y profesional','852200',NULL,NULL),(873,'Enseñanza  terciaria','853100',NULL,NULL),(874,'Enseñanza universitaria excepto formación de posgrado','853201',NULL,NULL),(875,'Formación de posgrado','853300',NULL,NULL),(876,'Enseñanza de idiomas','854910',NULL,NULL),(877,'Enseñanza de cursos relacionados con informática','854920',NULL,NULL),(878,'Enseñanza para adultos, excepto discapacitados','854930',NULL,NULL),(879,'Enseñanza especial y para discapacitados','854940',NULL,NULL),(880,'Enseñanza de gimnasia, deportes y actividades físicas','854950',NULL,NULL),(881,'Enseñanza artística','854960',NULL,NULL),(882,'Servicios de enseñanza n.c.p.','854990',NULL,NULL),(883,'Servicios de apoyo a la educación','855000',NULL,NULL),(884,'Servicios de internación excepto instituciones relacionadas con la salud mental','861010',NULL,NULL),(885,'Servicios de internación en instituciones relacionadas con la salud mental','861020',NULL,NULL),(886,'Servicios de  consulta médica','862110',NULL,NULL),(887,'Servicios de proveedores de atención médica domiciliaria','862120',NULL,NULL),(888,'Servicios de atención médica en dispensarios, salitas, vacunatorios y otros locales de atención primaria de la salud','862130',NULL,NULL),(889,'Servicios odontológicos','862200',NULL,NULL),(890,'Servicios de prácticas de diagnóstico en laboratorios','863110',NULL,NULL),(891,'Servicios de prácticas de diagnóstico por imágenes','863120',NULL,NULL),(892,'Servicios de prácticas de diagnóstico n.c.p.','863190',NULL,NULL),(893,'Servicios de tratamiento','863200',NULL,NULL),(894,'Servicio médico integrado de consulta, diagnóstico y tratamiento','863300',NULL,NULL),(895,'Servicios de emergencias y traslados','864000',NULL,NULL),(896,'Servicios de rehabilitación física','869010',NULL,NULL),(897,'Servicios relacionados con la salud humana n.c.p.','869090',NULL,NULL),(898,'Servicios de atención a personas con problemas de salud mental o de adicciones, con alojamiento','870100',NULL,NULL),(899,'Servicios de atención a ancianos con alojamiento','870210',NULL,NULL),(900,'Servicios de atención a personas minusválidas con alojamiento','870220',NULL,NULL),(901,'Servicios de atención a niños y adolescentes carenciados con alojamiento','870910',NULL,NULL),(902,'Servicios de atención a mujeres con alojamiento','870920',NULL,NULL),(903,'Servicios sociales con alojamiento n.c.p.','870990',NULL,NULL),(904,'Servicios sociales sin alojamiento','880000',NULL,NULL),(905,'Producción de espectáculos teatrales y musicales','900011',NULL,NULL),(906,'Composición y representación de obras teatrales, musicales y artísticas','900021',NULL,NULL),(907,'Servicios conexos a la producción de espectáculos teatrales y musicales','900030',NULL,NULL),(908,'Servicios de agencias de ventas de entradas','900040',NULL,NULL),(909,'Servicios de espectáculos artísticos n.c.p.','900091',NULL,NULL),(910,'Servicios de bibliotecas y archivos','910100',NULL,NULL),(911,'Servicios de museos y preservación de lugares y edificios históricos','910200',NULL,NULL),(912,'Servicios de jardines botánicos, zoológicos y de parques nacionales','910300',NULL,NULL),(913,'Servicios culturales n.c.p.','910900',NULL,NULL),(914,'Servicios de recepción de apuestas de quiniela, lotería y similares','920001',NULL,NULL),(915,'Servicios relacionados con juegos de azar y apuestas n.c.p.','920009',NULL,NULL),(916,'Servicios de organización, dirección y gestión de prácticas deportivas en clubes','931010',NULL,NULL),(917,'Explotación de instalaciones deportivas, excepto clubes','931020',NULL,NULL),(918,'Promoción y producción de espectáculos deportivos','931030',NULL,NULL),(919,'Servicios prestados por deportistas y atletas para la realización de prácticas deportivas','931041',NULL,NULL),(920,'Serv prestados por profesionales y técnicos para la realización de prácticas deportivas','931042',NULL,NULL),(921,'Servicios de acondicionamiento físico','931050',NULL,NULL),(922,'Servicios para la práctica deportiva n.c.p.','931090',NULL,NULL),(923,'Servicios de parques de diversiones y parques temáticos','939010',NULL,NULL),(924,'Servicios de salones de juegos','939020',NULL,NULL),(925,'Servicios de salones de baile, discotecas y similares','939030',NULL,NULL),(926,'Servicios de entretenimiento n.c.p.','939090',NULL,NULL),(927,'Servicios de organizaciones empresariales y de empleadores','941100',NULL,NULL),(928,'Servicios de organizaciones profesionales','941200',NULL,NULL),(929,'Servicios de sindicatos','942000',NULL,NULL),(930,'Servicios de organizaciones religiosas','949100',NULL,NULL),(931,'Servicios de organizaciones políticas','949200',NULL,NULL),(932,'Servicios de mutuales, excepto mutuales de salud y financieras','949910',NULL,NULL),(933,'Servicios de consorcios de edificios','949920',NULL,NULL),(934,'Servicios de cooperativas cuando realizan varias actividades','949930',NULL,NULL),(935,'Servicios de asociaciones n.c.p.','949990',NULL,NULL),(936,'Reparación y mantenimiento de equipos informáticos','951100',NULL,NULL),(937,'Reparación y mantenimiento de equipos de telefonía y de comunicación','951200',NULL,NULL),(938,'Reparación de calzado y artículos de marroquinería','952200',NULL,NULL),(939,'Reparación de tapizados y muebles','952300',NULL,NULL),(940,'Reforma y reparación de cerraduras, duplicación de llaves. Cerrajerías','952910',NULL,NULL),(941,'Reparación de relojes y joyas. Relojerías','952920',NULL,NULL),(942,'Reparación de efectos personales y enseres domésticos n.c.p.','952990',NULL,NULL),(943,'Servicios de limpieza de prendas prestado por tintorerías rápidas','960101',NULL,NULL),(944,'Lavado y limpieza de artículos de tela, cuero y/o de piel, incluso la limpieza en seco','960102',NULL,NULL),(945,'Servicios de peluquería','960201',NULL,NULL),(946,'Servicios de tratamiento de belleza, excepto los de peluquería','960202',NULL,NULL),(947,'Pompas fúnebres y servicios conexos','960300',NULL,NULL),(948,'Servicios de centros de estética, spa y similares','960910',NULL,NULL),(949,'Servicios personales n.c.p.','960990',NULL,NULL),(950,'Servicios de hogares privados que contratan servicio doméstico','970000',NULL,NULL),(951,'Servicios de organizaciones y órganos extraterritoriales','990000',NULL,NULL),(952,'Reparación de artículos eléctricos y electrónicos de uso doméstico','952100',NULL,NULL),(953,'Venta al por menor de CDs y DVDs de audio y video grabados','476200',NULL,NULL),(954,'Venta al por mayor de CDs y DVDs de audio y video grabados.','464910',NULL,NULL),(955,'Venta al por mayor en comisión o consignación de prod. textiles, prendas de vestir, calzado excepto el ortopédico, art.de marroquinería, paraguas y similares y prod.de cuero n.c.p','461091',NULL,NULL),(956,'Perforación y sondeo, excepto perforación de pozos de petróleo, de gas, de minas e hidráulicos  y prospección de yacimientos de petróleo','431220',NULL,NULL),(957,'Reparación y mantenimiento de instrumentos médicos,ópticos y de precisión,equipo fotográfico,aparatos para medir,ensayar o navegar,relojes,excepto para uso personal o doméstico','331301',NULL,NULL),(958,'Cría de ganado equino realizada en haras','14221',NULL,NULL);
/*!40000 ALTER TABLE `actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datos_laborales_registro`
--

DROP TABLE IF EXISTS `datos_laborales_registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datos_laborales_registro` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `registro_id` bigint(20) unsigned NOT NULL,
  `relacion_laboral_id` bigint(20) unsigned NOT NULL,
  `actividad_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datos_laborales_registro`
--

LOCK TABLES `datos_laborales_registro` WRITE;
/*!40000 ALTER TABLE `datos_laborales_registro` DISABLE KEYS */;
INSERT INTO `datos_laborales_registro` VALUES (1,6,5,'2',NULL,NULL),(2,6,4,'1',NULL,NULL),(3,6,1,'5',NULL,NULL),(6,24,2,'6',NULL,NULL),(7,25,2,'6',NULL,NULL),(8,26,1,'5',NULL,NULL),(31,15,1,'5',NULL,NULL),(39,4,1,'1',NULL,NULL),(46,23,1,'1',NULL,NULL),(136,14,1,'a',NULL,NULL),(172,43,1,'sistemas',NULL,NULL),(180,49,3,'Arquitecto',NULL,NULL),(181,50,5,'Estudiante',NULL,NULL),(182,51,1,'Docente',NULL,NULL),(183,52,5,'Estudiante',NULL,NULL),(184,53,1,'Bancario',NULL,NULL),(185,54,1,'Empleada Administrativa',NULL,NULL),(187,56,3,'Ingeniero Civil',NULL,NULL),(190,57,1,'CEO CARREFOUR ARGENTINA',NULL,NULL),(191,58,1,'Gerente General Grupo Santander',NULL,NULL),(192,59,5,'Estudiante',NULL,NULL),(193,55,1,'Gerente de Banco',NULL,NULL),(200,63,1,'Ingeniero informático',NULL,NULL),(208,67,2,'Desempleado ',NULL,NULL),(213,62,1,'Programador de sistemas',NULL,NULL),(214,68,5,'Contadora',NULL,NULL),(215,69,2,'Desempleado',NULL,NULL),(217,65,1,'Maestra',NULL,NULL),(220,72,2,'Ingeniero Civil',NULL,NULL),(221,60,3,'tecnico',NULL,NULL),(223,61,1,'nutricionista',NULL,NULL),(227,75,2,'DADA',NULL,NULL),(230,76,3,'Contador Público',NULL,NULL),(231,76,1,'empleado publico',NULL,NULL),(234,42,3,'consultor',NULL,NULL),(235,77,1,'Contador',NULL,NULL),(236,77,3,'Asesor Financiero',NULL,NULL);
/*!40000 ALTER TABLE `datos_laborales_registro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `declaracion_juradas`
--

DROP TABLE IF EXISTS `declaracion_juradas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `declaracion_juradas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `pep` enum('Si','No') COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivo_pep` text COLLATE utf8mb4_unicode_ci,
  `sujetoobligado` enum('Si','No') COLLATE utf8mb4_unicode_ci NOT NULL,
  `residencia_arg` enum('Si','No') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `declaracion_juradas_user_id_foreign` (`user_id`),
  KEY `declaracion_juradas_pais_id_foreign` (`pais_id`),
  CONSTRAINT `declaracion_juradas_pais_id_foreign` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`id`),
  CONSTRAINT `declaracion_juradas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `declaracion_juradas`
--

LOCK TABLES `declaracion_juradas` WRITE;
/*!40000 ALTER TABLE `declaracion_juradas` DISABLE KEYS */;
/*!40000 ALTER TABLE `declaracion_juradas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documentacions`
--

DROP TABLE IF EXISTS `documentacions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documentacions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `imgdocfrente` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgdocdorso` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgdocservicio` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selfie` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documentacions_user_id_foreign` (`user_id`),
  CONSTRAINT `documentacions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentacions`
--

LOCK TABLES `documentacions` WRITE;
/*!40000 ALTER TABLE `documentacions` DISABLE KEYS */;
/*!40000 ALTER TABLE `documentacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `domicilios`
--

DROP TABLE IF EXISTS `domicilios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `domicilios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tipodomicilio_id` bigint(20) unsigned NOT NULL,
  `pais_id` bigint(20) unsigned NOT NULL,
  `provincia_id` bigint(20) unsigned NOT NULL,
  `localidad_id` bigint(20) unsigned NOT NULL,
  `cp` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calle` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pisodto` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `domicilios_tipodomicilio_id_foreign` (`tipodomicilio_id`),
  KEY `domicilios_pais_id_foreign` (`pais_id`),
  KEY `domicilios_provincia_id_foreign` (`provincia_id`),
  KEY `domicilios_localidad_id_foreign` (`localidad_id`),
  KEY `domicilios_user_id_foreign` (`user_id`),
  CONSTRAINT `domicilios_localidad_id_foreign` FOREIGN KEY (`localidad_id`) REFERENCES `localidads` (`id`),
  CONSTRAINT `domicilios_pais_id_foreign` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`id`),
  CONSTRAINT `domicilios_provincia_id_foreign` FOREIGN KEY (`provincia_id`) REFERENCES `provincias` (`id`),
  CONSTRAINT `domicilios_tipodomicilio_id_foreign` FOREIGN KEY (`tipodomicilio_id`) REFERENCES `tipo_domicilios` (`id`),
  CONSTRAINT `domicilios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domicilios`
--

LOCK TABLES `domicilios` WRITE;
/*!40000 ALTER TABLE `domicilios` DISABLE KEYS */;
/*!40000 ALTER TABLE `domicilios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_civiles`
--

DROP TABLE IF EXISTS `estado_civiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado_civiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_civiles`
--

LOCK TABLES `estado_civiles` WRITE;
/*!40000 ALTER TABLE `estado_civiles` DISABLE KEYS */;
INSERT INTO `estado_civiles` VALUES (1,'Soltero/a',NULL,NULL),(2,'Casado/a/ Union Civil',NULL,NULL),(3,'Divorciado/a',NULL,NULL),(4,'Viudo/a',NULL,NULL);
/*!40000 ALTER TABLE `estado_civiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `generos`
--

DROP TABLE IF EXISTS `generos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `generos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `generos`
--

LOCK TABLES `generos` WRITE;
/*!40000 ALTER TABLE `generos` DISABLE KEYS */;
INSERT INTO `generos` VALUES (1,'Femenino',NULL,NULL),(2,'Masculino',NULL,NULL);
/*!40000 ALTER TABLE `generos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `localidads`
--

DROP TABLE IF EXISTS `localidads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `localidads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `codigopostal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `localidads_provincia_id_foreign` (`provincia_id`),
  CONSTRAINT `localidads_provincia_id_foreign` FOREIGN KEY (`provincia_id`) REFERENCES `provincias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22964 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localidads`
--

LOCK TABLES `localidads` WRITE;
/*!40000 ALTER TABLE `localidads` DISABLE KEYS */;
/*!40000 ALTER TABLE `localidads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meses`
--

DROP TABLE IF EXISTS `meses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meses`
--

LOCK TABLES `meses` WRITE;
/*!40000 ALTER TABLE `meses` DISABLE KEYS */;
INSERT INTO `meses` VALUES (1,'Enero',NULL,NULL),(2,'Febrero',NULL,NULL),(3,'Marzo',NULL,NULL),(4,'Abril',NULL,NULL),(5,'Mayo',NULL,NULL),(6,'Junio',NULL,NULL),(7,'Julio',NULL,NULL),(8,'Agosto',NULL,NULL),(9,'Septiembre',NULL,NULL),(10,'Octubre',NULL,NULL),(11,'Noviembre',NULL,NULL),(12,'Diciembre',NULL,NULL);
/*!40000 ALTER TABLE `meses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2020_06_27_232941_create_paises_table',2),(5,'2020_06_27_232942_create_estado_civiles_table',2),(6,'2020_06_27_232943_create_generos_table',2),(7,'2020_06_27_232944_create_tipo_domicilios_table',2),(8,'2020_06_27_232945_create_tipo_documentos_table',2),(9,'2020_06_27_232946_create_tipo_relacion_laborales_table',2),(10,'2020_06_27_232947_create_actividades_table',2),(11,'2020_06_27_232948_create_origen_fondos_table',2),(12,'2020_07_05_210939_create_permission_tables',3),(13,'2020_07_05_213653_create_provincias_table',4),(14,'2020_07_09_145946_create_origen_fondo_user_table',5),(15,'2020_07_09_150410_create_documentacions_table',6),(16,'2020_07_09_150623_create_localidads_table',7),(17,'2020_07_09_150904_create_domicilios_table',8),(18,'2020_07_09_152459_create_tipo_documento_user_table',9),(21,'2020_07_09_152912_create_tipo_relacion_laboral_user_table',10),(22,'2020_07_09_153959_create_declaracion_juradas_table',11),(23,'2020_07_09_215425_alter_localidads_table',12),(24,'2020_07_11_174815_alter_users_table',13),(25,'2020_07_21_162039_create_meses_table',14),(26,'2020_08_02_174926_create_registros_table',15),(27,'2020_08_02_180130_create_datos_laborales_registro_table',15),(28,'2021_01_02_222421_alter_registros_table',16),(29,'2021_01_03_215822_alter_table_registros',17),(30,'2021_01_10_205230_alter2_users_table',18);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `origen_fondo_user`
--

DROP TABLE IF EXISTS `origen_fondo_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `origen_fondo_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `origenfondo_id` bigint(20) unsigned NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `origen_fondo_user_user_id_foreign` (`user_id`),
  KEY `origen_fondo_user_origenfondo_id_foreign` (`origenfondo_id`),
  CONSTRAINT `origen_fondo_user_origenfondo_id_foreign` FOREIGN KEY (`origenfondo_id`) REFERENCES `origen_fondos` (`id`),
  CONSTRAINT `origen_fondo_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `origen_fondo_user`
--

LOCK TABLES `origen_fondo_user` WRITE;
/*!40000 ALTER TABLE `origen_fondo_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `origen_fondo_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `origen_fondos`
--

DROP TABLE IF EXISTS `origen_fondos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `origen_fondos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `origen_fondos`
--

LOCK TABLES `origen_fondos` WRITE;
/*!40000 ALTER TABLE `origen_fondos` DISABLE KEYS */;
/*!40000 ALTER TABLE `origen_fondos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paises`
--

DROP TABLE IF EXISTS `paises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paises` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paises`
--

LOCK TABLES `paises` WRITE;
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
INSERT INTO `paises` VALUES (1,'Argentina',NULL,NULL),(2,'Afganistán',NULL,NULL),(3,'Albania',NULL,NULL),(4,'Alemania',NULL,NULL),(5,'Andorra',NULL,NULL),(6,'Angola',NULL,NULL),(7,'Antigua y Barbuda',NULL,NULL),(8,'Arabia Saudita',NULL,NULL),(9,'Argelia',NULL,NULL),(10,'Armenia',NULL,NULL),(11,'Australia',NULL,NULL),(12,'Austria',NULL,NULL),(13,'Azerbaiyán',NULL,NULL),(14,'Bahamas',NULL,NULL),(15,'Bangladés',NULL,NULL),(16,'Barbados',NULL,NULL),(17,'Baréin',NULL,NULL),(18,'Bélgica',NULL,NULL),(19,'Belice',NULL,NULL),(20,'Benín',NULL,NULL),(21,'Bielorrusia',NULL,NULL),(22,'Birmania',NULL,NULL),(23,'Bolivia',NULL,NULL),(24,'Bosnia y Herzegovina',NULL,NULL),(25,'Botsuana',NULL,NULL),(26,'Brasil',NULL,NULL),(27,'Brunéi',NULL,NULL),(28,'Bulgaria',NULL,NULL),(29,'Burkina Faso',NULL,NULL),(30,'Burundi',NULL,NULL),(31,'Bután',NULL,NULL),(32,'Cabo Verde',NULL,NULL),(33,'Camboya',NULL,NULL),(34,'Camerún',NULL,NULL),(35,'Canadá',NULL,NULL),(36,'Catar',NULL,NULL),(37,'Chad',NULL,NULL),(38,'Chile',NULL,NULL),(39,'China',NULL,NULL),(40,'Chipre',NULL,NULL),(41,'Ciudad del Vaticano',NULL,NULL),(42,'Colombia',NULL,NULL),(43,'Comoras',NULL,NULL),(44,'Corea del Norte',NULL,NULL),(45,'Corea del Sur',NULL,NULL),(46,'Costa de Marfil',NULL,NULL),(47,'Costa Rica',NULL,NULL),(48,'Croacia',NULL,NULL),(49,'Cuba',NULL,NULL),(50,'Dinamarca',NULL,NULL),(51,'Dominica',NULL,NULL),(52,'Ecuador',NULL,NULL),(53,'Egipto',NULL,NULL),(54,'El Salvador',NULL,NULL),(55,'Emiratos Árabes Unidos',NULL,NULL),(56,'Eritrea',NULL,NULL),(57,'Eslovaquia',NULL,NULL),(58,'Eslovenia',NULL,NULL),(59,'España',NULL,NULL),(60,'Estados Unidos',NULL,NULL),(61,'Estonia',NULL,NULL),(62,'Etiopía',NULL,NULL),(63,'Filipinas',NULL,NULL),(64,'Finlandia',NULL,NULL),(65,'Fiyi',NULL,NULL),(66,'Francia',NULL,NULL),(67,'Gabón',NULL,NULL),(68,'Gambia',NULL,NULL),(69,'Georgia',NULL,NULL),(70,'Ghana',NULL,NULL),(71,'Granada',NULL,NULL),(72,'Grecia',NULL,NULL),(73,'Guatemala',NULL,NULL),(74,'Guyana',NULL,NULL),(75,'Guinea',NULL,NULL),(76,'Guinea ecuatorial',NULL,NULL),(77,'Guinea-Bisáu',NULL,NULL),(78,'Haití',NULL,NULL),(79,'Honduras',NULL,NULL),(80,'Hungría',NULL,NULL),(81,'India',NULL,NULL),(82,'Indonesia',NULL,NULL),(83,'Irak',NULL,NULL),(84,'Irán',NULL,NULL),(85,'Irlanda',NULL,NULL),(86,'Islandia',NULL,NULL),(87,'Islas Marshall',NULL,NULL),(88,'Islas Salomón',NULL,NULL),(89,'Israel',NULL,NULL),(90,'Italia',NULL,NULL),(91,'Jamaica',NULL,NULL),(92,'Japón',NULL,NULL),(93,'Jordania',NULL,NULL),(94,'Kazajistán',NULL,NULL),(95,'Kenia',NULL,NULL),(96,'Kirguistán',NULL,NULL),(97,'Kiribati',NULL,NULL),(98,'Kuwait',NULL,NULL),(99,'Laos',NULL,NULL),(100,'Lesoto',NULL,NULL),(101,'Letonia',NULL,NULL),(102,'Líbano',NULL,NULL),(103,'Liberia',NULL,NULL),(104,'Libia',NULL,NULL),(105,'Liechtenstein',NULL,NULL),(106,'Lituania',NULL,NULL),(107,'Luxemburgo',NULL,NULL),(108,'Macedonia del Norte',NULL,NULL),(109,'Madagascar',NULL,NULL),(110,'Malasia',NULL,NULL),(111,'Malaui',NULL,NULL),(112,'Maldivas',NULL,NULL),(113,'Malí',NULL,NULL),(114,'Malta',NULL,NULL),(115,'Marruecos',NULL,NULL),(116,'Mauricio',NULL,NULL),(117,'Mauritania',NULL,NULL),(118,'México',NULL,NULL),(119,'Micronesia',NULL,NULL),(120,'Moldavia',NULL,NULL),(121,'Mónaco',NULL,NULL),(122,'Mongolia',NULL,NULL),(123,'Montenegro',NULL,NULL),(124,'Mozambique',NULL,NULL),(125,'Namibia',NULL,NULL),(126,'Nauru',NULL,NULL),(127,'Nepal',NULL,NULL),(128,'Nicaragua',NULL,NULL),(129,'Níger',NULL,NULL),(130,'Nigeria',NULL,NULL),(131,'Noruega',NULL,NULL),(132,'Nueva Zelanda',NULL,NULL),(133,'Omán',NULL,NULL),(134,'Países Bajos',NULL,NULL),(135,'Pakistán',NULL,NULL),(136,'Palaos',NULL,NULL),(137,'Panamá',NULL,NULL),(138,'Papúa Nueva Guinea',NULL,NULL),(139,'Paraguay',NULL,NULL),(140,'Perú',NULL,NULL),(141,'Polonia',NULL,NULL),(142,'Portugal',NULL,NULL),(143,'Reino Unido',NULL,NULL),(144,'República Centroafricana',NULL,NULL),(145,'República Checa',NULL,NULL),(146,'República del Congo',NULL,NULL),(147,'República Democrática del Congo',NULL,NULL),(148,'República Dominicana',NULL,NULL),(149,'Ruanda',NULL,NULL),(150,'Rumanía',NULL,NULL),(151,'Rusia',NULL,NULL),(152,'Samoa',NULL,NULL),(153,'San Cristóbal y Nieves',NULL,NULL),(154,'San Marino',NULL,NULL),(155,'San Vicente y las Granadinas',NULL,NULL),(156,'Santa Lucía',NULL,NULL),(157,'Santo Tomé y Príncipe',NULL,NULL),(158,'Senegal',NULL,NULL),(159,'Serbia',NULL,NULL),(160,'Seychelles',NULL,NULL),(161,'Sierra Leona',NULL,NULL),(162,'Singapur',NULL,NULL),(163,'Siria',NULL,NULL),(164,'Somalia',NULL,NULL),(165,'Sri Lanka',NULL,NULL),(166,'Suazilandia',NULL,NULL),(167,'Sudáfrica',NULL,NULL),(168,'Sudán',NULL,NULL),(169,'Sudán del Sur',NULL,NULL),(170,'Suecia',NULL,NULL),(171,'Suiza',NULL,NULL),(172,'Surinam',NULL,NULL),(173,'Tailandia',NULL,NULL),(174,'Tanzania',NULL,NULL),(175,'Tayikistán',NULL,NULL),(176,'Timor Oriental',NULL,NULL),(177,'Togo',NULL,NULL),(178,'Tonga',NULL,NULL),(179,'Trinidad y Tobago',NULL,NULL),(180,'Túnez',NULL,NULL),(181,'Turkmenistán',NULL,NULL),(182,'Turquía',NULL,NULL),(183,'Tuvalu',NULL,NULL),(184,'Ucrania',NULL,NULL),(185,'Uganda',NULL,NULL),(186,'Uruguay',NULL,NULL),(187,'Uzbekistán',NULL,NULL),(188,'Vanuatu',NULL,NULL),(189,'Venezuela',NULL,NULL),(190,'Vietnam',NULL,NULL),(191,'Yemen',NULL,NULL),(192,'Yibuti',NULL,NULL),(193,'Zambia',NULL,NULL),(194,'Zimbabue',NULL,NULL);
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('jorge@gmail.com','$2y$10$rzS7tTMHd3lwsarOe/SCEeYLjFa46yNca5vn5/MfKzMVE9NhOklOi','2020-07-05 15:20:50'),('mdiaz@sailinginversiones.com','$2y$10$SiApdvw8hOeT/klvhiFGJu34yyCVWwdcffFBXexfkMcEqrg/TQVni','2020-12-18 15:30:57'),('mlnazarian@sailinginversiones.com','$2y$10$E61t/rlEE5dGdbPFYK.KDeFvh/6UtyT7zFtexo2Y0ADTC33rB/xGK','2020-12-30 17:26:51'),('eduardocanellada@gmail.com','$2y$10$UNk2x6uPZCo31Kc2cqPTI.p9MQi86CjUh6NYPbpjEAqwFt8j1NHPO','2020-12-30 17:29:07'),('pabloragno@gmail.com','$2y$10$qZsARnDoKMdXDw4OtfGX5uHcUWr1KuL7ftDTy5frMl7BrH0BP.dEq','2021-01-26 19:31:50'),('marleasol@hotmail.com','$2y$10$4a5or3.QrqJFrc7KEiQSveDXNJRcZfC9OYeDuG2JUDzfjkBsuuQdO','2021-01-26 19:34:47'),('marleasol2@gmail.com','$2y$10$m6pRbgSx1mJzcQre4Wfwje8rI7sc21YLg2QXdl40ny0hHRksy2/8.','2021-02-04 19:12:36'),('mlnazarian@hotmail.com','$2y$10$qqVbXLStG7wMAM251AyvIeyA9x6NFfOtr3PEIiKivyr7Ytcqqz1US','2021-02-25 15:18:14'),('mario.prueba@yahoo.com.ar','$2y$10$KSIGg.gZnu5PZyM1CJrD4ORWJhrWHL/DwabeP/UdwZ13z4XOxB6fG','2021-03-05 19:42:16');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provincias`
--

DROP TABLE IF EXISTS `provincias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provincias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `provincias_pais_id_foreign` (`pais_id`),
  CONSTRAINT `provincias_pais_id_foreign` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provincias`
--

LOCK TABLES `provincias` WRITE;
/*!40000 ALTER TABLE `provincias` DISABLE KEYS */;
INSERT INTO `provincias` VALUES (1,'Ciudad Autónoma de Buenos Aires (CABA)',1,NULL,NULL),(2,'Buenos Aires',1,NULL,NULL),(3,'Catamarca',1,NULL,NULL),(4,'Córdoba',1,NULL,NULL),(5,'Corrientes',1,NULL,NULL),(6,'Entre Ríos',1,NULL,NULL),(7,'Jujuy',1,NULL,NULL),(8,'Mendoza',1,NULL,NULL),(9,'La Rioja',1,NULL,NULL),(10,'Salta',1,NULL,NULL),(11,'San Juan',1,NULL,NULL),(12,'San Luis',1,NULL,NULL),(13,'Santa Fe',1,NULL,NULL),(14,'Santiago del Estero',1,NULL,NULL),(15,'Tucumán',1,NULL,NULL),(16,'Chaco',1,NULL,NULL),(17,'Chubut',1,NULL,NULL),(18,'Formosa',1,NULL,NULL),(19,'Misiones',1,NULL,NULL),(20,'Neuquén',1,NULL,NULL),(21,'La Pampa',1,NULL,NULL),(22,'Río Negro',1,NULL,NULL),(23,'Santa Cruz',1,NULL,NULL),(24,'Tierra del Fuego',1,NULL,NULL);
/*!40000 ALTER TABLE `provincias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registros`
--

DROP TABLE IF EXISTS `registros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registros` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechanac` date NOT NULL,
  `tipo_docuemnto_id` bigint(20) unsigned NOT NULL,
  `nro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado_civil_id` bigint(20) unsigned NOT NULL,
  `genero_id` bigint(20) unsigned NOT NULL,
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais_id` bigint(20) unsigned NOT NULL,
  `cuit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_pais_id` bigint(20) unsigned NOT NULL,
  `provincia_id` bigint(20) unsigned NOT NULL,
  `localidad_id` bigint(20) unsigned NOT NULL,
  `cp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pisodto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personaexpuesta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motivo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sujetoobligado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residenciaexterior` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pais_id_otra_residencia` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dni_frente` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dni_dorso` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archivo_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archivo_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archivo_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `servicio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `calle_nro` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_area` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ide_tribu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_pareja` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_docuemnto_pareja_id` bigint(20) unsigned DEFAULT NULL,
  `nro_dni_pareja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tieneagente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agente` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registros`
--

LOCK TABLES `registros` WRITE;
/*!40000 ALTER TABLE `registros` DISABLE KEYS */;
INSERT INTO `registros` VALUES (44,'Eduardo Marcelo Canellada','eduardocanellada@gmail.com','2003-01-01',1,'24776904',2,3,'1564210609',1,'20247769049',1,3,7279,'4234','Vieytes','Pb 3','2',NULL,'2','2',60,NULL,NULL,'42_sailing.png','42_sailing.png','42_sailing.png',NULL,NULL,NULL,NULL,42,'1038','11',NULL,'21212','Eduardo Marcelo Canellada',1,'25829686','2','pepe'),(45,'maria eugenia blanco','info@gmail.com','1977-05-15',1,'25829686',1,1,'1564210609',1,'20258296861',1,2,2755,'1024','Vieytes','Pb 3','1',NULL,'1','1',1,NULL,NULL,'43_sailing.png','43_sailing.png','43_sailing.png',NULL,NULL,NULL,NULL,43,'1038','11',NULL,NULL,NULL,1,NULL,'2','pepe'),(46,'Maria Laura','mlnazarian@sailinginversiones.com','1988-07-01',1,'33952082',1,1,'68292029',1,'27339520823',1,2,2755,'0','Gurruchaga','1 A','2','Presidente','2','2',1,NULL,NULL,'44_prueba.pdf','44_prueba.pdf','44_prueba.pdf',NULL,NULL,NULL,NULL,44,'1657','11',NULL,'444.AAf.45646',NULL,1,NULL,'2','BullMarket'),(47,'Mario Javier Diaz','marleasol2@gmail.com','1969-06-24',1,'1111111',2,2,'52223333',1,'2211111112',1,2,2755,'0','Moreno','22','1','CEO COCA COLA','1','1',1,NULL,NULL,'45_LOGO ALIBABA.png','45_LOGO EBAY.png','45_LOGO BP ADR.jpg','45_LOGO PAYPAL.png',NULL,NULL,NULL,45,'1300','11',NULL,NULL,'DGArcia',1,'333322','1',NULL),(48,'Eduardo Nazarian','martin.nazarian@gmail.com','1953-06-10',1,'14769967',3,2,'15839525',1,'20147699671',1,20,4634,'8300','Zabala',NULL,'1',NULL,'1','1',1,NULL,NULL,'47_prueba.pdf','47_prueba.pdf','47_prueba.pdf',NULL,NULL,NULL,NULL,47,'2585','299',NULL,NULL,NULL,1,NULL,'1',NULL),(49,'Dgarcia','dgarcia@aaaa.com','1970-01-17',1,'22245254',2,2,'33322111',1,'22222452541',1,2,2755,'0','j b justo','22','1',NULL,'1','1',1,NULL,NULL,'48_LOGO EXXON MOBIL.png','48_LOGO ITAU UNIBANCO.jpg','48_LOGO GLAXOSMITHKLINE.png','48_LOGO BANCO BRADESCO.png',NULL,NULL,NULL,48,'4322','11',NULL,NULL,'Mario',1,'22333555','1',NULL),(50,'Leandro Migliorisi','marleasol2@hotmail.com','1998-07-19',1,'381111111',2,2,'8888888',1,'353811111112',1,2,2755,'0','Leon Gallardo','5to A','1',NULL,'1','1',1,NULL,NULL,'49_Logo COCA COLA.png','49_Logo GENERAL MOTORS.png','49_LOGO GILEAD.png','49_Logo DISNEY.png',NULL,NULL,'49_LOGO ALIBABA.png',49,'1520','11',NULL,NULL,'Gabriela',1,'38222222','1',NULL),(51,'Gabriela Hillar','ghillar@angelfire.com','1999-02-01',1,'38222222',2,1,'7777777',1,'36382222222',1,2,2755,'0','Leon Gallardo','5to A','1',NULL,'1','1',1,NULL,NULL,'50_LOGO EBAY.png','50_LOGO EXXON MOBIL.png','50_LOGO BANCO BRADESCO.png',NULL,NULL,NULL,NULL,50,'1550','11',NULL,NULL,NULL,1,NULL,'1',NULL),(52,'Patricia Raquel Diaz','marioocteto@yahoo.com.ar','1965-10-20',1,'17444555',3,1,'444444',1,'17174445555',1,2,2755,'1165','Altunez','10A','1',NULL,'1','1',1,NULL,NULL,'51_1146-paris.jpg','51_Abri-tu-cuenta-de-inversión.jpg','51_bee-balogun-xGjqco9mpMY-unsplash.jpg','51_Aguinaldo (1).jpg',NULL,NULL,'51_APERTURA ON LINE INICIO.png',51,'1000','11',NULL,NULL,NULL,1,NULL,'1',NULL),(53,'Sol Migliorisi','sol@xxx.com','1999-11-09',1,'402222222',2,1,'777888',1,'404022222222',1,2,2755,'1165','Altunez',NULL,'1',NULL,'1','1',1,NULL,NULL,'52_Madrid_Houses_Spain_Street_Night_Motion_512159_1280x853.jpg','52_Salamanca.jpg','52_Valencia.jpg',NULL,NULL,NULL,NULL,52,'1200','11',NULL,NULL,'Pedro Alzaga',1,'40333333','1',NULL),(54,'Martin  Rodriguez','pruebasgionline@yahoo.com','1980-01-01',1,'35222111',2,2,'222222',1,'35352221111',1,2,2755,'1095','Amenabar','1A','1',NULL,'1','1',1,NULL,NULL,'53_DNI Dorso-Leandro Miglioriso-381111111.png','53_sasha-stories-VynkVKneWJA-unsplash (1).jpg','53_Valencia.jpg','53_Salamanca.jpg',NULL,NULL,'53_Desert.jpg',53,'33','54',NULL,NULL,'Marianela Rodriguez',1,'33222111','1',NULL),(55,'Marianela Rodriguez','mrodri@yahoo.es','1985-01-13',1,'33222111',1,1,'33333312',1,'33332221111',1,2,2755,'1095','Amenabar','1A','1',NULL,'1','1',1,NULL,NULL,'54_Jellyfish.jpg','54_Lighthouse.jpg','54_Koala.jpg','54_Penguins.jpg',NULL,NULL,'54_Hydrangeas.jpg',54,'33','54',NULL,NULL,NULL,1,NULL,'1',NULL),(56,'Maria Soledad Sottomayor','masolesotomayor@yahoo.com','1969-06-02',1,'20957410',1,1,'7777777',1,'20209574100',1,2,2755,'0','Juan B Justo','2B','1',NULL,'1','1',1,NULL,NULL,'55_BARRICK LOGO.jpg','55_LOGO BAIDU.png','55_WALMART LOGO.png','55_Logo COCA COLA.png',NULL,NULL,'55_LOGO BP ADR.jpg',55,'43000','54',NULL,NULL,NULL,1,NULL,'1',NULL),(57,'Mariano Eriz','marian@xxx.it','1968-01-01',1,'20955444',1,2,'4444444',1,'20209554444',1,2,2755,'1105','Juan B Justo','2B','1',NULL,'2','1',1,NULL,NULL,'56_LOGO ALIBABA.png','56_LOGO BANCO BRADESCO.png','56_LOGO AMAZON.png','56_LOGO EBAY.png',NULL,NULL,'56_Logo DISNEY.png',56,'43000','54',NULL,NULL,NULL,1,NULL,'1',NULL),(58,'Juan Martín Santamaria','juanmasantamaria@yahoo.com','1970-09-04',1,'20888999',2,2,'5555555',1,'20208889999',1,2,2755,'1190','Juncal','20','1',NULL,'1','1',1,NULL,NULL,'57_BARRICK LOGO.jpg','57_LOGO ALPHABET.png','57_LOGO BANCO BRADESCO.png','57_Logo COCA COLA.png',NULL,NULL,'57_LOGO GILEAD.png',57,'1144','54',NULL,NULL,NULL,1,NULL,'1',NULL),(59,'Juan Ignacio Iribarren','nacho.iribarren@yahoo.com','1980-11-10',1,'35444222',2,2,'1111111',1,'35354442222',1,2,2755,'1108','Arenales','8','1',NULL,'1','1',1,NULL,NULL,'58_LOGO QUALCOMM.png','58_LOGO BAIDU.png','58_LOGO PAYPAL.png','58_LOGO SANTANDER.png',NULL,NULL,'58_LOGO ALIBABA.png',58,'1200','54',NULL,NULL,'Juan Pablo Franco',1,'31333444','1',NULL),(60,'Juan Pablo Franco','jpfranc@gmail.com','1984-12-12',1,'37444222',2,2,'3332222',1,'37374442222',1,2,2755,'1108','Arenales','8','1',NULL,'1','1',1,NULL,NULL,'59_LOGO ITAU UNIBANCO.jpg','59_LOGO GLAXOSMITHKLINE.png','59_LOGO NOKIA.jpg',NULL,NULL,NULL,NULL,59,'1200','54',NULL,NULL,'Juan Ignacio Iribarren',1,'35444222','1',NULL),(61,'Pablo','pabloragno@gmail.com','1974-12-28',1,'24378092',1,2,'55091685',1,'20243780927',1,14,22060,'4353','Alcalde Barbosa',NULL,'2','Un motivo a detalla','1','2',1,NULL,NULL,'60_logo skf.png','60_boldt.png','60_error.png','60_logo_boldt.png',NULL,NULL,NULL,60,'860','11',NULL,NULL,NULL,1,NULL,'2','Balanz'),(62,'Maria Victoria Canellada','mcanellada@gmail.com','1981-11-19',3,'24877555',1,3,'55118877',12,'11248775551',1,2,2755,'0','Paraguay','5 / D','1',NULL,'1','1',NULL,NULL,NULL,'61_error 217.jpg','61_gimnasio.jpg','61_pizza.jpg',NULL,NULL,NULL,NULL,61,'5897','11',NULL,NULL,NULL,3,NULL,'1',NULL),(63,'Daniela Cocco','cocco.daniela@yahoo.com','1990-09-08',1,'39444444',2,1,'2222222',1,'39394444444',1,2,2755,'0','Av del Libertador','10','1',NULL,'1','1',1,NULL,NULL,'62_BARRICK LOGO.jpg','62_DEERE LOGO.png','62_LOGO ALIBABA.png','62_LOGO BANCO BRADESCO.png',NULL,NULL,'62_WALMART LOGO.png',62,'1900','54',NULL,NULL,'Walter',1,'39555555','1',NULL),(64,'Walter Ricciardi','ricciardi.walter@gmail.com','1999-10-12',1,'37555555',2,2,'9999999',1,'37375555555',1,2,2755,'1110','Av del Libertador','10','2','Funcionario PNUD Argentina','1','1',1,NULL,NULL,'63_LOGO EBAY.png','63_LOGO BP ADR.jpg','63_LOGO BAIDU.png',NULL,'63_LOGO ALPHABET.png',NULL,'63_LOGO NOKIA.jpg',63,'1900','54',NULL,NULL,'Daniela Cocco',1,'39444444','1',NULL),(65,'Maria (prueba)','mlnazarian@hotmail.com','1993-01-01',1,'14769967',4,1,'44444444',1,'27147699671',1,2,2755,'0','Los Coihues',NULL,'1',NULL,'1','1',1,NULL,NULL,'65_AC061F97-3E22-49B2-84AB-F8FE2DFA0500.png','65_DNI MLN COLOR.pdf','65_image.jpg','65_DNI MLN COLOR.pdf',NULL,NULL,'65_DNI MLN COLOR.pdf',65,'1242','11',NULL,NULL,NULL,1,NULL,'2','Balanz'),(66,'Eduardo','nazarianml@gmail.com','1995-08-08',1,'17238591',2,2,'15839525',1,'27172385913',1,2,2755,'0','Los Coihues','1a','2','Presidente','2','2',8,NULL,NULL,'67_DNI Maria Laura Nazarian.pdf','67_DNI Maria Laura Nazarian.pdf','67_DNI Maria Laura Nazarian.pdf','67_DNI Maria Laura Nazarian.pdf','67_DNI Maria Laura Nazarian.pdf','67_DNI Maria Laura Nazarian.pdf','67_DNI Maria Laura Nazarian.pdf',67,'3333','11',NULL,'444.AAf.45646','Pepe',3,'N39952082','1',NULL),(67,'Mario','mailrepetido@hotmail.com','1987-11-11',2,'78787878',1,2,'68292029',16,'27787878780',1,14,21699,'4201','Gurruchaga',NULL,'1',NULL,'1','1',1,NULL,NULL,'68_DNI MLN COLOR.pdf','68_DNI MLN COLOR.pdf','68_DNI MLN COLOR.pdf','68_DNI MLN COLOR.pdf',NULL,NULL,NULL,68,'5555','299',NULL,NULL,NULL,1,NULL,'1',NULL),(68,'DIEGO FERNANDO NIEMBRO','diego@xxx.com','1993-04-10',1,'40555888',1,2,'99999999',1,'40405558888',1,2,2755,'1490','Moreno','1','1',NULL,'1','1',1,NULL,NULL,'69_1146-paris.jpg','69_gaia-armellin--j-mYTUdeo4-unsplash.jpg','69_Abri-tu-cuenta-de-inversión.jpg',NULL,NULL,NULL,NULL,69,'1220','54',NULL,NULL,NULL,1,NULL,'1',NULL),(69,'Mario Prueba 1','mario.prueba@yahoo.com','2003-01-01',1,'22211111',1,1,'1111||',1,'22222111112',1,2,2755,'0','asa',NULL,'1',NULL,'1','1',1,NULL,NULL,'72_1146-paris.jpg','72_1146-paris.jpg','72_1146-paris.jpg','72_1146-paris.jpg',NULL,NULL,NULL,72,'1','54',NULL,NULL,NULL,1,NULL,'1',NULL),(70,'MARIO \"prueba 2\"','LapaditeMD@outlook.com','1969-06-24',1,'22222222',2,2,'53333333',12,'22222222222',1,1,2755,'1901','aa','2','2','Funcionario PNUD Argentina','2','1',NULL,NULL,NULL,'75_1Screenshot_20201204-121236_Instagram.jpg','75_DNI FRENTE (1).jpg','75_DNI1.jpg',NULL,'75_gaia-armellin--j-mYTUdeo4-unsplash.jpg',NULL,NULL,75,'1','54',NULL,NULL,'Diego Garcia',1,'21111111','1',NULL),(71,'Francisco Montes de Oca','franmontes@live.ar','1974-08-06',1,'333333333',1,2,'33111111',12,'333333333333',1,18,18359,'3608','foterigham',NULL,'2','Empleado de la Gobernación de la Provincia de Formosa','1','1',NULL,NULL,NULL,'76_WhatsApp Image 2021-01-15 at 11.31.22 AM.jpeg','76_WhatsApp Image 2021-01-15 at 11.31.22 AM (1).jpeg','76_WhatsApp Image 2020-02-18 at 11.32.12.jpeg',NULL,NULL,NULL,NULL,76,'1241','54',NULL,NULL,NULL,1,NULL,'1',NULL),(72,'Fernando Acosta','facosta@grupoagg.com','1971-07-15',1,'22219426',1,2,'31695207',12,'20222194262',1,1,2755,'4234','Av. Federico Lacroze','12','1',NULL,'1','1',NULL,NULL,NULL,'77_FA DNI frente.pdf','77_FA DNI dorso.jpeg','77_FA CUIL.pdf','77_Manu Osde.jpeg',NULL,NULL,'77_DNI Fer Acosta.pdf',77,'2201','11',NULL,NULL,NULL,1,NULL,'1',NULL);
/*!40000 ALTER TABLE `registros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test_inversor`
--

DROP TABLE IF EXISTS `test_inversor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test_inversor` (
  `id` int(11) DEFAULT NULL,
  `pregunta1` int(11) DEFAULT NULL,
  `pregunta2` int(11) DEFAULT NULL,
  `pregunta3` int(11) DEFAULT NULL,
  `pregunta4` int(11) DEFAULT NULL,
  `pregunta5` int(11) DEFAULT NULL,
  `pregunta6` int(11) DEFAULT NULL,
  `pregunta7` int(11) DEFAULT NULL,
  `pregunta8` int(11) DEFAULT NULL,
  `pregunta9` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test_inversor`
--

LOCK TABLES `test_inversor` WRITE;
/*!40000 ALTER TABLE `test_inversor` DISABLE KEYS */;
INSERT INTO `test_inversor` VALUES (14,3,0,0,1,0,0,0,2,2),(27,3,0,0,1,0,0,0,2,2),(28,3,0,0,1,0,0,0,2,2),(30,3,0,0,1,0,0,0,2,2),(NULL,3,0,0,1,0,0,0,2,2),(33,3,0,0,1,0,0,0,2,2),(38,3,0,0,1,0,0,0,2,2),(11,3,0,0,4,0,0,0,2,2),(17,3,0,0,1,0,0,0,2,2),(22,3,0,0,1,0,0,0,2,2),(8,3,0,0,1,0,0,0,2,2),(42,3,0,0,1,0,0,0,2,2),(43,3,0,0,1,0,0,0,2,2),(48,1,1,2,2,2,1,2,4,4),(44,3,0,0,3,6,0,2,8,2),(47,0,0,0,3,0,0,6,2,2),(45,2,1,2,2,2,1,2,4,4),(49,2,1,0,2,2,1,2,4,4),(51,1,0,0,1,0,1,2,2,2),(53,2,1,0,2,2,1,2,2,2),(55,1,0,0,2,2,1,2,4,4),(57,1,2,2,3,6,3,6,8,4),(58,1,2,2,4,6,3,6,8,6),(60,3,0,0,1,0,0,0,2,6),(62,1,0,0,2,4,3,4,8,4),(65,3,0,0,3,6,3,4,4,6),(72,1,1,2,2,2,1,2,4,4),(75,1,1,2,3,6,3,4,6,4),(77,1,2,2,4,6,0,6,8,6);
/*!40000 ALTER TABLE `test_inversor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_documento_user`
--

DROP TABLE IF EXISTS `tipo_documento_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_documento_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `tipodocumento_id` bigint(20) unsigned NOT NULL,
  `nro` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo_documento_user_user_id_foreign` (`user_id`),
  KEY `tipo_documento_user_tipodocumento_id_foreign` (`tipodocumento_id`),
  CONSTRAINT `tipo_documento_user_tipodocumento_id_foreign` FOREIGN KEY (`tipodocumento_id`) REFERENCES `tipo_documentos` (`id`),
  CONSTRAINT `tipo_documento_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_documento_user`
--

LOCK TABLES `tipo_documento_user` WRITE;
/*!40000 ALTER TABLE `tipo_documento_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_documento_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_documentos`
--

DROP TABLE IF EXISTS `tipo_documentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_documentos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_documentos`
--

LOCK TABLES `tipo_documentos` WRITE;
/*!40000 ALTER TABLE `tipo_documentos` DISABLE KEYS */;
INSERT INTO `tipo_documentos` VALUES (1,'DNI',NULL,NULL),(2,'CI',NULL,NULL),(3,'Pasaporte',NULL,NULL);
/*!40000 ALTER TABLE `tipo_documentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_domicilios`
--

DROP TABLE IF EXISTS `tipo_domicilios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_domicilios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_domicilios`
--

LOCK TABLES `tipo_domicilios` WRITE;
/*!40000 ALTER TABLE `tipo_domicilios` DISABLE KEYS */;
INSERT INTO `tipo_domicilios` VALUES (1,'Residencia',NULL,NULL);
/*!40000 ALTER TABLE `tipo_domicilios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_relacion_laboral_user`
--

DROP TABLE IF EXISTS `tipo_relacion_laboral_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_relacion_laboral_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `tiporelacionlaboral_id` bigint(20) unsigned NOT NULL,
  `actividad_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo_relacion_laboral_user_user_id_foreign` (`user_id`),
  KEY `tipo_relacion_laboral_user_tiporelacionlaboral_id_foreign` (`tiporelacionlaboral_id`),
  KEY `tipo_relacion_laboral_user_actividad_id_foreign` (`actividad_id`),
  CONSTRAINT `tipo_relacion_laboral_user_actividad_id_foreign` FOREIGN KEY (`actividad_id`) REFERENCES `actividades` (`id`),
  CONSTRAINT `tipo_relacion_laboral_user_tiporelacionlaboral_id_foreign` FOREIGN KEY (`tiporelacionlaboral_id`) REFERENCES `tipo_relacion_laborales` (`id`),
  CONSTRAINT `tipo_relacion_laboral_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_relacion_laboral_user`
--

LOCK TABLES `tipo_relacion_laboral_user` WRITE;
/*!40000 ALTER TABLE `tipo_relacion_laboral_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_relacion_laboral_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_relacion_laborales`
--

DROP TABLE IF EXISTS `tipo_relacion_laborales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_relacion_laborales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_relacion_laborales`
--

LOCK TABLES `tipo_relacion_laborales` WRITE;
/*!40000 ALTER TABLE `tipo_relacion_laborales` DISABLE KEYS */;
INSERT INTO `tipo_relacion_laborales` VALUES (1,'Relacion de dependencia',NULL,NULL),(2,'Desempleado',NULL,NULL),(3,'Independiente',NULL,NULL),(4,'Jubilado',NULL,NULL),(5,'Estudiante',NULL,NULL);
/*!40000 ALTER TABLE `tipo_relacion_laborales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last-name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pais_id` bigint(20) unsigned DEFAULT NULL,
  `estado_civil_id` bigint(20) unsigned DEFAULT NULL,
  `genero_id` bigint(20) unsigned DEFAULT NULL,
  `user_orig_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (39,'admin','admin@form.com',NULL,NULL,'2021-02-01 22:19:19','$2y$10$o2fly11.zZpCRGWUVlssw.Zi.XXPE4o4THV0DdEKj.BhEmFa4tr/m',NULL,'2021-02-02 02:51:25','2021-02-02 02:51:25',NULL,NULL,NULL,NULL,NULL),(42,'Eduardo Marcelo Canellada','eduardocanellada@gmail.com',NULL,NULL,'2021-02-02 15:35:08','$2y$10$Ag1NGoVmw2ucu7WyiPpSlO4R5WguoXBGIQ.bxZzZvbkF8TgakN5JW',NULL,'2021-02-02 15:34:34','2021-02-02 15:35:08',NULL,NULL,NULL,NULL,NULL),(43,'maria eugenia blanco','info@gmail.com',NULL,NULL,'2021-02-02 15:40:30','$2y$10$v7ZBZc.7wUR547mTduGxP.WBDeKxhazE4i/aYBv5Up9kBFyZ90E0S',NULL,NULL,NULL,NULL,NULL,NULL,NULL,42),(44,'Maria Laura','mlnazarian@sailinginversiones.com',NULL,NULL,'2021-02-02 20:09:02','$2y$10$DgzgQ/pW/74D1Q0OqZo9Nu7m5nqZKYK7qQLdzyppWA8SVYswfhl0m',NULL,'2021-02-02 20:08:40','2021-02-02 20:09:02',NULL,NULL,NULL,NULL,NULL),(45,'Mario Javier Diaz','marleasol2@gmail.com',NULL,NULL,'2021-02-02 20:10:09','$2y$10$zeiW6MJQwHYVOFEsVSQ.u.ASE1yGPlwgV4000lyBoAIIkVESyPVqy',NULL,'2021-02-02 20:09:42','2021-02-04 19:13:12',NULL,NULL,NULL,NULL,NULL),(47,'Eduardo Nazarian','martin.nazarian@gmail.com',NULL,NULL,'2021-02-02 20:15:06','$2y$10$0o0KPY9M2bW5CMLgfFg1PuFs1O.4jPLbabSOsQEIcJ5QvXS6ISSRi',NULL,NULL,NULL,NULL,NULL,NULL,NULL,44),(48,'Dgarcia','dgarcia@aaaa.com',NULL,NULL,'2021-02-02 20:17:28','$2y$10$nkkZ7b1UECjC2d3O3EkUW.18kip16jv1Lr0JD1og6fEBH0kxCi0cO',NULL,NULL,NULL,NULL,NULL,NULL,NULL,45),(49,'Leandro Miglioriso','marleasol2@hotmail.com',NULL,NULL,'2021-02-09 21:05:53','$2y$10$pX0yK2d87I.bQvVRwEUzKOmN73l8Nbs2jLeDFA4YBz4gVoeoqYFy.',NULL,'2021-02-09 21:04:58','2021-02-09 21:05:53',NULL,NULL,NULL,NULL,NULL),(50,'Gabriela Hillar','ghillar@angelfire.com',NULL,NULL,'2021-02-09 21:12:01','$2y$10$QYhElIS2o6OuoJ1cJDVVFOPMDGh4dU0hX.HXyCMbN9aNqemsOwoBO',NULL,NULL,NULL,NULL,NULL,NULL,NULL,49),(51,'Patricia Raquel Diaz','marioocteto@yahoo.com.ar',NULL,NULL,'2021-02-11 14:44:59','$2y$10$k8ZaTi0XmrqTDB947XlfEuDQ3oLGq2XtyB41h09rss8LhFCK9VkWG',NULL,'2021-02-11 14:43:34','2021-02-11 14:44:59',NULL,NULL,NULL,NULL,NULL),(52,'Sol Migliorisi','sol@xxx.com',NULL,NULL,'2021-02-11 14:56:35','$2y$10$cFh2V0NGAwvxjY9EUDTGW.tcEmLZQDqZUGH453BU.G57BJopifxhK',NULL,NULL,NULL,NULL,NULL,NULL,NULL,51),(53,'Martin  Rodriguez','pruebasgionline@yahoo.com',NULL,NULL,'2021-02-17 18:03:17','$2y$10$7./lo8oVEmQrV2d1fl3tu.wPZM6D9L.iEfpVlidhM5ggMYQ/m9unO',NULL,'2021-02-17 18:02:40','2021-02-17 18:03:17',NULL,NULL,NULL,NULL,NULL),(54,'Marianela Rodriguez','mrodri@yahoo.es',NULL,NULL,'2021-02-17 18:11:09','$2y$10$JWnhH7oqVyUO8cWX7GnA0OwpJlLSTMIgzsFXQDO7sdh0T39k1MM86',NULL,NULL,NULL,NULL,NULL,NULL,NULL,53),(55,'Maria Soledad Sotomayor','masolesotomayor@yahoo.com',NULL,NULL,'2021-02-19 12:41:27','$2y$10$5HrSy3RkjbT0Ucd.qFjMw.6hfHe3qy4hYSbpPOdrJwfxWqK09iocO',NULL,'2021-02-19 12:41:14','2021-02-19 12:41:27',NULL,NULL,NULL,NULL,NULL),(56,'Mariano Eriz','marian@xxx.it',NULL,NULL,'2021-02-19 12:48:13','$2y$10$9NnNg6bViIh1p/kbv6X38e95SK.E3tttey1YXSyLYVJpzuqvHdQIO',NULL,NULL,NULL,NULL,NULL,NULL,NULL,55),(57,'Juan Martín Santamaria','juanmasantamaria@yahoo.com',NULL,NULL,'2021-02-19 13:02:08','$2y$10$fSOgbD3i47NOv.sn4OBSRORdBlL/K4xgrdYIBlvkqCd./tabFNxZS',NULL,'2021-02-19 13:01:51','2021-02-19 13:02:08',NULL,NULL,NULL,NULL,NULL),(58,'Juan Ignacio Iribarren','nacho.iribarren@yahoo.com',NULL,NULL,'2021-02-19 13:12:39','$2y$10$RtNWCbwdj6YgWHrKx3p5u.eWhMBgvMIegB8GzwuZ0jEzOLB3KfBXa',NULL,'2021-02-19 13:12:23','2021-02-19 13:12:39',NULL,NULL,NULL,NULL,NULL),(59,'Juan Pablo Franco','jpfranc@gmail.com',NULL,NULL,'2021-02-19 13:19:16','$2y$10$YfiXUhIu.zj0BVl0KIHTve7cuJnxeX/Q/mRKx4TKe6O6/UinVv7qm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,58),(60,'Pablo','pabloragno@gmail.com',NULL,NULL,'2021-02-21 14:32:59','$2y$10$1aY2vjykO4eQYiSyF5Gl0eltxveaLyv9vBkhhNnKKRe3ReENVH1nm',NULL,'2021-02-21 14:32:42','2021-02-21 14:32:59',NULL,NULL,NULL,NULL,NULL),(61,'Maria Victoria Canellada','mcanellada@gmail.com',NULL,NULL,'2021-02-21 14:42:30','$2y$10$RlUR4xfNN4nkJHBIxOnXPO7vEnwvLjtLjzOSrEN1J3PCJXRbYZwIu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,60),(62,'Daniela Cocco','cocco.daniela@yahoo.com',NULL,NULL,'2021-02-22 15:24:51','$2y$10$SW2751R8fBdakuWJnYs0a.94ghUSjzQAyIVjpvgwyL68HwqX8p55C',NULL,'2021-02-22 15:24:39','2021-02-22 15:24:51',NULL,NULL,NULL,NULL,NULL),(63,'Walter Ricciardi','ricciardi.walter@gmail.com',NULL,NULL,'2021-02-22 15:37:13','$2y$10$ZOX6EoKo/uGV97c07Tb8rOeEM2ZPD64xLTFR/TckaPDvtmteyiKlW',NULL,NULL,NULL,NULL,NULL,NULL,NULL,62),(65,'Maria','mlnazarian@hotmail.com',NULL,NULL,'2021-02-25 14:45:50','$2y$10$BDv9JWt7s3nwZ.v13lJWFehSV/Mcx6hBnpS5pKgFupdUADAWsjXQ.',NULL,'2021-02-25 14:06:02','2021-02-25 15:20:16',NULL,NULL,NULL,NULL,NULL),(67,'Eduardo','nazarianml@gmail.com',NULL,NULL,'2021-02-25 15:28:46','$2y$10$zOqntRkzaLnoy71yVbDVIeaVLA9cN9sluPe78nwPORSaXGBGtMWqS',NULL,NULL,NULL,NULL,NULL,NULL,NULL,65),(68,'Mario','mailrepetido@hotmail.com',NULL,NULL,'2021-02-25 16:37:47','$2y$10$/qcFRB/APrB6b9q/eRwUEOePU9BELGTuPuH1Lz/fn/BwbngTve54u',NULL,NULL,NULL,NULL,NULL,NULL,NULL,65),(69,'DIEGO FERNANDO NIEMBRO','diego@xxx.com',NULL,NULL,'2021-02-25 16:38:35','$2y$10$XAAGE5/WacX.qY.WvEhY4OY0QvJpiawLkqiFhoU4Y1Tk3O7/1QHWG',NULL,NULL,NULL,NULL,NULL,NULL,NULL,62),(70,'Mariano Moreno','marianomoreno1300@yahoo.com.ar',NULL,NULL,NULL,'$2y$10$HIsrQMZT.LeAtUh6mjgneOvboyfFz6IFcDvidx2lcOFvtCJ0P/i52',NULL,'2021-03-05 19:32:08','2021-03-05 19:32:08',NULL,NULL,NULL,NULL,NULL),(71,'Mario Prueba','mario.prueba@yahoo.com.ar',NULL,NULL,NULL,'$2y$10$aiVcv6SevE8FT/95L.2QVOnnRRo3fx9m4EJ5o2YhTVjBuQjlqDVp.',NULL,'2021-03-05 19:39:13','2021-03-05 19:39:13',NULL,NULL,NULL,NULL,NULL),(72,'Mario Prueba 1','mario.prueba@yahoo.com',NULL,NULL,'2021-03-05 19:44:13','$2y$10$jY0UmYeZ9OfLupXQ9EKc3em.E.8NU1BnLsIO3L03DbEjJZnmkXJae',NULL,'2021-03-05 19:43:29','2021-03-05 19:44:13',NULL,NULL,NULL,NULL,NULL),(73,'Homero Prueba','prueprueba.prueba@yahoo.com',NULL,NULL,NULL,'$2y$10$LDB8n5RAizxCzNQXAEGwUOyEo4eADDOGQYQT6Ih1LnOI2zVIpGJPq',NULL,'2021-03-08 14:52:32','2021-03-08 14:52:32',NULL,NULL,NULL,NULL,NULL),(74,'Homero Prueba','pruebaprueba.prueba@yahoo.com',NULL,NULL,'2021-03-08 14:56:00','$2y$10$oYQllom5boeGkdfJi5CSN.SXrOiKr3N1otsi2ghS0WXfmTQigcDf6',NULL,'2021-03-08 14:55:26','2021-03-08 14:56:00',NULL,NULL,NULL,NULL,NULL),(75,'MARIO \"prueba 2\"','LapaditeMD@outlook.com',NULL,NULL,'2021-03-12 19:53:04','$2y$10$QZ1IvSkP8B.jaD/0sqjUBeAY/P5V985FUfrgLKxd8prGuNPFfnBo.',NULL,'2021-03-12 19:52:52','2021-03-12 19:53:04',NULL,NULL,NULL,NULL,NULL),(76,'Francisco Montes de Oca','franmontes@live.ar',NULL,NULL,'2021-03-12 20:28:10','$2y$10$GSKd4Q0afDcT4RjWNQ6vGuzcH0DBULHYb.1HEX5owS6gBsTtNuLnK',NULL,NULL,NULL,NULL,NULL,NULL,NULL,75),(77,'Fernando Acosta','facosta@grupoagg.com',NULL,NULL,'2021-03-29 13:17:36','$2y$10$qzaUTLDKvcdhIy17reul2.0qo/GsFx5uk72wEkK1.x9fMmio0reA.',NULL,'2021-03-29 13:17:16','2021-03-29 13:17:36',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-04 20:29:36