<?php
declare(strict_types=1);

require __DIR__ . '/../includes/bootstrap.php';

$path = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/', '/') ?: '/';

// URL => file in /pages
$routes = [
    '/'                => 'home',
    '/treatments'      => 'treatments',
    '/doctors'         => 'doctors',
    '/plan-your-visit' => 'plan-your-visit',
    '/faq'             => 'faq',
    '/contact'         => 'contact',
];

// Individual treatment pages, e.g. /treatments/rhinoplasty
foreach (site('treatments', []) as $t) {
    $routes['/treatments/' . $t['slug']] = 'treatment';
}

if (!isset($routes[$path])) {
    http_response_code(404);
    require __DIR__ . '/../pages/404.php';
    exit;
}

$GLOBALS['route'] = $path;
require __DIR__ . '/../pages/' . $routes[$path] . '.php';
