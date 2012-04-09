<?php
require_once __DIR__.'/../vendor/.composer/autoload.php';

use Silex\Application;

$c = new Calendar\Controller\LeapYearController();

$app = new Application();
$app['debug'] = true;

$app->get('/is_leap_year/{year}', 'Calendar\\Controller\\LeapYearController::indexAction');

return $app;
