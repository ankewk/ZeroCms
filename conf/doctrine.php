<?php
require_once "vendor/autoload.php";
require_once "config.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("db");
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."../db"), $isDevMode);
// $config = Setup::createYAMLMetadataConfiguration(array(__DIR__."../db/yml"), $isDevMode);

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => DBUSER,
    'password' => DBPASS,
    'dbname'   => DBNAME,
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);