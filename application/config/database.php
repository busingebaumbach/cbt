<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'	=> '',
    'hostname' => getenv('DB_HOST') ?: 'c5mw0maww27ewett8lszwo5s',
    'username' => getenv('DB_USERNAME') ?: 'garuda_cbt_user',
    'password' => getenv('DB_PASSWORD') ?: 'EyKcuEXvGqLIHtL9NxOew4NF63nK31I4HBAvmHUKa9sneskNWl2nf4QBWDfDGST4',
    'database' => getenv('DB_DATABASE') ?: 'garuda_cbt_db',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
