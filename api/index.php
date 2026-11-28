<?php
declare(strict_types=1);

require __DIR__ . '/../includes/bootstrap.php';

$path = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/', '/') ?: '/';


// For now the wireframe is the public site. Set SHOW_WIREFRAME=0 in Vercel env vars to show the real PHP pages again.
if (getenv('SHOW_WIREFRAME') !== '0') {
    $wf = ['/' => 'index'];
    foreach (['index', 'home-mobile', 'treatments', 'treatment-detail', 'doctors', 'doctor-detail', 'plan-your-visit', 'faq', 'contact'] as $p) {
        $wf['/' . $p . '.html'] = $p;
    }
    if (isset($wf[$path])) {
        header('Content-Type: text/html; charset=utf-8');
        readfile(__DIR__ . '/../wireframe/' . $wf[$path] . '.html');
        exit;
    }
}

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
