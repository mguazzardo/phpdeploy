<?php

/**
 * Configuration for database connection
 *
 */

$host       = "mariadb";
$username   = "user1";
$password   = "master";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
