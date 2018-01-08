<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;


$paths = array("src/Entity");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
	'host'	   => 'server',
    'password' => 'rygzup3n',
    'dbname'   => 'SCET',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$driver = new AnnotationDriver(new AnnotationReader(), $paths);
AnnotationRegistry::registerLoader('class_exists');
$config->setMetadataDriverImpl($driver);
$entityManager = EntityManager::create($dbParams, $config);

?>