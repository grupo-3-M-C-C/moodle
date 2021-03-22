<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'movilidadconcabeza';
$CFG->dbuser    = 'root';
$CFG->dbpass    = '';
$CFG->prefix    = 'movilidadconcabeza';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8_general_ci',
);

$CFG->wwwroot   = 'http://localhost:8080/moodle_movilidadconcabeza';
$CFG->dataroot  = 'C:\\xampp\\moodledata\\moodle_movilidadconcabeza';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
