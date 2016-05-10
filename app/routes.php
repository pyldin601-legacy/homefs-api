<?php
/**
 * @author Roman Gemini <roman_gemini@ukr.net>
 * @date 10.05.16
 * @time 19:08
 */

$router = new Kote\Router\Router();

$router->get('/', function () { include '../app/templates/index.php'; });

$router->run();
