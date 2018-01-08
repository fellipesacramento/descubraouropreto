<?php
//Importar o autoload
require_once "bootstrap.php";

use Doctrine\ORM\Mapping\Driver\DatabaseDriver;
use Doctrine\ORM\Tools\DisconnectedClassMetadataFactory;
use Doctrine\ORM\Tools\Export\ClassMetadataExporter;
Use Doctrine\ORM\Tools\EntityGenerator;

//Lendo o banco de dados, criando o driver
$driver = new DatabaseDriver($entityManager->getConnection()->getSchemaManager());
//Setando o Namespace ao driver
$driver->setNamespace('AppEntity');
$entityManager->getConfiguration()->setMetadataDriverImpl($driver);

//Preparando para realizar o mapeamento
$classMetaData = new DisconnectedClassMetadataFactory();
$classMetaData->setEntityManager($entityManager);
$metadata = $classMetaData->getAllMetadata();

//Criamos o exporter, informando que a classe exportada conterá annotations, poderia ser XML, YAML, YML ou PHP
// E setamos a pasta do nosso projeto onde ficarão as entidades conforme o NameSpace que setamos anteriormente
$exporter = (new ClassMetadataExporter())->getExporter('annotation', 'model/EntityTemp');
//Criamos o gerador de entidades colocando-o no exporter, jutamento com os metadados vindos do mapeamento.
$exporter->setEntityGenerator(new EntityGenerator());
$exporter->setMetadata($metadata);
//Exportamos!
$exporter->export();