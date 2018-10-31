<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
require_once 'conf/doctrine.php';
return ConsoleRunner::createHelperSet($entityManager);
