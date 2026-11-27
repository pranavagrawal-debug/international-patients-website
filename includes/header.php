<?php
$page = $GLOBALS['page'];
$path = rtrim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/', '/') ?: '/';
$nav = [
    '/treatments'      => 'Treatments',
    '/doctors'         => 'Doctors',
    '/plan-your-visit' => 'Plan your visit',
    '/faq'             => 'FAQ',
    '/contact'         => 'Contact',
];
$wa = whatsapp_link('Hello, I would like to know more about treatment.');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($page['title']) ?></title>
<?php if ($page['description'] !== ''): ?>
<meta name="description" content="<?= e($page['description']) ?>">
<?php endif; ?>
<link rel="stylesheet" href="/assets/style.css">
</head>
<body>
<header class="site-header">
  <div class="wrap bar">
    <a class="brand" href="/"><?= e(site('name')) ?><span><?= e(site('tagline')) ?></span></a>
    <input type="checkbox" id="menu-toggle" class="menu-toggle" aria-label="Menu">
    <label for="menu-toggle" class="menu-button" aria-hidden="true">Menu</label>
    <nav class="nav">
      <?php foreach ($nav as $href => $label): ?>
        <a href="<?= e($href) ?>"<?= $path === $href ? ' class="active"' : '' ?>><?= e($label) ?></a>
      <?php endforeach; ?>
      <?php if ($wa !== ''): ?>
        <a class="button small" href="<?= e($wa) ?>" rel="noopener">WhatsApp us</a>
      <?php else: ?>
        <a class="button small" href="/contact">Send an enquiry</a>
      <?php endif; ?>
    </nav>
  </div>
</header>
<main>
