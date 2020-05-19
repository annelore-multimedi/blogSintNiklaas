<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
//deze lijn aanpassen bij online plaatsen (site root vragen aan je hosting)
// C:/wamp64/www/blogStNiklaas
define('SITE_ROOT', DS .  'wamp64' . DS . 'www' . DS . 'blogStNiklaas');
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'includes');
defined('IMAGES_PATH') ? null : define('IMAGES_PATH', SITE_ROOT . DS . 'admin' . DS . 'img');

require_once ('functions.php');
require_once ('config.php');
require_once ('Database.php');
require_once ('Db_object.php');
require_once ('User.php');
require_once ('Session.php');
require_once ('Photo.php');
?>

