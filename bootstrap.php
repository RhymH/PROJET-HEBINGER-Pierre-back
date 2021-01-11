<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
date_default_timezone_set('America/Lima');
require_once "vendor/autoload.php";
$isDevMode = true;
$config = Setup::createYAMLMetadataConfiguration(array(__DIR__ . "/config/yaml"), $isDevMode);
$conn = array(
'host' => 'ec2-52-211-161-21.eu-west-1.compute.amazonaws.com',
'driver' => 'pdo_pgsql',
'user' => 'atzdekcunqdnyc',
'password' => '2a2243baad4be355b0814cc0a831b2341a7330041f5adab3a9e7765d25a0dc61',
'dbname' => 'd4hssonrqf6bf8',
'port' => '5432'
);
$entityManager = EntityManager::create($conn, $config);
